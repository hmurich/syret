<?php
namespace App\Http\Controllers\Front\Painter;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Model\SysCity;
use App\Model\Painter;
use App\Model\PainterCat;
use App\Model\SysPainterCat;

use Hash;

class ProfileController extends Controller{
    function getChangePass(Request $request){
        $user = $request->user();
        $item = Painter::where('user_id', $user->id)->first();

        $ar = array();
        $ar['title'] = 'Данные входа';
        $ar['item'] = $item;
        $ar['user'] = $user;
        $ar['ar_city'] = SysCity::pluck('name', 'id')->toArray();

        return view('front.painter.change_pass', $ar);
    }

    function postChangePass(Request $request){
        $user = $request->user();
        $item = Painter::where('user_id', $user->id)->first();

        $item->city_id = $request->city_id;
        $item->save();

        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->back()->with('success', 'Сохранено');
    }
    function getIndex(Request $request){
        $user = $request->user();
        $item = Painter::where('user_id', $user->id)->first();

        $ar = array();
        $ar['title'] = 'Профиль';
        $ar['item'] = $item;
        $ar['cats'] = SysPainterCat::all();
        $ar['user_cat'] = PainterCat::where('painter_id', $item->id)->pluck('val_id')->toArray();

        return view('front.painter.profile', $ar);
    }

    function postProfile(Request $request) {
        $user = $request->user();


        $painter = Painter::where('user_id', $user->id)->first();

        $user_cat = PainterCat::where('painter_id', $painter->id)->pluck('val_id')->toArray();
        foreach($request->cat as $cat_id => $ar_val){
            foreach ($ar_val as $val_id => $v) {
                if (in_array($val_id, $user_cat)){
                    $key = array_search ($val_id, $user_cat);
                    unset($user_cat[$key]);
                    continue;
                }

                $new_cat = new PainterCat();
                $new_cat->cat_id = $cat_id;
                $new_cat->val_id = $val_id;
                $new_cat->painter_id = $painter->id;
                $new_cat->save();
            }
        }

        PainterCat::where('painter_id', $painter->id)->whereIn('val_id', $user_cat)->delete();

        if ($request->hasFile('logo')){
            $file_name =  time().rand(0,9).'.'.$request->logo->getClientOriginalExtension();
            $painter->logo = $request->logo->storeAs('store/'.date('Y').'/'.date('m').'/'.date('d'), $file_name);
        }

        $painter->name = $request->name;
        $painter->phones = $request->phones;
        $painter->avg_price = $request->avg_price;
        $painter->note = $request->note;
        $painter->social_insta = $request->social_insta;
        $painter->social_vk = $request->social_vk;
        $painter->social_db = $request->social_db;
        $painter->social_skype = $request->social_skype;
        $painter->save();

        return redirect()->back()->with('success', 'Сохранено');
    }
}

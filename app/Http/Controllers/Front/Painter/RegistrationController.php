<?php
namespace App\Http\Controllers\Front\Painter;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Model\SysCity;
use App\Model\Painter;

class RegistrationController extends Controller{
    function getIndex(Request $request){
        $user = $request->user();

        $ar = array();
        $ar['title'] = 'Завершение регистрации';
        $ar['ar_city'] = SysCity::pluck('name', 'id')->toArray();
        $ar['item'] = Painter::where('user_id', $user->id)->first();

        return view('front.painter.registration', $ar);
    }

    function postProfile(Request $request) {
        //dd($request->all());
        $user = $request->user();

        $painter = Painter::where('user_id', $user->id)->first();
        $painter->city_id = $request->city_id;
        $painter->name = $request->name;
        $painter->phones = $request->phones;
        $painter->note = $request->note;
        $painter->save();

        return redirect()->back()->with('success', 'Сохранено');
    }
}

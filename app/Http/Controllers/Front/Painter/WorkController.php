<?php
namespace App\Http\Controllers\Front\Painter;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Model\Painter;
use App\Model\PainterWork;

class WorkController extends Controller{
    function getIndex(Request $request){
        $user = $request->user();
        $painter = Painter::where('user_id', $user->id)->first();

        $ar = array();
        $ar['title'] = 'Ваши работы';
        $ar['user'] = $user;
        $ar['painter'] = $painter;
        $ar['works'] = PainterWork::where('painter_id', $painter->id)->orderBy('id', 'desc')->get();

        return view('front.painter.work', $ar);
    }

    function postIndex(Request $request){
        $user = $request->user();
        $painter = Painter::where('user_id', $user->id)->first();

        if ($request->hasFile('img_path')){
            $file_name =  time().rand(0,9).'.'.$request->img_path->getClientOriginalExtension();

            $img = new PainterWork();
            $img->painter_id = $painter->id;
            $img->img_path = $request->img_path->storeAs('store/'.date('Y').'/'.date('m').'/'.date('d'), $file_name);
            $img->note = $request->note;
            $img->save();
        }

        return redirect()->back()->with('success', 'Сохранено');
    }
}

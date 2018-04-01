<?php
namespace App\Http\Controllers\Admin;

use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\SysPainterCat;

class SysPainterCatController extends Controller{
    function getIndex(Request $request){
        $items = SysPainterCat::where('id', '>', 0);

        $ar = array();
        $ar['title'] = 'Типы справочников';
        $ar['ar_input'] = $request->all();
        $ar['items'] = $items->orderBy('id', 'desc')->paginate(25);

        return view('admin.sys.paint_cat.index', $ar);
    }

    function getItem(Request $request, $id = 0){
        $item = SysPainterCat::find($id);

        $ar = array();
        if (!$item){
            $ar['title'] = 'Добавление ';
            $ar['action'] = action('Admin\SysPainterCatController@postItem');
        }
        else {
            $ar['title'] = 'Изменение ';
            $ar['action'] = action('Admin\SysPainterCatController@postItem', $item->id);
            $ar['item'] = $item;
        }

        return view('admin.sys.paint_cat.item', $ar);
    }

    function postItem(Request $request, $id = 0){
        $item = SysPainterCat::find($id);
        if (!$item)
            $item = new SysPainterCat();
        $item->name         = $request->input('name');
        $item->save();

        return redirect()->action('Admin\SysPainterCatController@getIndex')->with('success', 'Сохранено');
    }


    function getDelete($id){
        DB::beginTransaction();

        $item = SysPainterCat::findOrFail($id);
        $item->delete();

        DB::commit();

        return redirect()->back()->with('success', 'Удалено');
    }
}

<?php
namespace App\Http\Controllers\Admin;

use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\SysPainterVal;
use App\Model\SysPainterCat;

class SysPainterValController extends Controller{
    function getIndex(Request $request){
        $items = SysPainterVal::where('id', '>', 0);

        $ar = array();
        $ar['title'] = 'Справочники';
        $ar['ar_input'] = $request->all();
        $ar['items'] = $items->orderBy('id', 'desc')->paginate(25);
        $ar['ar_type'] = SysPainterCat::pluck('name', 'id')->toArray();

        return view('admin.sys.paint_val.index', $ar);
    }

    function getItem(Request $request, $id = 0){
        $item = SysPainterVal::find($id);

        $ar = array();
        if (!$item){
            $ar['title'] = 'Добавление ';
            $ar['action'] = action('Admin\SysPainterValController@postItem');
        }
        else {
            $ar['title'] = 'Изменение ';
            $ar['action'] = action('Admin\SysPainterValController@postItem', $item->id);
            $ar['item'] = $item;
        }
        $ar['ar_type'] = SysPainterCat::pluck('name', 'id')->toArray();

        return view('admin.sys.paint_val.item', $ar);
    }

    function postItem(Request $request, $id = 0){
        $item = SysPainterVal::find($id);
        if (!$item)
            $item = new SysPainterVal();
        $item->type_id      = $request->input('type_id');
        $item->name         = $request->input('name');
        $item->save();

        return redirect()->action('Admin\SysPainterValController@getIndex')->with('success', 'Сохранено');
    }


    function getDelete($id){
        DB::beginTransaction();

        $item = SysPainterVal::findOrFail($id);
        $item->delete();

        DB::commit();

        return redirect()->back()->with('success', 'Удалено');
    }
}

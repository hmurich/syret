<?php
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Hash;
use Auth;

use Validator;

use App\Model\SysCity;
use App\User;
use App\Model\Painter;

class RegistrationController extends Controller{
    function getIndex (){
        $ar = array();
        $ar['title'] = 'Регистрация';
        $ar['ar_city'] = SysCity::pluck('name', 'id')->toArray();

        return view('front.registr.index', $ar);
    }

    function postIndex (Request $request){
        $validator = Validator::make($request->all(), [
                'name' => 'required',
                'city_id' => 'required',
                'email' => 'required',
                'password' => 'required',
            ]);

        if ($validator->fails())
            return redirect()->back()->withErrors($validator);

        if (User::where('email', $request->email)->count() > 0)
            return redirect()->back()->with('error', 'Указанный email уже существует');

        DB::beginTransaction();

        $user = new User();
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->type_id = 2;
        $user->save();

        $painter = new Painter();
        $painter->city_id = $request->city_id;
        $painter->name = $request->name;
        $painter->user_id = $user->id;
        $painter->save();

        Auth::loginUsingId($user->id);
        DB::commit();

        return redirect()->action('Front\Painter\ProfileController@getIndex')->with('success', 'Сохранено');
    }

}

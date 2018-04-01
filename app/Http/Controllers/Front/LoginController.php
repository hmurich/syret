<?php
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Hash;
use Auth;

class LoginController extends Controller{
    function getLogin (){
        $ar = array();
        $ar['title'] = 'Форма входа';
        $ar['action'] = action('Front\LoginController@postLogin');

        return view('front.login.index', $ar);
    }

    function postLogin(Request $request){
        if (!Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')]))
            return back()->with('error', 'Не правильный email/пароль');

        $user = Auth::user();
        if ($user->type_id == 1)
            return redirect()->action('Admin\IndexController@getIndex');
        if ($user->type_id == 2)
            return redirect()->action('Front\Painter\ProfileController@getIndex');

    }

    function getLogout(){
        Auth::logout();

        return redirect()->to('/');
    }

}

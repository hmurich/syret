<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class IndexController extends Controller{
    function getIndex (){
        $ar = array();
        $ar['title'] = 'Главная';

        return view('admin.example', $ar);
    }

}

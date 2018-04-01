<?php
Route::get('/', 'Front\IndexController@getIndex');

Route::get('registration', 'Front\RegistrationController@getIndex');
Route::post('registration', 'Front\RegistrationController@postIndex');

Route::get('login', 'Front\LoginController@getLogin');
Route::post('login', 'Front\LoginController@postLogin');
Route::get('logout', 'Front\LoginController@getLogout');

Route::group(['middleware' => ['auth.painter']], function () {

    // work routes
    Route::get('painter/work', 'Front\Painter\WorkController@getIndex');
    Route::post('painter/work', 'Front\Painter\WorkController@postIndex');
    // change pass routes
    Route::get('painter/pass', 'Front\Painter\ProfileController@getChangePass');
    Route::post('painter/pass', 'Front\Painter\ProfileController@postChangePass');
    // profile routes
    Route::get('painter/profile', 'Front\Painter\ProfileController@getIndex');
    Route::post('painter/profile', 'Front\Painter\ProfileController@postProfile');
});



Route::get('adminka/login', 'Admin\AuthController@getLogin');
Route::post('adminka/login', 'Admin\AuthController@postLogin');
Route::group(['middleware' => ['auth.admin']], function () {
    Route::get('adminka', 'Admin\IndexController@getIndex');

    // sys-paint-val routes
    Route::get('adminka/sys-paint-val', 'Admin\SysPainterValController@getIndex');
    Route::get('adminka/sys-paint-val/item/{id?}', 'Admin\SysPainterValController@getItem');
    Route::post('adminka/sys-paint-val/item/{id?}', 'Admin\SysPainterValController@postItem');
    Route::get('adminka/sys-paint-val/delete/{id}', 'Admin\SysPainterValController@getDelete');

    // sys-paint-cat routes
    Route::get('adminka/sys-paint-cat', 'Admin\SysPainterCatController@getIndex');
    Route::get('adminka/sys-paint-cat/item/{id?}', 'Admin\SysPainterCatController@getItem');
    Route::post('adminka/sys-paint-cat/item/{id?}', 'Admin\SysPainterCatController@postItem');
    Route::get('adminka/sys-paint-cat/delete/{id}', 'Admin\SysPainterCatController@getDelete');

    //site setting routes
    Route::get('adminka/site-setting', 'Admin\SiteSettingController@getIndex');
    Route::post('adminka/site-setting', 'Admin\SiteSettingController@postSave');

    Route::get('adminka/profile', 'Admin\AuthController@getProfile');
    Route::post('adminka/profile', 'Admin\AuthController@postProfile');
    Route::get('adminka/logout', 'Admin\AuthController@getLogout');
});

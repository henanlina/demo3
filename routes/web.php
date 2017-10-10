<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['namespace'=>'Auth'],function (){
    Route::get('login/login','LoginController@login');
});

Route::get('index','IndexController@index');

//访问方式 xxx.xxx.xx/test/index 输出route index
Route::get('test/index','TestController@index')->name('route');

Route::get('/', function () {
    return view('welcome');
});

//基本路由
Route::get('foo',function (){
    return 'hello world';
});

//访问方式 xxx.xxx.xx/user3?type=1     输出 match route test
Route::match(['get','post'],'/user3/',function (){
    return 'match route test';
});
//路由参数 访问方式 xxx.xxx.xx/user4/11111 输出 User:1212
Route::get('user4/{id}',function ($id){
    return 'User:'.$id;
});
//给变量指定默认值 访问方式 xxx.xxx.xx/user2/param? 输出param
//给变量指定默认值 访问方式 xxx.xxx.xx/user2?       输出john
Route::get('user2/{name?}',function ($name='john'){
    return $name;
});
//正则约束 访问方式 xxx.xxx.xx/user5/12345   输出ID:12345
//正则约束 访问方式 xxx.xxx.xx/user5/123aaa  输出错误
Route::get('user5/{id}',function ($id){
    return 'ID:'.$id;
})->where('id','[0-9]+');





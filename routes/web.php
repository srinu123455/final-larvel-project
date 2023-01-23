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

Route::get('/', function () {
    return view('welcome');
});
           /*view->createfile*/
Route::get('create', function () {
    return view('create');
     });
            /*showcontroller->save method,this save method include create page*/

Route::post('save','showcontroller@save'); 
          /*it is a data retive from database into table*/

Route::get('index','showcontroller@index');


Route::get('nav','showcontroller@navi');

/**/



         /* it is a home view page */
Route::get('edit', function () {
    return view('edit');
});






Route::get('studentdata', function () {
    return view('studentdatacreate');
});
Route::post('saved','studentcontroller@savestudentdata'); 
Route::get('index2','studentcontroller@index2');

/*Route::get('studenteditdata', function () {
    return view('studenteditdata');
});*/
Route::get('studenteditdata/{id}','studentcontroller@studenteditdata');
Route::put('studentupdate/{id}','studentcontroller@studentupdatedata');
Route::get('delete/{id}','studentcontroller@delete');




Route::get('bootstrap', function () {
    return view('bootstrap');
});


Route::get('grid', function () {
    return view('gridpage');
});









Route::get('employeecreate', function () {
    return view('employeecreate');
});
Route::post('saveemp','employeecontroller@saveemp');
Route::get('index4','employeecontroller@index4'); 
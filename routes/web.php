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
//Menu Route
Route::get('/','Landing@home');
Route::get('/masuk','Landing@login');
Route::get('/daftar','Landing@register');
//Calon Route
Route::get('/calon','Calon@home');
Route::get('/calon/isibio','Calon@isibio');
//Admin Route
Route::get('/admin','Admin@home');
Route::get('/admin/calon','Admin@calon');
//Public Route
Route::get('/logout',function(){
  session()->flush();
  return redirect('/');
});

//END Menu Route
//API Route
Route::get('/api/createsession',function(){
  session(["type"=>"admin"]);
  return ("Created");
});
Route::get('/api/destroysession',function(){
  session()->flush();
  return ("Destroyed");
});
//Public API
Route::post('/api/login','Rest@signin');
Route::post('/api/register','Rest@register');
// API Admin
Route::get('/api/userread','Rest@userread');
Route::get('/api/datacalon','Rest@datacalon');
Route::get('/api/detildatacalon/{id}','Rest@detildatacalon');
Route::post('/api/userinsert','Rest@userinsert');
Route::post('/api/userupdate','Rest@userupdate');
Route::get('/api/userdelete/{id}','Rest@userdelete');
Route::get('/api/calonread/{id}','Rest@calonread');
Route::post('/api/caloninsert','Rest@caloninsert');
Route::post('/api/calonupdate','Rest@calonupdate');
Route::get('/api/calondelete/{id}','Rest@calondelete');

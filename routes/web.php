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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/accesorestringido', 'HomeController@index2')->name('home2');

Route::get('/agregaracudiente', 'PersonasController@index')->name('addacu')->middleware('auth', 'role:operator,admin');
Route::get('/agregarprofesional', 'PersonasController@index2')->name('addapro')->middleware('auth', 'role:operator,admin');
Route::get('/agregaradultomayor', 'PersonasController@index3')->name('addadul')->middleware('auth', 'role:operator,admin');
Route::get('/sisben', 'PersonasController@indexs')->name('vsisben')->middleware('auth', 'role:operator,admin');

Route::get('/listacudientes', 'PersonasController@leer')->name('listacudientes')->middleware('auth', 'role:operator,admin,psicologia,nutricion,enfermeria,trabajosocial,actividadfisica,fonoaudiologia');
Route::get('/listprofesionales', 'PersonasController@leer2')->name('listprofesionales')->middleware('auth', 'role:operator,admin');
Route::get('/listadultosmayores', 'PersonasController@leer3')->name('listadultosmayores')->middleware('auth', 'role:operator,admin,psicologia,nutricion,enfermeria,trabajosocial,actividadfisica,fonoaudiologia');
Route::get('/adminroles', 'PersonasController@leer4')->name('listusers')->middleware('auth', 'role:operator,admin');
Route::get('/reporte', 'PersonasController@reporte')->name('listreport')->middleware('auth', 'role:operator,admin');


Route::post('/agregar1', 'PersonasController@store')->name('store')->middleware('auth', 'role:operator,admin');
Route::post('/agregar2', 'PersonasController@store2')->name('store2')->middleware('auth', 'role:operator,admin');
Route::post('/agregar3', 'PersonasController@store3')->name('store3')->middleware('auth', 'role:operator,admin');

Route::get('/ficha/{id}', 'PersonasController@ficha')->name('fichat')->middleware('auth', 'role:operator,admin,psicologia,nutricion,enfermeria,trabajosocial,actividadfisica,fonoaudiologia');

Route::get('/cedula/{id}', 'PersonasController@viewspdfs1')->name('viewp1')->middleware('auth', 'role:operator,admin,psicologia,nutricion,enfermeria,trabajosocial,actividadfisica,fonoaudiologia');
Route::get('/historia_clinica/{id}', 'PersonasController@viewspdfs5')->name('viewp5')->middleware('auth', 'role:operator,admin,psicologia,nutricion,enfermeria,trabajosocial,actividadfisica,fonoaudiologia');
Route::get('/declaracion_consentimiento/{id}', 'PersonasController@viewspdfs2')->name('viewp2')->middleware('auth', 'role:operator,admin,psicologia,nutricion,enfermeria,trabajosocial,actividadfisica,fonoaudiologia');
Route::get('/certificacion_eps/{id}', 'PersonasController@viewspdfs4')->name('viewp4')->middleware('auth', 'role:operator,admin,psicologia,nutricion,enfermeria,trabajosocial,actividadfisica,fonoaudiologia');
Route::get('/puntaje_sisben/{id}', 'PersonasController@viewspdfs6')->name('viewp6')->middleware('auth', 'role:operator,admin,psicologia,nutricion,enfermeria,trabajosocial,actividadfisica,fonoaudiologia');
Route::get('/disentimiento_informado/{id}', 'PersonasController@viewspdfs3')->name('viewp3')->middleware('auth', 'role:operator,admin,psicologia,nutricion,enfermeria,trabajosocial,actividadfisica,fonoaudiologia');

Route::put('/updatepersona/{id}', 'PersonasController@updatepersonas')->name('update2')->middleware('auth', 'role:operator,admin');

Route::get('/editaracudiente/{id}', 'PersonasController@edit1')->name('editar1')->middleware('auth', 'role:operator,admin');
Route::put('/updateacudiente/{id}', 'PersonasController@updateacudientes')->name('update1')->middleware('auth', 'role:operator,admin');

Route::get('/editarprofesional/{id}', 'PersonasController@edit2')->name('editar2')->middleware('auth', 'role:operator,admin');
Route::put('/updateprofesional/{id}', 'PersonasController@updateprofesionales')->name('update3')->middleware('auth', 'role:operator,admin');

Route::get('/editaradulto/{id}', 'PersonasController@edit3')->name('editar3')->middleware('auth', 'role:operator,admin');
Route::put('/updateadulto/{id}', 'PersonasController@updateadultos')->name('update4')->middleware('auth', 'role:operator,admin');

Route::get('/bitacora', 'PersonasController@bitacoras')->name('bita')->middleware('auth', 'role:admin,psicologia,nutricion,enfermeria,trabajosocial,actividadfisica,fonoaudiologia');
Route::post('/agregarb', 'PersonasController@storeb')->name('storeb')->middleware('auth', 'role:admin,psicologia,nutricion,enfermeria,trabajosocial,actividadfisica,fonoaudiologia');


Route::get('/nutricion', 'NutricionController@index')->name('nutricion')->middleware('auth', 'role:nutricion,admin');
Route::post('/agregarnutricion', 'NutricionController@store')->name('storen')->middleware('auth', 'role:nutricion,admin');

Route::get('/enfermeria', 'EnfermeriaController@index')->name('enfermeria')->middleware('auth', 'role:enfermeria,admin');
Route::post('/agregarenfermeria', 'EnfermeriaController@store')->name('storeen')->middleware('auth', 'role:enfermeria,admin');

Route::get('/fonoaudiolgia', 'FonoaudiologiaController@index')->name('fonoaudio')->middleware('auth', 'role:fonoaudiologia,admin');
Route::post('/agregaraudiolgia', 'FonoaudiologiaController@store')->name('storeaudio')->middleware('auth', 'role:fonoaudiologia,admin');

Route::get('/psicosocial', 'PsicosocialController@index')->name('psicosocial')->middleware('auth', 'role:psicologia,admin');
Route::get('/psicosocial2', 'PsicosocialController@index2')->name('psicosocial2')->middleware('auth', 'role:psicologia,admin');
Route::get('/psicosocial3', 'PsicosocialController@index3')->name('psicosocial3')->middleware('auth', 'role:psicologia,admin');
Route::get('/psicosocial4', 'PsicosocialController@index4')->name('psicosocial4')->middleware('auth', 'role:psicologia,admin');
Route::get('/psicosocial5', 'PsicosocialController@index5')->name('psicosocial5')->middleware('auth', 'role:psicologia,admin');

Route::post('/agregarpsicosocial', 'PsicosocialController@store')->name('storepsi')->middleware('auth', 'role:psicologia,admin');
Route::post('/agregarpsicosocial2', 'Psicosocial2Controller@store')->name('storepsi2')->middleware('auth', 'role:psicologia,admin');
Route::post('/agregarpsicosocial3', 'Psicosocial3Controller@store')->name('storepsi3')->middleware('auth', 'role:psicologia,admin');
Route::post('/agregarpsicosocial4', 'Psicosocial4Controller@store')->name('storepsi4')->middleware('auth', 'role:psicologia,admin');
Route::post('/agregarpsicosocial5', 'Psicosocial5Controller@store')->name('storepsi5')->middleware('auth', 'role:psicologia,admin');

Route::get('/trabajosocial', 'TrabajosocialController@index')->name('trabajosocial')->middleware('auth', 'role:trabajosocial,admin');
Route::post('/agregartrabajosocial', 'TrabajosocialController@store')->name('storetbsocial')->middleware('auth', 'role:trabajosocial,admin');

Route::get('/actividadfisica', 'TrabajofisicoController@index')->name('actividadfisica')->middleware('auth', 'role:actividadfisica,admin');
Route::post('/agregartrabajofisico', 'TrabajofisicoController@store')->name('storefisico')->middleware('auth', 'role:actividadfisica,admin');

Route::get('/instrumento/{id}', 'PersonasController@verinstrumento')->name('instrumentot')->middleware('auth', 'role:operator,admin,psicologia,nutricion,enfermeria,trabajosocial,actividadfisica,fonoaudiologia');
Route::get('/nutricion/{id}', 'PersonasController@vernutricion')->name('nutriciont')->middleware('auth', 'role:operator,admin,psicologia,nutricion,enfermeria,trabajosocial,actividadfisica,fonoaudiologia');
Route::get('/enfermeria/{id}', 'PersonasController@verenfermeria')->name('enfermeriat')->middleware('auth', 'role:operator,admin,psicologia,nutricion,enfermeria,trabajosocial,actividadfisica,fonoaudiologia');
Route::get('/fonoaudiologia/{id}', 'PersonasController@verfonoaudio')->name('fonot')->middleware('auth', 'role:operator,admin,psicologia,nutricion,enfermeria,trabajosocial,actividadfisica,fonoaudiologia');
Route::get('/psicosocial/{id}', 'PersonasController@verpsico')->name('psicot')->middleware('auth', 'role:operator,admin,psicologia,nutricion,enfermeria,trabajosocial,actividadfisica,fonoaudiologia');
Route::get('/psicosocial2/{id}', 'PersonasController@verpsico2')->name('psicot2')->middleware('auth', 'role:operator,admin,psicologia,nutricion,enfermeria,trabajosocial,actividadfisica,fonoaudiologia');
Route::get('/psicosocial3/{id}', 'PersonasController@verpsico3')->name('psicot3')->middleware('auth', 'role:operator,admin,psicologia,nutricion,enfermeria,trabajosocial,actividadfisica,fonoaudiologia');
Route::get('/psicosocial4/{id}', 'PersonasController@verpsico4')->name('psicot4')->middleware('auth', 'role:operator,admin,psicologia,nutricion,enfermeria,trabajosocial,actividadfisica,fonoaudiologia');
Route::get('/psicosocial5/{id}', 'PersonasController@verpsico5')->name('psicot5')->middleware('auth', 'role:operator,admin,psicologia,nutricion,enfermeria,trabajosocial,actividadfisica,fonoaudiologia');
Route::get('/trabajosocial/{id}', 'PersonasController@vertrabajosocial')->name('trabajosocialt')->middleware('auth', 'role:operator,admin,psicologia,nutricion,enfermeria,trabajosocial,actividadfisica,fonoaudiologia');
Route::get('/trabajofisico/{id}', 'PersonasController@vertrabajofisico')->name('trabajofisicot')->middleware('auth', 'role:operator,admin,psicologia,nutricion,enfermeria,trabajosocial,actividadfisica,fonoaudiologia');

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

Route::get('master', function () {
    return view('master');
});
Route::get('catalogo', function () {
    $tipos = \llanteria\Tipo::all();
    $marcas = \llanteria\Marca::all();
    return view('catalogo', compact('tipos', 'marcas'));
});
Route::get('productos_tipo/{id}', function($id){
    $productos = \Illuminate\Support\Facades\DB::table('productos')->where('CodTipo', $id)->paginate(9);
    $tipos = \llanteria\Tipo::all();
    $marcas = \llanteria\Marca::all();
    return view('productos', compact('productos', 'tipos', 'marcas'));
});
Route::get('productos_marca/{id}', function($id){
    $productos = \Illuminate\Support\Facades\DB::table('productos')->where('CodMarca', $id)->paginate(9);
    $tipos = \llanteria\Tipo::all();
    $marcas = \llanteria\Marca::all();
    return view('productos_marca', compact('productos', 'tipos', 'marcas'));
});
Route::get('simple/{id}', function($id){
    $producto = \Illuminate\Support\Facades\DB::table('productos')->where('id', $id)->first();
    $tipos = \llanteria\Tipo::all();
    $marcas = \llanteria\Marca::all();
    return view('simple', compact('producto', 'tipos', 'marcas'));
});
Route::get('contacto', function () {
    return view('contacto');
});
Route::get('servicios', function () {
    return view('servicios');
});

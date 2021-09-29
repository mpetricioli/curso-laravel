<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return 'Styde';

    */

Route::get('/', function() {
    //return 'Aqui estará nuestro listado de notas';
    $notes = [ 
        'Mi primera nota',
        'Mi segunda nota',
        'Mi tercer nota',
        'Mi Cuarta Nota',
    ];
    return view('notes', ['notes' => $notes]);
});


Route::get('notas/crear', function() {
    //return 'Aqui podemos ver el formulario para crear notas';
    return view('add-note');
});

Route::get('notas/{id}/editar', function($id){
    return 'Aquí podemos editar la nota ??'.$id;
});

Route::get('notas/{id}', function($id)
{
    return 'Aqui veremos el detalle de la nota: '.$id;
});


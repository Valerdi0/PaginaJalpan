<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/inicio', ['uses'=> 'PaginasController@post_Login', 'as'=>'inicio'] );

Route::get('/left-sidebar', function () {
    return view('plantilla.left-sidebar');
});

Route::get('/right-sidebar', function () {
    return view('plantilla.right-sidebar');
});

Route::get('/tramites', function () {
    return view('plantilla.servicios');
});

Route::get('/organigrama', function () {
    return view('plantilla.organigrama');
});

Route::get('/turismo', function () {
    return view('plantilla.turismo');
});

Route::get('/turismo/tradiciones', function () {
    return view('plantilla.tradiciones');
});

Route::get('/turismo/cafetales', function () {
    return view('plantilla.cafetales');
});

Route::get('/turismo/riqueza-natural', function () {
    return view('plantilla.riqueza-natural');
});

Route::get('/turismo/gastronomia', function () {
    return view('plantilla.gastronomia');
});

Route::get('/turismo/leyendas', function () {
    return view('plantilla.leyendas');
});

Route::get('/contacto', function () {
    return view('plantilla.Contacto');
});

Route::get('/x', function () {
    return public_path();
});


Route::post('/contacto', 'PaginasController@postContact');



// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@authenticated');
Route::get('auth/logout', ['uses' => 'Auth\AuthController@getLogout','as' => 'Cerrarsesion']);
// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

//Post
Route::get('/transparencia', 'PostController@getList');


Route::get('/lista-post', 'PostController@getList');
 
Route::controller('/post', 'PostController');
Route::controller('/comments', 'CommentController');

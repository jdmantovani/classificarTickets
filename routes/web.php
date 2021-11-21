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
*/

Route::get('/', 'SiteController@home')->name('home');

Route::get('/ola/{nome_cliente}/{sobrenome_cliente}', 'SiteController@ola')->name('ola');

Route::get('/pagina', 'SiteController@pagina');

Route::get('/contato', 'SiteController@contato')->name('contato');

Route::get('/post/create', 'PostController@create')->name('post_create');

Route::post('/post/insert', 'PostController@insert')->name('post_insert');

Route::get('/post/read', 'PostController@read')->name('post_read');







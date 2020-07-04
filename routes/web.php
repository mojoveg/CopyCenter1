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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/1', function () {
    return view('welcome1');
});

Route::get('/2', function () {
    return view('welcome2');
});

Route::get('/1flexbox', function () {
    return view('1flexbox');
});

Route::get('/1bulmatemplate', function () {
    return view('1bulmatemplate');
});

Route::get('/2bulmatemplate', function () {
    return view('2bulmatemplate');
});

Route::get('/1test', function () {
    return view('1test');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/about', function () {
    return view('about', [
        'articles' => App\Article::take(3)->latest()->get()
    ]);
});

Route::get('/articles/{article}', 'ArticleController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('test', 'WebsiteController@test')->name('test');

// Route::get('order', 'WebsiteController@showOrderForm')->name('order.show');
// Route::post('order', 'WebsiteController@submitOrderForm')->name('order.submit');

// ################### EXAMPLE ###############
// Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
//     Route::resource('users','UserController');
// });

// Route::resource('orders', 'OrderController');
Route::resource('orders', 'V13OrderController');

// Route::prefix('5 blade component bulma')->group(function () {
//     Route::resource('orders','OrderController');
// });

Route::resource('contacts', 'ContactController');

Route::resource('templates', 'TemplateController');


Route::get('/foo', function()
{
    $exitCode = Artisan::call('make:model V13Order -mcr');
    $exitCode = Artisan::call('make:model V13Type -mcr');
    $exitCode = Artisan::call('make:model V13Option -mcr');
    $exitCode = Artisan::call('make:model V13OrderOption -m');
    $exitCode = Artisan::call('make:seeder V13TypesTableSeeder');
    $exitCode = Artisan::call('make:seeder V13OptionsTableSeeder');
});

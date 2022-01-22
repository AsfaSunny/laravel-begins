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

Route::get('/gone', function () { //'/gone' is our route...or path that can be any name and that name has to be used for searching the page
    $fruit = ['mango', 'banana', 'jackfruit', 'pie'];
    return view('first', compact('fruit')); //'first' is our view blade template
});


Route::get('/greetings', function() {
    $fruit = ['mango', 'banana', 'jackfruit'];
    foreach ($fruit as $fol) {
       echo $fol;
    }
});

Route::get('/userole', [App\Http\Controllers\RoleController::class, 'addform']); //route by a controller in laravel
Route::post('/role/add', [App\Http\Controllers\RoleController::class, 'storerole']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

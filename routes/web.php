<?php

use App\Http\Controllers\Datacenter;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/about',function (){
    return view('homepage');
});
Route::get('/Store',[Datacenter::class,'store'])->name('home');

Route::get('/',function (){
    return  view('homepage');
});


Route::get('/Store/{id}', [Datacenter::class, 'select']);

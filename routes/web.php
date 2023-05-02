<?php

use App\Http\Controllers\HalamanController_;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function() {
     return "<h1>This is my homepage </h1>";
     //return redirect()->route('siswainfo.index')->with('success','data added');
});

Route::get('/home/{id}', function($id) {
     return "<h1>This is webpage $id</h1>";
})->where('id','[0-9]+');

Route::get('/home/{id}/{name}', function($id,$name) {
     return "<h1>This is webpage $id for $name</h1>";
})->where(['id'=>'[0-9]+','name'=>'[A-Za-z]+']);

Route::get('siswa',[SiswaController::class,'index'])->name('siswainfo.index');
Route::get('siswa/{id}',[SiswaController::class,'detail']);
Route::get('/',[HalamanController::class,'index'])->name('main');
*/
//Route::get('/{id}',[HalamanController::class,'contact'])->name('contact.index');

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/contact',HalamanController_::class);
Route::get('/',[HalamanController::class,'index'])->name('main');
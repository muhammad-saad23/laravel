<?php

use App\Http\Controllers\StudentController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about/{id}/{name?}',function (int $id, string $name= null){
//     return view('about')->with(['id' => $id, 'name' =>$name]);
// });
Route::get('/',[StudentController::class,'index']);
Route::get('/about',[StudentController::class,'about']);
Route::get('/register',[StudentController::class,'register']);
Route::post('/register',[StudentController::class,'create']);
Route::get('/std_view',[StudentController::class,'std_view']);
Route::get('/std_view/dlt/{id}',[StudentController::class,'delete'])->name('std_del');
Route::get('/std_view/edit/{id}',[StudentController::class,'edit'])->name('std_edit');
Route::post('/std_view/update/{id}',[StudentController::class,'update'])->name('std_update');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

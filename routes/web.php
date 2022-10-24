<?php

use App\Http\Controllers\GenderController;
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

Route::get('/' ,[GenderController::class, 'index']);
Route::get('/signUp', [GenderController::class, 'create']);
Route::get('/login', [GenderController::class, 'login'])->name('login');
Route::post('/signUp', [GenderController::class, 'store']);
Route::post('/authenticate',[GenderController::class, 'authenticate'])->name('authenticate');
Route::get('logout', [GenderController::class, 'logout'])->name('logout');
Route::get('/page', [GenderController::class, 'page'])->name('page')->middleware('auth');
Route::get('/userinfo',[GenderController::class,'show'])->name('userinfo')->middleware('auth');
Route::get('edit/{id}', [GenderController::class, 'edit'])->name('edit')->middleware('auth');
Route::post('update/{id}', [GenderController::class, 'update'])->name('update')->middleware('auth');
Route::get('delete/{id}', [GenderController::class, 'destroy'])->name('delete')->middleware('auth');
Route::get('/info/{id}',[GenderController::class,'info'])->name('info');
Route::get('/courses', [GenderController::class, 'courses'])->middleware('auth');
Route::get('/blog', [GenderController::class, 'blog']);


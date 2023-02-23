<?php

use App\Http\Controllers\CatalogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistreController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
Route::get('/', function () {
    return view('welcome');
});
|
*/


Route::get('/', [HomeController::class, 'home'])->name('home');



Route::get('/catalog', [CatalogController::class, 'index'])->name('index');

Route::get('/catalog/edit/{id}',[CatalogController::class,'edit'])->name('edit');

Route::post('/catalog/edit/{id}',[CatalogController::class,'editPost'])->name('editPost');

Route::get('/catalog/delete/{id}',[CatalogController::class,'deleteGet'])->name('deleteGet');

Route::get('/catalog/create',[CatalogController::class,'create'])->name('create');

Route::post('/catalog/create',[CatalogController::class,'createPost'])->name('createPost');



Route::get('/login', [RegistreController::class, 'login'])->name('login');

Route::get('/registre',[RegistreController::class,'registreCreate'])->middleware('guest')->name('registreCreate');
//haciendo ->middleware('guest') una vez se haya refistrado el usuario no podra ir a la pagina de registro
//realmente estamos diciendo que solo los usuarios invitados tienen acceso a la pagina

Route::post('/registre',[RegistreController::class,'registreCreatePost'])->name('registreCreatePost');




<?php

use App\Http\Controllers\CatalogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistreController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\UsuarisController;
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



Route::get('/catalog', [CatalogController::class, 'index'])->name('index')->middleware('guest');

Route::get('/catalog/edit/{id}',[CatalogController::class,'edit'])->name('edit')->middleware('auth');

Route::post('/catalog/edit/{id}',[CatalogController::class,'editPost'])->name('editPost')->middleware('auth');

Route::get('/catalog/delete/{id}',[CatalogController::class,'deleteGet'])->name('deleteGet')->middleware('auth');

Route::get('/catalog/create',[CatalogController::class,'create'])->name('create')->middleware('auth');

Route::post('/catalog/create',[CatalogController::class,'createPost'])->name('createPost')->middleware('auth');



Route::get('/login', [RegistreController::class, 'login'])->name('login');

Route::get('/registre',[RegistreController::class,'registreCreate'])->middleware('guest')->name('registreCreate');
//haciendo ->middleware('guest') una vez se haya refistrado el usuario no podra ir a la pagina de registro
//realmente estamos diciendo que solo los usuarios invitados tienen acceso a la pagina

Route::post('/registre',[RegistreController::class,'registreCreatePost'])->name('registreCreatePost');

Route::post('/logout',[SessionsController::class, 'destroy'])->middleware('auth');//Creamos una ruta para hacer el logout, teniendo en cuenta que debe ser un usuario
//registrado, ahora crearemos el metodo pertinente 'destroy' en el controller indicado, en este caso el SessionsController
Route::get('login', [SessionsController::class, 'create'])->middleware('guest');//SE crea la ruta para la vista del formulario de inicio de session para usuarios registrados

Route::post('login', [SessionsController::class,'store'])->middleware('guest');// se crea la ruta para entrar a la aplicacion si el metodo store valida el formulario create

Route::get('admin/usuaris/create',[UsuarisController::class,'create'])->middleware('admin');//el acceso será controlado antes por el middleware que hemos creado que por el controlador, que es lo logico estructuralemtne hablando
<?php

use App\Http\Controllers\BooksController;
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


/*
    Se creó un usuario con mi nombre; el correo para entrar es "irving@gmail.com" y la contraseña es "password"
    usuario de la base de datos "root" y no cuenta con contraseña

*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/dashboard', [BooksController::class, 'index'])->middleware(['auth'])->name('index');
Route::get('/getBooks', [BooksController::class, 'api'])->middleware(['auth'])->name('api');

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

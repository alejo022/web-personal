<?php

use App\Http\Livewire\Permissions;
use App\Http\Livewire\Roles;
use App\Http\Livewire\Users;
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
    return view('inicio');
})->name('inicio');

Route::get('/sobre-mi', function () {
    return view('sobre_mi');
})->name('sobre-mi');

Route::get('/habilidades', function () {
    return view('habilidades');
})->name('habilidades');

Route::get('/portafolio', function () {
    return view('portafolio');
})->name('portafolio');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::prefix('admin/')->name('admin.')->group(function () {
        Route::get('roles', Roles::class)->name('roles');
        Route::get('permisos', Permissions::class)->name('permisos');
        Route::get('usuarios', Users::class)->name('usuarios');
    });
});

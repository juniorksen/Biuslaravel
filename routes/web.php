<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

// Ruta para mostrar el formulario de registro
Route::get('/register', [Controller::class, 'index'])->name('register');
Route::post('/register', [Controller::class, 'store'])->name('users.store');

// Ruta para mostrar la página de bienvenida después del registro
Route::get('/welcome', [Controller::class, 'welcome'])->name('welcome');

// Ruta para la página principal (index)
Route::get('/', [Controller::class, 'index'])->name('index');


// validar seccion

Route::get('/login', [Controller::class, 'login'])->name('login');
Route::post('/loginform', [Controller::class, 'loginform'])->name('login.submit');
Route::post('/logout', [Controller::class, 'logout'])->name('logout');

//imagen x


Route::get('/dashboard', [Controller::class, 'dashboard'])->name('dashboard');


Route::get('/messages', [Controller::class, 'messages'])->name('messages');

Route::get('/Wifite2', [Controller::class, 'Wifite2'])->name('Wifite2');

Route::get('/qr', [Controller::class, 'qr'])->name('qr');

Route::get('/gemelos', [Controller::class, 'gemelos'])->name('gemelos');

Route::get('/DSNIFF', [Controller::class, 'DSNIFF'])->name('DSNIFF');

Route::get('/torrent', [Controller::class, 'torrent'])->name('torrent');

Route::get('/wifi', [Controller::class, 'wifi'])->name('wifi');

Route::get('/Piracy', [Controller::class, 'Piracy'])->name('Piracy');

Route::get('/Bomb', [Controller::class, 'Bomb'])->name('Bomb');



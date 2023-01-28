<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

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

Route::middleware(['auth', 'verified'])->group(function () {
  Route::get('/', function () {
    return redirect(route('dashboard'));
  });
  Route::get('/dashboard', function (Request $request) {
    return view('dashboard', ['title' => "Olá, " . $request->user()->name, 'user' => $request->user()]);
  })->name('dashboard');
  Route::post('/logout', [LogoutController::class, 'logout']);
});

Route::get('/login', function () {
  return view('login', ['title' => 'Login']);
})->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/cadastro', function () {
  return view('cadastro', ['title' => 'Cadastre-se']);
});
Route::post('/cadastro', [RegistrationController::class, 'authenticate']);

Route::get('/email/verify', function (Request $request) {
  return view('auth.verify-email', ['title' => 'Verificação de conta', 'email' => $request->user()->email]);
})->middleware('auth')->name('verification.notice');

Route::get('/email/verification/{id}/{hash}', function (EmailVerificationRequest $request) {
  $request->fulfill();

  return redirect('/login');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
  $request->user()->sendEmailVerificationNotification();

  return back()->with('message-success', 'Link de verificação de conta enviado!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('{any}', function () {
  return view('errors.404', ['title' => '404']);
});

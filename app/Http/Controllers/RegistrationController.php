<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
  /**
   * Handle an authentication attempt.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function authenticate(Request $request)
  {
    $credentials = $request->validate([
      'name' => ['required', 'max:255'],
      'email' => ['required', 'email', 'unique:users,email'],
      'password' => ['required', 'confirmed', Password::min(8)->numbers()->symbols()],
      'password_confirmation' => ['required']
    ]);

    $user = User::create(request(['name', 'email', 'password']));

    auth()->login($user);

    event(new Registered($user));

    return redirect()->route('verification.notice')->with('message-success', 'Usuário cadastrado com sucesso!');
  }
}

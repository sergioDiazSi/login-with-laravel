<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('auth.login');
    }

    public function authentication(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'password' => 'required'
        ],
        [
            'name.required' => 'Ingrese Usuario',
            'password.required' => 'Ingrese Contraseña'
        ]);

        $credentials = $request->only('name', 'password');
    
        if (Auth::attempt($credentials)) 
        {
            $allowedUsers = User::pluck('name')->toArray();
    
            if (in_array(auth()->user()->name, $allowedUsers)) {
                return redirect()->intended('/home');
            }
        }
    
        return back()->withErrors([
            'name' => 'Credenciales inválidas o no autorizadas.',
        ])->withInput($request->only('name'));
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}

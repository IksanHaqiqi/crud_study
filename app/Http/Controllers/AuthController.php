<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }


    public function loginProses(Request $request)
    {
        $login = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:1',
        ]);

        if (Auth::attempt($login)) {
            $request->session()->regenerate();
            return redirect()->route('user.index');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->onlyInput('email'); // Redirect balik kalau gagal
    }

    public function register()
    {
        return view('auth.register');
    }

 public function registerProses(Request $request)
{
    // dd($request->all());
    $request->validate([
        'name'      => 'required|string|max:255',
        'email'     => 'required|email|unique:users,email|max:255',
        'password'  => 'required|string|min:1',
    ]);

    $user = User::create([
        'name'     => $request->name,
        'email'    => $request->email,
        'password' => bcrypt($request->password),
    ]);

    // Kalau mau langsung login setelah register
    Auth::login($user);

    return redirect()->route('user.index')
        ->with('success', 'Selamat datang, ' . $request->name);
}

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index(){
        return view('login.index', [
                'title' => 'login'
        ]);
    }
    

    public function authenticate(Request $request){
        //memvalidasi form login
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        //mengecek validasi form jika benar berhasil masuk 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }
        //jika salah tampilkan pesan error
        return back()->with('loginError', 'Login Failed!');
    }


    public function logout(Request $request){
        //mengambil class auth
        Auth::logout();
        //Menghapus session login
        $request->session()->invalidate();
        //meregenerate session / menghancurkan session sebelumnya
        $request->session()->regenerateToken();
        // jika sudah redirect ke halaman home 
        return redirect('/');
    }
}

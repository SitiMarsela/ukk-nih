<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function getlogin()
    {
        return view('login');
    }


    public function masyarakatlogin()
    {
        $auth = request()->only('username','password');
        if (Auth()->guard('masyarakat')->attempt($auth)) ;
        {
            return redirect()->to('/');
        } 
    }
    // public function authenticate(Request $request)
    // {
    //     // $request->validate([
    //     //     'username' => 'required',
    //     //     'password' => 'required'
    //     // ]);

    //     $this->validate($request, [
    //         'username' => 'required|username',
    //         'password' => 'required'
    //       ]);

    //       if (Auth::guard('masyarakat')->attempt(['username' => $request->username, 'password' => $request->password])) {
    //         // if successful, then redirect to their intended location
    //       return redirect()->intended('/pengaduan');
    //     } else if (Auth::guard('petugas')->attempt(['username' => $request->username, 'password' => $request->password])) {
    //       return redirect()->intended('/register');
    //     }
    // }
}

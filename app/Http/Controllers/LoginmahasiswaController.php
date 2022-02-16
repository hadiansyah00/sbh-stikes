<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class LoginmahasiswaController extends Controller
{
    //Menampilkan form login

    function index()
    {
        return view('mahasiswa.login');
    }

    //check proses login

    function submit(Request $request)
    { {
            // Validate the form data
            $this->validate($request, [
                'email'   => 'required|email',
                'password' => 'required|min:6'
            ]);

            // Attempt to log the user in
            if (Auth::guard('mahasiswa')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
                // if successful, then redirect to their intended location
                return redirect()->intended('/homemhs');
            }
            // if unsuccessful, then redirect back to the login with the form data
            return redirect('mahasiswa/login')->withInput($request->only('email', 'remember'));
        }
    }

    //Setting Nim Login

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    /**
     * Validate the user login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
}

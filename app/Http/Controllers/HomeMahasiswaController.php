<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeMahasiswaController extends Controller
{
    public function index()
    {

        return view('homemhs.index');
    }

    function __construct()
    {
        return $this->middleware('auth:mahasiswa');
    }
}

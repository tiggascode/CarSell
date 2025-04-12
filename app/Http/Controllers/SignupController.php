<?php

namespace App\Http\Controllers;

class SignupController extends Controller
{
    public function create()
    {
        return view('auth.signup');
    }
}

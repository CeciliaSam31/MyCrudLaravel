<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function showRegistrationForm()
{
    return view('auth.register');
}

public function register(Request $request)
{
    // Registration logic here
}

}

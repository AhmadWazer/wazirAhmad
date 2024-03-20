<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
     {
        return view('form');
    }


    public function register(request $request)
    {
    $request->validate(
    [
    'name' => 'required',
    'email'=> 'required|email',
    'password' => 'required',
    'password-confirmation' => 'required'
    ]
    );
    echo '<pre>';
    print_r($request->all());
    }
}

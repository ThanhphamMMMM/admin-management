<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function registeruser() {

        return view('.users/register-user');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Role;

use App\Models\User;

use App\Models\Profile;

class UserController extends Controller
{
    // HIỂN THỊ LIST USER
    public function index() {

        $users = User::with(['profile','role'])->get();

        return view('.users/user-index', compact('users'));
    }
    //INDEX FORM STORE USER
    public function index_form() {

        $roles = Role::all();

        return view('.users/user-store', compact('roles'));
    }

}

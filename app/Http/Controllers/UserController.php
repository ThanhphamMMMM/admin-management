<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    // HIỂN THỊ USER
    public function index() {

        $users = User::with(['profile','role'])->get();

        return view('.users/user', compact('users'));
    }
    //CREATE USER
    public function createnew() {
        //index all('roles)
        $roles = Role::all();

        return view('user.register',compact('roles'));

    }

    //EDIT USER
    public function edit($id) {

        
    }

    //DELETE USER
    public function destroy($id) {

    $user =  User::findOrFail($id);
    $user->delete();

    return redirect()->route('user.index')->with('xoá thành công!');
    }
   
}

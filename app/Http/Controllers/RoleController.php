<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Role;

class RoleController extends Controller
{
    //index role
    public function index() {
        
        $roles = Role::all();

        return view('.roles/role-index',compact('roles'));

    }

    //indexform role
    public function index_form() {

        return view('roles/role-store');
    }
    //STORE role
    public function store(Request $request) {

        $request->validate([
            'name'=>'required|unique:roles',
            'descride'=>'required',
        ]);

        $role = new Role();
        $role->name = $request->name;
        $role->descride = $request->descride;
        $role->save();

        return redirect()->route('role.index')->with('success','thêm vai trò thành công');
    }
}

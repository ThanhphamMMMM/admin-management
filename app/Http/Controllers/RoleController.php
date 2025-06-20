<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Role;

class RoleController extends Controller
{
    //index role
    public function index() {
        
        $roles = Role::all();

        return view('roles.index',compact('roles'));

    }

    //create role
    public function create() {

        return view('roles.create');
    }
    //store role
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

    public function edit($id) {

        $role = Role::findOrFail($id);

        return view('roles.edit',compact('role'));
    }

    public function update(Request $request , $id) {

        $role = Role::findOrfail($id);

        $request->validate([

            // 'name' => 'required|unique:roles',  //'unique:table,column,' . $id để bỏ qua chính mình
            'name' => 'required|unique:roles,name,'. $id,

            'descride'=>'required',
        ]);

        $role->name = $request->name;
        $role->descride = $request->descride;

        $role->save();

        return redirect()->route('role.index')->with('success','sửa vai trò thành công');
    }

    public function destroy($id) {

        $role = Role::findOrfail($id);

        $role->delete();

        return redirect()->route('role.index')->with('success','xoá vai trò thành công');
    }


}

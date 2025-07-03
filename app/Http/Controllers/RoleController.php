<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Role;

class RoleController extends Controller
{

    public function index() {
        $roles = Role::all();
        return view('roles.index',compact('roles'));

    }

    public function create() {
        return view('roles.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name'=>'required|unique:roles',
            'descride'=>'required',
        ]);

       try {
        $role = new Role();
        $role->name = $request->name;
        $role->descride = $request->descride;
        $role->save();

        return redirect()->route('role.index')->with('success','thêm vai trò thành công');
       }
       catch(\Exception $e) {
        return back()->with('error', 'tạo vai trò thất bại' . $e->getMessage());
       }
    }

    public function edit($id) {
        $role = Role::findOrFail($id);
        return view('roles.edit',compact('role'));
    }

    public function update(Request $request , $id) {
        $role = Role::findOrfail($id);
        $request->validate([

            'name' => 'required|unique:roles,name,'. $id,
            'descride'=>'required',
        ]);

       try {
        $role->name = $request->name;
        $role->descride = $request->descride;
        $role->save();

        return redirect()->route('role.index')->with('success','sửa vai trò thành công');
        }
        catch(\Exception $e) {
        return back()->with('error', 'sửa vai trò thất bại' . $e->getMessage());
       }

        
    }

    public function destroy($id) {

        $role = Role::findOrfail($id);

        $role->delete();

        return redirect()->route('role.index')->with('success','xoá vai trò thành công');
    }


}

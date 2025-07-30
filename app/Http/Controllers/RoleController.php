<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\Role;
class RoleController extends Controller
{

    public function index(): View
    {
        $roles = Role::paginate(10);
        return view('roles.index', compact('roles'));
    }

    public function create(): View
    {
        $permissions = Permission::all();
        return view('roles.create', compact('permissions'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|unique:roles',
            'description' => 'required',
        ]);

        try {
            $role = new Role();
            $role->name = $request->name;
            $role->description = $request->description;
            $role->save();

            return redirect()->route('role.index')->with('success', 'Thêm vai trò thành công');
        } catch (\Exception $e) {
            return back()->with('error', 'Thêm vai trò thất bại' . $e->getMessage());
        }
    }

    public function edit($id): View
    {
        $role = Role::findOrFail($id);
        return view('roles.edit', compact('role'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $role = Role::findOrfail($id);
        $request->validate([

            'name' => 'required|unique:roles,name,' . $id,
            'description' => 'required',
        ]);

        try {
            $role->name = $request->name;
            $role->description = $request->description;
            $role->save();

            return redirect()->route('role.index')->with('success', 'Sửa vai trò thành công');
        } catch (\Exception $e) {
            return back()->with('error', 'Sửa vai trò thất bại' . $e->getMessage());
        }


    }

    public function destroy($id): RedirectResponse
    {

        $role = Role::findOrfail($id);

        $role->delete();

        return redirect()->route('role.index')->with('success', 'Xoá vai trò thành công');
    }


}

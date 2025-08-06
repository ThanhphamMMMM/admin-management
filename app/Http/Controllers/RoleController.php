<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRoleRequest;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\Role;
class RoleController extends Controller
{

    public function index(): View
    {
        $roles = Role::with('permissions')->paginate(8);

        return view('roles.index', compact('roles'));
    }

    public function create(): View
    {
        $roles = Permission::all();
        return view('roles.create', compact('roles'));
    }

    public function store(StoreRoleRequest $request): RedirectResponse
    {
        try {
            $role = new Role();
            $role->name = $request->input('name');
            $role->description = $request->input('description');
            $role->save();

            $role->permissions()->sync($request->permissions);

            return redirect()->route('role.index')->with('success', 'Thêm Vai Trò Thành Công...');
        } catch (\Exception $e) {
            return back()->with('error', 'Thêm Vai Trò Không Thành Công!' . $e->getMessage());
        }
    }

    public function edit($id): View
    {
        $role = Role::with('permissions')->findOrFail($id);

        $allPermissions = Permission::all();

        $rolePermissionsIds = $role->permissions->pluck('id')->toArray();

        return view('roles.edit', compact('role','allPermissions', 'rolePermissionsIds'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $role = Role::findOrfail($id);
        $request->validate([

            'name' => 'required|unique:roles,name,' . $id,
            'description' => 'required',
            'permissions' => 'array',
        ]);

        try {
            $role->name = $request->input('name');
            $role->description = $request->input('description');
            $role->save();

            $permission = $request->input('permissions',[]);
            $role->permissions()->sync($permission);

            return redirect()->route('role.index')->with('success', 'Sửa Vai Trò Thành Công...');
        } catch (\Exception $e) {
            return back()->with('error', 'Sửa Vai Trò Không Thành Công!' . $e->getMessage());
        }


    }

    public function destroy($id): RedirectResponse
    {

        $role = Role::findOrfail($id);

        $role->delete();

        return redirect()->route('role.index')->with('success', 'Xoá Vai Trò Thành Công...');
    }


}

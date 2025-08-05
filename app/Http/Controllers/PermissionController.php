<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;
use App\Models\Role;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class PermissionController extends Controller
{
    public function index(): View
    {
        $permissions = Permission::with('roles')->paginate(8);
        return view('permissions.index', compact('permissions'));
    }

    public function create(): View
    {
        $roles = Role::all();
        return view('permissions.create',compact('roles'));
    }

    // public create permissions

    public function edit($id): View
    {
        $permissions = Permission::all()->find($id);
        return view('permissions.edit', compact('permissions'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $permissions = Permission::findOrFail($id);
       $request->validate([
           'name' => 'required|unique:permissions,name,'.$permissions->id,
           'description' => 'required',
       ]);

        try {
            $permissions->name = $request->input('name');
            $permissions->description = $request->input('description');
            $permissions->save();

            return redirect()->route('permission.index')->with('success', 'Permission updated successfully');
        } catch (\Exception $e) {
            return redirect()->route('permission.index')->with('error', $e->getMessage());
        }
    }

    public function destroy($id): RedirectResponse
    {
        $permissions = Permission::find0rfail($id);
        $permissions->delete();
        return redirect()->route('permission.index')->with('success', 'Permission deleted successfully');
    }

}

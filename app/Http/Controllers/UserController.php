<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreUserRequest;
use App\Models\Role;
use App\Models\User;
use App\Models\Permission;
use App\Models\Profile;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class UserController extends Controller
{

    public function index(Request $request): View
    {
        $keyword = $request->input('search');

        $users = User::with(['profile', 'role'])
            ->when($keyword, function ($query, $keyword) {
                $query->where('users.email', 'like', "%$keyword%")
                    ->orWhereHas('profile', function ($search) use ($keyword) {
                        $search->where('full_name', 'like', "%$keyword%");
                    });

            })
            ->paginate(8);
        return view('users.index', compact('users'));
    }

    public function create(): View
    {
        $roles = Role::all();
        $permissions = Permission::all();
        return view('users.create', compact('roles', 'permissions'));
    }
                                                                                            
    public function store(StoreUserRequest $request): RedirectResponse
    {

        try {
            $user = new User();
            $user->email = $request->email;
            $user->password = Hash::make($request->input('password'));
            $user->role_id = $request->role;
            $user->save();

            $profile = new Profile();
            $profile->full_name = $request->full_name;
            $profile->phone = $request->phone;
            $profile->address = $request->address;
            $profile->birthday = $request->birthday;
            $profile->user_id = $user->id;
            $profile->save();

            return redirect()->route('user.index')->with('success', 'Tạo Tài Khoản Thành Công...');
        } catch (\Exception  $e) {
            return back()->with('error', 'Tạo Tài Không Khoản Thất Công!' . $e->getMessage());
        }
    }

    public function edit($id): View
    {
        $user = User::with('profile')->findOrfail($id);
        $roles = Role::all();
        return view('users.edit', compact('user', 'roles'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $id = (int)$id;
        $user = User::findOrFail($id);

        $request->validate([
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'nullable|min:7',
            'full_name' => 'required',
            'phone' => 'required|max:10',
            'address' => 'required',
            'birthday' => 'required',
            'role' => 'required|exists:roles,id',
        ]);

        try {
            if ($request->filled('email')) {
                $user->email = $request->input('email');
            }
            if ($request->filled('password')) {
                $user->password = Hash::make($request->input('password'));
            }
            $user->role_id = $request->input('role');
            $user->save();

            $profile = $user->profile;
            $profile->user_id = $user->id;
            $profile->full_name = $request->input('full_name');
            $profile->phone = $request->input('phone');
            $profile->address = $request->input('address');
            $profile->birthday = $request->input('birthday');
            $profile->save();

            if ($profile->isDirty()) {
                $profile->save();
            }

            return redirect()->route('user.index')
                ->with('success', 'Cập Nhật Tài Khoản Thành Công...');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Cập Nhật Tài Khoản Không Thành Công! ' . $e->getMessage());
        }
    }


    public function destroy($id): RedirectResponse
    {
        $user = User::findOrfail($id);
        $user->delete();

        return redirect()->route('user.index')->with('success', 'Xoá Tài Khoản Thành Công...');
    }

}



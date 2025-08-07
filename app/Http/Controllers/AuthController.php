<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use App\Models\Role;
use App\Models\Profile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function showlogin(): View
    {
        return view('auth.login');
    }

    public function checkLogin(Request $request): RedirectResponse
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $user = User::with('role')->where('email', $email)->first(); // lấy role

        /** @var \App\Models\User|null $user */
        if ($user) {
            if (Hash::check($password, $user->password)) {
                Auth::login($user);
                return redirect()->route('redirect.by.role');
            } else {
                return redirect()->back()->withInput()->with('error', 'sai mật khẩu');
            }
        } else {
            return redirect()->back()->withInput()->with('error', ' email chưa tồn tại');
        }
    }

    public function showRegister(): View
    {
        return view('auth.reGisTer');
    }


    public function process(LoginRequest $request): RedirectResponse
    {

        try {
            $userRole = Role::where('name', 'user')->first();


            $user = new User();
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->role_id = $userRole->id;
            $user->save();

            $profile = new Profile();
            $profile->full_name = $request->fullname;
            $profile->phone = $request->tel;
            $profile->address = $request->address;
            $profile->birthday = $request->birthday;
            $profile->user_id = $user->id;
            $profile->save();

            return redirect()->route('auth.login')->with('success', ' đăng kí thành công ');
        } catch (\Exception $e) {
            return back()->with('error', 'đăng kí thất bạn' . $e->getMessage());
        }
    }

    public function index(): View
    {
        return view('layouts/app');
    }
}

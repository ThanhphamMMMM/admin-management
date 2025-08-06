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
    public function showLogin(): View
    {
        return view('auth.login');
    }

    public function checkLogin(Request $request): RedirectResponse
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $user = User::with('role.permissions')->where('email', $email)->first();

        /** @var \App\Models\User|null $user */
        if ($user) {
            if (Hash::check($password, $user->password)) {
                Auth::login($user);
                return redirect()->route('app');
            } else {
                return redirect()->back()->withInput()->with('error', 'Sai Mật Khẩu!');
            }
        } else {
            return redirect()->back()->withInput()->with('error', ' Email Hiện Chưa Được Đăng Kí!');
        }
    }

    public function showRegister(): View
    {
        return view('register');
    }

    public function process(LoginRequest $request): RedirectResponse
    {

        try {
            $userRole = Role::where('name', 'user')->first();

            $user = new User();
            $user->email = $request->input('email');
            $user->password = Hash::make($request->input('password'));
            $user->role_id = $userRole->id;
            $user->save();

            $profile = new Profile();
            $profile->full_name = $request->input('fullname');
            $profile->phone = $request->input('tel');
            $profile->address = $request->input('address');
            $profile->birthday = $request->input('birthday');
            $profile->user_id = $user->id;
            $profile->save();

            return redirect()->route('login')->with('success', ' Đăng Kí Thành Công ');
        } catch (\Exception $e) {
            return back()->with('error', 'Đăng Kí Thất Bại' . $e->getMessage());
        }
    }

    public function index(): View|RedirectResponse
    {

        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login');
        }
        return view('layouts/app',compact('user'));
    }
}

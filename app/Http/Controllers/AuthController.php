<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\LoginRequest;

use Illuminate\Support\Facades\Validator;

use App\Models\Role;

use App\Models\User;

use App\Models\Profile;

use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showlogin() {
        return view('auth.login');
    }

    public function checklogin(Request $request) {

        $email = $request->input('email');
        $password = $request->input('password');
        $user = User::where('email', $email)->first();
           
        if($user) {
            if(Hash::check($password,$user->password)) {
                return view('welcome');
            }
            else{
                return redirect()->back()->withInput($request->all)->with('error','sai nhập khẩu');
            }
        }
        else {
                return redirect()->back()->withInput($request->all)->with('error','email không tồn tại');
        }  
    }

    public function showregister() {
        return view('auth.register');
    }


    public function process(LoginRequest $request) {

        try {
            $user = new User();
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->role_id = 5;
            $user->save();

            $profile = new Profile();
            $profile->full_name = $request->fullname;
            $profile->phone = $request->tel;
            $profile->address = $request->address;
            $profile->birthday = $request->birthday;
            $profile->user_id = $user->id;
            $profile->save();

            return redirect()->route('auth.login')->with('success', ' đăng kí thành công ');
        } catch(\Exception $e) { 
            return back()->with('error','đăng kí thất bạn'. $e->getMessage());
        }
    }

    public function index() {
        return view('layouts/app');
    }
}
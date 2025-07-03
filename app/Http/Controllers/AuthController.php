<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function process(Request $request) {
        $validator = Validator::make($request->all(),[
            'email'     =>'required|email|regex:/^[\w\.\-]+@gmail\.com$/i|unique:users,email,',  
            'password'  =>'required|min:7|confirmed', // cần đặt đúng name input : password_confirmation để laravel có thể kieemr  tra
            'fullname'  =>'required', 
            'tel'       =>'required|max:10',
            'address'   =>'required',
            'birthday'      =>'required',
        ]);

        if($validator->final()) {
            return back()->withErrors($validator)->withInput()->with('error','đăng kí thất bại');
        }
        try {
            $user = new User();
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->role_id = 7;
            $user->save();

            $profile = new Profile();
            $profile->full_name = $request->fullname;
            $profile->phone = $request->tel;
            $profile->address = $request->address;
            $profile->birthday = $request->birthday;
            $profile->user_id = $user->id;
            $profile->save();

            return redirect()->route('auth.login')->with('success','đăng kí thành công hãy đăng nhập vào hệ thống');
        }catch(\Exception $e) { 
            return back()->with('error','đăng kí thất bạn'. $e->getMessage());
        }
    }
}
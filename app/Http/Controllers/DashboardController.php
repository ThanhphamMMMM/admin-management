<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        return view('dashboard');
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
}

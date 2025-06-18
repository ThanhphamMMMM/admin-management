<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Role;

use App\Models\User;

use App\Models\Profile;


use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{


    public function store(Request $request) {
         
        $request -> validate([
            
            'email'     =>'required|email|unique:users,email',   // kiểm tra email trong bảng users đã tồn tại chưa
            'password'  =>'required|min:7',
            'fullname'  =>'required',
            'tel'       =>'required|max:10',
            'address'   =>'required',
            'date'      =>'required',
            'role'      =>'required|exists:roles,id',          // kiểm tra  role có tồn tại ko
 
        ]);

        
        $user = new User();
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role_id = $request->role;
        $user->save(); // Lưu trước để có ID


        $profile = new Profile();
        $profile->full_name =   $request->fullname;
        $profile->phone     =   $request->tel;
        $profile->address   =   $request->address;
        $profile->birthday  =   $request->date;
        $profile->user_id   =   $user->id; // Gắn khoá ngoại
        $profile->save();


        $user->save(); // lưu vào CSDL
        return redirect()->route('user.index')->with('success', 'Thêm user thành công!');

    }
}

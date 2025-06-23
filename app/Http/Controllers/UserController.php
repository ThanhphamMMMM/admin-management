<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Role;

use App\Models\User;

use App\Models\Profile;

use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // INDEX USER
    public function index() {

        $users = User::with(['profile','role'])->get();
        return view('users.index', compact('users'));
    }
    //CREATE USER
    public function create() {
        $roles = Role::all();
        return view('users.create', compact('roles'));
    }
    // STORE USER
    public function store(Request $request) {
        $request -> validate([

            'email'     =>'required|email|regex:/^[\w\.\-]+@gmail\.com$/i|unique:users,email,',  // kiểm tra email trong bảng users đã tồn tại chưa
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
        return redirect()->route('user.index')->with('thanh', 'Thêm user thành công!');

    }
    public function edit($id) {
        $user = User::with('profile')->findOrfail($id);
        $roles = Role::all();
        return view('users.edit',compact('user','roles'));
    }
    public function update(Request $request ,$id) {
        // dd($request->all());

        $user = User::findOrfail($id);
        $request->validate([

            'email'     =>'required|email|email',$id,   // kiểm tra email trong bảng users đã tồn tại chưa
            'password'  =>'required|min:7',
            'fullname'  =>'required',
            'tel'       =>'required|max:10',
            'address'   =>'required',
            'date'      =>'required',
            'role'      =>'required|exists:roles,id',          // kiểm tra  role có tồn tại ko

        ]);

        $user->email     = $request->email;
        $user->role_id   = $request->role;

        if ($request->filled('password')) {
        $user->password = Hash::make($request->password);
        }

        $user->save();


        $profile = $user->profile;
        $profile->full_name =   $request->fullname;
        $profile->phone     =   $request->tel;
        $profile->address   =   $request->address;
        $profile->birthday  =   $request->date;
        $profile->user_id   =   $user->id; // Gắn khoá ngoại
        $profile->save();



        return redirect()->route('user.index')->with('success', 'Cập nhật user thành công!');

    }



    public function destroy($id) {

        $user = User::findOrfail($id);

        $user->delete() ;

        return redirect()->route('user.index')->with('success', 'xoÁ user thành công!');
    }

}

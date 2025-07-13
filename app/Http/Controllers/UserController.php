<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Role;

use App\Models\User;

use App\Models\Profile;

use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index() {

        $users = User::with(['profile','role'])->get();
        return view('users.index', compact('users'));
    }

    public function create() {
        $roles = Role::all();
        return view('users.create', compact('roles'));
    }

    public function store(Request $request) {
        $request -> validate([

            'email'     =>'required|email|regex:/^[\w\.\-]+@gmail\.com$/i|unique:users,email',  
            'password'  =>'required|min:7',
            'fullname'  =>'required',
            'tel'       =>'required|digits:10',
            'address'   =>'required',
            'date'      =>'required',
            'role'      =>'required|exists:roles,id',    
        ]);

        try {
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

            return redirect()->route('user.index')->with('success', 'Thêm user thành công!');
        } 
        catch(\Exception  $e) {
            return back()->with('error', 'Thêm user thất bại'. $e->getMessage() );
        }  
    }
    
    public function edit($id) {
        $user = User::with('profile')->findOrfail($id);
        $roles = Role::all();
            return view('users.edit',compact('user','roles'));
    }
    public function update(Request $request ,$id) {

        $user = User::findOrfail($id);
        $request->validate([

            'email'     =>'required|email|email',$id,   // kiểm tra email trong bảng users đã tồn tại chưa
            'password'  =>'nullable|min:7',
            'fullname'  =>'required',
            'tel'       =>'required|max:10',
            'address'   =>'required',
            'date'      =>'required',
            'role'      =>'required|exists:roles,id',          // kiểm tra  role có tồn tại ko

        ]);

        try {
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

            return redirect()->route('user.index')->with('success', 'Cập nhật  thành công!');
        }
        catch(\Exception $e) {
            return redirect()->back()->route('user.edit')->with('error','Cập nhật thất bại');
        }
    }

    public function destroy($id) {
        $user = User::findOrfail($id);
        $user->delete() ;

        return redirect()->route('user.index')->with('success', 'xoÁ user thành công!');
    }

}

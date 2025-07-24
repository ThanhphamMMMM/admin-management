<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;


class MyprofileController extends Controller
{
    public function myProfile():View|RedirectResponse
    {
        if (!$user = Auth::user()) {
            return redirect()->route('auth.login');
        }
        $user->load(['profile', 'role']);
        return view('users.myProfile', compact('user'));
    }

    public function Update(Request $request) : RedirectResponse
    {
        $request->validate([
            'full_name' => 'required',
            'email' => 'required|email|unique:users,email,' . Auth::id(),
            'phone' => 'required',
            'address' => 'required',
            'birthday' => 'required',
            'role' => 'required',
            'descride' => 'required',
        ]);
        try {
            /** @var \App\Models\User $user */
            $user = Auth::user();
            $user->email = $request->input('email');
            $user->save();

            /** @var \App\Models\Role $role */
            $role = $user->role;
            if($role) {
                $role->name = $request->input('role');
                $role->descride = $request->input('descride');
                $role->save();
            }

            /** @var \App\Models\Profile $profile */
            $profile =$user->profile;
            if($profile) {
                $profile->full_name = $request->input('full_name');
                $profile->phone = $request->input('phone');
                $profile->address = $request->input('address');
                $profile->birthday = $request->input('birthday');
                $profile->save();
            }


            return back()->with('success','Cập nhật thành công');
        }catch (\Exception $exception){
            return back()->with('error',$exception->getMessage());
        }
    }

}

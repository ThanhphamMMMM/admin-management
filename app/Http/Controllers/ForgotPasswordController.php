<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResetPassword;
use App\Http\Requests\ResetEmai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller {
        public function showForm():View
        {
            return view('forgot.verify_password');
        }
        public function sendResetLink(ResetEmai $request):RedirectResponse
        {
            $status = Password::sendResetLink(
                $request->only('email')
            );


           if($status === Password::RESET_LINK_SENT) {
               return back()->with('status', __($status));
           }else{
               return back()->withErrors(['status' => __($status)]);
           }

        }
        public function newPassword(Request $request,$token):View
        {
            return view('forgot.new_password', [
                'token' => $token,
                'email'=>$request->query('email'),
            ]);
        }
        public function storeNewPassword(ResetPassword $request):RedirectResponse
        {
            $status = Password::reset(
                $request->only('email', 'password', 'password_confirmation', 'token'),
                function ($user, $password) {
                    $user->forceFill([
                        'password' => Hash::make($password),

                    ])->save();

                }
            );
            if ($status === Password::PASSWORD_RESET) {
                return redirect()->route('auth.login')->with('status', __($status));
            }else{
                return back()->withErrors(['status' => __($status)]);

            }

        }
}


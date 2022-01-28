<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login_view()
    {
        return view('frontend.auth-user.login');
    }

    public function register_view()
    {
        return view('frontend.auth-user.register');
    }


    // Register User
    public function register_user(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            // Check If User Already Exists Or Not
            $user_count = User::where('email', $data['email'])->count();
            if ($user_count > 0) {
                return redirect()->back()->with('error_message', "Email Already Exists !");
            } else {
                // Register The User
                $user = new User();
                $user->name = $data['name'];
                $user->email = $data['email'];
                $user->phone = $data['mobile'];
                $user->address = $data['address'];
                $user->state = $data['state'];
                $user->city = $data['city'];
                $user->country = $data['country'];
                $user->pincode = $data['pincode'];
                $user->password = bcrypt($data['password']);
                $user->save();

                // Login And Rediract This User
                if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
                    return redirect('/');
                }
            }
        }
    }



    // Check Email Already Exists Or Not
    public function check_email(Request $request)
    {
        $data = $request->all();
        $email_count = User::where('email', $data['email'])->count();
        if ($email_count > 0) {
            return "false";
        } else {
            return "true";
        }
    }




    // Login User
    public function login_user(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
                return redirect('/');
            } else {
                return redirect()->back()->with('error_message', "Invalied Email Or Password !");
            }
        }
    }



    // Logout User
    public function logout_user()
    {
        Auth::logout();
        return redirect('/');
    }
}

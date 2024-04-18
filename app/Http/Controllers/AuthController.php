<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use function Laravel\Prompts\password;


class AuthController extends Controller
{
    public function login(): View
    {
        return view('auth.login');
    }

    public function validate(Request $request)
    {
        $credentials =[
            'email' =>$request->email,
            'password'=>$request->password
        ];
        echo $credentials['password'];
        if (Auth::attempt($credentials)) {
            return redirect('/admin')->with('success', 'Login Success');
        }
        else
        {
            echo "failure_choom";
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function register(): View
    {
        return view('auth.register');
    }

    public function registerPost(Request $request)
    {
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return redirect('/');
    }
}

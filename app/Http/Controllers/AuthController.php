<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
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
            return redirect('/login')->with('failure', 'Neteisingi duomenys');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function register(): View
    {
        return view('auth.admin_view',
            [
                'admins'=>user::all()
            ]);
    }

    public function add(): View
    {
        return view('auth.register');
    }
    public function registerPost(UserRequest $request)
    {
        $request->validated();
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return redirect('register');
    }
    public function destroy($id)
    {
        $User = user::find($id);
        $User->delete();
        return redirect('register');
    }

    public function update(UserRequest $request, $id)
    {
        $User=user::find($id);
        $User->password= Hash::make($User->password);
        $User->update($request->all());
        $User->save();
        return redirect()->route('register');
    }

    public function edit($id)
    {
        $User = user::find($id);
        return view('auth.admin_edit',
            [
                'admin'=>$User,
            ]);
    }
}

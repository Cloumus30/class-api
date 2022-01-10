<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{

    public function loginPage(){
        return view('login-page');
    }

    public function loginView($guard){
        return view('login',['guard'=>$guard]);
    }

    public function authenticate(Request $request,$guard){
        $credential = $request->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);
        

        if(Auth::guard($guard)->attempt($credential)){
            $request->session()->regenerate();
            return redirect()->intended('/'.$guard);
        }else{
            return 'Tidak Ada Otoritas';    
        }
        return 'username tidak ada';
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}

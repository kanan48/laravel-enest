<?php

namespace App\Http\Controllers;
use App\Models\signup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\hash;
use Illuminate\Support\Facades\Auth;
use App\Models\category;
use Illuminate\Support\Facades\session;

class CrudController extends Controller
{
    public function signup(Request $request)
    {
        $add = new signup;
        if($request->isMethod('POST'))
        {
            $add->fullname = $request->get('fname');
            $add->email = $request->get('email');
            $add->password = hash::make($request->get('password'));
            $add->save();
        }
        return view('login');
    }

    public function login_data(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'password' => 'required',
        ]);

        $credentials=$request->only('fullname','password');

       if (Auth::guard('signup')->attempt($credentials)){
            // Authentication successful
          return redirect()->intended('home');
        }
        return redirect("/")->with('error', 'Oops! You have entered invalid credentials');
        
    }

    public function logout(){// to end session
        Session::flush();
        Auth::logout();
  
        return Redirect('/');
    }    
}

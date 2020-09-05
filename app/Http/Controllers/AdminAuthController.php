<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminAuthController extends Controller
{

    public function loggin_view()
    {
        return view ('auth.register');
    }

    public function login(Request $request)
    {
      if (Auth::attempt(['email' => $request ->input('email'), 'password' => $request ->input('password')]))
       {
        return redirect()->intended();
      } else
      {
        return back();
      }
    }

}

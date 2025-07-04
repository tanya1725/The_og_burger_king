<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Login;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function logincheck(Request $request)
    {
        // Validate the input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Retrieve the user by email
        $login = Login::where('email', $request->email)->first();

        // Check credentials
        if ($login && Hash::check($request->password, $login->password)) {
            // Authentication passed
            return redirect()->intended('register') // or any route you want
                             ->with('success', 'Login successful!');
        } else {
            // Authentication failed
            return redirect()->back()
                             ->withErrors(['email' => 'Invalid login credentials'])
                             ->withInput();
        }
    }

    function register(Request $req)
    {
        $validatedData = $req->validate([
            'password' => 'required|min:8',
        ]);
        $login = new Login;
        $login->email = $req->email;
        $login->password = Hash::make($req->password); 
        $login->save();
        session()->flash('success', 'Data saved successfully.');
        
    }
}

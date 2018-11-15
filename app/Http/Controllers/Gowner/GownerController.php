<?php

namespace App\Http\Controllers\Gowner;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Gowner;
class GownerController extends Controller
{
    public function register()
    {
        if (Session::get('gownerEmail')) {
            return redirect('/gowner/dashboard');
        } else {
            return view('gowner.auth.register');
        }
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|unique:buyers|max:255',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|min:6',
        ]);
        $gowner = new Gowner();
        $gowner->name = $request->name;
        $gowner->email = $request->email;
        $gowner->password = Hash::make($request->password);
        $gowner->save();
        $gownerEmail = $gowner->email;
        Session::put('gownerEmail', $gownerEmail);
        return redirect('/gowner/dashboard');
    }
}

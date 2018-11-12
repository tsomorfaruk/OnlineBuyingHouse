<?php

namespace App\Http\Controllers\Buyer;

use App\Buyer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
class BuyerController extends Controller
{

    //Get Register form
    public function register()
    {
        if (Session::get('buyerEmail')) {
            return redirect('/buyer/dashboard');
        } else {
            return view('buyer.auth.register');
        }
    }

    //Store buyer info
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|unique:buyers|max:255',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|min:6',
        ]);
        $buyer = new Buyer();
        $buyer->name = $request->name;
        $buyer->email = $request->email;
        $buyer->password = Hash::make($request->password);
        $buyer->save();
        $buyerEmail = $buyer->email;
        Session::put('buyerEmail', $buyerEmail);
        return redirect('/buyer/dashboard');
    }

    //Buyer Dashboard
    public function index()
    {
        if (Session::get('buyerEmail')) {
            $buyerEmail = Session::get('buyerEmail');
            $buyerbyEmail = Buyer::where('email', $buyerEmail)->first();
            return view('buyer.home.homeContent', ['buyerbyemail' => $buyerbyEmail]);
        } else {
            return redirect('/buyer/login');
        }

    }

    //Get Login form
    public function showLoginForm()
    {
        if (Session::get('buyerEmail')) {
            return redirect('/buyer/dashboard');
        } else {
            return view('buyer.auth.login');
        }
    }

    //post login form
    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $buyer = Buyer::where('email', $email)->first();
        $buyerEmail = $buyer->email;
        Session::put('buyerEmail', $buyerEmail);
        if ($buyer) {
            if (!Hash::check($password, $buyer->password)) {
                return redirect('/buyer/login')->with('message', 'Not Login. Your password is wrong.');
            } else {

                return redirect('/buyer/dashboard');
            }
        } else {
            return redirect('/buyer/login')->with('message', 'Not Login. Your Email is wrong.');
        }
    }

    //get logout
    public function logout()
    {
        Session::flush();
        return redirect('/');
    }

    public function postJob()
    {
        if (Session::get('buyerEmail')) {
            $buyerEmail = Session::get('buyerEmail');
            $buyerbyEmail = Buyer::where('email', $buyerEmail)->first();
            return view('buyer.posts.post', ['buyerbyemail' => $buyerbyEmail]);
        } else {
            return redirect('/buyer/login');
        }

    }
}

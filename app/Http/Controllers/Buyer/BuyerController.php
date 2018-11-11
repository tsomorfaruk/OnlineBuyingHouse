<?php

namespace App\Http\Controllers\Buyer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Buyer;
use Session;
class BuyerController extends Controller
{

    //Get Register form
    public function register()
    {
        return view('buyer.auth.register');
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
        $buyer->password = bcrypt($request->password);
        $buyer->save();
        $buyerEmail = $buyer->email;
        Session::put('buyerEmail',$buyerEmail);
        return redirect('/buyer/dashboard');
    }

    //Buyer Dashboard
    public function index()
    {
        $buyerEmail = Session::get('buyerEmail');
        $buyerbyEmail = Buyer::where('email',$buyerEmail)->first();
        return view('buyer.home.homeContent', ['buyerbyemail' => $buyerbyEmail]);
    }

    //Get Login form
    public function login()
    {
        return view('buyer.auth.login');
    }
}

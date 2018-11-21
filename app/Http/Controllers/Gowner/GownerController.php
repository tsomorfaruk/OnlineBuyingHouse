<?php

namespace App\Http\Controllers\Gowner;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Gowner;
use App\Post;
use App\Buyer;
use DB;
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
            'email' => 'required|unique:gowners|max:255',
            'phone' => 'required|unique:gowners|min:11|max:11',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|min:6',
        ]);
        $gowner = new Gowner();
        $gowner->name = $request->name;
        $gowner->email = $request->email;
        $gowner->phone = $request->phone;
        $gowner->activationStatus = 'private';
        $gowner->password = Hash::make($request->password);
        $gowner->save();
        $gownerEmail = $gowner->email;
        Session::put('gownerEmail', $gownerEmail);
        return redirect('/gowner/dashboard');
    }

    public function index()
    {
        if (Session::get('gownerEmail')) {
            $gownerEmail = Session::get('gownerEmail');
            $gownerbyEmail = Gowner::where('email', $gownerEmail)->first();
            $posts = DB::table('posts')
                ->join('categories', 'posts.categoryId', '=', 'categories.id')
                ->select('posts.*','categories.categoryName')
                ->where('posts.deleted_at', '=', NULL)
                ->get();
            return view('gowner.home.homeContent', ['posts'=>$posts, 'gownerbyemail' => $gownerbyEmail]);
        } else {
            return redirect('/gowner/login');
        }
    }

    public function showLoginForm()
    {
        if (Session::get('gownerEmail')) {
            return redirect('/gowner/dashboard');
        } else {
            return view('gowner.auth.login');
        }
    }

    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $gowner = Gowner::where('email', $email)->first();

        if ($gowner) {
            if (!Hash::check($password, $gowner->password)) {

                return redirect('/gowner/login')->with('message', 'Not Login. Your password is wrong.');
            } else {
                $gownerEmail = $gowner->email;
                Session::put('gownerEmail', $gownerEmail);
                return redirect('/gowner/dashboard');
            }
        } else {
            return redirect('/gowner/login')->with('message', 'Not Login. Your Email is wrong.');
        }
    }

    public function logout()
    {
        Session::flush();
        return redirect('/');
    }
}

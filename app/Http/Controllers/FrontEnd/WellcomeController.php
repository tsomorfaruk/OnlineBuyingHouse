<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WellcomeController extends Controller
{
    public function index()
    {
        return view('frontEnd.home.homeContent');
    }

    public function aboutUs()
    {
        return view('frontEnd.aboutUs.aboutUsContent');
    }
}

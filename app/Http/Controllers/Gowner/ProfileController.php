<?php

namespace App\Http\Controllers\Gowner;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Gowner;
use App\Category;
use App\Buyer;
use DB;
use File;
use PDF;

class ProfileController extends Controller
{

    public function index()
    {
        if (Session::get('gownerEmail')) {
            $gownerEmail = Session::get('gownerEmail');
            $gownerbyEmail = Gowner::where('email', $gownerEmail)->first();
            $categoryid = $gownerbyEmail->categoryId;
            $category = new Category();
            $categorybyid = Category::where('id', $categoryid)->first();
            return view('gowner.profile.viewProfile',['gownerbyemail'=>$gownerbyEmail, 'categorybyid'=>$categorybyid]);
        }
        else
        {
            return redirect('/gowner/login');
        }
    }
    public function createProfile()
    {
        if (Session::get('gownerEmail')) {
            $gownerEmail = Session::get('gownerEmail');
            $gownerbyEmail = Gowner::where('email', $gownerEmail)->first();
            $category = new Category();
            $categories = Category::all();
            return view('gowner.profile.createProfile',['gownerbyemail'=>$gownerbyEmail, 'categories'=>$categories]);
        }
        else
        {
            return redirect('/gowner/login');
        }
    }
    private function imageExistStatus($request)
    {
        $gowneremail = Session::get('gownerEmail');
        $gownerByEmail = Gowner::where('email', $gowneremail)->first();
        $profileImage = $request->file('imagePath');
        if ($profileImage) {
            File::delete($gownerByEmail->imagePath);
            $imageName = $profileImage->getClientOriginalName();
            $newImageName = explode('.', $imageName, 2);
            $newImageName[0] = $request->name;
            $newImageName = implode('.', $newImageName);
            $uploadpath = 'gowner/profileImage/';
            $profileImage->move($uploadpath, $newImageName);
            $imageUrl = $uploadpath . $newImageName;
        } else {
            $imageUrl = $gownerByEmail->imagePath;
        }
        return $imageUrl;
    }

    public function storeProfile(Request $request)
    {
        $imageUrl = $this->imageExistStatus($request);
        $gownerEmail = Session::get('gownerEmail');
        $gowner = Gowner::where('email', $gownerEmail)->first();
        $gowner->name = $request->name;
        $gowner->phone = $request->phone;
        $gowner->overview = $request->overview;
        $gowner->categoryId = $request->categoryId;
        $gowner->address = $request->address;
        $gowner->country = $request->country;
        $gowner->imagePath = $imageUrl;
        $gowner->workquality = $request->workquality;
        $gowner->save();
        $gownerEmail = $gowner->email;
        Session::put('gownerEmail', $gownerEmail);
        return redirect('/gowner/my-profile')->with('message', 'Profile updated successfully!');
    }

    public function portfolioProfile()
    {
        if (Session::get('gownerEmail')) {
            $gownerEmail = Session::get('gownerEmail');
            $gownerbyEmail = Gowner::where('email', $gownerEmail)->first();
            return view('gowner.profile.portfolioProfile',['gownerbyemail'=>$gownerbyEmail]);
        }
        else
        {
            return redirect('/gowner/login');
        }
    }
    public function savePortfolio(Request $request)
    {
        $portfolioUrl = $this->pdfExistStatus($request);
        $gownerEmail = Session::get('gownerEmail');
        $gowner = Gowner::where('email', $gownerEmail)->first();
        $gowner->portfolio = $portfolioUrl;
        $gowner->save();
        $gownerEmail = $gowner->email;
        Session::put('gownerEmail', $gownerEmail);
        return redirect('/gowner/my-profile')->with('message', 'New Portfolio saved successfully!');
    }
    private function pdfExistStatus($request)
    {
        $gowneremail = Session::get('gownerEmail');
        $gownerByEmail = Gowner::where('email', $gowneremail)->first();
        $portfolio = $request->file('portfolio');
        if ($portfolio) {
            File::delete($gownerByEmail->portfolio);
            $portfolioName = $portfolio->getClientOriginalName();
            $newPortfolioName = explode('.', $portfolioName, 2);
            $newPortfolioName[0] = $gownerByEmail->name;
            $newPortfolioName = implode('.', $newPortfolioName);
            $uploadpath = 'gowner/portfolio/';
            $portfolio->move($uploadpath, $newPortfolioName);
            $portfolioUrl = $uploadpath . $newPortfolioName;
        } else {
            $portfolioUrl = $gownerByEmail->portfolio;

        }
        return $portfolioUrl;
    }
}

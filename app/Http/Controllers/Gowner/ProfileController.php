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

class ProfileController extends Controller
{
    public function createProfile()
    {
        if (Session::get('gownerEmail')) {
            $gownerEmail = Session::get('gownerEmail');
            $gownerbyEmail = Gowner::where('email', $gownerEmail)->first();
            $category = new Category();
            $category = Category::all();
            return view('gowner.profile.createProfile',['gownerbyemail'=>$gownerbyEmail, 'categories'=>$category]);
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
            unlink($gownerByEmail->imagePath);
            $imageName = $gownerByEmail->getClientOriginalName();
            $newImageName = explode('.', $imageName, 2);
            $newImageName[0] = $request->productName;
            $newImageName = implode('.', $newImageName);
            $uploadpath = 'gowner/profileImage/';
            $profileImage->move($uploadpath, $newImageName);
            $imageUrl = $uploadpath . $newImageName;
        } else {
            $imageUrl = $gownerByEmail->productImage;
        }
        return $imageUrl;
    }
    public function storeProfile(Request $request)
    {
        $imageUrl = $this->imageExistStatus($request);
        $gowner = Gowner::find($request->email);
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
        return redirect('/gowner/my-profile');
    }
}

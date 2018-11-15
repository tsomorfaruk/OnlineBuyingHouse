<?php

namespace App\Http\Controllers\Buyer;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Buyer;
use Illuminate\Support\Facades\Session;
use App\Category;
class PostController extends Controller
{
    public function createPost()
    {
        if (Session::get('buyerEmail')) {
            $buyerEmail = Session::get('buyerEmail');
            $buyerbyEmail = Buyer::where('email', $buyerEmail)->first();
            $categories = Category::where('publicationStatus', 1)->get();
            return view('buyer.posts.createPost', ['categories' => $categories,'buyerbyemail' => $buyerbyEmail]);
        } else {
            return redirect('/buyer/login');
        }
    }

    public function savePost(Request $request)
    {
        $this->validate($request, [
            'postTitle' => 'required',
            'postDescription' => 'required',
            'postBudget' => 'required',
            'categoryId' => 'required',
            'jobType' => 'required'
        ]);
        $post = new Post();
        $post->postTitle = $request->postTitle;
        $post->postDescription = $request->postDescription;
        $post->postBudget = $request->postBudget;
        $post->categoryId = $request->categoryId;
        $post->jobType = $request->jobType;
        $post->buyerId = $request->buyerId;
        $post->save();
        return redirect('/buyer/post-job')->with('message', 'New Post Job Saved Successfully!');

    }
}

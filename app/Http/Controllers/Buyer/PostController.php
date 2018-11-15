<?php

namespace App\Http\Controllers\Buyer;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Buyer;
use Illuminate\Support\Facades\Session;
use App\Category;
use DB;
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

    public function managePost()
    {
        if (Session::get('buyerEmail')) {
            $buyerEmail = Session::get('buyerEmail');
            $buyerbyEmail = Buyer::where('email', $buyerEmail)->first();
            $posts = DB::table('posts')
                ->join('categories', 'posts.categoryId', '=', 'categories.id')
                ->select('posts.*', 'categories.categoryName')
                ->where('posts.deleted_at', '=', NULL)
                ->get();
            return view('buyer.posts.managePost', ['posts' => $posts,'buyerbyemail' => $buyerbyEmail]);
        } else {
            return redirect('/buyer/login');
        }
    }

    public function editPost($id)
    {
        if (Session::get('buyerEmail')) {
            $buyerEmail = Session::get('buyerEmail');
            $buyerbyEmail = Buyer::where('email', $buyerEmail)->first();
            $categories = Category::where('publicationStatus', 1)->get();
            $postbyid = Post::where('id', $id)->first();
            return view('buyer.posts.editPost',
                ['postbyid' => $postbyid,'buyerbyemail' => $buyerbyEmail, 'categories'=>$categories]);
        } else {
            return redirect('/buyer/login');
        }
    }

    public function updatePost(Request $request)
    {
        $this->validate($request, [
            'postTitle' => 'required',
            'postDescription' => 'required',
            'postBudget' => 'required',
            'categoryId' => 'required',
            'jobType' => 'required'
        ]);
        $post = Post::find($request->postId);
        $post->postTitle = $request->postTitle;
        $post->postDescription = $request->postDescription;
        $post->postBudget = $request->postBudget;
        $post->categoryId = $request->categoryId;
        $post->jobType = $request->jobType;
        $post->buyerId = $request->buyerId;
        $post->save();
        return redirect('/buyer/post/manage')->with('message', 'Product Info Update Successfully');
    }

    public function deletePost($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('/buyer/post/manage')->with('message', 'Post Info Delete Successfully');
    }
}

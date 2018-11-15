@extends('buyer.master')
@section('title')
    Edit Job Post - Buyer
@endsection
@section('mainContent')
    <section id="titlebar">
        <!-- Container -->
        <div class="container">

            <div class="eight columns">
                <h3 class="left">Edit Job Post</h3>
            </div>

            <div class="eight columns">
                <nav id="breadcrumbs">
                    <ul>
                        <li>You are here:</li>
                        <li><a href="{{url('/buyer/dashboard')}}">Home</a></li>
                        <li><a href="{{url('/buyer/post/manage')}}">Manage Job Post</a></li>
                        <li>Edit Job Post</li>
                    </ul>
                </nav>
            </div>

        </div>
        <!-- Container / End -->
    </section>

    <!-- Content -->
    <div id="content">
        <div class="container">
            <div class="row">
                <h3 class="text-center text-success">{{Session::get('message')}}</h3>
                <div class="span9">
                    <!-- Blog Detail Content -->
                    <div class="row">

                        <div class="span8">
                            <div class="row space20"></div>

                            <!-- Blog Form -->
                            {!! Form::open(['class'=>'form-comment','role'=>'form','method'=>'POST', 'url'=>'/buyer/post/update', 'name'=>'updatePostForm']) !!}
                            <div class="row">
                                <div class="span8">
                                    Post Title*<br>
                                    <input type="text" name="postTitle" value="{{$postbyid->postTitle}}" required><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="span8">
                                    Post Description *<br>
                                    <textarea type="text" name="postDescription" required>{{$postbyid->postDescription}}</textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="span4">
                                    Est. Budget *<br>
                                    <input type="number" name="postBudget" value="{{$postbyid->postBudget}}" required><br>
                                </div>
                                <div class="span4">
                                    Select Category *<br>
                                    <select name="categoryId">
                                        <option value="{{$postbyid->categoryId}}">Select Category Name</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->categoryName}}</option>
                                        @endforeach
                                    </select><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="span4">
                                    Job Tipe *<br>
                                    <select name="jobType">
                                        <option>{{$postbyid->jobType}}</option>
                                        <option value="Entry Level">Entry Level</option>
                                        <option value="Intermediate">Intermediate</option>
                                        <option value="Advance">Advance</option>
                                    </select><br>
                                </div>
                            </div>
                            <div class="row space20"></div>
                            <input type="hidden" name="buyerId" value="{{$buyerbyemail->id}}">
                            <input type="hidden" name="postId" value="{{$postbyid->id}}">
                            <div class="row">
                                <div class="span4">
                                    <button type="submit" class="btn f-right"> Update Post</button>
                                </div>
                            </div>
                        {!! Form::close() !!}
                        <!-- Blog Form End -->
                        </div>
                    </div>
                    <!-- Blog Detail Content End -->
                </div>

                <!-- Side Bar -->
                <div class="span3">

                    <h3 class="p-t-0">Search</h3>
                    <div class="search-box">
                        <a href="#" class="search-icon"><i class="icon-search"></i></a>
                        <input class="search" name="" value="Search">
                    </div>

                    <h3>Categories</h3>
                    <ul class="list-c">
                        <li><i class="icon-chevron-right"></i><a href="#">Business Plan</a></li>
                        <li><i class="icon-chevron-right"></i><a href="#">Entertainment</a></li>
                        <li><i class="icon-chevron-right"></i><a href="#">News & Politics</a></li>
                        <li><i class="icon-chevron-right"></i><a href="#">Social Media Networks</a></li>
                        <li><i class="icon-chevron-right"></i><a href="#">Technology & Innovation</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
@endsection
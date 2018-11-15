@extends('buyer.master')
@section('title')
    Manage Job Posts - Buyer
@endsection
@section('mainContent')
    <section id="titlebar">
        <!-- Container -->
        <div class="container">

            <div class="eight columns">
                <h3 class="left">Manage Job Posts</h3>
            </div>

            <div class="eight columns">
                <nav id="breadcrumbs">
                    <ul>
                        <li>You are here:</li>
                        <li><a href="{{url('/buyer/dashboard')}}">Home</a></li>
                        <li>Manage Job Posts</li>
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
                <div class="span12">
                    <!-- Blog Detail Content -->
                    <div class="row">
                        <div class="span12">
                            <table>
                                <thead >
                                <tr>
                                    <th style="background-color: #fb8865">Post ID.</th>
                                    <th style="background-color: #fb8865">Post Title</th>
                                    <th style="background-color: #fb8865">Post Description</th>
                                    <th style="background-color: #fb8865">Post Budget</th>
                                    <th style="background-color: #fb8865">Job Type</th>
                                    <th style="background-color: #fb8865">Catetgory</th>
                                    <th style="background-color: #fb8865">Update Date</th>
                                    <th style="background-color: #fb8865; color: white">Action</th>
                                </tr>
                                </thead>
                                <tbody >
                                @foreach($posts as $post)
                                    <tr>
                                        <td style="background-color: #ffffff; color: black">{{$post->id}}</td>
                                        <td style="background-color: #ffffff; color: black">{{$post->postTitle}}</td>
                                        <td style="background-color: #ffffff; color: black">{{$post->postDescription}}</td>
                                        <td style="background-color: #ffffff; color: black">{{$post->postBudget}}</td>
                                        <td style="background-color: #ffffff; color: black">{{$post->jobType}}</td>
                                        <td style="background-color: #ffffff; color: black">{{$post->categoryName}}</td>
                                        <td style="background-color: #ffffff; color: black">{{$post->updated_at}}</td>
                                        <td style="background-color: #ffffff; color: black">
                                            <a href="{{'/buyer/post/edit/'.$post->id}}" class="btn btn-success"
                                               title="Post Edit">
                                                Edit
                                            </a>
                                            <a href="{{'/buyer/post/delete/'.$post->id}}" class="btn btn-danger"
                                               title="Post Delete"
                                               onclick="return confirm('Are you want to delete this');">
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row space50"></div>
@endsection
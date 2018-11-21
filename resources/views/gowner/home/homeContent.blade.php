@extends('gowner.master')
@section('title')
    Garment Owner Dashboard
@endsection
@section('mainContent')

    <section id="titlebar">
        <!-- Container -->
        <div class="container">

            <div class="eight columns">
                <h3 class="left">My Job Feed</h3>
            </div>

            <div class="eight columns">
                <nav id="breadcrumbs">
                    <ul>
                        <li>You are here:</li>
                        <li><a href="#">Dashboard</a></li>
                    </ul>
                </nav>
            </div>

        </div>
        <!-- Container / End -->
    </section>
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <h3>&nbsp;</h3>
                </div>
                <div class="span3">

                    <h3 class="p-t-0">Search</h3>
                    <div class="search-box">
                        <a href="#" class="search-icon"><i class="icon-search"></i></a>
                        <input class="search" name="" value="Search">
                    </div>

                    <h3>My Categories</h3>
                    <ul class="list-c">
                        <li><i class="icon-chevron-right"></i><a href="#">Business Plan</a></li>
                        <li><i class="icon-chevron-right"></i><a href="#">Entertainment</a></li>
                        <li><i class="icon-chevron-right"></i><a href="#">News & Politics</a></li>
                        <li><i class="icon-chevron-right"></i><a href="#">Social Media Networks</a></li>
                        <li><i class="icon-chevron-right"></i><a href="#">Technology & Innovation</a></li>
                    </ul>
                    <div class="row space50"></div>
                </div>
                <div class="span9">
                    <!-- Blog Item -->
                    <div class="row">
                        @foreach($posts as $post)
                        <div class="span8">
                            <div class="row">
                                <div class="span8 post-d-info">
                                    <a href="blog-detail.htm"><h3>{{$post->postTitle}}</h3></a>
                                    <div class="blue-dark">
                                        <i class="icon-user"></i> {{$post->jobType}} <i class="icon-tag"></i> Est. Budger {{$post->postBudget}}$ <i class="icon-comment-alt"></i>Category: {{$post->categoryName}}
                                    </div>
                                    <p>{{$post->postDescription}}</p>
                                </div>

                            </div>
                        </div>
                            @endforeach
                    </div>
                    <!-- Blog Item End -->

                    <div class="row space40"></div>

                    <!-- Blog Item End -->

                    <div class="row space30"></div>

                    <!-- Paging -->
                    <div class="row">
                        <div class="span9">
                            <a href="#" class="paging">&#62;</a>
                            <a href="#" class="paging">84</a>
                            <a href="#" class="paging">83</a>
                            <a href="#" class="paging">82</a>
                            <a href="#" class="paging">...</a>
                            <a href="#" class="paging">3</a>
                            <a href="#" class="paging">2</a>
                            <a href="#" class="paging">1</a>
                            <a href="#" class="paging">&#60;</a>
                        </div>
                    </div>
                    <!-- Paging End -->
                    <div class="row space40"></div>
                </div>
                <!-- Side Bar -->
            </div>
        </div>
    </div>
@endsection
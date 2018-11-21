@extends('gowner.master')
@section('title')
    My Profile - Garment Owner
@endsection
@section('mainContent')

    <section id="titlebar">
        <!-- Container -->
        <div class="container">

            <div class="eight columns">
                <h3 class="left">My Profile</h3>
            </div>

            <div class="eight columns">
                <nav id="breadcrumbs">
                    <ul>
                        <li>You are here:</li>
                        <li><a href="{{url('/gowner/dashboard')}}">Home</a></li>
                        <li>My Profile</li>
                    </ul>
                </nav>
            </div>

        </div>
        <!-- Container / End -->
    </section>
    <div id="content">
        <div class="container">
            <div class="row">
                <h3 class="text-center text-success">{{Session::get('message')}}</h3>

                <div class="span12">
                </div>
                <div class="span3">
                    <div class="row space50"></div>
                    <div class="row space50"></div>
                    <h3>Profile Settings</h3>
                    <ul class="list-c">
                        <li><i class="icon-chevron-right"></i><a style="color: #fb8865; font-weight: bold" href="{{url('/gowner/update-profile')}}">Edit Profile</a></li>
                        <li><i class="icon-chevron-right"></i><a style="color: #fb8865; font-weight: bold" href="{{url('/gowner/my-portfolio')}}">Portfolio</a></li>
                        <li><i class="icon-chevron-right"></i><a style="color: #fb8865; font-weight: bold" href="{{url('/gowner/my-certifications')}}">Certifications</a></li>
                        <li><i class="icon-chevron-right"></i><a style="color: #fb8865; font-weight: bold" href="{{url('/gowner/activation-status')}}">Activation Status</a></li>
                        <li><i class="icon-chevron-right"></i><a style="color: #fb8865; font-weight: bold" href="{{url('/gowner/update-password')}}">Update Password</a></li>
                        <li><i class="icon-chevron-right"></i><a style="color: #fb8865; font-weight: bold" href="{{url('/gowner/logout')}}">Logout</a></li>
                    </ul>
                    <div class="row space50"></div>
                </div>
                <div class="span9">
                    <!-- Blog Item -->
                    <div class="row">
                        {!! Form::open(['class'=>'form-comment','role'=>'form','method'=>'POST', 'url'=>'/gowner/profile/save-portfolio', 'name'=>'createPortfolioForm' , 'enctype'=>'multipart/form-data']) !!}
                        <div class="row">
                            <div>
                                {{--<a href="{{asset($gownerbyemail->portfolio)}}">Open the pdf!</a>
                                {{ link_to_asset('files/file.pdf', 'Open the pdf!') }}</div>--}}
                            <div class="span4">
                                Portfolio(Must be PDF format)<br>
                                <input type="file" name="portfolio" accept="application/pdf"><br>
                                <button type="submit" class="btn f-right"> Upload Portfolio</button>
                            </div>
                        </div>
                        <div class="row space20"></div>
                        {!! Form::close() !!}
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
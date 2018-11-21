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
                        <div class="row">
                            <div class="span8">
                                <img src="{{asset($gownerbyemail->imagePath)}}" style="max-height: 200px; max-width: 250px" alt="Set Your Profile Picture">
                            </div>
                        </div>
                        <div class="row">
                            <div class="span4">
                                <p  class="viewprofile">Name: {{$gownerbyemail->name}}</p><br>
                            </div>
                            <div class="span4">
                                <p  class="viewprofile">Email: {{$gownerbyemail->email}}</p><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="span4">
                                <p  class="viewprofile">Phone: {{$gownerbyemail->phone}}</p><br>
                            </div>
                            <div class="span4">
                                <p  class="viewprofile">Category: {{$categorybyid->categoryName}}</p><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="span4">
                                <p  class="viewprofile">Country: {{$gownerbyemail->country}}</p><br>
                            </div>
                            <div class="span4">
                                <p  class="viewprofile">Work Quality: {{$gownerbyemail->workQuality}}</p><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="span4">
                                <textarea  class="viewprofile" rows="6">Address: {{$gownerbyemail->address}}</textarea><br>
                            </div>
                            <div class="span4">
                                <textarea class="viewprofile" rows="6">Overview: {{$gownerbyemail->overview}}</textarea>
                            </div>
                        </div>
                        <div class="row space20"></div>
                    </div>
                    <div class="row space40"></div>
                </div>
                <!-- Side Bar -->
            </div>
        </div>
    </div>
@endsection
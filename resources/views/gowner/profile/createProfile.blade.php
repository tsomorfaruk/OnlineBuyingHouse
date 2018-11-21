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
                        <li><i class="icon-chevron-right"></i><a style="color: #fb8865; font-weight: bold" href="{{url('/gowner/my-profile')}}">My Profile</a></li>
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
                        {!! Form::open(['class'=>'form-comment','role'=>'form','method'=>'POST', 'url'=>'/gowner/profile/save', 'name'=>'createProfileForm' , 'enctype'=>'multipart/form-data']) !!}
                        <div class="row">
                            <div class="span8">
                                Name *<br>
                                <input type="text" name="name" value="{{$gownerbyemail->name}}" required><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="span4">
                                Email(Read only)<br>
                                <input type="text" name="email" value="{{$gownerbyemail->email}}" required readonly><br>
                            </div>
                            <div class="span4">
                                Phone *<br>
                                <input type="text" name="phone" value="{{$gownerbyemail->phone}}" required><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="span8">
                                Overview *<br>
                                <textarea type="text" name="overview" required>{{$gownerbyemail->overview}}</textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="span4">
                                Country *<br>
                                <select name="country" required>
                                    <option value="{{$gownerbyemail->country}}">{{$gownerbyemail->country}}</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="China">China</option>
                                    <option value="India">India</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Vietnam">Vietnam</option>
                                </select><br>
                            </div>
                            <div class="span4">
                                Select Category *
                                <select name="categoryId" required>
                                    <option value="">Select Category Name</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->categoryName}}</option>
                                    @endforeach
                                </select><br>
                                <br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="span8">
                                Address *<br>
                                <input type="text" name="address" value="{{$gownerbyemail->address}}" required><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="span4">
                                Work Quality *<br>
                                <select name="workquality" required>
                                    <option value="{{$gownerbyemail->workQuality}}">{{$gownerbyemail->workQuality}}</option>
                                    <option value="Low">Low</option>
                                    <option value="Medium">Medium</option>
                                    <option value="High">High</option>
                                </select><br>
                            </div>
                            <div class="span4">
                                Image *<br>
                                <input type="file" name="imagePath" accept="image/*">
                                <div><img src="{{asset($gownerbyemail->imagePath)}}"  height="50" width="50" alt="Set Your Profile Picture"></div>
                            </div>
                        </div>
                        <div class="row space20"></div>
                        <input type="hidden" name="gownerid" value="">
                        <div class="row">
                            <div class="span4">
                                <button type="submit" class="btn f-right"> Update Profile</button>
                            </div>
                        </div>
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
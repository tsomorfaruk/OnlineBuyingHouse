@extends('frontEnd.master')
@section('title')
    About Us - Online Buying House
    @endsection
@section('header')
    <header id="header">
        <div class="container">
            <div class="row t-container">

                <!-- Logo -->
                <div class="span3">
                        <a href="{{url('/')}}"><img src="{{URL::asset('frontEnd/img')}}/logo-h.png" style="height: 100px; width: 300px;"></a>
                </div>

                <div class="span9">
                    <div class="row space60"></div>
                    <nav id="nav" role="navigation">
                        <a href="#nav" title="Show navigation">Show navigation</a>
                        <a href="#" title="Hide navigation">Hide navigation</a>
                        <ul class="clearfix" >
                            <li ><a href="{{url('/')}}" title="">Home</a></li>
                            <li class="active"><a href="{{url('/about-us')}}">About Us</a></li>
                            <li><a href="gallery.htm" title="">Gallery</a></li>
                            <li><a href="services.htm" title="">Services</a></li>
                            <li><a href="#" title=""><span>Login/Registration</span></a>
                                <ul> <!-- Submenu -->
                                    <li><a href="{{url('/buyer/login')}}" title="">Buyer Login</a></li>
                                    <li><a href="{{url('/gowner/login')}}" title="">Garment Owner Login</a></li>
                                </ul> <!-- End Submenu -->
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="row space40"></div>
            <!-- Slider End -->
        </div>
    </header>
@endsection
@section('mainContent')
    <section id="titlebar">
        <!-- Container -->
        <div class="container">
            <div class="eight columns">
                <h3 class="left">About</h3>
            </div>
        </div>
        <!-- Container / End -->
    </section>
    <div id="content">
        <div class="container">

            <div class="row">
                <div class="span12">
                    <h4>Who We Are?</h4>
                    <p>Ucorpora ut molestie turpis, elementum tempor metus. Vestibulum non nibh porttitor, eleifend purus eu, pulvinar orci. Quisque a gravida lorem, eu lobortis magna. Nulla auctor urna quis facilisis pretium. Cras facilisis risus sed mauris gravida, id vestibulum erat dictum. Nam in ante massa. Integer ultricies libero lorem, egestas dictum augue aliquam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis.</p>

                    <p>Elementum tempor metus donec ut molestie turpis. Vestibulum non nibh porttitor, eleifend purus eu, pulvinar orci. Quisque a gravida lorem, eu lobortis magna. Nulla auctor urna quis facilisis pretium. Cras facilisis risus sed mauris gravida, id vestibulum erat dictum. Nam in ante massa. Integer ultricies libero lorem.</p>
                    <!-- Our Team -->
                    <h3>Our Team</h3>

                    <div  class="slider2 team flexslider">
                        <ul class="slides">
                            <li>
                                <div class="row">

                                    <a href="#">
                                        <div class="span3 square-1">
                                            <div class="img-container">
                                                <img src="img/our-team/1.jpg" alt="">
                                                <div class="img-bg-icon"></div>
                                            </div>
                                            <h4>John Smith</h4>
                                            managing director
                                        </div>
                                    </a>

                                    <a href="#">
                                        <div class="span3 square-1">
                                            <div class="img-container">
                                                <img src="img/our-team/2.jpg" alt="">
                                                <div class="img-bg-icon"></div>
                                            </div>
                                            <h4>Jokey Holid</h4>
                                            designer
                                        </div>
                                    </a>

                                    <a href="#">
                                        <div class="span3 square-1">
                                            <div class="img-container">
                                                <img src="img/our-team/3.jpg" alt="">
                                                <div class="img-bg-icon"></div>
                                            </div>
                                            <h4>Graham Bill</h4>
                                            project manager
                                        </div>
                                    </a>

                                    <a href="#">
                                        <div class="span3 square-1">
                                            <div class="img-container">
                                                <img src="img/our-team/4.jpg" alt="">
                                                <div class="img-bg-icon"></div>
                                            </div>
                                            <h4>Kenny Delak </h4>
                                            developer
                                        </div>
                                    </a>

                                </div>
                            </li>
                            <li>
                                <div class="row">

                                    <a href="#">
                                        <div class="span3 square-1">
                                            <div class="img-container">
                                                <img src="img/our-team/3.jpg" alt="">
                                                <div class="img-bg-icon"></div>
                                            </div>
                                            <h4>Joe Ganesha</h4>
                                            founder
                                        </div>
                                    </a>

                                    <a href="#">
                                        <div class="span3 square-1">
                                            <div class="img-container">
                                                <img src="img/our-team/4.jpg" alt="">
                                                <div class="img-bg-icon"></div>
                                            </div>
                                            <h4>Mario Balio</h4>
                                            programmer
                                        </div>
                                    </a>

                                    <a href="#">
                                        <div class="span3 square-1">
                                            <div class="img-container">
                                                <img src="img/our-team/1.jpg" alt="">
                                                <div class="img-bg-icon"></div>
                                            </div>
                                            <h4>Jane Buckler</h4>
                                            junior designer
                                        </div>
                                    </a>

                                    <a href="#">
                                        <div class="span3 square-1">
                                            <div class="img-container">
                                                <img src="img/our-team/2.jpg" alt="">
                                                <div class="img-bg-icon"></div>
                                            </div>
                                            <h4>Zeda Junar</h4>
                                            analyst
                                        </div>
                                    </a>

                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- Our Team End -->

                    <!-- Typography Row -->
                    <div class="row t-row">
                        <!-- Line -->
                        <div class="span12"><hr></div>
                        <div class="span9">
                            <h2>We have become the fastest growing</h2>
                        </div>
                        <div class="span3">
                            <!-- Button -->
                            <div class="btn btn-blue f-right">
                                <!-- Title -->
                                <h3><i class="icon-signin hidden-tablet"></i> More Info</h3>
                            </div>
                        </div>
                        <div class="space30 visible-phone"></div>
                        <!-- Line -->
                        <div class="span12"><hr></div>
                    </div>
                    <!-- Typography Row End-->

                    <div class="row space10"></div>

                    <div class="row">
                        <!-- List -->
                        <div class="span4">
                            <h3>List</h3>
                            <ul class="list-a">
                                <li>Le Aorem Ipsum ainsi obtenu ne seeng elit.</li>
                                <li>Contrairement à Lorem n'est aliquet mollis.</li>
                                <li>On sait depuis travailler cotà une opinion.</li>
                                <li>Al contrario di quaon enodio, quis fringilla.</li>
                                <li>Sopravvissuto non solo velor iaculis.</li>
                                <li>Sait depuis longtendue gravida porttitor.</li>
                            </ul>
                        </div>
                        <!-- List End -->

                        <!-- Progress Bar -->
                        <div class="span4">
                            <h3>Progress Bar</h3>
                            <div class="progress">
                                <div class="bar" style="width: 73%;">HTML/CSS 73%</div>
                            </div>
                            <div class="progress">
                                <div class="bar" style="width: 100%;">Web Design 100%</div>
                            </div>
                            <div class="progress">
                                <div class="bar" style="width: 78%;">Photography 78%</div>
                            </div>
                            <div class="progress">
                                <div class="bar" style="width: 80%;">Sound Design 80%</div>
                            </div>
                            <div class="progress">
                                <div class="bar" style="width: 63%;">Party 63%</div>
                            </div>
                        </div>
                        <!-- Progress Bar End -->

                        <!-- Client Says -->
                        <div class="span4">
                            <h3>Client Says</h3>
                            <div class="client-says">
                                “Claritas est etiam processus dynamicus, qui sur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas. Aliquam at erat in purus aliquet mollis. Fusce elementum velit vel dolor iaculis egestas. posuere vel vitae  elementum velit nibh.”
                            </div>
                            <div class="client-says-2">
                                <div class="quotes">
                                    <i class="icon-quote-right"></i>John Doe, Everton Inc.
                                </div>
                            </div>
                        </div>
                        <!-- Client Says End -->
                    </div>

                    <div class="row space50"></div>
                </div>
            </div>
        </div>
    </div>
    @endsection
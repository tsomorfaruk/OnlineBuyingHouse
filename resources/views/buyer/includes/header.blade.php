<header id="header">
    <div class="container">
        <div class="row t-container">

            <!-- Logo -->
            <div class="span3">
                <div class="logo">
                    <a href="{{url('/buyer/dashboard')}}"><img src="{{URL::asset('frontEnd/img')}}/logo-h.png" style="height: 100px; width: 300px;"></a>
                </div>
            </div>

            <div class="span9">
                <div class="row space60"></div>
                <nav id="nav" role="navigation">
                    <a href="#nav" title="Show navigation">Show navigation</a>
                    <a href="#" title="Hide navigation">Hide navigation</a>
                    <ul class="clearfix">
                        <li class="active"><a href="{{url('/buyer/dashboard')}}" title="">HOME</a></li>
                        <li><a href="{{url('/buyer/post-job')}}">JOB POST</a></li>
                        <li><a href="{{url('/buyer/post/manage')}}" title="">MANAGE JOB POSTS</a></li>
                        <li><a href="{{url('/service')}}" title="">SERVICE</a></li>
                        <li><a href="#" title=""><span>{{ $buyerbyemail->name }}</span></a>
                            <ul> <!-- Submenu -->
                                <li><a href="{{url('/buyer/logout')}}" title="">Logout</a></li>
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

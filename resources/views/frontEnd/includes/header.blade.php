<header id="header">
    <div class="container">
        <div class="row t-container">

            <!-- Logo -->
            <div class="span3">
                <div class="logo">
                    <a href="{{url('/')}}"><img src="{{URL::asset('frontEnd/img')}}/logo-h.png" style="height: 100px; width: 300px;"></a>
                </div>
            </div>

            <div class="span9">
                <div class="row space60"></div>
                <nav id="nav" role="navigation">
                    <a href="#nav" title="Show navigation">Show navigation</a>
                    <a href="#" title="Hide navigation">Hide navigation</a>
                    <ul class="clearfix">
                        <li class="active"><a href="{{url('/')}}" title="">HOME</a></li>
                        <li><a href="{{url('/about-us')}}">ABOUT US</a></li>
                        <li><a href="{{url('/about-us')}}" title="">HOW IT WORKS</a></li>
                        <li><a href="{{url('/service')}}" title="">SERVICE</a></li>
                        <li><a href="#" title=""><span>LOGIN/ REGISTRATION</span></a>
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="description" content="ucorpora demo - Free Business Corporate HTML Template">
    <meta name="keywords"
          content="ucorpora, ucorpora demo, free, template, corporate, clean, modern, bootstrap, creative, design">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--[if (gte IE 9)|!(IE)]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <![endif]-->

    <!-- Favicon -->
    <link href="{{URL::asset('frontEnd/img/favicon.ico')}}" rel="icon" type="image/png">

    <!-- Styles -->
    <link href="{{URL::asset('frontEnd/css/styles.css')}}" rel="stylesheet">
    <link href="{{URL::asset('frontEnd/css/bootstrap-override.css')}}" rel="stylesheet">

    <!-- Font Avesome Styles -->
    <link href="{{asset('public/frontEnd/css/font-awesome/font-awesome.css')}}" rel="stylesheet">
    <!--[if IE 7]>
    <link href="css/font-awesome/font-awesome-ie7.min.css" rel="stylesheet">
    <![endif]-->

    <!-- FlexSlider Style -->
    <link rel="stylesheet" href="{{asset('frontEnd/css/flexslider.css')}}" type="text/css" media="screen">

    <!-- Internet Explorer condition - HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    <style>

        div.well {
            height: 250px;
        }

        .Absolute-Center {
            margin: auto;
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
        }

        .Absolute-Center.is-Responsive {
            width: 50%;
            height: 50%;
            min-width: 200px;
            max-width: 400px;
            padding: 40px;
        }

        #logo-container {
            margin: auto;
            margin-bottom: 10px;
            width: 200px;
            height: 30px;
        }
    </style>

    <script type="text/javascript">
        var check = function() {
            if (document.getElementById('password').value ==
                document.getElementById('password-confirm').value) {
                document.getElementById('message').style.color = 'green';
                document.getElementById('message').innerHTML = 'Password are matched.';
                document.getElementById('signup').disabled = false;
            } else {
                document.getElementById('message').style.color = 'red';
                document.getElementById('message').innerHTML = 'Password are not matched.';
                document.getElementById('signup').disabled = true;
            }
        }
    </script>
</head>
<body>
<header id="header">
    <div class="container">
        <div class="row t-container">

            <!-- Logo -->
            <div class="span3">
                <div class="logo">
                    <a href="{{url('/')}}"><img src="{{URL::asset('frontEnd/img')}}/logo-h.png"
                                                style="height: 100px; width: 300px;"></a>
                </div>
            </div>

            <div class="span9">
                <div class="row space60"></div>
                <nav id="nav" role="navigation">
                    <a href="#nav" title="Show navigation">Show navigation</a>
                    <a href="#" title="Hide navigation">Hide navigation</a>
                    <ul class="clearfix">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/about-us') }}">About Us</a></li>
                        <li><a href="{{ url('/about-us') }}">Service</a></li>
                        <li><a href="{{ url('/buyer/login') }}">Login</a></li>
                        <li><a href="{{ url('/buyer/register') }}">Register</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="row space40"></div>
        <!-- Slider End -->
    </div>
</header>

<section id="titlebar">
    <!-- Container -->
    <div class="container">
        <div class="eight columns">
            <h3 class="left">Buyer Registration</h3>
        </div>
    </div>
    <!-- Container / End -->
</section>
<div class="container">
    <div class="row">
        <div class="Absolute-Center is-Responsive">
            <div class="col-sm-12 col-md-10 col-md-offset-1">
                {!! Form::open(['role'=>'form','method'=>'POST', 'url'=>'/gowner/store', 'name'=>'registerForm']) !!}
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">Name</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"
                               autofocus >

                        @if ($errors->has('name'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" >

                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-4 control-label">Password</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control" name="password">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" onkeyup='check();'>
                        <span class="help-block"><strong id="message"></strong></span>
                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary" id="signup" disabled>
                            Register
                        </button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
<!-- Scripts -->
<script src="{{asset('/frontEnd/js/app.js')}}"></script>
</body>
</html>


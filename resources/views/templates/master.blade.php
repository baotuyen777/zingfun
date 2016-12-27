<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>HRM</title>

    <link href="{{ URL::asset('assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/sticky-footer-navbar.css')}}" rel="stylesheet">
    <![endif]-->
</head>

<body>

<!-- Fixed navbar -->
@if(Auth::check())
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">HRM</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="{{ url('/') }}/dep">Phòng ban</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Xin chào {{Auth::user()->name}}
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('/') }}/user/list">Danh sách</a></li>
                        <li><a href="{{ url('/') }}/user/{{Auth::user()->id}}/edit">Thông tin cá nhân</a></li>
                        <li><a href="{{ url('/') }}/auth/logout">Đăng xuất</a></li>

                    </ul>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
@endif
<!-- Begin page content -->
@yield('content')

<footer class="footer">
    <div class="container">
        <p class="text-muted">Place sticky footer content here.</p>
    </div>
</footer>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script>
    var SITE_ROOT="{{url('/')}}";
</script>
<script src="{{ URL::asset('assets/js/jquery.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/bootstrap.js')}}"></script>
<script src="{{ URL::asset('assets/js/hrm.js')}}"></script>


</body>
</html>

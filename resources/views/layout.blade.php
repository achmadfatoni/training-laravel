<!DOCTYPE html>
<!-- saved from url=(0039)http://getbootstrap.com/examples/theme/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Training laravel</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ url('/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="{{ url('/bootstrap-theme.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ url('/theme.css') }}" rel="stylesheet">

</head>

<body role="document">

<!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Biodata</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="{!! url('biodata/create') !!}">Tambah biodata</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

    <div class="container theme-showcase" role="main">
        @yield('container')
    </div> <!-- /container -->
</body>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ url('/jquery.min.js')}}"></script>
<script src="{{ url('/bootstrap.min.js')}}"></script>
<script src="{{ url('/docs.min.js')}}"></script>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bar charts with Morris and Laravel">
    <meta name="author" content="Maks Surguy @msurguy">

    <title>Laravel and Morris = Bar Charts</title>

    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <style type="text/css">
        body {
            padding-top: 100px;
        }

        .navbar {
            margin-bottom: 30px;
        }
    </style>

    @yield('styles')
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.2.0/respond.js"></script>
    <![endif]-->
</head>

<body>
<a href="https://github.com/msurguy/laravel-charts" target="_blank"><img
        style="position: absolute; top: 0; left: 0; border: 0; z-index: 100000;"
        src="https://s3.amazonaws.com/github/ribbons/forkme_left_darkblue_121621.png" alt="Fork me on GitHub"></a>

<div class="container">
    <!-- Static navbar -->
    <div class="navbar navbar-default">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://maxoffsky.com">Charts</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{url('/')}}">Home</a></li>
                <li><a href="http://maxoffsky.com/code-blog/creating-bar-graphs-with-ajax-and-morris-laravel/"
                       target="_blank">Tutorial</a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>

    <!-- Main component for a primary marketing message or call to action -->

    @yield('content')


</div>
<!-- /container -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
@yield('scripts')

</body>
</html>

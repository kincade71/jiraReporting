<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="msapplication-TileColor" content="#610080">
    <meta name="msapplication-TileImage" content="img/mstile-144x144.png">
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/apple-touch-icon-152x152.png">
    <link rel="icon" type="image/png" href="img/favicon-196x196.png" sizes="196x196">
    <link rel="icon" type="image/png" href="img/favicon-160x160.png" sizes="160x160">
    <link rel="icon" type="image/png" href="img/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="img/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32">

    <title>{{ $title }}</title>

    <!-- Bootstrap Core CSS -->
    {{ HTML::style('bower_resources/bootstrap/dist/css/bootstrap.min.css'); }}
    {{ HTML::style('bower_resources/bootstrap/dist/css/bootstrap-theme.min.css'); }}
    {{ HTML::style('css/dashboard.css'); }}

</head>

<body >
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
          </ul>
          <span class="navbar-form navbar-right">
            <a href="/logout">Logout</a>
          </span>
        </div>
      </div>
    </div>
        @yield('content')

        @yield('footer')
</body>

</html>

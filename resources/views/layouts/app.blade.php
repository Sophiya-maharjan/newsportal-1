<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Dashboard</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/dashboard.css">
     <link rel="stylesheet" href="../css/font-awesome.css">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <header>
      <nav class="navbar navbar-default top">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" id="white" href="/home"><i class="glyphicon glyphicon-home"></i>Admin Panel</a>
          </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                           <li class="dropdown first">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-cog"></i><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                            <li><a href="#">settings</a></li>
                            <li><a href="#">profile</a></li>
                            <li><a href="#">insights</a></li>
                            <li role="separator" class="divider"></li>
                            <li>
                            <a href="{{ url('/logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                            </form>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </header>
         <aside>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3 col-xs-12">
            <div class="menu" class="nav-collapse">
              <ul class="nav nav-pills nav-stacked toolgroup sidebar-menu" id="nav-accordion">
                <li role="presentation"><a href="/home" style="background: #2c3e50; color: white;">Dashboard</a></li>
                <li role="presentation"><a href="/news">News</a></li>
                <li role="presentation"><a href="/category/categoryDisplay">Categories</a></li>
                <li role="presentation"><a href="/logo">Logo</a></li>
                <li role="presentation"><a href="/admin">Add Admin</a></li>
                <li role="presentation"><a href="/sponsors">Sponsor</a></li>
            
             
              </ul>
            </div>
            </div>
@yield('content')
    </aside>
    <!-- end of asidebar -->

    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- Scripts -->
    <!--<script src="../js/app.js"></script>-->
</body>
</html>

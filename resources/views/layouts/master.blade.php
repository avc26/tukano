<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>MyPage</title>
  <link href="https://fonts.googleapis.com/css?family=Spartan&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Yeon+Sung&display=swap" rel="stylesheet">
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/jumbotron.css')}}" rel="stylesheet">

</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top">
    <div class="container">
      <div class="links">
        <a href="page1">About us</a>
        <a href="/page/add">Menu</a>
        <a href="#">Shop</a>
        <a href="#">Locations</a>
        <a href="#">Blog</a>
      </div>
      <div class="navbar-header">
        <a class="navbar-brand"> 
          <img class="navl" src="nav-logo.png">
        </a>
      </div>
      <div class="links">
        <a href="#">Franchise</a>
        <a href="#">#TUCANOFRIENDS</a>
      </div>
    </div>
  </nav>

  @if(count($errors)>0)
  <div class="alert alert-danger">
    <ul>
      @foreach($errors->all() as $error)
      <li>{{$error}}</li>
      @endforeach
    </ul>
    @endif

    @yield('content')


</body>

</html>
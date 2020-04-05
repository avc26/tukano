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
        <a href="#">About us</a>
        @auth
        <a href="/page/add">Adauga meniu</a>
        @endauth
        <a href="#">Shop</a>
        <a href="#">Locations</a>
        <a href="#">Blog</a>
      </div>
      <div class="navbar-header">
        <a href="/" class="navbar-brand">
          <img class="navl" src="/nav-logo.png">
        </a>
      </div>
      <div class="links">
        <a href="#">#TUCANOFRIENDS</a>
        @guest
        <a href="/login">Login</a>
        @endguest
        @auth
        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
          {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
        @endauth
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
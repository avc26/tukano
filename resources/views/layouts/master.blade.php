<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Jumbotron Template · Bootstrap</title>

    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <link href="css/jumbotron.css" rel="stylesheet">
    <style type="text/css">
      .cont{
        margin-top: 50px;
        padding-top:30px;
        display: inline-flex;
        flex-direction: row;
        justify-content: center;
        align-content: center;
      }
    </style>
    </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container">
        <div class="navbar-header">
           <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div class="links">
          <a href="https://laravel.com/docs">Docs</a>
          <a href="https://laracasts.com">Laracasts</a>
          <a href="https://laravel-news.com">News</a>
          <a href="https://blog.laravel.com">Blog</a>
          <a href="https://nova.laravel.com">Nova</a>
          <a href="https://forge.laravel.com">Forge</a>
          <a href="https://vapor.laravel.com">Vapor</a>
          <a href="https://github.com/laravel/laravel">GitHub</a>
         </div>
       </div>
    </nav>
    @yield('content')
    <footer class="container">
  <p>&copy; 2020 Company, Inc.</p>
</footer>
</body>
</html>

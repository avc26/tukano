<!-- @extends('layouts.master') -->

@section('content')

<main role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <!--   <div class="jumbotron">
    <div class="container">
    </div>
  </div> -->
  <div class="container">
    <!-- Example row of columns -->
    <div class="row">
      @foreach($articles as $article)

      <div class="col-md-4" style="margin-bottom: 30px;">
        <h2>{{$article->title}}</h2>
        <p><img src='{{$article->img}}'></p>
        <p class="pret">{{$article->description}}</p>
        <p class="desc">{{$article->text}}</p>
        <p class="but"><a class="btn-secondary" href="{{route('articleShow', ['id'=>$article->id])}}"
            role="button">Learn more</a></p>
        @auth
        <p class="but"><a class="btn-warning" href="{{route('articleEdit', ['id'=>$article->id])}}"
            role="button">Edit</a></p>
        <p class="but"><a class="btn-danger" href="{{route('articleDelete', ['id'=>$article->id])}}"
            role="button">Delete</a></p>
        @endauth
      </div>

      @endforeach

    </div>
    <hr>
  </div> <!-- /container -->
</main>

@endsection
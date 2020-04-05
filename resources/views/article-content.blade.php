@extends('layouts.master')

@section('content')

<main role="main">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
        </div>
    </div>
    <div class="container">
        <!-- Example row of columns -->
        <div class="row">

            @if($article)

            <p><img class="imgart" src='{{$article->img}}'></p>

            <div class="articleind">
                <h2>{{$article->title}}</h2>
                <p>{!!$article->text!!}</p>
            </div>

            @endif

        </div>
        <hr>
    </div> <!-- /container -->
</main>

@endsection
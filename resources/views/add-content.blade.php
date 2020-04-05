@extends('layouts.master')

@section('content')

<main role="main">

    <div class="jumbotron">
        <div class="container">
            <h2>{{isset($article)?'Edit': 'Add new'}} articol</h2>
        </div>
    </div>
    <div class="container">
        <div class="row">

            <div class="form">
                <form enctype="multipart/form-data" method="post" action="{{isset($article)?route('articleUpdate', ['id'=>$article->id]):route('articleStore')}}">
                    <input style="display:none" name="id" id="id" value="{{$article->id??''}}"/>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input value="{{$article->title??''}}" type="text" class="form-control" id="title"
                            name="title" />
                    </div>

                    <div class="form-group">
                        <label class="exempleInputFile">Description</label>
                        <textarea class="form-control" name="description">{{$article->description??''}}</textarea>
                    </div>

                    <div class="form-group">
                        <label class="exempleInputFile">Content</label>
                        <textarea class="form-control" name="text">{{$article->text??''}}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="img">Image</label>
                        <input type="file" class="form-control" id="img" name="img" />
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>

                    {{csrf_field()}}

                </form>
            </div>

            <hr>
        </div>
    </div>
</main>

@endsection
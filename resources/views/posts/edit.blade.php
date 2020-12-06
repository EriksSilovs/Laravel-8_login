@extends('layouts.app')

@section('content')

        {{-- <form action="PostController@store" method="POST">
                <div class="form-group">
                        <label type="lable">Title</label><br>
                        <input type="text" id="fname" class="form-control" name="fname" value="Write Your Title"><br>
                </div>
                <div class="form-group">
                        <label for="lable">Body</label><br>
                        <input type="textArea" class="form-control" name="lname" value="Write Text"><br><br>
                </div>
                        <input type="submit" value="Submit" class="btn btn-primary">
        </form>  --}}

    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['App\Http\Controllers\PostController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>

        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}

@endsection



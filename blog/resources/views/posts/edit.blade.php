@extends('layouts.app')

@section('content')
    <h1>Editer un post</h1>

    {!! Form::open(['url' => ['/post/update', $post->id], 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('title', 'Titre')}}
        {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Titre'])}}
    </div>  
    <div class="form-group">
            {{Form::label('body', 'Texte')}}
            {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Texte'])}}
        </div>    
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
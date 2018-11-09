@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>

    {!! Form::open(['url' => '/post/store', 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('title', 'Titre')}}
        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Titre'])}}
    </div>  
    <div class="form-group">
            {{Form::label('body', 'Texte')}}
            {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Texte'])}}
        </div>    
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
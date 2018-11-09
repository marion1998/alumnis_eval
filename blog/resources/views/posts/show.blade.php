@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-default">Retour</a>
<h1>{{$post->title}}</h1>
<div>
    {!!$post->body!!}
</div>
<hr>
<small>Ecris le {{$post->created_at}}</small>
<a href="/posts/{{$post->id}}/edit" class="btn btn-default">Editer</a>
{!!Form::open(['url' => ['/post/destroy', $post->id], 'method' => 'POST', 'class' => 'btn btn-right'])!!}
    {{-- {{Form::hidden('_method', 'DELETE')}} --}}
    {{Form::submit('delete', ['class' => 'btn btn-danger'])}}
{!!Form::close()!!}
@endsection
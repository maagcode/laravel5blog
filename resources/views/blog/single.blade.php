@extends('main')

@section('title', "| $post->title")

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>{{ $post->title }}</h1>
            <p>
                {{ $post->body }}
            </p>
            <p>
                Posted in: {{ $post->category->name }}
            </p>
        </div>
    </div>

    <div class="row">
        <div class="comment-form">
            {{ Form::open(['route' => 'comments.store', $post->id, 'method' => 'POST']) }}

                

            {{ Form::close() }}
        </div>
    </div>

@stop

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
        <div class="col-md-8 col-md-offset-2">
            @foreach($post->comments as $comment)
                <div class="comment">
                    <p>
                        Name: {{ $comment->name }}
                    </p>

                    <p>
                        Comment: {{ $comment->comment }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>


    <div class="row">
        <div id="comment-form" class="col-md-8 col-md-offset-2 form-space-top">
            {{ Form::open(['route' => 'comments.store', $post->id, 'method' => 'POST']) }}

                 <div class="row">
                     <div class="col-md-6">
                         {{ Form::label('name', "Name:") }}
                         {{ Form::text('name', null, ['class' => 'form-control']) }}
                     </div>

                     <div class="col-md-6">
                         {{ Form::label('email', "Email:") }}
                         {{ Form::text('email', null, ['class' => 'form-control']) }}
                     </div>

                     <div class="col-md-12">
                         {{ Form::label('comment', "Comment:") }}
                         {{ Form::textarea('comment', null, ['class' => 'form-control']) }}

                         {{ Form::submit('Add Comment', ['class' => 'btn btn-success btn-block form-space-top']) }}
                     </div>
                 </div>

            {{ Form::close() }}
        </div>
    </div>

@stop

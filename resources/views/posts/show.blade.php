@extends('main')

@section('title', '| View Post')

@section('content')

    <h1>{{ $post->title }}</h1>

    <p class="lead">
        {{ $post->body }}
    </p>

    <hr>

    <div class="well">
        <dl class="dl-horizontal">
            <dt>URL Slug:</dt>
            <dd><a href="{{ url('blog/'.$post->slug) }}">{{ url('blog/'.$post->slug) }}</a></dd>
        </dl>

        <dl class="dl-horizontal">
            <dt>Category:</dt>
            <dd>{{ $post->category->name }}</dd>
        </dl>

        <dl class="dl-horizontal">
            <dt>Created at:</dt>
            <dd>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</dd>
        </dl>
        <dl class="dl-horizontal">
            <dt>Last Updated:</dt>
            <dd>{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</dd>
        </dl>
        <div class="row">
            <div class="col-sm-4">
                {!! Html::linkRoute('posts.index', '<< See All Posts', [], ['class' => 'btn btn-default btn-block']) !!}
            </div>
            <div class="col-sm-4">
                {!! Html::linkRoute('posts.edit', 'Edit', [$post->id], ['class' => 'btn btn-primary btn-block']) !!}
            </div>
            <div class="col-sm-4">
                {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}

                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}

                {!! Form::close() !!}
            </div>
        </div>
    </div>


@stop

@extends('main')

@section('title', '| Edit Post')

@section('content')

    {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}

    {!! Form::label('title', 'Title:') !!}
    {{ Form::text('title', null, ['class' => 'form-control input-lg']) }}

    {!! Form::label('slug', 'Slug:', ['class' => 'form-space-top']) !!}
    {{ Form::text('slug', null, ['class' => 'form-control']) }}

    {{ Form::label('category_id', 'Category:', ['class' => 'form-space-top']) }}
    {{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}

    {!! Form::label('body', 'Post Body:', ['class' => 'form-space-top']) !!}
    {{ Form::textarea('body', null, ['class' => 'form-control']) }}

    {!! Form::close() !!}

    <div class="well form-space-top">
        <dl class="dl-horizontal">
            <dt>Created at:</dt>
            <dd>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</dd>
        </dl>

        <dl class="dl-horizontal">
            <dt>Last Updated:</dt>
            <dd>{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</dd>
        </dl>

        <div class="row">
            <div class="col-sm-6">
                {!! Html::linkRoute('posts.show', 'Cancel', [$post->id], ['class' => 'btn btn-danger btn-block']) !!}
            </div>

            <div class="col-sm-6">
                {{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) }}
            </div>
        </div>
    </div>

@stop

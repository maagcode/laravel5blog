@extends('main')

@section('title', '| Create New Post')


@section('stylesheets')

    {!! Html::style('css/select2.min.css') !!}

@stop


@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1>Create New Post</h1>

            {!! Form::open(array('route' => 'posts.store')) !!}

                {{ Form::label('title', 'Title:') }}
                {{ Form::text('title', null, ['class' => 'form-control', 'required' => '', 'maxlength' => '255']) }}

                {{ Form::label('slug', 'Slug:') }}
                {{ Form::text('slug', null, ['class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '255']) }}

                {{ Form::label('category_id', 'Category:') }}
                <select class="form-control" name="category_id">

                    @foreach($categories as $category)

                        <option value="{{ $category->id }}">{{ $category->name }}</option>

                    @endforeach

                </select>

                {{ Form::label('tags', 'Tags:') }}
                <select class="select2-multi form-control" name="tags[]" multiple="multiple">

                    @foreach($tags as $tag)

                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>

                    @endforeach

                </select>

                {{ Form::label('body', 'Post Body:') }}
                {{ Form::textarea('body', null, ['class' => 'form-control']) }}

                {{ Form::submit('Create Post', ['class' => 'btn btn-success btn-lg btn-block', 'required' => '', 'style' => 'margin-top:20px;']) }}


            {!! Form::close() !!}
        </div>
    </div>

@stop

@section('scripts')

    {!! Html::script('js/select2.min.js') !!}

    <script type="text/javascript">
        $('.select2-multi').select2();
    </script>

@stop

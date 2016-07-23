@extends('main')

@section('title', '| Home')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1>Hello, world!</h1>
                <p>...</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
            </div>
        </div>
    </div>

    <div class="row"><hr>
        <div class="col-md-12">

            @foreach($posts as $post)
                <div class="post">
                      <h3>{{ $post->title }}</h3>
                      <p>
                        {{ substr($post->body, 0, 300) }}{{ strlen($post->body) > 300 ? "...": "" }}
                      </p>
                      <a href="#" class="btn btn-primary">Read More</a>
                </div>

                <hr>
            @endforeach

        </div>
  </div>

@stop

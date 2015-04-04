@extends('app');

@section('content')

    <article>
        <h2>{{$article->title}}</h2>
        <div class="body">
            <p>{{$article->body}}</p>
        </div>
    </article>
    <h5><a href="{{action('ArticlesController@index')}}"><--See all articles</a></h5>

@stop
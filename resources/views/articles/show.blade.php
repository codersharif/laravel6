@extends('layouts.master')

@section('content')
<div id="content">
    <div class="title">
        <h2>{{$article->title}}</h2>
        <span class="byline">{{$article->excerpt}}</span> </div>
    <p><img src="{{asset('public/images/banner.jpg')}}" alt="" class="image image-full" /> </p>
    <p>{{$article->body}}</p>
    <p>
    @foreach($article->tags as $tag)
    <a href="{{route('article.index',['tag'=>$tag->name])}}">{{$tag->name}}</a>
    @endforeach
    </p>
</div>
@endsection
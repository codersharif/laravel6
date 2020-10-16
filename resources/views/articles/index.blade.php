@extends('layouts.master')

@section('content')
@forelse($articles as $article)
<div id="content">
    <div class="title">
        <h2>{{$article->title}}</h2>
       
        <span class="byline"><a href="{{URL::to('article/'.$article->id)}}">{{$article->excerpt}}</a></span>
    </div>
    <p><img src="{{asset('public/images/banner.jpg')}}" alt="" class="image image-full" /> </p>
    <p>{{$article->body}}</p>
</div>
@empty
<p>not yet article</p>
@endforelse
@endsection
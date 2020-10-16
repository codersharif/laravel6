@extends('layouts.master')

@section('content')
<div id="content">
    <form action="{{route('article.store')}}" method="post">
        @csrf
        
        <div class="form-group">
            <label class="label">User</label>
            <select name="user_id" class="form-control">
                <option value="">Select User</option>
                @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
            @error('user_id')
            <span class="text-danger">{{$errors->first('user_id')}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label class="label">Title</label>
            <input type="text" name="title" value="{{old('title')}}" class="form-control @error('title') border-danger @enderror">
            @error('title')
            <span class="text-danger">{{$errors->first('title')}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label class="label">Excerpt</label>
            <textarea class="form-control @error('title') border-danger @enderror" name="excerpt"></textarea>
            @error('excerpt')
            <span class="text-danger">{{$errors->first('excerpt')}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label class="label">Body</label>
            <textarea class="form-control @error('title') border-danger @enderror" name="body"></textarea>
            @error('body')
            <span class="text-danger">{{$errors->first('body')}}</span>
            @enderror
        </div>
          <div class="form-group">
            <label class="label">User</label>
            <select name="tags[]" class="form-control" multiple>
                @foreach($tagArr as $tag)
                <option value="{{$tag->id}}">{{$tag->name}}</option>
                @endforeach
            </select>
            @error('tags')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <button class="btn btn-info"  type="submit">Submit</button>
    </form>
</div>
@endsection
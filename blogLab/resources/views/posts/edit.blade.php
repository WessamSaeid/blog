@extends('layouts.app')
@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="post" action="/posts/{{$post->id}}">
{{method_field('put')}}
{{csrf_field()}}

  <div class="form-group">
    <label for="exampleFormControlInput1">Title</label>
    <input type="text" class="form-control" name="title" value="{{$post->title}}">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" name=description rows="3" >{{$post->description}}</textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Post Creator</label>
    <select class="form-control" name="user_id" >
    @foreach ($users as $user)
    <option @if($user->id == $post->user->id) selected @endif value="{{$user->id}}">{{$user->name}}</option>
    @endforeach
    </select>
  </div>
  
  
  <input type="submit" class="btn btn-info" value="Update"/>
  
</form>
@endsection
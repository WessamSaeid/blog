@extends('layouts.app')
@section('content')
<h1>Create new Post</h1><br><br>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="post" action="/posts">

{{csrf_field()}}
<input type="text" placeholder="Post Title" name="title"/><br><br>
<textarea  placeholder="Post description" name=description></textarea><br><br>
<select class="form-control" name="user_id">
@foreach ($users as $user)
<option value="{{$user->id}}">{{$user->name}}</option>
@endforeach
</select><br><br>
<input type="submit" class="btn btn-success" value="Create"/>
</form>
@endsection
 
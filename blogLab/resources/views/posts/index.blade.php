@extends('layouts.app')
@section('content')
<a href="/posts/create"><button class="btn btn-success">Create Post</button></a><br><br>

<table class="table">
  <thead>
    <tr>
    <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Posted By</th>
      <th scope="col">Created At</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($posts as $post)
    <tr>
    <td>{{$post->id}}</td>
    <td>{{$post->title}}</td>
    <td>{{$post->user->name}}</td>
    <td>{{$post->created_at->format('l jS \\of F Y h:i:s A')}}</td>
    <td> <a href="/posts/{{$post->id}}"><button class="btn btn-info">View</button></a>
    <a href="/posts/{{$post->id}}/edit"><button class="btn btn-primary">Edit</button></a>
    <form method="post" action="/posts/{{$post->id}}">{{method_field('delete')}}
{{csrf_field()}}<button  type="submit" class="btn btn-danger" onclick="return confirm('Are you sure that you want to delete this post ?')">Delete</button></form></td>
    </tr>
    @endforeach 
  </tbody>
</table>
{{ $posts->links() }}
@endsection

   
                  

    

  
    
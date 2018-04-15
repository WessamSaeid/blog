@extends('layouts.app')
@section('content')

        <div class="card mb-3">
            <div class="card-header">
            <i class="fa fa-table"></i> Post Info </div>
            <div class="card-body">
                <p><b>Title :  </b>{{ $post->title }}</p>
                <p><b>Description :  </b>{{ $post->description }}</p>
                </div>
                </div>


        
    
        <div class="card mb-3">
            <div class="card-header">
            <i class="fa fa-table"></i> Post Creator Info</div>
            <div class="card-body"> 
            <p><b>Name :  </b> {{ $user->name }}</p>
            <p><b>Email:  </b>{{ $user->email }}</p>
            <p><b>Created At :  </b>{{ $post->created_at->format('l jS \\of F Y h:i:s A') }}</p>
        </div>
         </div>
         

     
@endsection
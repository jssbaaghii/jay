@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Dashboard  
                    <span class="col-12">
                        <a href="{{ url('create')}}" class="btn btn-dark"> New post</a>
                    </span>        
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                           <strong>Success!! </strong> {{ session('status') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <div class="row">
                    @foreach($posts as $post) 
		
						
                    <div class="col-12 col-sm-6">
                        <div class="card mt-3 mb-3" >
                            <div class="card-header"><h4 style="font-weight: bolder;">{{$post->title}}</h4></div>
                          <div class="card-body ">
                            <p class="card-text">{{$post->body}}</p>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                            <a href="{{ url('edit/'.$post->id) }}" class="btn btn-info mr-2">Edit</a>
                            <form action="{{ url('deletePost/'.$post->id) }}" method="POST">
                                {{method_field('DELETE')}}
                                {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                          </div>
                        </div>
                    </div>           
                    @endforeach
                </div>  
                    <div class="text-center"> {{ $posts->links() }} </div>
                </div> 
            </div>
        </div>
    </div>
</div>
@endsection

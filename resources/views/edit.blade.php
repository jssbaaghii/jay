@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit post</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                <form method="POST" action="{{url('updatePost/'.$post->id)}}">
                        {{ csrf_field() }}
                        <div class="form-group">
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Title" name="title" value="{{$post->title}}" required="">
                         @if ($errors->has('title'))
                            <span class="text-danger">{{ $errors->first('title') }}</span>
                        @endif
                        </div>
                        <div class="form-group">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Body" name="body" required="">
                            {{$post->body}}
                        </textarea>
                        @if ($errors->has('body'))
                            <span class="text-danger">{{ $errors->first('body') }}</span>
                        @endif    
                        </div>                                 
                      <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

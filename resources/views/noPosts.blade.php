@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                           <strong>Success!! </strong> {{ session('status') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <div class="text-center">
                        <p>You haven't created any posts yet</p>
                        <a href="{{ url('create')}}" class="btn btn-success mr-2">Create new</a>        
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection

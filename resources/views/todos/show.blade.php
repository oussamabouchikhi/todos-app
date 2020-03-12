@extends('layouts.app')
@section('title', 'Todo ' . $todo->id)

@section('content')
    <div class="container">
        <h1 class="mt-5 text-center" style="color: #fff;">{{ $todo->title }}</h1>
        <div class="row pt-5 justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <span class="">Details</span>
                        <span class="badge badge-warning float-right">{{ boolval($todo->completed) ? 'completed' : 'not completed' }}</span>
                    </div>    
                    <div class="card-body text-muted">
                        {{ $todo->description }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection    
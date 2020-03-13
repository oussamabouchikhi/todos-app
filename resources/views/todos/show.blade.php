@extends('layouts.app')
@section('title', 'Todo ' . $todo->id)

@section('content')
    <div class="container">
        <h1 class="mt-5 text-center" style="color: #fff;">{{ $todo->title }}</h1>
        <div class="row pt-5 justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="background-color: #8b6bff;">
                        <span style="font-weight: bold; color: #fff;">Details</span>
                        <span 
                            class="badge badge-warning float-right" 
                            style="font-weight: bold;color: #8b6bff;background-color: #fff;">
                            {{ boolval($todo->completed) ? 'completed' : 'not completed' }}
                        </span>
                    </div>    
                    <div class="card-body" style="color: #8b6bff;">
                        {{ $todo->description }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
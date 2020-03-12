@extends('layouts.app')
@section('title', 'All todos')

@section('content')
    <div class="container">
        <div class="row pt-3 justify-content-center" style="margin: 40px 0;">
            <div class="card" style="width: 100%">
                <h1 class="card-header text-center">All Todos</h1>
                <div class="card-body">
                    <h5 class="card-title">What needs to be done</h5>
                    <ul class="list-group">
                        @foreach ( $todos as $todo )
                        <li class="list-group-item text-muted">
                            {{ $todo->title }}
                            <span class="float-right">
                                <a href="/todos/{{$todo->id}}">
                                    <i  style="color: #8b6bff;" class="fas fa-eye"></i>
                                </a>
                                <a href="#">
                                    <i  style="color: #8b6bff;" class="fas fa-edit"></i>
                                </a>
                                <a href="#">
                                    <i  style="color: #8b6bff;" class="fas fa-times-circle"></i>
                                </a>
                            </span>
                        </li>    
                        @endforeach
                    </ul>
                    <a href="#" class="btn btn-primary  mt-3"  style="background-color: #8b6bff;"><i class="fas fa-plus"></i> Add a todo</a>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.app')
@section('title', 'Edit Todo')

@section('content')

<div class="container pt-5">

    <div class="row justify-content-center mt-5">

        <div class="col-md-6">

            <div class="cerd">

                <div class="card-header" style="background-color: #8b6bff;">
                    <h1 style="color: #fff;">Edit todo</h1>
                </div>

                <div class="card-body" style="background: #fff;">

                <form action="/todos/{{$todo->id}}" method="POST">
                @csrf
                    <div class="form-group">
                        <input 
                            type="text" 
                            class="form-control" name="todoTitle" placeholder="enter a title"
                            class="@error('todoTitle') is-invalid @enderror"
                            value="{{ $todo->title }}"
                            >
                            <!-- old diplays old value in input -->
                    </div>
                    @error('todoTitle')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <textarea 
                            class="form-control" name="todoDescription" rows="3" placeholder="enter a description"
                            class="@error('todoDescription') is-invalid @enderror"
                            value="{{ $todo->description }}"
                        ></textarea>
                    </div>
                    @error('todoDescription')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <button type="submit" class="btn btn-primary btn-block" style="background-color: #8b6bff; border: none;">Update</button>
                </form>
                </div>
            
            </div>
        
        </div>
    
    </div>

</div>

@endsection
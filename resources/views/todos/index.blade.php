<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
     crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" rel="stylesheet" crossorigin="anonymous">
    <!--<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" crossorigin="anonymous">-->
</head>
<body style="background-color: #1eb2a6;">
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
                                    <i  style="color: #1eb2a6;" class="fas fa-eye"></i>
                                </a>
                                <a href="#">
                                    <i  style="color: #1eb2a6;" class="fas fa-edit"></i>
                                </a>
                                <a href="#">
                                    <i  style="color: #1eb2a6;" class="fas fa-times-circle"></i>
                                </a>
                            </span>
                        </li>    
                        @endforeach
                    </ul>
                    <a href="#" class="btn btn-primary  mt-3"  style="background-color: #1eb2a6;"><i class="fas fa-plus"></i> Add a todo</a>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
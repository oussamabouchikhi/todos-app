<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo--{{ $todo->title }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
     crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" rel="stylesheet" crossorigin="anonymous">
    <!--<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" crossorigin="anonymous">-->
</head>
<body style="background-color: #1eb2a6;">
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
    
</body>
</html>
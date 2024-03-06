<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/clients/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/clients/css/style.css')}}">
    <title>HO THI HUYEN</title>
</head>
<body>
    <div class="row md-5">
        <p>Task list</p>
    </div>
    <div class="row col-12 mb-5">
        <div class="col-3"></div>
        <div class="card col-6 p-0">
            <div class="card-header ">
                New task
            </div>
            <div class="card-body">
                <label for="task">Task</label>
                <input type="text" class="">
                <button class="btn btn-outline-dark">Add task</button>
            </div>
        </div>
    </div>
    <div class="row col-12">
        <div class="col-3"></div>
        <div class="card col-6 p-0">
            <div class="card-header">
                <p>New task</p>
            </div>
            <div class="card-body">
                <label for="task">Task</label>
                <input type="text">
            </div>
        </div>
    </div>

</body>
<script src="{{asset('assets/clients/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/clients/js/custom.js')}}"></script>
</html>
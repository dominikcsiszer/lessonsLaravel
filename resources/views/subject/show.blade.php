<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>
@include('shared.nav')
    <div class="container">
    <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/subjects/list">Tantárgyak</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Megtekintés</li>
                </ol>
            </nav>
        <div class="row">
            <div class="col-6"><h1>{{$subject->name}} tantárgyak</h1></div>
        </div>
        <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{$subject->name}}</h5>
            <p class="card-text">{{$subject->description}}</p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">ID: {{$subject->id}}</li>
                <li class="list-group-item">Limit: {{$subject->limit}}</li>
            </ul>
        </div>
        </div>
    </div>
</body>
</html>
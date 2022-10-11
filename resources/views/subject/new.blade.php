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
    <div class="container">
    <div class="row">
        <div class="col-6"><h1>Új órák</h1></div>
        <div class="col-6 d-flex justify-content-end align-items-center"><a href="/subjects/list" class="btn btn-primary"><i class="bi bi-arrow-left"></i> Vissza</a></div>
    </div>
        
        <form action="/api/subjects" method="post">
            {{csrf_field()}}
            {{method_field('POST')}}
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="name" id="name" placeholder="Neve">
                <label for="name">Neve</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text"  class="form-control" name="description" id="description" placeholder="Leírás">
                <label for="description">Leírása</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number"  class="form-control" name="limit" id="limit" placeholder="Limit">
                <label for="limit">Limit</label>
            </div>
            <button type="submit" class="btn btn-primary"><i class="bi bi-plus"></i> Hozzáadás</button>
        </form>
    </div>
</body>
</html>
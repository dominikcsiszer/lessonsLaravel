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
    <div class="row">
        <div class="col-6"><h1>Felhasználók</h1></div>
        <div class="col-6 d-flex justify-content-end align-items-center"><a href="/users/new" class="btn btn-primary"><i class="bi bi-plus"></i> Új felhasználó</a></div>
    </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Név</th>
                    <th scope="col">email</th>
                    <th scope="col" class="text-end">Művelet</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{$user->id}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                            <td class="d-flex justify-content-end">
                                <a href="/users/show/{{$user->id}}" class="btn btn-light"><i class="bi bi-eye"></i> Megtekint</a>
                                <a href="/users/edit/{{$user->id}}" class="btn btn-light"><i class="bi bi-pencil"></i> Szerkesztés</a>
                                <form action="/api/users/delete/{{$user->id}}" method="DELETE">
                                    {{csrf_field()}}
                                    {{method_field('delete')}}
                                    <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i> Törlés</button>
                                </form>
                        </div>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
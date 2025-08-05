<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Company</title>
</head>

<body>
    <h1>Aqui se mostrara el listado de posts</h1>
    @if (true)
        <p>Condicion true</p>
    @else
        <p>Condicion false</p>
    @endif

    @isset($prueba)
        <p>Existe la variable {{$prueba}}</p>
    @endisset

    @empty($record)
        <p>La variable no existe o no tiene un valor asignado</p>
    @endempty
</body>

</html>

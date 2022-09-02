<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El biyuyo</title>
</head>

<body>
    <h1>Categorias</h1>

    @foreach($posts as $post)
    <p>{{$post['Id_Categoria']}} {{$post['Nombre']}} {{$post['Descripcion']}}</p>

    @endforeach
</body>

</html>
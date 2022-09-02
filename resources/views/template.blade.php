<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El biyuyo</title>
</head>

<body>

    <ul>
        <li><a href="{{route ('home')}}">Home</a></li>
        <li><a href="#">Login</a></li>
        <li><a href="{{route ('categorias')}}">Categorias</a></li>
        <li><a href="{{route ('usuarios')}}">Usuarios</a></li>
        <li><a href="{{route ('clientes')}}">Clientes</a></li>
        <li><a href="{{route ('tiponegocios')}}">Tipo de Negocio</a></li>
        <li><a href="#">Logout</a></li>
    </ul>


    @yield('content')
</body>

</html>
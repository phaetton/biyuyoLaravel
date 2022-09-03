@extends('template')

@section('content')
    <h1>Listado de Categorias</h1>

    @foreach($pcategorias as $pcategoria)
    <p>{{$pcategoria['Id_Categoria']}} <a href="{{ route('categoria',$pcategoria['slug']) }}">{{$pcategoria['nombre']}} {{$pcategoria['descripcion']}}</a> </p>

    @endforeach
@endsection


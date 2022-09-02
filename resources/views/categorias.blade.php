@extends('template')

@section('content')
    <h1>Listado de Categorias</h1>

    @foreach($posts as $post)
    <p>{{$post['Id_Categoria']}} <a href="{{ route('categoria',$post['slug']) }}">{{$post['Nombre']}} {{$post['Descripcion']}}</a> </p>

    @endforeach
@endsection


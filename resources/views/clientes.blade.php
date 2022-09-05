@extends('template')

@section('content')
    <h1>Listado de clientes</h1>

    @foreach($pclientes as $pcliente)
    <p>{{$pcliente['id']}} 
        <a href="{{ route('cliente',$pcliente['id']) }}">
            {{$pcliente['nombre']}} </a> 
        </p>

    @endforeach

    {{$pclientes->links()}}
@endsection


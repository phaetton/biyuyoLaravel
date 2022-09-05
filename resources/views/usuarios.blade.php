@extends('template')

@section('content')
<h1>Listado de usuarios</h1>

@foreach($pusuarios as $pusuario)
<p>{{$pusuario['id']}} <a href="{{ route('usuario',$pusuario['id']) }}">
        {{$pusuario['name']}} </a>
</p>

@endforeach

{{$pusuarios->links()}}
@endsection
@extends('template')

@section('content')
<h1>Listado de tipo de negocios</h1>

@foreach($ptiponegocios as $ptiponegocio)
<p>{{$ptiponegocio['id']}} <a href="{{ route('tiponegocio',$ptiponegocio['slug']) }}">
        {{$ptiponegocio['nombre']}} </a>
</p>

@endforeach

{{$ptiponegocios->links()}}
@endsection
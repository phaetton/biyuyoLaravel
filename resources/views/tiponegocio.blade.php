@extends('template')

@section('content')
<h1>Detalle del tipo de negocio</h1>
<h1>{{$ptiponegocio->nombre}}</h1>
<p>id: {{$ptiponegocio->id}}</p>
<p>descripcion: {{$ptiponegocio->descripcion}}</p>
<p>slug: {{$ptiponegocio->slug}}</p>
<p>created_at: {{$ptiponegocio->created_at}}</p>
<p>updated_at: {{$ptiponegocio->updated_at}}</p>
@endsection
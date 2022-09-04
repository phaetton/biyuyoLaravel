@extends('template')

@section('content')
<h1>{{$pcategoria->nombre}}</h1>
<p>id: {{$pcategoria->id}}</p>
<p>descripcion: {{$pcategoria->descripcion}}</p>
<p>slug: {{$pcategoria->slug}}</p>
<p>created_at: {{$pcategoria->created_at}}</p>
<p>updated_at: {{$pcategoria->updated_at}}</p>
@endsection
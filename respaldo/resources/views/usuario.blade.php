@extends('template')

@section('content')
<h1>Detalle del usuario</h1>
<h1>{{$pusuario->nombre}}</h1>
<p>id: {{$pusuario->id}}</p>
<p>email: {{$pusuario->email}}</p>
<p>email_verified_at: {{$pusuario->email_verified_at}}</p>
<p>created_at: {{$pusuario->created_at}}</p>
<p>updated_at: {{$pusuario->updated_at}}</p>
@endsection
@extends('template')

@section('content')
<h1>Detalle del cliente</h1>
<h1>{{$pcliente->nombre}}</h1>
<p>id: {{$pcliente->id}}</p>
<p>email: {{$pcliente->email}}</p>
<p>email_verified_at: {{$pcliente->email_verified_at}}</p>
<p>active: {{$pcliente->active}}</p>
<p>created_at: {{$pcliente->created_at}}</p>
<p>updated_at: {{$pcliente->updated_at}}</p>
@endsection
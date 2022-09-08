@extends('template')

@section('content')

<div class=" bg-gray-900 px-20 py-16 rounded-lg mb-8 relative overflow-hidden">
    <span class=" text-xs uppercase text-gray-700 bg-gray-400 rounded-full px-2 py-1">Nicaragûa</span>
    <h1 class=" text-3xl text-white mt-4">El biyuyo</h1>
    <p class="text-sm text-gray-400 mt-2">Sistema de mentoria a clientes nicaragûenses</p>
    <img src="{{asset('images/logo-mentors.png')}}" alt="" class="absolute right-20 -bottom-20 w-1/2">
</div>

@include('negocios')
@include('categorias')
@include('tiponegocios')


@endsection
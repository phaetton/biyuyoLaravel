@extends('template')

@section('content')
<a class="relative block bg-black group" href="">
  <img
    class="absolute inset-0 object-cover w-full h-full opacity-75 transition-opacity  group-hover:opacity-50"
    src="../images/categorias/{{$pcategoria->imagen}}"
    alt=""
  />
  <div class="relative p-8">
    <p class="text-sm font-medium tracking-widest text-pink-500 uppercase">
      Categoria
    </p>

    <p class="text-2xl font-bold text-white">{{$pcategoria->nombre}}</p>

    <div class="mt-64">
      <div
        class="opacity-0 transition-all transform translate-y-8  group-hover:opacity-100 group-hover:translate-y-0"
      >
        <p class="text-sm text-white">
        {{$pcategoria->descripcion}}
        </p>
      </div>
    </div>
  </div>
</a>
@include('negocios');

@endsection
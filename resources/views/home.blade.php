@extends('template')

@section('content')
<h1>Home</h1>


<div>
    <!-- negocios -->
     <div class="grid grid-cols-1 gap-4 mb-4">
        @foreach($pnegocios as $pnegocio)
        <a href="" class="bg-gray-100 rounded-lg px-6 py-4">
            <p class="text-xs flex items-center gap-2">
                <span class="uppercase text-gray-700 bg-gray-200 rounded-full px-2 py-1">Negocio</span>
                
            </p>
            <h2>{{$pnegocio->nombre}}</h2>
        </a>
        @endforeach
    </div>
    {{$pnegocios->links()}} 
</div>

<div>
    <!-- categorias -->    
     <div class="grid grid-cols-1 gap-4 mb-4">
        @foreach($pcategorias as $pcategoria)
        <a href="" class="bg-gray-100 rounded-lg px-6 py-4">
            <p class="text-xs flex items-center gap-2">
                <span class="uppercase text-gray-700 bg-gray-200 rounded-full px-2 py-1">categoria</span>
                
            </p>
            <h2>{{$pcategoria->nombre}}</h2>
        </a>
        @endforeach
    </div>
    {{$pcategorias->links()}} 
</div>

<div>
    <!-- articulos -->    
     <div class="grid grid-cols-1 gap-4 mb-4">
        @foreach($ptiponegocios as $ptiponegocio)
        <a href="" class="bg-gray-100 rounded-lg px-6 py-4">
            <p class="text-xs flex items-center gap-2">
                <span class="uppercase text-gray-700 bg-gray-200 rounded-full px-2 py-1">tiponegocio</span>
                
            </p>
            <h2>{{$ptiponegocio->nombre}}</h2>
        </a>
        @endforeach
    </div>
    {{$ptiponegocios->links()}} 
</div>
@endsection
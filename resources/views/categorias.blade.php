@extends('template')

@section('content')

<section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-col text-center items-center w-full mb-20">
                        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Lista de categorias</h2>
                                <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">Categorias de los negocios fisicos y en linea ademas de los servicios fisicos y en linea.</p>
                </div>
                <div class="flex flex-wrap">
                        @foreach($pcategorias as $pcategoria)
                        <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                                <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">{{$pcategoria['nombre']}}</h2>
                                <p class="leading-relaxed text-base mb-4 truncate">{{$pcategoria['descripcion']}} .</p>
                                <a href="{{ route('categoria',$pcategoria['slug']) }}" class="text-indigo-500 inline-flex items-center">Ver
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                                        </svg>
                                </a>
                        </div>
                        @endforeach
                </div>

        </div>
</section>



{{$pcategorias->links()}}
@endsection
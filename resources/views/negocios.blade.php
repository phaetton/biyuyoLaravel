@extends('template')

@section('content')
<section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-col text-center items-center w-full mb-20">
                        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Lista de negocios</h2>
                                <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">lista de los negocios fisicos y en linea ademas de los servicios fisicos y en linea.</p>
                </div>

                <div class=" grid grid-cols-4 g-4">
                    @foreach($pnegocios as $pnegocio)


                    <a href="{{ route('negocio',$pnegocio['slug']) }}" class="relative flex items-end  bg-black h-96 group w-full">
                        <img alt="Modded Bike" src="https://images.unsplash.com/photo-1660467095171-4052fcacfa69?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxfDB8MXxyYW5kb218MHx8fHx8fHx8MTY2MjM5ODAyNA&ixlib=rb-1.2.1&q=80&w=1080" class="absolute inset-0 object-cover w-full h-full transition-opacity group-hover:opacity-90" />

                        <div class="relative w-full p-6 tracking-widest text-center text-white bg-red-700 transition-colors sm:w-2/3 group-hover:bg-black">
                            <strong class="text-lg uppercase">
                                {{$pnegocio['nombre']}}
                            </strong>

                            <p class="mt-1 text-xs font-medium uppercase truncate">
                                {{$pnegocio['descripcion']}}
                            </p>
                        </div>
                    </a>




                    @endforeach
                </div>

                {{$pnegocios->links()}}
                @endsection
@extends('template')
@section('content')
<section class="text-gray-600 body-font overflow-hidden">
    <div class="container px-5 py-24 mx-auto">
        <div class="lg:w-4/5 mx-auto flex flex-wrap">
            <div class="lg:w-1/2 w-full lg:pr-10 lg:py-6 mb-6 lg:mb-0">
                <h2 class="text-sm title-font text-gray-500 tracking-widest">Detalle del negocio</h2>
                <h1 class="text-gray-900 text-3xl title-font font-medium mb-4">{{$pnegocio->nombre}}</h1>
                <div class="flex mb-4">
                    <a class="flex-grow text-indigo-500 border-b-2 border-indigo-500 py-2 text-lg px-1">Descripción</a>
                    <a class="flex-grow border-b-2 border-gray-300 py-2 text-lg px-1">Redes sociales</a>
                    <a class="flex-grow border-b-2 border-gray-300 py-2 text-lg px-1">Contacto</a>
                </div>
                <p class="leading-relaxed mb-4 overflow-y-hidden h-80">{{$pnegocio->descripcion}}.</p>
                <div class="flex border-t border-gray-200 py-2">
                    <span class="text-gray-500">Celular Claro</span>
                    <span class="ml-auto text-gray-900">{{$pnegocio->claro}}</span>
                </div>
                <div class="flex border-t border-gray-200 py-2">
                    <span class="text-gray-500">Celular Tigo</span>
                    <span class="ml-auto text-gray-900">{{$pnegocio->tigo}}</span>
                </div>
                <div class="flex border-t border-b mb-6 border-gray-200 py-2">
                    <span class="text-gray-500">Convencional</span>
                    <span class="ml-auto text-gray-900"> {{$pnegocio->convencional}}</span>
                </div>

                <div class="flex">
                    <!-- <span class="title-font font-medium text-2xl text-gray-900">$58.00</span> -->
                    <button class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Contactar</button>
                    <!-- <button class="rounded-full w-10 h-10 bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </button> -->
                </div>
            </div>
            <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="
      https://images.unsplash.com/photo-1542883339-f2680a3e3996?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80">
        </div>
    </div>
</section>


@endsection
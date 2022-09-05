@extends('template')

@section('content')
<h1>Listado de clientes</h1>

<!-- Snippet -->
<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto ">
        <div class="flex flex-col text-center items-center w-full mb-10">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Lista de Clientes</h1>
            <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">lista de los clientes que tienen negocios fisicos y en linea ademas de los servicios fisicos y en linea.</p>
        </div>

        <!-- Card -->
        @foreach($pclientes as $pcliente)
        <div class=" col-span-2 md:col-span-1 mx-auto bg-white shadow-lg rounded-lg">

            <article class="pt-6 pb-4 px-5 border-b border-gray-200">
                <div class="flex  items-center mb-3">
                    <div class="flex items-center">

                        <a class="inline-flex items-start mr-3" href="{{ route('cliente',$pcliente['id']) }}">
                            <img class="rounded-full" src="https://res.cloudinary.com/dc6deairt/image/upload/v1638102932/user-48-01_nugblk.jpg" width="48" height="48" alt="Lauren Marsano" />
                        </a>
                        <div class="pr-1">
                            <a class="inline-flex text-gray-800 hover:text-gray-900" href="{{ route('cliente',$pcliente['id']) }}">
                                <h2 class="text-xl leading-snug font-bold">{{$pcliente['nombre']}}</h2>
                            </a>
                            <a class="block text-sm font-medium hover:text-indigo-500" href="{{ route('cliente',$pcliente['id']) }}">{{$pcliente['nombre']}}</a>
                        </div>
                    </div>
                    <div class="relative inline-flex flex-shrink-0">
                        <button class="text-gray-400 hover:text-gray-500 rounded-full focus:ring-0 outline-none focus:outline-none">
                            <span class="sr-only">Settings</span>
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 16 16">
                                <path d="m15.621 7.015-1.8-.451A5.992 5.992 0 0 0 13.13 4.9l.956-1.593a.5.5 0 0 0-.075-.611l-.711-.707a.5.5 0 0 0-.611-.075L11.1 2.87a5.99 5.99 0 0 0-1.664-.69L8.985.379A.5.5 0 0 0 8.5 0h-1a.5.5 0 0 0-.485.379l-.451 1.8A5.992 5.992 0 0 0 4.9 2.87l-1.593-.956a.5.5 0 0 0-.611.075l-.707.711a.5.5 0 0 0-.075.611L2.87 4.9a5.99 5.99 0 0 0-.69 1.664l-1.8.451A.5.5 0 0 0 0 7.5v1a.5.5 0 0 0 .379.485l1.8.451c.145.586.378 1.147.691 1.664l-.956 1.593a.5.5 0 0 0 .075.611l.707.707a.5.5 0 0 0 .611.075L4.9 13.13a5.99 5.99 0 0 0 1.664.69l.451 1.8A.5.5 0 0 0 7.5 16h1a.5.5 0 0 0 .485-.379l.451-1.8a5.99 5.99 0 0 0 1.664-.69l1.593.956a.5.5 0 0 0 .611-.075l.707-.707a.5.5 0 0 0 .075-.611L13.13 11.1a5.99 5.99 0 0 0 .69-1.664l1.8-.451A.5.5 0 0 0 16 8.5v-1a.5.5 0 0 0-.379-.485ZM8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="flex flex-wrap justify-center sm:justify-start space-x-4">

                    <div class="flex items-center">
                        <svg class="w-4 h-4 fill-current flex-shrink-0 text-gray-400" viewBox="0 0 16 16">
                            <path d="M11 0c1.3 0 2.6.5 3.5 1.5 1 .9 1.5 2.2 1.5 3.5 0 1.3-.5 2.6-1.4 3.5l-1.2 1.2c-.2.2-.5.3-.7.3-.2 0-.5-.1-.7-.3-.4-.4-.4-1 0-1.4l1.1-1.2c.6-.5.9-1.3.9-2.1s-.3-1.6-.9-2.2C12 1.7 10 1.7 8.9 2.8L7.7 4c-.4.4-1 .4-1.4 0-.4-.4-.4-1 0-1.4l1.2-1.1C8.4.5 9.7 0 11 0ZM8.3 12c.4-.4 1-.5 1.4-.1.4.4.4 1 0 1.4l-1.2 1.2C7.6 15.5 6.3 16 5 16c-1.3 0-2.6-.5-3.5-1.5C.5 13.6 0 12.3 0 11c0-1.3.5-2.6 1.5-3.5l1.1-1.2c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4L2.9 8.9c-.6.5-.9 1.3-.9 2.1s.3 1.6.9 2.2c1.1 1.1 3.1 1.1 4.2 0L8.3 12Zm1.1-6.8c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4l-4.2 4.2c-.2.2-.5.3-.7.3-.2 0-.5-.1-.7-.3-.4-.4-.4-1 0-1.4l4.2-4.2Z" />
                        </svg>
                        <a class="text-sm font-medium whitespace-nowrap text-indigo-500 hover:text-indigo-600 ml-2" href="{{ route('cliente',$pcliente['id']) }}">{{$pcliente['email']}}</a>
                    </div>
                </div>
            </article>
        </div>
        @endforeach
        {{$pclientes->links()}}
    </div>
</section>

@endsection
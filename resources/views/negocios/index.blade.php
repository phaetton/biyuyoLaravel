<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-lg leading-tight flex items-center justify-between">
            {{ __('Listado de Negocios') }}
            <a href="{{route('negocios.create')}}" class="px-4 py-2 rounded-lg text-white bg-gray-800 hover:bg-gray-900 font-bold  shadow-lg shadow-gray-200 transition ease-in-out duration-200 translate-10">Crear</a>

        </h2>
    </x-slot>

    <div class="py-4">
        <div class="grid grid-col-2 sm:grid-col-4 lg:grid-cols-3  gap-4">
            @forelse ($negocios as $negocio)

            <div class="relative flex flex-col">
                <img src="@if(isset($negocio->imagen)) images/negocios/{{$negocio->imagen}} @else images/user_placeholder.png @endif" alt="negocio" class="w-full h-full" />
                <img src="https://i.ibb.co/Tb5CKHn/Rectangle-49.png" alt="opacity bg" class="absolute w-full h-full top-0" />
                <div class="absolute m-6 bottom-0 z-30">
                    <p class="text-sm leading-none text-white">Negocio de</p>
                    <h1 class="w-64 text-2xl font-semibold leading-8 mt-2 text-white">{{$negocio->nombre}}</h1>
                    <div class="flex  gap-4 ">
                        <p class="mt-4 text-base font-medium cursor-pointer  underline text-white"> <a href="{{ route('negocios.edit',$negocio) }}">Editar</a></p>
                        <form action="{{route('negocios.destroy',$negocio)}}" method="POST" class="w-full">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Eliminar" onclick="return confirm('¿Desea eliminar?')" class="mt-4 text-base font-medium cursor-pointer  underline text-white " />
                        </form>
                    </div>
                </div>
            </div>
            @empty
            <div class="border-b border-gray-200 dark:border-gray-700 text-sm dark:text-white">
                Upps! no hay ninguna negocio disponible
            </div>
            @endforelse
        </div>

        <!-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mt-4 w-full">
                @forelse ($negocios as $negocio)
                <div class="relative p-4 w-full bg-white rounded-lg overflow-hidden shadow hover:shadow-md" style="min-height: 160px">
                    <div>


                        <div class="relative block h-full">
                            <div class="h-32 bg-gray-100 rounded-lg overflow-y-hidden "><img src="@if(isset($negocio->imagen)) images/negocios/{{$negocio->imagen}} @else images/user_placeholder.png @endif" class="w-full"></div>
                        </div>
                    </div>

                    <h2 class="m-2 text-gray-800 text-sm font-semibold line-clamp-1">
                        {{$negocio->nombre}}
                    </h2>

                    <div class=" flex gap-2">
                        <a href="{{ route('negocios.edit',$negocio) }}" class="w-full">
                            <button class="text-sm  rounded-md w-full mt-4 px-4 py-2  text-white bg-green-800 hover:bg-green-900 font-bold">
                                Editar
                            </button>

                        </a>

                        <form action="{{route('negocios.destroy',$negocio)}}" method="POST" class="w-full">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Eliminar" onclick="return confirm('¿Desea eliminar?')" class=" text-sm  rounded-md w-full mt-4 px-4 py-2  text-white bg-gray-800 hover:bg-gray-900 font-bold " />
                        </form>
                    </div>
                </div>
                @empty
                <div class="border-b border-gray-200 dark:border-gray-700 text-sm dark:text-white">
                    Upps! no hay ningún negocio disponible
                </div>
                @endforelse

            </div>

            {{$negocios->links()}}
        </div> -->

    </div>
</x-app-layout>
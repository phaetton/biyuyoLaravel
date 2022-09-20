<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-lg text-gray-800 leading-tight flex items-center justify-between">
            {{ __('Listado de imagenes') }}
            <a href="{{route('imagenes.create')}}" class="px-4 py-2 rounded-lg text-white bg-gray-800 hover:bg-gray-900 font-bold  shadow-lg shadow-gray-200 transition ease-in-out duration-200 translate-10">Crear</a>

        </h2>
    </x-slot>




    <div class="py-4">
        <div class=" container mx-auto sm:px-6 lg:px-8">
            <div class=" shadow-sm sm:rounded-lg">
                    <div class="grid grid-cols-4 -m-1 md:-m-2 gap-2">
                        @forelse ($imagenes as $imagen)

                        <a class="relative block border border-gray-100" href="/product/build-your-own-drone">


                            <img class="object-contain w-full h-56 lg:h-72" src="@if(isset($imagen->imagen)) ../images/imagenes/{{$imagen->imagen}} @else ../images/user_placeholder.png @endif" alt="Build Your Own Drone" loading="lazy" />

                            <div class="p-6">


                                <h5 class="mt-4 text-lg font-bold">
                                    {{$imagen->negocio_id}} - {{$imagen->nombre}}
                                </h5>

                                <p class="mt-2 text-sm text-gray-700 overflow-y-hidden h-20 w-full ">
                                    {{$imagen->descripcion}}
                                </p>



                                <form action="{{route('imagenes.destroy',$imagen)}}" class="" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Eliminar" onclick="return confirm('¿Desea eliminar?')" class="block w-full p-4 mt42  text-white bg-gray-800 hover:bg-gray-900 font-bold  shadow-lg shadow-gray-200 transition ease-in-out duration-200 translate-10" />
                                </form>
                            </div>
                        </a>

                        @empty
                        <div class="border-b border-gray-200 dark:border-gray-700 text-sm dark:text-white">
                            Upps! no hay ninguna imagen disponible
                        </div>
                        @endforelse
                    </div>
                    {{$imagenes->links()}}
                </div>
        </div>
</x-app-layout>
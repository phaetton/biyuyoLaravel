<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-lg text-gray-800 leading-tight flex items-center justify-between">
            {{ __('Listado de Negocios') }}
            <a href="{{route('negocios.create')}}" 
            class="px-4 py-2 rounded-lg text-white bg-gray-800 hover:bg-gray-900 font-bold  shadow-lg shadow-gray-200 transition ease-in-out duration-200 translate-10">Crear</a>

        </h2>
    </x-slot>

    <div class="py-4">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
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
                <div class="border-b border-gray-200 text-sm">
                    Upps! no hay ninguna publicacion disponible
                </div>
                @endforelse

            </div>

            {{$negocios->links()}}
        </div>

        <!-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- component --
                    <div class="w-full lg:w-5/6">
                        <div class="bg-white shadow-md rounded my-6">
                            <table class="min-w-max w-full table-auto">
                                <thead>
                                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                        <th class="py-3 px-6 text-left">Id</th>
                                        <th class="py-3 px-6 text-left">Nombre</th>
                                        <th class="py-3 px-6 text-left"></th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-600 text-sm font-light">
                                    @forelse ($negocios as $negocio)
                                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                                        <td class="py-3 px-6 text-left whitespace-nowrap">
                                           
                                        <div class="flex items-center">
                                                <div class="flex-shrink-0 w-10 h-10 hidden sm:table-cell">
                                                    <img class="w-full h-full rounded-full" src="@if(isset($negocio->imagen)) images/negocios/{{$negocio->imagen}} @else images/user_placeholder.png @endif" alt="" />
                                                </div>
                                                <div class="ml-3">
                                                    <p class="text-gray-900 whitespace-no-wrap">
                                                        {{$negocio->nombre}}
                                                    </p>
                                                </div>
                                            </div>

                                        </td>
                                        <td class="py-3 px-6 text-left whitespace-nowrap">
                                            <div class="flex items-center">
                                                <span class="font-medium"> {{$negocio->email}}</span>
                                            </div>
                                        </td>

                                        <td class="py-3 px-6  flex gap-2 justify-end">
                                            <a href="{{route('negocios.edit',$negocio)}}" class="px-4 py-2 rounded-lg text-white bg-green-800 hover:bg-green-900 font-bold  shadow-lg shadow-green-200 transition ease-in-out duration-200 translate-10">Editar</a>

                                            <form action="{{route('negocios.destroy',$negocio)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" value="Eliminar" onclick="return confirm('¿Desea eliminar?')" class="px-4 py-2 rounded-lg text-white bg-gray-800 hover:bg-gray-900 font-bold  shadow-lg shadow-gray-200 transition ease-in-out duration-200 translate-10" />
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr class="border-b border-gray-200 text-sm">
                                        Upps! no hay ninguna publicacion disponible
                                    </tr>
                                    @endforelse



                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{$negocios->links()}}
                </div>
            </div>
        </div> -->
</x-app-layout>
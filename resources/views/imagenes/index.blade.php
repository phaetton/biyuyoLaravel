<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight flex items-center justify-between">
            {{ __('Listado de Imagenes') }}
            <a href="{{route('imagenes.create')}}" class="px-4 py-2 rounded-lg text-white bg-gray-800 hover:bg-gray-900 font-bold  shadow-lg shadow-gray-200 transition ease-in-out duration-200 translate-10">Crear</a>

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- component -->
                    <div class="w-full ">
                        <div class="bg-white shadow-md rounded my-6">
                            <!-- <table class="min-w-max w-full table-auto">
                                <thead>
                                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                        <th class="py-3 px-6 text-left">Id</th>
                                        <th class="py-3 px-6 text-left">imagen</th>
                                        <th class="py-3 px-6 text-left"></th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-600 text-sm font-light">
                                    @forelse ($imagenes as $imagen)
                                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                                        <td class="py-3 px-6 text-left whitespace-nowrap">
                                            <div class="flex items-center">
                                                <span class="font-medium"> {{$imagen->id}}</span>
                                            </div>
                                        </td>
                                        <td class="py-3 px-6 text-left whitespace-nowrap">
                                            <div class="flex items-center">
                                                <span class="font-medium"> <img src="{{$imagen->imagen}}" alt=""></span>
                                            </div>
                                        </td>

                                        <td class="py-3 px-6  flex gap-2 justify-end">
                                            <a href="{{route('imagenes.edit',$imagen)}}" class="px-4 py-2 rounded-lg text-white bg-green-800 hover:bg-green-900 font-bold  shadow-lg shadow-green-200 transition ease-in-out duration-200 translate-10">Editar</a>

                                            <form action="{{route('imagenes.destroy',$imagen)}}" method="POST">
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
                            </table> -->

                            <div class="grid grid-cols-4 gap-4 ">
                                @forelse ($imagenes as $imagen)
                               <!-- component -->
<div class="w-full text-slate-700 dark:text-white flex flex-col items-center">
    <div class=" text-left flex flex-col w-full items-center justify-center  md:border border-slate-300 dark:border-slate-600 rounded-xl">
        <div
            class="w-full rounded-xl flex-col xl:flex-row bg-white dark:bg-slate-900 shadow-md"
        >
            <div
                class="rounded-t-xl w-full h-64 shadow-sm bg-cover"
                style='background-image: url({{$imagen->imagen}});'
            ></div>

            <div class="w-full p-3 flex flex-col justify-between h-auto  lg:h-auto">
                <h1 class="text-left text-sm md:text-lg font-bold leading-normal truncate">
                    {{$imagen->descripcion}}
                </h1>
                

                <div class="flex gap-2 justify-center mt-4">
                  

                    <a href="{{route('imagenes.edit',$imagen)}}" class="px-4 py-2 rounded-lg text-white bg-green-800 hover:bg-green-900 font-bold  shadow-lg shadow-green-200 transition ease-in-out duration-200 translate-10">Editar</a>

<form action="{{route('imagenes.destroy',$imagen)}}" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" value="Eliminar" onclick="return confirm('¿Desea eliminar?')" class="px-4 py-2 rounded-lg text-white bg-gray-800 hover:bg-gray-900 font-bold  shadow-lg shadow-gray-200 transition ease-in-out duration-200 translate-10" />
</form>
                </div>
            </div>
        </div>
    </div>
</div>


                                @empty


                                Upps! no hay ninguna publicacion disponible
                                @endforelse
                            </div>



                            </tbody>
                            </table>
                        </div>
                    </div>
                    {{$imagenes->links()}}
                </div>
            </div>
        </div>
</x-app-layout>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado de Tipos de Negocios') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                        <!-- component -->
                        <div class="w-full lg:w-5/6">
                        <div class="bg-white shadow-md rounded my-6">
                            <table class="min-w-max w-full table-auto">
                                <thead>
                                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                        <th class="py-3 px-6 text-left">Id</th>
                                        <th class="py-3 px-6 text-left">Nombre</th>
                                        <th class="py-3 px-6 text-left"></th>
                                        <th class="py-3 px-6 text-left"></th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-600 text-sm font-light">
                                    @forelse ($tiponegocios as $tiponegocio)
                                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                                        <td class="py-3 px-6 text-left whitespace-nowrap">
                                            <div class="flex items-center">
                                                <span class="font-medium"> {{$tiponegocio->id}}</span>
                                            </div>
                                        </td>
                                        <td class="py-3 px-6 text-left whitespace-nowrap">
                                            <div class="flex items-center">
                                                <span class="font-medium"> {{$tiponegocio->nombre}}</span>
                                            </div>
                                        </td>

                                        <td class="py-3 px-6 text-center">
                                                <a href="{{route('tiponegocios.edit',$tiponegocio)}}" class="text-indigo-600">Editar</a>
                                        </td>
                                        <td class="py-3 px-6 text-center">
                                                <form action="{{route('tiponegocios.destroy',$tiponegocio)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="submit" 
                                                    value="Eliminar" 
                                                    onclick="return confirm('¿Desea eliminar?')" 
                                                    class="bg-gray-800 text-white rounded px-4 py-2" />
                                                </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr class="border-b border-gray-200 text-sm">
                                        Upps! no hay ningun tipo negocio disponible
                                    </tr>
                                    @endforelse



                                </tbody>
                            </table>
                        </div>
                    </div>





                    {{$tiponegocios->links()}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-lg text-gray-800 leading-tight">
            {{ __('Editar Negocio') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <form action="{{route('negocios.update',$negocio)}}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @include('negocios._form')
                </form>    
                
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

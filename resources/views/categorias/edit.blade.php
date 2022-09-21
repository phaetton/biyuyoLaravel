<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-lg  leading-tight">
            {{ __('Editar Categoria') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class=" mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-900 dark:text-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6  border-b border-gray-200">
                    <form action="{{ route('categorias.update',$categoria) }}" method="POST" enctype="multipart/form-data">

                        @method('PUT')
                        @include('categorias._form')

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
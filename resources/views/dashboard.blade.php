<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg flex justify-between items-center gap-4">
            
                <a  href="{{ route('categorias') }}" class="p-6 bg-white border-b border-gray-200 w-1/2 text-center">
                    Categoria
                </a>
                <a  href="{{ route('tiponegocios') }}" class="p-6 bg-white border-b border-gray-200 w-1/2 text-center">
                    Tipo de negocio
                </a>

                <a  href="{{ route('clientes') }}" class="p-6 bg-white border-b border-gray-200 w-1/2 text-center">
                    Clientes
                </a>

                <a  href="{{ route('negocios') }}" class="p-6 bg-white border-b border-gray-200 w-1/2 text-center">
                    Negocios
                </a>
            </div>
        </div>
    </div>
</x-app-layout>

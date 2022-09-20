<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-lg  leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-4">

        <div class="lg:px-20 md:px-6 px-4 md:py-6 py-8">
            <!-- <h1 class="lg:text-4xl text-3xl font-semibold text-gray-800 text-center dark:text-white">Ver Lufu’s World</h1> -->
            <div class="flex justify-center">
                <div class="grid md:grid-cols-4 grid-cols-2 gap-4 md:gap-6 lg:gap-8  items-center">
                    <a href="{{ route('categorias') }}">
                        <div class="relative flex flex-col">
                            <img src="{{asset('../images/iconodash/categorias.jpg')}}" alt="two girls" class="w-full h-full" />
                            <img src="https://i.ibb.co/Tb5CKHn/Rectangle-49.png" alt="opacity bg" class="absolute w-full h-full top-0" />
                            <div class="absolute m-6 bottom-0 z-30">
                                <p class="text-sm leading-none text-white">Colección de</p>
                                <h1 class="w-64 text-2xl font-semibold leading-8 mt-2 text-white">Categorias</h1>
                                <p class="mt-4 text-base font-medium cursor-pointer leading-4 underline text-white">Ver</p>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('tiponegocios') }}">
                        <div class="relative flex flex-col">
                            <img src="{{asset('../images/iconodash/tiponegocios.jpg')}}" alt="black guy" class="w-full" />
                            <img src="https://i.ibb.co/Tb5CKHn/Rectangle-49.png" alt="opacity bg" class="absolute w-full top-0" />
                            <div class="absolute m-6 bottom-0 z-30">
                                <p class="text-sm leading-none text-white">Colección de</p>
                                <h1 class="w-64 text-2xl font-semibold leading-8 mt-2 text-white">Tipos de Negocios</h1>
                                <p class="mt-4 text-base font-medium cursor-pointer leading-4 underline text-white">Ver</p>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('clientes') }}">
                        <div class="relative flex flex-col">
                            <img src="{{asset('../images/iconodash/clientes.jpg')}}" alt="black guy" class="w-full h-full" />
                            <img src="https://i.ibb.co/Tb5CKHn/Rectangle-49.png" alt="opacity bg" class="absolute w-full h-full top-0" />
                            <div class="absolute m-6 bottom-0 z-30">
                                <p class="text-sm leading-none text-white">Colección de</p>
                                <h1 class="w-64 text-2xl font-semibold leading-8 mt-2 text-white">Clientes</h1>
                                <p class="mt-4 text-base font-medium cursor-pointer leading-4 underline text-white">Ver</p>
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('negocios') }}">
                        <div class="relative flex flex-col">
                            <img src="{{asset('../images/iconodash/negocios.jpg')}}" alt="black guy" class="w-full h-full" />
                            <img src="https://i.ibb.co/Tb5CKHn/Rectangle-49.png" alt="opacity bg" class="absolute w-full h-full top-0" />
                            <div class="absolute m-6 bottom-0 z-30">
                                <p class="text-sm leading-none text-white">Colección de</p>
                                <h1 class="w-64 text-2xl font-semibold leading-8 mt-2 text-white">Negocios</h1>
                                <p class="mt-4 text-base font-medium cursor-pointer leading-4 underline text-white">Ver</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    
    </div>
</x-app-layout>
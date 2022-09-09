@extends('template')

@section('content')


<!-- component -->
<!-- <link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.2.0/dist/flowbite.min.css" /> -->


<!-- This is an example component -->



<section class="text-gray-600 body-font overflow-hidden">
    <div class="container px-5 py-24 mx-auto">
        <div class="lg:w-4/5 mx-auto flex flex-wrap">
            <div class="lg:w-1/2 w-full lg:pr-10 lg:py-6 mb-6 lg:mb-0">
                <h2 class="text-sm title-font text-gray-500 tracking-widest">Detalle del negocio</h2>
                <h1 class="text-gray-900 text-3xl title-font font-medium mb-4">{{$pnegocio->nombre}}</h1>
                <div class="max-w-2xl mx-auto">

                    <div class="border-b border-gray-200 dark:border-gray-700 mb-4">
                        <ul class="flex flex-wrap -mb-px" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                            <li class="mr-2" role="presentation">
                                <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Descripción</button>
                            </li>
                            <li class="mr-2" role="presentation">
                                <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300 active" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="true">Redes Sociales</button>
                            </li>
                            <li role="presentation">
                                <button class="inline-block text-gray-500 hover:text-gray-600 hover:border-gray-300 rounded-t-lg py-4 px-4 text-sm font-medium text-center border-transparent border-b-2 dark:text-gray-400 dark:hover:text-gray-300" id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts" aria-selected="false">Contactanos</button>
                            </li>
                        </ul>
                    </div>
                    <div id="myTabContent">
                        <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 hidden" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <p class="text-gray-500 dark:text-gray-400 text-sm">
                            <p class="leading-relaxed mb-4 overflow-y-hidden h-80">{{$pnegocio->descripcion}}.</p>
                            <div class="flex border-t border-gray-200 py-2">
                                <span class="text-gray-500">Celular Claro</span>
                                <span class="ml-auto text-gray-900">{{$pnegocio->claro}}</span>
                            </div>
                            <div class="flex border-t border-gray-200 py-2">
                                <span class="text-gray-500">Celular Tigo</span>
                                <span class="ml-auto text-gray-900">{{$pnegocio->tigo}}</span>
                            </div>
                            <div class="flex border-t border-b mb-6 border-gray-200 py-2">
                                <span class="text-gray-500">Convencional</span>
                                <span class="ml-auto text-gray-900"> {{$pnegocio->convencional}}</span>
                            </div>

                            <div class="flex">
                                <!-- <span class="title-font font-medium text-2xl text-gray-900">$58.00</span> -->
                                <button class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Contactar</button>
                            </div>
                            </p>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                            <p class="text-gray-500 dark:text-gray-400 text-sm">
                            <div class="flex border-t border-gray-200 py-2">
                                <span class="text-gray-500">Celular Claro</span>
                                <span class="ml-auto text-gray-900">{{$pnegocio->claro}}</span>
                            </div>
                            <div class="flex border-t border-gray-200 py-2">
                                <span class="text-gray-500">Celular Tigo</span>
                                <span class="ml-auto text-gray-900">{{$pnegocio->tigo}}</span>
                            </div>
                            <div class="flex border-t border-gray-200 py-2">
                                <span class="text-gray-500">facebook</span>
                                <span class="ml-auto text-gray-900"> {{$pnegocio->facebook}}</span>
                            </div>
                            <div class="flex border-t border-gray-200 py-2">
                                <span class="text-gray-500">whatsapp</span>
                                <span class="ml-auto text-gray-900"> {{$pnegocio->whatsapp}}</span>
                            </div>
                            <div class="flex border-t border-gray-200 py-2">
                                <span class="text-gray-500">twitter</span>
                                <span class="ml-auto text-gray-900"> {{$pnegocio->twitter}}</span>
                            </div>
                            <div class="flex border-t border-gray-200 py-2">
                                <span class="text-gray-500">telegram</span>
                                <span class="ml-auto text-gray-900"> {{$pnegocio->telegram}}</span>
                            </div>
                            <div class="flex border-t border-b mb-6 border-gray-200 py-2">
                                <span class="text-gray-500">instagram</span>
                                <span class="ml-auto text-gray-900"> {{$pnegocio->instagram}}</span>
                            </div>

                            </p>
                        </div>

                        

                        <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 hidden" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
                            <p class="text-gray-500 dark:text-gray-400 text-sm">
                                <!-- component -->

                            <div class="flex  items-center justify-start bg-white">
                                <div class="mx-auto w-full max-w-lg">
                                    <h1 class="text-4xl font-medium">Contactanos</h1>
                                    <p class="mt-3">Nuestro email es {{$pnegocio->email}} o envianos un mensaje aqui:</p>

                                    <form action="#" class="mt-10">



                                        <input type="hidden" name="access_key" value="YOUR_ACCESS_KEY_HERE" />
                                        <div class="grid gap-6 sm:grid-cols-2">
                                            <div class="relative z-0">
                                                <input type="text" name="name" class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0" placeholder=" " />
                                                <label class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 peer-focus:dark:text-blue-500">Nombre</label>
                                            </div>
                                            <div class="relative z-0">
                                                <input type="text" name="email" class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0" placeholder=" " />
                                                <label class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 peer-focus:dark:text-blue-500">email</label>
                                            </div>
                                            <div class="relative z-0 col-span-2">
                                                <textarea name="message" rows="5" class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0" placeholder=" "></textarea>
                                                <label class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 peer-focus:dark:text-blue-500">Mensaje</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="mt-5 rounded-md bg-black px-10 py-2 text-white">Enviar Mensage</button>
                                    </form>
                                </div>
                            </div>.</p>
                        </div>
                    </div>                
                </div>

            </div>
            <img class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="../images/negocios/{{$pnegocio->imagen}}">
        </div>
    </div>
</section>


@endsection
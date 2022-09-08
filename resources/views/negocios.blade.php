




<section class="text-gray-600 body-font">
    <div class="container px-5 py-8 mx-auto ">
        <div class="flex flex-col text-center items-center w-full mb-10">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Lista de negocios</h1>
                <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">lista de los negocios fisicos y en linea ademas de los servicios fisicos y en linea.</p>
        </div>

        <div class="grid xs:grid-cols-1  md:grid-cols-2  gap-4">
            @foreach($pnegocios as $pnegocio)
            <a href="{{ route('negocio',$pnegocio['slug']) }}" class="block p-4 rounded-lg shadow-sm shadow-indigo-100 w-full">
                <img alt="{{$pnegocio->nombre}}" src="{{$pnegocio->imagen}}" class="object-cover w-full h-56 rounded-md" />

                <div class="mt-2">
                    <div class="grid grid-cols-2  text-gray-800 text-xs">
                        <div class="col-span-2 md:col-span-1 flex space-x-3">
                            <div class="w-1/2">
                                <h2 class="text-gray-500">Tipo</h2>
                                <p>{{$pnegocio->tiponegocio->nombre}}</p>
                            </div>
                            <div class="w-1/2">
                                <h2 class="text-gray-500">Categoria</h2>
                                <p> {{$pnegocio->categoria->nombre}}</p>
                            </div>
                        </div>
                        <div class="col-span-2 md:col-span-1 flex space-x-3">

                            <div>
                                <h2 class="text-gray-500">Dueño</h2>
                                <p>{{$pnegocio->cliente->nombre}}</p>
                            </div>
                        </div>
                    </div>





                    </dl>
                </div>
            </a>
            @endforeach
        </div>
        {{$pnegocios->links()}}
    </div>
</section>

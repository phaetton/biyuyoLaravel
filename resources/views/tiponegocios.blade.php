

<section class="text-gray-600 body-font">
        <div class="container px-5 py-8 mx-auto ">
                <div class="flex flex-col text-center items-center w-full mb-10">
                        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Lista de tipos de negocios</h1>
                        <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">lista de los tipos de negocios fisicos y en linea ademas de los servicios fisicos y en linea.</p>
                </div>



                        <div class="grid grid-cols-2 gap-8">
                                @foreach($ptiponegocios as $ptiponegocio)
                                <div class="grid grid-cols-1 gap-6 md:grid-cols-4">
                                        <a href="{{ route('tiponegocio',$ptiponegocio['slug']) }}">
                                                <img src="images/tiponegocios/{{$ptiponegocio['imagen']}}" class="object-cover w-full h-40 col-span-1 bg-center" alt="Kutty" loading="lazy" />
                                                <div class="col-span-1 md:col-span-3">
                                                        <p class="mb-2 -mt-1 text-sm font-normal text-gray-500">{{$ptiponegocio['slug']}}</p>
                                                        <h2 class="mb-2 text-xl font-extrabold leading-snug text-gray-800">
                                                                <a href="{{ route('tiponegocio',$ptiponegocio['slug']) }}" class="text-gray-900 hover:text-purple-700"> {{$ptiponegocio['nombre']}}</a>
                                                        </h2>
                                                        <p class="mb-3 text-sm font-normal text-gray-500 text-clip overflow-hidden h-24">
                                                                {{$ptiponegocio['descripcion']}}
                                                        </p>
                                                        <a href="{{ route('tiponegocio',$ptiponegocio['slug']) }}" class="btn btn-light btn-sm">Read More</a>
                                                </div>
                                        </a>
                                </div>


                                @endforeach

                        </div>

</section>

{{$ptiponegocios->links()}}
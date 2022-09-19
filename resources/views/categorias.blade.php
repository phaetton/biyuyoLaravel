<section class="text-gray-600 body-font">
        <div class="container px-5 py-8 mx-auto">
                <div class="flex flex-col text-center items-center w-full mb-20">
                        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Lista de categorias</h2>
                                <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">Categorias de los negocios fisicos y en linea ademas de los servicios fisicos y en linea.</p>
                </div>
                <div class="grid grid-cols-4 ">
                        @foreach($pcategorias as $pcategoria)
                        <a href="{{ route('categoria',$pcategoria['slug']) }}" class="relative flex items-end w-full bg-black h-96 group">
                                <img alt="Modded Bike" src="@if (false ) {{$pcategoria['imagen']}} @else images/categorias/{{$pcategoria['imagen']}} @endif" class="absolute inset-0 object-cover w-full h-full transition-opacity group-hover:opacity-90" />
                                <div class="relative w-full p-6 tracking-widest text-center text-white bg-gray-700 transition-colors sm:w-2/3 group-hover:bg-black">
                                        <p class="mt-1 text-xs font-medium uppercase">
                                        {{$pcategoria['nombre']}}
                                        </p>
                                </div>
                        </a>

                        @endforeach
                </div>

        </div>
</section>



{{$pcategorias->links()}}
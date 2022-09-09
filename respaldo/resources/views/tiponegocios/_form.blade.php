@csrf
<!-- component -->
<div class=" rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
    <div class="-mx-3 md:flex mb-6">
        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
                Nombre
            </label>
            <input name="nombre" value="{{$tiponegocio->nombre}}" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" type="text" placeholder="Nombre" >
            <p class="text-red-600 text-xs italic">@error ('nombre') {{$message}} @enderror</p>

        </div>
        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
                Slug
            </label>
            <input name="slug" value="{{$tiponegocio->slug}}" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" type="text" placeholder="Slug" >
            <!-- <p class="text-red text-xs italic">Please fill out this field.</p> -->
        </div>
        <div class="md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
        imagen
      </label>
      <input name="imagen" value="{{old ('imagen',$tiponegocio->imagen)}}" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-last-name" type="file" accept="image/*" placeholder="imagen">
      
    </div>
  </div>
    </div>
    <div class="-mx-3 md:flex mb-3">
        <div class="md:w-full px-3">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
                Descripción
            </label>
            <textarea name="descripcion" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" cols="10">{{$tiponegocio->descripcion}}</textarea>
            <p class="text-red-600 text-xs italic">@error ('descripcion') {{$message}} @enderror</p>

        </div>
    </div>

    <div class="grid md:flex grid-cols-2 justify-end space-x-4 w-full mt-6">
        <input type="submit" value="Guardar" class="px-4 py-2 rounded-lg text-white bg-gray-800 hover:bg-gray-900 font-bold  shadow-lg shadow-gray-200 transition ease-in-out duration-200 translate-10">

        <a href="{{route('tiponegocios.index')}}" class="px-4 py-2 rounded-lg text-white bg-red-800 hover:bg-red-900 font-bold  shadow-lg shadow-red-200 transition ease-in-out duration-200 translate-10">
            Cancelar
        </a>
    </div>
</div>
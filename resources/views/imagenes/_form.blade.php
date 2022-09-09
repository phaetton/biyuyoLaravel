@csrf
<!-- component -->
<div class=" rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
  <div class="-mx-3 md:flex mb-6 flex-wrap gap-4">
    <div class="w-full px-3 ">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
        Nombre
      </label>
      <input name="nombre" value="{{old('nombre',$imagen->nombre)}}" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" type="text" placeholder="Nombre">
      <p class="text-red-600 text-xs italic">@error ('nombre') {{$message}} @enderror</p>
    </div>

    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
        imagen
      </label>
      <input name="imagen" value="{{old ('imagen',$imagen->imagen)}}" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-last-name" type="file" accept="image/*" placeholder="imagen">

    </div>



  <div class="w-full px-3">
    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
      Descripción
    </label>
    <textarea name="descripcion" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" cols="10">{{old('descripcion',$imagen->descripcion)}}</textarea>
    <p class="text-red-600 text-xs italic">@error ('descripcion') {{$message}} @enderror</p>

  </div>


  <div class="w-full px-3">
    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-state">
      negocio
    </label>
    <div class="relative">
      <select name="negocio" class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded" id="grid-state">
        @foreach($negocios as $negocio)
        <option @if($imagen['negocio_id']==$negocio['id']) selected @endif value="{{$negocio['id']}}">
          {{$negocio['nombre']}}
        </option>
        @endforeach
      </select>
      <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
        <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
          <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
        </svg>
      </div>
    </div>
    <p class="text-red-600 text-xs italic">@error ('negocio') {{$message}} @enderror</p>
  </div>
</div>


<div class="grid md:flex grid-cols-2 justify-end space-x-4 w-full mt-6">
  <input type="submit" value="Guardar" class="px-4 py-2 rounded-lg text-white bg-gray-800 hover:bg-gray-900 font-bold  shadow-lg shadow-gray-200 transition ease-in-out duration-200 translate-10">

  <a href="{{route('imagenes.index')}}" class="px-4 py-2 rounded-lg text-white bg-red-800 hover:bg-red-900 font-bold  shadow-lg shadow-red-200 transition ease-in-out duration-200 translate-10">
    Cancelar
  </a>
</div>
</div>
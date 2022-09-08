@csrf
<!-- component -->
<div class=" rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
    <div class="-mx-3 md:flex mb-6">
        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
                imagen
            </label>
            <input value="{{ old('imagen', $imagen->imagen) }}" 
            name="imagen"
             class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" type="file"
              placeholder="imagen"
              accept="image/*">
            <p class="text-red-600 text-xs italic">@error('imagen') {{$message}} @enderror</p>
        </div>
        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
                negocio
            </label>
            <input value="{{ old('negocio', $imagen->negocio) }}" name="negocio" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" type="text" placeholder="negocio">
            <!-- <p class="text-red-600 text-xs italic">Please fill out this field.</p> -->
        </div>

    </div>
    <div class="-mx-3 md:flex mb-3">
        <div class="md:w-full px-3">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
                Descripción
            </label>
            <textarea name="descripcion" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" cols="10">{{ old('descripcion', $imagen->descripcion) }}</textarea>
            <p class="text-red-600 text-xs italic">@error('descripcion') {{$message}} @enderror</p>

        </div>
    </div>

    <div class="grid md:flex grid-cols-2 justify-end space-x-4 w-full mt-6">
        <input type="submit" value="Guardar" class="px-4 py-2 rounded-lg text-white bg-gray-800 hover:bg-gray-900 font-bold  shadow-lg shadow-gray-200 transition ease-in-out duration-200 translate-10">

        <a href="{{route('imagenes.index')}}" class="px-4 py-2 rounded-lg text-white bg-red-800 hover:bg-red-900 font-bold  shadow-lg shadow-red-200 transition ease-in-out duration-200 translate-10">
            Cancelar
        </a>
    </div>
</div>
@csrf
@csrf
<!-- component -->
<div class=" rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
  <div class="-mx-3 md:flex mb-6 justify-between">
    <div class="md:w-1/2 px-3 |">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
        Nombre
      </label>
      <input name="nombre" value="{{$negocio->nombre}}" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" type="text" placeholder="Nombre">
      <!-- <p class="text-red text-xs italic">Please fill out this field.</p> -->
    </div>
    <div class="md:w-1/2 px-3 |">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
        Slug
      </label>
      <input name="slug" value="{{$negocio->slug}}" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" type="text" placeholder="Slug">
      <!-- <p class="text-red text-xs italic">Please fill out this field.</p> -->
    </div>
    <div class="md:w-1/2 px-3 ">
      <div class="flex gap-4 justify-center rounded-lg w-auto mt-6">
        <label class=" uppercase tracking-wide text-grey-darker text-xs font-bold" for="grid-first-name">
          Activo
        </label>
        <label for="toggle" class="inline-flex relative items-center cursor-pointer">
          <input name="active" type="checkbox" id="toggle" class="sr-only peer" checked>
          <div class="w-11 h-6 bg-slate-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-slate-300 dark:peer-focus:ring-indigo-300 rounded-full peer  peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white dark:bg-slate-500 after:border-slate-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-slate-400 peer-checked:bg-indigo-600"></div>
        </label>
        <!-- <p class="text-red text-xs italic">Please fill out this field.</p> -->
      </div>

    </div>
  </div>

  <div class="-mx-3 md:flex mb-3">
    <div class="md:w-full px-3">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
        Descripción
      </label>
      <textarea name="descripcion" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" cols="10">{{$negocio->descripcion}}</textarea>
      <!-- <p class="text-grey-dark text-xs italic" >Make it as long and as crazy as you'd like</p> -->
    </div>
  </div>


  <div class="-mx-3 md:flex mb-8">

    <div class="md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-state">
        Categoria
      </label>
      <div class="relative">
        <select name="categoria" class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded" id="grid-state">
          <option>New Mexico</option>
          <option>Missouri</option>
          <option>Texas</option>
        </select>
        <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
          <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
          </svg>
        </div>
      </div>
    </div>

    <div class="md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-state">
        Tipo de Negocio
      </label>
      <div class="relative">
        <select name="tiponegocio" class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded" id="grid-state">
          <option>New Mexico</option>
          <option>Missouri</option>
          <option>Texas</option>
        </select>
        <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
          <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
          </svg>
        </div>
      </div>
    </div>

    <div class="md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-state">
        negocio
      </label>
      <div class="relative">
        <select name="negocio" class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded" id="grid-state">
          <option>New Mexico</option>
          <option>Missouri</option>
          <option>Texas</option>
        </select>
        <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
          <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
          </svg>
        </div>
      </div>
    </div>

  </div>
  
  <div class="-mx-3 md:flex mb-6">
    <div class="md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
        convencional
      </label>
      <input name="convencional" value="{{$negocio->convencional}}" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-last-name" type="text" placeholder="convencional">
    </div>
    <div class="md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
        Celular tigo
      </label>
      <input name="tigo" value="{{$negocio->tigo}}" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-last-name" type="text" placeholder="tigo">
    </div>
    <div class="md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
        Celular claro
      </label>
      <input name="claro" value="{{$negocio->claro}}" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-last-name" type="text" placeholder="claro">
    </div>
    <div class="md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
        Facebook
      </label>
      <input name="facebook" value="{{$negocio->facebook}}" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-last-name" type="text" placeholder="facebook">
    </div>
  </div>

  <div class="-mx-3 md:flex mb-6">

    <div class="md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
        Whatsapp
      </label>
      <input name="whatsapp" value="{{$negocio->whatsapp}}" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-last-name" type="text" placeholder="whatsapp">
    </div>
    <div class="md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
        Instagram
      </label>
      <input name="instagram" value="{{$negocio->instagram}}" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-last-name" type="text" placeholder="instagram">
    </div>
    <div class="md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
        Telegram
      </label>
      <input name="telegram" value="{{$negocio->telegram}}" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-last-name" type="text" placeholder="telegram">
    </div>
    <div class="md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
        Twitter
      </label>
      <input name="twitter" value="{{$negocio->twitter}}" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-last-name" type="text" placeholder="Twitter">
    </div>
  </div>


  <div class="grid md:flex grid-cols-2 justify-end space-x-4 w-full mt-6">
    <input type="submit" value="Guardar" class="px-4 py-2 rounded-lg text-white bg-gray-800 hover:bg-gray-900 font-bold  shadow-lg shadow-gray-200 transition ease-in-out duration-200 translate-10">

    <a href="{{route('negocios.index')}}" class="px-4 py-2 rounded-lg text-white bg-red-800 hover:bg-red-900 font-bold  shadow-lg shadow-red-200 transition ease-in-out duration-200 translate-10">
      Cancelar
    </a>
  </div>
</div>
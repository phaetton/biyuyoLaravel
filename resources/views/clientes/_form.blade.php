@csrf
<!-- component -->




<div class="w-full px-3 ">
  <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
    Nombre
  </label>
  <input name="nombre" value="{{old ('nombre',$cliente->nombre)}}" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="grid-first-name" type="text" placeholder="Nombre">
  <p class="text-red-600 text-xs italic">@error ('nombre') {{$message}} @enderror</p>
</div>

<div class="w-full px-3">
  <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
    Email
  </label>
  <input name="email" value="{{old ('email',$cliente->email)}}" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-last-name" type="text" placeholder="Email">
</div>


<div class="w-full p-3">
  <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
    imagen
  </label>
  <input name="imagen" value="{{old ('imagen',$cliente->imagen)}}" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-last-name" type="file" accept="image/*" placeholder="imagen">

</div>


<div class="-mx-3 md:flex mb-6">
  <div class="md:w-1/2 px-3">
    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
      convencional
    </label>
    <input name="convencional" value="{{old ('convencional',$cliente->convencional)}}" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-last-name" type="text" placeholder="convencional">
  </div>
  <div class="md:w-1/2 px-3">
    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
      Celular tigo
    </label>
    <input name="tigo" value="{{old ('tigo',$cliente->tigo)}}" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-last-name" type="text" placeholder="tigo">
  </div>
  <div class="md:w-1/2 px-3">
    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
      Celular claro
    </label>
    <input name="claro" value="{{old ('claro',$cliente->claro)}}" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-last-name" type="text" placeholder="claro">
  </div>
  <div class="md:w-1/2 px-3">
    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
      Facebook
    </label>
    <input name="facebook" value="{{old ('facebook',$cliente->facebook)}}" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-last-name" type="text" placeholder="facebook">
  </div>
</div>
<div class="-mx-3 md:flex mb-6">

  <div class="md:w-1/2 px-3">
    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
      Whatsapp
    </label>
    <input name="whatsapp" value="{{old ('whatsapp',$cliente->whatsapp)}}" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-last-name" type="text" placeholder="whatsapp">
  </div>
  <div class="md:w-1/2 px-3">
    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
      Instagram
    </label>
    <input name="instagram" value="{{old ('instagram',$cliente->instagram)}}" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-last-name" type="text" placeholder="instagram">
  </div>
  <div class="md:w-1/2 px-3">
    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
      Telegram
    </label>
    <input name="telegram" value="{{old ('telegram',$cliente->telegram)}}" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-last-name" type="text" placeholder="telegram">
  </div>
  <div class="md:w-1/2 px-3">
    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
      Twitter
    </label>
    <input name="twitter" value="{{old ('twitter',$cliente->twitter)}}" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-last-name" type="text" placeholder="Twitter">
  </div>
</div>
<div class="grid md:flex grid-cols-2 justify-end space-x-4 w-full mt-6">
  <input type="submit" value="Guardar" class="px-4 py-2 rounded-lg text-white bg-gray-800 hover:bg-gray-900 font-bold  shadow-lg shadow-gray-200 transition ease-in-out duration-200 translate-10">

  <a href="{{route('clientes.index')}}" class="px-4 py-2 rounded-lg text-white bg-red-800 hover:bg-red-900 font-bold  shadow-lg shadow-red-200 transition ease-in-out duration-200 translate-10">
    Cancelar
  </a>
</div>
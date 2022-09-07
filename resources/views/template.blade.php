<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>El biyuyo</title>
  @vite('resources/css/app.css')

</head>

<body class="container-fluid mx-auto">
  <header class="flex justify-between items-center py-2">
    <div class="flex items-center flex-grow gap-4">
      <a href="{{route ('home')}}">
        <img src="{{asset('images/logo.png')}}" class="h-12">
      </a>
      <form action="{{route('home')}}" method="GET" class="flex-grow">
        <input type="text" name="search" placeholder="buscar" value="{{request('search')}}" class="border border-gray-200 rounded py-2 px-4 w-1/2">
      </form>

    </div>
    <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-900">
      <div class="container flex flex-wrap justify-between items-center mx-auto">
        <a href="#" class="flex items-center">
          <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-6 sm:h-9" alt="El biyuyo Logo">
          <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">El Biyuyo</span>
        </a>
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
          </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
          <ul class="flex flex-col p-4 mt-4 bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">





            @auth
            <a href="{{ route('dashboard') }}">dashboard</a>
            @else

            <li class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white" aria-current="page"><a href="{{route ('login')}}">login</a></li>
            @endauth
          </ul>
        </div>
      </div>
    </nav>

  </header>

  @yield('content')
  <p class="py-16 ">
    <img src="{{asset('images/logo.png')}}" class="h-12 mx-auto">
  </p>
</body>



</html>
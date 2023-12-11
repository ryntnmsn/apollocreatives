<nav class="border-b border-slate-800">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto py-6 px-4">
      <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
          <img src="{{ asset('images/apollo-logo.png') }}" alt="" class="w-36">
      </a>
      <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-default" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
      </button>
      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul class="font-medium flex items-center flex-col p-4 md:p-0 mt-4 border rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0">
          <li>
            <a href="{{ route('home.index') }}" class="underline-offset-8 {{ request()->is('/') ? 'underline decoration-4 decoration-yellow-300' : '' }} text-slate-200 block py-2 px-3 rounded md:bg-transparent md:p-0 hover:underline decoration-4 underline-offset-4 decoration-yellow-300" aria-current="page">Home</a>
          </li>
          <li>
            <a href="{{ route('services.index') }}" class="underline-offset-8 {{ request()->is('services*') ? 'underline decoration-4 decoration-yellow-300' : '' }} text-slate-200 block py-2 px-3 rounded md:bg-transparent md:p-0 hover:underline decoration-4 underline-offset-4 decoration-yellow-300">Services</a>
          </li>
          <li>
            <a href="{{ route('works.index') }}" class="underline-offset-8 {{ request()->is('works*') ? 'underline decoration-4 decoration-yellow-300' : '' }} text-slate-200 block py-2 px-3 rounded md:bg-transparent md:p-0 hover:underline decoration-4 underline-offset-4 decoration-yellow-300">Works</a>
          </li>
          <li>
            <a href="{{ route('about.index') }}" class="underline-offset-8 {{ request()->is('about-us') ? 'underline decoration-4 decoration-yellow-300' : '' }} text-slate-200 block py-2 px-3 rounded md:bg-transparent md:p-0 hover:underline decoration-4 underline-offset-4 decoration-yellow-300">About us</a>
          </li>
          <li>
            <a href="{{ route('contact.index') }}" class="py-1 space-x-1 items-center px-3 bg-yellow-300 hover:bg-yellow-200 rounded-full text-slate-900 flex">
              <span>
                Partnership
              </span>
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                  <path fill-rule="evenodd" d="M4.606 12.97a.75.75 0 01-.134 1.051 2.494 2.494 0 00-.93 2.437 2.494 2.494 0 002.437-.93.75.75 0 111.186.918 3.995 3.995 0 01-4.482 1.332.75.75 0 01-.461-.461 3.994 3.994 0 011.332-4.482.75.75 0 011.052.134z" clip-rule="evenodd" />
                  <path fill-rule="evenodd" d="M5.752 12A13.07 13.07 0 008 14.248v4.002c0 .414.336.75.75.75a5 5 0 004.797-6.414 12.984 12.984 0 005.45-10.848.75.75 0 00-.735-.735 12.984 12.984 0 00-10.849 5.45A5 5 0 001 11.25c.001.414.337.75.751.75h4.002zM13 9a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                </svg>
              </span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
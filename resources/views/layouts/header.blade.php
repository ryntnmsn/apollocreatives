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
        <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0">
          <li>
            <a href="{{ route('home.index') }}" class="{{ request()->is('/') ? 'underline decoration-4 underline-offset-8 decoration-yellow-300' : '' }} text-slate-200 block py-2 px-3 rounded md:bg-transparent md:p-0" aria-current="page">Home</a>
          </li>
          <li>
            <a href="{{ route('services.index') }}" class="{{ request()->is('services') ? 'underline decoration-4 underline-offset-8 decoration-yellow-300' : '' }} text-slate-200 block py-2 px-3 rounded md:bg-transparent md:p-0">Services</a>
          </li>
          <li>
            <a href="{{ route('works.index') }}" class="{{ request()->is('works') ? 'underline decoration-4 underline-offset-8 decoration-yellow-300' : '' }} text-slate-200 block py-2 px-3 rounded md:bg-transparent md:p-0">Works</a>
          </li>
          <li>
            <a href="{{ route('about.index') }}" class="{{ request()->is('about-us') ? 'underline decoration-4 underline-offset-8 decoration-yellow-300' : '' }} text-slate-200 block py-2 px-3 rounded md:bg-transparent md:p-0">About us</a>
          </li>
          <li>
            <a href="#" class="block py-2 px-3 rounded md:border-0 md:p-0">Partnership</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
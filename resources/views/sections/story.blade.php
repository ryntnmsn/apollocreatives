<div class="w-full pb-56">
    <div class="flex md:flex-row flex-col">
        <div class="flex-1 text-left pe-0 md:pe-10">
            <x-title class="text-6xl mb-5 text-slate-800 dark:text-slate-200">Our Story</x-title>
            <x-paragraph class="pb-5 text-slate-500 dark:text-slate-400">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                <br><br>
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </x-paragraph>
            <x-button>Read more</x-button>
        </div>
        <div class="flex-1">
            <div class="flex justify-center items-center h-full" style="background-image: url('{{ asset('images/astronaut_bg.png') }}'); background-size:contain; background-repeat:no-repeat; background-position:center">
                <div class="astronaut">
                    <img src="{{ asset('images/astronaut.png') }}" alt="" class="w-72 md:w-96">
                </div>
            </div>
        </div>
    </div>
</div>
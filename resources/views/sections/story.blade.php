<div class="w-full pb-56">
    <div class="flex md:flex-row flex-col">
        <div class="flex-1 text-left pe-0 md:pe-10">
            <x-title class="text-5xl md:text-6xl mb-5">Our Story</x-title>
            <x-paragraph class="pb-5">
                Our team of six is centered on innovation, with each member possesses the ability to operate effectively in multiple capacities, bringing with them a wealth of knowledge and unwavering commitment to ensure the delivery of exceptional outcomes.
            </x-paragraph>
            <form action="{{ route('about.index') }}" class="{{ request()->is('about-us') ? 'hidden' : '' }}">
                <x-button type="submit">Read more</x-button>
            </form>
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

<div class="w-full pb-56">
    <div class="flex md:flex-row flex-col">
        <div class="flex-1 text-left pe-0 md:pe-10">
            <x-title class="text-5xl md:text-6xl mb-5">Our Story</x-title>
            <x-paragraph class="pb-5">
                Our marketing agency was founded with the vision of providing ease of use and high quality materials to our clients. We believe in giving value to creative individuals and understand the importance of their contributions. <br><br>Our mission is to help advertise and support small or starting business owners, ensuring their success in the competitive market. We pride ourselves on our dedication to delivering effective marketing strategies and excellent customer service, ultimately helping business owners achieve their goals and thrive.            </x-paragraph>
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

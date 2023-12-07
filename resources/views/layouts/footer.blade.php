<div class="mt-20">
    <div class="max-w-screen-xl w-full mx-auto px-4 z-10 relative">
        <div class="flex bg-gradient-to-r from-yellow-300 to-yellow-300 w-full -mb-20 rounded-xl" style="background-image: url('{{ asset('images/yellow-bg.jpg') }}'); background-repeat:no-repeat; background-size:cover">
            <div class="flex-1 p-10">
                <x-title class="text-4xl text-slate-900 mb-4">
                    Let us do it for you!
                </x-title>
                <div class="flex">
                    <x-button class="bg-slate-900 text-yellow-200 hover:text-slate-900">View more</x-button>
                </div>
            </div>
            <div class="flex-none">
                <img src="{{ asset('images/astronaut-w-flag.png') }}" class="w-48 absolute right-0 bottom-0" alt="">
            </div>
        </div>
    </div>
    
    <div class="w-full bg-slate-200/[.03] text-slate-200 pt-40 z-0">
        <div class="max-w-screen-xl w-full mx-auto px-4">
            <div class="flex mb-20 space-x-10">
                <div class="flex-1">
                    <img src="{{ asset('images/apollo-icon.png') }}" alt="" class="w-16 mb-5">
                    <p class="text-sm mb-5">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque recusandae
                    </p>
                    <x-button class="px-[14px] py-[6px]">Read more</x-button>
                </div>
                <div class="flex-1">
                    <h5 class="text-lg font-bold mb-5 underline underline-offset-8 decoration-[6px] decoration-yellow-300">Useful Links</h5>
                    <div>
                        <ul class="space-y-4">
                            <li><a href="#" class="hover:underline hover:underline-offset-4 decoration-yellow-300 decoration-4">Home</a></li>
                            <li><a href="#" class="hover:underline hover:underline-offset-4 decoration-yellow-300 decoration-4">Services</a></li>
                            <li><a href="#" class="hover:underline hover:underline-offset-4 decoration-yellow-300 decoration-4">Works</a></li>
                            <li><a href="#" class="hover:underline hover:underline-offset-4 decoration-yellow-300 decoration-4">About us</a></li>
                            <li><a href="#" class="hover:underline hover:underline-offset-4 decoration-yellow-300 decoration-4">Partnership</a></li>
                            <li><a href="#" class="hover:underline hover:underline-offset-4 decoration-yellow-300 decoration-4">FAQ's</a></li>
                        </ul>
                    </div>
                </div>
                <div class="flex-1">
                    <h5 class="text-lg font-bold mb-5 underline underline-offset-8 decoration-[6px] decoration-yellow-300">Contact us</h5>
                    <div>
                        <ul class="space-y-4">
                            <li>Phone no:</li>
                            <li>Services</li>
                            <li>Works</li>
                            <li>About us</li>
                            <li>Partnership</li>
                            <li>Pricing</li>
                        </ul>
                    </div>
                </div>
                <div class="flex-1">
                    <h5 class="text-lg font-bold mb-5 underline underline-offset-8 decoration-[6px] decoration-yellow-300">Social link</h5>
                    <div>
                        <ul class="space-y-4">
                            <li>Facebook</li>
                            <li>Instagram</li>
                            <li>Twitter</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex bg-slate-200/[.05]">
            <div class="max-w-screen-xl w-full mx-auto px-4 py-3 flex">
                <x-paragraph class="text-sm text-slate-200/[.30] flex-1">Copyright 2024 © Apollo Creatives PH. All rights reserved.</x-paragraph>
                <x-paragraph class="text-sm text-slate-200/[.30] flex-none">Terms and Condition</x-paragraph>
            </div>
        </div>
    </div>
</div>
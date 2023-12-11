@extends('layouts.app')
@section('title', 'Apollo Creatives PH | Contact Us')

@section('pageTitle')
    <x-page-title class="text-5xl">Partnership</x-page-title>
@endsection

@section('contents')
<div class="mb-56">
    <form action="{{ route('contact.send') }}" method="post">
        @csrf
        <div class="flex space-x-20">
            <div class="flex-1">
                <x-title class="space-x-10 text-2xl underline decoration-yellow-300 decoration-8 underline-offset-8 mb-5">Contact Us</x-title>
                <x-paragraph class="mb-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam corrupti error doloremque repellendus maiores quae quasi, ad deserunt facere iusto dolor dolorem repudiandae modi nam impedit cum nobis earum labore.</x-paragraph>
    
                <div class="mb-10 flex bg-slate-200/[.03] p-5 rounded-lg">
                    <div class="flex-1">
                        <div class="flex items-center space-x-1">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 text-yellow-300">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" />
                                </svg>
                            </span>
                            <span>
                                <x-title>Phone (Mobile)</x-title>
                            </span>
                        </div>
                        <x-paragraph>+639 123 456 8910</x-paragraph>
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center space-x-1">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 text-yellow-300">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                  </svg>
                            </span>
                            <span>
                                <x-title>Phone (Landline)</x-title>
                            </span>
                        </div>
                        <x-paragraph>+639 123 456 8910</x-paragraph>
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center space-x-1">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 text-yellow-300">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                  </svg>
                            </span>
                            <span>
                                <x-title>Email</x-title>
                            </span>
                        </div>
                        <x-paragraph>apollocreatives@gmail.com</x-paragraph>
                    </div>
                </div>
                <div class="flex flex-col w-full space-y-10 bg-slate-200/[.03] rounded-2xl p-10">
                    <div>
                        <label for="name" class="text-slate-400 mb-3 block">Name</label>
                        <input type="text" id="name" name="name" class="w-full px-3 py-2 rounded-lg bg-slate-200/[.03] border-slate-200/[.05] focus:border-yellow-300 focus:bg-yellow-300 focus:text-slate-900 focus:ring-0">
                    </div>
                    <div>
                        <label for="email" class="text-slate-400 mb-3 block">Email</label>
                        <input type="email" id="email" name="email" class="w-full px-3 py-2 rounded-lg bg-slate-200/[.03] border-slate-200/[.05] focus:border-yellow-300 focus:bg-yellow-300 focus:text-slate-900 focus:ring-0">
                    </div>
                    <div>
                        <label for="subject" class="text-slate-400 mb-3 block">Subject</label>
                        <input type="text" id="subject" name="subject" class="w-full px-3 py-2 rounded-lg bg-slate-200/[.03] border-slate-200/[.05] focus:border-yellow-300 focus:bg-yellow-300 focus:text-slate-900 focus:ring-0">
                    </div>
                    <div>
                        <label for="message" class="text-slate-400 mb-3 block">Message</label>
                        <textarea id="message" name="message" class="h-40 w-full px-3 py-2 rounded-lg bg-slate-200/[.03] border-slate-200/[.05] focus:border-yellow-300 focus:bg-yellow-300 focus:text-slate-900 focus:ring-0"></textarea>
                    </div>
                    <div>
                        <x-button>Submit</x-button>
                    </div>
                </div>
            </div>
            <div class="flex-none">
                <div class="flex justify-center items-center h-full pt-10" style="background-image: url('{{ asset('images/astronaut_bg.png') }}'); background-size:contain; background-repeat:no-repeat; background-position:center">
                    <div class="astronaut">
                        <img src="{{ asset('images/spaceman_02.png') }}" alt="" class="w-72 md:w-80">
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@include('sections.faq')
@endsection
@extends('layouts.app')
@section('title', 'Apollo Creatives PH | Works')

@section('pageTitle')
    <x-page-title class="text-5xl">Services</x-page-title>
@endsection

@section('contents')<div class="w-full pb-20">
    <div class="mb-10 flex">
        <div class="flex-1">
            <x-title class="text-4xl underline decoration-yellow-300 underline-offset-[16px] decoration-8">Pick a mission</x-title>
        </div>
        <div class="flex-none items-center justify-center text-right">
            <div class="flex items-end justify-end h-full">
                <a href="#" class="text-yellow-300 flex space-x-2 hover:text-yellow-200">
                    <span>
                        View all
                    </span>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                        </svg>
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($services as $service)
            <div class="p-6 border group border-slate-200/[.10] hover:-translate-y-2 hover:shadow-2xl bg-slate-200/[.03] rounded-2xl hover:bg-amber-400 duration-300 ease-in-out cursor-pointer">
                <a href="{{ route('services.show', $service->slug) }}">
                    <div class="flex space-x-4 mb-4 w-full">
                        <div class="flex-none">
                            <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->name }}" class="w-12 h-12 rounded-lg" loading="lazy">
                        </div>
                        <div class="flex-auto">
                            <x-title class="mb-0 text-lg group-hover:text-slate-900">{{ $service->name }}</x-title>
                            <x-paragraph class="font-bold group-hover:text-slate-900">Service</x-paragraph>
                        </div>
                    </div>
                    <x-paragraph class="mb-5 group-hover:text-slate-900 group-hover:font-medium">{{ $service->short_description }}</x-paragraph>
                    <x-button class="group-hover:bg-slate-900 group-hover:text-yellow-300">Learn more</x-button>
                </a>
            </div>      
        @endforeach
    </div>
</div>
@endsection
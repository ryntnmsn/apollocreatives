@extends('layouts.app')
@section('title', 'Apollo Creatives PH | Services')

@section('pageTitle')
    <x-page-title class="text-5xl">Services</x-page-title>
@endsection

@section('contents')<div class="w-full pb-20">
    @if($servicesList->count() != null)
        <div class="w-full pb-20">
            <div class="mb-10 flex">
                <div class="flex-1">
                    <x-title class="text-4xl underline decoration-yellow-300 underline-offset-[16px] decoration-8 text-slate-800 dark:text-slate-200">Pick a mission</x-title>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($servicesList as $service)
                    <div class="column card p-6 border group border-slate-200/[.04] hover:scale-[1.1] hover:shadow-2xl hover:bg-yellow-300 dark:hover:bg-yellow-300 bg-slate-100 dark:bg-slate-200/[.03] rounded-2xl duration-200 ease-in-out cursor-pointer">
                        <a href="{{ route('services.show', $service->slug) }}">
                            <div class="flex space-x-4 mb-4 w-full">
                                <div class="flex-none">
                                    <img src="{{ asset('storage/app/public/' . $service->image) }}" alt="{{ $service->name }}" class="w-12 h-12 rounded-lg" loading="lazy">
                                </div>
                                <div class="flex-auto">
                                    <x-title class="mb-0 text-lg group-hover:text-slate-900">{{ $service->name }}</x-title>
                                    <x-paragraph class="font-bold group-hover:text-slate-900 text-slate-500 dark:text-slate-400">Service</x-paragraph>
                                </div>
                            </div>
                            <x-paragraph class="mb-5 group-hover:text-slate-900 group-hover:font-medium">{!! Str::words($service->short_description, 50 ,' . . .') !!}</x-paragraph>
                            <x-button class="group-hover:bg-slate-900 group-hover:text-yellow-300">Learn more</x-button>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

    @else
        <div class="flex flex-col justify-center items-center py-20 space-y-6">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 h-16">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <div>
                <x-title class="text-2xl">No services available.</x-title>
            </div>
        </div>
    @endif

@endsection

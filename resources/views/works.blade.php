@extends('layouts.app')
@section('title', 'Apollo Creatives PH | Works')

@section('pageTitle')
    <x-page-title class="text-5xl">Works</x-page-title>
@endsection

@section('contents')
    <div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 pb-5">
            <div class="relative overflow-hidden bg-yellow-300 dark:bg-slate-800 cursor-pointer rounded-xl flex justify-center items-center py-36 border-yellow-300 group">
                <a href="{{ route('filmWorks') }}">
                    <x-title class="text-4xl text-slate-900 dark:text-yellow-300 z-20 group-hover:hidden">Film Works</x-title>
                    <div class="absolute top-0 left-0 right-0 bottom-0 bg-no-repeat bg-cover bg-center z-0 grayscale opacity-[.02] group-hover:opacity-[1] group-hover:grayscale-0" style=""></div>
                </a>
            </div>
            <div class="relative overflow-hidden bg-yellow-300 dark:bg-slate-800 cursor-pointer rounded-xl flex justify-center items-center py-36 border-yellow-300 group">
                <a href="">
                    <x-title class="text-4xl text-slate-900 dark:text-yellow-300 z-20 group-hover:hidden">Animation</x-title>
                    <div class="absolute top-0 left-0 right-0 bottom-0 bg-no-repeat bg-cover bg-center z-0 grayscale opacity-[.02] group-hover:opacity-[1] group-hover:grayscale-0" style=""></div>
                </a>
            </div>
            <div class="relative overflow-hidden bg-yellow-300 dark:bg-slate-800 cursor-pointer rounded-xl flex justify-center items-center py-36 border-yellow-300 group">
                <a href="{{ route('eventsWorks') }}">
                    <x-title class="text-4xl text-slate-900 dark:text-yellow-300 z-20 group-hover:hidden">Events</x-title>
                    <div class="absolute top-0 left-0 right-0 bottom-0 bg-no-repeat bg-cover bg-center z-0 grayscale opacity-[.02] group-hover:opacity-[1] group-hover:grayscale-0" style=""></div>
                </a>
            </div>
            <div class="relative overflow-hidden bg-yellow-300 dark:bg-slate-800 cursor-pointer rounded-xl flex justify-center items-center py-36 border-yellow-300 group">
                <a href="">
                    <x-title class="text-4xl text-slate-900 dark:text-yellow-300 z-20 group-hover:hidden">3D Animations</x-title>
                    <div class="absolute top-0 left-0 right-0 bottom-0 bg-no-repeat bg-cover bg-center z-0 grayscale opacity-[.02] group-hover:opacity-[1] group-hover:grayscale-0" style=""></div>
                </a>
            </div>
        </div>

        @if($companies->count() != null)
        <div class="grid grid-col-1 md:grid-cols-2 lg:grid-cols-3 gap-5 pb-20">
            @foreach ($companies as $company)
                <div class="relative overflow-hidden bg-yellow-300 dark:bg-slate-800 cursor-pointer rounded-xl flex justify-center items-center py-36 border-yellow-300 group">
                    <a href="{{ route('works.show', $company->slug) }}">
                        <x-title class="text-4xl text-slate-900 dark:text-yellow-300 z-20 group-hover:hidden">{{ $company->name }}</x-title>
                        <div class="absolute top-0 left-0 right-0 bottom-0 bg-no-repeat bg-cover bg-center z-0 grayscale opacity-[.02] group-hover:opacity-[1] group-hover:grayscale-0" style="background-image:url('{{ asset('storage/' . $company->image) }}') "></div>
                    </a>
                </div>
            @endforeach
        </div>
        @else
        <div class="flex flex-col justify-center items-center py-20 space-y-6">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 h-16">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <div>
                <x-title class="text-2xl">No works available.</x-title>
            </div>
        </div>
        @endif
    </div>
@endsection

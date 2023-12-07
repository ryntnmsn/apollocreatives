@extends('layouts.app')
@section('title', 'Apollo Creatives PH | Works')

@section('pageTitle')
    <x-page-title class="text-5xl">{{ $company->name }}</x-page-title>
@endsection

@section('contents')
    <div>
        <div class="mb-10">
            <x-paragraph>{{ $company->description }}</x-paragraph>
        </div>
        <div class="flex flex-col mb-40">
            @forelse ($company->works as $work)
                <div class="py-16 flex items-center space-x-20 border-b-2 border-slate-200/[.08]">
                    <div class="flex-1">
                        <x-title class="text-3xl pb-10 underline decoration-yellow-300 underline-offset-8 decoration-8">{{ $work->name }}</x-title>
                        <x-paragraph>{{ $work->description }}</x-paragraph>
                    </div>
                    <div class="flex-none">
                        <img class="w-72 rounded-xl" src="{{ asset('storage/' . $work->image) }}" alt="{{ $work->name }}">
                    </div>
                </div>
            @empty
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
            @endforelse
        </div>
        <div class="flex flex-col">
            <div class="flex mb-10">
                <x-title class="text-4xl mb-5 flex-1 underline decoration-yellow-300 underline-offset-[10px] decoration-8">Other Works</x-title>
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
            <div class="grid grid-cols-4 gap-6 pb-20">
                @foreach ($companies as $company)
                    <div class="relative overflow-hidden bg-yellow-300 cursor-pointer rounded-xl flex justify-center items-center p-20 border-yellow-300 group duration-300 ease-in-out">
                        <a href="{{ route('works.show', $company->slug) }}">
                            <x-title class="text-4xl text-slate-900 z-20 group-hover:hidden duration-300 ease-in-out">{{ $company->name }}</x-title>
                            <div class="absolute top-0 left-0 right-0 bottom-0 bg-no-repeat bg-cover bg-center z-0 grayscale opacity-[.02] group-hover:opacity-[1] group-hover:grayscale-0 duration-300 ease-in-out" style="background-image:url('{{ asset('storage/' . $company->image) }}') "></div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
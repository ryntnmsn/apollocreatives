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
        <div class="flex flex-col">
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
        <div>

        </div>
    </div>
@endsection
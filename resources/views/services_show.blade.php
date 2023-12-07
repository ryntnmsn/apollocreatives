@extends('layouts.app')
@section('title', 'Apollo Creatives PH | Works')

@section('pageTitle')
    <x-page-title class="text-5xl">{{ $service->name }}</x-page-title>
    <div class="bg-yellow-300">
        <div class="max-w-screen-xl mx-auto">
            <ul class="flex text-slate-900 overflow-auto whitespace-nowrap">
                @foreach ($services as $service)
                    <li class="flex-1 text-center py-3 px-5 cursor-pointer {{ request()->is('services/' . $service->slug) ? 'bg-slate-900 underline decoration-yellow-300 decoration-4 underline-offset-8 text-slate-200 hover:bg-slate-900' : 'hover:bg-yellow-200' }}"><a href="{{ route('services.show', $service->slug) }}" class="font-bold">{{ $service->name }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection

@section('contents')
    <div>
       
        <div class="mb-10">
            <x-paragraph class="text-center">{{ $service->description }}</x-paragraph>
        </div>
        <div class="flex flex-col">
            
        </div>
    </div>
@endsection
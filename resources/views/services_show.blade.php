@extends('layouts.app')
@section('title', 'Apollo Creatives PH | Works')

@section('pageTitle')
    <x-page-title class="text-5xl">{{ $service->name }}</x-page-title>
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
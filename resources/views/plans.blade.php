@extends('layouts.app')
@section('title', 'Apollo Creatives PH | Pricing and Plans')

@section('pageTitle')
    <x-page-title class="text-5xl">Plans</x-page-title>
@endsection

@section('contents')
    <div class="flex md:flex-row flex-col">
            @include('plans.starter')
            @include('plans.standard')
            @include('plans.enterprise')
    </div>
@endsection
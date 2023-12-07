@extends('layouts.app')
@section('title', 'Apollo Creatives PH | Works')

@section('pageTitle')
    <x-page-title class="text-5xl">Works</x-page-title>
@endsection

@section('contents')
    <div>
        <div class="grid grid-col-1 md:grid-cols-2 lg:grid-cols-3 gap-5 pb-20">
            @foreach ($companies as $company)
                <div class="relative overflow-hidden bg-yellow-300 cursor-pointer rounded-xl flex justify-center items-center py-36 border-yellow-300 group">
                    <a href="{{ route('works.show', $company->slug) }}">
                        <x-title class="text-4xl text-slate-900 z-20 group-hover:hidden">{{ $company->name }}</x-title>
                        <div class="absolute top-0 left-0 right-0 bottom-0 bg-no-repeat bg-cover bg-center z-0 grayscale opacity-[.02] group-hover:opacity-[1] group-hover:grayscale-0" style="background-image:url('{{ asset('storage/' . $company->image) }}') "></div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
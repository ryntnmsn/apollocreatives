@extends('layouts.app')
@section('title', 'Apollo Creatives PH | Works')

@section('pageTitle')
    <x-page-title class="text-5xl">Works</x-page-title>
@endsection

@section('contents')
    <div>
        <div class="grid grid-cols-3 gap-6 pb-20">
            @foreach ($companies as $company)
                <div class="relative overflow-hidden bg-slate-800 cursor-pointer rounded-xl flex justify-center items-center py-36 border border-slate-200/[.08] group duration-300 ease-in-out">
                    <x-title class="text-2xl z-20 group-hover:hidden duration-300 ease-in-out">{{ $company->name }}</x-title>
                    <div class="absolute top-0 left-0 right-0 bottom-0 bg-no-repeat bg-cover bg-center z-0 grayscale opacity-[.02] group-hover:opacity-[1] group-hover:grayscale-0 duration-300 ease-in-out" style="background-image:url('{{ asset('storage/' . $company->image) }}') "></div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
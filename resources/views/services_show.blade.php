@extends('layouts.app')
@section('title', 'Apollo Creatives PH | Works')

@section('pageTitle')
    <x-page-title class="text-5xl">{{ $service->name }}</x-page-title>
    <div class="bg-yellow-300">
        <div class="max-w-screen-xl mx-auto">
            <ul class="flex text-slate-900 overflow-auto whitespace-nowrap">
                @foreach ($servicesList as $serviceList)
                    <li class="flex-1 text-center py-3 px-5 cursor-pointer {{ request()->is('services/' . $serviceList->slug) ? 'bg-slate-900 underline decoration-yellow-300 decoration-4 underline-offset-8 text-slate-200 hover:bg-slate-900' : 'hover:bg-yellow-200' }}"><a href="{{ route('services.show', $serviceList->slug) }}" class="font-bold">{{ $serviceList->name }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection

@section('contents')

    <div>
        <div class="mb-20">
            <div class="w-full">
                <div class="flex md:flex-row flex-col">
                    <div class="flex-1 text-left pe-0 md:pe-20">
                        <x-paragraph class="flex items-center h-full">{{ $service->description }}</x-paragraph>
                    </div>
                    <div class="flex-none">
                        <div class="flex justify-center items-center h-full" style="background-image: url('{{ asset('images/astronaut_bg.png') }}'); background-size:contain; background-repeat:no-repeat; background-position:center">
                            <div class="astronaut">
                                <img src="{{ asset('images/spaceman_01.png') }}" alt="" class="w-72 md:w-60">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-56">
            @if($service->subservices->count() != null)
                <div class="flex">
                    <div class="flex-1">
                        <x-title class="text-2xl underline decoration-yellow-300 decoration-[7px] underline-offset-8 mb-10">Services Offered</x-title>
                    </div>
                    <div class="flex-none">
                        <x-button data-modal-target="{{ $service->slug }}" data-modal-toggle="{{ $service->slug }}">Select this mission</x-button>
                    </div>
                </div>
                <div class="flex">
                    <div class="flex-1">
                        @forelse ($service->subservices as $subservice)
                            <div class="mb-10 bg-slate-200/[.03] px-10 py-10 border border-slate-200/[.05] rounded-xl">
                                <div class="flex items-center space-x-3 mb-2">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-yellow-300">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                        </svg>
                                    </span>
                                    <span>
                                        <x-title class="text-xl font-medium">{{ $subservice->name }}</x-title>
                                    </span>
                                </div>
                                <x-paragraph>{{ $subservice->description }}</x-paragraph>
                            </div>
                        @empty
                        @endforelse
                    </div>
                </div>
            @endif
        </div>

        <div class="mt-20">
            <div class="flex md:flex-row flex-col">
                @include('plans.starter')
                @include('plans.standard')
                @include('plans.enterprise')
            </div>
        </div>
    </div>




<!-- Main modal -->
<div id="{{ $service->slug }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-2xl shadow overflow-hidden">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-5 md:p-5 border-b rounded-t bg-yellow-300">
                <h3 class="text-xl font-semibold text-gray-900">
                    Fill out the form below
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="{{ $service->slug }}">
                    <svg class="w-3 h-3 text-slate-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="space-y-2">
                <form action="{{ route('contact.send') }}" method="post">
                @csrf
                <div class="flex flex-col w-full space-y-5 bg-slate-200/[.03] rounded-lg p-5">
                    <div>
                        <label for="name" class="text-slate-900 mb-1 block">Name</label>
                        <input type="text" id="name" name="name" class="text-slate-900 w-full px-3 py-2 rounded-lg border-2 border-slate-200 focus:border-yellow-300 focus:bg-yellow-300 focus:text-slate-900 focus:ring-0">
                    </div>
                    <div>
                        <label for="email" class="text-slate-900 mb-1 block">Email</label>
                        <input type="email" id="email" name="email" class="text-slate-900 w-full px-3 py-2 rounded-lg border-2 border-slate-200 focus:border-yellow-300 focus:bg-yellow-300 focus:text-slate-900 focus:ring-0">
                    </div>
                    <div>
                        <label for="subject" class="text-slate-900 mb-1 block">Subject</label>
                        <input type="text" id="subject" name="subject" value="Custom mission" class="text-slate-900 w-full px-3 py-2 rounded-lg border-2 border-slate-200 focus:border-yellow-300 focus:bg-yellow-300 focus:text-slate-900 focus:ring-0">
                    </div>
                    <div>
                        <label for="mission" class="text-slate-900 mb-1 block">Missions</label>
                        <div class="grid grid-cols-2 gap-3">
                            @foreach ($servicesList as $servicememu)
                            <div class="flex items-center px-4 border rounded-lg border-slate-200 w-full">
                                <input @if($servicememu->id == $service->id) checked @endif id="services-{{ $servicememu->id }}" type="checkbox" value="{{ $servicememu->name }}" name="services[]" class="w-5 h-5 text-yellow-300 bg-gray-100 border-gray-300 rounded focus:ring-yellow-300 focus:ring-2">
                                <label for="services" class="w-full py-4 ms-2 text-sm font-medium text-gray-900">
                                    {{ $servicememu->name }}</label>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div>
                        <label for="message" class="text-slate-900 mb-1 block">Message</label>
                        <textarea id="message" name="message" class="text-slate-900 h-40 w-full px-3 py-2 rounded-lg border-2 border-slate-200 focus:border-yellow-300 focus:bg-yellow-300 focus:text-slate-900 focus:ring-0"></textarea>
                    </div>
                    <div>
                        <x-button>Submit</x-button>
                    </div>
                </div>
                </form>
            </div>
        
        </div>
    </div>
</div>

@endsection
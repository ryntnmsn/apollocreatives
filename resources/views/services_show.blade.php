@extends('layouts.app')
@section('title', 'Apollo Creatives PH | Services')

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
                    <div class="list_style flex-1 items-center text-left pe-0 md:pe-20 dark:text-slate-100 text-slate-800">
                        {!! $service->description !!}
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
        <div class="mb-40">
            @if($service->subservices->count() != null)
                <div class="flex">
                    <div class="flex-1">
                        <x-title class="text-2xl underline decoration-yellow-300 decoration-[7px] underline-offset-8 mb-10">Services/Packages we offer</x-title>
                    </div>
                    <div class="flex-none">
                        <x-button data-modal-target="{{ $service->slug }}" data-modal-toggle="{{ $service->slug }}">Select this mission</x-button>
                    </div>
                </div>
                <div class="flex flex-row">
                    <div class="flex-1">
                        @forelse ($service->subservices as $subservice)
                            <div class="flex flex-row flex-wrap md:flex-nowrap justify-between items-center gap-8 hover:cursor-default group hover:scale-[1.1] duration-200 ease-in-out mb-10 bg-slate-100 dark:bg-slate-200/[.03] px-10 py-10 border border-slate-200/[.05] rounded-xl dark:hover:bg-yellow-300 hover:bg-yellow-300 group:hover:">
                                <div>
                                    <div class="flex items-center space-x-3 mb-2">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 group-hover:text-slate-900 bg-yellow-300 dark:bg-transparent text-slate-50 rounded-full p-1 dark:text-yellow-300">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                            </svg>
                                        </span>
                                        <span>
                                            <x-title class="text-xl font-medium group-hover:text-slate-900">{{ $subservice->name }}</x-title>
                                        </span>
                                    </div>
                                    <div class="list_style text-slate-900 dark:text-slate-400 dark:group-hover:group-hover:text-slate-900 group-hover:text-slate-900">
                                        <x-paragraph>{!! $subservice->description !!}</x-paragraph>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2 text-slate-800 dark:text-slate-100 group-hover:text-slate-900 dark:group-hover:text-slate-900">
                                    
                                    <x-title class="!text-3xl">
                                        <span>₱</span>{{ number_format($subservice->price) }}
                                    </x-title>
                                </div>
                            </div>
                        @empty
                        @endforelse
                    </div>
                </div>
            @endif
        </div>

        <div class="wrapper w-full flex flex-col justify-center mb-20">
            <div class="tab flex w-full max-w-[260px] mx-auto border-4 rounded-full border-slate-800">
                <button class="active tabButton flex-1 text-center block rounded-full w-full py-4 text-lg" data-id="basic">Basic</button>
                <button class="tabButton flex-1 text-center block rounded-full w-full py-4 text-lg" data-id="premium">Premium</button>
            </div>
            <div class="tabContents mt-20 w-full">
                <div id="basic" class="active tabContent">
                    <div class="packageWrap">
                        <h3 class="w-full text-center text-4xl text-slate-100 pb-10">Basic Package</h3>
                        <div>
                            <div class="flex md:flex-row flex-col">
                                @include('event-plans.global')
                                @include('event-plans.planetary')
                            </div>
                        </div>
                    </div>
                </div>
                <div id="premium" class="tabContent">
                    <div class="packageWrap">
                        <h3 class="w-full text-center text-4xl text-slate-100 pb-10">Premium Package</h3>
                        <div>
                            <div class="flex md:flex-row flex-col">
                                @include('event-plans.stellar')
                                @include('event-plans.universal')
                                @include('event-plans.galactic')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </div>




<!-- Main modal -->
<div id="{{ $service->slug }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-[820px] max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-2xl shadow overflow-hidden">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-5 md:p-5 border-b rounded-t bg-yellow-300">
                <h3 class="text-xl font-semibold text-slate-900">
                    Fill out the form below
                </h3>
                <button type="button" class="text-slate-400 bg-transparent hover:bg-slate-200 hover:text-slate-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="{{ $service->slug }}">
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
                        <input type="text" id="name" name="name" required class="text-slate-900 w-full px-3 py-2 rounded-lg border-2 border-slate-200 focus:border-yellow-300 focus:ring-0">
                    </div>
                    <div class="flex flex-wrap gap-4">
                        <div class="flex-none sm:flex-1 w-full">
                            <label for="email" class="text-slate-900 mb-1 block">Email</label>
                            <input type="email" id="email" name="email" class="text-slate-900 w-full px-3 py-2 rounded-lg border-2 border-slate-200 focus:border-yellow-300 focus:ring-0">
                        </div>
                        <div class="flex-none sm:flex-1 w-full">
                            <label for="contact" class="text-slate-900 mb-1 block">Contact #</label>
                            <input type="text" id="contact" name="contact" class="text-slate-900 w-full px-3 py-2 rounded-lg border-2 border-slate-200 focus:border-yellow-300 focus:ring-0">
                        </div>
                    </div>
                    <div>
                        <label for="subject" class="text-slate-900 mb-1 block">Subject</label>
                        <input type="text" id="subject" readonly name="subject" value="Custom mission" class="text-slate-900 w-full px-3 py-2 rounded-lg border-2 border-slate-200 bg-slate-100 ring-0 focus:ring-0 focus:border-slate-200">
                    </div>
                    <div>
                        <label for="mission" class="text-slate-900 mb-1 block">Missions</label>
                        <div class="flex flex-col gap-3">
                            <div id="accordion-open" data-accordion="open">
                                @foreach ($servicesList as $servicememu)
                                {{-- <div class="flex items-center px-4 border rounded-lg border-slate-200 w-full">
                                    <input @if($servicememu->id == $service->id) checked @endif id="services-{{ $servicememu->id }}" type="checkbox" value="{{ $servicememu->name }}" name="services[]" class="w-5 h-5 text-yellow-300 bg-slate-100 border-slate-300 rounded focus:ring-yellow-300 focus:ring-2">
                                    <label for="services" class="w-full py-4 ms-2 text-sm font-medium text-slate-900">
                                        {{ $servicememu->name }}</label>
                                </div> --}}

                                
                                    <h2 id="accordion-open-heading-{{$servicememu->id}}">
                                        <button type="button" class="bg-slate-50 flex justify-between items-center w-full p-5 font-medium text-slate-800 border border-b-0 border-slate-200 gap-3 dark:bg-slate-50 dark:focus:text-slate-800 dark:focus:bg-slate-50" data-accordion-target="#accordion-open-body-{{$servicememu->id}}" aria-expanded="@if($service->slug == $servicememu->slug) true @else false @endif" aria-controls="accordion-open-body-{{$servicememu->id}}">
                                            <div class="flex justify-start space-x-2">
                                                <input @if($servicememu->id == $service->id) checked @endif id="services-{{ $servicememu->id }}" type="checkbox" value="{{ $servicememu->name }}" name="services[]" class="w-5 h-5 text-yellow-300 bg-slate-100 border-slate-300 rounded focus:ring-yellow-300 focus:ring-2">
                                                <span class="text-slate-800">{{$servicememu->name}}</span>
                                            </div>
                                            <div class="flex justify-end">
                                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                                </svg>
                                            </div>
                                        </button>
                                    </h2>
                                    <div id="accordion-open-body-{{$servicememu->id}}" class="@if($service->slug != $servicememu->slug) hidden @endif" aria-labelledby="accordion-open-heading-{{$servicememu->id}}">
                                        <div class="p-5 border border-b-0 border-slate-200">
                                            <div class="flex flex-col ps-5 space-y-2">
                                                @foreach ($servicememu->subservices as $subservice)
                                                    <div class="flex flex-row items-center justify-between">
                                                        <div class="flex flex-row items-center space-x-2">
                                                            <input @if($servicememu->id == $service->id) checked @endif id="services-{{ $servicememu->id }}" type="checkbox" value="{{ $subservice->name }}" name="sub_services[]" data-price='{{$subservice->price}}' class="checks w-5 h-5 text-yellow-300 bg-slate-100 border-slate-300 rounded focus:ring-yellow-300 focus:ring-2">
                                                            <span class="text-slate-900">{{$subservice->name}}</span>
                                                        </div>
                                                        <div>
                                                            <input readonly class="text-right text-slate-900 cursor-default border-0 ring-0 focus-visible:ring-0 focus-visible:border-0 focus-visible:outline-none" value="{{$subservice->price}}.00">
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap gap-4">
                        <div class="flex-none sm:flex-1 w-full">
                            <label for="dateTime" class="text-slate-900 mb-1 block">Preferred date and time for a call</label>
                            <div class="flex flex-row gap-4">
                                <input type="date" id="date" name="date" class="flex-1 text-slate-900 w-full px-3 py-2 rounded-lg border-2 border-slate-200 focus:border-yellow-300 focus:ring-0">
                                <input type="time" id="time" name="time" class="flex-1 text-slate-900 w-full px-3 py-2 rounded-lg border-2 border-slate-200 focus:border-yellow-300 focus:ring-0">
                            </div>
                        </div>
                        <div class="flex-none sm:flex-1 w-full">
                            
                        </div> 
                    </div>
                    <div>
                        <label for="message" class="text-slate-900 mb-1 block">Message</label>
                        <textarea id="message" name="message" class="text-slate-900 h-40 w-full px-3 py-2 rounded-lg border-2 border-slate-200 focus:border-yellow-300 focus:ring-0"></textarea>
                    </div>
                    <div class="flex flex-row items-center justify-between">
                        <div>
                            <h4><span class="text-slate-800 text-2xl">Php </span><span id="tots" class="text-slate-800 text-2xl">0.00</span></h4>
                        </div>
                        <div>
                            <x-button>Submit</x-button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    function calc() {
    var tots = 0;
    $(".checks:checked").each(function() {
        var price = $(this).attr("data-price");
        tots += parseFloat(price);
    });
    $('#tots').text(tots.toFixed(2));
    }

    $(function() {
        $(document).on("change", ".checks", calc);
        calc();
    });
</script>

@endsection
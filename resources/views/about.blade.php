@extends('layouts.app')
@section('title', 'Apollo Creatives PH | Works')

@section('pageTitle')
    <x-page-title class="text-5xl">Your Dream is Our Dream Too</x-page-title>
@endsection

@section('contents')
    <div>
        <div class="flex flex-col">
            @include('sections.story')

            <div class="flex flex-row">
                <div>
                   
                    <div class="flex space-x-10 mb-20">
                        <div class="flex-1">
                            <x-title class="text-2xl underline decoration-yellow-300 underline-offset-[10px] decoration-[6px] mb-5">Mission</x-title>
                            <x-paragraph>
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam
                            </x-paragraph>
                        </div>
                        <div class="flex-1">
                            <x-title class="text-2xl underline decoration-yellow-300 underline-offset-[10px] decoration-[6px] mb-5">Vission</x-title>
                            <x-paragraph>
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam
                            </x-paragraph>
                        </div>
                    </div>
                </div>
                <div>
                    <img src="{{ asset('') }}" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
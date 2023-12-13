@extends('layouts.app')
@section('title', 'Apollo Creatives PH | Works')

@section('pageTitle')
    <x-page-title>Your Dream is Our Dream Too</x-page-title>
@endsection

@section('contents')
    <div>
        <div class="flex flex-col">
            @include('sections.story')

            <div class="flex flex-row mb-56">
                <div class="flex space-x-10">
                    <div class="flex-1">
                        <x-title class="text-4xl underline decoration-yellow-300 underline-offset-[10px] decoration-[6px] mb-5">Mission</x-title>
                        <x-paragraph>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam
                        </x-paragraph>
                    </div>
                    <div class="flex-1">
                        <x-title class="text-4xl underline decoration-yellow-300 underline-offset-[10px] decoration-[6px] mb-5">Vission</x-title>
                        <x-paragraph>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam
                        </x-paragraph>
                    </div>
                </div>

                <div>
                    <img src="{{ asset('') }}" alt="">
                </div>
            </div>


            <div class="w-full pb-56">
                <div class="text-center mb-10">
                    <x-title class="text-4xl underline decoration-yellow-300 underline-offset-[16px] decoration-8">Meet the Team</x-title>
                </div>

                <div class="grid grid-cols-3 gap-5">
                    @foreach ($members as $member)
                        <div class=" pt-16 hover:-translate-y-2 duration-200 ease-in-out">
                            <div class="group relative w-full border border-slate-200/[.10] hover:shadow-2xl bg-slate-100 dark:bg-slate-200/[.03] rounded-2xl hover:bg-yellow-300 duration-200 ease-in-out px-6 pb-6">
                                <div class="w-full -mt-16 flex justify-center pb-6">
                                    <img src="{{ asset('storage/' . $member->image) }}" class="w-32 h-32 duration-200 ease-in-out rounded-full p-3 border border-slate-200 dark:border-slate-200/[.10] bg-slate-50 dark:bg-slate-900">
                                </div>
                                <x-title class="text-lg group-hover:text-slate-900">{{ $member->name }}</x-title>
                                <x-paragraph class="pb-4 group-hover:text-slate-900">{{ $member->position }}</x-paragraph>

                                <div class="absolute top-0 right-0 opacity-5 pr-3">
                                    <svg class="w-32 h-32 text-slate-500 mb-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                                        <path d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z"/>
                                    </svg>
                                </div>
                                <x-paragraph class="italic group-hover:text-slate-900">{{ $member->description }}</x-paragraph>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>





        </div>
    </div>
@endsection

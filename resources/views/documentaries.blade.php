@extends('layouts.app')
@section('title', 'Apollo Creatives PH | Works')

@section('pageTitle')
    <x-page-title class="text-5xl">Documentaries</x-page-title>
@endsection

@section('contents')
    <div>
        <div class="mb-10">
            <x-paragraph>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis magnam quidem porro vitae nemo itaque tenetur deserunt fugiat laboriosam? A veniam reiciendis quia quos asperiores molestias facilis neque maiores modi!</x-paragraph>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
            <div class="border border-amber-400">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/CHSW-V-Ts44?si=uoL6G1GbkxPD2bg8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div  class="border border-amber-400">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/_2bR939D0jE?si=sAay885gEiZ15dQ7" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            

        </div>
    </div>
@endsection

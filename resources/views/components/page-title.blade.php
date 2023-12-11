<div class="flex items-center justify-center py-10 border-b border-slate-200/[.08]" style="background: rgb(25,34,55);
background: radial-gradient(circle, rgb(28, 37, 59) 0%, rgba(7,17,35,1) 46%, rgba(7,17,35,1) 100%);">
    <h1 {!! $attributes->merge(['class' => 'font-bold text-slate-200 text-4xl']) !!}>{{ $slot }}</h1>
</div>
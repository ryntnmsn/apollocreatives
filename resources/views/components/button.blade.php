<button {!! $attributes->merge(['class' => 'group group-hover:bg-amber-300 group-hover:space-x-3 hover:space-x-3 hover:bg-amber-200 flex space-x-2 bg-amber-400 rounded-full text-slate-900 px-5 py-2 font-bold duration-200 ease-in-out']) !!}>
    <span>
        {{ $slot }}
    </span>
    <span>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
        </svg>
    </span>
</button>
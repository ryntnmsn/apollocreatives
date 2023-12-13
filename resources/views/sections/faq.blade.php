@if($faqs->count() != null)
<div class="w-full pb-20">
    <div class="text-center mb-10">
        <x-title class="text-4xl underline decoration-yellow-300 underline-offset-[16px] decoration-8">FAQ's</x-title>
    </div>
    <div class="">
        <div id="accordion-color" data-accordion="collapse" data-active-classes="bg-yellow-300 dark:bg-yellow-300 text-slate-900 dark:text-slate-900" class="rounded-2xl border border-slate-200/[.10] overflow-hidden">
            @foreach ($faqs as $faq)
                <h2 id="accordion-color-heading-{{ $faq->id }}" class="group">
                    <button type="button" class=" text-slate-800 dark:text-slate-200 group-hover:text-slate-900 border-b border-slate-200/[.10] flex items-center justify-between w-full p-6 rtl:text-right gap-3 dark:hover:bg-yellow-300 hover:bg-yellow-300 bg-slate-100 dark:bg-slate-200/[.03] duration-200 ease-in-out" data-accordion-target="#accordion-color-body-{{ $faq->id }}" aria-expanded="true" aria-controls="accordion-color-body-{{ $faq->id }}">
                        <span class="flex items-center">
                            <svg class="w-5 h-5 me-2 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>
                            <p class="font-medium dark:hover:text-slate-900">{{ $faq->name }}</p>
                        </span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                        </svg>
                    </button>
                </h2>
                <div id="accordion-color-body-{{ $faq->id }}" class="hidden bg-slate-200 dark:bg-slate-200/[.08]" aria-labelledby="accordion-color-heading-{{ $faq->id }}">
                    <div class="px-6 py-10">
                        <x-paragraph>{{ $faq->description }}</x-paragraph>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@else

@endif


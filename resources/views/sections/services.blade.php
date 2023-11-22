<div class="w-full pb-56">
    <div class="text-center mb-10">
        <x-title class="text-4xl">Pick a mission</x-title>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($services as $service)
            <div class="p-6 border border-slate-200/[.10] hover:-translate-y-2 hover:shadow-2xl bg-slate-200/[.03] rounded-2xl hover:bg-slate-200/[.08] duration-300 ease-in-out cursor-pointer">
                <div class="flex space-x-4 mb-4 w-full">
                    <div class="flex-none">
                        <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->name }}" class="w-12 h-12 rounded-lg" loading="lazy">
                    </div>
                    <div class="flex-auto">
                        <x-title class="mb-0 text-lg">{{ $service->name }}</x-title>
                        <x-paragraph>Service</x-paragraph>
                    </div>
                </div>
                <x-paragraph>{{ $service->short_description }}</x-paragraph>
            </div>      
        @endforeach
    </div>
</div>
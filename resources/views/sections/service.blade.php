<div class="w-full">
    <div class="grid grid-cols-3 gap-4">
        @foreach ($services as $service)
            <div>
                <x-title>{{ $service->name }}</x-title>
            </div>      
        @endforeach
    </div>
</div>
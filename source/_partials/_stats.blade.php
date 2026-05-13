<section class="py-12" style="background-color: var(--color-neutral)">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach ($page->stats as $stat)
                <div class="text-center">
                    <div class="text-4xl font-bold mb-1" style="color: var(--color-primary)">
                        {{ $stat['value'] }}
                    </div>
                    <div class="text-sm font-medium text-gray-500 uppercase tracking-wide">
                        {{ $stat['label'] }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

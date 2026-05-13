<footer class="py-12" style="background-color: #002d3d">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="flex flex-col md:flex-row items-center justify-between gap-6">

            <div>
                <img src="/assets/images/quality.svg" alt="Calidad Inspections"
                     class="h-12 w-auto brightness-0 invert opacity-90">
                <p class="text-white/50 text-sm mt-2">Professional. Thorough. Trusted.</p>
            </div>

            <nav class="flex flex-wrap justify-center gap-6">
                @foreach ($page->nav as $item)
                    <a href="{{ $item['href'] }}"
                       class="text-sm text-white/70 hover:text-white transition-colors duration-200">
                        {{ $item['label'] }}
                    </a>
                @endforeach
            </nav>

        </div>

        <div class="mt-8 pt-8 border-t border-white/10 text-center">
            <p class="text-white/40 text-sm">
                &copy; {{ date('Y') }} Calidad Inspections. All rights reserved.
            </p>
        </div>
    </div>
</footer>

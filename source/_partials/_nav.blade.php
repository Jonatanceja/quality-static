<div
    x-data="{ scrolled: false, mobileOpen: false }"
    @scroll.window="scrolled = window.scrollY > 60"
    class="fixed top-0 left-0 right-0 z-50"
>

    {{-- ── Full nav (visible before scroll) ───────────────── --}}
    <header
        x-show="!scrolled"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 -translate-y-full"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-full"
        class="bg-white/95 backdrop-blur-sm shadow-sm"
    >
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <nav class="h-24 flex items-center justify-between">

                <a href="/" class="flex items-center">
                    <img src="/assets/images/quality.svg" alt="Calidad Inspections" class="h-20 w-auto">
                </a>

                <ul class="hidden md:flex items-center gap-8">
                    @foreach ($page->nav as $item)
                        @if (!empty($item['children']))
                            <li x-data="{ open: false }" class="relative">
                                <button
                                    @click="open = !open"
                                    @click.outside="open = false"
                                    class="flex items-center gap-1 text-sm font-medium text-gray-600 hover:text-[var(--color-primary)] transition-colors duration-200"
                                >
                                    {{ $item['label'] }}
                                    <svg class="w-3.5 h-3.5 transition-transform duration-200" :class="open ? 'rotate-180' : ''"
                                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/>
                                    </svg>
                                </button>
                                <div
                                    x-show="open"
                                    x-transition:enter="transition ease-out duration-150"
                                    x-transition:enter-start="opacity-0 -translate-y-1"
                                    x-transition:enter-end="opacity-100 translate-y-0"
                                    x-transition:leave="transition ease-in duration-100"
                                    x-transition:leave-start="opacity-100 translate-y-0"
                                    x-transition:leave-end="opacity-0 -translate-y-1"
                                    class="absolute top-full left-1/2 -translate-x-1/2 mt-3 w-52 bg-white rounded-xl shadow-lg border border-gray-100 py-2 z-50"
                                    x-cloak
                                >
                                    @foreach ($item['children'] as $child)
                                        <a href="{{ $child['href'] }}"
                                           @click="open = false"
                                           class="flex items-center gap-2.5 px-4 py-2.5 text-sm text-gray-600 hover:text-[var(--color-primary)] hover:bg-gray-50 transition-colors duration-150">
                                            <span class="w-1.5 h-1.5 rounded-full flex-shrink-0"
                                                  style="background-color: var(--color-secondary)"></span>
                                            {{ $child['label'] }}
                                        </a>
                                    @endforeach
                                </div>
                            </li>
                        @else
                            <li>
                                <a href="{{ $item['href'] }}"
                                   class="text-sm font-medium text-gray-600 hover:text-[var(--color-primary)] transition-colors duration-200">
                                    {{ $item['label'] }}
                                </a>
                            </li>
                        @endif
                    @endforeach
                </ul>

                <a href="/contact"
                   class="hidden md:inline-flex items-center px-5 py-2.5 rounded-lg text-sm font-semibold text-white transition-colors duration-200"
                   style="background-color: var(--color-primary)">
                    Get an Inspection
                </a>

                <button
                    @click="mobileOpen = !mobileOpen"
                    :aria-expanded="mobileOpen"
                    class="md:hidden p-2 rounded-md text-gray-600"
                    aria-label="Toggle menu"
                >
                    <svg x-show="!mobileOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <svg x-show="mobileOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>

            </nav>
        </div>

        {{-- Mobile menu --}}
        <div
            x-show="mobileOpen"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 -translate-y-3"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-3"
            class="md:hidden border-t border-gray-100 bg-white"
            x-cloak
        >
            <ul class="flex flex-col px-6 py-4 gap-1">
                @foreach ($page->nav as $item)
                    @if (!empty($item['children']))
                        <li x-data="{ open: false }">
                            <button @click="open = !open"
                                    class="flex items-center justify-between w-full py-2.5 text-sm font-medium text-gray-600">
                                {{ $item['label'] }}
                                <svg class="w-3.5 h-3.5 transition-transform duration-200" :class="open ? 'rotate-180' : ''"
                                     fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>
                            <ul x-show="open" class="pl-4 pb-2 space-y-1" x-cloak>
                                @foreach ($item['children'] as $child)
                                    <li>
                                        <a href="{{ $child['href'] }}"
                                           @click="mobileOpen = false"
                                           class="flex items-center gap-2 py-2 text-sm text-gray-500 hover:text-[var(--color-primary)] transition-colors">
                                            <span class="w-1.5 h-1.5 rounded-full flex-shrink-0"
                                                  style="background-color: var(--color-secondary)"></span>
                                            {{ $child['label'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @else
                        <li>
                            <a href="{{ $item['href'] }}"
                               @click="mobileOpen = false"
                               class="block py-2.5 text-sm font-medium text-gray-600 hover:text-[var(--color-primary)] transition-colors duration-200">
                                {{ $item['label'] }}
                            </a>
                        </li>
                    @endif
                @endforeach
                <li class="pt-2">
                    <a href="/contact"
                       @click="mobileOpen = false"
                       class="inline-flex items-center px-5 py-2.5 rounded-lg text-sm font-semibold text-white"
                       style="background-color: var(--color-primary)">
                        Get an Inspection
                    </a>
                </li>
            </ul>
        </div>
    </header>

    {{-- ── Mini bar (appears after scroll) ─────────────────── --}}
    <header
        x-show="scrolled"
        x-transition:enter="transition ease-out duration-300 delay-200"
        x-transition:enter-start="opacity-0 -translate-y-full"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-full"
        class="bg-white/95 backdrop-blur-sm shadow-md"
        x-cloak
    >
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <nav class="h-14 flex items-center justify-between">

                <a href="/" class="flex items-center">
                    <img src="/assets/images/favicon.svg" alt="Calidad Inspections" class="h-9 w-auto">
                </a>

                <ul class="hidden md:flex items-center gap-8">
                    @foreach ($page->nav as $item)
                        @if (!empty($item['children']))
                            <li x-data="{ open: false }" class="relative">
                                <button
                                    @click="open = !open"
                                    @click.outside="open = false"
                                    class="flex items-center gap-1 text-sm font-medium text-gray-600 hover:text-[var(--color-primary)] transition-colors duration-200"
                                >
                                    {{ $item['label'] }}
                                    <svg class="w-3.5 h-3.5 transition-transform duration-200" :class="open ? 'rotate-180' : ''"
                                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/>
                                    </svg>
                                </button>
                                <div
                                    x-show="open"
                                    x-transition:enter="transition ease-out duration-150"
                                    x-transition:enter-start="opacity-0 -translate-y-1"
                                    x-transition:enter-end="opacity-100 translate-y-0"
                                    x-transition:leave="transition ease-in duration-100"
                                    x-transition:leave-start="opacity-100 translate-y-0"
                                    x-transition:leave-end="opacity-0 -translate-y-1"
                                    class="absolute top-full left-1/2 -translate-x-1/2 mt-3 w-52 bg-white rounded-xl shadow-lg border border-gray-100 py-2 z-50"
                                    x-cloak
                                >
                                    @foreach ($item['children'] as $child)
                                        <a href="{{ $child['href'] }}"
                                           @click="open = false"
                                           class="flex items-center gap-2.5 px-4 py-2.5 text-sm text-gray-600 hover:text-[var(--color-primary)] hover:bg-gray-50 transition-colors duration-150">
                                            <span class="w-1.5 h-1.5 rounded-full flex-shrink-0"
                                                  style="background-color: var(--color-secondary)"></span>
                                            {{ $child['label'] }}
                                        </a>
                                    @endforeach
                                </div>
                            </li>
                        @else
                            <li>
                                <a href="{{ $item['href'] }}"
                                   class="text-sm font-medium text-gray-600 hover:text-[var(--color-primary)] transition-colors duration-200">
                                    {{ $item['label'] }}
                                </a>
                            </li>
                        @endif
                    @endforeach
                </ul>

                <a href="/contact"
                   class="hidden md:inline-flex items-center px-5 py-2.5 rounded-lg text-sm font-semibold text-white transition-colors duration-200"
                   style="background-color: var(--color-primary)">
                    Get an Inspection
                </a>

                <button
                    @click="mobileOpen = !mobileOpen"
                    :aria-expanded="mobileOpen"
                    class="md:hidden p-2 rounded-md text-gray-600"
                    aria-label="Toggle menu"
                >
                    <svg x-show="!mobileOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <svg x-show="mobileOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>

            </nav>
        </div>

        {{-- Mobile menu --}}
        <div
            x-show="mobileOpen"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 -translate-y-3"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-3"
            class="md:hidden border-t border-gray-100 bg-white"
            x-cloak
        >
            <ul class="flex flex-col px-6 py-4 gap-1">
                @foreach ($page->nav as $item)
                    @if (!empty($item['children']))
                        <li x-data="{ open: false }">
                            <button @click="open = !open"
                                    class="flex items-center justify-between w-full py-2.5 text-sm font-medium text-gray-600">
                                {{ $item['label'] }}
                                <svg class="w-3.5 h-3.5 transition-transform duration-200" :class="open ? 'rotate-180' : ''"
                                     fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>
                            <ul x-show="open" class="pl-4 pb-2 space-y-1" x-cloak>
                                @foreach ($item['children'] as $child)
                                    <li>
                                        <a href="{{ $child['href'] }}"
                                           @click="mobileOpen = false"
                                           class="flex items-center gap-2 py-2 text-sm text-gray-500 hover:text-[var(--color-primary)] transition-colors">
                                            <span class="w-1.5 h-1.5 rounded-full flex-shrink-0"
                                                  style="background-color: var(--color-secondary)"></span>
                                            {{ $child['label'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @else
                        <li>
                            <a href="{{ $item['href'] }}"
                               @click="mobileOpen = false"
                               class="block py-2.5 text-sm font-medium text-gray-600 hover:text-[var(--color-primary)] transition-colors duration-200">
                                {{ $item['label'] }}
                            </a>
                        </li>
                    @endif
                @endforeach
                <li class="pt-2">
                    <a href="/contact"
                       @click="mobileOpen = false"
                       class="inline-flex items-center px-5 py-2.5 rounded-lg text-sm font-semibold text-white"
                       style="background-color: var(--color-primary)">
                        Get an Inspection
                    </a>
                </li>
            </ul>
        </div>
    </header>

</div>

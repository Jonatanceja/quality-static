{{-- ── CTA band ─────────────────────────────────────────── --}}
<section class="py-24" style="background-color: var(--color-primary)">
    <div class="max-w-3xl mx-auto px-6 lg:px-8 text-center">
        <span class="text-xs font-bold uppercase tracking-widest text-white/60 block mb-4">Get Started</span>
        <h2 class="text-3xl sm:text-4xl font-black text-white mb-5">
            {{ $cta_title ?? 'Ready to schedule your inspection?' }}
        </h2>
        <p class="text-white/70 leading-relaxed mb-8 max-w-lg mx-auto">
            {{ $cta_text ?? 'Call or text us, or send an inspection request and we will get back to you quickly.' }}
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="/contact"
               class="inline-flex items-center justify-center gap-2 px-8 py-4 rounded-xl text-sm font-bold text-white transition-opacity hover:opacity-90"
               style="background-color: var(--color-tertiary)">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                </svg>
                Schedule Your Inspection
            </a>
            <a href="tel:{{ $page->phone_raw }}"
               class="inline-flex items-center justify-center gap-2 px-8 py-4 rounded-xl text-sm font-bold text-white border-2 border-white/30 hover:border-white/70 transition-colors duration-200">
                Call or Text {{ $page->phone }}
            </a>
        </div>
    </div>
</section>

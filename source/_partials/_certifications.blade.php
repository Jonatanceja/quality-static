<section id="certifications" class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <div class="text-center max-w-2xl mx-auto mb-16">
            <span class="text-sm font-semibold uppercase tracking-widest" style="color: var(--color-primary)">
                Credentials & Licensing
            </span>
            <h2 class="mt-3 text-3xl sm:text-4xl font-bold text-gray-900">
                Certified, Licensed & Trusted
            </h2>
            <p class="mt-4 text-lg text-gray-500 leading-relaxed">
                Our inspectors hold the industry's most respected certifications, so you can be confident
                you're working with qualified professionals who meet the highest standards.
            </p>
        </div>

        {{-- Master Inspector certificate --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center mb-16">
            <div class="rounded-2xl overflow-hidden border border-gray-100 shadow-md">
                <img
                    src="/assets/images/master-inspector.jpeg"
                    alt="Master Inspector Certificate"
                    class="w-full h-auto object-contain"
                >
            </div>
            <div>
                <span class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-widest px-4 py-2 rounded-full text-white mb-5"
                      style="background-color: var(--color-tertiary)">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                    </svg>
                    Top 2% Nationwide
                </span>
                <h3 class="text-3xl sm:text-4xl font-black text-gray-900 mb-5">
                    Certified Master Inspector
                </h3>
                <p class="text-gray-500 leading-relaxed mb-5">
                    The Certified Master Inspector® designation is the highest credential awarded by InterNACHI, the world's leading home inspection association. It is earned only by inspectors who demonstrate exceptional experience, education, and commitment to excellence.
                </p>
                <p class="text-gray-500 leading-relaxed mb-8">
                    Fewer than 2% of all home inspectors in the country hold this designation, placing Calidad Inspections among the most qualified professionals in the industry.
                </p>
                <ul class="space-y-3">
                    @foreach([
                        'Completed 1,000+ fee paid inspections',
                        '3+ years of full time inspection experience',
                        'Passed rigorous written examination',
                        'Committed to ongoing continuing education',
                    ] as $point)
                        <li class="flex items-center gap-3 text-sm text-gray-700">
                            <div class="flex-shrink-0 w-5 h-5 rounded-full flex items-center justify-center"
                                 style="background-color: color-mix(in srgb, var(--color-tertiary) 15%, transparent)">
                                <svg class="w-3 h-3" style="color: var(--color-tertiary)" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            {{ $point }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        {{-- InterNACHI logo badges --}}
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-5 mb-10">
            @foreach ([
                ['file' => '1-internachi-certified-blue-gold-logo-1545240140.png',   'title' => 'InterNACHI Certified'],
                ['file' => '2-first-time-home-buyer-friendly-logo-1545245068.png',   'title' => 'First-Time Home Buyer Friendly'],
                ['file' => '3-four-point-inspector-logo-1545340166.png',             'title' => '4-Point Inspector'],
                ['file' => '4-wind-mitigation-inspector-logo-1548196344.png',        'title' => 'Wind Mitigation Inspector'],
                ['file' => '5-hvac-inspector-logo-1550681128.png',                   'title' => 'HVAC Inspector'],
                ['file' => '6-plumbing-inspector-logo-1546025131.png',               'title' => 'Plumbing Inspector'],
                ['file' => '7-electrical-inspector-logo-1547837202.png',             'title' => 'Electrical Inspector'],
                ['file' => '8-buy-back-guarantee-logo-1545244415.png',               'title' => 'Buy-Back Guarantee'],
            ] as $cert)
                <div class="flex flex-col items-center text-center p-5 rounded-2xl border border-gray-100 hover:border-[var(--color-secondary)] hover:shadow-md transition-all duration-300">
                    <img
                        src="/assets/images/certifications/home/{{ $cert['file'] }}"
                        alt="{{ $cert['title'] }}"
                        class="h-24 w-auto object-contain mb-3"
                    >
                    <p class="text-sm font-semibold text-gray-700 leading-tight">{{ $cert['title'] }}</p>
                </div>
            @endforeach
        </div>

        <div class="text-center mb-16">
            <a href="/certifications"
               class="inline-flex items-center gap-2 px-7 py-3.5 rounded-xl text-sm font-semibold border-2 transition-colors duration-200"
               style="border-color: var(--color-primary); color: var(--color-primary);">
                View All Certifications & Licenses
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>

        {{-- CTA banner --}}
        <div class="rounded-2xl p-10 text-center"
             style="background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-secondary) 100%)">
            <h3 class="text-2xl font-bold text-white mb-3">
                Ready to Book Your Inspection?
            </h3>
            <p class="text-white/75 mb-8 max-w-xl mx-auto">
                Join thousands of satisfied clients who trusted Calidad Inspections to protect their investment.
                Same-week appointments available.
            </p>
            <a href="#contact"
               class="inline-flex items-center gap-2 px-8 py-4 rounded-xl bg-white font-bold text-sm transition-opacity duration-200 hover:opacity-90"
               style="color: var(--color-primary)">
                Schedule Your Inspection
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>

    </div>
</section>

<section id="hero" class="relative min-h-screen flex items-center overflow-hidden pt-20">

    {{-- Background photo --}}
    <div class="absolute inset-0">
        <img src="/assets/images/flor.jpg" alt="" class="w-full h-full object-cover object-center" aria-hidden="true">
    </div>

    {{-- Gradient colour overlay --}}
    <div class="absolute inset-0"
         style="background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-secondary) 100%); opacity: 0.62;"></div>

    {{-- Grid overlay --}}
    <div class="absolute inset-0 opacity-10">
        <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="grid" width="40" height="40" patternUnits="userSpaceOnUse">
                    <path d="M 40 0 L 0 0 0 40" fill="none" stroke="white" stroke-width="1"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#grid)"/>
        </svg>
    </div>

    <div class="relative max-w-7xl mx-auto px-6 lg:px-8 py-24 lg:py-32">
        <div class="max-w-3xl">
            <span class="inline-block px-4 py-1.5 rounded-full text-sm font-semibold bg-white/20 text-white mb-6">
                Trusted Home Inspection Services
            </span>

            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white leading-tight mb-6">
                Certified Home Inspections<br>
                <span class="text-white">in South Florida</span>
            </h1>

            <p class="text-lg sm:text-xl text-white mb-10 max-w-xl leading-relaxed">
                Professional, thorough, and unbiased property inspections that protect your biggest investment.
                Reports delivered within 24 hours.
            </p>

            <div class="flex flex-col sm:flex-row gap-4">
                <a href="#contact"
                   class="inline-flex items-center justify-center px-8 py-4 rounded-xl text-base font-bold bg-white transition-colors duration-200"
                   style="color: var(--color-primary)">
                    Book Online
                </a>
                <a href="#services"
                   class="inline-flex items-center justify-center px-8 py-4 rounded-xl text-base font-semibold text-white border-2 border-white/40 hover:border-white/80 transition-colors duration-200">
                    Get in touch
                </a>
            </div>
        </div>
    </div>

    <div class="absolute bottom-0 left-0 right-0">
        <svg viewBox="0 0 1440 80" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
            <path d="M0 80L1440 80L1440 0C1440 0 1080 80 720 80C360 80 0 0 0 0L0 80Z" fill="var(--color-neutral)"/>
        </svg>
    </div>
</section>

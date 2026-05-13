<section id="contact" class="py-24" style="background-color: var(--color-neutral)">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <div class="text-center max-w-2xl mx-auto mb-12">
            <span class="text-sm font-semibold uppercase tracking-widest" style="color: var(--color-secondary)">
                Get in Touch
            </span>
            <h2 class="mt-3 text-3xl sm:text-4xl font-bold text-gray-900">
                Schedule Your Inspection Today
            </h2>
            <p class="mt-4 text-lg text-gray-500 leading-relaxed">
                Book directly through our online scheduler — pick your date, time, and service in minutes.
            </p>
        </div>

        <div class="flex flex-wrap justify-center gap-8 mb-12">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl flex items-center justify-center flex-shrink-0"
                     style="background-color: color-mix(in srgb, var(--color-primary) 12%, transparent)">
                    <svg class="w-5 h-5" style="color: var(--color-primary)" fill="none"
                         stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                </div>
                <div>
                    <p class="text-xs text-gray-400 font-medium uppercase tracking-wide">Phone</p>
                    <p class="text-gray-900 font-semibold">{{ $page->phone }}</p>
                </div>
            </div>

            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl flex items-center justify-center flex-shrink-0"
                     style="background-color: color-mix(in srgb, var(--color-primary) 12%, transparent)">
                    <svg class="w-5 h-5" style="color: var(--color-primary)" fill="none"
                         stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>
                <div>
                    <p class="text-xs text-gray-400 font-medium uppercase tracking-wide">Email</p>
                    <p class="text-gray-900 font-semibold">{{ $page->email }}</p>
                </div>
            </div>

            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl flex items-center justify-center flex-shrink-0"
                     style="background-color: color-mix(in srgb, var(--color-primary) 12%, transparent)">
                    <svg class="w-5 h-5" style="color: var(--color-primary)" fill="none"
                         stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <div>
                    <p class="text-xs text-gray-400 font-medium uppercase tracking-wide">Hours</p>
                    <p class="text-gray-900 font-semibold">Mon – Sun: 7 AM – 7 PM</p>
                </div>
            </div>
        </div>

        <iframe
            id="spectora-iframe"
            src="https://app.spectora.com/home-inspectors/my-inspection-company-4686c315ed/schedule?iframe=1"
            style="display: block; width: 100%; height: 700px; transition: height 0.35s ease; background-color: transparent; border: 1px solid gray;"
            title="Schedule an Inspection"
            loading="lazy"
        ></iframe>

    </div>
</section>

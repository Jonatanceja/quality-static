<section id="testimonials" class="py-24 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <div class="text-center max-w-2xl mx-auto mb-16">
            <span class="text-sm font-semibold uppercase tracking-widest" style="color: var(--color-secondary)">
                Client Reviews
            </span>
            <h2 class="mt-3 text-3xl sm:text-4xl font-bold text-gray-900">
                What Our Clients Say
            </h2>
            <p class="mt-4 text-lg text-gray-500">
                Hundreds of homebuyers, sellers, and agents trust Calidad for their most important decisions.
            </p>
        </div>

        <div class="swiper testimonials-swiper">
            <div class="swiper-wrapper pb-12">
                @foreach ($page->testimonials as $testimonial)
                    <div class="swiper-slide">
                        <div class="h-full p-8 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition-shadow duration-300 bg-white">

                            <div class="flex items-center gap-1 mb-5">
                                @for ($i = 0; $i < $testimonial['rating']; $i++)
                                    <svg class="w-5 h-5" style="color: var(--color-tertiary)" fill="currentColor"
                                         viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                @endfor
                            </div>

                            <blockquote class="text-gray-600 leading-relaxed mb-6 text-[15px]">
                                "{{ $testimonial['quote'] }}"
                            </blockquote>

                            <div class="flex items-center gap-4">
                                <div class="w-11 h-11 rounded-full flex items-center justify-center text-white text-sm font-bold flex-shrink-0"
                                     style="background: linear-gradient(135deg, var(--color-primary), var(--color-secondary))">
                                    {{ $testimonial['avatar'] }}
                                </div>
                                <div>
                                    <div class="font-semibold text-gray-900">{{ $testimonial['name'] }}</div>
                                    <div class="text-sm text-gray-400">{{ $testimonial['role'] }}</div>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>

            <div class="swiper-pagination"></div>

            <div class="swiper-button-prev !text-[var(--color-primary)]"></div>
            <div class="swiper-button-next !text-[var(--color-primary)]"></div>
        </div>

    </div>
</section>

---
title: "Reviews | Calidad Inspections South Florida"
description: "See why South Florida clients trust Calidad Inspections for professional, detailed home inspections and clear communication."
---
@extends('_layouts.main')

@section('body')

{{-- ── Header ───────────────────────────────────────────── --}}
<section class="pt-36 pb-16 bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <span class="text-xs font-bold uppercase tracking-widest block mb-3" style="color: var(--color-primary)">Client Confidence</span>
        <h1 class="text-4xl sm:text-5xl font-black text-gray-900 mb-4">What our clients say</h1>
        <p class="text-lg text-gray-500 leading-relaxed max-w-xl">
            What clients value most: professionalism, detail and clear communication on every inspection.
        </p>
    </div>
</section>

{{-- ── Google score band ────────────────────────────────── --}}
<section class="py-16" style="background-color: var(--color-neutral)">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-8 sm:p-10 flex flex-col sm:flex-row items-center gap-8 text-center sm:text-left">
            <div class="flex-shrink-0">
                <div class="flex items-center gap-1 justify-center sm:justify-start mb-2">
                    @for ($i = 0; $i < 5; $i++)
                        <svg class="w-7 h-7" style="color: var(--color-tertiary)" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    @endfor
                </div>
                <p class="font-black text-gray-900 text-lg">Google Reviews</p>
            </div>
            <div class="flex-1">
                <p class="text-gray-500 leading-relaxed mb-5">
                    Read verified feedback from South Florida homeowners, buyers and real estate professionals, or share your own experience with Calidad Inspections.
                </p>
                <div class="flex flex-col sm:flex-row gap-3 justify-center sm:justify-start">
                    <a href="https://www.google.com/maps/search/?api=1&query=Calidad%20Inspections" target="_blank" rel="noopener"
                       class="inline-flex items-center justify-center px-6 py-3 rounded-xl text-sm font-bold text-white transition-opacity hover:opacity-90"
                       style="background-color: var(--color-primary)">Read Google Reviews</a>
                    <a href="https://www.google.com/maps/search/?api=1&query=Calidad%20Inspections" target="_blank" rel="noopener"
                       class="inline-flex items-center justify-center px-6 py-3 rounded-xl text-sm font-bold transition-colors border-2"
                       style="border-color: var(--color-primary); color: var(--color-primary)">Leave a Review</a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ── Testimonials grid ────────────────────────────────── --}}
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($page->testimonials as $testimonial)
                <div class="h-full p-8 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition-shadow duration-300 bg-white flex flex-col">
                    <div class="flex items-center gap-1 mb-5">
                        @for ($i = 0; $i < $testimonial['rating']; $i++)
                            <svg class="w-5 h-5" style="color: var(--color-tertiary)" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        @endfor
                    </div>
                    <blockquote class="text-gray-600 leading-relaxed mb-6 text-[15px] flex-1">"{{ $testimonial['quote'] }}"</blockquote>
                    <div class="flex items-center gap-4">
                        <div class="w-11 h-11 rounded-full flex items-center justify-center text-white text-sm font-bold flex-shrink-0"
                             style="background: linear-gradient(135deg, var(--color-primary), var(--color-secondary))">
                            {{ $testimonial['avatar'] }}
                        </div>
                        <div>
                            <div class="font-semibold text-gray-900">{{ $testimonial['name'] }}</div>
                            <div class="text-sm text-gray-500">{{ $testimonial['role'] }}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@include('_partials._cta')

@endsection

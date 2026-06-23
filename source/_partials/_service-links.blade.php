{{-- Renders the inspection-service link grid.
     Pass $exclude (a href) to omit the current page, and optional $heading/$kicker. --}}
@php
    $serviceLinks = [
        ['href' => '/full-home-inspection',   'label' => 'Full Home Inspection'],
        ['href' => '/four-point-inspection',  'label' => '4-Point Inspection'],
        ['href' => '/wind-mitigation',        'label' => 'Wind Mitigation'],
        ['href' => '/roof-certification',     'label' => 'Roof Certification'],
        ['href' => '/condo-inspection',       'label' => 'Condo Inspection'],
        ['href' => '/pre-listing-inspection', 'label' => 'Pre-Listing Inspection'],
    ];
    $exclude = $exclude ?? null;
@endphp
<div class="mb-10">
    <span class="text-xs font-bold uppercase tracking-widest block mb-3" style="color: var(--color-primary)">
        {{ $kicker ?? 'Other Services' }}
    </span>
    <h2 class="text-2xl sm:text-3xl font-black text-gray-900">{{ $heading ?? 'Explore more inspections' }}</h2>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
    @foreach ($serviceLinks as $link)
        @continue($link['href'] === $exclude)
        <a href="{{ $link['href'] }}"
           class="group flex items-center justify-between gap-3 p-6 rounded-2xl border border-gray-100 bg-white hover:shadow-md transition-shadow duration-300">
            <span class="font-bold text-gray-900 group-hover:text-[var(--color-primary)] transition-colors">{{ $link['label'] }}</span>
            <svg class="w-5 h-5 text-gray-300 group-hover:text-[var(--color-primary)] transition-colors flex-shrink-0"
                 fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
        </a>
    @endforeach
</div>

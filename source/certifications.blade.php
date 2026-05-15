@extends('_layouts.main')

@section('body')
<div class="pt-32 pb-24 bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        {{-- Page header --}}
        <div class="text-center max-w-2xl mx-auto mb-20">
            <span class="text-sm font-semibold uppercase tracking-widest" style="color: var(--color-primary)">
                Our Credentials
            </span>
            <h1 class="mt-3 text-4xl sm:text-5xl font-black text-gray-900">
                Certifications & Licenses
            </h1>
            <p class="mt-5 text-lg text-gray-500 leading-relaxed">
                Every certification listed here represents hours of training, rigorous testing, and a commitment
                to delivering the highest standard of inspection service in South Florida.
            </p>
        </div>

        {{-- InterNACHI certifications grid --}}
        <div class="mb-20">
            <h2 class="text-2xl font-bold text-gray-900 mb-8 pb-4 border-b border-gray-100">
                InterNACHI Certifications
            </h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-5">
                @foreach ([
                    ['file' => 'internachi-certified-blue-gold-logo-1545240140.png',                        'title' => 'InterNACHI Certified'],
                    ['file' => 'internachi-certified-professional-inspector-cpi-logo-1545171029.png',        'title' => 'Certified Professional Inspector (CPI)'],
                    ['file' => 'five-year-internachi-member-logo-1545157551.png',                            'title' => '5-Year InterNACHI Member'],
                    ['file' => 'honor-guarantee-logo-1588861314.png',                                       'title' => 'Honor Guarantee'],
                    ['file' => 'buy-back-guarantee-logo-1545244415.png',                                    'title' => 'Buy-Back Guarantee'],
                    ['file' => 'four-point-inspector-logo-1545340166.png',                                   'title' => '4-Point Inspector'],
                    ['file' => 'wind-mitigation-inspector-logo-1548196344.png',                              'title' => 'Wind Mitigation Inspector'],
                    ['file' => 'hvac-inspector-logo-1550681128.png',                                         'title' => 'HVAC Inspector'],
                    ['file' => 'plumbing-inspector-logo-1546025131.png',                                     'title' => 'Plumbing Inspector'],
                    ['file' => 'electrical-inspector-logo-1547837202.png',                                   'title' => 'Electrical Inspector'],
                    ['file' => 'roof-inspector-logo-1548195546.png',                                         'title' => 'Roof Inspector'],
                    ['file' => 'structure-foundation-inspector-logo-1547051923.png',                         'title' => 'Structure & Foundation Inspector'],
                    ['file' => 'moisture-intrusion-inspector-logo-1546016950.png',                           'title' => 'Moisture Intrusion Inspector'],
                    ['file' => 'mold-inspector-logo-1546019081.png',                                         'title' => 'Mold Inspector'],
                    ['file' => 'indoor-air-quality-inspector-logo-1585834007.png',                           'title' => 'Indoor Air Quality Inspector'],
                    ['file' => 'infrared-certified-internachi-thermography-inspector-logo-1672946651.png',   'title' => 'Infrared Certified Thermography Inspector'],
                    ['file' => 'new-construction-inspector-logo-1599240338.png',                             'title' => 'New Construction Inspector'],
                    ['file' => 'pre-drywall-inspector-logo-1662490097.png',                                  'title' => 'Pre-Drywall Inspector'],
                    ['file' => 'post-hurricane-building-safety-inspector-logo-1729785962.png',               'title' => 'Post-Hurricane Building Safety Inspector'],
                    ['file' => 'first-time-home-buyer-friendly-logo-1545245068.png',                         'title' => 'First-Time Home Buyer Friendly'],
                    ['file' => 'residential-property-inspector-logo-1546033350.png',                         'title' => 'Residential Property Inspector'],
                    ['file' => 'multi-unit-housing-inspector-logo-1546024433.png',                           'title' => 'Multi-Unit Housing Inspector'],
                    ['file' => 'condo-inspector-logo-1673037691.png',                                        'title' => 'Condo Inspector'],
                    ['file' => 'mobile-home-inspector-1550697656.png',                                       'title' => 'Mobile Home Inspector'],
                    ['file' => 'exterior-inspector-logo-1548192725.png',                                     'title' => 'Exterior Inspector'],
                    ['file' => 'attic-insulation-ventilation-interior-logo-1636468073.png',                  'title' => 'Attic, Insulation & Ventilation Inspector'],
                    ['file' => 'crawlspace-inspector-logo-1547837514.png',                                   'title' => 'Crawlspace Inspector'],
                    ['file' => 'chimney-inspector-logo-1545253524.png',                                      'title' => 'Chimney Inspector'],
                    ['file' => 'garage-inspector-logo-1545342585.png',                                       'title' => 'Garage Inspector'],
                    ['file' => 'deck-inspector-logo-1550611142.png',                                         'title' => 'Deck Inspector'],
                    ['file' => 'kitchen-inspector-logo-1550695904.png',                                      'title' => 'Kitchen Inspector'],
                    ['file' => 'stucco-inspector-logo-1548195931.png',                                       'title' => 'Stucco Inspector'],
                    ['file' => 'pool-spa-inspector-logo-1550682907.png',                                     'title' => 'Pool & Spa Inspector'],
                    ['file' => 'internachi-sewer-scope-certified-inspector-logo-1546035839.png',             'title' => 'Sewer Scope Certified Inspector'],
                    ['file' => 'internachi-certified-property-maintenance-housing-code-inspector-logo-1609794010.png', 'title' => 'Property Maintenance & Housing Code Inspector'],
                    ['file' => 'home-energy-inspector-logo-1550787150.png',                                  'title' => 'Home Energy Inspector'],
                    ['file' => 'home-energy-auditor-logo-1548194892.png',                                    'title' => 'Home Energy Auditor'],
                    ['file' => 'green-building-inspector-logo-1545343132.png',                               'title' => 'Green Building Inspector'],
                    ['file' => 'healthy-homes-inspector-logo-1545427697.png',                                'title' => 'Healthy Homes Inspector'],
                    ['file' => 'water-quality-tester-logo-1551907430.png',                                   'title' => 'Water Quality Tester'],
                    ['file' => 'lawn-irrigation-system-inspector-logo-1584559889.png',                       'title' => 'Lawn & Irrigation System Inspector'],
                    ['file' => 'tree-inspector-logo-1547054194.png',                                         'title' => 'Tree Inspector'],
                    ['file' => 'drone-pilot-logo-1545341205.png',                                            'title' => 'Drone Pilot'],
                    ['file' => 'repair-verification-logo-1548192428.png',                                    'title' => 'Repair Verification'],
                    ['file' => 'annual-home-maintenance-inspections-logo-1550603005.png',                    'title' => 'Annual Home Maintenance Inspections'],
                    ['file' => '11th-month-warranty-inspector-logo-1550602859.png',                          'title' => '11th Month Warranty Inspector'],
                    ['file' => 'contractor-experience-logo-1550700583.png',                                  'title' => 'Contractor Experience'],
                    ['file' => 'fire-extinguisher-inspector-logo-1762381009.png',                            'title' => 'Fire Extinguisher Inspector'],
                    ['file' => 'bilingual-logo-1545246581.png',                                              'title' => 'Bilingual'],
                    ['file' => 'habla-espanol-logo-1545245896.png',                                          'title' => 'Habla Español'],
                    ['file' => 'spanish-internachi-certified-professional-inspector-cpi-logo-1587592481.png','title' => 'Spanish Certified Professional Inspector'],
                ] as $cert)
                    <div class="flex flex-col items-center text-center p-4 rounded-2xl border border-gray-100 hover:border-[var(--color-secondary)] hover:shadow-md transition-all duration-300">
                        <picture>
                            <source srcset="/assets/images/certifications/certifications-page/{{ str_replace('.png', '.webp', $cert['file']) }}" type="image/webp">
                            <img
                                src="/assets/images/certifications/certifications-page/{{ $cert['file'] }}"
                                alt="{{ $cert['title'] }}"
                                class="h-20 w-auto object-contain mb-3"
                            >
                        </picture>
                        <p class="text-xs font-semibold text-gray-600 leading-tight">{{ $cert['title'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- CTA --}}
        <div class="rounded-2xl p-10 text-center"
             style="background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-secondary) 100%)">
            <h3 class="text-2xl font-bold text-white mb-3">Have questions about our qualifications?</h3>
            <p class="text-white/75 mb-8 max-w-xl mx-auto">
                We're happy to walk you through our credentials and explain what each certification means for your inspection.
            </p>
            <a href="/contact"
               class="inline-flex items-center gap-2 px-8 py-4 rounded-xl bg-white font-bold text-sm transition-opacity duration-200 hover:opacity-90"
               style="color: var(--color-primary)">
                Get in Touch
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>

    </div>
</div>
@endsection

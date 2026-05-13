<?php

return [
    'production' => false,
    'baseUrl' => 'https://qualityinspections.info',
    'title' => 'Calidad Inspections',
    'description' => 'Professional home inspection services you can trust.',
    'language' => 'en',
    'collections' => [],

    'phone'     => '(954) 598-2278',
    'phone_raw' => '9545982278',
    'email'     => 'service@qualityinspections.info',

    'nav' => [
        ['label' => 'Services', 'href' => '/services', 'children' => [
            ['label' => 'All Services', 'href' => '/services'],
            ['label' => '4-Point Inspection', 'href' => '/four-point-inspection'],
            ['label' => 'Wind Mitigation', 'href' => '/wind-mitigation'],
        ]],
        ['label' => 'About', 'href' => '/about'],
        ['label' => 'Workflow', 'href' => '/workflow'],
        ['label' => 'Pricing', 'href' => '/pricing'],
        ['label' => 'Contact', 'href' => '/contact'],
    ],

    'featured_services' => [
        [
            'slug' => '4-point',
            'title' => '4-Point Inspection',
            'description' => 'Essential for older homes, our 4-point inspections assess the primary systems: electrical, plumbing, HVAC, and roof. Ensure your home is coverage ready',
            'cta' => 'Learn About 4-Point',
        ],
        [
            'slug'        => 'wind-mitigation',
            'title'       => 'Wind Mitigation Inspection',
            'description' => "Proactively protect your property and lower your insurance premiums by documenting your home\u{0027}s hurricane resistant features.",
            'cta'         => 'Learn About Wind Mitigation',
        ],
    ],

    'services' => [
        [
            'icon' => 'home',
            'title' => 'Home Inspections',
            'description' => 'Comprehensive top to bottom evaluations of residential properties before you buy or sell.',
        ],
        [
            'icon' => 'shield',
            'title' => 'Structural Assessment',
            'description' => 'In depth analysis of foundations, framing, roofing, and structural integrity.',
        ],
        [
            'icon' => 'zap',
            'title' => 'Electrical Systems',
            'description' => 'Full inspection of panels, wiring, outlets, and safety compliance.',
        ],
        [
            'icon' => 'droplets',
            'title' => 'Plumbing Inspection',
            'description' => 'Detection of leaks, water pressure issues, and plumbing code compliance.',
        ],
        [
            'icon' => 'thermometer',
            'title' => 'HVAC Evaluation',
            'description' => 'Testing heating, ventilation, and air conditioning systems for efficiency and safety.',
        ],
        [
            'icon' => 'search',
            'title' => 'Pre-Listing Inspection',
            'description' => 'Get ahead of issues before listing your property and increase buyer confidence.',
        ],
    ],

    'testimonials' => [
        [
            'name'   => 'Valentina Santanilla',
            'role'   => 'Home Buyer',
            'avatar' => 'VS',
            'rating' => 5,
            'quote'  => 'I used Calidad Inspections for a home inspection, and they were absolutely amazing! The inspector showed up on time, was friendly and very professional. He took his time, walked me through every part of the inspection, and the final report was clear, detailed, and full of pictures. I feel very confident about my decision thanks to Calidad Inspections — you won\'t regret it!',
        ],
        [
            'name'   => 'Kelly Guerra',
            'role'   => 'Real Estate Agent',
            'avatar' => 'KG',
            'rating' => 5,
            'quote'  => 'Best Home Inspectors in South Florida! Their quick turnaround time and incredibly thorough inspections have saved my clients (and me!) so much time and stress. Highly recommend them to anyone buying or selling a home in South Florida. They\'re the real deal.',
        ],
        [
            'name'   => 'Melina Granados',
            'role'   => 'Insurance Agency Partner',
            'avatar' => 'MG',
            'rating' => 5,
            'quote'  => 'We\'ve been partnering with Calidad Inspections for quite some time now. As an insurance agency, we refer our customers to them and consistently hear positive feedback. Diego is thorough, professional, fast and always takes the time to explain things clearly. Highly recommend!',
        ],
        [
            'name'   => 'Danny Kaplan',
            'role'   => 'Homeowner',
            'avatar' => 'DK',
            'rating' => 5,
            'quote'  => 'Excellent service from Calidad Inspections! We hired them for a four-point inspection and everything from scheduling to the final report was handled professionally and efficiently. Diego was friendly, detail-oriented, and made sure we understood every part of the inspection. Highly recommend!',
        ],
        [
            'name'   => 'Ari Gross',
            'role'   => 'Homeowner',
            'avatar' => 'AG',
            'rating' => 5,
            'quote'  => 'Diego was extremely professional and a pleasure to work with. He completed a thorough inspection and had the report ready the same day, which was very impressive. Communication was excellent throughout — friendly, responsive, and very accommodating. Highly recommend!',
        ],
        [
            'name'   => 'Jennifer Ebbert',
            'role'   => 'Homeowner',
            'avatar' => 'JE',
            'rating' => 5,
            'quote'  => 'Calidad Inspections is the MOST meticulous inspection service I\'ve ever used. Diego did a home insurance inspection for us — he was dependable, knowledgeable, friendly and his follow-up report was perfect. You can\'t go wrong with Diego!!',
        ],
        [
            'name'   => 'Shoni Braun',
            'role'   => 'Home Buyer',
            'avatar' => 'SB',
            'rating' => 5,
            'quote'  => 'Diego showed up one day after I scheduled — and it was on a Sunday! He was friendly and professional, and I received the report the following morning. I could not be more pleased with the whole process. Would absolutely go with this company again.',
        ],
        [
            'name'   => 'Toni Medina',
            'role'   => 'Home Buyer',
            'avatar' => 'TM',
            'rating' => 5,
            'quote'  => 'Diego was the ultimate professional. He explained every area of the house he was documenting, answered all our questions, and I had the inspection results by the end of the day. Exactly the kind of service you hope for.',
        ],
        [
            'name'   => 'Ari Tee',
            'role'   => 'Real Estate Professional',
            'avatar' => 'AT',
            'rating' => 5,
            'quote'  => 'Diego is the best home inspector I\'ve worked with. I\'ve dealt with multiple inspectors, and he truly stands out. He communicates clearly, is always on time, delivers fast and detailed reports, and is a pleasure to work with. Highly recommend.',
        ],
        [
            'name'   => 'Topaz M',
            'role'   => 'Homeowner',
            'avatar' => 'TP',
            'rating' => 5,
            'quote'  => 'Arrived the same day and was extremely knowledgeable and professional. He took the time to explain everything clearly and made the whole process smooth and stress-free. I would absolutely recommend him to anyone needing a reliable home inspection.',
        ],
    ],

    'specialty_certifications' => [
        [
            'title'       => 'Master Inspector',
            'description' => 'Awarded to inspectors who meet the highest standards of education, experience, and excellence in the field.',
            'icon'        => 'award',
        ],
        [
            'title'       => 'First-Time Home Buyer Friendly',
            'description' => 'Trained to guide first-time buyers step by step, making the inspection process clear and stress free.',
            'icon'        => 'home-heart',
        ],
        [
            'title'       => '4-Point Inspector',
            'description' => 'Certified to assess the four key systems: roof, electrical, plumbing, and HVAC, required by most insurers.',
            'icon'        => 'clipboard',
        ],
        [
            'title'       => 'Wind Mitigation Inspector',
            'description' => 'Qualified to document hurricane resistant features that can significantly reduce your insurance premium.',
            'icon'        => 'wind',
        ],
        [
            'title'       => 'HVAC Inspector',
            'description' => 'Certified to evaluate heating, ventilation, and air conditioning systems for efficiency and code compliance.',
            'icon'        => 'thermometer',
        ],
        [
            'title'       => 'Plumbing Inspector',
            'description' => 'Credentialed to inspect water supply, drain systems, and fixtures for leaks, pressure issues, and compliance.',
            'icon'        => 'droplets',
        ],
        [
            'title'       => 'Electrical Inspector',
            'description' => 'Certified to assess panels, wiring, outlets, and grounding systems for safety and code adherence.',
            'icon'        => 'zap',
        ],
    ],

    'certifications' => [
        [
            'name' => 'InterNACHI',
            'full_name' => 'International Association of Certified Home Inspectors',
            'description' => 'The world\'s leading non-profit association for home inspectors, setting the highest standards in the industry.',
        ],
        [
            'name' => 'ASHI',
            'full_name' => 'American Society of Home Inspectors',
            'description' => 'The oldest and most respected professional association for home inspectors in North America.',
        ],
        [
            'name' => 'DBPR',
            'full_name' => 'Florida Dept. of Business & Professional Regulation',
            'description' => 'State-licensed and fully compliant with all Florida home inspection regulations and requirements.',
        ],
        [
            'name' => 'IAC²',
            'full_name' => 'Indoor Air Quality Certification',
            'description' => 'Certified to inspect for mold, radon, and other indoor air quality concerns that affect health and safety.',
        ],
        [
            'name' => 'ICC',
            'full_name' => 'International Code Council',
            'description' => 'Certified in building codes and standards that govern the safety and construction of residential structures.',
        ],
    ],

    'stats' => [
        ['value' => '15,000+', 'label' => 'Inspections Completed'],
        ['value' => '12+', 'label' => 'Years of Experience'],
        ['value' => '98%', 'label' => 'Client Satisfaction'],
        ['value' => '24h', 'label' => 'Report Delivery'],
    ],
];

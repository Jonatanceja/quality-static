import Alpine from 'alpinejs';
import Swiper from 'swiper';
import { Navigation, Pagination, A11y } from 'swiper/modules';

window.Alpine = Alpine;
Alpine.start();

window.addEventListener('message', (e) => {
    const iframe = document.getElementById('spectora-iframe');
    if (!iframe) return;

    let height = null;
    const d = e.data;

    if (typeof d === 'number') {
        height = d;
    } else if (typeof d === 'object' && d !== null) {
        height = d.height ?? d.spectora_height ?? d.frameHeight ?? null;
    } else if (typeof d === 'string') {
        try {
            const parsed = JSON.parse(d);
            height = parsed.height ?? parsed.spectora_height ?? parsed.frameHeight ?? null;
        } catch {}
        // plain numeric string
        if (height === null && /^\d+$/.test(d.trim())) height = Number(d.trim());
    }

    if (height && height > 100) iframe.style.height = height + 'px';
});

document.addEventListener('DOMContentLoaded', () => {
    new Swiper('.testimonials-swiper', {
        modules: [Navigation, Pagination, A11y],
        slidesPerView: 1,
        spaceBetween: 24,
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        a11y: true,
        breakpoints: {
            640: { slidesPerView: 2 },
            1024: { slidesPerView: 3 },
        },
    });
});

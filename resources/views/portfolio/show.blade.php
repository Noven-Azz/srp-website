@extends('layouts.main')

@section('title', 'Detail Proyek - Future Landing Page')

@section('content')
    <!-- BEGIN: Project Hero Section -->
    <section id="project-hero" class="max-w-[1280px] mx-auto px-6 md:px-16 pt-16 md:pt-24 pb-12 overflow-hidden">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">

            <!-- Left Column: Title, Description & View Link -->
            <div id="hero-left-col" class="lg:col-span-7 flex flex-col justify-between opacity-0 transform">
                <!-- Main Title -->
                <h1 id="hero-project-title"
                    class="text-4xl md:text-5xl lg:text-6xl font-bold text-[#171b29] mb-8 md:mb-12 tracking-tight">
                    Future Landing Page
                </h1>

                <!-- Description -->
                <p id="hero-project-desc"
                    class="font-sans text-base md:text-lg text-gray-700 leading-relaxed max-w-2xl mb-12">
                    The objective of the Minimal Portfolio Showcase Application is to create a sleek, user-friendly platform
                    for individuals or businesses to exhibit their portfolios effectively. This application will enable
                    users to showcase their work, whether in art, design, photography, writing, or any creative field, in a
                    minimalist and elegant manner.
                </p>

                <!-- Action Link -->
                <div id="hero-project-link">
                    <a href="#"
                        class="inline-flex items-center gap-2 text-sm md:text-base font-bold text-black hover:opacity-75 transition-opacity group">
                        <span>View Detail Project</span>
                        <span
                            class="material-symbols-outlined text-sm transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5">
                            north_east
                        </span>
                    </a>
                </div>
            </div>

            <!-- Right Column: Metadata Sidebar -->
            <div id="hero-right-col" class="lg:col-span-5 flex flex-col opacity-0 transform">
                <!-- Item 1: Service -->
                <div class="metadata-item border-t border-gray-200 pt-5 pb-6">
                    <span class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-1.5">
                        SERVICE'S
                    </span>
                    <span class="text-xl md:text-2xl font-bold text-black">
                        Web Design
                    </span>
                </div>

                <!-- Item 2: Client -->
                <div class="metadata-item border-t border-gray-200 pt-5 pb-6">
                    <span class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-1.5">
                        CLIENT
                    </span>
                    <span class="text-xl md:text-2xl font-bold text-black">
                        Alice Johnson
                    </span>
                </div>

                <!-- Item 3: Year -->
                <div class="metadata-item border-t border-gray-200 pt-5 pb-6">
                    <span class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-1.5">
                        YEAR
                    </span>
                    <span class="text-xl md:text-2xl font-bold text-black">
                        2023
                    </span>
                </div>
            </div>

        </div>
    </section>
    <!-- END: Project Hero Section -->

    <!-- BEGIN: Feature Image Slider -->
    <section id="project-slider-section" class="max-w-[1280px] mx-auto mb-0 px-6 md:px-16 opacity-0 transform">
        <div id="project-slider"
            class="w-full relative group rounded-xl overflow-hidden shadow-sm border border-gray-200 bg-surface-muted"
            style="aspect-ratio: 16 / 9;">

            <!-- Slides Wrapper -->
            <div id="slider-track" class="flex w-full h-full transition-transform duration-500 ease-out">
                <!-- Slide 1 -->
                <div class="w-full h-full flex-shrink-0">
                    <img src="{{ asset('images/projek/project-1.jpg') }}" alt="Instalasi Saklar Hotel Overview 1"
                        class="w-full h-full object-cover">
                </div>
                <!-- Slide 2 -->
                <div class="w-full h-full flex-shrink-0">
                    <img src="{{ asset('images/projek/project-2.jpg') }}" alt="Instalasi Saklar Hotel Overview 2"
                        class="w-full h-full object-cover">
                </div>
                <!-- Slide 3 -->
                <div class="w-full h-full flex-shrink-0">
                    <img src="{{ asset('images/projek/project-3.jpg') }}" alt="Instalasi Saklar Hotel Overview 3"
                        class="w-full h-full object-cover">
                </div>
            </div>

            <!-- Navigation Arrow: Previous (Selalu Tampak) -->
            <button id="slider-prev"
                class="absolute left-4 top-1/2 -translate-y-1/2 w-10 h-10 rounded-full bg-gray-500 text-white flex items-center justify-center backdrop-blur-sm opacity-80 hover:opacity-100 hover:scale-110 transition-all duration-300 cursor-pointer z-10">
                <span class="material-symbols-outlined text-xl">chevron_left</span>
            </button>

            <!-- Navigation Arrow: Next (Selalu Tampak) -->
            <button id="slider-next"
                class="absolute right-4 top-1/2 -translate-y-1/2 w-10 h-10 rounded-full bg-gray-500 text-white flex items-center justify-center backdrop-blur-sm opacity-80 hover:opacity-100 hover:scale-110 transition-all duration-300 cursor-pointer z-10">
                <span class="material-symbols-outlined text-xl">chevron_right</span>
            </button>

            <!-- Dots Indicator -->
            <div id="slider-dots" class="absolute bottom-4 left-1/2 -translate-x-1/2 flex items-center gap-2 z-10">
                <button class="slider-dot w-6 h-2.5 rounded-full bg-white transition-all duration-300 cursor-pointer"
                    data-index="0"></button>
                <button class="slider-dot w-2.5 h-2.5 rounded-full bg-white/50 transition-all duration-300 cursor-pointer"
                    data-index="1"></button>
                <button class="slider-dot w-2.5 h-2.5 rounded-full bg-white/50 transition-all duration-300 cursor-pointer"
                    data-index="2"></button>
            </div>

        </div>
    </section>
    <!-- END: Feature Image Slider -->

    <!-- BEGIN: Detailed Content Section -->
    <section id="project-details-section" class="bg-surface-muted border-y border-border-subtle py-12 md:py-20">
        <div class="max-w-3xl mx-auto px-6 md:px-8">
            <div id="details-content-wrapper"
                class="space-y-8 md:space-y-12 text-on-surface-variant text-base md:text-lg leading-relaxed opacity-0 transform">

                <!-- Paragraph Overview -->
                <p class="detail-block">
                    Sistem saklar pintar berbasis jaringan ini dikembangkan untuk menjawab kebutuhan efisiensi energi pada
                    industri perhotelan. Setiap panel saklar terhubung ke pusat kontrol daya yang memungkinkan penghematan
                    listrik otomatis ketika kamar dalam keadaan kosong.
                </p>

                <!-- Key Features -->
                <div class="detail-block">
                    <h3 class="text-xl md:text-2xl font-bold text-on-surface mb-4 md:mb-6">Fitur Utama System:</h3>
                    <ol class="list-decimal list-inside sm:list-outside sm:pl-5 space-y-3 md:space-y-4">
                        <li class="pl-1"><strong class="text-on-surface font-semibold">Smart Keycard Slot:</strong>
                            Mengaktifkan sistem kelistrikan utama secara otomatis saat kartu akses dimasukkan.</li>
                        <li class="pl-1"><strong class="text-on-surface font-semibold">Touch Panel Capacitive:</strong>
                            Panel saklar sentuh modern dengan lampu indikator LED malam hari.</li>
                        <li class="pl-1"><strong class="text-on-surface font-semibold">Master Off Control:</strong>
                            Mematikan seluruh pencahayaan kamar dengan satu sentuhan di samping tempat tidur.</li>
                        <li class="pl-1"><strong class="text-on-surface font-semibold">Integrasi Room Management
                                (RMS):</strong>
                            Menghubungkan status kamar (Do Not Disturb / Make Up Room) langsung ke resepsionis.</li>
                        <li class="pl-1"><strong class="text-on-surface font-semibold">Desain Modular & Tahan
                                Lama:</strong>
                            Menggunakan material standar industri yang tahan gores dan api.</li>
                    </ol>
                </div>

                <!-- Technologies Used -->
                <div class="detail-block">
                    <h3 class="text-xl md:text-2xl font-bold text-on-surface mb-4 md:mb-6">Teknologi & Komponen:</h3>
                    <ul class="list-disc list-inside sm:list-outside sm:pl-5 space-y-2">
                        <li class="pl-1">Hardware Controller - RS485 Modbus Protocol</li>
                        <li class="pl-1">Microcontroller Unit (MCU) - Custom Industrial Grade Circuit</li>
                        <li class="pl-1">Front-End Interface - Custom Toughened Glass Touch Switch</li>
                        <li class="pl-1">Software Monitoring - Web-based Centralized Dashboard</li>
                    </ul>
                </div>

                <!-- Deliverables & Impact -->
                <div class="detail-block">
                    <h3 class="text-xl md:text-2xl font-bold text-on-surface mb-4 md:mb-6">Hasil & Dampak Proyek:</h3>
                    <ul class="list-disc list-inside sm:list-outside sm:pl-5 space-y-2">
                        <li class="pl-1">Efisiensi penggunaan energi listrik hingga 25% pada area kamar.</li>
                        <li class="pl-1">Peningkatan pengalaman kenyamanan tamu melalui kontrol pencahayaan yang intuitif.
                        </li>
                        <li class="pl-1">Kemudahan perawatan berkala bagi tim teknisi hotel berkat sistem indikator
                            terpusat.</li>
                    </ul>
                </div>

                <!-- Notes Footer -->
                <div class="detail-block pt-6 md:pt-8 border-t border-border-subtle text-xs md:text-sm text-outline">
                    <h4 class="font-bold text-on-surface mb-2">Catatan Proyek:</h4>
                    <p class="mb-2 leading-normal md:leading-relaxed">
                        Pengembangan fokus pada keandalan operasional jangka panjang dan kemudahan integrasi dengan
                        arsitektur jaringan kelistrikan eksisting hotel tanpa perlu merombak instalasi utama secara masif.
                    </p>
                </div>

            </div>
        </div>
    </section>
    <!-- END: Detailed Content Section -->

    <!-- BEGIN: Related Works Section -->
    <section class="py-24 px-6 md:px-16 bg-white overflow-hidden" id="related-works">
        <div class="max-w-[1280px] mx-auto">

            <!-- Header Section -->
            <div id="related-works-header" class="mb-16 opacity-0 transform">
                <p class="font-mono text-xs font-semibold uppercase tracking-wider text-gray-400 mb-3">
                    OTHER WORK
                </p>
                <h2 class="font-sans text-4xl md:text-5xl lg:text-6xl font-bold text-[#171b29] tracking-tight">
                    Related Works
                </h2>
            </div>

            <!-- Cards Grid -->
            <div id="related-works-grid" class="grid grid-cols-1 md:grid-cols-2 gap-12">

                <!-- Card 1: Future Landing Page -->
                <a href="{{ route('portfolio.show', ['slug' => 'future-landing-page']) }}"
                    class="related-card group cursor-pointer flex flex-col opacity-0 transform">
                    <div class="w-full overflow-hidden rounded-xl bg-surface mb-6 relative shadow-sm border border-[#e0e3e8]"
                        style="aspect-ratio: 4 / 3;">
                        <img src="{{ asset('images/projek/project-5.jpg') }}" alt="Future Landing Page"
                            class="w-full h-full object-cover transform transition-transform duration-500 ease-out group-hover:scale-105">
                    </div>
                    <div class="flex justify-between items-start">
                        <div>
                            <h3
                                class="font-sans text-2xl font-bold text-[#171b29] mb-1 group-hover:text-[#1f6fa8] transition-colors">
                                Future Landing Page
                            </h3>
                            <p class="font-sans text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                WEB DESIGN
                            </p>
                        </div>
                        <span
                            class="material-symbols-outlined text-black text-lg group-hover:text-[#1f6fa8] group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform">
                            north_east
                        </span>
                    </div>
                </a>

                <!-- Card 2: AI Automation Dashboard -->
                <a href="{{ route('portfolio.show', ['slug' => 'ai-automation-dashboard']) }}"
                    class="related-card group cursor-pointer flex flex-col opacity-0 transform">
                    <div class="w-full overflow-hidden rounded-xl bg-surface mb-6 relative shadow-sm border border-[#e0e3e8]"
                        style="aspect-ratio: 4 / 3;">
                        <img src="{{ asset('images/projek/project-6.jpg') }}" alt="AI Automation Dashboard"
                            class="w-full h-full object-cover transform transition-transform duration-500 ease-out group-hover:scale-105">
                    </div>
                    <div class="flex justify-between items-start">
                        <div>
                            <h3
                                class="font-sans text-2xl font-bold text-[#171b29] mb-1 group-hover:text-[#1f6fa8] transition-colors">
                                AI Automation Dashboard
                            </h3>
                            <p class="font-sans text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                UI UX
                            </p>
                        </div>
                        <span
                            class="material-symbols-outlined text-black text-lg group-hover:text-[#1f6fa8] group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform">
                            north_east
                        </span>
                    </div>
                </a>

            </div>
        </div>
    </section>
    <!-- END: Related Works Section -->

    <!-- BEGIN: CTA Section -->
    <section class="py-24 px-6 md:px-16 bg-bg-light overflow-hidden" id="contact">
        <div id="detail-cta-wrapper" class="max-w-[1280px] mx-auto opacity-0 transform">
            <x-cta-card badge="KONSULTASI PROYEK" title="Tertarik Menerapkan Solusi Serupa di Perusahaan Anda?"
                description="Tim teknis kami siap membantu merencanakan dan mengimplementasikan otomatisasi yang efisien sesuai skala bisnis Anda."
                buttonText="Konsultasikan Sekarang" buttonLink="#contact" email="info@ptsrp.co.id"
                imgRight="images/cta/cta-1.jpg" imgLeft="images/cta/cta-2.jpg" />
        </div>
    </section>
    <!-- END: CTA Section -->

    <!-- SCRIPT: SLIDER LOGIC & MOTION ONE ANIMATIONS -->
    <script>
        function initProjectDetailMotion() {
            // 1. Interactive Slider Logic & Auto-Slide
            const sliderContainer = document.getElementById('project-slider');
            const track = document.getElementById('slider-track');
            const prevBtn = document.getElementById('slider-prev');
            const nextBtn = document.getElementById('slider-next');
            const dots = document.querySelectorAll('.slider-dot');

            if (track && dots.length > 0) {
                const totalSlides = dots.length;
                let currentIndex = 0;
                let slideInterval = null;

                function updateSlider(index) {
                    currentIndex = index;
                    track.style.transform = `translateX(-${currentIndex * 100}%)`;

                    dots.forEach((dot, idx) => {
                        if (idx === currentIndex) {
                            dot.classList.remove('bg-white/50', 'w-2.5');
                            dot.classList.add('bg-white', 'w-6');
                        } else {
                            dot.classList.remove('bg-white', 'w-6');
                            dot.classList.add('bg-white/50', 'w-2.5');
                        }
                    });
                }

                function nextSlide() {
                    const nextIndex = (currentIndex + 1) % totalSlides;
                    updateSlider(nextIndex);
                }

                function prevSlide() {
                    const prevIndex = (currentIndex - 1 + totalSlides) % totalSlides;
                    updateSlider(prevIndex);
                }

                function startAutoSlide() {
                    if (!slideInterval) {
                        slideInterval = setInterval(nextSlide, 2000);
                    }
                }

                function stopAutoSlide() {
                    if (slideInterval) {
                        clearInterval(slideInterval);
                        slideInterval = null;
                    }
                }

                // Inisialisasi posisi & tampilan dots secara langsung saat halaman pertama dimuat
                updateSlider(0);

                // Event Listener Tombol Navigasi
                if (nextBtn) {
                    nextBtn.addEventListener('click', () => {
                        nextSlide();
                        stopAutoSlide();
                        startAutoSlide();
                    });
                }

                if (prevBtn) {
                    prevBtn.addEventListener('click', () => {
                        prevSlide();
                        stopAutoSlide();
                        startAutoSlide();
                    });
                }

                // Event Listener Dots
                dots.forEach(dot => {
                    dot.addEventListener('click', () => {
                        const index = parseInt(dot.getAttribute('data-index'));
                        updateSlider(index);
                        stopAutoSlide();
                        startAutoSlide();
                    });
                });

                // Pause Auto-Slide saat mouse hover di atas gambar
                if (sliderContainer) {
                    sliderContainer.addEventListener('mouseenter', stopAutoSlide);
                    sliderContainer.addEventListener('mouseleave', startAutoSlide);
                }

                // Jalankan Timer
                startAutoSlide();
            }

            // 2. Motion One Animations
            const motionLib = window.Motion;
            if (!motionLib) {
                setTimeout(initProjectDetailMotion, 40);
                return;
            }

            const {
                animate,
                inView,
                stagger
            } = motionLib;

            const smoothEase = [0.16, 1, 0.3, 1];
            const inViewConfig = {
                margin: "0px 0px -20% 0px",
                amount: 0.2
            };

            // Hero Left Entrance
            animate("#hero-left-col", {
                opacity: [0, 1],
                y: [45, 0]
            }, {
                duration: 1.1,
                easing: smoothEase
            });

            // Hero Right Metadata Entrance (Staggered)
            animate("#hero-right-col", {
                opacity: [0, 1],
                y: [45, 0]
            }, {
                duration: 1.1,
                delay: 0.2,
                easing: smoothEase
            });

            animate(".metadata-item", {
                opacity: [0, 1],
                x: [30, 0]
            }, {
                duration: 0.8,
                delay: stagger(0.12, {
                    start: 0.35
                }),
                easing: smoothEase
            });

            // Feature Image Slider Entrance
            inView("#project-slider-section", () => {
                animate("#project-slider-section", {
                    opacity: [0, 1],
                    y: [50, 0],
                    scale: [0.96, 1]
                }, {
                    duration: 1.15,
                    easing: smoothEase
                });
            }, inViewConfig);

            // Detailed Content Entrance
            inView("#project-details-section", () => {
                animate("#details-content-wrapper", {
                    opacity: [0, 1],
                    y: [40, 0]
                }, {
                    duration: 1.0,
                    easing: smoothEase
                });
                animate(".detail-block", {
                    opacity: [0, 1],
                    y: [30, 0]
                }, {
                    duration: 0.85,
                    delay: stagger(0.14),
                    easing: smoothEase
                });
            }, inViewConfig);

            // Related Works Section Reveal
            inView("#related-works", () => {
                animate("#related-works-header", {
                    opacity: [0, 1],
                    y: [35, 0]
                }, {
                    duration: 1.0,
                    easing: smoothEase
                });
                animate(".related-card", {
                    opacity: [0, 1],
                    y: [50, 0],
                    scale: [0.95, 1]
                }, {
                    duration: 1.0,
                    delay: stagger(0.15, {
                        start: 0.2
                    }),
                    easing: smoothEase
                });
            }, inViewConfig);

            // CTA Section Reveal
            inView("#contact", () => {
                animate("#detail-cta-wrapper", {
                    opacity: [0, 1],
                    y: [50, 0],
                    scale: [0.95, 1]
                }, {
                    duration: 1.2,
                    easing: smoothEase
                });
            }, inViewConfig);
        }

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', initProjectDetailMotion);
        } else {
            initProjectDetailMotion();
        }
    </script>
@endsection

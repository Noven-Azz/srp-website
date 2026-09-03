@extends('layouts.main')

@section('title', 'Optimasi Gudang dengan Teknologi RFID - PT. SOLUSI REKATAMA PERSADA')

@section('content')
    <!-- BEGIN: Blog Article Hero Section -->
    <section id="blog-detail-hero" class="max-w-[1280px] mx-auto px-6 md:px-16 pt-12 md:pt-20 pb-8 overflow-hidden ">
        <div class="flex flex-col gap-4 opacity-0 transform" id="hero-meta-wrapper">
            <!-- Metadata: Category & Date -->
            <div class="flex items-center gap-2 text-xs font-bold tracking-widest uppercase text-on-surface-variant">
                <span class="text-primary">TECHNOLOGY</span>
                <span class="text-accent-gold">■</span>
                <span class="text-gray-500">25 Oktober 2023</span>
            </div>

            <!-- Article Main Title -->
            <h1 id="blog-article-title"
                class="font-sans text-3xl md:text-5xl lg:text-6xl font-bold text-[#171b29] max-w-4xl leading-tight tracking-tight">
                Optimasi Gudang dengan Teknologi RFID
            </h1>
        </div>
    </section>
    <!-- END: Blog Article Hero Section -->

    <!-- BEGIN: Feature Image Slider -->
    <section id="project-slider-section" class="max-w-[1280px] mx-auto mb-12 px-6 md:px-16 opacity-0 transform">
        <div id="project-slider"
            class="w-full relative group rounded-xl overflow-hidden shadow-sm border border-gray-200 bg-black"
            style="aspect-ratio: 16 / 9;">

            <!-- Slides Wrapper -->
            <div id="slider-track" class="flex w-full h-full transition-transform duration-500 ease-out">

                <!-- Slide 1 -->
                <div class="w-full h-full flex-shrink-0 relative overflow-hidden flex items-center justify-center">
                    <img src="{{ asset('images/blog/blog-1.jpg') }}"
                        class="absolute inset-0 w-full h-full object-cover blur-xl opacity-40 scale-110 pointer-events-none"
                        alt="">
                    <img src="{{ asset('images/blog/blog-1.jpg') }}" alt="Optimasi Gudang RFID 1"
                        class="relative max-h-full max-w-full object-contain z-10">
                </div>

                <!-- Slide 2 -->
                <div class="w-full h-full flex-shrink-0 relative overflow-hidden flex items-center justify-center">
                    <img src="{{ asset('images/blog/blog-2.jpg') }}"
                        class="absolute inset-0 w-full h-full object-cover blur-xl opacity-40 scale-110 pointer-events-none"
                        alt="">
                    <img src="{{ asset('images/blog/blog-2.jpg') }}" alt="Optimasi Gudang RFID 2"
                        class="relative max-h-full max-w-full object-contain z-10">
                </div>

                <!-- Slide 3 -->
                <div class="w-full h-full flex-shrink-0 relative overflow-hidden flex items-center justify-center">
                    <img src="{{ asset('images/blog/blog-3.jpg') }}"
                        class="absolute inset-0 w-full h-full object-cover blur-xl opacity-40 scale-110 pointer-events-none"
                        alt="">
                    <img src="{{ asset('images/blog/blog-3.jpg') }}" alt="Optimasi Gudang RFID 3"
                        class="relative max-h-full max-w-full object-contain z-10">
                </div>

                <!-- Slide 4 -->
                <div class="w-full h-full flex-shrink-0 relative overflow-hidden flex items-center justify-center">
                    <img src="{{ asset('images/blog/blog-4.jpg') }}"
                        class="absolute inset-0 w-full h-full object-cover blur-xl opacity-40 scale-110 pointer-events-none"
                        alt="">
                    <img src="{{ asset('images/blog/blog-4.jpg') }}" alt="Optimasi Gudang RFID 4"
                        class="relative max-h-full max-w-full object-contain z-10">
                </div>

            </div>

            <!-- Navigation Arrow: Previous -->
            <button id="slider-prev"
                class="absolute left-4 top-1/2 -translate-y-1/2 w-10 h-10 rounded-full bg-black/60 text-white flex items-center justify-center backdrop-blur-sm opacity-80 hover:opacity-100 hover:scale-110 transition-all duration-300 cursor-pointer z-20"
                aria-label="Previous Slide">
                <span class="material-symbols-outlined text-xl">chevron_left</span>
            </button>

            <!-- Navigation Arrow: Next -->
            <button id="slider-next"
                class="absolute right-4 top-1/2 -translate-y-1/2 w-10 h-10 rounded-full bg-black/60 text-white flex items-center justify-center backdrop-blur-sm opacity-80 hover:opacity-100 hover:scale-110 transition-all duration-300 cursor-pointer z-20"
                aria-label="Next Slide">
                <span class="material-symbols-outlined text-xl">chevron_right</span>
            </button>

            <!-- Dots Indicator -->
            <div id="slider-dots" class="absolute bottom-4 left-1/2 -translate-x-1/2 flex items-center gap-2 z-20">
                <button class="slider-dot w-6 h-2.5 rounded-full bg-white transition-all duration-300 cursor-pointer"
                    data-index="0" aria-label="Go to slide 1"></button>
                <button class="slider-dot w-2.5 h-2.5 rounded-full bg-white/50 transition-all duration-300 cursor-pointer"
                    data-index="1" aria-label="Go to slide 2"></button>
                <button class="slider-dot w-2.5 h-2.5 rounded-full bg-white/50 transition-all duration-300 cursor-pointer"
                    data-index="2" aria-label="Go to slide 3"></button>
                <button class="slider-dot w-2.5 h-2.5 rounded-full bg-white/50 transition-all duration-300 cursor-pointer"
                    data-index="3" aria-label="Go to slide 4"></button>
            </div>

        </div>
    </section>
    <!-- END: Feature Image Slider -->

    <!-- BEGIN: Main Article Content Section -->
    <article class="max-w-[1280px] mx-auto px-6 md:px-16 pb-20">
        <!-- Article Body Content Wrapper -->
        <div id="article-body-wrapper"
            class="max-w-3xl mx-auto space-y-8 text-on-surface-variant text-base md:text-lg leading-relaxed opacity-0 transform">
            <p class="article-block text-lg font-medium text-[#666666]">
                Di era transformasi digital, efisiensi operasional pergudangan menjadi salah satu kunci keberhasilan rantai
                pasok industri. Teknologi Radio Frequency Identification (RFID) hadir sebagai solusi otomatisasi modern.
            </p>

            <section class="article-block space-y-4">
                <h2 class="text-2xl md:text-3xl font-bold text-[#171b29] mb-4">
                    Pentingnya Solusi Otomatisasi dalam Pengelolaan Inventaris
                </h2>
                <p>
                    Proses pencatatan barang manual sering kali memicu kesalahan manusia (*human error*), waktu penanganan
                    yang lama, serta ketidakakuratan stok secara *real-time*. Dengan memanfaatkan tag RFID dan *reader*
                    otomatis, setiap pergerakan barang dari area penerimaan (*receiving*) hingga pengiriman (*dispatch*)
                    dapat terpantau secara instan.
                </p>
                <p>
                    Integrasi sistem RFID dengan basis data terpusat memungkinkan perusahaan memangkas waktu *stock opname*
                    hingga 80%, sekaligus meningkatkan akurasi inventaris mendekati 99.9%.
                </p>
            </section>

            <!-- Figure with Caption -->
            <figure class="article-block my-10">
                <div class="overflow-hidden rounded-xl border border-border-subtle shadow-sm" style="aspect-ratio: 16 / 9;">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuCVmtEYnGFHkxKurPbZjqfWliQ9wrJXPBCM_y5YFu-pUTDahnucS4jVbCu-vQvo549mfSh1HuwIrV6Nf06cF2tFeGK-kb6g3TBbE5ps1M9yzWg8HqSA791Tj-nzQ3zl3M75lclVnvThncIw2RNTdBmjqUG75UKISX43rOeuE3_mjwAQ_fbHO3Wj8ReNQ6AwOhjeWj2_PRTqD-m4hT_p2lwq9nYA1P8_6OWq3JkZyc3EiG8dQK3Cmx9R_j3wHZxhi6CYng"
                        alt="Diskusi Implemetasi Sistem RFID" class="w-full h-full object-cover">
                </div>
                <figcaption class="mt-3 text-sm text-[#666666] italic text-center">
                    Gambar 1.1: Tim teknis PT SRP melakukan pemetaan area pemindaian portal RFID di fasilitas gudang
                    logistik.
                </figcaption>
            </figure>

            <section class="article-block space-y-4">
                <h3 class="text-xl md:text-2xl font-bold text-[#171b29] mb-4">
                    Keunggulan Utama Penerapan RFID di Industri Logistik:
                </h3>
                <ul class="list-disc pl-6 space-y-2">
                    <li><strong>Pemindaian Massal Tanpa Kontak Direct Line-of-Sight:</strong> Membaca ratusan tag sekaligus
                        dalam hitungan detik.</li>
                    <li><strong>Lacak Lokasi Real-Time:</strong> Memudahkan pelacakan posisi pallet atau barang di rak
                        tinggi.</li>
                    <li><strong>Daya Tahan Tag Tinggi:</strong> Tahan terhadap debu, kelembapan, dan iklim lingkungan
                        industri ekstrem.</li>
                    <li><strong>Integrasi dengan ERP/WMS:</strong> Sinkronisasi otomatis ke sistem Manajemen Gudang utama
                        perusahaan.</li>
                </ul>
            </section>

            <!-- Highlight Quote Block -->
            <blockquote
                class="article-block border-l-4 border-yellow-srp pl-6 py-3 my-8 italic text-[#171b29] font-medium text-lg bg-surface-muted rounded-r-lg">
                "Digitalisasi rantai pasok bukan sekadar tentang mengganti kertas menjadi layar digital, melainkan tentang
                menciptakan keandalan data instan yang menjadi fondasi keputusan bisnis."
            </blockquote>

            <section class="article-block space-y-4">
                <h3 class="text-xl md:text-2xl font-bold text-[#171b29] mb-4">Kesimpulan & Langkah Implementasi</h3>
                <p>
                    Implementasi RFID yang dirancang sesuai alur kerja spesifik perusahaan terbukti memberikan pengembalian
                    investasi (ROI) yang terukur melalui efisiensi tenaga kerja dan pengurangan risiko kerugian stok barang.
                </p>
            </section>
        </div>
    </article>
    <!-- END: Main Article Content Section -->

    <!-- BEGIN: Related Blogs Section -->
    <section class="py-24 px-6 md:px-16 bg-white overflow-hidden border-t border-border-subtle" id="related-blogs">
        <div class="max-w-[1280px] mx-auto">
            <!-- Section Header -->
            <div id="related-blogs-header" class="mb-12 opacity-0 transform">
                <span class="text-xs font-bold tracking-widest uppercase text-[#666666]">BERITA & ARTIKEL LAINNYA</span>
                <h2 class="font-sans text-3xl md:text-5xl font-bold text-[#171b29] mt-2 tracking-tight">
                    Related Blogs
                </h2>
            </div>

            <!-- Grid Cards -->
            <div id="related-blogs-grid" class="grid grid-cols-1 md:grid-cols-2 gap-12">

                <!-- Card 1 -->
                <a href="{{ route('blog.show') }}"
                    class="related-blog-card group cursor-pointer flex flex-col opacity-0 transform">
                    <div class="w-full overflow-hidden rounded-xl bg-surface mb-6 relative shadow-sm border border-[#e0e3e8]"
                        style="aspect-ratio: 16 / 9;">
                        <img src="{{ asset('images/blog/blog-3.jpg') }}"
                            alt="5 Tren Utama yang Membentuk E-commerce di Tahun 2024"
                            class="w-full h-full object-cover transform transition-transform duration-500 ease-out group-hover:scale-105">
                    </div>
                    <div class="flex items-center gap-2 text-xs font-bold tracking-wider uppercase mb-2">
                        <span class="text-blue-srp">TEKNOLOGI</span>
                        <span class="text-gray-400">•</span>
                        <span class="text-gray-500">25 Oktober 2023</span>
                    </div>
                    <div class="flex justify-between items-start">
                        <h3
                            class="font-sans text-2xl font-bold text-[#171b29] group-hover:text-blue-srp transition-colors leading-tight">
                            5 Tren Utama yang Membentuk E-commerce di Tahun 2024
                        </h3>
                        <span
                            class="material-symbols-outlined text-black text-lg group-hover:text-blue-srp group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform ml-2">
                            north_east
                        </span>
                    </div>
                </a>

                <!-- Card 2 -->
                <a href="{{ route('blog.show') }}"
                    class="related-blog-card group cursor-pointer flex flex-col opacity-0 transform">
                    <div class="w-full overflow-hidden rounded-xl bg-surface mb-6 relative shadow-sm border border-[#e0e3e8]"
                        style="aspect-ratio: 16 / 9;">
                        <img src="{{ asset('images/blog/blog-2.jpg') }}"
                            alt="Kekuatan Influencer Marketing: Panduan Komprehensif"
                            class="w-full h-full object-cover transform transition-transform duration-500 ease-out group-hover:scale-105">
                    </div>
                    <div class="flex items-center gap-2 text-xs font-bold tracking-wider uppercase mb-2">
                        <span class="text-accent-gold">MARKETING</span>
                        <span class="text-gray-400">•</span>
                        <span class="text-gray-500">11 November 2023</span>
                    </div>
                    <div class="flex justify-between items-start">
                        <h3
                            class="font-sans text-2xl font-bold text-[#171b29] group-hover:text-blue-srp transition-colors leading-tight">
                            Kekuatan Influencer Marketing: Panduan Komprehensif
                        </h3>
                        <span
                            class="material-symbols-outlined text-black text-lg group-hover:text-blue-srp group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform ml-2">
                            north_east
                        </span>
                    </div>
                </a>

            </div>
        </div>
    </section>
    <!-- END: Related Blogs Section -->

    <!-- BEGIN: CTA Section -->
    <section class="py-24 px-6 md:px-16 bg-bg-light overflow-hidden" id="contact">
        <div id="blog-detail-cta-wrapper" class="max-w-[1280px] mx-auto opacity-0 transform">
            <x-cta-card badge="KONSULTASI GRATIS" title="Tertarik Menerapkan Solusi RFID di Perusahaan Anda?"
                description="Tim ahli kami siap membantu menganalisis alur kerja pergudangan Anda dan memberikan gambaran arsitektur sistem yang optimal."
                buttonText="Konsultasikan Sekarang" buttonLink="#contact" email="info@ptsrp.co.id"
                imgRight="images/cta/cta-1.jpg" imgLeft="images/cta/cta-2.jpg" />
        </div>
    </section>
    <!-- END: CTA Section -->

    <!-- SCRIPT: SLIDER LOGIC & MOTION ONE ANIMATIONS FOR BLOG DETAIL -->
    <script>
        function initBlogDetailMotion() {
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
                        slideInterval = setInterval(nextSlide, 3000);
                    }
                }

                function stopAutoSlide() {
                    if (slideInterval) {
                        clearInterval(slideInterval);
                        slideInterval = null;
                    }
                }

                // Inisialisasi slide pertama
                updateSlider(0);

                // Event Listeners Navigasi
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

                dots.forEach(dot => {
                    dot.addEventListener('click', () => {
                        const index = parseInt(dot.getAttribute('data-index'));
                        updateSlider(index);
                        stopAutoSlide();
                        startAutoSlide();
                    });
                });

                if (sliderContainer) {
                    sliderContainer.addEventListener('mouseenter', stopAutoSlide);
                    sliderContainer.addEventListener('mouseleave', startAutoSlide);
                }

                startAutoSlide();
            }

            // 2. Motion One Animations
            const motionLib = window.Motion;
            if (!motionLib) {
                setTimeout(initBlogDetailMotion, 40);
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

            // Hero Title Entrance
            animate("#hero-meta-wrapper", {
                opacity: [0, 1],
                y: [40, 0]
            }, {
                duration: 1.1,
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

            // Article Body Content Entrance
            animate("#article-body-wrapper", {
                opacity: [0, 1],
                y: [35, 0]
            }, {
                duration: 1.0,
                delay: 0.35,
                easing: smoothEase
            });

            animate(".article-block", {
                opacity: [0, 1],
                y: [30, 0]
            }, {
                duration: 0.85,
                delay: stagger(0.12, {
                    start: 0.45
                }),
                easing: smoothEase
            });

            // Related Blogs Section Reveal
            inView("#related-blogs", () => {
                animate("#related-blogs-header", {
                    opacity: [0, 1],
                    y: [35, 0]
                }, {
                    duration: 1.0,
                    easing: smoothEase
                });
                animate(".related-blog-card", {
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
                animate("#blog-detail-cta-wrapper", {
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
            document.addEventListener('DOMContentLoaded', initBlogDetailMotion);
        } else {
            initBlogDetailMotion();
        }
    </script>
@endsection

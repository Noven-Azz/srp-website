@extends('layouts.main')

@section('title', 'Blog & Artikel - PT. SOLUSI REKATAMA PERSADA')

@section('content')
    <!-- BEGIN: Hero Section Blog -->
    <header id="blog-hero"
        class="py-20 md:py-28 px-6 md:px-16 bg-surface-muted hero-pattern border-b border-border-subtle relative overflow-hidden">
        <!-- Ambient Floating Orbs -->
        <div class="hero-orb absolute -top-24 -left-24 w-96 h-96 bg-primary/20 rounded-full blur-3xl pointer-events-none">
        </div>
        <div
            class="hero-orb absolute -bottom-24 -right-24 w-96 h-96 bg-yellow-srp/20 rounded-full blur-3xl pointer-events-none">
        </div>

        <div class="max-w-container-max mx-auto px-gutter flex flex-col items-start relative z-10">
            <!-- Badge / Subtitle -->
            <span id="hero-badge"
                class="inline-flex items-center justify-center px-4 py-2 border border-border-subtle rounded-lg bg-blue-srp font-label-sm text-white mb-6 shadow-sm opacity-0 transform">
                Blog & Wawasan
            </span>

            <!-- Headline Utama -->
            <h1 id="hero-title"
                class="text-4xl md:text-5xl lg:text-6xl text-[#171b29] max-w-4xl mb-6 tracking-tight font-sans font-bold leading-tight opacity-0 transform">
                Berita & Artikel Terkini
            </h1>

            <!-- Deskripsi -->
            <p id="hero-desc"
                class="font-sans text-lg md:text-xl text-on-surface-variant max-w-2xl leading-relaxed opacity-0 transform">
                Temukan wawasan terbaru, tren industri, dan pandangan ahli seputar Industrial IoT, solusi RFID, serta
                integrasi AI dari PT. SOLUSI REKATAMA PERSADA.
            </p>
        </div>
    </header>
    <!-- END: Hero Section Blog -->

    <!-- BEGIN: Blog Grid & Filter Section -->
    <main class="py-24 px-6 md:px-16 bg-surface border-b border-border-subtle overflow-hidden" id="blog-grid-section">
        <div class="max-w-[1280px] mx-auto">

            <!-- BEGIN: Minimalist Filter & Search Toolbar -->
            <div id="blog-toolbar"
                class="flex flex-col md:flex-row items-stretch md:items-center justify-between gap-4 mb-16 opacity-0 transform">

                <!-- Left Side: Category Filter Buttons -->
                <div id="blog-filters" class="flex flex-wrap items-center gap-3">
                    <button data-filter="all"
                        class="filter-chip active bg-black text-white border border-black hover:bg-black hover:text-white hover:border-black px-6 py-4 text-xs md:text-sm font-bold uppercase tracking-wider transition-colors duration-200">
                        SEMUA BERITA
                    </button>
                    <button data-filter="teknologi"
                        class="filter-chip bg-white text-black border border-gray-300 hover:bg-black hover:text-white hover:border-black px-6 py-4 text-xs md:text-sm font-bold uppercase tracking-wider transition-colors duration-200">
                        TEKNOLOGI
                    </button>
                    <button data-filter="internet-of-things"
                        class="filter-chip bg-white text-black border border-gray-300 hover:bg-black hover:text-white hover:border-black px-6 py-4 text-xs md:text-sm font-bold uppercase tracking-wider transition-colors duration-200">
                        INTERNET OF THINGS
                    </button>
                    <button data-filter="rfid-solutions"
                        class="filter-chip bg-white text-black border border-gray-300 hover:bg-black hover:text-white hover:border-black px-6 py-4 text-xs md:text-sm font-bold uppercase tracking-wider transition-colors duration-200">
                        RFID SOLUTIONS
                    </button>
                    <button data-filter="artificial-intelligence"
                        class="filter-chip bg-white text-black border border-gray-300 hover:bg-black hover:text-white hover:border-black px-6 py-4 text-xs md:text-sm font-bold uppercase tracking-wider transition-colors duration-200">
                        ARTIFICIAL INTELLIGENCE
                    </button>
                </div>

                <!-- Right Side: Search Bar -->
                <div class="relative w-full md:w-72 flex items-center">
                    <span
                        class="material-symbols-outlined absolute left-3.5 text-gray-500 text-lg pointer-events-none flex items-center justify-center h-full">
                        search
                    </span>
                    <input type="text" id="blog-search" placeholder="CARI ARTIKEL"
                        class="w-full pl-10 pr-4 py-4 bg-white border border-gray-300 focus:border-black focus:outline-none text-xs md:text-sm font-bold tracking-wider text-black placeholder-gray-400 uppercase transition-colors duration-200 leading-none">
                </div>

            </div>
            <!-- END: Minimalist Filter & Search Toolbar -->

            <!-- Empty State Message -->
            <div id="blog-empty"
                class="hidden flex-col items-center justify-center py-20 text-center bg-white border border-dashed border-gray-300 my-8">
                <span class="material-symbols-outlined text-5xl text-gray-400 mb-3">manage_search</span>
                <h4 class="text-xl font-bold text-gray-800 mb-1">TIDAK ADA ARTIKEL YANG COCOK</h4>
                <p class="text-sm text-gray-500 max-w-sm mb-6">Coba gunakan kata kunci lain atau pilih kategori yang
                    berbeda.</p>
                <button id="reset-filter-btn"
                    class="px-6 py-3 bg-black text-white text-xs font-bold uppercase tracking-wider hover:bg-gray-800 transition-colors">
                    RESET FILTER
                </button>
            </div>

            <!-- Articles Grid -->
            <div id="blog-grid" class="grid grid-cols-1 md:grid-cols-2 gap-12">

                <!-- Article 1 -->
                <a href="{{ route('blog.show') }}" data-category="teknologi"
                    class="article-card blog-item group cursor-pointer flex flex-col opacity-0 transform">
                    <div class="w-full overflow-hidden rounded-xl bg-surface-variant mb-4 relative shadow-sm border border-border-subtle"
                        style="aspect-ratio: 16 / 9;">
                        <img src="{{ asset('images/blog/blog-3.jpg') }}"
                            alt="High-tech industrial automation and IoT concept"
                            class="w-full h-full object-cover transform transition-transform duration-700 ease-out group-hover:scale-105">
                    </div>
                    <div class="flex items-center gap-2 mb-2">
                        <span class="font-label-sm text-xs font-bold text-primary uppercase tracking-wider">Teknologi</span>
                        <span class="text-gray-400">•</span>
                        <span class="font-label-sm text-xs text-on-surface-variant">25 Oktober 2023</span>
                    </div>
                    <h3
                        class="font-headline-md text-2xl font-bold text-on-surface mb-2 group-hover:text-primary transition-colors">
                        5 Tren Utama yang Membentuk E-commerce di Tahun 2024
                    </h3>
                </a>

                <!-- Article 2 -->
                <a href="{{ route('blog.show') }}" data-category="teknologi"
                    class="article-card blog-item group cursor-pointer flex flex-col opacity-0 transform">
                    <div class="w-full overflow-hidden rounded-xl bg-surface-variant mb-4 relative shadow-sm border border-border-subtle"
                        style="aspect-ratio: 16 / 9;">
                        <img src="{{ asset('images/blog/blog-2.jpg') }}" alt="Marketing strategy desk"
                            class="w-full h-full object-cover transform transition-transform duration-700 ease-out group-hover:scale-105">
                    </div>
                    <div class="flex items-center gap-2 mb-2">
                        <span
                            class="font-label-sm text-xs font-bold text-accent-gold uppercase tracking-wider">Teknologi</span>
                        <span class="text-gray-400">•</span>
                        <span class="font-label-sm text-xs text-on-surface-variant">11 November 2023</span>
                    </div>
                    <h3
                        class="font-headline-md text-2xl font-bold text-on-surface mb-2 group-hover:text-primary transition-colors">
                        Kekuatan Influencer Marketing: Panduan Komprehensif
                    </h3>
                </a>

                <!-- Article 3 -->
                <a href="{{ route('blog.show') }}" data-category="rfid-solutions"
                    class="article-card blog-item group cursor-pointer flex flex-col opacity-0 transform">
                    <div class="w-full overflow-hidden rounded-xl bg-surface-variant mb-4 relative shadow-sm border border-border-subtle"
                        style="aspect-ratio: 16 / 9;">
                        <img src="{{ asset('images/blog/blog-1.jpg') }}" alt="Modern warehouse shelving"
                            class="w-full h-full object-cover transform transition-transform duration-700 ease-out group-hover:scale-105">
                    </div>
                    <div class="flex items-center gap-2 mb-2">
                        <span class="font-label-sm text-xs font-bold text-secondary uppercase tracking-wider">RFID
                            Solutions</span>
                        <span class="text-gray-400">•</span>
                        <span class="font-label-sm text-xs text-on-surface-variant">1 Desember 2023</span>
                    </div>
                    <h3
                        class="font-headline-md text-2xl font-bold text-on-surface mb-2 group-hover:text-primary transition-colors">
                        Optimasi Gudang dengan Teknologi RFID
                    </h3>
                </a>

                <!-- Article 4 -->
                <a href="{{ route('blog.show') }}" data-category="artificial-intelligence"
                    class="article-card blog-item group cursor-pointer flex flex-col opacity-0 transform">
                    <div class="w-full overflow-hidden rounded-xl bg-surface-variant mb-4 relative shadow-sm border border-border-subtle"
                        style="aspect-ratio: 16 / 9;">
                        <img src="{{ asset('images/blog/blog-4.jpg') }}" alt="AI Microchip concept"
                            class="w-full h-full object-cover transform transition-transform duration-700 ease-out group-hover:scale-105">
                    </div>
                    <div class="flex items-center gap-2 mb-2">
                        <span class="font-label-sm text-xs font-bold text-primary uppercase tracking-wider">Artificial
                            Intelligence</span>
                        <span class="text-gray-400">•</span>
                        <span class="font-label-sm text-xs text-on-surface-variant">15 Desember 2023</span>
                    </div>
                    <h3
                        class="font-headline-md text-2xl font-bold text-on-surface mb-2 group-hover:text-primary transition-colors">
                        Memaksimalkan ROI dengan Prediktif AI
                    </h3>
                </a>

            </div>

            <!-- Load More Button -->
            <div id="blog-load-more" class="mt-16 flex justify-center opacity-0 transform">
                <button
                    class="bg-yellow-srp hover:bg-yellow-200 text-[#374151] font-sans font-bold py-4 px-10 rounded-sm transition-all duration-300 shadow-sm uppercase tracking-wider text-sm hover:scale-105 transform">
                    LOAD MORE
                </button>
            </div>

        </div>
    </main>
    <!-- END: Blog Grid & Filter Section -->

    <!-- BEGIN: FAQ Section (Dark Theme) -->
    <section class="bg-black py-24 px-6 md:px-16 text-white overflow-hidden" id="faq">
        <div class="max-w-[1280px] mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 lg:gap-16">

            <!-- Left Column: Title & Image -->
            <div id="faq-left" class="flex flex-col opacity-0 transform">
                <span class="font-mono text-xs font-semibold uppercase tracking-widest mb-4 opacity-70 text-gray-400">
                    FAQ'S
                </span>
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-12 tracking-tight leading-tight text-white">
                    Pertanyaan yang Sering Diajukan
                </h2>

                <!-- Decorative Image -->
                <div id="faq-img"
                    class="mt-auto hidden md:block rounded-xl overflow-hidden shadow-2xl border border-white/10 opacity-0 transform"
                    style="aspect-ratio: 16 / 9;">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuD6aL4V5NPpypNYjiTo8z58VbQ_8KBGvu78Dvxf-ZJto1oZ5rzv7Z-kJENjPEYQTa7-t_RGjfEtGiu6rkrKDndpb-FvQyWyDMrzAmRosN67cjvKctU2QC1K8M00IQnUHXuZ78QaSI4O8BzGqxaB5N8IjxC_GMxKvq8yoykGJVGkwvSrP8alCiv87D03EgPYT2HNyHVbKCKNP3pgM7IL9-mjhm6ePY3PEUt5dT5UcVf1HE32ekAzbDYIAlnW2K_zVwj5jLWtbUA1yFOXlA"
                        alt="Industrial IoT Factory Setting"
                        class="w-full h-full object-cover transition-transform duration-700 hover:scale-105">
                </div>
            </div>

            <!-- Right Column: Accordion Items -->
            <div id="faq-accordion-list" class="flex flex-col border-t border-white/20">

                <!-- Question 1 -->
                <div class="faq-accordion-item border-b border-white/20 opacity-0 transform">
                    <button
                        class="faq-accordion-toggle w-full py-6 flex items-center justify-between text-left group cursor-pointer focus:outline-none">
                        <span
                            class="text-lg md:text-xl font-bold text-white group-hover:text-blue-srp transition-colors pr-4">
                            Apa saja layanan yang disediakan oleh PT SRP?
                        </span>
                        <span
                            class="material-symbols-outlined faq-accordion-icon text-white transition-transform duration-300">
                            add
                        </span>
                    </button>
                    <div class="faq-accordion-content hidden pb-6 text-gray-300 leading-relaxed">
                        PT SRP menyediakan solusi Industrial IoT, integrasi sistem RFID, otomatisasi pergudangan, kendali
                        akses cerdas, serta pengembangan sistem pemantauan berbasis AI yang dikustomisasi sesuai kebutuhan
                        bisnis Anda.
                    </div>
                </div>

                <!-- Question 2 -->
                <div class="faq-accordion-item border-b border-white/20 opacity-0 transform">
                    <button
                        class="faq-accordion-toggle w-full py-6 flex items-center justify-between text-left group cursor-pointer focus:outline-none">
                        <span
                            class="text-lg md:text-xl font-bold text-white group-hover:text-blue-srp transition-colors pr-4">
                            Bagaimana cara memulai kerja sama dengan PT SRP?
                        </span>
                        <span
                            class="material-symbols-outlined faq-accordion-icon text-white transition-transform duration-300">
                            add
                        </span>
                    </button>
                    <div class="faq-accordion-content hidden pb-6 text-gray-300 leading-relaxed">
                        Anda dapat menghubungi tim sales kami melalui formulir kontak atau email. Tim kami akan
                        mendiskusikan kebutuhan teknis Anda, melakukan survei/studi kelayakan awal, dan memberikan proposal
                        solusi yang tepat.
                    </div>
                </div>

                <!-- Question 3 -->
                <div class="faq-accordion-item border-b border-white/20 opacity-0 transform">
                    <button
                        class="faq-accordion-toggle w-full py-6 flex items-center justify-between text-left group cursor-pointer focus:outline-none">
                        <span
                            class="text-lg md:text-xl font-bold text-white group-hover:text-blue-srp transition-colors pr-4">
                            Industri apa saja yang menjadi spesialisasi PT SRP?
                        </span>
                        <span
                            class="material-symbols-outlined faq-accordion-icon text-white transition-transform duration-300">
                            add
                        </span>
                    </button>
                    <div class="faq-accordion-content hidden pb-6 text-gray-300 leading-relaxed">
                        Kami berpengalaman dalam menangani sektor manufaktur, rantai pasok & logistik, perhotelan/smart
                        building, lembaga pendidikan, serta fasilitas umum yang membutuhkan pelacakan aset dan otomatisasi
                        tinggi.
                    </div>
                </div>

                <!-- Question 4 -->
                <div class="faq-accordion-item border-b border-white/20 opacity-0 transform">
                    <button
                        class="faq-accordion-toggle w-full py-6 flex items-center justify-between text-left group cursor-pointer focus:outline-none">
                        <span
                            class="text-lg md:text-xl font-bold text-white group-hover:text-blue-srp transition-colors pr-4">
                            Apakah PT SRP bisa membantu meningkatkan sistem yang sudah ada?
                        </span>
                        <span
                            class="material-symbols-outlined faq-accordion-icon text-white transition-transform duration-300">
                            add
                        </span>
                    </button>
                    <div class="faq-accordion-content hidden pb-6 text-gray-300 leading-relaxed">
                        Ya. Perangkat dan sistem perangkat lunak kami dibangun dengan arsitektur fleksibel (open API) yang
                        mudah diintegrasikan dengan ERP, CRM, atau basis data eksisting perusahaan Anda.
                    </div>
                </div>

                <!-- Question 5 -->
                <div class="faq-accordion-item border-b border-white/20 opacity-0 transform">
                    <button
                        class="faq-accordion-toggle w-full py-6 flex items-center justify-between text-left group cursor-pointer focus:outline-none">
                        <span
                            class="text-lg md:text-xl font-bold text-white group-hover:text-blue-srp transition-colors pr-4">
                            Apa yang membedakan PT SRP dari penyedia solusi IoT lainnya?
                        </span>
                        <span
                            class="material-symbols-outlined faq-accordion-icon text-white transition-transform duration-300">
                            add
                        </span>
                    </button>
                    <div class="faq-accordion-content hidden pb-6 text-gray-300 leading-relaxed">
                        Keunggulan kami terletak pada kustomisasi perangkat lunak in-house, penggunaan perangkat keras
                        berspesifikasi standar industri tinggi, serta tim teknis lokal yang responsif dan berpengalaman.
                    </div>
                </div>

                <!-- Question 6 -->
                <div class="faq-accordion-item border-b border-white/20 opacity-0 transform">
                    <button
                        class="faq-accordion-toggle w-full py-6 flex items-center justify-between text-left group cursor-pointer focus:outline-none">
                        <span
                            class="text-lg md:text-xl font-bold text-white group-hover:text-blue-srp transition-colors pr-4">
                            Apakah PT SRP menyediakan layanan purna jual atau maintenance?
                        </span>
                        <span
                            class="material-symbols-outlined faq-accordion-icon text-white transition-transform duration-300">
                            add
                        </span>
                    </button>
                    <div class="faq-accordion-content hidden pb-6 text-gray-300 leading-relaxed">
                        Tentu saja. Kami menyediakan paket garansi perangkat keras, dukungan teknis 24/7, pemeliharaan
                        sistem secara berkala, serta perbaikan perangkat langsung di lokasi jika diperlukan.
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- END: FAQ Section -->

    <!-- BEGIN: CTA Section (Blog) -->
    <section class="py-24 px-6 md:px-16 bg-bg-light overflow-hidden" id="contact">
        <div class="max-w-[1280px] mx-auto">
            <div id="cta-card-wrapper" class="w-full opacity-0 transform">
                <x-cta-card badge="KONSULTASI GRATIS" title="Siap Mendigitalisasi Operasional Perusahaan Anda?"
                    description="Ceritakan tantangan tim Anda. Kami akan merespons dengan langkah praktis dan solusi yang tepat sasaran."
                    buttonText="Hubungi Tim Sales Kami" buttonLink="#contact" email="info@ptsrp.co.id"
                    imgRight="images/cta/cta-1.jpg" imgLeft="images/cta/cta-2.jpg" />
            </div>
        </div>
    </section>
    <!-- END: CTA Section (Blog) -->

    <!-- SCRIPT: MASTER MOTION ANIMATION SUITE FOR BLOG -->
    <script>
        function initBlogMotion() {
            const motionLib = window.Motion;

            if (!motionLib) {
                setTimeout(initBlogMotion, 40);
                return;
            }

            const {
                animate,
                inView,
                stagger
            } = motionLib;

            // Easing Curves
            const smoothEase = [0.16, 1, 0.3, 1];
            const bouncyEase = [0.34, 1.35, 0.64, 1];

            const inViewCenterConfig = {
                margin: "0px 0px -25% 0px",
                amount: 0.25
            };

            /* ==========================================================================
               1. HERO SECTION ENTRANCE
               ========================================================================== */
            animate(".hero-orb", {
                scale: [1, 1.25, 1],
                opacity: [0.2, 0.5, 0.2]
            }, {
                duration: 7,
                repeat: Infinity,
                direction: "alternate",
                easing: "ease-in-out"
            });

            animate("#hero-badge", {
                opacity: [0, 1],
                y: [30, 0],
                scale: [0.9, 1]
            }, {
                duration: 0.9,
                easing: smoothEase
            });

            animate("#hero-title", {
                opacity: [0, 1],
                y: [50, 0]
            }, {
                duration: 1.15,
                delay: 0.2,
                easing: smoothEase
            });

            animate("#hero-desc", {
                opacity: [0, 1],
                y: [40, 0]
            }, {
                duration: 1.15,
                delay: 0.4,
                easing: smoothEase
            });

            /* ==========================================================================
               2. FILTER TOOLBAR & BLOG GRID ENTRANCE
               ========================================================================== */
            inView("#blog-toolbar", () => {
                animate("#blog-toolbar", {
                    opacity: [0, 1],
                    y: [35, 0]
                }, {
                    duration: 1.05,
                    easing: smoothEase
                });
            }, inViewCenterConfig);

            inView("#blog-grid", () => {
                animate(".blog-item", {
                    opacity: [0, 1],
                    y: [60, 0],
                    scale: [0.94, 1]
                }, {
                    duration: 1.1,
                    delay: stagger(0.16),
                    easing: smoothEase
                });
            }, inViewCenterConfig);

            inView("#blog-load-more", () => {
                animate("#blog-load-more", {
                    opacity: [0, 1],
                    y: [30, 0],
                    scale: [0.95, 1]
                }, {
                    duration: 0.9,
                    delay: 0.2,
                    easing: bouncyEase
                });
            }, inViewCenterConfig);

            // Article Card Hover Effect
            document.querySelectorAll('.blog-item').forEach(card => {
                card.addEventListener('mouseenter', () => {
                    animate(card, {
                        transform: 'translateY(-8px)'
                    }, {
                        duration: 0.35,
                        easing: smoothEase
                    });
                });
                card.addEventListener('mouseleave', () => {
                    animate(card, {
                        transform: 'translateY(0px)'
                    }, {
                        duration: 0.35,
                        easing: smoothEase
                    });
                });
            });

            /* ==========================================================================
               3. SEARCH & CHIP FILTERING LOGIC
               ========================================================================== */
            const filterChips = document.querySelectorAll('#blog-filters .filter-chip');
            const blogItems = document.querySelectorAll('#blog-grid .blog-item');
            const searchInput = document.getElementById('blog-search');
            const emptyStateEl = document.getElementById('blog-empty');
            const resetFilterBtn = document.getElementById('reset-filter-btn');

            let currentFilter = 'all';
            let currentSearch = '';

            function applyFilterAndSearch() {
                let visibleCount = 0;
                const matchingItems = [];
                const nonMatchingItems = [];

                blogItems.forEach(item => {
                    const itemCategory = item.getAttribute('data-category');
                    const titleText = (item.querySelector('h3') ? item.querySelector('h3').textContent : '')
                        .toLowerCase();

                    const matchesCategory = (currentFilter === 'all' || itemCategory === currentFilter);
                    const matchesSearch = (!currentSearch || titleText.includes(currentSearch));

                    if (matchesCategory && matchesSearch) {
                        matchingItems.push(item);
                        visibleCount++;
                    } else {
                        nonMatchingItems.push(item);
                    }
                });

                nonMatchingItems.forEach(item => {
                    animate(item, {
                            opacity: [1, 0],
                            scale: [1, 0.92],
                            y: [0, 20]
                        }, {
                            duration: 0.3,
                            easing: smoothEase
                        })
                        .finished.then(() => {
                            item.style.display = 'none';
                        });
                });

                matchingItems.forEach((item, index) => {
                    item.style.display = 'flex';
                    animate(item, {
                        opacity: [0, 1],
                        scale: [0.92, 1],
                        y: [35, 0]
                    }, {
                        duration: 0.65,
                        delay: index * 0.08,
                        easing: smoothEase
                    });
                });

                if (visibleCount === 0) {
                    emptyStateEl.classList.remove('hidden');
                    emptyStateEl.classList.add('flex');
                    animate(emptyStateEl, {
                        opacity: [0, 1],
                        y: [25, 0]
                    }, {
                        duration: 0.5,
                        easing: smoothEase
                    });
                } else {
                    emptyStateEl.classList.add('hidden');
                    emptyStateEl.classList.remove('flex');
                }
            }

            filterChips.forEach(chip => {
                chip.addEventListener('click', () => {
                    currentFilter = chip.getAttribute('data-filter');

                    filterChips.forEach(c => {
                        c.classList.remove('bg-black', 'text-white', 'border-black', 'active');
                        c.classList.add('bg-white', 'text-black', 'border-gray-300');
                    });

                    chip.classList.add('bg-black', 'text-white', 'border-black', 'active');
                    chip.classList.remove('bg-white', 'text-black', 'border-gray-300');

                    applyFilterAndSearch();
                });
            });

            if (searchInput) {
                searchInput.addEventListener('input', (e) => {
                    currentSearch = e.target.value.trim().toLowerCase();
                    applyFilterAndSearch();
                });
            }

            if (resetFilterBtn) {
                resetFilterBtn.addEventListener('click', () => {
                    currentFilter = 'all';
                    currentSearch = '';
                    if (searchInput) searchInput.value = '';
                    const allChip = document.querySelector('.filter-chip[data-filter="all"]');
                    if (allChip) allChip.click();
                });
            }

            /* ==========================================================================
               4. FAQ SECTION ACCORDION LOGIC
               ========================================================================== */
            inView("#faq-left", () => {
                animate("#faq-left", {
                    opacity: [0, 1],
                    x: [-50, 0]
                }, {
                    duration: 1.1,
                    easing: smoothEase
                });
                animate("#faq-img", {
                    opacity: [0, 1],
                    scale: [0.93, 1],
                    y: [30, 0]
                }, {
                    duration: 1.25,
                    delay: 0.2,
                    easing: smoothEase
                });
            }, inViewCenterConfig);

            inView("#faq-accordion-list", () => {
                animate(".faq-accordion-item", {
                    opacity: [0, 1],
                    x: [50, 0]
                }, {
                    duration: 0.95,
                    delay: stagger(0.12),
                    easing: smoothEase
                });
            }, inViewCenterConfig);

            const accordionToggles = document.querySelectorAll('#faq-accordion-list .faq-accordion-toggle');
            accordionToggles.forEach(toggle => {
                toggle.addEventListener('click', () => {
                    const currentItem = toggle.parentElement;
                    const currentContent = currentItem.querySelector('.faq-accordion-content');
                    const currentIcon = toggle.querySelector('.faq-accordion-icon');

                    document.querySelectorAll('#faq-accordion-list .faq-accordion-content').forEach(
                        content => {
                            if (content !== currentContent && !content.classList.contains('hidden')) {
                                content.classList.add('hidden');
                                const otherIcon = content.parentElement.querySelector(
                                    '.faq-accordion-icon');
                                otherIcon.textContent = 'add';
                                animate(otherIcon, {
                                    transform: 'rotate(0deg)'
                                }, {
                                    duration: 0.3,
                                    easing: smoothEase
                                });
                            }
                        });

                    const isHidden = currentContent.classList.contains('hidden');
                    currentContent.classList.toggle('hidden');

                    if (isHidden) {
                        currentIcon.textContent = 'remove';
                        animate(currentIcon, {
                            transform: 'rotate(180deg)'
                        }, {
                            duration: 0.35,
                            easing: smoothEase
                        });
                        animate(currentContent, {
                            opacity: [0, 1],
                            y: [-15, 0]
                        }, {
                            duration: 0.45,
                            easing: smoothEase
                        });
                    } else {
                        currentIcon.textContent = 'add';
                        animate(currentIcon, {
                            transform: 'rotate(0deg)'
                        }, {
                            duration: 0.35,
                            easing: smoothEase
                        });
                    }
                });
            });

            /* ==========================================================================
               5. CTA SECTION
               ========================================================================== */
            inView("#contact", () => {
                animate("#cta-card-wrapper", {
                    opacity: [0, 1],
                    y: [60, 0],
                    scale: [0.94, 1]
                }, {
                    duration: 1.25,
                    easing: smoothEase
                });
            }, inViewCenterConfig);
        }

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', initBlogMotion);
        } else {
            initBlogMotion();
        }
    </script>
@endsection

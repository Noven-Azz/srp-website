@extends('layouts.main')

@section('title', 'Solusi AI & Computer Vision - PT. SOLUSI REKATAMA PERSADA')

@section('content')
    <!-- BEGIN: Hero Section AI -->
    <header id="ai-hero"
        class="py-20 md:py-28 px-6 md:px-16 bg-surface-muted hero-pattern border-b border-border-subtle relative overflow-hidden">

        <!-- Ambient Floating Orbs -->
        <div class="hero-orb absolute -top-24 -left-24 w-96 h-96 bg-primary/20 rounded-full blur-3xl pointer-events-none">
        </div>
        <div
            class="hero-orb absolute -bottom-24 -right-24 w-96 h-96 bg-yellow-srp/20 rounded-full blur-3xl pointer-events-none">
        </div>

        <div class="max-w-[1280px] mx-auto flex flex-col items-start relative z-10">

            <!-- Badge / Subtitle -->
            <span id="hero-badge"
                class="inline-flex items-center bg-blue-srp justify-center px-4 py-2 border border-border-subtle rounded-lg font-label-sm text-white mb-6 shadow-sm opacity-0 transform">
                Produk & Solusi
            </span>

            <!-- Headline Utama -->
            <h1 id="hero-title"
                class="text-4xl md:text-5xl lg:text-6xl text-[#171b29] max-w-4xl mb-6 tracking-tight font-sans font-bold leading-tight opacity-0 transform">
                Otomatisasi & Inspeksi Cerdas dengan <span class="text-blue-srp">Artificial Intelligence</span>
            </h1>

            <!-- Deskripsi -->
            <p id="hero-desc"
                class="font-sans text-lg md:text-xl text-[#666666] max-w-2xl leading-relaxed opacity-0 transform">
                Tingkatkan efisiensi dan tingkatkan akurasi deteksi hingga 99.8% menggunakan teknologi Computer Vision, Edge
                AI, dan Analytics untuk fasilitas industri Anda.
            </p>

        </div>
    </header>
    <!-- END: Hero Section AI -->

    <!-- BEGIN: AI Products Section -->
    <section class="py-20 md:py-28 bg-white border-b border-border-subtle overflow-hidden" id="ai-products">
        <div class="max-w-[1280px] mx-auto px-6 md:px-16">

            <!-- Section Header -->
            <div id="ai-products-header" class="text-center mb-16 opacity-0 transform">
                <span class="font-mono text-xs font-semibold text-blue-srp uppercase tracking-wider block mb-3">
                    KATALOG EKSOSISTEM AI INDUSTRI
                </span>
                <h2 class="font-sans text-3xl md:text-4xl lg:text-5xl font-bold text-[#171b29] tracking-tight mb-4">
                    Solusi Artificial Intelligence Unggulan
                </h2>
                <p class="font-sans text-base md:text-lg text-gray-600 max-w-2xl mx-auto leading-relaxed">
                    Sistem pemrosesan citra, modul komputasi Edge AI, serta platform analitik pintar untuk mendukung
                    transformasi Smart Factory.
                </p>
            </div>

            <!-- Product Cards List -->
            <div id="ai-products-list" class="flex flex-col gap-10 max-w-5xl mx-auto">

                <!-- Card 1: AI Visual Quality Inspection (Standard Layout) -->
                <div
                    class="ai-product-card w-full bg-white rounded-2xl border border-border-subtle shadow-sm hover:shadow-xl hover:-translate-y-1.5 hover:border-blue-srp/30 transition-all duration-500 overflow-hidden flex flex-col md:flex-row items-stretch opacity-0 transform">
                    <div class="w-full md:w-1/2 h-64 md:h-auto relative overflow-hidden bg-surface-muted group">
                        <img src="{{ asset('images/produk/ai/jetson-agx-orin .jpeg') }}" alt="AI Quality Inspection System"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    </div>
                    <div class="w-full md:w-1/2 p-8 md:p-12 flex flex-col justify-center">
                        <div class="mb-6">
                            <span
                                class="text-blue-srp font-mono text-xs font-bold uppercase tracking-widest mb-2 block">Quality
                                Assurance</span>
                            <h3 class="font-sans text-2xl font-bold text-[#171b29] mb-3">AI Visual Quality Inspection</h3>
                            <p class="font-sans text-sm text-gray-600 leading-relaxed">
                                Kamera pintar berbasis Deep Learning untuk mendeteksi cacat fisik produk, keretakan, dan
                                kesalahan perakitan di conveyor baris produksi secara real-time.
                            </p>
                        </div>
                        <div class="grid grid-cols-2 gap-4 mb-8">
                            <div class="border-l-2 border-blue-srp/30 pl-3">
                                <span
                                    class="block text-[10px] font-bold text-gray-400 uppercase tracking-wider">Akurasi</span>
                                <span class="text-sm font-semibold text-[#171b29]">Hingga 99.8%</span>
                            </div>
                            <div class="border-l-2 border-blue-srp/30 pl-3">
                                <span
                                    class="block text-[10px] font-bold text-gray-400 uppercase tracking-wider">Speed</span>
                                <span class="text-sm font-semibold text-[#171b29]">&lt; 50ms / Item</span>
                            </div>
                        </div>
                        <a href="{{ route('products.ai') }}"
                            class="mt-auto inline-flex items-center text-blue-srp font-sans font-bold text-sm hover:underline group">
                            Lihat Detail Produk <span
                                class="material-symbols-outlined ml-1 text-base transition-transform group-hover:translate-x-1">arrow_forward</span>
                        </a>
                    </div>
                </div>

                <!-- Card 2: AI Safety & Surveillance (Reverse Layout) -->
                <div
                    class="ai-product-card w-full bg-white rounded-2xl border border-border-subtle shadow-sm hover:shadow-xl hover:-translate-y-1.5 hover:border-blue-srp/30 transition-all duration-500 overflow-hidden flex flex-col md:flex-row-reverse items-stretch opacity-0 transform">
                    <div class="w-full md:w-1/2 h-64 md:h-auto relative overflow-hidden bg-surface-muted group">
                        <img src="{{ asset('images/produk/ai/jetson-nanob01.jpg') }}" alt="AI Workplace Safety Surveillance"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    </div>
                    <div class="w-full md:w-1/2 p-8 md:p-12 flex flex-col justify-center">
                        <div class="mb-6">
                            <span class="text-blue-srp font-mono text-xs font-bold uppercase tracking-widest mb-2 block">EHS
                                & Safety</span>
                            <h3 class="font-sans text-2xl font-bold text-[#171b29] mb-3">AI Safety & PPE Surveillance</h3>
                            <p class="font-sans text-sm text-gray-600 leading-relaxed">
                                Sistem pengawasan CCTV pintar untuk mendeteksi penggunaan APD (helm, rompi), zona terlarang,
                                kebocoran api, dan jatuhnya pekerja secara otomatis.
                            </p>
                        </div>
                        <div class="grid grid-cols-2 gap-4 mb-8">
                            <div class="border-l-2 border-blue-srp/30 pl-3">
                                <span class="block text-[10px] font-bold text-gray-400 uppercase tracking-wider">Fitur
                                    Utama</span>
                                <span class="text-sm font-semibold text-[#171b29]">Real-Time Alert</span>
                            </div>
                            <div class="border-l-2 border-blue-srp/30 pl-3">
                                <span
                                    class="block text-[10px] font-bold text-gray-400 uppercase tracking-wider">Integrasi</span>
                                <span class="text-sm font-semibold text-[#171b29]">CCTV Existing</span>
                            </div>
                        </div>
                        <a href="{{ route('products.ai') }}"
                            class="mt-auto inline-flex items-center text-blue-srp font-sans font-bold text-sm hover:underline group">
                            Lihat Detail Produk <span
                                class="material-symbols-outlined ml-1 text-base transition-transform group-hover:translate-x-1">arrow_forward</span>
                        </a>
                    </div>
                </div>

                <!-- Card 3: Edge AI Gateway & Processing (Standard Layout) -->
                <div
                    class="ai-product-card w-full bg-white rounded-2xl border border-border-subtle shadow-sm hover:shadow-xl hover:-translate-y-1.5 hover:border-blue-srp/30 transition-all duration-500 overflow-hidden flex flex-col md:flex-row items-stretch opacity-0 transform">
                    <div class="w-full md:w-1/2 h-64 md:h-auto relative overflow-hidden bg-surface-muted group">
                        <img src="{{ asset('images/produk/ai/jetson-series-1.jpeg') }}" alt="Industrial Edge AI Gateway"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    </div>
                    <div class="w-full md:w-1/2 p-8 md:p-12 flex flex-col justify-center">
                        <div class="mb-6">
                            <span
                                class="text-blue-srp font-mono text-xs font-bold uppercase tracking-widest mb-2 block">Hardware
                                Computing</span>
                            <h3 class="font-sans text-2xl font-bold text-[#171b29] mb-3">Industrial Edge AI Gateway</h3>
                            <p class="font-sans text-sm text-gray-600 leading-relaxed">
                                Perangkat komputer ringkas berperforma tinggi dengan akselerator GPU internal untuk
                                menjalankan model inferensi AI langsung di lokasi tanpa latency internet.
                            </p>
                        </div>
                        <div class="grid grid-cols-2 gap-4 mb-8">
                            <div class="border-l-2 border-blue-srp/30 pl-3">
                                <span
                                    class="block text-[10px] font-bold text-gray-400 uppercase tracking-wider">Akselerasi</span>
                                <span class="text-sm font-semibold text-[#171b29]">NVIDIA Jetson / NPU</span>
                            </div>
                            <div class="border-l-2 border-blue-srp/30 pl-3">
                                <span class="block text-[10px] font-bold text-gray-400 uppercase tracking-wider">Suhu
                                    Kerja</span>
                                <span class="text-sm font-semibold text-[#171b29]"> -20°C s/d 70°C</span>
                            </div>
                        </div>
                        <a href="{{ route('products.ai') }}"
                            class="mt-auto inline-flex items-center text-blue-srp font-sans font-bold text-sm hover:underline group">
                            Lihat Detail Produk <span
                                class="material-symbols-outlined ml-1 text-base transition-transform group-hover:translate-x-1">arrow_forward</span>
                        </a>
                    </div>
                </div>

                <!-- Card 4: AI License Plate & Vehicle OCR (Reverse Layout) -->
                <div
                    class="ai-product-card w-full bg-white rounded-2xl border border-border-subtle shadow-sm hover:shadow-xl hover:-translate-y-1.5 hover:border-blue-srp/30 transition-all duration-500 overflow-hidden flex flex-col md:flex-row-reverse items-stretch opacity-0 transform">
                    <div class="w-full md:w-1/2 h-64 md:h-auto relative overflow-hidden bg-surface-muted group">
                        <img src="{{ asset('images/produk/ai/jetson-super.jpeg') }}" alt="AI Vehicle OCR System"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    </div>
                    <div class="w-full md:w-1/2 p-8 md:p-12 flex flex-col justify-center">
                        <div class="mb-6">
                            <span
                                class="text-blue-srp font-mono text-xs font-bold uppercase tracking-widest mb-2 block">Smart
                                Logistics</span>
                            <h3 class="font-sans text-2xl font-bold text-[#171b29] mb-3">ANPR & Vehicle OCR Analytics</h3>
                            <p class="font-sans text-sm text-gray-600 leading-relaxed">
                                Pengenalan plat nomor kendaraan, nomor kontainer, dan identifikasi jenis armada otomatis
                                untuk efisiensi gerbang logistik & pergudangan.
                            </p>
                        </div>
                        <div class="grid grid-cols-2 gap-4 mb-8">
                            <div class="border-l-2 border-blue-srp/30 pl-3">
                                <span class="block text-[10px] font-bold text-gray-400 uppercase tracking-wider">Akurasi
                                    OCR</span>
                                <span class="text-sm font-semibold text-[#171b29]">&gt; 98.5%</span>
                            </div>
                            <div class="border-l-2 border-blue-srp/30 pl-3">
                                <span
                                    class="block text-[10px] font-bold text-gray-400 uppercase tracking-wider">Kapasitas</span>
                                <span class="text-sm font-semibold text-[#171b29]">Multi-Lane Detection</span>
                            </div>
                        </div>
                        <a href="{{ route('products.ai') }}"
                            class="mt-auto inline-flex items-center text-blue-srp font-sans font-bold text-sm hover:underline group">
                            Lihat Detail Produk <span
                                class="material-symbols-outlined ml-1 text-base transition-transform group-hover:translate-x-1">arrow_forward</span>
                        </a>
                    </div>
                </div>

                <!-- ADDITIONAL HIDDEN PRODUCTS (LOAD MORE TARGETS) -->

                <!-- Card 5: AI Predictive Maintenance (Standard Layout) -->
                <div
                    class="ai-product-card extra-product hidden w-full bg-white rounded-2xl border border-border-subtle shadow-sm hover:shadow-xl hover:-translate-y-1.5 hover:border-blue-srp/30 transition-all duration-500 overflow-hidden flex flex-col md:flex-row items-stretch opacity-0 transform">
                    <div class="w-full md:w-1/2 h-64 md:h-auto relative overflow-hidden bg-surface-muted group">
                        <img src="{{ asset('images/produk/ai/reComputer-ai-raspberrypi.jpeg') }}"
                            alt="AI Predictive Maintenance"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    </div>
                    <div class="w-full md:w-1/2 p-8 md:p-12 flex flex-col justify-center">
                        <div class="mb-6">
                            <span
                                class="text-blue-srp font-mono text-xs font-bold uppercase tracking-widest mb-2 block">Asset
                                Performance</span>
                            <h3 class="font-sans text-2xl font-bold text-[#171b29] mb-3">AI Predictive Maintenance System
                            </h3>
                            <p class="font-sans text-sm text-gray-600 leading-relaxed">
                                Analisis pola getaran, suhu, dan suara mesin berbasis Machine Learning untuk memprediksi
                                kerusakan alat sebelum terjadi *downtime*.
                            </p>
                        </div>
                        <div class="grid grid-cols-2 gap-4 mb-8">
                            <div class="border-l-2 border-blue-srp/30 pl-3">
                                <span
                                    class="block text-[10px] font-bold text-gray-400 uppercase tracking-wider">Downtime</span>
                                <span class="text-sm font-semibold text-[#171b29]">Turun Hingga 50%</span>
                            </div>
                            <div class="border-l-2 border-blue-srp/30 pl-3">
                                <span
                                    class="block text-[10px] font-bold text-gray-400 uppercase tracking-wider">Protokol</span>
                                <span class="text-sm font-semibold text-[#171b29]">MQTT / OPC-UA</span>
                            </div>
                        </div>
                        <a href="{{ route('products.ai') }}"
                            class="mt-auto inline-flex items-center text-blue-srp font-sans font-bold text-sm hover:underline group">
                            Lihat Detail Produk <span
                                class="material-symbols-outlined ml-1 text-base transition-transform group-hover:translate-x-1">arrow_forward</span>
                        </a>
                    </div>
                </div>

                <!-- Card 6: AI Density & Counting Analytics (Reverse Layout) -->
                <div
                    class="ai-product-card extra-product hidden w-full bg-white rounded-2xl border border-border-subtle shadow-sm hover:shadow-xl hover:-translate-y-1.5 hover:border-blue-srp/30 transition-all duration-500 overflow-hidden flex flex-col md:flex-row-reverse items-stretch opacity-0 transform">
                    <div class="w-full md:w-1/2 h-64 md:h-auto relative overflow-hidden bg-surface-muted group">
                        <img src="{{ asset('images/produk/ai/sensecap-intro.png') }}" alt="AI People and Object Counting"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    </div>
                    <div class="w-full md:w-1/2 p-8 md:p-12 flex flex-col justify-center">
                        <div class="mb-6">
                            <span
                                class="text-blue-srp font-mono text-xs font-bold uppercase tracking-widest mb-2 block">Spatial
                                Analytics</span>
                            <h3 class="font-sans text-2xl font-bold text-[#171b29] mb-3">AI Crowd & Object Counting</h3>
                            <p class="font-sans text-sm text-gray-600 leading-relaxed">
                                Perhitungan jumlah orang, kepadatan pengunjung, serta pemantauan jumlah barang bertumpuk
                                secara otomatis berbasis analisa video pintar.
                            </p>
                        </div>
                        <div class="grid grid-cols-2 gap-4 mb-8">
                            <div class="border-l-2 border-blue-srp/30 pl-3">
                                <span
                                    class="block text-[10px] font-bold text-gray-400 uppercase tracking-wider">Visualisasi</span>
                                <span class="text-sm font-semibold text-[#171b29]">Heatmap & Report</span>
                            </div>
                            <div class="border-l-2 border-blue-srp/30 pl-3">
                                <span
                                    class="block text-[10px] font-bold text-gray-400 uppercase tracking-wider">Akurasi</span>
                                <span class="text-sm font-semibold text-[#171b29]">99% Precision</span>
                            </div>
                        </div>
                        <a href="{{ route('products.ai') }}"
                            class="mt-auto inline-flex items-center text-blue-srp font-sans font-bold text-sm hover:underline group">
                            Lihat Detail Produk <span
                                class="material-symbols-outlined ml-1 text-base transition-transform group-hover:translate-x-1">arrow_forward</span>
                        </a>
                    </div>
                </div>

            </div>

            <!-- LOAD MORE BUTTON SECTION -->
            <div id="product-load-more" class="mt-16 flex justify-center opacity-0 transform">
                <button id="load-more-btn"
                    class="bg-yellow-srp hover:bg-yellow-200 text-[#374151] font-sans font-bold py-4 px-10 rounded-sm transition-all duration-300 shadow-sm uppercase tracking-wider text-sm hover:scale-105 transform cursor-pointer">
                    LOAD MORE
                </button>
            </div>

        </div>
    </section>
    <!-- END: AI Products Section -->

    <!-- BEGIN: FAQ Section (Dark Theme) -->
    <section class="bg-black py-24 px-6 md:px-16 text-white overflow-hidden" id="faq">
        <div class="max-w-[1280px] mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 lg:gap-16">

            <!-- Left Column: Title & Image -->
            <div id="faq-left" class="flex flex-col opacity-0 transform">
                <span class="font-mono text-xs font-semibold uppercase tracking-widest mb-4 opacity-70 text-gray-400">
                    FAQ'S
                </span>
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-12 tracking-tight leading-tight text-white">
                    Pertanyaan Seputar Solusi AI Industri
                </h2>

                <!-- Decorative Image -->
                <div id="faq-img"
                    class="mt-auto hidden md:block rounded-xl overflow-hidden shadow-2xl border border-white/10 aspect-w-16 aspect-h-9 opacity-0 transform">
                    <img src="https://images.unsplash.com/photo-1555255707-c07966088b7b?auto=format&fit=crop&w=800&q=80"
                        alt="AI Computer Vision Industrial Facility"
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
                            Apakah sistem AI PT. SRP memerlukan infrastruktur kamera baru?
                        </span>
                        <span
                            class="material-symbols-outlined faq-accordion-icon text-white transition-transform duration-300">
                            add
                        </span>
                    </button>
                    <div class="faq-accordion-content hidden pb-6 text-gray-300 leading-relaxed">
                        Tidak selalu. Solusi Computer Vision kami dapat dihubungkan langsung dengan infrastruktur CCTV atau
                        IP Camera berspesifikasi standar yang sudah ada di area operasional perusahaan Anda via protokol
                        RTSP/ONVIF.
                    </div>
                </div>

                <!-- Question 2 -->
                <div class="faq-accordion-item border-b border-white/20 opacity-0 transform">
                    <button
                        class="faq-accordion-toggle w-full py-6 flex items-center justify-between text-left group cursor-pointer focus:outline-none">
                        <span
                            class="text-lg md:text-xl font-bold text-white group-hover:text-blue-srp transition-colors pr-4">
                            Bagaimana jika koneksi internet di lokasi pabrik mengalami kendala?
                        </span>
                        <span
                            class="material-symbols-outlined faq-accordion-icon text-white transition-transform duration-300">
                            add
                        </span>
                    </button>
                    <div class="faq-accordion-content hidden pb-6 text-gray-300 leading-relaxed">
                        Sistem kami memanfaatkan arsitektur **Edge AI**, di mana seluruh proses analisa data dan pengenalan
                        visual dilakukan secara lokal di perangkat Edge Gateway tanpa bergantung pada koneksi internet
                        eksternal.
                    </div>
                </div>

                <!-- Question 3 -->
                <div class="faq-accordion-item border-b border-white/20 opacity-0 transform">
                    <button
                        class="faq-accordion-toggle w-full py-6 flex items-center justify-between text-left group cursor-pointer focus:outline-none">
                        <span
                            class="text-lg md:text-xl font-bold text-white group-hover:text-blue-srp transition-colors pr-4">
                            Apakah model AI dapat dilatih ulang sesuai produk spesifik perusahaan?
                        </span>
                        <span
                            class="material-symbols-outlined faq-accordion-icon text-white transition-transform duration-300">
                            add
                        </span>
                    </button>
                    <div class="faq-accordion-content hidden pb-6 text-gray-300 leading-relaxed">
                        Ya. Tim AI Engineer kami akan melakukan proses *dataset collection* dan *model custom training*
                        khusus agar akurasi pemrosesan sesuai dengan karakteristik produk atau jenis cacat fisik di pabrik
                        Anda.
                    </div>
                </div>

                <!-- Question 4 -->
                <div class="faq-accordion-item border-b border-white/20 opacity-0 transform">
                    <button
                        class="faq-accordion-toggle w-full py-6 flex items-center justify-between text-left group cursor-pointer focus:outline-none">
                        <span
                            class="text-lg md:text-xl font-bold text-white group-hover:text-blue-srp transition-colors pr-4">
                            Apakah hasil deteksi AI dapat diintegrasikan dengan PLC atau alarm fisik?
                        </span>
                        <span
                            class="material-symbols-outlined faq-accordion-icon text-white transition-transform duration-300">
                            add
                        </span>
                    </button>
                    <div class="faq-accordion-content hidden pb-6 text-gray-300 leading-relaxed">
                        Sangat bisa. Edge AI Gateway kami dilengkapi dengan antarmuka I/O industri (RS485, Modbus, GPIO)
                        sehingga dapat memicu sinyal stop ke jalur conveyor, menyalakan sirine alarm, maupun menolak item
                        secara otomatis.
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- END: FAQ Section -->

    <!-- BEGIN: CTA Section -->
    <section class="py-24 px-6 md:px-16 bg-bg-light overflow-hidden" id="contact">
        <div class="max-w-[1280px] mx-auto">
            <div id="cta-card-wrapper" class="w-full opacity-0 transform">
                <x-cta-card badge="KONSULTASI SOLUSI AI" title="Siap Mengotomatisasi Inspeksi Operasional dengan AI?"
                    description="Diskusikan tantangan inspeksi visual dan keamanan kerja Anda. Tim AI Engineer kami siap memberikan PoC (Proof of Concept) dan studi kelayakan sistem."
                    buttonText="Mulai Konsultasi AI" buttonLink="#contact" email="info@ptsrp.co.id"
                    imgRight="images/cta/cta-1.jpg" imgLeft="images/cta/cta-2.jpg" />
            </div>
        </div>
    </section>
    <!-- END: CTA Section -->

    <!-- SCRIPT: MOTION ONE ANIMATION SUITE & LOAD MORE FUNCTIONALITY -->
    <script>
        function initAiPageMotion() {
            const motionLib = window.Motion;

            if (!motionLib) {
                setTimeout(initAiPageMotion, 40);
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

            // 1. Hero Section Animations
            animate(".hero-orb", {
                scale: [1, 1.2, 1],
                opacity: [0.2, 0.45, 0.2]
            }, {
                duration: 8,
                repeat: Infinity,
                direction: "alternate",
                easing: "ease-in-out"
            });
            animate("#hero-badge", {
                opacity: [0, 1],
                y: [30, 0],
                scale: [0.9, 1]
            }, {
                duration: 2.0,
                easing: smoothEase
            });
            animate("#hero-title", {
                opacity: [0, 1],
                y: [40, 0]
            }, {
                duration: 2.0,
                delay: 0.2,
                easing: smoothEase
            });
            animate("#hero-desc", {
                opacity: [0, 1],
                y: [35, 0]
            }, {
                duration: 2.0,
                delay: 0.4,
                easing: smoothEase
            });

            // 2. Products Header & Load More Button Entrance
            inView("#ai-products", () => {
                animate("#ai-products-header", {
                    opacity: [0, 1],
                    y: [35, 0]
                }, {
                    duration: 2.0,
                    easing: smoothEase
                });

                animate("#product-load-more", {
                    opacity: [0, 1],
                    y: [30, 0]
                }, {
                    duration: 1.8,
                    delay: 0.5,
                    easing: smoothEase
                });
            }, inViewConfig);

            // 3. Individual Product Card Animations
            const productCards = document.querySelectorAll('.ai-product-card:not(.extra-product)');
            productCards.forEach((card) => {
                inView(card, () => {
                    animate(card, {
                        opacity: [0, 1],
                        y: [50, 0],
                        scale: [0.96, 1]
                    }, {
                        duration: 2.0,
                        easing: smoothEase
                    });
                }, {
                    margin: "0px 0px -15% 0px",
                    amount: 0.25
                });
            });

            // 4. Load More Button Click Interactivity
            const loadMoreBtn = document.getElementById('load-more-btn');
            const productLoadMoreWrapper = document.getElementById('product-load-more');
            const extraProducts = document.querySelectorAll('.extra-product');

            if (loadMoreBtn) {
                loadMoreBtn.addEventListener('click', () => {
                    extraProducts.forEach((card) => {
                        card.classList.remove('hidden');
                    });

                    animate(".extra-product", {
                        opacity: [0, 1],
                        y: [40, 0],
                        scale: [0.96, 1]
                    }, {
                        duration: 1.8,
                        delay: stagger(0.2),
                        easing: smoothEase
                    });

                    animate(productLoadMoreWrapper, {
                        opacity: [1, 0],
                        y: [0, 20]
                    }, {
                        duration: 0.5,
                        easing: smoothEase
                    }).finished.then(() => {
                        productLoadMoreWrapper.classList.add('hidden');
                    });
                });
            }

            // 5. FAQ Section Entrance & Accordion
            inView("#faq-left", () => {
                animate("#faq-left", {
                    opacity: [0, 1],
                    x: [-40, 0]
                }, {
                    duration: 2.0,
                    easing: smoothEase
                });
                animate("#faq-img", {
                    opacity: [0, 1],
                    scale: [0.93, 1],
                    y: [30, 0]
                }, {
                    duration: 2.0,
                    delay: 0.2,
                    easing: smoothEase
                });
            }, inViewConfig);

            inView("#faq-accordion-list", () => {
                animate(".faq-accordion-item", {
                    opacity: [0, 1],
                    x: [40, 0]
                }, {
                    duration: 2.0,
                    delay: stagger(0.15),
                    easing: smoothEase
                });
            }, inViewConfig);

            // FAQ Accordion Toggle Event Listeners
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

            // 6. CTA Section Entrance
            inView("#contact", () => {
                animate("#cta-card-wrapper", {
                    opacity: [0, 1],
                    y: [50, 0],
                    scale: [0.95, 1]
                }, {
                    duration: 2.0,
                    easing: smoothEase
                });
            }, inViewConfig);
        }

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', initAiPageMotion);
        } else {
            initAiPageMotion();
        }
    </script>
@endsection

@extends('layouts.main')

@section('title', 'Solusi RFID & Pelacakan Aset - PT. SOLUSI REKATAMA PERSADA')

@section('content')
    <!-- BEGIN: Hero Section RFID -->
    <header id="rfid-hero"
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
                Transformasi Manajemen Aset dengan <span class="text-blue-srp">Teknologi RFID</span>
            </h1>

            <!-- Deskripsi -->
            <p id="hero-desc"
                class="font-sans text-lg md:text-xl text-[#666666] max-w-2xl leading-relaxed opacity-0 transform">
                Otomatisasi identifikasi, lacak keberadaan inventaris secara real-time, dan tingkatkan akurasi stok hingga
                99.9% menggunakan perangkat keras & sistem RFID tingkat industri.
            </p>

        </div>
    </header>
    <!-- END: Hero Section RFID -->

    <!-- BEGIN: RFID Products Section -->
    <section class="py-20 md:py-28 bg-white border-b border-border-subtle overflow-hidden" id="rfid-products">
        <div class="max-w-[1280px] mx-auto px-6 md:px-16">

            <!-- Section Header -->
            <div id="rfid-products-header" class="text-center mb-16 opacity-0 transform">
                <span class="font-mono text-xs font-semibold text-blue-srp uppercase tracking-wider block mb-3">
                    KATALOG PERANGKAT HARDWARE
                </span>
                <h2 class="font-sans text-3xl md:text-4xl lg:text-5xl font-bold text-[#171b29] tracking-tight mb-4">
                    Solusi Perangkat RFID Unggulan
                </h2>
                <p class="font-sans text-base md:text-lg text-gray-600 max-w-2xl mx-auto leading-relaxed">
                    Rangkaian pembaca (reader), tag, dan terminal genggam standar industri yang dirancang untuk performa
                    pembacaan jarak jauh dan lingkungan ekstrem.
                </p>
            </div>

            <!-- Product Cards List -->
            <div id="rfid-products-list" class="flex flex-col gap-10 max-w-5xl mx-auto">

                <!-- Card 1: Fixed RFID Readers (Standard Layout) -->
                <div
                    class="rfid-product-card w-full bg-white rounded-2xl border border-border-subtle shadow-sm hover:shadow-xl hover:-translate-y-1.5 hover:border-blue-srp/30 transition-all duration-500 overflow-hidden flex flex-col md:flex-row items-stretch opacity-0 transform">
                    <div class="w-full md:w-1/2 h-64 md:h-auto relative overflow-hidden bg-surface-muted group">
                        <img src="{{ asset('images/produk/rfid/mobile-computers.jpg') }}" alt="Fixed RFID Reader Industri"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    </div>
                    <div class="w-full md:w-1/2 p-8 md:p-12 flex flex-col justify-center">
                        <div class="mb-6">
                            <span
                                class="text-blue-srp font-mono text-xs font-bold uppercase tracking-widest mb-2 block">Fixed
                                Infrastructure</span>
                            <h3 class="font-sans text-2xl font-bold text-[#171b29] mb-3">Fixed RFID Readers</h3>
                            <p class="font-sans text-sm text-gray-600 leading-relaxed">
                                Pembaca RFID multikanal berperforma tinggi untuk gerbang masuk/keluar gudang, conveyor belt,
                                dan pemantauan kontainer otomatis.
                            </p>
                        </div>
                        <div class="grid grid-cols-2 gap-4 mb-8">
                            <div class="border-l-2 border-blue-srp/30 pl-3">
                                <span
                                    class="block text-[10px] font-bold text-gray-400 uppercase tracking-wider">Frekuensi</span>
                                <span class="text-sm font-semibold text-[#171b29]">UHF 860-960 MHz</span>
                            </div>
                            <div class="border-l-2 border-blue-srp/30 pl-3">
                                <span
                                    class="block text-[10px] font-bold text-gray-400 uppercase tracking-wider">Interface</span>
                                <span class="text-sm font-semibold text-[#171b29]">Ethernet / RS232 / GPIO</span>
                            </div>
                        </div>
                        <a href="{{ route('products.show') }}"
                            class="mt-auto inline-flex items-center text-blue-srp font-sans font-bold text-sm hover:underline group">
                            Lihat Detail Produk <span
                                class="material-symbols-outlined ml-1 text-base transition-transform group-hover:translate-x-1">arrow_forward</span>
                        </a>
                    </div>
                </div>

                <!-- Card 2: Handheld Mobile Terminal (Reverse Layout) -->
                <div
                    class="rfid-product-card w-full bg-white rounded-2xl border border-border-subtle shadow-sm hover:shadow-xl hover:-translate-y-1.5 hover:border-blue-srp/30 transition-all duration-500 overflow-hidden flex flex-col md:flex-row-reverse items-stretch opacity-0 transform">
                    <div class="w-full md:w-1/2 h-64 md:h-auto relative overflow-hidden bg-surface-muted group">
                        <img src="{{ asset('images/produk/rfid/biometric.jpg') }}" alt="Handheld RFID Reader Chainway"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    </div>
                    <div class="w-full md:w-1/2 p-8 md:p-12 flex flex-col justify-center">
                        <div class="mb-6">
                            <span
                                class="text-blue-srp font-mono text-xs font-bold uppercase tracking-widest mb-2 block">Mobile
                                Mobility</span>
                            <h3 class="font-sans text-2xl font-bold text-[#171b29] mb-3">Handheld RFID Mobile Computer</h3>
                            <p class="font-sans text-sm text-gray-600 leading-relaxed">
                                Terminal portabel berbasis Android yang tangguh untuk stock opname cepat, verifikasi tiket,
                                dan audit aset bergerak di lapangan.
                            </p>
                        </div>
                        <div class="grid grid-cols-2 gap-4 mb-8">
                            <div class="border-l-2 border-blue-srp/30 pl-3">
                                <span class="block text-[10px] font-bold text-gray-400 uppercase tracking-wider">Jarak
                                    Baca</span>
                                <span class="text-sm font-semibold text-[#171b29]">Hingga 15 Meter</span>
                            </div>
                            <div class="border-l-2 border-blue-srp/30 pl-3">
                                <span
                                    class="block text-[10px] font-bold text-gray-400 uppercase tracking-wider">Ketahanan</span>
                                <span class="text-sm font-semibold text-[#171b29]">IP65 / IP67 Standard</span>
                            </div>
                        </div>
                        <a href="{{ route('products.show') }}"
                            class="mt-auto inline-flex items-center text-blue-srp font-sans font-bold text-sm hover:underline group">
                            Lihat Detail Produk <span
                                class="material-symbols-outlined ml-1 text-base transition-transform group-hover:translate-x-1">arrow_forward</span>
                        </a>
                    </div>
                </div>

                <!-- Card 3: Specialized RFID Tags (Standard Layout) -->
                <div
                    class="rfid-product-card w-full bg-white rounded-2xl border border-border-subtle shadow-sm hover:shadow-xl hover:-translate-y-1.5 hover:border-blue-srp/30 transition-all duration-500 overflow-hidden flex flex-col md:flex-row items-stretch opacity-0 transform">
                    <div class="w-full md:w-1/2 h-64 md:h-auto relative overflow-hidden bg-surface-muted group">
                        <img src="{{ asset('images/produk/rfid/bluetooth-rfid.jpg') }}" alt="Industrial RFID Tags"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    </div>
                    <div class="w-full md:w-1/2 p-8 md:p-12 flex flex-col justify-center">
                        <div class="mb-6">
                            <span
                                class="text-blue-srp font-mono text-xs font-bold uppercase tracking-widest mb-2 block">Transponder
                                & Label</span>
                            <h3 class="font-sans text-2xl font-bold text-[#171b29] mb-3">Industrial RFID Tags & Inlays</h3>
                            <p class="font-sans text-sm text-gray-600 leading-relaxed">
                                Varian tag khusus tahan panas, anti-logam (On-Metal Tag), tag pakaian/laundry, serta stiker
                                label yang dikustomisasi untuk beragam permukaan aset.
                            </p>
                        </div>
                        <div class="grid grid-cols-2 gap-4 mb-8">
                            <div class="border-l-2 border-blue-srp/30 pl-3">
                                <span
                                    class="block text-[10px] font-bold text-gray-400 uppercase tracking-wider">Material</span>
                                <span class="text-sm font-semibold text-[#171b29]">On-Metal / PCB / PET / Silicone</span>
                            </div>
                            <div class="border-l-2 border-blue-srp/30 pl-3">
                                <span class="block text-[10px] font-bold text-gray-400 uppercase tracking-wider">Suhu
                                    Operasional</span>
                                <span class="text-sm font-semibold text-[#171b29]">Tahan Hingga 200°C</span>
                            </div>
                        </div>
                        <a href="{{ route('products.show') }}"
                            class="mt-auto inline-flex items-center text-blue-srp font-sans font-bold text-sm hover:underline group">
                            Lihat Detail Produk <span
                                class="material-symbols-outlined ml-1 text-base transition-transform group-hover:translate-x-1">arrow_forward</span>
                        </a>
                    </div>
                </div>

                <!-- Card 4: Bluetooth & Desktop Readers (Reverse Layout) -->
                <div
                    class="rfid-product-card w-full bg-white rounded-2xl border border-border-subtle shadow-sm hover:shadow-xl hover:-translate-y-1.5 hover:border-blue-srp/30 transition-all duration-500 overflow-hidden flex flex-col md:flex-row-reverse items-stretch opacity-0 transform">
                    <div class="w-full md:w-1/2 h-64 md:h-auto relative overflow-hidden bg-surface-muted group">
                        <img src="{{ asset('images/produk/rfid/fixed-rfid-readers.jpg') }}" alt="Desktop & Sled RFID Reader"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    </div>
                    <div class="w-full md:w-1/2 p-8 md:p-12 flex flex-col justify-center">
                        <div class="mb-6">
                            <span
                                class="text-blue-srp font-mono text-xs font-bold uppercase tracking-widest mb-2 block">Desktop
                                & Sled Readers</span>
                            <h3 class="font-sans text-2xl font-bold text-[#171b29] mb-3">Desktop & Bluetooth RFID Readers
                            </h3>
                            <p class="font-sans text-sm text-gray-600 leading-relaxed">
                                Modul pembaca RFID meja untuk kasir/POS, pendaftaran kartu anggota, serta pembaca portabel
                                bertipe *sled* yang mudah dihubungkan ke smartphone via Bluetooth.
                            </p>
                        </div>
                        <div class="grid grid-cols-2 gap-4 mb-8">
                            <div class="border-l-2 border-blue-srp/30 pl-3">
                                <span
                                    class="block text-[10px] font-bold text-gray-400 uppercase tracking-wider">Konektivitas</span>
                                <span class="text-sm font-semibold text-[#171b29]">USB HID / Bluetooth 5.0</span>
                            </div>
                            <div class="border-l-2 border-blue-srp/30 pl-3">
                                <span
                                    class="block text-[10px] font-bold text-gray-400 uppercase tracking-wider">Kesesuaian</span>
                                <span class="text-sm font-semibold text-[#171b29]">ISO 18000-6C / EPC C1G2</span>
                            </div>
                        </div>
                        <a href="{{ route('products.show') }}"
                            class="mt-auto inline-flex items-center text-blue-srp font-sans font-bold text-sm hover:underline group">
                            Lihat Detail Produk <span
                                class="material-symbols-outlined ml-1 text-base transition-transform group-hover:translate-x-1">arrow_forward</span>
                        </a>
                    </div>
                </div>

                <!-- ADDITIONAL HIDDEN PRODUCTS (LOAD MORE TARGETS) -->

                <!-- Card 5: RFID Smart Gate (Standard Layout) -->
                <div
                    class="rfid-product-card extra-product hidden w-full bg-white rounded-2xl border border-border-subtle shadow-sm hover:shadow-xl hover:-translate-y-1.5 hover:border-blue-srp/30 transition-all duration-500 overflow-hidden flex flex-col md:flex-row items-stretch opacity-0 transform">
                    <div class="w-full md:w-1/2 h-64 md:h-auto relative overflow-hidden bg-surface-muted group">
                        <img src="{{ asset('images/produk/rfid/industrial-tablets.jpg') }}" alt="RFID Smart Portal Gate"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    </div>
                    <div class="w-full md:w-1/2 p-8 md:p-12 flex flex-col justify-center">
                        <div class="mb-6">
                            <span
                                class="text-blue-srp font-mono text-xs font-bold uppercase tracking-widest mb-2 block">Gate
                                Automation</span>
                            <h3 class="font-sans text-2xl font-bold text-[#171b29] mb-3">RFID Smart Portal Gate</h3>
                            <p class="font-sans text-sm text-gray-600 leading-relaxed">
                                Gerbang pembaca otomatis terintegrasi dengan sensor infrared dan indikator alarm untuk
                                pemantauan alur masuk/keluar barang di area dock gudang.
                            </p>
                        </div>
                        <div class="grid grid-cols-2 gap-4 mb-8">
                            <div class="border-l-2 border-blue-srp/30 pl-3">
                                <span
                                    class="block text-[10px] font-bold text-gray-400 uppercase tracking-wider">Antena</span>
                                <span class="text-sm font-semibold text-[#171b29]">4-Channel High Gain</span>
                            </div>
                            <div class="border-l-2 border-blue-srp/30 pl-3">
                                <span
                                    class="block text-[10px] font-bold text-gray-400 uppercase tracking-wider">Fitur</span>
                                <span class="text-sm font-semibold text-[#171b29]">Directional Detection</span>
                            </div>
                        </div>
                        <a href="{{ route('products.show') }}"
                            class="mt-auto inline-flex items-center text-blue-srp font-sans font-bold text-sm hover:underline group">
                            Lihat Detail Produk <span
                                class="material-symbols-outlined ml-1 text-base transition-transform group-hover:translate-x-1">arrow_forward</span>
                        </a>
                    </div>
                </div>

                <!-- Card 6: RFID Smart Cabinet (Reverse Layout) -->
                <div
                    class="rfid-product-card extra-product hidden w-full bg-white rounded-2xl border border-border-subtle shadow-sm hover:shadow-xl hover:-translate-y-1.5 hover:border-blue-srp/30 transition-all duration-500 overflow-hidden flex flex-col md:flex-row-reverse items-stretch opacity-0 transform">
                    <div class="w-full md:w-1/2 h-64 md:h-auto relative overflow-hidden bg-surface-muted group">
                        <img src="{{ asset('images/produk/rfid/printer.jpg') }}" alt="RFID Smart Cabinet System"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    </div>
                    <div class="w-full md:w-1/2 p-8 md:p-12 flex flex-col justify-center">
                        <div class="mb-6">
                            <span
                                class="text-blue-srp font-mono text-xs font-bold uppercase tracking-widest mb-2 block">Storage
                                System</span>
                            <h3 class="font-sans text-2xl font-bold text-[#171b29] mb-3">RFID Smart Storage Cabinet</h3>
                            <p class="font-sans text-sm text-gray-600 leading-relaxed">
                                Lemari penyimpanan cerdas berbasis RFID untuk melacak peminjaman dokumen penting, perkakas
                                medis, dan alat bernilai tinggi secara akurat.
                            </p>
                        </div>
                        <div class="grid grid-cols-2 gap-4 mb-8">
                            <div class="border-l-2 border-blue-srp/30 pl-3">
                                <span
                                    class="block text-[10px] font-bold text-gray-400 uppercase tracking-wider">Autentikasi</span>
                                <span class="text-sm font-semibold text-[#171b29]">Fingerprint / Face ID</span>
                            </div>
                            <div class="border-l-2 border-blue-srp/30 pl-3">
                                <span class="block text-[10px] font-bold text-gray-400 uppercase tracking-wider">Akurasi
                                    Stok</span>
                                <span class="text-sm font-semibold text-[#171b29]">100% Real-Time</span>
                            </div>
                        </div>
                        <a href="{{ route('products.show') }}"
                            class="mt-auto inline-flex items-center text-blue-srp font-sans font-bold text-sm hover:underline group">
                            Lihat Detail Produk <span
                                class="material-symbols-outlined ml-1 text-base transition-transform group-hover:translate-x-1">arrow_forward</span>
                        </a>
                    </div>
                </div>

            </div>

            <!-- LOAD MORE BUTTON SECTION (SESUAI STYLE PADA KODE ANDA) -->
            <div id="product-load-more" class="mt-16 flex justify-center opacity-0 transform">
                <button id="load-more-btn"
                    class="bg-yellow-srp hover:bg-yellow-200 text-[#374151] font-sans font-bold py-4 px-10 rounded-sm transition-all duration-300 shadow-sm uppercase tracking-wider text-sm hover:scale-105 transform cursor-pointer">
                    LOAD MORE
                </button>
            </div>

        </div>
    </section>
    <!-- END: RFID Products Section -->

    <!-- BEGIN: FAQ Section (Dark Theme) -->
    <section class="bg-black py-24 px-6 md:px-16 text-white overflow-hidden" id="faq">
        <div class="max-w-[1280px] mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 lg:gap-16">

            <!-- Left Column: Title & Image -->
            <div id="faq-left" class="flex flex-col opacity-0 transform">
                <span class="font-mono text-xs font-semibold uppercase tracking-widest mb-4 opacity-70 text-gray-400">
                    FAQ'S
                </span>
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-12 tracking-tight leading-tight text-white">
                    Pertanyaan Seputar Teknologi RFID
                </h2>

                <!-- Decorative Image -->
                <div id="faq-img"
                    class="mt-auto hidden md:block rounded-xl overflow-hidden shadow-2xl border border-white/10 aspect-w-16 aspect-h-9 opacity-0 transform">
                    <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&w=800&q=80"
                        alt="RFID Industrial Infrastructure"
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
                            Apa perbedaan utama antara RFID UHF dan Barcode?
                        </span>
                        <span
                            class="material-symbols-outlined faq-accordion-icon text-white transition-transform duration-300">
                            add
                        </span>
                    </button>
                    <div class="faq-accordion-content hidden pb-6 text-gray-300 leading-relaxed">
                        RFID UHF tidak memerlukan kontak visual (*line-of-sight*) dan mampu membaca ratusan tag secara
                        bersamaan (*bulk reading*) dalam hitungan detik dari jarak hingga belasan meter, berbeda dengan
                        barcode yang harus di-scan satu per satu.
                    </div>
                </div>

                <!-- Question 2 -->
                <div class="faq-accordion-item border-b border-white/20 opacity-0 transform">
                    <button
                        class="faq-accordion-toggle w-full py-6 flex items-center justify-between text-left group cursor-pointer focus:outline-none">
                        <span
                            class="text-lg md:text-xl font-bold text-white group-hover:text-blue-srp transition-colors pr-4">
                            Apakah tag RFID dapat ditempelkan pada material logam/besi?
                        </span>
                        <span
                            class="material-symbols-outlined faq-accordion-icon text-white transition-transform duration-300">
                            add
                        </span>
                    </button>
                    <div class="faq-accordion-content hidden pb-6 text-gray-300 leading-relaxed">
                        Bisa. Kami menyediakan varian *On-Metal RFID Tag* berspesifikasi khusus yang memiliki lapisan
                        anti-interferensi sehingga sinyal radio tetap optimal saat ditempelkan pada permukaan logam.
                    </div>
                </div>

                <!-- Question 3 -->
                <div class="faq-accordion-item border-b border-white/20 opacity-0 transform">
                    <button
                        class="faq-accordion-toggle w-full py-6 flex items-center justify-between text-left group cursor-pointer focus:outline-none">
                        <span
                            class="text-lg md:text-xl font-bold text-white group-hover:text-blue-srp transition-colors pr-4">
                            Apakah perangkat RFID PT SRP bisa diintegrasikan dengan ERP/WMS kami?
                        </span>
                        <span
                            class="material-symbols-outlined faq-accordion-icon text-white transition-transform duration-300">
                            add
                        </span>
                    </button>
                    <div class="faq-accordion-content hidden pb-6 text-gray-300 leading-relaxed">
                        Ya. Perangkat keras dan middleware RFID kami dilengkapi dengan SDK serta Open API yang siap
                        dihubungkan langsung ke sistem ERP (SAP, Oracle), WMS, atau basis data internal perusahaan Anda.
                    </div>
                </div>

                <!-- Question 4 -->
                <div class="faq-accordion-item border-b border-white/20 opacity-0 transform">
                    <button
                        class="faq-accordion-toggle w-full py-6 flex items-center justify-between text-left group cursor-pointer focus:outline-none">
                        <span
                            class="text-lg md:text-xl font-bold text-white group-hover:text-blue-srp transition-colors pr-4">
                            Bagaimana ketahanan tag RFID terhadap lingkungan pabrik ekstrem?
                        </span>
                        <span
                            class="material-symbols-outlined faq-accordion-icon text-white transition-transform duration-300">
                            add
                        </span>
                    </button>
                    <div class="faq-accordion-content hidden pb-6 text-gray-300 leading-relaxed">
                        Kami menyediakan pilihan tag RFID berkualifikasi industri (*Hard Tag*) dengan standar IP68 yang
                        tahan terhadap suhu tinggi, paparan bahan kimia, pencucian bertekanan, hingga benturan keras.
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
                <x-cta-card badge="KONSULTASI SOLUSI RFID"
                    title="Ingin Menerapkan Sistem Pelacakan RFID di Perusahaan Anda?"
                    description="Tim teknis kami siap membantu survei lokasi, pengujian keterbacaan tag, serta merancang skema integrasi RFID yang paling efisien untuk bisnis Anda."
                    buttonText="Mulai Konsultasi RFID" buttonLink="#contact" email="info@ptsrp.co.id"
                    imgRight="images/cta/cta-1.jpg" imgLeft="images/cta/cta-2.jpg" />
            </div>
        </div>
    </section>
    <!-- END: CTA Section -->

    <!-- SCRIPT: MOTION ONE ANIMATION SUITE & LOAD MORE FUNCTIONALITY -->
    <script>
        function initRfidPageMotion() {
            const motionLib = window.Motion;

            if (!motionLib) {
                setTimeout(initRfidPageMotion, 40);
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

            // 1. Hero Section Animations (2s Duration)
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
            inView("#rfid-products", () => {
                animate("#rfid-products-header", {
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

            // 3. Individual Product Card Animations (Triggered Per Card upon Scroll)
            const productCards = document.querySelectorAll('.rfid-product-card:not(.extra-product)');
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
                    // Reveal hidden products
                    extraProducts.forEach((card) => {
                        card.classList.remove('hidden');
                    });

                    // Animate newly revealed products with staggered Motion One transition
                    animate(".extra-product", {
                        opacity: [0, 1],
                        y: [40, 0],
                        scale: [0.96, 1]
                    }, {
                        duration: 1.8,
                        delay: stagger(0.2),
                        easing: smoothEase
                    });

                    // Hide the Load More button wrapper smoothly
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

            // 5. FAQ Section Entrance & Accordion (2s Duration)
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

            // 6. CTA Section Entrance (2s Duration)
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
            document.addEventListener('DOMContentLoaded', initRfidPageMotion);
        } else {
            initRfidPageMotion();
        }
    </script>
@endsection

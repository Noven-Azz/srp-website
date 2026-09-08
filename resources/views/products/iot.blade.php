@extends('layouts.main')

@section('title', 'Solusi Industrial IoT & Smart Factory - PT. SOLUSI REKATAMA PERSADA')

@section('content')
    <!-- BEGIN: Hero Section IoT -->
    <header id="iot-hero"
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
                Konektivitas & Monitoring Real-Time dengan <span class="text-blue-srp">Industrial IoT</span>
            </h1>

            <!-- Deskripsi -->
            <p id="hero-desc"
                class="font-sans text-lg md:text-xl text-[#666666] max-w-2xl leading-relaxed opacity-0 transform">
                Hubungkan seluruh mesin, sensor, dan sistem operasional pabrik Anda secara terpusat untuk mewujudkan
                visibilitas data *end-to-end* dan otomatisasi *Smart Factory*.
            </p>

        </div>
    </header>
    <!-- END: Hero Section IoT -->

    <!-- BEGIN: IoT Products Section -->
    <section class="py-20 md:py-28 bg-white border-b border-border-subtle overflow-hidden" id="iot-products">
        <div class="max-w-[1280px] mx-auto px-6 md:px-16">

            <!-- Section Header -->
            <div id="iot-products-header" class="text-center mb-16 opacity-0 transform">
                <span class="font-mono text-xs font-semibold text-blue-srp uppercase tracking-wider block mb-3">
                    KATALOG EKOSISTEM IOT INDUSTRI
                </span>
                <h2 class="font-sans text-3xl md:text-4xl lg:text-5xl font-bold text-[#171b29] tracking-tight mb-4">
                    Solusi Industrial IoT Unggulan
                </h2>
                <p class="font-sans text-base md:text-lg text-gray-600 max-w-2xl mx-auto leading-relaxed">
                    Perangkat gateway cerdas, node sensor industri, serta platform SCADA/IoT Dashboard untuk transformasi
                    digital operasional manufaktur.
                </p>
            </div>

            <!-- Product Cards List -->
            <div id="iot-products-list" class="flex flex-col gap-10 max-w-5xl mx-auto">

                <!-- Card 1: Industrial Smart Gateway (Standard Layout) -->
                <div
                    class="iot-product-card w-full bg-white rounded-2xl border border-border-subtle shadow-sm hover:shadow-xl hover:-translate-y-1.5 hover:border-blue-srp/30 transition-all duration-500 overflow-hidden flex flex-col md:flex-row items-stretch opacity-0 transform">
                    <div class="w-full md:w-1/2 h-64 md:h-auto relative overflow-hidden bg-surface-muted group">
                        <img src="{{ asset('images/produk/iot/iot-1.jpg') }}" alt="Industrial Smart Gateway"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    </div>
                    <div class="w-full md:w-1/2 p-8 md:p-12 flex flex-col justify-center">
                        <div class="mb-6">
                            <span
                                class="text-blue-srp font-mono text-xs font-bold uppercase tracking-widest mb-2 block">Data
                                Orchestration</span>
                            <h3 class="font-sans text-2xl font-bold text-[#171b29] mb-3">Industrial Smart Gateway</h3>
                            <p class="font-sans text-sm text-gray-600 leading-relaxed">
                                Gateway multi-protokol universal yang mendukung lebih dari 300 protokol industri untuk
                                integrasi data mesin ke Cloud atau server ERP/MES secara aman.
                            </p>
                        </div>
                        <div class="grid grid-cols-2 gap-4 mb-8">
                            <div class="border-l-2 border-blue-srp/30 pl-3">
                                <span
                                    class="block text-[10px] font-bold text-gray-400 uppercase tracking-wider">Protokol</span>
                                <span class="text-sm font-semibold text-[#171b29]">Modbus, OPC-UA, MQTT</span>
                            </div>
                            <div class="border-l-2 border-blue-srp/30 pl-3">
                                <span
                                    class="block text-[10px] font-bold text-gray-400 uppercase tracking-wider">Konektivitas</span>
                                <span class="text-sm font-semibold text-[#171b29]">4G/5G, Wi-Fi, Ethernet</span>
                            </div>
                        </div>
                        <a href="{{ route('products.iot') }}"
                            class="mt-auto inline-flex items-center text-blue-srp font-sans font-bold text-sm hover:underline group">
                            Lihat Detail Produk <span
                                class="material-symbols-outlined ml-1 text-base transition-transform group-hover:translate-x-1">arrow_forward</span>
                        </a>
                    </div>
                </div>

                <!-- Card 2: Wireless Industrial Sensor Node (Reverse Layout) -->
                <div
                    class="iot-product-card w-full bg-white rounded-2xl border border-border-subtle shadow-sm hover:shadow-xl hover:-translate-y-1.5 hover:border-blue-srp/30 transition-all duration-500 overflow-hidden flex flex-col md:flex-row-reverse items-stretch opacity-0 transform">
                    <div class="w-full md:w-1/2 h-64 md:h-auto relative overflow-hidden bg-surface-muted group">
                        <img src="{{ asset('images/produk/iot/iot-2.jpg') }}" alt="Wireless Industrial Sensor Node"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    </div>
                    <div class="w-full md:w-1/2 p-8 md:p-12 flex flex-col justify-center">
                        <div class="mb-6">
                            <span
                                class="text-blue-srp font-mono text-xs font-bold uppercase tracking-widest mb-2 block">Field
                                Telemetry</span>
                            <h3 class="font-sans text-2xl font-bold text-[#171b29] mb-3">Wireless Industrial Sensor Node
                            </h3>
                            <p class="font-sans text-sm text-gray-600 leading-relaxed">
                                Modul sensor nirkabel berdaya rendah untuk akuisisi data getaran, suhu, kelembaban, dan
                                tekanan air pada area pabrik yang sulit dijangkau kabel.
                            </p>
                        </div>
                        <div class="grid grid-cols-2 gap-4 mb-8">
                            <div class="border-l-2 border-blue-srp/30 pl-3">
                                <span
                                    class="block text-[10px] font-bold text-gray-400 uppercase tracking-wider">Sinyal</span>
                                <span class="text-sm font-semibold text-[#171b29]">LoRaWAN / NB-IoT</span>
                            </div>
                            <div class="border-l-2 border-blue-srp/30 pl-3">
                                <span
                                    class="block text-[10px] font-bold text-gray-400 uppercase tracking-wider">Proteksi</span>
                                <span class="text-sm font-semibold text-[#171b29]">IP68 Waterproof</span>
                            </div>
                        </div>
                        <a href="{{ route('products.iot') }}"
                            class="mt-auto inline-flex items-center text-blue-srp font-sans font-bold text-sm hover:underline group">
                            Lihat Detail Produk <span
                                class="material-symbols-outlined ml-1 text-base transition-transform group-hover:translate-x-1">arrow_forward</span>
                        </a>
                    </div>
                </div>

                <!-- Card 3: Smart Energy & Power Meter (Standard Layout) -->
                <div
                    class="iot-product-card w-full bg-white rounded-2xl border border-border-subtle shadow-sm hover:shadow-xl hover:-translate-y-1.5 hover:border-blue-srp/30 transition-all duration-500 overflow-hidden flex flex-col md:flex-row items-stretch opacity-0 transform">
                    <div class="w-full md:w-1/2 h-64 md:h-auto relative overflow-hidden bg-surface-muted group">
                        <img src="{{ asset('images/produk/iot/iot-3.jpg') }}" alt="Smart Energy Monitoring System"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    </div>
                    <div class="w-full md:w-1/2 p-8 md:p-12 flex flex-col justify-center">
                        <div class="mb-6">
                            <span
                                class="text-blue-srp font-mono text-xs font-bold uppercase tracking-widest mb-2 block">Energy
                                Efficiency</span>
                            <h3 class="font-sans text-2xl font-bold text-[#171b29] mb-3">IoT Smart Power Meter & Energy
                                System</h3>
                            <p class="font-sans text-sm text-gray-600 leading-relaxed">
                                Meteran listrik digital berbasis IoT untuk memantau konsumsi energi 3-fasa, beban puncak,
                                daya reaktif, dan jejak karbon operasional secara presisi.
                            </p>
                        </div>
                        <div class="grid grid-cols-2 gap-4 mb-8">
                            <div class="border-l-2 border-blue-srp/30 pl-3">
                                <span class="block text-[10px] font-bold text-gray-400 uppercase tracking-wider">Kelas
                                    Akurasi</span>
                                <span class="text-sm font-semibold text-[#171b29]">Class 0.5S Active Energy</span>
                            </div>
                            <div class="border-l-2 border-blue-srp/30 pl-3">
                                <span
                                    class="block text-[10px] font-bold text-gray-400 uppercase tracking-wider">Analisa</span>
                                <span class="text-sm font-semibold text-[#171b29]">THD & Harmonic Analysis</span>
                            </div>
                        </div>
                        <a href="{{ route('products.iot') }}"
                            class="mt-auto inline-flex items-center text-blue-srp font-sans font-bold text-sm hover:underline group">
                            Lihat Detail Produk <span
                                class="material-symbols-outlined ml-1 text-base transition-transform group-hover:translate-x-1">arrow_forward</span>
                        </a>
                    </div>
                </div>

                <!-- Card 4: Cloud & On-Premise IoT Dashboard (Reverse Layout) -->
                <div
                    class="iot-product-card w-full bg-white rounded-2xl border border-border-subtle shadow-sm hover:shadow-xl hover:-translate-y-1.5 hover:border-blue-srp/30 transition-all duration-500 overflow-hidden flex flex-col md:flex-row-reverse items-stretch opacity-0 transform">
                    <div class="w-full md:w-1/2 h-64 md:h-auto relative overflow-hidden bg-surface-muted group">
                        <img src="{{ asset('images/produk/iot/iot-4.jpg') }}" alt="IoT Operations Control Dashboard"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    </div>
                    <div class="w-full md:w-1/2 p-8 md:p-12 flex flex-col justify-center">
                        <div class="mb-6">
                            <span
                                class="text-blue-srp font-mono text-xs font-bold uppercase tracking-widest mb-2 block">Software
                                Platform</span>
                            <h3 class="font-sans text-2xl font-bold text-[#171b29] mb-3">IoT Operations Control Platform
                            </h3>
                            <p class="font-sans text-sm text-gray-600 leading-relaxed">
                                Platform visualisasi telemetry, manajemen perangkat (*device management*), pemberitahuan
                                *alarm*, dan pelaporan OEE terpusat yang fleksibel.
                            </p>
                        </div>
                        <div class="grid grid-cols-2 gap-4 mb-8">
                            <div class="border-l-2 border-blue-srp/30 pl-3">
                                <span
                                    class="block text-[10px] font-bold text-gray-400 uppercase tracking-wider">Deployment</span>
                                <span class="text-sm font-semibold text-[#171b29]">Cloud / On-Premise</span>
                            </div>
                            <div class="border-l-2 border-blue-srp/30 pl-3">
                                <span
                                    class="block text-[10px] font-bold text-gray-400 uppercase tracking-wider">Integrasi</span>
                                <span class="text-sm font-semibold text-[#171b29]">REST API & Webhooks</span>
                            </div>
                        </div>
                        <a href="{{ route('products.iot') }}"
                            class="mt-auto inline-flex items-center text-blue-srp font-sans font-bold text-sm hover:underline group">
                            Lihat Detail Produk <span
                                class="material-symbols-outlined ml-1 text-base transition-transform group-hover:translate-x-1">arrow_forward</span>
                        </a>
                    </div>
                </div>

                <!-- ADDITIONAL HIDDEN PRODUCTS (LOAD MORE TARGETS) -->

                <!-- Card 5: Remote I/O Expansion Module (Standard Layout) -->
                <div
                    class="iot-product-card extra-product hidden w-full bg-white rounded-2xl border border-border-subtle shadow-sm hover:shadow-xl hover:-translate-y-1.5 hover:border-blue-srp/30 transition-all duration-500 overflow-hidden flex flex-col md:flex-row items-stretch opacity-0 transform">
                    <div class="w-full md:w-1/2 h-64 md:h-auto relative overflow-hidden bg-surface-muted group">
                        <img src="{{ asset('images/produk/iot/iot-5.jpg') }}" alt="Industrial Remote I/O Module"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    </div>
                    <div class="w-full md:w-1/2 p-8 md:p-12 flex flex-col justify-center">
                        <div class="mb-6">
                            <span
                                class="text-blue-srp font-mono text-xs font-bold uppercase tracking-widest mb-2 block">Hardware
                                Expansion</span>
                            <h3 class="font-sans text-2xl font-bold text-[#171b29] mb-3">Industrial Remote I/O Module</h3>
                            <p class="font-sans text-sm text-gray-600 leading-relaxed">
                                Modul perpanjangan input/output digital dan analog terisolasi untuk menghubungkan sakelar
                                fisik, relay, dan transmiter instrumen ke jaringan IoT.
                            </p>
                        </div>
                        <div class="grid grid-cols-2 gap-4 mb-8">
                            <div class="border-l-2 border-blue-srp/30 pl-3">
                                <span class="block text-[10px] font-bold text-gray-400 uppercase tracking-wider">I/O
                                    Channels</span>
                                <span class="text-sm font-semibold text-[#171b29]">DI/DO, AI/AO Multi-Ch</span>
                            </div>
                            <div class="border-l-2 border-blue-srp/30 pl-3">
                                <span
                                    class="block text-[10px] font-bold text-gray-400 uppercase tracking-wider">Isolasi</span>
                                <span class="text-sm font-semibold text-[#171b29]">3000V DC Isolation</span>
                            </div>
                        </div>
                        <a href="{{ route('products.iot') }}"
                            class="mt-auto inline-flex items-center text-blue-srp font-sans font-bold text-sm hover:underline group">
                            Lihat Detail Produk <span
                                class="material-symbols-outlined ml-1 text-base transition-transform group-hover:translate-x-1">arrow_forward</span>
                        </a>
                    </div>
                </div>

                <!-- Card 6: Asset Environmental Tracker (Reverse Layout) -->
                <div
                    class="iot-product-card extra-product hidden w-full bg-white rounded-2xl border border-border-subtle shadow-sm hover:shadow-xl hover:-translate-y-1.5 hover:border-blue-srp/30 transition-all duration-500 overflow-hidden flex flex-col md:flex-row-reverse items-stretch opacity-0 transform">
                    <div class="w-full md:w-1/2 h-64 md:h-auto relative overflow-hidden bg-surface-muted group">
                        <img src="{{ asset('images/produk/iot/iot-6.jpg') }}" alt="IoT Asset & Cold Chain Tracker"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    </div>
                    <div class="w-full md:w-1/2 p-8 md:p-12 flex flex-col justify-center">
                        <div class="mb-6">
                            <span
                                class="text-blue-srp font-mono text-xs font-bold uppercase tracking-widest mb-2 block">Supply
                                Chain</span>
                            <h3 class="font-sans text-2xl font-bold text-[#171b29] mb-3">IoT Asset & Cold Chain Tracker
                            </h3>
                            <p class="font-sans text-sm text-gray-600 leading-relaxed">
                                Perangkat pelacak GPS dan kondisi lingkungan (suhu & guncangan) portabel untuk memastikan
                                integritas kargo selama pengiriman logistik.
                            </p>
                        </div>
                        <div class="grid grid-cols-2 gap-4 mb-8">
                            <div class="border-l-2 border-blue-srp/30 pl-3">
                                <span
                                    class="block text-[10px] font-bold text-gray-400 uppercase tracking-wider">Lokasi</span>
                                <span class="text-sm font-semibold text-[#171b29]">GPS / GNSS + LBS</span>
                            </div>
                            <div class="border-l-2 border-blue-srp/30 pl-3">
                                <span
                                    class="block text-[10px] font-bold text-gray-400 uppercase tracking-wider">Baterai</span>
                                <span class="text-sm font-semibold text-[#171b29]">Hingga 3 Tahun Masa Pakai</span>
                            </div>
                        </div>
                        <a href="{{ route('products.iot') }}"
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
    <!-- END: IoT Products Section -->

    <!-- BEGIN: FAQ Section (Dark Theme) -->
    <section class="bg-black py-24 px-6 md:px-16 text-white overflow-hidden" id="faq">
        <div class="max-w-[1280px] mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 lg:gap-16">

            <!-- Left Column: Title & Image -->
            <div id="faq-left" class="flex flex-col opacity-0 transform">
                <span class="font-mono text-xs font-semibold uppercase tracking-widest mb-4 opacity-70 text-gray-400">
                    FAQ'S
                </span>
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-12 tracking-tight leading-tight text-white">
                    Pertanyaan Seputar Solusi Industrial IoT
                </h2>

                <!-- Decorative Image -->
                <div id="faq-img"
                    class="mt-auto hidden md:block rounded-xl overflow-hidden shadow-2xl border border-white/10 aspect-w-16 aspect-h-9 opacity-0 transform">
                    <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=800&q=80"
                        alt="Industrial IoT Sensor Control Room"
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
                            Apakah solusi IoT PT. SRP dapat diintegrasikan dengan mesin lama (Legacy Machines)?
                        </span>
                        <span
                            class="material-symbols-outlined faq-accordion-icon text-white transition-transform duration-300">
                            add
                        </span>
                    </button>
                    <div class="faq-accordion-content hidden pb-6 text-gray-300 leading-relaxed">
                        Sangat bisa. Kami menyediakan berbagai instrumen Retrofit IoT, sensor eksternal, serta modul Remote
                        I/O untuk mengambil parameter operasional dari mesin lama tanpa perlu mengubah sistem PLC atau
                        membatalkan garansi mesin tersebut.
                    </div>
                </div>

                <!-- Question 2 -->
                <div class="faq-accordion-item border-b border-white/20 opacity-0 transform">
                    <button
                        class="faq-accordion-toggle w-full py-6 flex items-center justify-between text-left group cursor-pointer focus:outline-none">
                        <span
                            class="text-lg md:text-xl font-bold text-white group-hover:text-blue-srp transition-colors pr-4">
                            Bagaimana dengan keamanan data (Cybersecurity) pada sistem IoT ini?
                        </span>
                        <span
                            class="material-symbols-outlined faq-accordion-icon text-white transition-transform duration-300">
                            add
                        </span>
                    </button>
                    <div class="faq-accordion-content hidden pb-6 text-gray-300 leading-relaxed">
                        Seluruh perangkat Smart Gateway kami menggunakan enkripsi data ujung-ke-ujung (TLS/SSL), otentikasi
                        X.509 certificate, firewall terintegrasi, serta opsi jaringan lokal terisolasi (*On-Premise*) untuk
                        melindungi infrastruktur kritikal Anda dari ancaman siber.
                    </div>
                </div>

                <!-- Question 3 -->
                <div class="faq-accordion-item border-b border-white/20 opacity-0 transform">
                    <button
                        class="faq-accordion-toggle w-full py-6 flex items-center justify-between text-left group cursor-pointer focus:outline-none">
                        <span
                            class="text-lg md:text-xl font-bold text-white group-hover:text-blue-srp transition-colors pr-4">
                            Apakah platform IoT SRP mendukung integrasi ke sistem ERP seperti SAP atau Odoo?
                        </span>
                        <span
                            class="material-symbols-outlined faq-accordion-icon text-white transition-transform duration-300">
                            add
                        </span>
                    </button>
                    <div class="faq-accordion-content hidden pb-6 text-gray-300 leading-relaxed">
                        Ya. Platform IoT Operations Control kami dilengkapi dengan RESTful API, GraphQL, serta penangan
                        pesan MQTT yang memudahkan pengiriman data produksi (misal: jumlah output, status downtime, dan
                        konsumsi energi) langsung ke sistem ERP/MES perusahaan.
                    </div>
                </div>

                <!-- Question 4 -->
                <div class="faq-accordion-item border-b border-white/20 opacity-0 transform">
                    <button
                        class="faq-accordion-toggle w-full py-6 flex items-center justify-between text-left group cursor-pointer focus:outline-none">
                        <span
                            class="text-lg md:text-xl font-bold text-white group-hover:text-blue-srp transition-colors pr-4">
                            Seberapa jauh jangkauan sensor nirkabel berbasis LoRaWAN di lingkungan pabrik?
                        </span>
                        <span
                            class="material-symbols-outlined faq-accordion-icon text-white transition-transform duration-300">
                            add
                        </span>
                    </button>
                    <div class="faq-accordion-content hidden pb-6 text-gray-300 leading-relaxed">
                        Teknologi LoRaWAN yang kami gunakan mampu menembus struktur beton dan logam industri dengan radius
                        jangkauan 1 hingga 3 km di dalam ruangan (*indoor industrial*), serta hingga 10 km untuk area luar
                        ruangan (*outdoor/mining*).
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
                <x-cta-card badge="KONSULTASI SOLUSI IOT" title="Siap Mengontrol Operasional Pabrik Secara Real-Time?"
                    description="Diskusikan arsitektur IoT dan kebutuhan otomatisasi fasilitas Anda. Tim System Architect kami siap merancang Proof of Concept (PoC) dan analisis efisiensi untuk bisnis Anda."
                    buttonText="Mulai Konsultasi IoT" buttonLink="#contact" email="info@ptsrp.co.id"
                    imgRight="images/cta/cta-1.jpg" imgLeft="images/cta/cta-2.jpg" />
            </div>
        </div>
    </section>
    <!-- END: CTA Section -->

    <!-- SCRIPT: MOTION ONE ANIMATION SUITE & LOAD MORE FUNCTIONALITY -->
    <script>
        function initIotPageMotion() {
            const motionLib = window.Motion;

            if (!motionLib) {
                setTimeout(initIotPageMotion, 40);
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
            inView("#iot-products", () => {
                animate("#iot-products-header", {
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
            const productCards = document.querySelectorAll('.iot-product-card:not(.extra-product)');
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
            document.addEventListener('DOMContentLoaded', initIotPageMotion);
        } else {
            initIotPageMotion();
        }
    </script>
@endsection

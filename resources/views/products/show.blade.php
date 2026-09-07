@extends('layouts.main')

@section('title', 'Industrial Smart Gateway - PT. SOLUSI REKATAMA PERSADA')

@section('content')
    <!-- BEGIN: Product Detail Hero Section (Zero-Gap Bottom) -->
    <section
        class="w-full bg-[#f8f9ff] flex flex-col justify-between items-center text-center pt-8 sm:pt-12 md:pt-14 pb-0 mb-0 relative overflow-hidden h-auto min-h-[calc(100vh-160px)] sm:min-h-[calc(100vh-350px)] lg:min-h-[calc(100vh-90px)] lg:justify-center"
        id="product-detail-hero">

        <!-- Ambient Decorative Background -->
        <div
            class="hero-orb absolute left-1/2 top-1/3 -translate-x-1/2 -translate-y-1/2 w-[100%] h-[80%] bg-blue-srp/5 rounded-full blur-3xl -z-10 pointer-events-none">
        </div>

        <!-- Upper Hero Content (Title, Description, CTA) -->
        <div class="max-w-4xl mx-auto px-6 flex flex-col items-center z-10 shrink-0 mb-6 md:mb-8">

            <!-- Title / Headline -->
            <h1 id="hero-title"
                class="font-sans text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold text-[#1a1f2c] mb-3 md:mb-4 tracking-tight leading-tight opacity-0 transform">
                Industrial Smart Gateway
            </h1>

            <!-- Description -->
            <p id="hero-desc"
                class="font-sans text-sm sm:text-base md:text-lg text-[#5a6474] mb-5 md:mb-6 max-w-2xl leading-relaxed opacity-0 transform">
                Universal connectivity hub supporting over 300 industrial protocols for seamless cloud integration and
                real-time data orchestration.
            </p>

            <!-- CTA Button -->
            <div id="hero-cta" class="flex justify-center opacity-0 transform">
                <a href="#contact"
                    class="px-7 py-3 bg-yellow-srp text-[#1a1f2c] font-sans font-bold text-sm md:text-base rounded-md hover:bg-yellow-400 transition-all shadow-md hover:shadow-lg hover:scale-105 active:scale-95 inline-block">
                    Free Consultation
                </a>
            </div>

        </div>

        <!-- Product Image Frame (Kunci Rapat 0 Gap) -->
        <div id="hero-image"
            class="w-full max-w-lg sm:max-w-xl md:max-w-2xl mx-auto px-4 sm:px-6 pt-0 md:pt-4 pb-0 mb-0 z-10 opacity-0 transform flex items-end justify-center overflow-hidden text-[0px] leading-none">
            <img src="{{ asset('images/detail-produk/mobile-computers/hero.png') }}"
                alt="Industrial Smart Gateway Hardware Device"
                class="w-full h-auto max-h-[40vh] sm:max-h-[45vh] lg:max-h-[50vh] object-contain object-bottom block align-bottom mx-auto drop-shadow-2xl p-0 m-0 border-0 outline-none">
        </div>

    </section>
    <!-- END: Product Detail Hero Section -->

    <!-- BEGIN: Terminal Features Section ("Limitless power in your hands") -->
    <section class="py-24 bg-white overflow-hidden border-b border-border-subtle" id="terminal-features">
        <div class="max-w-[1280px] mx-auto px-6 md:px-16 grid grid-cols-1 md:grid-cols-2 gap-12 lg:gap-16 items-center">

            <!-- Left Content: Text & Bullet Features -->
            <div id="features-left" class="space-y-6 opacity-0 transform">
                <span class="text-blue-srp font-mono text-xs font-semibold tracking-widest uppercase block">
                    SRP-X1 SMART TERMINAL
                </span>

                <h2
                    class="font-sans text-3xl md:text-4xl lg:text-5xl font-extrabold text-[#171b29] leading-tight tracking-tight">
                    Limitless power in your hands.
                </h2>

                <p class="font-sans text-base md:text-lg text-gray-600 leading-relaxed">
                    The SRP-X1 redefines industrial data collection. Powered by a high-performance scanning engine and a
                    ruggedized ergonomic design, it ensures you never miss a single barcode in the most demanding
                    environments.
                </p>

                <!-- Bullet Points List -->
                <ul class="space-y-4 pt-2">
                    <li class="feature-item flex items-center gap-4 text-[#171b29] font-sans font-medium text-base">
                        <span class="w-2.5 h-2.5 rounded-full bg-blue-srp shrink-0"></span>
                        <span>High-Precision 2D Scanning Engine</span>
                    </li>
                    <li class="feature-item flex items-center gap-4 text-[#171b29] font-sans font-medium text-base">
                        <span class="w-2.5 h-2.5 rounded-full bg-blue-srp shrink-0"></span>
                        <span>Ergonomic Pistol Grip for All-Day Use</span>
                    </li>
                    <li class="feature-item flex items-center gap-4 text-[#171b29] font-sans font-medium text-base">
                        <span class="w-2.5 h-2.5 rounded-full bg-blue-srp shrink-0"></span>
                        <span>IP67 Rated Rugged Construction</span>
                    </li>
                    <li class="feature-item flex items-center gap-4 text-[#171b29] font-sans font-medium text-base">
                        <span class="w-2.5 h-2.5 rounded-full bg-blue-srp shrink-0"></span>
                        <span>Long-Life Hot-Swappable Battery</span>
                    </li>
                </ul>
            </div>

            <!-- Right Content: Floating Image Frame Without Border -->
            <div id="features-right" class="relative flex justify-center items-center opacity-0 transform">
                <!-- Glowing Ambient Background Orb -->
                <div
                    class="feature-glow-orb absolute w-72 h-72 md:w-96 md:h-96 bg-blue-srp/15 rounded-full blur-3xl -z-10 pointer-events-none">
                </div>

                <!-- Floating Transparent Product Image -->
                <div id="floating-device" class="relative w-full max-w-md md:max-w-lg flex justify-center items-center p-4">
                    <img src="{{ asset('images/detail-produk/mobile-computers/model.png') }}"
                        alt="Industrial Handheld Scanner Close Up"
                        class="w-full h-auto max-h-[480px] object-contain drop-shadow-2xl">
                </div>
            </div>

        </div>
    </section>
    <!-- END: Terminal Features Section -->

    <!-- BEGIN: Fitur Unggulan SRP-X1 Section -->
    <section class="py-24 bg-surface-muted overflow-hidden border-b border-border-subtle" id="fitur-unggulan">
        <div class="max-w-[1280px] mx-auto px-6 md:px-16">

            <!-- Section Header -->
            <div id="fitur-header" class="text-center mb-20 opacity-0 transform">
                <h2 class="font-sans text-3xl md:text-4xl lg:text-5xl font-extrabold text-[#171b29] tracking-tight mb-4">
                    Fitur Unggulan SRP-X1
                </h2>
                <p class="font-sans text-base md:text-lg text-gray-600 max-w-2xl mx-auto leading-relaxed">
                    Didesain untuk performa maksimal di lingkungan industri yang menantang.
                </p>
            </div>

            <div class="space-y-28">

                <!-- Block 1: Text Left, Floating Image Right -->
                <div class="fitur-block flex flex-col md:flex-row items-center gap-12 md:gap-20 opacity-0 transform">
                    <div class="flex-1 space-y-6">
                        <div class="space-y-3">
                            <h3 class="font-sans text-2xl md:text-3xl lg:text-4xl font-bold text-[#171b29] tracking-tight">
                                Konektivitas 5G Terdepan
                            </h3>
                            <p class="font-sans text-base md:text-lg text-gray-600 leading-relaxed">
                                Mengintegrasikan teknologi seluler terbaru untuk transmisi data real-time tanpa hambatan di
                                seluruh fasilitas industri Anda.
                            </p>
                        </div>

                        <ul class="space-y-4 pt-2">
                            <li class="flex items-center gap-4 text-[#171b29] font-sans font-medium">
                                <span class="material-symbols-outlined text-blue-srp text-2xl">signal_cellular_alt</span>
                                <span>Ultra-Low Latency</span>
                            </li>
                            <li class="flex items-center gap-4 text-[#171b29] font-sans font-medium">
                                <span class="material-symbols-outlined text-blue-srp text-2xl">speed</span>
                                <span>High-Speed Data Transfer</span>
                            </li>
                            <li class="flex items-center gap-4 text-[#171b29] font-sans font-medium">
                                <span class="material-symbols-outlined text-blue-srp text-2xl">settings_input_antenna</span>
                                <span>Wide Coverage Range</span>
                            </li>
                        </ul>
                    </div>

                    <div class="flex-1 w-full flex justify-center items-center relative">
                        <div class="absolute w-72 h-72 bg-blue-srp/80 rounded-full blur-3xl -z-10 pointer-events-none">
                        </div>
                        <div id="float-block-1" class="relative w-full max-w-md flex justify-center items-center p-2">
                            <img src="{{ asset('images/detail-produk/mobile-computers/1.png') }}"
                                alt="Konektivitas 5G Terdepan"
                                class="w-full h-auto max-h-[420px] object-contain drop-shadow-2xl">
                        </div>
                    </div>
                </div>

                <!-- Block 2: Floating Image Left, Text Right -->
                <div
                    class="fitur-block flex flex-col md:flex-row-reverse items-center gap-12 md:gap-20 opacity-0 transform">
                    <div class="flex-1 space-y-6">
                        <div class="space-y-3">
                            <h3 class="font-sans text-2xl md:text-3xl lg:text-4xl font-bold text-[#171b29] tracking-tight">
                                Antarmuka Android Intuitif
                            </h3>
                            <p class="font-sans text-base md:text-lg text-gray-600 leading-relaxed">
                                Pengalaman pengguna yang familiar dengan kustomisasi khusus untuk efisiensi operasional.
                            </p>
                        </div>

                        <ul class="space-y-4 pt-2">
                            <li class="flex items-center gap-4 text-[#171b29] font-sans font-medium">
                                <span class="material-symbols-outlined text-blue-srp text-2xl">android</span>
                                <span>Android Enterprise OS</span>
                            </li>
                            <li class="flex items-center gap-4 text-[#171b29] font-sans font-medium">
                                <span class="material-symbols-outlined text-blue-srp text-2xl">shield</span>
                                <span>Advanced Security Management</span>
                            </li>
                            <li class="flex items-center gap-4 text-[#171b29] font-sans font-medium">
                                <span class="material-symbols-outlined text-blue-srp text-2xl">sync</span>
                                <span>Zero-Touch Deployment</span>
                            </li>
                        </ul>
                    </div>

                    <div class="flex-1 w-full flex justify-center items-center relative">
                        <div class="absolute w-72 h-72 bg-yellow-srp/80 rounded-full blur-3xl -z-10 pointer-events-none">
                        </div>
                        <div id="float-block-2" class="relative w-full max-w-md flex justify-center items-center p-2">
                            <img src="{{ asset('images/detail-produk/mobile-computers/2.png') }}"
                                alt="Antarmuka Android Intuitif"
                                class="w-full h-auto max-h-[420px] object-contain drop-shadow-2xl">
                        </div>
                    </div>
                </div>

                <!-- Block 3: Text Left, Floating Image Right -->
                <div class="fitur-block flex flex-col md:flex-row items-center gap-12 md:gap-20 opacity-0 transform">
                    <div class="flex-1 space-y-6">
                        <div class="space-y-3">
                            <h3 class="font-sans text-2xl md:text-3xl lg:text-4xl font-bold text-[#171b29] tracking-tight">
                                Ketahanan Militer
                            </h3>
                            <p class="font-sans text-base md:text-lg text-gray-600 leading-relaxed">
                                Desain tangguh dengan perlindungan terhadap debu, air, dan benturan ekstrim.
                            </p>
                        </div>

                        <ul class="space-y-4 pt-2">
                            <li class="flex items-center gap-4 text-[#171b29] font-sans font-semibold">
                                <span class="material-symbols-outlined text-blue-srp text-2xl">verified_user</span>
                                <span>IP67 - Tahan Debu & Air</span>
                            </li>
                            <li class="flex items-center gap-4 text-[#171b29] font-sans font-semibold">
                                <span class="material-symbols-outlined text-blue-srp text-2xl">security</span>
                                <span>MIL-STD-810G - Standar Militer</span>
                            </li>
                            <li class="flex items-center gap-4 text-[#171b29] font-sans font-semibold">
                                <span class="material-symbols-outlined text-blue-srp text-2xl">edgesensor_high</span>
                                <span>Anti-Shock & Drop Resistant</span>
                            </li>
                            <li class="flex items-center gap-4 text-[#171b29] font-sans font-semibold">
                                <span class="material-symbols-outlined text-blue-srp text-2xl">thermostat</span>
                                <span>Extreme Temperature Ready</span>
                            </li>
                        </ul>
                    </div>

                    <div class="flex-1 w-full flex justify-center items-center relative">
                        <div class="absolute w-72 h-72 bg-blue-srp/80 rounded-full blur-3xl -z-10 pointer-events-none">
                        </div>
                        <div id="float-block-3" class="relative w-full max-w-md flex justify-center items-center p-2">
                            <img src="{{ asset('images/detail-produk/mobile-computers/3.png') }}" alt="Ketahanan Militer"
                                class="w-full h-auto max-h-[420px] object-contain drop-shadow-2xl">
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- END: Fitur Unggulan SRP-X1 Section -->

    <!-- BEGIN: Why SRP-X1 Smart Terminal Section -->
    <section class="py-24 bg-blue-srp text-white overflow-hidden relative" id="why-srp-section">

        <!-- Ambient Background Glow Orbs -->
        <div
            class="why-srp-orb absolute -top-32 -right-32 w-96 h-96 bg-white/10 rounded-full blur-3xl pointer-events-none">
        </div>
        <div
            class="why-srp-orb absolute -bottom-32 -left-32 w-96 h-96 bg-yellow-srp/10 rounded-full blur-3xl pointer-events-none">
        </div>

        <div class="max-w-[1280px] mx-auto px-6 md:px-16 relative z-10">

            <!-- Section Header -->
            <div id="why-srp-header" class="text-center mb-16 opacity-0 transform">
                <h3 class="font-mono text-xs md:text-sm font-bold tracking-[0.25em] uppercase text-white/70 mb-3">
                    WHY SRP-X1 SMART TERMINAL?
                </h3>
            </div>

            <!-- Bento Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <!-- Card 1: Precision Control -->
                <div
                    class="why-card bg-white/10 border border-white/15 p-8 md:p-10 rounded-2xl hover:bg-white/20 hover:-translate-y-2 hover:border-yellow-srp/50 transition-all duration-500 opacity-0 transform flex flex-col justify-between group">
                    <div>
                        <div
                            class="w-14 h-14 bg-white/20 rounded-xl flex items-center justify-center mb-8 group-hover:scale-110 group-hover:bg-yellow-srp/20 transition-all duration-300">
                            <span
                                class="material-symbols-outlined text-white group-hover:text-yellow-srp text-3xl transition-colors">joystick</span>
                        </div>
                        <h4 class="font-sans text-xl md:text-2xl font-bold mb-4 text-white">Precision Control</h4>
                        <p class="font-sans text-white/80 leading-relaxed text-base">
                            High-precision joystick with haptic feedback and full-range analog triggers.
                        </p>
                    </div>
                </div>

                <!-- Card 2: 12h Playtime -->
                <div
                    class="why-card bg-white/10 border border-white/15 p-8 md:p-10 rounded-2xl hover:bg-white/20 hover:-translate-y-2 hover:border-yellow-srp/50 transition-all duration-500 opacity-0 transform flex flex-col justify-between group">
                    <div>
                        <div
                            class="w-14 h-14 bg-white/20 rounded-xl flex items-center justify-center mb-8 group-hover:scale-110 group-hover:bg-yellow-srp/20 transition-all duration-300">
                            <span
                                class="material-symbols-outlined text-white group-hover:text-yellow-srp text-3xl transition-colors">battery_charging_full</span>
                        </div>
                        <h4 class="font-sans text-xl md:text-2xl font-bold mb-4 text-white">12h Playtime</h4>
                        <p class="font-sans text-white/80 leading-relaxed text-base">
                            High-density battery with 45W fast charging. A full trip without plugging in.
                        </p>
                    </div>
                </div>

                <!-- Card 3: Extreme Speed -->
                <div
                    class="why-card bg-white/10 border border-white/15 p-8 md:p-10 rounded-2xl hover:bg-white/20 hover:-translate-y-2 hover:border-yellow-srp/50 transition-all duration-500 opacity-0 transform flex flex-col justify-between group">
                    <div>
                        <div
                            class="w-14 h-14 bg-white/20 rounded-xl flex items-center justify-center mb-8 group-hover:scale-110 group-hover:bg-yellow-srp/20 transition-all duration-300">
                            <span
                                class="material-symbols-outlined text-white group-hover:text-yellow-srp text-3xl transition-colors">bolt</span>
                        </div>
                        <h4 class="font-sans text-xl md:text-2xl font-bold mb-4 text-white">Extreme Speed</h4>
                        <p class="font-sans text-white/80 leading-relaxed text-base">
                            12-core CPU with dedicated GPU. Holds 60fps stable on AAA titles.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- END: Why SRP-X1 Smart Terminal Section -->

    <!-- BEGIN: Gallery Section (EVERY ANGLE. EVERY DETAIL.) -->
    <section class="py-24 bg-white overflow-hidden border-b border-border-subtle" id="gallery-section">
        <div class="max-w-[1280px] mx-auto px-6 md:px-16 flex flex-col items-center">

            <!-- Pill Label -->
            <div id="gallery-pill" class="mb-6 opacity-0 transform">
                <span
                    class="px-4 py-1.5 bg-[#171b29] text-white font-mono text-xs font-bold tracking-widest uppercase rounded-full">
                    GALLERY
                </span>
            </div>

            <!-- Headline -->
            <h2 id="gallery-title"
                class="font-sans text-3xl md:text-5xl lg:text-6xl font-extrabold text-[#171b29] text-center mb-6 tracking-tight uppercase opacity-0 transform">
                EVERY ANGLE. EVERY DETAIL.
            </h2>

            <!-- Sub-paragraph -->
            <p id="gallery-desc"
                class="font-sans text-base md:text-lg text-gray-600 text-center mb-12 max-w-2xl leading-relaxed opacity-0 transform">
                The SRP-X1 is precision-crafted for industrial-grade durability and performance. Explore every angle of our
                most versatile terminal yet.
            </p>

            <!-- 3D Focus Gallery Slider Wrapper -->
            <div id="gallery-slider-wrapper" class="w-full max-w-6xl mx-auto relative group opacity-0 transform px-4">

                <!-- Slide Track Container -->
                <div class="slider-container rounded-3xl overflow-visible py-8">
                    <div class="slider-track flex items-center transition-transform duration-700 ease-out"
                        id="gallery-track">

                        <!-- Slide 1 -->
                        <div
                            class="slide flex-[0_0_65%] md:flex-[0_0_60%] max-w-[65%] md:max-w-[60%] px-3 md:px-4 transition-all duration-700 transform cursor-pointer">
                            <img src="{{ asset('images/detail-produk/mobile-computers/galeri-1.jpg') }}"
                                alt="UHF RFID Scanner" class="w-full h-auto rounded-3xl shadow-2xl object-cover block">
                        </div>

                        <!-- Slide 2 (DEFAULT FIRST DISPLAY / CENTERED) -->
                        <div
                            class="slide flex-[0_0_65%] md:flex-[0_0_60%] max-w-[65%] md:max-w-[60%] px-3 md:px-4 transition-all duration-700 transform cursor-pointer">
                            <img src="{{ asset('images/detail-produk/mobile-computers/galeri-2.jpg') }}"
                                alt="UHF RFID Readers" class="w-full h-auto rounded-3xl shadow-2xl object-cover block">
                        </div>

                        <!-- Slide 3 -->
                        <div
                            class="slide flex-[0_0_65%] md:flex-[0_0_60%] max-w-[65%] md:max-w-[60%] px-3 md:px-4 transition-all duration-700 transform cursor-pointer">
                            <img src="{{ asset('images/detail-produk/mobile-computers/galeri-3.jpg') }}"
                                alt="Industrial Tablets" class="w-full h-auto rounded-3xl shadow-2xl object-cover block">
                        </div>

                    </div>
                </div>

                <!-- Navigation Arrow Buttons -->
                <button id="prev-btn" aria-label="Previous Slide"
                    class="absolute left-2 md:left-6 top-1/2 -translate-y-1/2 w-12 h-12 bg-black/70 text-white rounded-full flex items-center justify-center hover:bg-black/90 transition-all duration-300 z-40 opacity-0 group-hover:opacity-100 backdrop-blur-md shadow-xl hover:scale-110 active:scale-95">
                    <span class="material-symbols-outlined text-2xl">chevron_left</span>
                </button>
                <button id="next-btn" aria-label="Next Slide"
                    class="absolute right-2 md:right-6 top-1/2 -translate-y-1/2 w-12 h-12 bg-black/70 text-white rounded-full flex items-center justify-center hover:bg-black/90 transition-all duration-300 z-40 opacity-0 group-hover:opacity-100 backdrop-blur-md shadow-2xl hover:scale-110 active:scale-95">
                    <span class="material-symbols-outlined text-2xl">chevron_right</span>
                </button>

                <!-- Pagination Dots -->
                <div id="slider-dots" class="absolute -bottom-2 left-1/2 -translate-x-1/2 flex gap-3 z-40">
                    <button class="w-3 h-3 rounded-full bg-[#171b29] transition-all duration-300 shadow opacity-50"
                        data-index="0" aria-label="Slide 1"></button>
                    <button
                        class="w-3 h-3 rounded-full bg-[#171b29] transition-all duration-300 shadow opacity-100 scale-125"
                        data-index="1" aria-label="Slide 2"></button>
                    <button class="w-3 h-3 rounded-full bg-[#171b29] transition-all duration-300 shadow opacity-50"
                        data-index="2" aria-label="Slide 3"></button>
                </div>

            </div>

        </div>
    </section>
    <!-- END: Gallery Section -->

    <!-- BEGIN: FAQ Section (Interactive Accordion) -->
    <section class="py-24 bg-surface-muted overflow-hidden border-b border-border-subtle" id="faq-section">
        <div class="max-w-4xl mx-auto px-6 md:px-12">

            <!-- Section Header -->
            <div id="faq-header" class="text-center mb-16 opacity-0 transform">
                <span class="text-blue-srp font-mono text-xs font-bold tracking-[0.2em] uppercase block mb-3">
                    PERTANYAAN UMUM
                </span>
                <h2 class="font-sans text-3xl md:text-4xl lg:text-5xl font-extrabold text-[#171b29] tracking-tight mb-4">
                    Frequently Asked Questions
                </h2>
                <p class="font-sans text-base md:text-lg text-gray-600 max-w-xl mx-auto leading-relaxed">
                    Segala hal yang perlu Anda ketahui mengenai integrasi, lisensi, dan dukungan teknis SRP-X1.
                </p>
            </div>

            <!-- Accordion Container -->
            <div class="space-y-4" id="faq-accordion">

                <!-- FAQ Item 1 -->
                <div
                    class="faq-item bg-white border border-border-subtle rounded-2xl overflow-hidden shadow-sm transition-all duration-300 opacity-0 transform">
                    <button
                        class="faq-trigger w-full px-6 md:px-8 py-6 text-left flex justify-between items-center gap-4 hover:bg-gray-50/80 transition-colors">
                        <span class="font-sans font-bold text-lg md:text-xl text-[#171b29]">
                            Apakah SRP-X1 mendukung sistem ERP/WMS yang sudah kami gunakan?
                        </span>
                        <span
                            class="material-symbols-outlined text-blue-srp text-2xl transition-transform duration-300 shrink-0 icon-chevron">
                            expand_more
                        </span>
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-white">
                        <p
                            class="px-6 md:px-8 pb-6 font-sans text-base text-gray-600 leading-relaxed border-t border-gray-100 pt-4">
                            Ya, SRP-X1 dirancang universal dengan SDK terbuka dan dukungan langsung untuk REST API, MQTT,
                            Modbus, serta integrasi seamless ke platform ERP/WMS populer seperti SAP, Oracle, Microsoft
                            Dynamics, dan Odoo.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div
                    class="faq-item bg-white border border-border-subtle rounded-2xl overflow-hidden shadow-sm transition-all duration-300 opacity-0 transform">
                    <button
                        class="faq-trigger w-full px-6 md:px-8 py-6 text-left flex justify-between items-center gap-4 hover:bg-gray-50/80 transition-colors">
                        <span class="font-sans font-bold text-lg md:text-xl text-[#171b29]">
                            Seberapa tangguh SRP-X1 digunakan di lingkungan ekstrim?
                        </span>
                        <span
                            class="material-symbols-outlined text-blue-srp text-2xl transition-transform duration-300 shrink-0 icon-chevron">
                            expand_more
                        </span>
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-white">
                        <p
                            class="px-6 md:px-8 pb-6 font-sans text-base text-gray-600 leading-relaxed border-t border-gray-100 pt-4">
                            SRP-X1 telah tersertifikasi IP67 (tahan debu dan rendaman air hingga 1 meter) serta sertifikasi
                            standar militer MIL-STD-810G. Perangkat ini tahan jatuh dari ketinggian 1.8 meter ke beton dan
                            beroperasi normal pada suhu -20°C hingga 60°C.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div
                    class="faq-item bg-white border border-border-subtle rounded-2xl overflow-hidden shadow-sm transition-all duration-300 opacity-0 transform">
                    <button
                        class="faq-trigger w-full px-6 md:px-8 py-6 text-left flex justify-between items-center gap-4 hover:bg-gray-50/80 transition-colors">
                        <span class="font-sans font-bold text-lg md:text-xl text-[#171b29]">
                            Bagaimana sistem garansi dan purna jual dari PT. Solusi Rekatama Persada?
                        </span>
                        <span
                            class="material-symbols-outlined text-blue-srp text-2xl transition-transform duration-300 shrink-0 icon-chevron">
                            expand_more
                        </span>
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-white">
                        <p
                            class="px-6 md:px-8 pb-6 font-sans text-base text-gray-600 leading-relaxed border-t border-gray-100 pt-4">
                            Kami memberikan garansi resmi hardware selama 1 hingga 3 tahun (termasuk opsi Service Level
                            Agreement/SLA penggantian unit cepat). Tim teknis lokal kami siap memberikan bantuan integrasi
                            On-Site maupun Remote support.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div
                    class="faq-item bg-white border border-border-subtle rounded-2xl overflow-hidden shadow-sm transition-all duration-300 opacity-0 transform">
                    <button
                        class="faq-trigger w-full px-6 md:px-8 py-6 text-left flex justify-between items-center gap-4 hover:bg-gray-50/80 transition-colors">
                        <span class="font-sans font-bold text-lg md:text-xl text-[#171b29]">
                            Apakah tersedia unit sampel (Demo Unit) untuk pengujian lapangan?
                        </span>
                        <span
                            class="material-symbols-outlined text-blue-srp text-2xl transition-transform duration-300 shrink-0 icon-chevron">
                            expand_more
                        </span>
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-white">
                        <p
                            class="px-6 md:px-8 pb-6 font-sans text-base text-gray-600 leading-relaxed border-t border-gray-100 pt-4">
                            Tentu saja! Kami menyediakan program Proof of Concept (PoC) dan demo unit gratis untuk klien
                            enterprise yang ingin melakukan uji coba operasional secara langsung di lokasi pabrik atau
                            gudang Anda.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- END: FAQ Section -->

    <!-- BEGIN: CTA Section (Blade Component Reusable) -->
    <section class="py-24 px-6 md:px-16 bg-bg-light overflow-hidden" id="contact">
        <div class="max-w-[1280px] mx-auto">
            <div id="cta-card-wrapper" class="w-full opacity-0 transform">
                <x-cta-card badge="KONSULTASI SRP-X1 SMART TERMINAL"
                    title="Siap Mengoptimalkan Efisiensi Data Operasional Anda?"
                    description="Diskusikan kebutuhan integrasi terminal cerdas dengan tim teknis kami. Dapatkan penawaran khusus dan demo unit langsung di lokasi Anda."
                    buttonText="Hubungi Tim Sales Kami" buttonLink="#contact" email="info@ptsrp.co.id"
                    imgRight="images/cta/cta-1.jpg" imgLeft="images/cta/cta-2.jpg" />
            </div>
        </div>
    </section>
    <!-- END: CTA Section -->

    <!-- SCRIPT: MOTION ONE, FAQ ACCORDION & GALLERY SUITE -->
    <script>
        // --- FAQ Accordion Logic ---
        function initFaqAccordion() {
            const faqItems = document.querySelectorAll('.faq-item');

            faqItems.forEach((item) => {
                const trigger = item.querySelector('.faq-trigger');
                const content = item.querySelector('.faq-content');
                const chevron = item.querySelector('.icon-chevron');

                trigger.addEventListener('click', () => {
                    const isOpen = content.style.maxHeight && content.style.maxHeight !== '0px';

                    // Close all other accordion items
                    faqItems.forEach((otherItem) => {
                        const otherContent = otherItem.querySelector('.faq-content');
                        const otherChevron = otherItem.querySelector('.icon-chevron');
                        otherContent.style.maxHeight = '0px';
                        otherChevron.style.transform = 'rotate(0deg)';
                    });

                    // Toggle current item
                    if (!isOpen) {
                        content.style.maxHeight = content.scrollHeight + 'px';
                        chevron.style.transform = 'rotate(180deg)';
                    }
                });
            });
        }

        // --- 3D Focus Gallery Controller ---
        function initGallerySlider() {
            const track = document.getElementById('gallery-track');
            if (!track) return;

            const slides = Array.from(track.children);
            const nextBtn = document.getElementById('next-btn');
            const prevBtn = document.getElementById('prev-btn');
            const dotsContainer = document.getElementById('slider-dots');
            if (!dotsContainer) return;
            const dots = Array.from(dotsContainer.children);

            let currentIndex = 1; // Default gambar ke-2 (tengah)
            let autoPlayTimer = null;

            function updateSlider() {
                const isMobile = window.innerWidth < 768;
                const slideWidthPercent = isMobile ? 65 : 60;

                const centerOffset = (100 - slideWidthPercent) / 2;
                const offset = centerOffset - (currentIndex * slideWidthPercent);
                track.style.transform = `translateX(${offset}%)`;

                slides.forEach((slide, idx) => {
                    if (idx === currentIndex) {
                        slide.style.zIndex = "30";
                        slide.style.opacity = "1";
                        slide.style.transform = "scale(1.05)";
                        slide.style.filter = "none";
                    } else {
                        slide.style.zIndex = "10";
                        slide.style.opacity = "0.45";
                        slide.style.transform = "scale(0.88)";
                        slide.style.filter = "blur(0.5px)";
                    }
                });

                dots.forEach((dot, idx) => {
                    if (idx === currentIndex) {
                        dot.classList.add('opacity-100', 'scale-125', 'bg-blue-srp');
                        dot.classList.remove('opacity-50', 'bg-[#171b29]');
                    } else {
                        dot.classList.add('opacity-50', 'bg-[#171b29]');
                        dot.classList.remove('opacity-100', 'scale-125', 'bg-blue-srp');
                    }
                });
            }

            function nextSlide() {
                currentIndex = (currentIndex + 1) % slides.length;
                updateSlider();
            }

            function prevSlide() {
                currentIndex = (currentIndex - 1 + slides.length) % slides.length;
                updateSlider();
            }

            function startAutoPlay() {
                stopAutoPlay();
                autoPlayTimer = setInterval(nextSlide, 4500);
            }

            function stopAutoPlay() {
                if (autoPlayTimer) clearInterval(autoPlayTimer);
            }

            if (nextBtn) {
                nextBtn.addEventListener('click', () => {
                    nextSlide();
                    startAutoPlay();
                });
            }

            if (prevBtn) {
                prevBtn.addEventListener('click', () => {
                    prevSlide();
                    startAutoPlay();
                });
            }

            dots.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    currentIndex = index;
                    updateSlider();
                    startAutoPlay();
                });
            });

            slides.forEach((slide, index) => {
                slide.addEventListener('click', () => {
                    if (currentIndex !== index) {
                        currentIndex = index;
                        updateSlider();
                        startAutoPlay();
                    }
                });
            });

            const sliderWrapper = document.getElementById('gallery-slider-wrapper');
            if (sliderWrapper) {
                sliderWrapper.addEventListener('mouseenter', stopAutoPlay);
                sliderWrapper.addEventListener('mouseleave', startAutoPlay);
            }

            window.addEventListener('resize', updateSlider);

            updateSlider();
            startAutoPlay();
        }

        // --- Motion One Animation Initialization ---
        function initProductHeroMotion() {
            const motionLib = window.Motion;

            if (!motionLib) {
                setTimeout(initProductHeroMotion, 40);
                return;
            }

            const {
                animate,
                inView,
                stagger
            } = motionLib;
            const smoothEase = [0.16, 1, 0.3, 1];
            const inViewConfig = {
                margin: "0px 0px -15% 0px",
                amount: 0.25
            };

            // 1. Hero Section Ambient Pulse
            animate(".hero-orb", {
                scale: [1, 1.12, 1],
                opacity: [0.4, 0.7, 0.4]
            }, {
                duration: 7,
                repeat: Infinity,
                direction: "alternate",
                easing: "ease-in-out"
            });

            // Entrance Staggered Animation (Hero Section)
            animate("#hero-title", {
                opacity: [0, 1],
                y: [25, 0]
            }, {
                duration: 1.2,
                easing: smoothEase
            });
            animate("#hero-desc", {
                opacity: [0, 1],
                y: [20, 0]
            }, {
                duration: 1.2,
                delay: 0.12,
                easing: smoothEase
            });
            animate("#hero-cta", {
                opacity: [0, 1],
                y: [15, 0],
                scale: [0.95, 1]
            }, {
                duration: 1.2,
                delay: 0.24,
                easing: smoothEase
            });
            animate("#hero-image", {
                opacity: [0, 1],
                y: [30, 0],
                scale: [0.98, 1]
            }, {
                duration: 1.4,
                delay: 0.36,
                easing: smoothEase
            });

            // 2. Floating Animations untuk Terminal Features (Model Utama)
            animate("#floating-device", {
                y: [-12, 12, -12],
                rotate: [-1, 1, -1]
            }, {
                duration: 5.5,
                repeat: Infinity,
                easing: "ease-in-out"
            });

            animate(".feature-glow-orb", {
                scale: [0.9, 1.15, 0.9],
                opacity: [0.4, 0.7, 0.4]
            }, {
                duration: 6,
                repeat: Infinity,
                direction: "alternate",
                easing: "ease-in-out"
            });

            // 3. Gallery Section Scroll Reveal Animation
            inView("#gallery-section", () => {
                animate("#gallery-pill", {
                    opacity: [0, 1],
                    y: [20, 0]
                }, {
                    duration: 1.0,
                    easing: smoothEase
                });
                animate("#gallery-title", {
                    opacity: [0, 1],
                    y: [25, 0]
                }, {
                    duration: 1.2,
                    delay: 0.1,
                    easing: smoothEase
                });
                animate("#gallery-desc", {
                    opacity: [0, 1],
                    y: [20, 0]
                }, {
                    duration: 1.2,
                    delay: 0.2,
                    easing: smoothEase
                });
                animate("#gallery-slider-wrapper", {
                    opacity: [0, 1],
                    y: [35, 0],
                    scale: [0.97, 1]
                }, {
                    duration: 1.4,
                    delay: 0.3,
                    easing: smoothEase
                });
            }, inViewConfig);

            // 4. Floating Animations Khusus untuk 3 Blok Fitur Unggulan
            animate("#float-block-1", {
                y: [-10, 10, -10],
                x: [-6, 6, -6],
                rotate: [0, 2, 0]
            }, {
                duration: 4.8,
                repeat: Infinity,
                easing: "ease-in-out"
            });

            animate("#float-block-2", {
                y: [8, -12, 8],
                rotate: [-2.5, 2.5, -2.5]
            }, {
                duration: 6.2,
                repeat: Infinity,
                easing: "ease-in-out"
            });

            animate("#float-block-3", {
                y: [-14, 6, -14],
                scale: [0.98, 1.02, 0.98]
            }, {
                duration: 5.2,
                repeat: Infinity,
                easing: "ease-in-out"
            });

            // 5. Scroll Reveal Animations (Terminal Features Section)
            inView("#terminal-features", () => {
                animate("#features-left", {
                    opacity: [0, 1],
                    x: [-40, 0]
                }, {
                    duration: 1.6,
                    easing: smoothEase
                });
                animate(".feature-item", {
                    opacity: [0, 1],
                    x: [-20, 0]
                }, {
                    duration: 1.2,
                    delay: stagger(0.12, {
                        start: 0.3
                    }),
                    easing: smoothEase
                });
                animate("#features-right", {
                    opacity: [0, 1],
                    x: [40, 0],
                    scale: [0.95, 1]
                }, {
                    duration: 1.6,
                    delay: 0.2,
                    easing: smoothEase
                });
            }, inViewConfig);

            // 6. Scroll Reveal Animations (Fitur Unggulan Section)
            inView("#fitur-unggulan", () => {
                animate("#fitur-header", {
                    opacity: [0, 1],
                    y: [30, 0]
                }, {
                    duration: 1.4,
                    easing: smoothEase
                });

                const fiturBlocks = document.querySelectorAll('.fitur-block');
                fiturBlocks.forEach((block) => {
                    inView(block, () => {
                        animate(block, {
                            opacity: [0, 1],
                            y: [40, 0]
                        }, {
                            duration: 1.6,
                            easing: smoothEase
                        });
                    }, {
                        margin: "0px 0px -10% 0px",
                        amount: 0.2
                    });
                });
            }, inViewConfig);

            // 7. Scroll Reveal Animations (Why SRP-X1 Section)
            inView("#why-srp-section", () => {
                animate("#why-srp-header", {
                    opacity: [0, 1],
                    y: [25, 0]
                }, {
                    duration: 1.2,
                    easing: smoothEase
                });
                animate(".why-card", {
                    opacity: [0, 1],
                    y: [35, 0],
                    scale: [0.96, 1]
                }, {
                    duration: 1.4,
                    delay: stagger(0.15, {
                        start: 0.2
                    }),
                    easing: smoothEase
                });
            }, inViewConfig);

            // 8. FAQ Section Scroll Reveal Animation
            inView("#faq-section", () => {
                animate("#faq-header", {
                    opacity: [0, 1],
                    y: [25, 0]
                }, {
                    duration: 1.2,
                    easing: smoothEase
                });
                animate(".faq-item", {
                    opacity: [0, 1],
                    y: [20, 0]
                }, {
                    duration: 1.0,
                    delay: stagger(0.12, {
                        start: 0.2
                    }),
                    easing: smoothEase
                });
            }, inViewConfig);

            // 9. CTA Card Wrapper Scroll Reveal Animation
            inView("#contact", () => {
                animate("#cta-card-wrapper", {
                    opacity: [0, 1],
                    y: [30, 0],
                    scale: [0.98, 1]
                }, {
                    duration: 1.4,
                    easing: smoothEase
                });
            }, inViewConfig);
        }

        // Initialize script logic on DOM load
        function startScript() {
            initFaqAccordion();
            initGallerySlider();
            initProductHeroMotion();
        }

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', startScript);
        } else {
            startScript();
        }
    </script>
@endsection

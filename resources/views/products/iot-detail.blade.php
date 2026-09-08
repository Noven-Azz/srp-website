@extends('layouts.main')

@section('title', 'SenseCAP Indicator D1Pro - PT. SOLUSI REKATAMA PERSADA')

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
                SenseCAP Indicator D1Pro
            </h1>

            <!-- Description -->
            <p id="hero-desc"
                class="font-sans text-sm sm:text-base md:text-lg text-[#5a6474] mb-5 md:mb-6 max-w-2xl leading-relaxed opacity-0 transform">
                Platform IoT Layar Sentuh 4" berbasis Dual MCU (ESP32-S3 + RP2040) dengan integrasi sensor kualitas udara
                CO2/tVOC, konektivitas LoRa & Wi-Fi, serta arsitektur Fully Open-Source.
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
            <img src="{{ asset('images/detail-produk/sensecap-indicator/hero.png') }}"
                alt="SenseCAP Indicator D1Pro Hardware Device"
                class="w-full h-auto max-h-[40vh] sm:max-h-[45vh] lg:max-h-[50vh] object-contain object-bottom block align-bottom mx-auto drop-shadow-2xl p-0 m-0 border-0 outline-none">
        </div>

    </section>
    <!-- END: Product Detail Hero Section -->

    <!-- BEGIN: Terminal Features Section -->
    <section class="py-16 md:py-24 bg-white overflow-hidden border-b border-border-subtle" id="terminal-features">
        <div class="max-w-[1280px] mx-auto px-6 md:px-16 grid grid-cols-1 md:grid-cols-2 gap-12 lg:gap-16 items-center">

            <!-- Left Content: Text & Bullet Features -->
            <div id="features-left" class="space-y-6 opacity-0 transform">
                <span class="text-blue-srp font-mono text-xs font-semibold tracking-widest uppercase block">
                    OPEN SOURCE IOT DEVELOPMENT PLATFORM
                </span>

                <h2
                    class="font-sans text-3xl md:text-4xl lg:text-5xl font-extrabold text-[#171b29] leading-tight tracking-tight">
                    Pusat Kontrol & Monitoring Lingkungan Cerdas.
                </h2>

                <p class="font-sans text-base md:text-lg text-gray-600 leading-relaxed">
                    SenseCAP Indicator D1Pro menggabungkan layar sentuh kapasitif 3.95" dengan sensor lingkungan presisi
                    tinggi dan arsitektur Dual-MCU, memungkinkan pemrosesan grafik antarmuka sekaligus manajemen sensor
                    secara real-time.
                </p>

                <!-- Bullet Points List -->
                <ul class="space-y-4 pt-2">
                    <li class="feature-item flex items-center gap-4 text-[#171b29] font-sans font-medium text-base">
                        <span class="w-2.5 h-2.5 rounded-full bg-blue-srp shrink-0"></span>
                        <span>Dual MCU: ESP32-S3 (240MHz) & RP2040 Dual ARM Cortex-M0+</span>
                    </li>
                    <li class="feature-item flex items-center gap-4 text-[#171b29] font-sans font-medium text-base">
                        <span class="w-2.5 h-2.5 rounded-full bg-blue-srp shrink-0"></span>
                        <span>Built-in Sensor CO2 (SCD41) & TVOC (SGP40) + Sensor Suhu/Kelembapan Eksternal</span>
                    </li>
                    <li class="feature-item flex items-center gap-4 text-[#171b29] font-sans font-medium text-base">
                        <span class="w-2.5 h-2.5 rounded-full bg-blue-srp shrink-0"></span>
                        <span>Local LoRa Hub (Semtech SX1262) & Wi-Fi 2.4GHz / BLE 5.0</span>
                    </li>
                    <li class="feature-item flex items-center gap-4 text-[#171b29] font-sans font-medium text-base">
                        <span class="w-2.5 h-2.5 rounded-full bg-blue-srp shrink-0"></span>
                        <span>Ekspansi Fleksibel dengan Antarmuka Type-C & Grove (I2C & ADC)</span>
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
                    <img src="{{ asset('images/detail-produk/sensecap-indicator/model.png') }}"
                        alt="SenseCAP Indicator D1Pro Close Up View"
                        class="w-full h-auto max-h-[480px] object-contain drop-shadow-2xl">
                </div>
            </div>

        </div>
    </section>
    <!-- END: Terminal Features Section -->

    <!-- BEGIN: Fitur Unggulan SenseCAP Indicator D1Pro Section -->
    <section class="py-16 md:py-24 bg-surface-muted overflow-hidden border-b border-border-subtle" id="fitur-unggulan">
        <div class="max-w-[1280px] mx-auto px-6 md:px-16">

            <!-- Section Header -->
            <div id="fitur-header" class="text-center mb-16 md:mb-20 opacity-0 transform">
                <h2 class="font-sans text-3xl md:text-4xl lg:text-5xl font-extrabold text-[#171b29] tracking-tight mb-4">
                    Fitur Utama SenseCAP Indicator D1Pro
                </h2>
                <p class="font-sans text-base md:text-lg text-gray-600 max-w-2xl mx-auto leading-relaxed">
                    Perpaduan hardware mutakhir untuk solusi monitoring udara, IoT gateway lokal, dan prototyping cepat.
                </p>
            </div>

            <div class="space-y-16 md:space-y-28">

                <!-- Block 1: Text Left, Floating Image Right -->
                <div class="fitur-block flex flex-col md:flex-row items-center gap-8 md:gap-20 opacity-0 transform">
                    <div class="flex-1 space-y-6 w-full">
                        <div class="space-y-3">
                            <h3 class="font-sans text-2xl md:text-3xl lg:text-4xl font-bold text-[#171b29] tracking-tight">
                                Pemantauan Kualitas Udara Real-Time Presisi Tinggi
                            </h3>
                            <p class="font-sans text-base md:text-lg text-gray-600 leading-relaxed">
                                Dilengkapi sensor CO2 NDIR SCD41 internal dan sensor TVOC Sensirion SGP40, serta sensor
                                suhu/kelembapan Grove AHT20 eksternal untuk pemantauan kualitas udara dalam ruangan yang
                                akurat.
                            </p>
                        </div>

                        <ul class="space-y-4 pt-2">
                            <li class="flex items-center gap-4 text-[#171b29] font-sans font-medium">
                                <span class="material-symbols-outlined text-blue-srp text-2xl shrink-0">co2</span>
                                <span>Sensor CO2 SCD41 (Rentang 0-40.000 ppm)</span>
                            </li>
                            <li class="flex items-center gap-4 text-[#171b29] font-sans font-medium">
                                <span class="material-symbols-outlined text-blue-srp text-2xl shrink-0">air</span>
                                <span>Sensor TVOC SGP40 (1-500 VOC Index Points)</span>
                            </li>
                            <li class="flex items-center gap-4 text-[#171b29] font-sans font-medium">
                                <span class="material-symbols-outlined text-blue-srp text-2xl shrink-0">thermostat</span>
                                <span>Sensor Suhu & Kelembapan AHT20 Eksternal</span>
                            </li>
                        </ul>
                    </div>

                    <div class="flex-1 w-full flex justify-center items-center relative">
                        <div
                            class="absolute w-60 h-60 md:w-72 md:h-72 bg-blue-srp/20 rounded-full blur-3xl -z-10 pointer-events-none">
                        </div>
                        <div id="float-block-1" class="relative w-full max-w-md flex justify-center items-center p-2">
                            <img src="{{ asset('images/detail-produk/sensecap-indicator/1.png') }}"
                                alt="Air Quality Monitoring Sensors"
                                class="w-full h-auto max-h-[320px] md:max-h-[420px] object-contain drop-shadow-2xl">
                        </div>
                    </div>
                </div>

                <!-- Block 2: Floating Image Left, Text Right -->
                <div class="fitur-block flex flex-col md:flex-row-reverse items-center gap-8 md:gap-20 opacity-0 transform">
                    <div class="flex-1 space-y-6 w-full">
                        <div class="space-y-3">
                            <h3 class="font-sans text-2xl md:text-3xl lg:text-4xl font-bold text-[#171b29] tracking-tight">
                                Local LoRa Hub & Konektivitas Multi-Protokol
                            </h3>
                            <p class="font-sans text-base md:text-lg text-gray-600 leading-relaxed">
                                Terintegrasi dengan chip Semtech SX1262 LoRa, memungkinkan perangkat bertindak sebagai hub
                                lokal untuk menjembatani node sensor LoRa langsung ke Cloud via Wi-Fi tanpa gateway
                                tambahan.
                            </p>
                        </div>

                        <ul class="space-y-4 pt-2">
                            <li class="flex items-center gap-4 text-[#171b29] font-sans font-medium">
                                <span
                                    class="material-symbols-outlined text-blue-srp text-2xl shrink-0">settings_input_antenna</span>
                                <span>LoRa SX1262 (Jangkauan hingga 5 km)</span>
                            </li>
                            <li class="flex items-center gap-4 text-[#171b29] font-sans font-medium">
                                <span class="material-symbols-outlined text-blue-srp text-2xl shrink-0">wifi</span>
                                <span>Wi-Fi 802.11b/g/n & Bluetooth 5.0 LE</span>
                            </li>
                            <li class="flex items-center gap-4 text-[#171b29] font-sans font-medium">
                                <span class="material-symbols-outlined text-blue-srp text-2xl shrink-0">hub</span>
                                <span>Dukungan Protokol Matter & Cloud IoT</span>
                            </li>
                        </ul>
                    </div>

                    <div class="flex-1 w-full flex justify-center items-center relative">
                        <div
                            class="absolute w-60 h-60 md:w-72 md:h-72 bg-yellow-srp/20 rounded-full blur-3xl -z-10 pointer-events-none">
                        </div>
                        <div id="float-block-2" class="relative w-full max-w-md flex justify-center items-center p-2">
                            <img src="{{ asset('images/detail-produk/sensecap-indicator/2.png') }}"
                                alt="Local LoRa Hub & Connectivity"
                                class="w-full h-auto max-h-[320px] md:max-h-[420px] object-contain drop-shadow-2xl">
                        </div>
                    </div>
                </div>

                <!-- Block 3: Text Left, Floating Image Right -->
                <div class="fitur-block flex flex-col md:flex-row items-center gap-8 md:gap-20 opacity-0 transform">
                    <div class="flex-1 space-y-6 w-full">
                        <div class="space-y-3">
                            <h3 class="font-sans text-2xl md:text-3xl lg:text-4xl font-bold text-[#171b29] tracking-tight">
                                Ekosistem Open-Source & Layanan ODM Fusion
                            </h3>
                            <p class="font-sans text-base md:text-lg text-gray-600 leading-relaxed">
                                Memanfaatkan ekosistem open-source ESP32 dan Raspberry Pi (RP2040). Mendukung ekspansi
                                hingga >400 GPIO via Grove interface, slot MicroSD hingga 32GB, serta opsi kustomisasi
                                ODM/OEM cepat.
                            </p>
                        </div>

                        <ul class="space-y-4 pt-2">
                            <li class="flex items-center gap-4 text-[#171b29] font-sans font-semibold">
                                <span class="material-symbols-outlined text-blue-srp text-2xl shrink-0">code</span>
                                <span>Fully Open-Source (ESP-IDF, Arduino, MicroPython)</span>
                            </li>
                            <li class="flex items-center gap-4 text-[#171b29] font-sans font-semibold">
                                <span class="material-symbols-outlined text-blue-srp text-2xl shrink-0">sd_storage</span>
                                <span>Slot MicroSD Card (hingga 32GB) & Buzzer MLT-8530</span>
                            </li>
                            <li class="flex items-center gap-4 text-[#171b29] font-sans font-semibold">
                                <span
                                    class="material-symbols-outlined text-blue-srp text-2xl shrink-0">precision_manufacturing</span>
                                <span>Dukungan One-Stop Fusion ODM/OEM Customization</span>
                            </li>
                        </ul>
                    </div>

                    <div class="flex-1 w-full flex justify-center items-center relative">
                        <div
                            class="absolute w-60 h-60 md:w-72 md:h-72 bg-blue-srp/20 rounded-full blur-3xl -z-10 pointer-events-none">
                        </div>
                        <div id="float-block-3" class="relative w-full max-w-md flex justify-center items-center p-2">
                            <img src="{{ asset('images/detail-produk/sensecap-indicator/3.png') }}"
                                alt="Open Source Architecture & Expansion"
                                class="w-full h-auto max-h-[320px] md:max-h-[420px] object-contain drop-shadow-2xl">
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- END: Fitur Unggulan SenseCAP Indicator D1Pro Section -->

    <!-- BEGIN: Technical Specifications Table Section -->
    <section class="py-16 md:py-20 bg-white border-b border-border-subtle" id="tech-specs">
        <div class="max-w-[1280px] mx-auto px-6 md:px-16">
            <div class="text-center mb-12">
                <span class="text-blue-srp font-mono text-xs font-semibold tracking-widest uppercase block mb-2">
                    TECHNICAL DATA
                </span>
                <h2 class="font-sans text-3xl md:text-4xl font-extrabold text-[#171b29]">
                    Spesifikasi Teknis
                </h2>
            </div>

            <div
                class="max-w-4xl mx-auto overflow-x-auto bg-surface-muted rounded-2xl border border-border-subtle p-6 md:p-8 shadow-sm">
                <table class="w-full text-left font-sans text-sm md:text-base border-collapse">
                    <tbody>
                        <tr class="border-b border-gray-200">
                            <td class="py-3 px-4 font-bold text-[#171b29] w-1/3 min-w-[140px]">Layar</td>
                            <td class="py-3 px-4 text-gray-600">3.95 Inch, Capacitive RGB Touch Screen (480 x 480 pixels)
                            </td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="py-3 px-4 font-bold text-[#171b29]">Prosesor (Dual MCU)</td>
                            <td class="py-3 px-4 text-gray-600">
                                <strong>ESP32-S3:</strong> Xtensa dual-core 32-bit LX7 up to 240MHz<br>
                                <strong>RP2040:</strong> Dual ARM Cortex-M0+ up to 133MHz
                            </td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="py-3 px-4 font-bold text-[#171b29]">Memori Flash</td>
                            <td class="py-3 px-4 text-gray-600">ESP32-S3: 8MB | RP2040: 2MB</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="py-3 px-4 font-bold text-[#171b29]">Penyimpanan Eksternal</td>
                            <td class="py-3 px-4 text-gray-600">Mendukung Micro SD Card hingga 32GB</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="py-3 px-4 font-bold text-[#171b29]">Konektivitas Nirkabel</td>
                            <td class="py-3 px-4 text-gray-600">
                                Wi-Fi 802.11b/g/n 2.4GHz | Bluetooth 5.0 LE<br>
                                <strong>LoRa (SX1262):</strong> Max 21dBm, sensitivitas -136dBm@SF12, jangkauan s/d 5km
                            </td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="py-3 px-4 font-bold text-[#171b29]">Sensor CO2 (SCD41)</td>
                            <td class="py-3 px-4 text-gray-600">Rentang 0 - 40.000 ppm | Akurasi: 400 - 5.000 ppm ±(50ppm +
                                5% reading)</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="py-3 px-4 font-bold text-[#171b29]">Sensor TVOC (SGP40)</td>
                            <td class="py-3 px-4 text-gray-600">Rentang 1 - 500 VOC Index Points</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="py-3 px-4 font-bold text-[#171b29]">Sensor Suhu & Kelembapan</td>
                            <td class="py-3 px-4 text-gray-600">AHT20 Eksternal | Rentang: -40 ~ +85 °C (±0.3°C), 0 ~ 100%
                                RH (±2% RH)</td>
                        </tr>
                        <tr class="border-b border-gray-200">
                            <td class="py-3 px-4 font-bold text-[#171b29]">Catu Daya & Interface</td>
                            <td class="py-3 px-4 text-gray-600">5V DC / 1A (USB Type-C) | Port Grove (I2C & ADC)</td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 font-bold text-[#171b29]">Lainnya</td>
                            <td class="py-3 px-4 text-gray-600">Buzzer MLT-8530 (2700Hz) | Berat: 400 gram</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- END: Technical Specifications Table Section -->

    <!-- BEGIN: Why SenseCAP Indicator D1Pro Section -->
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
                    MENGAPA MEMILIH SENSECAP INDICATOR D1PRO?
                </h3>
            </div>

            <!-- Bento Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <!-- Card 1: Dual MCU Power -->
                <div
                    class="why-card bg-white/10 border border-white/15 p-8 md:p-10 rounded-2xl hover:bg-white/20 hover:-translate-y-2 hover:border-yellow-srp/50 transition-all duration-500 opacity-0 transform flex flex-col justify-between group">
                    <div>
                        <div
                            class="w-14 h-14 bg-white/20 rounded-xl flex items-center justify-center mb-8 group-hover:scale-110 group-hover:bg-yellow-srp/20 transition-all duration-300">
                            <span
                                class="material-symbols-outlined text-white group-hover:text-yellow-srp text-3xl transition-colors">memory</span>
                        </div>
                        <h4 class="font-sans text-xl md:text-2xl font-bold mb-4 text-white">Arsitektur Dual MCU</h4>
                        <p class="font-sans text-white/80 leading-relaxed text-base">
                            Pembagian beban komputasi terpisah antara grafik layar sentuh (ESP32-S3) dan pemrosesan I/O
                            sensor (RP2040) untuk performa optimal.
                        </p>
                    </div>
                </div>

                <!-- Card 2: All-in-One Environmental Sensing -->
                <div
                    class="why-card bg-white/10 border border-white/15 p-8 md:p-10 rounded-2xl hover:bg-white/20 hover:-translate-y-2 hover:border-yellow-srp/50 transition-all duration-500 opacity-0 transform flex flex-col justify-between group">
                    <div>
                        <div
                            class="w-14 h-14 bg-white/20 rounded-xl flex items-center justify-center mb-8 group-hover:scale-110 group-hover:bg-yellow-srp/20 transition-all duration-300">
                            <span
                                class="material-symbols-outlined text-white group-hover:text-yellow-srp text-3xl transition-colors">cloud_queue</span>
                        </div>
                        <h4 class="font-sans text-xl md:text-2xl font-bold mb-4 text-white">Sensor Lingkungan Lengkap</h4>
                        <p class="font-sans text-white/80 leading-relaxed text-base">
                            Sensor CO2, TVOC, Suhu, dan Kelembapan siap pakai tanpa perlu konfigurasi kabel tambahan yang
                            rumit.
                        </p>
                    </div>
                </div>

                <!-- Card 3: Standalone LoRa Hub -->
                <div
                    class="why-card bg-white/10 border border-white/15 p-8 md:p-10 rounded-2xl hover:bg-white/20 hover:-translate-y-2 hover:border-yellow-srp/50 transition-all duration-500 opacity-0 transform flex flex-col justify-between group">
                    <div>
                        <div
                            class="w-14 h-14 bg-white/20 rounded-xl flex items-center justify-center mb-8 group-hover:scale-110 group-hover:bg-yellow-srp/20 transition-all duration-300">
                            <span
                                class="material-symbols-outlined text-white group-hover:text-yellow-srp text-3xl transition-colors">router</span>
                        </div>
                        <h4 class="font-sans text-xl md:text-2xl font-bold mb-4 text-white">Direct LoRa-to-WiFi Bridge</h4>
                        <p class="font-sans text-white/80 leading-relaxed text-base">
                            Mentransmisikan data dari sensor LoRa langsung ke cloud melalui jaringan Wi-Fi lokal tanpa
                            memerlukan LoRa Gateway terpisah.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- END: Why SenseCAP Indicator D1Pro Section -->

    <!-- BEGIN: Gallery Section -->
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
                DETAIL HARDWARE & TAMPILAN
            </h2>

            <!-- Sub-paragraph -->
            <p id="gallery-desc"
                class="font-sans text-base md:text-lg text-gray-600 text-center mb-12 max-w-2xl leading-relaxed opacity-0 transform">
                Lihat dari dekat desain kompak, antarmuka layar sentuh 4 inci, serta port ekspansi SenseCAP Indicator D1Pro.
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
                            <img src="{{ asset('images/detail-produk/sensecap-indicator/galeri-1.jpg') }}"
                                alt="Layar Sentuh 4 Inch SenseCAP Indicator D1Pro"
                                class="w-full h-auto rounded-3xl shadow-2xl object-cover block">
                        </div>

                        <!-- Slide 2 (DEFAULT CENTERED) -->
                        <div
                            class="slide flex-[0_0_65%] md:flex-[0_0_60%] max-w-[65%] md:max-w-[60%] px-3 md:px-4 transition-all duration-700 transform cursor-pointer">
                            <img src="{{ asset('images/detail-produk/sensecap-indicator/galeri-2.jpg') }}"
                                alt="Port Grove & Interface USB Type-C"
                                class="w-full h-auto rounded-3xl shadow-2xl object-cover block">
                        </div>

                        <!-- Slide 3 -->
                        <div
                            class="slide flex-[0_0_65%] md:flex-[0_0_60%] max-w-[65%] md:max-w-[60%] px-3 md:px-4 transition-all duration-700 transform cursor-pointer">
                            <img src="{{ asset('images/detail-produk/sensecap-indicator/galeri-3.jpg') }}"
                                alt="Aplikasi Pemantauan Udara & LoRa Hub"
                                class="w-full h-auto rounded-3xl shadow-2xl object-cover block">
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

    <!-- BEGIN: FAQ Section -->
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
                    Informasi penting mengenai pemrograman, ekosistem sensor, dan garansi SenseCAP Indicator D1Pro.
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
                            Platform bahasa pemograman apa saja yang didukung oleh perangkat ini?
                        </span>
                        <span
                            class="material-symbols-outlined text-blue-srp text-2xl transition-transform duration-300 shrink-0 icon-chevron">
                            expand_more
                        </span>
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-white">
                        <p
                            class="px-6 md:px-8 pb-6 font-sans text-base text-gray-600 leading-relaxed border-t border-gray-100 pt-4">
                            Perangkat ini sepenuhnya open-source dan mendukung bahasa pemrograman C/C++ melalui ESP-IDF dan
                            Arduino IDE, serta MicroPython, CircuitPython, dan SquareLine Studio untuk pengembangan
                            antarmuka grafis (GUI).
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div
                    class="faq-item bg-white border border-border-subtle rounded-2xl overflow-hidden shadow-sm transition-all duration-300 opacity-0 transform">
                    <button
                        class="faq-trigger w-full px-6 md:px-8 py-6 text-left flex justify-between items-center gap-4 hover:bg-gray-50/80 transition-colors">
                        <span class="font-sans font-bold text-lg md:text-xl text-[#171b29]">
                            Apakah sensor eksternal tambahan dapat dipasang pada perangkat ini?
                        </span>
                        <span
                            class="material-symbols-outlined text-blue-srp text-2xl transition-transform duration-300 shrink-0 icon-chevron">
                            expand_more
                        </span>
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-white">
                        <p
                            class="px-6 md:px-8 pb-6 font-sans text-base text-gray-600 leading-relaxed border-t border-gray-100 pt-4">
                            Ya, SenseCAP Indicator D1Pro memiliki antarmuka Grove yang mendukung komunikasi I2C dan ADC,
                            sehingga Anda dapat menghubungkan ratusan jenis modul sensor eksternal Grove secara modular.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div
                    class="faq-item bg-white border border-border-subtle rounded-2xl overflow-hidden shadow-sm transition-all duration-300 opacity-0 transform">
                    <button
                        class="faq-trigger w-full px-6 md:px-8 py-6 text-left flex justify-between items-center gap-4 hover:bg-gray-50/80 transition-colors">
                        <span class="font-sans font-bold text-lg md:text-xl text-[#171b29]">
                            Apakah SenseCAP Indicator D1Pro dapat digunakan sebagai LoRa Gateway utama?
                        </span>
                        <span
                            class="material-symbols-outlined text-blue-srp text-2xl transition-transform duration-300 shrink-0 icon-chevron">
                            expand_more
                        </span>
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-white">
                        <p
                            class="px-6 md:px-8 pb-6 font-sans text-base text-gray-600 leading-relaxed border-t border-gray-100 pt-4">
                            SenseCAP Indicator D1Pro dilengkapi chip Semtech SX1262 yang berfungsi sebagai <em>Local LoRa
                                Hub</em> (single-channel/packet forwarder lokal) untuk menerima data dari node LoRa terdekat
                            dan meneruskannya ke cloud via Wi-Fi.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div
                    class="faq-item bg-white border border-border-subtle rounded-2xl overflow-hidden shadow-sm transition-all duration-300 opacity-0 transform">
                    <button
                        class="faq-trigger w-full px-6 md:px-8 py-6 text-left flex justify-between items-center gap-4 hover:bg-gray-50/80 transition-colors">
                        <span class="font-sans font-bold text-lg md:text-xl text-[#171b29]">
                            Apakah PT. Solusi Rekatama Persada menyediakan layanan custom ODM/OEM?
                        </span>
                        <span
                            class="material-symbols-outlined text-blue-srp text-2xl transition-transform duration-300 shrink-0 icon-chevron">
                            expand_more
                        </span>
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-white">
                        <p
                            class="px-6 md:px-8 pb-6 font-sans text-base text-gray-600 leading-relaxed border-t border-gray-100 pt-4">
                            Ya, bekerja sama dengan Seeed Studio Fusion ODM Service, kami dapat membantu kustomisasi
                            firmware, penyesuaian sensor, hingga produksi skala besar sesuai kebutuhan proyek industri Anda.
                        </p>
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
                <x-cta-card badge="KONSULTASI SENSECAP INDICATOR D1PRO"
                    title="Tertarik Mengembangkan Solusi IoT Layar Sentuh?"
                    description="Diskusikan kebutuhan proyek monitoring udara, smart home, atau pengembangan gateway IoT bersama tim engineer kami. Pengadaan unit dan dukungan teknis resmi."
                    buttonText="Hubungi Tim Sales" buttonLink="#contact" email="info@ptsrp.co.id"
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

            // 2. Floating Animations untuk Terminal Features
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

            // 6. Scroll Reveal Animations (Fitur Unggulan Section) - Terpisah & Mobile-Friendly
            inView("#fitur-header", () => {
                animate("#fitur-header", {
                    opacity: [0, 1],
                    y: [30, 0]
                }, {
                    duration: 1.2,
                    easing: smoothEase
                });
            }, {
                margin: "0px 0px -10% 0px"
            });

            const fiturBlocks = document.querySelectorAll('.fitur-block');
            fiturBlocks.forEach((block) => {
                inView(block, () => {
                    animate(block, {
                        opacity: [0, 1],
                        y: [30, 0]
                    }, {
                        duration: 1.2,
                        easing: smoothEase
                    });
                }, {
                    margin: "0px 0px -10% 0px",
                    amount: 0.1 // Memicu begitu 10% blok terlihat di layar HP
                });
            });

            // 7. Scroll Reveal Animations (Why SenseCAP Section)
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

@extends('layouts.main')

@section('content')
<!-- BEGIN: Hero Section -->
<section id="hero-section" class="pt-32 pb-32 px-6 relative overflow-hidden bg-cover bg-center" style="background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.65) 0%, rgba(0, 0, 0, 0.65) 100%), url('https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&w=1920&q=80');">
    <!-- Decorative Floating Ambient Orbs -->
    <div class="absolute top-1/4 left-10 w-72 h-72 bg-yellow-srp/10 rounded-full blur-3xl pointer-events-none hero-orb"></div>
    <div class="absolute bottom-10 right-10 w-96 h-96 bg-blue-srp/15 rounded-full blur-3xl pointer-events-none hero-orb"></div>

    <div class="max-w-[1280px] mx-auto flex flex-col items-center justify-center relative w-full">
        <div class="inline-flex flex-col max-w-screen-md gap-6 items-center text-center z-10">
            
            <!-- Subtitle Badge -->
            <p id="hero-badge" class="font-mono font-medium text-yellow-srp text-xs tracking-[2.40px] uppercase opacity-0 transform">
                INOVASI INDUSTRI MASA DEPAN
            </p>

            <!-- Headline Utama -->
            <h1 id="hero-title" class="font-sans font-light text-white text-5xl md:text-6xl lg:text-7xl tracking-[-1.30px] leading-[1.1] opacity-0 transform">
                Solusi <span class="font-semibold text-yellow-srp">RFID, IoT &amp; AI</span><br class="hidden sm:inline"/> Terdepan untuk Bisnis Anda
            </h1>

            <!-- Deskripsi -->
            <div id="hero-desc" class="max-w-xl pt-2 items-center opacity-0 transform">
                <p class="font-sans font-normal text-white text-lg leading-[29.2px]">
                    PT SRP menghadirkan teknologi mutakhir untuk mengotomatisasi, melacak, dan mengoptimalkan operasional industri Anda dengan presisi tinggi.
                </p>
            </div>

            <!-- Tombol Action -->
            <div id="hero-cta" class="flex flex-wrap justify-center gap-4 pt-6 items-center w-full opacity-0 transform">
                <a href="#contact" class="hero-btn px-8 py-4 bg-yellow-srp rounded-sm font-sans font-semibold text-[#333333] text-sm tracking-[0] shadow-md transition-shadow hover:shadow-lg">
                    Hubungi Kami
                </a>
                <a href="#solutions" class="hero-btn px-8 py-4 rounded-sm border border-white/40 hover:bg-white/10 font-sans font-semibold text-white text-sm tracking-[0] transition-colors">
                    Pelajari Solusi
                </a>
            </div>

        </div>
    </div>
</section>
<!-- END: Hero Section -->

<!-- BEGIN: Portofolio Solusi Section -->
<section class="py-24 px-6 md:px-16 bg-surface overflow-hidden" id="solutions">
    <div class="max-w-[1232px] mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
        
        <!-- BARIS 1 KIRI: Header Text -->
        <div id="solutions-header" class="lg:col-span-6 flex flex-col justify-center py-6 opacity-0 transform">
            <div class="flex items-center gap-2 mb-6">
                <p class="font-mono text-[#666666] text-xs font-medium tracking-[2.40px] uppercase">
                    PORTOFOLIO SOLUSI
                </p>
            </div>
            <h2 class="font-sans font-light text-[#333333] text-5xl lg:text-6xl leading-[60px] tracking-tight">
                Sistem RFID &amp; IoT<br/>
                <span class="text-blue-srp font-semibold">Terintegrasi</span>
            </h2>
        </div>

        <!-- BARIS 1 KANAN: Card 1 & Card 2 -->
        <div class="lg:col-span-6 grid grid-cols-1 sm:grid-cols-2 gap-6" id="solutions-cards-top">
            
            <!-- Card 1 -->
            <div class="solution-card bg-white p-8 rounded-sm flex flex-col justify-between h-[380px] shadow-[0px_1px_2px_#0000000d] border border-transparent hover:border-blue-srp/20 opacity-0 transform transition-shadow">
                <div class="solution-card-icon w-16 h-16 flex items-center justify-center mb-8 transform">
                    <img src="{{ asset('images/SVG-kendali-akses.svg') }}" alt="Prevention Icon" class="w-16 h-16 object-contain">
                </div>
                <div class="mt-auto">
                    <div class="flex items-center gap-2 mb-4">
                        <span class="w-2 h-2 rounded-full bg-red-700"></span>
                        <span class="font-sans font-bold text-[#666666] text-xs tracking-[0.60px] uppercase">PREVENTION</span>
                    </div>
                    <h3 class="font-sans font-bold text-[#333333] text-2xl leading-8 mb-4">Kendali Akses</h3>
                    <div class="border-t border-[#e0e3e8] pt-6">
                        <p class="font-sans font-normal text-[#666666] text-sm leading-[22.8px]">
                            Sistem keamanan akses cerdas berbasis RFID dan biometrik untuk gedung, pabrik, dan area terbatas.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="solution-card bg-white p-8 rounded-sm flex flex-col justify-between h-[380px] shadow-[0px_1px_2px_#0000000d] border border-transparent hover:border-blue-srp/20 opacity-0 transform transition-shadow">
                <div class="solution-card-icon w-16 h-16 flex items-center justify-center mb-8 transform">
                    <img src="{{ asset('images/SVG-perpustakaan.svg') }}" alt="Detection Icon" class="w-16 h-16 object-contain">
                </div>
                <div class="mt-auto">
                    <div class="flex items-center gap-2 mb-4">
                        <span class="w-2 h-2 rounded-full bg-blue-srp"></span>
                        <span class="font-sans font-bold text-[#666666] text-xs tracking-[0.60px] uppercase">DETECTION</span>
                    </div>
                    <h3 class="font-sans font-bold text-[#333333] text-2xl leading-8 mb-4">Perpustakaan</h3>
                    <div class="border-t border-[#e0e3e8] pt-6">
                        <p class="font-sans font-normal text-[#666666] text-sm leading-[22.8px]">
                            Otomatisasi peminjaman, pengembalian, dan inventarisasi buku secara massal menggunakan teknologi RFID.
                        </p>
                    </div>
                </div>
            </div>

        </div>

        <!-- BARIS 2 KIRI: Card 3 & Card 4 -->
        <div class="lg:col-span-6 grid grid-cols-1 sm:grid-cols-2 gap-6" id="solutions-cards-bottom">
            
            <!-- Card 3 -->
            <div class="solution-card bg-white p-8 rounded-sm flex flex-col justify-between h-[380px] shadow-[0px_1px_2px_#0000000d] border border-transparent hover:border-blue-srp/20 opacity-0 transform transition-shadow">
                <div class="solution-card-icon w-16 h-16 flex items-center justify-center mb-8 transform">
                    <img src="{{ asset('images/SVG-pembayaran.svg') }}" alt="Payment Icon" class="w-16 h-16 object-contain">
                </div>
                <div class="mt-auto">
                    <div class="flex items-center gap-2 mb-4">
                        <span class="w-2 h-2 rounded-full bg-gray-700"></span>
                        <span class="font-sans font-bold text-[#666666] text-xs tracking-[0.60px] uppercase">ANALYSIS</span>
                    </div>
                    <h3 class="font-sans font-bold text-[#333333] text-2xl leading-8 mb-4">Pembayaran</h3>
                    <div class="border-t border-[#e0e3e8] pt-6">
                        <p class="font-sans font-normal text-[#666666] text-sm leading-[22.8px]">
                            Sistem cashless payment berbasis kartu pintar (smart card) untuk kantin, parkir, dan area komersial tertutup.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="solution-card bg-white p-8 rounded-sm flex flex-col justify-between h-[380px] shadow-[0px_1px_2px_#0000000d] border border-transparent hover:border-blue-srp/20 opacity-0 transform transition-shadow">
                <div class="solution-card-icon w-16 h-16 flex items-center justify-center mb-8 transform">
                    <img src="{{ asset('images/SVG-pendeteksi-aset.svg') }}" alt="Asset Detection Icon" class="w-16 h-16 object-contain">
                </div>
                <div class="mt-auto">
                    <div class="flex items-center gap-2 mb-4">
                        <span class="w-2 h-2 rounded-full bg-purple-600"></span>
                        <span class="font-sans font-bold text-[#666666] text-xs tracking-[0.60px] uppercase">RECOVERY</span>
                    </div>
                    <h3 class="font-sans font-bold text-[#333333] text-2xl leading-8 mb-4">Pendeteksi Aset</h3>
                    <div class="border-t border-[#e0e3e8] pt-6">
                        <p class="font-sans font-normal text-[#666666] text-sm leading-[22.8px]">
                            Pelacakan real-time untuk aset berharga, inventaris gudang, dan pergerakan material di lantai produksi.
                        </p>
                    </div>
                </div>
            </div>

        </div>

        <!-- BARIS 2 KANAN: Text Deskripsi -->
        <div id="solutions-desc-box" class="lg:col-span-6 flex flex-col justify-center py-6 opacity-0 transform">
            <div class="max-w-md">
                <p class="font-sans font-normal text-[#666666] text-lg leading-7 mb-8">
                    Lindungi organisasi Anda dengan solusi keamanan cerdas yang dirancang untuk mendeteksi ancaman, mengurangi risiko, dan memperkuat ketahanan operasional.
                </p>
                <div>
                    <a href="#contact" class="solutions-btn inline-flex items-center px-8 py-4 bg-blue-srp text-white font-sans font-semibold text-sm rounded-full transition-colors shadow-sm hover:bg-primary">
                        More services
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- END: Portofolio Solusi Section -->

<!-- BEGIN: Product Categories Section -->
<section class="py-24 px-6 md:px-16 bg-white overflow-hidden" id="product-categories" 
         x-data="{ 
            activeTab: 'rfid',
            rfidImage: '{{ asset('images/produk/rfid/uhf-rfid.jpg') }}',
            aiImage: '{{ asset('images/produk/ai/jetson-nanob01.jpg') }}',
            iotImage: '{{ asset('images/produk/rfid/mobile-computers.jpg') }}'
         }">
    
    <div class="max-w-[1280px] mx-auto">
        <!-- Section Header -->
        <div id="categories-header" class="mb-16 flex flex-col md:flex-row justify-between gap-8 items-start opacity-0 transform">
            <div class="flex flex-col gap-4">
                <span class="inline-block px-4 py-1.5 text-primary text-xs font-bold uppercase tracking-widest rounded-full w-fit bg-primary/10">
                    Kategori Produk
                </span>
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-text-primary leading-tight tracking-tight">
                    Jelajahi Solusi Produk Kami
                </h2>
            </div>
            <div class="pt-1">
                <a class="flex items-center gap-2 text-text-primary font-semibold hover:text-primary transition-colors group" href="#">
                    <span>View all products</span>
                    <span class="material-symbols-outlined text-base transition-transform group-hover:translate-x-1 group-hover:-translate-y-1">north_east</span>
                </a>
            </div>
        </div>

        <!-- Tab Controls & Content Container -->
        <div class="w-full">
            <!-- Navigation Tabs Button -->
            <div id="categories-tabs" class="flex items-end gap-2 px-2 md:px-0 overflow-x-auto opacity-0 transform">
                <button @click="activeTab = 'rfid'" 
                        :class="activeTab === 'rfid' ? 'bg-primary border-black z-10 -mb-[1px] text-white' : 'bg-gray-100 border-border text-gray-500 hover:bg-primary hover:text-white'"
                        class="tab-btn px-8 py-4 border-t border-l border-r rounded-t-xl font-bold transition-colors whitespace-nowrap">
                    RFID
                </button>

                <button @click="activeTab = 'ai'" 
                        :class="activeTab === 'ai' ? 'bg-primary border-black z-10 -mb-[1px] text-white' : 'bg-gray-100 border-border text-gray-500 hover:bg-primary hover:text-white'"
                        class="tab-btn px-8 py-4 border-t border-l border-r rounded-t-xl font-bold transition-colors whitespace-nowrap">
                    Artificial Intelligence
                </button>

                <button @click="activeTab = 'iot'" 
                        :class="activeTab === 'iot' ? 'bg-primary border-black z-10 -mb-[1px] text-white' : 'bg-gray-100 border-border text-gray-500 hover:bg-primary hover:text-white'"
                        class="tab-btn px-8 py-4 border-t border-l border-r rounded-t-xl font-bold transition-colors whitespace-nowrap">
                    Internet of Things
                </button>
            </div>

            <!-- Content Card Container -->
            <div id="categories-content" class="bg-white border border-black rounded-b-xl rounded-tr-xl p-8 md:p-12 lg:p-16 shadow-sm min-h-[460px] opacity-0 transform">
                
                <!-- TAB 1: RFID -->
                <div x-show="activeTab === 'rfid'" 
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 transform translate-y-4"
                     x-transition:enter-end="opacity-100 transform translate-y-0"
                     class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                    
                    <div class="lg:col-span-5 flex flex-col justify-center">
                        <h3 class="text-4xl md:text-5xl font-bold text-text-primary mb-4">RFID</h3>
                        <p class="font-mono text-xs md:text-sm font-bold tracking-widest uppercase text-text-secondary mb-4">
                            Readers, computers, scanner
                        </p>
                        <p class="text-text-secondary text-base md:text-lg leading-relaxed mb-6">
                            UHF RFID Readers, Mobile Computers, Industrial Tablets, Wearable RFID Readers, Fixed RFID Readers, Printers, Biometric Readers, Modules.
                        </p>

                        <div class="mb-8">
                            <p class="text-xs font-semibold uppercase tracking-wider text-gray-400 mb-3">Pilih Perangkat / Tampilan:</p>
                            <div class="flex items-center gap-3 overflow-x-auto pb-2">
                                <button @click="rfidImage = '{{ asset('images/produk/rfid/bluetooth-rfid.jpg') }}'"
                                        :class="rfidImage.includes('bluetooth-rfid.jpg') ? 'bg-blue-srp text-white border-blue-srp shadow-sm' : 'bg-surface text-text-primary border-gray-200 hover:border-blue-srp'"
                                        class="flex items-center gap-2 p-2.5 border rounded-lg transition-all hover:scale-105">
                                    <span class="material-symbols-outlined text-xl" :class="rfidImage.includes('bluetooth-rfid.jpg') ? 'text-white' : 'text-primary'">qr_code_scanner</span>
                                    <span class="text-xs font-medium">RFID Reader</span>
                                </button>

                                <button @click="rfidImage = '{{ asset('images/produk/rfid/mobile-computers.jpg') }}'"
                                        :class="rfidImage.includes('mobile-computers.jpg') ? 'bg-blue-srp text-white border-blue-srp shadow-sm' : 'bg-surface text-text-primary border-gray-200 hover:border-blue-srp'"
                                        class="flex items-center gap-2 p-2.5 border rounded-lg transition-all hover:scale-105">
                                    <span class="material-symbols-outlined text-xl" :class="rfidImage.includes('mobile-computers.jpg') ? 'text-white' : 'text-primary'">devices</span>
                                    <span class="text-xs font-medium">Mobile Computer</span>
                                </button>

                                <button @click="rfidImage = '{{ asset('images/produk/rfid/printer.jpg') }}'"
                                        :class="rfidImage.includes('printer.jpg') ? 'bg-blue-srp text-white border-blue-srp shadow-sm' : 'bg-surface text-text-primary border-gray-200 hover:border-blue-srp'"
                                        class="flex items-center gap-2 p-2.5 border rounded-lg transition-all hover:scale-105">
                                    <span class="material-symbols-outlined text-xl" :class="rfidImage.includes('printer.jpg') ? 'text-white' : 'text-primary'">print</span>
                                    <span class="text-xs font-medium">RFID Printer</span>
                                </button>
                            </div>
                        </div>

                        <div>
                            <button class="px-8 py-4 border border-border rounded-xl font-bold text-text-primary hover:bg-yellow-srp transition-colors shadow-sm">
                                Lihat Kategori Produk
                            </button>
                        </div>
                    </div>

                    <div class="lg:col-span-7">
                        <div class="relative rounded-3xl overflow-hidden border-8 border-black/5 shadow-2xl aspect-[16/9] group">
                            <img :src="rfidImage" alt="RFID Solutions" class="w-full h-full object-cover transition-all duration-500 group-hover:scale-105">
                        </div>
                    </div>
                </div>

                <!-- TAB 2: AI -->
                <div x-show="activeTab === 'ai'" 
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 transform translate-y-4"
                     x-transition:enter-end="opacity-100 transform translate-y-0"
                     class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center" 
                     style="display: none;">
                    
                    <div class="lg:col-span-5 flex flex-col justify-center">
                        <h3 class="text-4xl md:text-5xl font-bold text-text-primary mb-4">Artificial Intelligence</h3>
                        <p class="font-mono text-xs md:text-sm font-bold tracking-widest uppercase text-text-secondary mb-4">
                            Computer Vision, Predictive Analytics
                        </p>
                        <p class="text-text-secondary text-base md:text-lg leading-relaxed mb-6">
                            Solusi AI untuk analisis video pengawasan otomatis, deteksi kecacatan produk produksi real-time, dan pemeliharaan prediktif mesin pabrik.
                        </p>

                        <div class="mb-8">
                            <p class="text-xs font-semibold uppercase tracking-wider text-gray-400 mb-3">Pilih Solusi AI:</p>
                            <div class="flex items-center gap-3 overflow-x-auto pb-2">
                                <button @click="aiImage = '{{ asset('images/produk/ai/jetson-agx-orin .jpeg') }}'"
                                        :class="aiImage.includes('jetson-agx-orin .jpeg') ? 'bg-blue-srp text-white border-blue-srp shadow-sm' : 'bg-surface text-text-primary border-gray-200 hover:border-blue-srp'"
                                        class="flex items-center gap-2 p-2.5 border rounded-lg transition-all hover:scale-105">
                                    <span class="material-symbols-outlined text-xl" :class="aiImage.includes('jetson-agx-orin .jpeg') ? 'text-white' : 'text-primary'">visibility</span>
                                    <span class="text-xs font-medium">Vision Analytics</span>
                                </button>

                                <button @click="aiImage = '{{ asset('images/produk/ai/jetson-series-1.jpeg') }}'"
                                        :class="aiImage.includes('jetson-series-1.jpeg') ? 'bg-blue-srp text-white border-blue-srp shadow-sm' : 'bg-surface text-text-primary border-gray-200 hover:border-blue-srp'"
                                        class="flex items-center gap-2 p-2.5 border rounded-lg transition-all hover:scale-105">
                                    <span class="material-symbols-outlined text-xl" :class="aiImage.includes('jetson-series-1.jpeg') ? 'text-white' : 'text-primary'">precision_manufacturing</span>
                                    <span class="text-xs font-medium">Defect Detection</span>
                                </button>
                            </div>
                        </div>

                        <div>
                            <button class="px-8 py-4 border border-border rounded-xl font-bold text-text-primary hover:bg-yellow-srp transition-colors shadow-sm">
                                Lihat Solusi AI
                            </button>
                        </div>
                    </div>

                    <div class="lg:col-span-7">
                        <div class="relative rounded-3xl overflow-hidden border-8 border-black/5 shadow-2xl aspect-[16/9] group">
                            <img :src="aiImage" alt="AI Solutions" class="w-full h-full object-cover transition-all duration-500 group-hover:scale-105">
                        </div>
                    </div>
                </div>

                <!-- TAB 3: IOT -->
                <div x-show="activeTab === 'iot'" 
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 transform translate-y-4"
                     x-transition:enter-end="opacity-100 transform translate-y-0"
                     class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center" 
                     style="display: none;">
                    
                    <div class="lg:col-span-5 flex flex-col justify-center">
                        <h3 class="text-4xl md:text-5xl font-bold text-text-primary mb-4">Internet of Things</h3>
                        <p class="font-mono text-xs md:text-sm font-bold tracking-widest uppercase text-text-secondary mb-4">
                            Industrial Sensors, Smart Controllers
                        </p>
                        <p class="text-text-secondary text-base md:text-lg leading-relaxed mb-6">
                            Sensor IoT industri tahan lingkungan ekstrem, Gateway data nirkabel, dan modul integrasi kontrol jarak jauh untuk otomasi smart factory.
                        </p>

                        <div class="mb-8">
                            <p class="text-xs font-semibold uppercase tracking-wider text-gray-400 mb-3">Pilih Tipe Perangkat IoT:</p>
                            <div class="flex items-center gap-3 overflow-x-auto pb-2">
                                <button @click="iotImage = '{{ asset('images/produk/rfid/biometric.jpg') }}'"
                                        :class="iotImage.includes('biometric.jpg') ? 'bg-blue-srp text-white border-blue-srp shadow-sm' : 'bg-surface text-text-primary border-gray-200 hover:border-blue-srp'"
                                        class="flex items-center gap-2 p-2.5 border rounded-lg transition-all hover:scale-105">
                                    <span class="material-symbols-outlined text-xl" :class="iotImage.includes('biometric.jpg') ? 'text-white' : 'text-primary'">sensors</span>
                                    <span class="text-xs font-medium">Industrial Sensor</span>
                                </button>

                                <button @click="iotImage = '{{ asset('images/produk/rfid/industrial-tablets.jpg') }}'"
                                        :class="iotImage.includes('industrial-tablets.jpg') ? 'bg-blue-srp text-white border-blue-srp shadow-sm' : 'bg-surface text-text-primary border-gray-200 hover:border-blue-srp'"
                                        class="flex items-center gap-2 p-2.5 border rounded-lg transition-all hover:scale-105">
                                    <span class="material-symbols-outlined text-xl" :class="iotImage.includes('industrial-tablets.jpg') ? 'text-white' : 'text-primary'">router</span>
                                    <span class="text-xs font-medium">IoT Gateway</span>
                                </button>
                            </div>
                        </div>

                        <div>
                            <button class="px-8 py-4 border border-border rounded-xl font-bold text-text-primary hover:bg-yellow-srp transition-colors shadow-sm">
                                Lihat Perangkat IoT
                            </button>
                        </div>
                    </div>

                    <div class="lg:col-span-7">
                        <div class="relative rounded-3xl overflow-hidden border-8 border-black/5 shadow-2xl aspect-[16/9] group">
                            <img :src="iotImage" alt="IoT Solutions" class="w-full h-full object-cover transition-all duration-500 group-hover:scale-105">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- END: Product Categories Section -->

<!-- BEGIN: About Us / Facts Section -->
<section class="px-6 md:px-16 pt-20 pb-16 bg-yellow-srp overflow-hidden" id="about">
    <div class="max-w-[1280px] mx-auto flex flex-col justify-center px-4 md:px-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-start mb-12">
            <!-- Left Info -->
            <div id="about-text-left" class="opacity-0 transform">
                <p class="font-mono text-xs font-bold tracking-[2.40px] uppercase mb-6 text-[#333333]">
                    TENTANG KAMI
                </p>
                <h2 class="font-sans font-bold text-4xl md:text-5xl lg:text-6xl text-[#333333] leading-tight tracking-tight">
                    Mitra Terpercaya untuk Transformasi Digital.
                </h2>
            </div>

            <!-- Right Info & Image -->
            <div class="space-y-8">
                <p id="about-text-right" class="font-sans text-[#333333] text-base md:text-lg leading-relaxed opacity-0 transform">
                    PT SRP telah berkomitmen untuk menjadi pionir dalam penyediaan solusi Industrial Internet of Things (IIoT) dan Radio Frequency Identification (RFID) di Indonesia selama lebih dari 10 tahun. Kami menggabungkan perangkat keras berkualitas industri dengan perangkat lunak analitik berbasis AI untuk merancang solusi end-to-end yang disesuaikan.
                </p>
                
                <div id="about-img" class="aspect-[16/9] overflow-hidden rounded-sm shadow-xl opacity-0 transform">
                    <img src="{{ asset('images/tentang-kami.jpg') }}" alt="PT Solusi Rekatama Persada Office &amp; Team" class="w-full h-full object-cover transition-transform duration-700 hover:scale-105">
                </div>
            </div>
        </div>

        <!-- 4 Animated Stats -->
        <div id="stats-container" class="grid grid-cols-2 md:grid-cols-4 gap-8 py-8 border-t border-black/10">
            <div class="stat-item opacity-0 transform">
                <div class="font-sans text-4xl md:text-5xl font-bold text-[#333333] mb-2"><span class="stat-counter" data-target="915">0</span>+</div>
                <div class="font-sans text-xs md:text-sm font-bold text-[#333333]/80 uppercase tracking-wider">Projects Completed</div>
            </div>
            <div class="stat-item opacity-0 transform">
                <div class="font-sans text-4xl md:text-5xl font-bold text-[#333333] mb-2"><span class="stat-counter" data-target="10">0</span>+</div>
                <div class="font-sans text-xs md:text-sm font-bold text-[#333333]/80 uppercase tracking-wider">Years of Experience</div>
            </div>
            <div class="stat-item opacity-0 transform">
                <div class="font-sans text-4xl md:text-5xl font-bold text-[#333333] mb-2"><span class="stat-counter" data-target="110">0</span>+</div>
                <div class="font-sans text-xs md:text-sm font-bold text-[#333333]/80 uppercase tracking-wider">Employees</div>
            </div>
            <div class="stat-item opacity-0 transform">
                <div class="font-sans text-4xl md:text-5xl font-bold text-[#333333] mb-2"><span class="stat-counter" data-target="2">0</span>k+</div>
                <div class="font-sans text-xs md:text-sm font-bold text-[#333333]/80 uppercase tracking-wider">Happy Customers</div>
            </div>
        </div>

    </div>
</section>
<!-- END: About Us / Facts Section -->

<!-- BEGIN: Projects Section -->
<section class="py-24 px-6 md:px-16 bg-[#F5F6F8] overflow-hidden" id="projects">
    <div class="max-w-[1280px] mx-auto">
        <div id="projects-header" class="flex flex-col md:flex-row justify-between items-start mb-16 gap-8 opacity-0 transform">
            <div class="max-w-3xl">
                <p class="font-mono text-[#1f6fa8] text-xs font-medium tracking-[2.40px] uppercase mb-4">
                    PROJECTS
                </p>
                <h2 class="font-sans text-4xl md:text-5xl lg:text-6xl font-bold text-[#333333] leading-tight tracking-tight">
                    Implementasi Solusi Terkini
                </h2>
            </div>
            <div class="pt-1">
                <a href="#" class="flex items-center gap-2 text-[#333333] font-semibold hover:text-primary transition-colors group">
                    <span>View all Projects</span>
                    <span class="material-symbols-outlined text-base transition-transform group-hover:translate-x-1 group-hover:-translate-y-1">north_east</span>
                </a>
            </div>
        </div>

        <div id="projects-grid" class="grid grid-cols-1 md:grid-cols-2 gap-12">
            
            <!-- Project 1 -->
            <div class="project-card group cursor-pointer flex flex-col opacity-0 transform">
                <div class="w-full overflow-hidden rounded-xl bg-white mb-6 relative shadow-sm border border-[#e0e3e8]" style="aspect-ratio: 16 / 9;">
                    <img src="{{ asset('images/projek/project-1.jpg') }}" alt="Smart Warehouse Management" class="w-full h-full object-cover transform transition-transform duration-500 ease-out group-hover:scale-110">
                </div>
                <div class="flex justify-between items-start">
                    <div>
                        <h3 class="font-sans text-2xl font-bold text-[#333333] mb-1 group-hover:text-[#1f6fa8] transition-colors">Smart Warehouse Management</h3>
                        <p class="font-sans text-sm font-medium text-[#666666] uppercase tracking-wider">Logistics Automation</p>
                    </div>
                    <span class="material-symbols-outlined text-[#333333] group-hover:text-[#1f6fa8] group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform">north_east</span>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="project-card group cursor-pointer flex flex-col opacity-0 transform">
                <div class="w-full overflow-hidden rounded-xl bg-white mb-6 relative shadow-sm border border-[#e0e3e8]" style="aspect-ratio: 16 / 9;">
                    <img src="{{ asset('images/projek/project-1.jpg') }}" alt="Automated Asset Tracking" class="w-full h-full object-cover transform transition-transform duration-500 ease-out group-hover:scale-110">
                </div>
                <div class="flex justify-between items-start">
                    <div>
                        <h3 class="font-sans text-2xl font-bold text-[#333333] mb-1 group-hover:text-[#1f6fa8] transition-colors">Automated Asset Tracking</h3>
                        <p class="font-sans text-sm font-medium text-[#666666] uppercase tracking-wider">Industrial IoT</p>
                    </div>
                    <span class="material-symbols-outlined text-[#333333] group-hover:text-[#1f6fa8] group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform">north_east</span>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="project-card group cursor-pointer flex flex-col opacity-0 transform">
                <div class="w-full overflow-hidden rounded-xl bg-white mb-6 relative shadow-sm border border-[#e0e3e8]" style="aspect-ratio: 16 / 9;">
                    <img src="{{ asset('images/projek/project-3.jpg') }}" alt="Industrial IoT Integration" class="w-full h-full object-cover transform transition-transform duration-500 ease-out group-hover:scale-110">
                </div>
                <div class="flex justify-between items-start">
                    <div>
                        <h3 class="font-sans text-2xl font-bold text-[#333333] mb-1 group-hover:text-[#1f6fa8] transition-colors">Industrial IoT Integration</h3>
                        <p class="font-sans text-sm font-medium text-[#666666] uppercase tracking-wider">Smart Factory</p>
                    </div>
                    <span class="material-symbols-outlined text-[#333333] group-hover:text-[#1f6fa8] group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform">north_east</span>
                </div>
            </div>

            <!-- Project 4 -->
            <div class="project-card group cursor-pointer flex flex-col opacity-0 transform">
                <div class="w-full overflow-hidden rounded-xl bg-white mb-6 relative shadow-sm border border-[#e0e3e8]" style="aspect-ratio: 16 / 9;">
                    <img src="{{ asset('images/projek/project-4.jpg') }}" alt="Custom Automation Solutions" class="w-full h-full object-cover transform transition-transform duration-500 ease-out group-hover:scale-110">
                </div>
                <div class="flex justify-between items-start">
                    <div>
                        <h3 class="font-sans text-2xl font-bold text-[#333333] mb-1 group-hover:text-[#1f6fa8] transition-colors">Custom Automation Solutions</h3>
                        <p class="font-sans text-sm font-medium text-[#666666] uppercase tracking-wider">AI &amp; Robotics</p>
                    </div>
                    <span class="material-symbols-outlined text-[#333333] group-hover:text-[#1f6fa8] group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform">north_east</span>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- END: Projects Section -->

<!-- BEGIN: Why Choose Us Section -->
<section class="py-24 px-6 md:px-16 bg-primary overflow-hidden" id="why-choose-us">
    <div class="max-w-[1280px] mx-auto">
        <div id="why-header" class="flex flex-col md:flex-row justify-between items-start mb-16 gap-8 opacity-0 transform">
            <div class="max-w-3xl">
                <p class="font-mono text-white text-xs font-medium tracking-[2.40px] uppercase mb-4 opacity-90">
                    Keunggulan Kami
                </p>
                <h2 class="font-sans text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight tracking-tight">
                    Mengapa Memilih PT Solusi Rekatama Persada?
                </h2>
            </div>
            <div class="pt-1">
                <a href="#contact" class="flex items-center gap-2 text-white font-semibold hover:text-yellow-srp transition-colors group">
                    <span>View all Services</span>
                    <span class="material-symbols-outlined text-base transition-transform group-hover:translate-x-1 group-hover:-translate-y-1">north_east</span>
                </a>
            </div>
        </div>

        <div class="why-choose-list space-y-0">
            <!-- Item 1 -->
            <div class="why-choose-item group border-t py-12 flex flex-col md:flex-row gap-8 lg:gap-12 items-center border-white/30 transition-colors hover:border-white opacity-0 transform">
                <div class="why-icon-wrap flex-shrink-0 flex items-center justify-center transform">
                    <span class="material-symbols-outlined text-6xl md:text-7xl text-white group-hover:text-yellow-srp transition-colors duration-300">
                        precision_manufacturing
                    </span>
                </div>
                <div class="flex-1 text-left">
                    <h3 class="font-sans text-2xl md:text-3xl font-bold mb-3 text-white group-hover:text-accent-cta transition-colors">
                        Perangkat Standar Industri
                    </h3>
                    <p class="font-sans text-white text-base md:text-lg max-w-3xl leading-relaxed opacity-90">
                        Perangkat keras RFID dan sensor IoT yang teruji tangguh untuk lingkungan industri ekstrem (tahan debu, air, dan suhu tinggi).
                    </p>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="why-choose-item group border-t py-12 flex flex-col md:flex-row gap-8 lg:gap-12 items-center border-white/30 transition-colors hover:border-white opacity-0 transform">
                <div class="why-icon-wrap flex-shrink-0 flex items-center justify-center transform">
                    <span class="material-symbols-outlined text-6xl md:text-7xl text-white group-hover:text-yellow-srp transition-colors duration-300">
                        terminal
                    </span>
                </div>
                <div class="flex-1 text-left">
                    <h3 class="font-sans text-2xl md:text-3xl font-bold mb-3 text-white group-hover:text-accent-cta transition-colors">
                        Software Kustomisasi
                    </h3>
                    <p class="font-sans text-white text-base md:text-lg max-w-3xl leading-relaxed opacity-90">
                        Perangkat lunak yang dikembangkan secara in-house memungkinkan kustomisasi penuh sesuai dengan alur kerja spesifik bisnis Anda.
                    </p>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="why-choose-item group border-t border-b py-12 flex flex-col md:flex-row gap-8 lg:gap-12 items-center border-white/30 transition-colors hover:border-white opacity-0 transform">
                <div class="why-icon-wrap flex-shrink-0 flex items-center justify-center transform">
                    <span class="material-symbols-outlined text-6xl md:text-7xl text-white group-hover:text-yellow-srp transition-colors duration-300">
                        support_agent
                    </span>
                </div>
                <div class="flex-1 text-left">
                    <h3 class="font-sans text-2xl md:text-3xl font-bold mb-3 text-white group-hover:text-accent-cta transition-colors">
                        Dukungan Teknis 24/7
                    </h3>
                    <p class="font-sans text-white text-base md:text-lg max-w-3xl leading-relaxed opacity-90">
                        Tim support lokal yang responsif siap membantu instalasi, maintenance, dan pemecahan masalah teknis kapanpun dibutuhkan.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END: Why Choose Us Section -->

<!-- BEGIN: Insights / Blog Section -->
<section class="py-24 px-6 md:px-16 bg-white overflow-hidden" id="insights">
    <div class="max-w-[1280px] mx-auto">
        <div id="insights-header" class="flex flex-col md:flex-row justify-between items-start mb-16 gap-8 opacity-0 transform">
            <div class="max-w-5xl">
                <p class="font-mono text-[#1f6fa8] text-xs font-medium tracking-[2.40px] uppercase mb-4">
                    BERITA &amp; ARTIKEL TERBARU
                </p>
                <h2 class="font-sans text-4xl md:text-5xl lg:text-6xl font-bold text-[#333333] leading-tight tracking-tight">
                    Temukan berita dan wawasan terbaru kami di mana pun Anda berada.
                </h2>
            </div>
            <div class="pt-1">
                <a href="#" class="flex items-center gap-2 text-[#333333] font-semibold hover:text-blue-srp transition-colors group">
                    <span>Lihat Semua Artikel</span>
                    <span class="material-symbols-outlined text-base transition-transform group-hover:translate-x-1 group-hover:-translate-y-1">north_east</span>
                </a>
            </div>
        </div>

        <div id="insights-grid" class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <!-- Article 1 -->
            <article class="blog-card group cursor-pointer flex flex-col opacity-0 transform">
                <div class="w-full overflow-hidden rounded-xl bg-surface mb-6 relative shadow-sm border border-[#e0e3e8]" style="aspect-ratio: 16 / 9;">
                    <img src="{{ asset('images/blog/blog-1.jpg') }}" alt="5 Tren Utama yang Membentuk E-commerce di Tahun 2026" class="w-full h-full object-cover transform transition-transform duration-500 ease-out group-hover:scale-110">
                </div>
                <div class="flex items-center gap-2 mb-3">
                    <span class="font-sans text-xs font-bold text-[#1f6fa8] uppercase tracking-wider">TEKNOLOGI</span>
                    <span class="w-1 h-1 rounded-full bg-[#666666]/40"></span>
                    <span class="font-sans text-xs text-[#666666]">25 Oktober 2026</span>
                </div>
                <h3 class="font-sans text-2xl md:text-3xl font-bold text-[#333333] leading-snug group-hover:text-[#1f6fa8] transition-colors">
                    5 Tren Utama yang Membentuk E-commerce di Tahun 2026
                </h3>
            </article>

            <!-- Article 2 -->
            <article class="blog-card group cursor-pointer flex flex-col opacity-0 transform">
                <div class="w-full overflow-hidden rounded-xl bg-surface mb-6 relative shadow-sm border border-[#e0e3e8]" style="aspect-ratio: 16 / 9;">
                    <img src="{{ asset('images/blog/blog-2.jpg') }}" alt="Kekuatan Influencer Marketing: Panduan Komprehensif" class="w-full h-full object-cover transform transition-transform duration-500 ease-out group-hover:scale-110">
                </div>
                <div class="flex items-center gap-2 mb-3">
                    <span class="font-sans text-xs font-bold text-[#1f6fa8] uppercase tracking-wider">PEMASARAN</span>
                    <span class="w-1 h-1 rounded-full bg-[#666666]/40"></span>
                    <span class="font-sans text-xs text-[#666666]">11 November 2026</span>
                </div>
                <h3 class="font-sans text-2xl md:text-3xl font-bold text-[#333333] leading-snug group-hover:text-[#1f6fa8] transition-colors">
                    Kekuatan Influencer Marketing: Panduan Komprehensif
                </h3>
            </article>
        </div>
    </div>
</section>
<!-- END: Insights / Blog Section -->

<!-- BEGIN: Client List Section -->
<section class="py-16 px-6 md:px-16 bg-black overflow-hidden" id="clients">
    <div class="max-w-[1280px] mx-auto flex flex-col md:flex-row items-center justify-between gap-8 md:gap-12">
        <div id="clients-header" class="flex-shrink-0 text-center md:text-left z-10 bg-black pr-4 opacity-0 transform">
            <h2 class="font-sans font-bold text-2xl md:text-3xl text-white leading-tight">
                Dipercaya lebih<br class="hidden md:inline"> dari 40+ klien
            </h2>
        </div>

        <div id="clients-marquee" class="flex-1 w-full overflow-hidden relative opacity-0 transform">
            <div class="absolute left-0 top-0 bottom-0 w-12 bg-gradient-to-r from-black to-transparent z-10 pointer-events-none"></div>
            <div class="absolute right-0 top-0 bottom-0 w-12 bg-gradient-to-l from-black to-transparent z-10 pointer-events-none"></div>

            <div class="animate-marquee items-center gap-12 md:gap-16">
                <div class="flex items-center gap-12 md:gap-16">
                    <div class="h-20 md:h-24 flex-shrink-0 opacity-80 hover:opacity-100 transition-opacity cursor-pointer">
                        <img src="{{ asset('images/clients/logo-1.svg') }}" alt="Global Fabrik Logo" class="h-full w-auto object-contain filter brightness-0 invert">
                    </div>
                    <div class="h-20 md:h-24 flex-shrink-0 opacity-80 hover:opacity-100 transition-opacity cursor-pointer">
                        <img src="{{ asset('images/clients/logo-2.svg') }}" alt="CyberSync Automation Logo" class="h-full w-auto object-contain filter brightness-0 invert">
                    </div>
                    <div class="h-20 md:h-24 flex-shrink-0 opacity-80 hover:opacity-100 transition-opacity cursor-pointer">
                        <img src="{{ asset('images/clients/logo-3.svg') }}" alt="OptiFlow Robotics Logo" class="h-full w-auto object-contain filter brightness-0 invert">
                    </div>
                    <div class="h-20 md:h-24 flex-shrink-0 opacity-80 hover:opacity-100 transition-opacity cursor-pointer">
                        <img src="{{ asset('images/clients/logo-4.svg') }}" alt="AutoTech Systems Logo" class="h-full w-auto object-contain filter brightness-0 invert">
                    </div>
                    <div class="h-20 md:h-24 flex-shrink-0 opacity-80 hover:opacity-100 transition-opacity cursor-pointer">
                        <img src="{{ asset('images/clients/logo-5.svg') }}" alt="ElectroCore Logo" class="h-full w-auto object-contain filter brightness-0 invert">
                    </div>
                    <div class="h-20 md:h-24 flex-shrink-0 opacity-80 hover:opacity-100 transition-opacity cursor-pointer">
                        <img src="{{ asset('images/clients/logo-6.svg') }}" alt="TechInnovate Logo" class="h-full w-auto object-contain filter brightness-0 invert">
                    </div>
                    <div class="h-20 md:h-24 flex-shrink-0 opacity-80 hover:opacity-100 transition-opacity cursor-pointer">
                        <img src="{{ asset('images/clients/logo-7.svg') }}" alt="InnoTech Solutions Logo" class="h-full w-auto object-contain filter brightness-0 invert">
                    </div>
                </div>

                <div class="flex items-center gap-12 md:gap-16">
                    <div class="h-20 md:h-24 flex-shrink-0 opacity-80 hover:opacity-100 transition-opacity cursor-pointer">
                        <img src="{{ asset('images/clients/logo-1.svg') }}" alt="Global Fabrik Logo" class="h-full w-auto object-contain filter brightness-0 invert">
                    </div>
                    <div class="h-20 md:h-24 flex-shrink-0 opacity-80 hover:opacity-100 transition-opacity cursor-pointer">
                        <img src="{{ asset('images/clients/logo-2.svg') }}" alt="CyberSync Automation Logo" class="h-full w-auto object-contain filter brightness-0 invert">
                    </div>
                    <div class="h-20 md:h-24 flex-shrink-0 opacity-80 hover:opacity-100 transition-opacity cursor-pointer">
                        <img src="{{ asset('images/clients/logo-3.svg') }}" alt="OptiFlow Robotics Logo" class="h-full w-auto object-contain filter brightness-0 invert">
                    </div>
                    <div class="h-20 md:h-24 flex-shrink-0 opacity-80 hover:opacity-100 transition-opacity cursor-pointer">
                        <img src="{{ asset('images/clients/logo-4.svg') }}" alt="AutoTech Systems Logo" class="h-full w-auto object-contain filter brightness-0 invert">
                    </div>
                    <div class="h-20 md:h-24 flex-shrink-0 opacity-80 hover:opacity-100 transition-opacity cursor-pointer">
                        <img src="{{ asset('images/clients/logo-5.svg') }}" alt="ElectroCore Logo" class="h-full w-auto object-contain filter brightness-0 invert">
                    </div>
                    <div class="h-20 md:h-24 flex-shrink-0 opacity-80 hover:opacity-100 transition-opacity cursor-pointer">
                        <img src="{{ asset('images/clients/logo-6.svg') }}" alt="TechInnovate Logo" class="h-full w-auto object-contain filter brightness-0 invert">
                    </div>
                    <div class="h-20 md:h-24 flex-shrink-0 opacity-80 hover:opacity-100 transition-opacity cursor-pointer">
                        <img src="{{ asset('images/clients/logo-7.svg') }}" alt="InnoTech Solutions Logo" class="h-full w-auto object-contain filter brightness-0 invert">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END: Client List Section -->

<!-- BEGIN: CTA Section -->
<section class="py-24 px-6 md:px-16 bg-bg-light overflow-hidden" id="contact">
    <div class="max-w-[1280px] mx-auto">
        <div id="cta-card-wrapper" class="opacity-0 transform">
            <x-cta-card 
                badge="KONSULTASI GRATIS"
                title="Siap Mendigitalisasi Operasional Perusahaan Anda?"
                description="Bicarakan tantangan industri tim Anda. Kami siap memberikan gambaran solusi teknis dan penawaran terbaik."
                buttonText="Hubungi Tim Sales Kami"
                buttonLink="#contact"
                email="info@ptsrp.co.id"
                imgRight="images/cta/cta-1.jpg"
                imgLeft="images/cta/cta-2.jpg"
            />
        </div>
    </div>
</section>
<!-- END: CTA Section -->

<!-- BEGIN: FAQ Section -->
<section class="py-24 px-6 md:px-16 bg-[#F5F6F8] overflow-hidden" id="faq">
    <div class="max-w-[1280px] mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16">
        
        <!-- Left Column: Header -->
        <div id="faq-header" class="lg:col-span-5 flex flex-col justify-start opacity-0 transform">
            <span class="inline-block px-3 py-1 text-primary text-xs font-bold uppercase tracking-[2.4px] rounded-full bg-primary/10 w-fit mb-6">
                FAQ
            </span>
            <h2 class="font-sans text-4xl md:text-5xl lg:text-6xl font-bold text-text-dark leading-tight mb-6 tracking-tight">
                Pertanyaan yang Sering Diajukan
            </h2>
            <p class="font-sans text-base md:text-lg text-text-secondary leading-relaxed max-w-md">
                Berikut adalah jawaban atas pertanyaan yang paling sering diajukan oleh calon mitra dan klien kami.
            </p>
        </div>

        <!-- Right Column: Accordion Items -->
        <div id="faq-list" class="lg:col-span-7 space-y-4">
            
            <div class="faq-item bg-white rounded-xl border border-border shadow-sm overflow-hidden transition-all duration-300 opacity-0 transform">
                <button class="faq-toggle w-full p-6 text-left flex items-center justify-between gap-4 focus:outline-none hover:bg-gray-50/50 transition-colors">
                    <span class="font-sans text-lg font-bold text-text-dark">Tim seperti apa yang bekerja sama dengan Anda?</span>
                    <span class="material-symbols-outlined text-text-secondary transition-transform duration-300 faq-icon">expand_more</span>
                </button>
                <div class="faq-content hidden px-6 pb-6 text-text-secondary font-sans leading-relaxed text-base border-t border-gray-100 pt-4">
                    Kami bekerja sama dengan berbagai skala industri, mulai dari manufaktur, logistik, pergudangan, hingga sektor publik dan komersial yang membutuhkan otomatisasi pelacakan aset dan sensor IoT.
                </div>
            </div>

            <div class="faq-item bg-white rounded-xl border border-border shadow-sm overflow-hidden transition-all duration-300 opacity-0 transform">
                <button class="faq-toggle w-full p-6 text-left flex items-center justify-between gap-4 focus:outline-none hover:bg-gray-50/50 transition-colors">
                    <span class="font-sans text-lg font-bold text-text-dark">Seberapa cepat kita bisa memulai proyek?</span>
                    <span class="material-symbols-outlined text-text-secondary transition-transform duration-300 faq-icon">expand_more</span>
                </button>
                <div class="faq-content hidden px-6 pb-6 text-text-secondary font-sans leading-relaxed text-base border-t border-gray-100 pt-4">
                    Proses Kick-off dan analisis kebutuhan awal dapat dimulai dalam waktu 3-5 hari kerja setelah diskusi awal dan kesepakatan cakupan proyek (*scope of work*).
                </div>
            </div>

            <div class="faq-item bg-white rounded-xl border border-border shadow-sm overflow-hidden transition-all duration-300 opacity-0 transform">
                <button class="faq-toggle w-full p-6 text-left flex items-center justify-between gap-4 focus:outline-none hover:bg-gray-50/50 transition-colors">
                    <span class="font-sans text-lg font-bold text-text-dark">Dapatkah Anda bekerja bersama tim IT internal kami?</span>
                    <span class="material-symbols-outlined text-text-secondary transition-transform duration-300 faq-icon">expand_more</span>
                </button>
                <div class="faq-content hidden px-6 pb-6 text-text-secondary font-sans leading-relaxed text-base border-t border-gray-100 pt-4">
                    Tentu saja. Perangkat lunak kami dirancang dengan API terbuka (REST API) yang fleksibel sehingga dapat dengan mudah terintegrasi dengan sistem ERP atau database internal yang sudah Anda gunakan.
                </div>
            </div>

            <div class="faq-item bg-white rounded-xl border border-border shadow-sm overflow-hidden transition-all duration-300 opacity-0 transform">
                <button class="faq-toggle w-full p-6 text-left flex items-center justify-between gap-4 focus:outline-none hover:bg-gray-50/50 transition-colors">
                    <span class="font-sans text-lg font-bold text-text-dark">Seperti apa bentuk kerja sama pada umumnya?</span>
                    <span class="material-symbols-outlined text-text-secondary transition-transform duration-300 faq-icon">expand_more</span>
                </button>
                <div class="faq-content hidden px-6 pb-6 text-text-secondary font-sans leading-relaxed text-base border-t border-gray-100 pt-4">
                    Kerja sama meliputi konsultan desain solusi, penyediaan perangkat keras (*hardware*), kustomisasi perangkat lunak (*software*), instalasi langsung di lokasi, hingga pemeliharaan (*maintenance*) berkala.
                </div>
            </div>

            <div class="faq-item bg-white rounded-xl border border-border shadow-sm overflow-hidden transition-all duration-300 opacity-0 transform">
                <button class="faq-toggle w-full p-6 text-left flex items-center justify-between gap-4 focus:outline-none hover:bg-gray-50/50 transition-colors">
                    <span class="font-sans text-lg font-bold text-text-dark">Bagaimana Anda mengukur kesuksesan implementasi?</span>
                    <span class="material-symbols-outlined text-text-secondary transition-transform duration-300 faq-icon">expand_more</span>
                </button>
                <div class="faq-content hidden px-6 pb-6 text-text-secondary font-sans leading-relaxed text-base border-t border-gray-100 pt-4">
                    Kesuksesan diukur berdasarkan efisiensi waktu operasional, tingkat akurasi pelacakan aset, penurunan angka kerugian material, serta ketersediaan laporan analitik real-time.
                </div>
            </div>

            <div class="faq-item bg-white rounded-xl border border-border shadow-sm overflow-hidden transition-all duration-300 opacity-0 transform">
                <button class="faq-toggle w-full p-6 text-left flex items-center justify-between gap-4 focus:outline-none hover:bg-gray-50/50 transition-colors">
                    <span class="font-sans text-lg font-bold text-text-dark">Dapatkah Anda bekerja dengan tim yang tersebar (remote)?</span>
                    <span class="material-symbols-outlined text-text-secondary transition-transform duration-300 faq-icon">expand_more</span>
                </button>
                <div class="faq-content hidden px-6 pb-6 text-text-secondary font-sans leading-relaxed text-base border-t border-gray-100 pt-4">
                    Ya, tim teknis kami mendukung pemantauan perangkat secara remote (*remote management*) serta koordinasi berkala melalui platform komunikasi digital.
                </div>
            </div>

        </div>
    </div>
</section>
<!-- END: FAQ Section -->

<!-- SCRIPT: MASTER MOTION ANIMATION SUITE -->
<script>
    function initMotionAnimations() {
        const motionLib = window.Motion;

        if (!motionLib) {
            setTimeout(initMotionAnimations, 40);
            return;
        }

        const { animate, inView, stagger } = motionLib;

        // Ultra-smooth cinematic easing curves (Apple & Vercel style)
        const smoothEase = [0.16, 1, 0.3, 1];
        const bouncyEase = [0.34, 1.35, 0.64, 1];

        // Trigger config: hanya aktif saat section sudah mendekati tengah layar (~25% - 30% dari bawah)
        const inViewCenterConfig = { margin: "0px 0px -25% 0px", amount: 0.25 };

        /* ==========================================================================
           1. HERO SECTION ENTRANCE & AMBIENT MOTION
           ========================================================================== */
        animate(".hero-orb", { 
            scale: [1, 1.2, 1], 
            opacity: [0.25, 0.55, 0.25] 
        }, { 
            duration: 7, 
            repeat: Infinity, 
            direction: "alternate",
            easing: "ease-in-out" 
        });

        animate("#hero-badge", 
            { opacity: [0, 1], y: [30, 0], scale: [0.9, 1] }, 
            { duration: 0.9, easing: smoothEase }
        );

        animate("#hero-title", 
            { opacity: [0, 1], y: [50, 0] }, 
            { duration: 1.15, delay: 0.2, easing: smoothEase }
        );

        animate("#hero-desc", 
            { opacity: [0, 1], y: [40, 0] }, 
            { duration: 1.15, delay: 0.4, easing: smoothEase }
        );

        animate("#hero-cta", 
            { opacity: [0, 1], y: [30, 0], scale: [0.95, 1] }, 
            { duration: 1.1, delay: 0.6, easing: bouncyEase }
        );

        // Hero Button Hover Motion
        document.querySelectorAll('.hero-btn').forEach(btn => {
            btn.addEventListener('mouseenter', () => {
                animate(btn, { transform: 'translateY(-4px) scale(1.03)' }, { duration: 0.35, easing: smoothEase });
            });
            btn.addEventListener('mouseleave', () => {
                animate(btn, { transform: 'translateY(0px) scale(1)' }, { duration: 0.35, easing: smoothEase });
            });
        });

        /* ==========================================================================
           2. PORTOFOLIO SOLUSI SECTION
           ========================================================================== */
        inView("#solutions-header", () => {
            animate("#solutions-header", 
                { opacity: [0, 1], x: [-50, 0] }, 
                { duration: 1.15, easing: smoothEase }
            );
        }, inViewCenterConfig);

        inView("#solutions", () => {
            animate(".solution-card", 
                { opacity: [0, 1], y: [60, 0], scale: [0.94, 1] }, 
                { duration: 1.05, delay: stagger(0.18), easing: smoothEase }
            );

            animate(".solution-card-icon", 
                { scale: [0.5, 1.15, 1], rotate: [-20, 5, 0] }, 
                { duration: 1.1, delay: stagger(0.18, { start: 0.25 }), easing: bouncyEase }
            );
        }, inViewCenterConfig);

        inView("#solutions-desc-box", () => {
            animate("#solutions-desc-box", 
                { opacity: [0, 1], x: [50, 0] }, 
                { duration: 1.15, easing: smoothEase }
            );
        }, inViewCenterConfig);

        // Solution Card Interactive Tilt & Lift
        document.querySelectorAll('.solution-card').forEach(card => {
            card.addEventListener('mouseenter', () => {
                animate(card, { transform: 'translateY(-10px) scale(1.025)' }, { duration: 0.4, easing: smoothEase });
            });
            card.addEventListener('mouseleave', () => {
                animate(card, { transform: 'translateY(0px) scale(1)' }, { duration: 0.4, easing: smoothEase });
            });
        });

        /* ==========================================================================
           3. PRODUCT CATEGORIES SECTION
           ========================================================================== */
        inView("#categories-header", () => {
            animate("#categories-header", 
                { opacity: [0, 1], y: [45, 0] }, 
                { duration: 1.1, easing: smoothEase }
            );
        }, inViewCenterConfig);

        inView("#categories-tabs", () => {
            animate("#categories-tabs", 
                { opacity: [0, 1], y: [25, 0] }, 
                { duration: 0.9, easing: smoothEase }
            );
            animate(".tab-btn", 
                { opacity: [0, 1], y: [20, 0] }, 
                { duration: 0.8, delay: stagger(0.12), easing: bouncyEase }
            );
        }, inViewCenterConfig);

        inView("#categories-content", () => {
            animate("#categories-content", 
                { opacity: [0, 1], y: [45, 0], scale: [0.96, 1] }, 
                { duration: 1.2, delay: 0.2, easing: smoothEase }
            );
        }, inViewCenterConfig);

        /* ==========================================================================
           4. ABOUT US / FACTS SECTION & ANIMATED NUMBER COUNTERS
           ========================================================================== */
        inView("#about", () => {
            animate("#about-text-left", 
                { opacity: [0, 1], x: [-55, 0] }, 
                { duration: 1.2, easing: smoothEase }
            );
            animate("#about-text-right", 
                { opacity: [0, 1], x: [55, 0] }, 
                { duration: 1.2, delay: 0.15, easing: smoothEase }
            );
            animate("#about-img", 
                { opacity: [0, 1], scale: [0.9, 1], y: [30, 0] }, 
                { duration: 1.3, delay: 0.3, easing: smoothEase }
            );
        }, inViewCenterConfig);

        let statsCounted = false;
        inView("#stats-container", () => {
            animate(".stat-item", 
                { opacity: [0, 1], y: [45, 0], scale: [0.85, 1] }, 
                { duration: 0.95, delay: stagger(0.16), easing: bouncyEase }
            );

            if (!statsCounted) {
                statsCounted = true;
                document.querySelectorAll('.stat-counter').forEach(counterEl => {
                    const target = parseInt(counterEl.getAttribute('data-target'), 10) || 0;
                    const duration = 2400; // 2.4 detik agar penghitungan terlihat megah & santai
                    const startTime = performance.now();

                    function updateCounter(currentTime) {
                        const elapsed = currentTime - startTime;
                        const progress = Math.min(elapsed / duration, 1);
                        // Ease Out Cubic function
                        const easeOut = 1 - Math.pow(1 - progress, 3);
                        counterEl.textContent = Math.floor(easeOut * target);

                        if (progress < 1) {
                            requestAnimationFrame(updateCounter);
                        } else {
                            counterEl.textContent = target;
                        }
                    }
                    requestAnimationFrame(updateCounter);
                });
            }
        }, inViewCenterConfig);

        /* ==========================================================================
           5. PROJECTS SECTION
           ========================================================================== */
        inView("#projects-header", () => {
            animate("#projects-header", 
                { opacity: [0, 1], y: [45, 0] }, 
                { duration: 1.1, easing: smoothEase }
            );
        }, inViewCenterConfig);

        inView("#projects-grid", () => {
            animate(".project-card", 
                { opacity: [0, 1], y: [65, 0], scale: [0.93, 1] }, 
                { duration: 1.15, delay: stagger(0.2), easing: smoothEase }
            );
        }, inViewCenterConfig);

        // Project Card Hover Animation
        document.querySelectorAll('.project-card').forEach(pCard => {
            pCard.addEventListener('mouseenter', () => {
                animate(pCard, { transform: 'translateY(-8px)' }, { duration: 0.4, easing: smoothEase });
            });
            pCard.addEventListener('mouseleave', () => {
                animate(pCard, { transform: 'translateY(0px)' }, { duration: 0.4, easing: smoothEase });
            });
        });

        /* ==========================================================================
           6. WHY CHOOSE US SECTION
           ========================================================================== */
        inView("#why-header", () => {
            animate("#why-header", 
                { opacity: [0, 1], y: [45, 0] }, 
                { duration: 1.1, easing: smoothEase }
            );
        }, inViewCenterConfig);

        inView(".why-choose-list", () => {
            animate(".why-choose-item", 
                { opacity: [0, 1], x: [-55, 0] }, 
                { duration: 1.1, delay: stagger(0.2), easing: smoothEase }
            );
            animate(".why-icon-wrap", 
                { scale: [0.4, 1.2, 1], rotate: [-25, 5, 0] }, 
                { duration: 1.2, delay: stagger(0.2, { start: 0.15 }), easing: bouncyEase }
            );
        }, inViewCenterConfig);

        document.querySelectorAll('.why-choose-item').forEach(item => {
            item.addEventListener('mouseenter', () => {
                animate(item, { transform: 'translateX(12px)' }, { duration: 0.35, easing: smoothEase });
            });
            item.addEventListener('mouseleave', () => {
                animate(item, { transform: 'translateX(0px)' }, { duration: 0.35, easing: smoothEase });
            });
        });

        /* ==========================================================================
           7. INSIGHTS / BLOG SECTION
           ========================================================================== */
        inView("#insights-header", () => {
            animate("#insights-header", 
                { opacity: [0, 1], y: [45, 0] }, 
                { duration: 1.1, easing: smoothEase }
            );
        }, inViewCenterConfig);

        inView("#insights-grid", () => {
            animate(".blog-card", 
                { opacity: [0, 1], y: [65, 0], scale: [0.93, 1] }, 
                { duration: 1.15, delay: stagger(0.22), easing: smoothEase }
            );
        }, inViewCenterConfig);

        document.querySelectorAll('.blog-card').forEach(bCard => {
            bCard.addEventListener('mouseenter', () => {
                animate(bCard, { transform: 'translateY(-8px)' }, { duration: 0.4, easing: smoothEase });
            });
            bCard.addEventListener('mouseleave', () => {
                animate(bCard, { transform: 'translateY(0px)' }, { duration: 0.4, easing: smoothEase });
            });
        });

        /* ==========================================================================
           8. CLIENTS LOGO MARQUEE SECTION
           ========================================================================== */
        inView("#clients-header", () => {
            animate("#clients-header", 
                { opacity: [0, 1], x: [-45, 0] }, 
                { duration: 1.1, easing: smoothEase }
            );
        }, inViewCenterConfig);

        inView("#clients-marquee", () => {
            animate("#clients-marquee", 
                { opacity: [0, 1], scale: [0.94, 1] }, 
                { duration: 1.25, easing: smoothEase }
            );
        }, inViewCenterConfig);

        /* ==========================================================================
           9. CTA SECTION
           ========================================================================== */
        inView("#contact", () => {
            animate("#cta-card-wrapper", 
                { opacity: [0, 1], y: [60, 0], scale: [0.94, 1] }, 
                { duration: 1.25, easing: smoothEase }
            );
        }, inViewCenterConfig);

        /* ==========================================================================
           10. FAQ SECTION ACCORDION WITH FLUID MOTION
           ========================================================================== */
        inView("#faq-header", () => {
            animate("#faq-header", 
                { opacity: [0, 1], x: [-50, 0] }, 
                { duration: 1.1, easing: smoothEase }
            );
        }, inViewCenterConfig);

        inView("#faq-list", () => {
            animate(".faq-item", 
                { opacity: [0, 1], x: [50, 0] }, 
                { duration: 0.95, delay: stagger(0.12), easing: smoothEase }
            );
        }, inViewCenterConfig);

        // FAQ Toggle logic with Motion One
        const faqToggles = document.querySelectorAll('.faq-toggle');
        faqToggles.forEach(toggle => {
            toggle.addEventListener('click', () => {
                const faqItem = toggle.parentElement;
                const faqContent = faqItem.querySelector('.faq-content');
                const faqIcon = toggle.querySelector('.faq-icon');

                // Close other items
                document.querySelectorAll('.faq-content').forEach(content => {
                    if (content !== faqContent && !content.classList.contains('hidden')) {
                        content.classList.add('hidden');
                    }
                });
                document.querySelectorAll('.faq-icon').forEach(icon => {
                    if (icon !== faqIcon) {
                        icon.style.transform = 'rotate(0deg)';
                    }
                });

                const isHidden = faqContent.classList.contains('hidden');
                faqContent.classList.toggle('hidden');

                if (isHidden) {
                    animate(faqIcon, { transform: 'rotate(180deg)' }, { duration: 0.35, easing: smoothEase });
                    animate(faqContent, { opacity: [0, 1], y: [-15, 0] }, { duration: 0.45, easing: smoothEase });
                } else {
                    animate(faqIcon, { transform: 'rotate(0deg)' }, { duration: 0.35, easing: smoothEase });
                }
            });
        });
    }

    // Auto trigger on script load / DOM ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initMotionAnimations);
    } else {
        initMotionAnimations();
    }
</script>
@endsection
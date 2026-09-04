@extends('layouts.main')

@section('title', 'Tentang Kami - PT. SOLUSI REKATAMA PERSADA')

@section('content')
    <!-- BEGIN: About Hero Section -->
    <header id="about-hero"
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
                class="inline-flex items-center bg-blue-srp justify-center px-4 py-2 border border-border-subtle rounded-lg font-label-sm text-white mb-6 shadow-sm opacity-0 transform">
                Tentang Kami
            </span>

            <!-- Headline Utama -->
            <h1 id="hero-title"
                class="text-4xl md:text-5xl lg:text-6xl text-[#333333] max-w-4xl mb-6 tracking-tight font-sans font-bold leading-tight opacity-0 transform">
                Mitra Terpercaya dalam Transformasi Digital Industri
            </h1>

            <!-- Deskripsi -->
            <p id="hero-desc"
                class="font-sans text-lg md:text-xl text-[#666666] max-w-2xl leading-relaxed opacity-0 transform">
                Berdedikasi untuk memajukan industri manufaktur Indonesia melalui inovasi IoT, RFID, dan AI yang terukur dan
                berkelanjutan.
            </p>

        </div>
    </header>
    <!-- END: About Hero Section -->

    <!-- BEGIN: Hero Gallery Section (Full-Bleed Edge-to-Edge) -->
    <section id="about-hero-gallery" class="py-12 w-full bg-white overflow-hidden">
        <div class="w-full grid grid-cols-1 md:grid-cols-12 gap-4 items-stretch">

            <!-- Left Large Image with Attached 'FROM 2008' Badge -->
            <div id="gallery-left-img"
                class="md:col-span-8 relative overflow-hidden shadow-sm opacity-0 transform min-h-[380px] md:min-h-[520px]">
                <img src="{{ asset('images/about/about-1.jpg') }}" alt="Lingkungan Industri PT SRP"
                    class="w-full h-full object-cover">

                <!-- Floating Badge 'FROM 2008' (Attached to Bottom Right Corner) -->
                <div
                    class="absolute bottom-0 right-0 bg-[#ffdb31] text-[#171b29] px-6 py-4 font-bold shadow-md flex flex-col items-center justify-center z-10">
                    <span class="text-[11px] uppercase tracking-widest font-mono leading-none">FROM</span>
                    <span class="text-2xl font-sans font-extrabold leading-tight mt-0.5">2008</span>
                </div>
            </div>

            <!-- Right Secondary Image -->
            <div id="gallery-right-img"
                class="md:col-span-4 overflow-hidden shadow-sm opacity-0 transform min-h-[380px] md:min-h-[520px]">
                <img src="{{ asset('images/about/about-2.jpg') }}" alt="Pertemuan Profesional Tim PT SRP"
                    class="w-full h-full object-cover">
            </div>

        </div>
    </section>
    <!-- END: Hero Gallery Section -->

    <!-- BEGIN: About Narrative Section -->
    <section id="about-story" class="pt-10 pb-20 px-6 md:px-16 bg-white border-b border-border-subtle overflow-hidden">
        <div class="max-w-[1280px] mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">

            <!-- Left Side: Section Heading -->
            <div id="story-heading" class="lg:col-span-5 opacity-0 transform">
                <span class="font-mono text-xs font-semibold text-blue-srp uppercase tracking-wider block mb-3">
                    TENTANG PERUSAHAAN
                </span>
                <h2
                    class="font-sans text-3xl md:text-4xl lg:text-5xl font-bold text-[#171b29] leading-tight tracking-tight">
                    Inovasi Tanpa Batas: Siapa Kami
                </h2>
            </div>

            <!-- Right Side: Narrative Content -->
            <div id="story-content" class="lg:col-span-7 flex flex-col gap-6 opacity-0 transform">
                <p class="font-sans text-base md:text-lg text-gray-700 leading-relaxed">
                    <strong class="font-semibold text-[#171b29]">PT. Solusi Rekatama Persada</strong> adalah pemimpin di
                    bidang Otomasi Industri, dengan spesialisasi pada teknologi RFID, Internet of Things (IoT), Artificial
                    Intelligence (AI), dan Robotik. Berawal di tahun 2008 sebagai CV. Rekatama Elektronika Persada, evolusi
                    kami menjadi PT di tahun 2022 mencerminkan dedikasi kami yang semakin matang dalam mendigitalisasi
                    industri Indonesia.
                </p>
                <p class="font-sans text-base md:text-lg text-gray-700 leading-relaxed">
                    Sebagai penyedia <em class="font-semibold text-[#171b29] not-italic">'One Stop Solution'</em>,
                    keunggulan utama kami terletak pada kapabilitas desain, prototyping, hingga produksi modul elektronik
                    kustom. Didukung oleh tenaga ahli kompeten dan kemitraan strategis global, kami melayani berbagai
                    sektor—mulai dari manufaktur dan pertambangan hingga layanan kesehatan dan pendidikan—dengan solusi yang
                    teruji, andal, dan inovatif.
                </p>
            </div>

        </div>
    </section>
    <!-- END: About Narrative Section -->

    <!-- BEGIN: Our Story & Vision Mission Section -->
    <section id="about-our-story"
        class="py-20 md:py-28 px-6 md:px-16 bg-bg-light border-b border-border-subtle overflow-hidden">
        <div class="max-w-[1280px] mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">

            <!-- Left Column: Our Story & CEO Message -->
            <div id="story-left-col" class="lg:col-span-6 flex flex-col opacity-0 transform">
                <!-- Section Subtitle / Category Tag -->
                <span class="font-mono text-xs font-semibold text-blue-srp uppercase tracking-wider block mb-3">
                    OUR STORY
                </span>

                <!-- Main Heading -->
                <h2
                    class="font-sans text-3xl md:text-4xl lg:text-5xl font-bold text-[#171b29] leading-tight tracking-tight mb-8">
                    Di Tahun 2008, Perjalanan Inovasi Kami Dimulai dengan Sebuah Visi Berani.
                </h2>

                <!-- Message From Leadership Block -->
                <div class="mt-8 pt-8 border-t border-border-subtle">
                    <span class="font-mono text-xs font-semibold text-gray-500 uppercase tracking-widest block mb-4">
                        PESAN DARI DIREKSI
                    </span>

                    <blockquote
                        class="font-sans text-xl md:text-2xl font-semibold italic text-[#171b29] leading-snug mb-6 border-l-4 border-yellow-srp pl-5">
                        "Tim yang sukses dibangun di atas fondasi kolaborasi, keandalan teknis, dan komitmen untuk
                        menghadirkan solusi berdampak nyata bagi industri."
                    </blockquote>

                    <!-- Leadership Profile -->
                    <div class="flex items-center gap-4">
                        <img src="{{ asset('images/srp.png') }}" alt="Direktur Utama PT SRP"
                            class="w-14 h-14 rounded-full object-cover border-2 border-border-subtle shadow-sm">
                        <div class="flex flex-col">
                            <span class="font-sans font-bold text-[#171b29] text-base">Direksi PT. Solusi Rekatama
                                Persada</span>
                            <span class="font-sans text-sm text-gray-500">PT. Solusi Rekatama Persada</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Mission, Vision, and Core Values -->
            <div id="story-right-col" class="lg:col-span-6 flex flex-col gap-8 opacity-0 transform">

                <!-- Item 1: Mission -->
                <div class="story-value-card border-t border-border-subtle pt-6">
                    <h3 class="font-sans text-xl md:text-2xl font-bold text-[#171b29] mb-3 flex items-center gap-2">
                        Misi Kami
                    </h3>
                    <p class="font-sans text-base text-gray-600 leading-relaxed">
                        Menghadirkan solusi otomatisasi industri, IoT, dan RFID terbaik yang dirancang khusus untuk
                        meningkatkan efisiensi, akurasi, serta produktivitas operasional mitra bisnis kami di seluruh
                        Indonesia.
                    </p>
                </div>

                <!-- Item 2: Vision -->
                <div class="story-value-card border-t border-border-subtle pt-6">
                    <h3 class="font-sans text-xl md:text-2xl font-bold text-[#171b29] mb-3 flex items-center gap-2">
                        Visi Kami
                    </h3>
                    <p class="font-sans text-base text-gray-600 leading-relaxed">
                        Menjadi perusahaan pengembang Industrial IoT dan otomatisasi terdepan di Asia Tenggara yang diakui
                        atas inovasi, keandalan teknologi, dan kualitas layanan berstandar internasional.
                    </p>
                </div>

                <!-- Item 3: Core Values -->
                <div class="story-value-card border-t border-border-subtle pt-6">
                    <h3 class="font-sans text-xl md:text-2xl font-bold text-[#171b29] mb-3 flex items-center gap-2">
                        Nilai Utama
                    </h3>
                    <p class="font-sans text-base text-gray-600 leading-relaxed">
                        Integritas tanpa kompromi, inovasi berkelanjutan, orientasi penuh pada kepuasan pelanggan, serta
                        semangat kolaborasi dalam menciptakan nilai tambah di setiap proyek.
                    </p>
                </div>

            </div>

        </div>
    </section>
    <!-- END: Our Story & Vision Mission Section -->

    <!-- BEGIN: Company Stats Section -->
    <section id="about-stats" class="bg-[#171b29] py-20 md:py-28 px-6 md:px-16 overflow-hidden">
        <div class="max-w-[1280px] mx-auto grid grid-cols-1 md:grid-cols-3 gap-12 md:gap-16">

            <!-- Stat 1: Pengalaman -->
            <div class="stat-card flex flex-col gap-4 opacity-0 transform">
                <h3 class="font-sans text-5xl md:text-6xl font-extrabold text-[#ffdb31] tracking-tight">
                    16y+
                </h3>
                <div class="flex flex-col gap-2">
                    <h4 class="font-sans text-xl font-bold text-white">
                        Pengalaman Industri
                    </h4>
                    <p class="font-sans text-sm text-gray-400 leading-relaxed">
                        Berdiri sejak tahun 2008, kami berpengalaman selama lebih dari 16 tahun dalam merancang dan
                        mengimplementasikan sistem otomatisasi serta IoT di Indonesia.
                    </p>
                </div>
            </div>

            <!-- Stat 2: Proyek Sukses -->
            <div class="stat-card flex flex-col gap-4 opacity-0 transform">
                <h3 class="font-sans text-5xl md:text-6xl font-extrabold text-[#ffdb31] tracking-tight">
                    150+
                </h3>
                <div class="flex flex-col gap-2">
                    <h4 class="font-sans text-xl font-bold text-white">
                        Proyek Selesai
                    </h4>
                    <p class="font-sans text-sm text-gray-400 leading-relaxed">
                        Ratusan implementasi solusi perangkat keras dan lunak kustom sukses terpasang pada sektor
                        manufaktur, logistik, kesehatan, dan perbankan.
                    </p>
                </div>
            </div>

            <!-- Stat 3: Mitra & Klien -->
            <div class="stat-card flex flex-col gap-4 opacity-0 transform">
                <h3 class="font-sans text-5xl md:text-6xl font-extrabold text-[#ffdb31] tracking-tight">
                    50+
                </h3>
                <div class="flex flex-col gap-2">
                    <h4 class="font-sans text-xl font-bold text-white">
                        Mitra Perusahaan
                    </h4>
                    <p class="font-sans text-sm text-gray-400 leading-relaxed">
                        Dipercaya oleh puluhan perusahaan nasional dan multinasional sebagai mitra teknologis utama dalam
                        mendukung transformasi digital.
                    </p>
                </div>
            </div>

        </div>
    </section>
    <!-- END: Company Stats Section -->

    <!-- BEGIN: Company Milestones Section -->
    <section id="about-milestones"
        class="py-20 md:py-28 px-6 md:px-16 bg-white overflow-hidden border-b border-border-subtle">
        <div class="max-w-[1280px] mx-auto">

            <!-- Section Header -->
            <div id="milestones-header" class="mb-16 text-left opacity-0 transform">
                <span class="font-mono text-xs font-semibold text-blue-srp uppercase tracking-wider block mb-2">
                    MILESTONES
                </span>
                <h2 class="font-sans text-3xl md:text-4xl lg:text-5xl font-bold text-[#171b29] tracking-tight">
                    Sejarah & Milestone Perusahaan
                </h2>
            </div>

            <!-- Timeline Vertical Wrapper -->
            <div class="relative">
                <!-- Vertical Line (Center on Desktop) -->
                <div class="absolute left-4 md:left-1/2 top-0 bottom-0 w-0.5 bg-blue-srp/30 -translate-x-1/2"></div>

                <div class="space-y-12 md:space-y-16 relative">

                    <!-- Milestone 1: 2008 (Kiri) -->
                    <div
                        class="milestone-item relative flex flex-col md:flex-row items-start md:items-center justify-between opacity-0 transform">
                        <div class="pl-10 md:pl-0 md:w-[45%] mb-4 md:mb-0">
                            <div
                                class="bg-surface-muted p-6 md:p-8 rounded-xl border border-border-subtle shadow-sm hover:shadow-xl hover:-translate-y-1.5 hover:border-blue-srp/40 transition-all duration-500 cursor-pointer">
                                <div
                                    class="inline-flex items-center gap-1.5 px-3 py-1 bg-blue-srp/10 text-blue-srp rounded-full mb-3">
                                    <span class="material-symbols-outlined text-xs">schedule</span>
                                    <span class="font-mono text-xs font-bold">2008</span>
                                </div>
                                <h3 class="font-sans text-xl md:text-2xl font-bold text-[#171b29] mb-2">
                                    Awal Perjalanan (CV. Rekatama Elektronika Persada)
                                </h3>
                                <p class="font-sans text-sm md:text-base text-gray-600 leading-relaxed">
                                    Didirikan sebagai CV dengan fokus utama pada perancangan modul elektronik kustom dan
                                    solusi otomatisasi berskala lokal.
                                </p>
                            </div>
                        </div>
                        <!-- Circle Indicator -->
                        <div
                            class="absolute left-4 md:left-1/2 -translate-x-1/2 w-8 h-8 bg-white border-4 border-blue-srp rounded-full flex items-center justify-center z-10 shadow-sm transition-transform duration-500 hover:scale-125">
                        </div>
                        <div class="hidden md:block md:w-[45%]"></div>
                    </div>

                    <!-- Milestone 2: 2015 (Kanan) -->
                    <div
                        class="milestone-item relative flex flex-col md:flex-row items-start md:items-center justify-between opacity-0 transform">
                        <div class="hidden md:block md:w-[45%]"></div>
                        <!-- Circle Indicator -->
                        <div
                            class="absolute left-4 md:left-1/2 -translate-x-1/2 w-8 h-8 bg-white border-4 border-blue-srp rounded-full flex items-center justify-center z-10 shadow-sm transition-transform duration-500 hover:scale-125">
                        </div>
                        <div class="pl-10 md:pl-0 md:w-[45%] mb-4 md:mb-0">
                            <div
                                class="bg-surface-muted p-6 md:p-8 rounded-xl border border-border-subtle shadow-sm hover:shadow-xl hover:-translate-y-1.5 hover:border-blue-srp/40 transition-all duration-500 cursor-pointer">
                                <div
                                    class="inline-flex items-center gap-1.5 px-3 py-1 bg-blue-srp/10 text-blue-srp rounded-full mb-3">
                                    <span class="material-symbols-outlined text-xs">schedule</span>
                                    <span class="font-mono text-xs font-bold">2015</span>
                                </div>
                                <h3 class="font-sans text-xl md:text-2xl font-bold text-[#171b29] mb-2">
                                    Ekspansi Solusi RFID & Sensor IoT
                                </h3>
                                <p class="font-sans text-sm md:text-base text-gray-600 leading-relaxed">
                                    Mulai memperluas spesialisasi ke teknologi RFID terintegrasi dan pemantauan sensor
                                    berbasis IoT untuk sektor industri manufaktur.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Milestone 3: 2018 (Kiri) -->
                    <div
                        class="milestone-item relative flex flex-col md:flex-row items-start md:items-center justify-between opacity-0 transform">
                        <div class="pl-10 md:pl-0 md:w-[45%] mb-4 md:mb-0">
                            <div
                                class="bg-surface-muted p-6 md:p-8 rounded-xl border border-border-subtle shadow-sm hover:shadow-xl hover:-translate-y-1.5 hover:border-blue-srp/40 transition-all duration-500 cursor-pointer">
                                <div
                                    class="inline-flex items-center gap-1.5 px-3 py-1 bg-blue-srp/10 text-blue-srp rounded-full mb-3">
                                    <span class="material-symbols-outlined text-xs">schedule</span>
                                    <span class="font-mono text-xs font-bold">2018</span>
                                </div>
                                <h3 class="font-sans text-xl md:text-2xl font-bold text-[#171b29] mb-2">
                                    Peluncuran Smart Gateway Mandiri
                                </h3>
                                <p class="font-sans text-sm md:text-base text-gray-600 leading-relaxed">
                                    Berhasil memproduksi hardware lini produk Smart Gateway mandiri untuk konektivitas IoT
                                    industri yang lebih andal dan presisi.
                                </p>
                            </div>
                        </div>
                        <!-- Circle Indicator -->
                        <div
                            class="absolute left-4 md:left-1/2 -translate-x-1/2 w-8 h-8 bg-white border-4 border-blue-srp rounded-full flex items-center justify-center z-10 shadow-sm transition-transform duration-500 hover:scale-125">
                        </div>
                        <div class="hidden md:block md:w-[45%]"></div>
                    </div>

                    <!-- Milestone 4: 2022 (Kanan - Highlight) -->
                    <div
                        class="milestone-item relative flex flex-col md:flex-row items-start md:items-center justify-between opacity-0 transform">
                        <div class="hidden md:block md:w-[45%]"></div>
                        <!-- Circle Indicator -->
                        <div
                            class="absolute left-4 md:left-1/2 -translate-x-1/2 w-8 h-8 bg-white border-4 border-yellow-srp rounded-full flex items-center justify-center z-10 shadow-sm transition-transform duration-500 hover:scale-125">
                        </div>
                        <div class="pl-10 md:pl-0 md:w-[45%] mb-4 md:mb-0">
                            <div
                                class="bg-blue-srp p-6 md:p-8 rounded-xl shadow-md hover:shadow-2xl hover:-translate-y-1.5 transition-all duration-500 text-white cursor-pointer">
                                <div
                                    class="inline-flex items-center gap-1.5 px-3 py-1 bg-white/20 text-white rounded-full mb-3">
                                    <span class="material-symbols-outlined text-xs">schedule</span>
                                    <span class="font-mono text-xs font-bold">2022</span>
                                </div>
                                <h3 class="font-sans text-xl md:text-2xl font-bold mb-2">
                                    Transformasi Menjadi PT. Solusi Rekatama Persada
                                </h3>
                                <p class="font-sans text-sm md:text-base text-white/90 leading-relaxed">
                                    Evolusi resmi menjadi Perseroan Terbatas (PT) guna memperkuat struktur tata kelola dan
                                    kesiapan melayani mitra korporasi skala besar.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Milestone 5: 2024 (Kiri) -->
                    <div
                        class="milestone-item relative flex flex-col md:flex-row items-start md:items-center justify-between opacity-0 transform">
                        <div class="pl-10 md:pl-0 md:w-[45%] mb-4 md:mb-0">
                            <div
                                class="bg-yellow-srp p-6 md:p-8 rounded-xl shadow-md hover:shadow-2xl hover:-translate-y-1.5 transition-all duration-500 text-[#171b29] cursor-pointer">
                                <div
                                    class="inline-flex items-center gap-1.5 px-3 py-1 bg-black/10 text-[#171b29] rounded-full mb-3">
                                    <span class="material-symbols-outlined text-xs">schedule</span>
                                    <span class="font-mono text-xs font-bold">2024</span>
                                </div>
                                <h3 class="font-sans text-xl md:text-2xl font-bold mb-2">
                                    Penyedia Industrial IoT & RFID Terdepan
                                </h3>
                                <p class="font-sans text-sm md:text-base text-[#171b29]/80 leading-relaxed">
                                    Mengintegrasikan AI ke dalam platform IoT dan memperluas jangkauan implementasi solusi
                                    ke ratusan titik industri nasional.
                                </p>
                            </div>
                        </div>
                        <!-- Circle Indicator -->
                        <div
                            class="absolute left-4 md:left-1/2 -translate-x-1/2 w-8 h-8 bg-white border-4 border-yellow-srp rounded-full flex items-center justify-center z-10 shadow-sm transition-transform duration-500 hover:scale-125">
                        </div>
                        <div class="hidden md:block md:w-[45%]"></div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- END: Company Milestones Section -->

    <!-- BEGIN: Trusted Clients Section (5x3 Grid) -->
    <section id="about-clients"
        class="py-20 md:py-28 px-6 md:px-16 bg-surface-muted overflow-hidden border-b border-border-subtle">
        <div class="max-w-[1280px] mx-auto">

            <!-- Section Header -->
            <div id="clients-header" class="text-center max-w-3xl mx-auto mb-16 opacity-0 transform">
                <span class="font-mono text-xs font-semibold text-blue-srp uppercase tracking-wider block mb-3">
                    MITRA & KLIEN KAMI
                </span>
                <h2 class="font-sans text-3xl md:text-4xl lg:text-5xl font-bold text-[#171b29] tracking-tight mb-4">
                    Dipercaya oleh Pemimpin Industri di Seluruh Indonesia
                </h2>
                <p class="font-sans text-base md:text-lg text-gray-600 leading-relaxed">
                    Kami bangga menjadi mitra teknologi pilihan bagi berbagai instansi pemerintahan, perusahaan BUMN, serta
                    korporasi swasta dalam mengakselerasi transformasi digital.
                </p>
            </div>

            <!-- Logo Grid 5x3 -->
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-6 items-center">

                <!-- Row 1 -->
                <div
                    class="client-logo-card bg-white p-6 rounded-xl border border-border-subtle shadow-sm hover:shadow-lg hover:-translate-y-1.5 hover:border-blue-srp/30 transition-all duration-500 flex items-center justify-center opacity-0 transform h-28 cursor-pointer group">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/2/22/Telkom_Indonesia_logo.png"
                        alt="Telkom Indonesia"
                        class="max-h-12 w-auto object-contain grayscale group-hover:grayscale-0 transition-all duration-500">
                </div>

                <div
                    class="client-logo-card bg-white p-6 rounded-xl border border-border-subtle shadow-sm hover:shadow-lg hover:-translate-y-1.5 hover:border-blue-srp/30 transition-all duration-500 flex items-center justify-center opacity-0 transform h-28 cursor-pointer group">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/a/a8/Logo_of_PT_Astra_International_Tbk_terbaru_2025.png"
                        alt="Astra International"
                        class="max-h-12 w-auto object-contain grayscale group-hover:grayscale-0 transition-all duration-500">
                </div>

                <div
                    class="client-logo-card bg-white p-6 rounded-xl border border-border-subtle shadow-sm hover:shadow-lg hover:-translate-y-1.5 hover:border-blue-srp/30 transition-all duration-500 flex items-center justify-center opacity-0 transform h-28 cursor-pointer group">
                    <img src="https://download.logo.wine/logo/Google/Google-Logo.wine.png" alt="Google"
                        class="max-h-12 w-auto object-contain grayscale group-hover:grayscale-0 transition-all duration-500">
                </div>

                <div
                    class="client-logo-card bg-white p-6 rounded-xl border border-border-subtle shadow-sm hover:shadow-lg hover:-translate-y-1.5 hover:border-blue-srp/30 transition-all duration-500 flex items-center justify-center opacity-0 transform h-28 cursor-pointer group">
                    <img src="https://iconlogovector.com/uploads/images/2023/06/lg-c59d473ed3003d93c070836a79e80a6b79.jpg"
                        alt="Gojek"
                        class="max-h-12 w-auto object-contain grayscale group-hover:grayscale-0 transition-all duration-500">
                </div>

                <div
                    class="client-logo-card bg-white p-6 rounded-xl border border-border-subtle shadow-sm hover:shadow-lg hover:-translate-y-1.5 hover:border-blue-srp/30 transition-all duration-500 flex items-center justify-center opacity-0 transform h-28 cursor-pointer group">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/eb/Logo_ovo_purple.svg/3840px-Logo_ovo_purple.svg.png"
                        alt="OVO"
                        class="max-h-12 w-auto object-contain grayscale group-hover:grayscale-0 transition-all duration-500">
                </div>

                <!-- Row 2 -->
                <div
                    class="client-logo-card bg-white p-6 rounded-xl border border-border-subtle shadow-sm hover:shadow-lg hover:-translate-y-1.5 hover:border-blue-srp/30 transition-all duration-500 flex items-center justify-center opacity-0 transform h-28 cursor-pointer group">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Logo_Acer.png" alt="Acer"
                        class="max-h-10 w-auto object-contain grayscale group-hover:grayscale-0 transition-all duration-500">
                </div>

                <div
                    class="client-logo-card bg-white p-6 rounded-xl border border-border-subtle shadow-sm hover:shadow-lg hover:-translate-y-1.5 hover:border-blue-srp/30 transition-all duration-500 flex items-center justify-center opacity-0 transform h-28 cursor-pointer group">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/9/97/Logo_PLN.png" alt="PLN"
                        class="max-h-12 w-auto object-contain grayscale group-hover:grayscale-0 transition-all duration-500">
                </div>

                <div
                    class="client-logo-card bg-white p-6 rounded-xl border border-border-subtle shadow-sm hover:shadow-lg hover:-translate-y-1.5 hover:border-blue-srp/30 transition-all duration-500 flex items-center justify-center opacity-0 transform h-28 cursor-pointer group">
                    <img src="https://thumb.wikimedia.org/wikipedia/commons/thumb/c/c3/BPJS_Ketenagakerjaan_logo.svg/3840px-BPJS_Ketenagakerjaan_logo.svg.png"
                        alt="BPJS Ketenagakerjaan"
                        class="max-h-12 w-auto object-contain grayscale group-hover:grayscale-0 transition-all duration-500">
                </div>

                <div
                    class="client-logo-card bg-white p-6 rounded-xl border border-border-subtle shadow-sm hover:shadow-lg hover:-translate-y-1.5 hover:border-blue-srp/30 transition-all duration-500 flex items-center justify-center opacity-0 transform h-28 cursor-pointer group">
                    <img src="https://upload.wikimedia.org/wikipedia/id/4/4c/Paragoncorp-logo.png" alt="ParagonCorp"
                        class="max-h-12 w-auto object-contain grayscale group-hover:grayscale-0 transition-all duration-500">
                </div>

                <div
                    class="client-logo-card bg-white p-6 rounded-xl border border-border-subtle shadow-sm hover:shadow-lg hover:-translate-y-1.5 hover:border-blue-srp/30 transition-all duration-500 flex items-center justify-center opacity-0 transform h-28 cursor-pointer group">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/f/f8/Pegadaian_new_logo.png" alt="Pegadaian"
                        class="max-h-12 w-auto object-contain grayscale group-hover:grayscale-0 transition-all duration-500">
                </div>

                <!-- Row 3 -->
                <div
                    class="client-logo-card bg-white p-6 rounded-xl border border-border-subtle shadow-sm hover:shadow-lg hover:-translate-y-1.5 hover:border-blue-srp/30 transition-all duration-500 flex items-center justify-center opacity-0 transform h-28 cursor-pointer group">
                    <img src="https://storage.googleapis.com/palma/mandau/mPGXtidpBiOq-sHHpxsx.png"
                        alt="Tower Bersama Group"
                        class="max-h-12 w-auto object-contain grayscale group-hover:grayscale-0 transition-all duration-500">
                </div>

                <div
                    class="client-logo-card bg-white p-6 rounded-xl border border-border-subtle shadow-sm hover:shadow-lg hover:-translate-y-1.5 hover:border-blue-srp/30 transition-all duration-500 flex items-center justify-center opacity-0 transform h-28 cursor-pointer group">
                    <img src="https://itdp-indonesia.org/wp-content/uploads/2020/04/WhatsApp-Image-2020-04-06-at-09.59.05-1.jpeg"
                        alt="MRT Jakarta"
                        class="max-h-12 w-auto object-contain grayscale group-hover:grayscale-0 transition-all duration-500">
                </div>

                <div
                    class="client-logo-card bg-white p-6 rounded-xl border border-border-subtle shadow-sm hover:shadow-lg hover:-translate-y-1.5 hover:border-blue-srp/30 transition-all duration-500 flex items-center justify-center opacity-0 transform h-28 cursor-pointer group">
                    <img src="https://play-lh.googleusercontent.com/sQgkU8eGZcZZI42fADthcZGRpfFTsCrOotKgQWFbwzPURnYD2e6fj4Cr20oXwKyBoApSkdbBqmpta26cCslZxA"
                        alt="TIX ID"
                        class="max-h-12 w-auto object-contain grayscale group-hover:grayscale-0 transition-all duration-500">
                </div>

                <div
                    class="client-logo-card bg-white p-6 rounded-xl border border-border-subtle shadow-sm hover:shadow-lg hover:-translate-y-1.5 hover:border-blue-srp/30 transition-all duration-500 flex items-center justify-center opacity-0 transform h-28 cursor-pointer group">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/4/42/OLX_New_Logo.png" alt="OLX"
                        class="max-h-12 w-auto object-contain grayscale group-hover:grayscale-0 transition-all duration-500">
                </div>

                <div
                    class="client-logo-card bg-white p-6 rounded-xl border border-border-subtle shadow-sm hover:shadow-lg hover:-translate-y-1.5 hover:border-blue-srp/30 transition-all duration-500 flex items-center justify-center opacity-0 transform h-28 cursor-pointer group">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/c/c0/Logo_Erajaya.png" alt="Erajaya"
                        class="max-h-12 w-auto object-contain grayscale group-hover:grayscale-0 transition-all duration-500">
                </div>

            </div>

            <!-- Bottom Subtext -->
            <div id="clients-subtext" class="text-center mt-12 opacity-0 transform">
                <span class="font-sans text-xl md:text-2xl font-bold text-[#171b29]">
                    dan masih banyak lagi...
                </span>
            </div>

        </div>
    </section>
    <!-- END: Trusted Clients Section -->

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
                    class="mt-auto hidden md:block rounded-xl overflow-hidden shadow-2xl border border-white/10 aspect-w-16 aspect-h-9 opacity-0 transform">
                    <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&w=800&q=80"
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

    <!-- BEGIN: CTA Section -->
    <section class="py-24 px-6 md:px-16 bg-bg-light overflow-hidden" id="contact">
        <div class="max-w-[1280px] mx-auto">
            <div id="cta-card-wrapper" class="w-full opacity-0 transform">
                <x-cta-card badge="DISKUSI PROYEK" title="Punya Proyek Otomasi atau IoT yang Ingin Diwujudkan?"
                    description="Ceritakan tantangan teknis tim Anda. Kami siap merancang arsitektur sistem dan memberikan estimasi solusi yang tepat sasaran."
                    buttonText="Mulai Konsultasi Proyek" buttonLink="#contact" email="info@ptsrp.co.id"
                    imgRight="images/cta/cta-1.jpg" imgLeft="images/cta/cta-2.jpg" />
            </div>
        </div>
    </section>
    <!-- END: CTA Section -->

    <!-- SCRIPT: MOTION ONE ANIMATIONS FOR ABOUT PAGE (2 SECONDS DURATION) -->
    <script>
        function initAboutHeroMotion() {
            const motionLib = window.Motion;
            if (!motionLib) {
                setTimeout(initAboutHeroMotion, 40);
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

            // 1. Hero Text Entrance (2s Duration)
            animate("#hero-badge", {
                opacity: [0, 1],
                y: [30, 0]
            }, {
                duration: 2.0,
                easing: smoothEase
            });

            animate("#hero-title", {
                opacity: [0, 1],
                y: [35, 0]
            }, {
                duration: 2.0,
                delay: 0.3,
                easing: smoothEase
            });

            animate("#hero-desc", {
                opacity: [0, 1],
                y: [40, 0]
            }, {
                duration: 2.0,
                delay: 0.5,
                easing: smoothEase
            });

            // 2. Hero Gallery Section Entrance (2s Duration)
            inView("#about-hero-gallery", () => {
                animate("#gallery-left-img", {
                    opacity: [0, 1],
                    y: [45, 0],
                    scale: [0.97, 1]
                }, {
                    duration: 2.0,
                    easing: smoothEase
                });

                animate("#gallery-right-img", {
                    opacity: [0, 1],
                    y: [45, 0],
                    scale: [0.97, 1]
                }, {
                    duration: 2.0,
                    delay: 0.3,
                    easing: smoothEase
                });
            }, inViewConfig);

            // 3. Narrative Section Entrance (2s Duration)
            inView("#about-story", () => {
                animate("#story-heading", {
                    opacity: [0, 1],
                    y: [35, 0]
                }, {
                    duration: 2.0,
                    easing: smoothEase
                });

                animate("#story-content", {
                    opacity: [0, 1],
                    y: [40, 0]
                }, {
                    duration: 2.0,
                    delay: 0.3,
                    easing: smoothEase
                });
            }, inViewConfig);

            // 4. Our Story & Vision Mission Entrance (2s Duration)
            inView("#about-our-story", () => {
                animate("#story-left-col", {
                    opacity: [0, 1],
                    y: [40, 0]
                }, {
                    duration: 2.0,
                    easing: smoothEase
                });

                animate("#story-right-col", {
                    opacity: [0, 1],
                    y: [45, 0]
                }, {
                    duration: 2.0,
                    delay: 0.3,
                    easing: smoothEase
                });
            }, inViewConfig);

            // 5. Company Stats Section Entrance (2s Duration)
            inView("#about-stats", () => {
                animate(".stat-card", {
                    opacity: [0, 1],
                    y: [40, 0]
                }, {
                    duration: 2.0,
                    delay: stagger(0.25),
                    easing: smoothEase
                });
            }, inViewConfig);

            // 6. Milestones Header Entrance (2s Duration)
            inView("#about-milestones", () => {
                animate("#milestones-header", {
                    opacity: [0, 1],
                    y: [35, 0]
                }, {
                    duration: 2.0,
                    easing: smoothEase
                });
            }, inViewConfig);

            // 7. Individual Trigger Per Card saat di-scroll (2s Duration)
            const milestoneCards = document.querySelectorAll('.milestone-item');
            milestoneCards.forEach((card) => {
                inView(card, () => {
                    animate(card, {
                        opacity: [0, 1],
                        y: [45, 0],
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

            // 8. Clients Section Entrance (2s Duration)
            inView("#about-clients", () => {
                animate("#clients-header", {
                    opacity: [0, 1],
                    y: [35, 0]
                }, {
                    duration: 2.0,
                    easing: smoothEase
                });

                animate(".client-logo-card", {
                    opacity: [0, 1],
                    y: [30, 0],
                    scale: [0.95, 1]
                }, {
                    duration: 2.0,
                    delay: stagger(0.1),
                    easing: smoothEase
                });

                animate("#clients-subtext", {
                    opacity: [0, 1],
                    y: [20, 0]
                }, {
                    duration: 2.0,
                    delay: 0.8,
                    easing: smoothEase
                });
            }, inViewConfig);

            // 9. FAQ Section Entrance & Accordion Logic
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
                    delay: 0.3,
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

            // FAQ Accordion Toggle Event Listener
            const accordionToggles = document.querySelectorAll('#faq-accordion-list .faq-accordion-toggle');
            accordionToggles.forEach(toggle => {
                toggle.addEventListener('click', () => {
                    const currentItem = toggle.parentElement;
                    const currentContent = currentItem.querySelector('.faq-accordion-content');
                    const currentIcon = toggle.querySelector('.faq-accordion-icon');

                    // Close other open accordion items
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

            // 10. CTA Section Entrance
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
            document.addEventListener('DOMContentLoaded', initAboutHeroMotion);
        } else {
            initAboutHeroMotion();
        }
    </script>
@endsection

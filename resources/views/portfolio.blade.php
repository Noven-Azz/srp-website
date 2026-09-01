@extends('layouts.main')

@section('title', 'Portfolio - SRP Industrial')

@section('content')
    <!-- BEGIN: Hero Section Portofolio -->
    <header id="portfolio-hero"
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
                class="inline-flex items-center bg-blue-srp justify-center px-4 py-2 border border-border-subtle rounded-lg bg-primary-container font-label-sm text-white mb-6 shadow-sm opacity-0 transform">
                Portofolio Kami
            </span>

            <!-- Headline Utama -->
            <h1 id="hero-title"
                class="text-4xl md:text-5xl lg:text-6xl text-[#333333] max-w-4xl mb-6 tracking-tight font-sans font-bold leading-tight opacity-0 transform">
                Karya Terpilih dengan Arahan & Presisi Tinggi
            </h1>

            <!-- Deskripsi -->
            <p id="hero-desc"
                class="font-sans text-lg md:text-xl text-[#666666] max-w-2xl leading-relaxed opacity-0 transform">
                Koleksi proyek otomatisasi industri, integrasi IoT, dan sistem cerdas yang dirancang dengan strategi matang
                dan keunggulan teknis terbaik.
            </p>

        </div>
    </header>
    <!-- END: Hero Section Portofolio -->

    <!-- BEGIN: Portofolio Grid & Filter Section -->
    <main class="py-24 px-6 md:px-16 bg-surface border-b border-border-subtle overflow-hidden" id="portfolio-grid-section">
        <div class="max-w-[1280px] mx-auto">

            <!-- BEGIN: Minimalist Filter & Search Toolbar (Sesuai Referensi Gambar) -->
            <div id="portfolio-toolbar"
                class="flex flex-col md:flex-row items-stretch md:items-center justify-between gap-4 mb-16 opacity-0 transform">

                <!-- Left Side: Category Buttons -->
                <div id="portfolio-filters" class="flex flex-wrap items-center gap-3">
                    <!-- Active Default: ALL -->
                    <button data-filter="all"
                        class="filter-chip active bg-black text-white border border-black hover:bg-black hover:text-white hover:border-black px-6 py-4 text-xs md:text-sm font-bold uppercase tracking-wider transition-colors duration-200">
                        ALL
                    </button>

                    <!-- Inactive Items: Added hover:text-white -->
                    <button data-filter="pendeteksi-aset"
                        class="filter-chip bg-white text-black border border-gray-300 hover:bg-black hover:text-white hover:border-black px-6 py-4 text-xs md:text-sm font-bold uppercase tracking-wider transition-colors duration-200">
                        PENDETEKSI ASET
                    </button>

                    <button data-filter="pembayaran"
                        class="filter-chip bg-white text-black border border-gray-300 hover:bg-black hover:text-white hover:border-black px-6 py-4 text-xs md:text-sm font-bold uppercase tracking-wider transition-colors duration-200">
                        PEMBAYARAN
                    </button>

                    <button data-filter="perpustakaan"
                        class="filter-chip bg-white text-black border border-gray-300 hover:bg-black hover:text-white hover:border-black px-6 py-4 text-xs md:text-sm font-bold uppercase tracking-wider transition-colors duration-200">
                        PERPUSTAKAAN
                    </button>

                    <button data-filter="kendali-akses"
                        class="filter-chip bg-white text-black border border-gray-300 hover:bg-black hover:text-white hover:border-black px-6 py-4 text-xs md:text-sm font-bold uppercase tracking-wider transition-colors duration-200">
                        KENDALI AKSES
                    </button>

                    <button data-filter="lain-lain"
                        class="filter-chip bg-white text-black border border-gray-300 hover:bg-black hover:text-white hover:border-black px-6 py-4 text-xs md:text-sm font-bold uppercase tracking-wider transition-colors duration-200">
                        LAIN-LAIN
                    </button>
                </div>

                <!-- Right Side: Search Bar -->
                <div class="relative w-full md:w-72 flex items-center">
                    <span
                        class="material-symbols-outlined absolute left-3.5 text-gray-500 text-lg pointer-events-none flex items-center justify-center h-full">
                        search
                    </span>
                    <input type="text" id="portfolio-search" placeholder="SEARCH"
                        class="w-full pl-10 pr-4 py-4 bg-white border border-gray-300 focus:border-black focus:outline-none text-xs md:text-sm font-bold tracking-wider text-black placeholder-gray-400 uppercase transition-colors duration-200 leading-none">
                </div>

            </div>
            <!-- END: Minimalist Filter & Search Toolbar -->

            <!-- Empty State Message if filter/search has no match -->
            <div id="portfolio-empty"
                class="hidden flex-col items-center justify-center py-20 text-center bg-white border border-dashed border-gray-300 my-8">
                <span class="material-symbols-outlined text-5xl text-gray-400 mb-3">manage_search</span>
                <h4 class="text-xl font-bold text-gray-800 mb-1">TIDAK ADA PROYEK YANG COCOK</h4>
                <p class="text-sm text-gray-500 max-w-sm mb-6">Coba gunakan kata kunci lain atau pilih kategori yang
                    berbeda.</p>
                <button id="reset-filter-btn"
                    class="px-6 py-3 bg-black text-white text-xs font-bold uppercase tracking-wider hover:bg-gray-800 transition-colors">
                    RESET FILTER
                </button>
            </div>

            <!-- Projects Grid -->
            <div id="portfolio-grid" class="grid grid-cols-1 md:grid-cols-2 gap-12">

                <!-- Project Card 1: Future Landing Page -->
                <a href="#" data-category="lain-lain"
                    class="project-card portfolio-item group cursor-pointer flex flex-col opacity-0 transform">
                    <div class="w-full overflow-hidden rounded-xl bg-white mb-6 relative shadow-sm border border-[#e0e3e8]"
                        style="aspect-ratio: 16 / 9;">
                        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuB9A3IwngkkOUinqaGM9B_q97fWWSOxRYVCPXGP15yLfrCSlW72NO2KSlJhOMH1qem48xM-bnFnEApcw7FL3jUQpGp37HHTzmPI6zhk7MwAETllK26Lf3b7gKZACXcEvB44csWqZEyhQtXhWffqownOIPnSYDAW96ytQ2Yu2jirebsI9zF8m6h7m4VydhombBWgXX_npMYQZdKmcKav5Qr5yOzqYgNmTW3H9Fka5guG-Iq8X_detUjNGpKIp_kJmCq1XKnhnHKFskBrbw"
                            alt="Future Landing Page"
                            class="w-full h-full object-cover transform transition-transform duration-700 ease-out group-hover:scale-110">
                    </div>
                    <div class="flex justify-between items-start">
                        <div>
                            <h3
                                class="font-sans text-2xl font-bold text-[#333333] mb-1 group-hover:text-[#1f6fa8] transition-colors">
                                Future Landing Page</h3>
                            <p class="font-sans text-sm font-medium text-[#666666] uppercase tracking-wider">WEB DESIGN,
                                2026</p>
                        </div>
                        <span
                            class="material-symbols-outlined text-[#333333] group-hover:text-[#1f6fa8] group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform">north_east</span>
                    </div>
                </a>

                <!-- Project Card 2: Instalasi Saklar Hotel -->
                <a href="#" data-category="kendali-akses"
                    class="project-card portfolio-item group cursor-pointer flex flex-col opacity-0 transform">
                    <div class="w-full overflow-hidden rounded-xl bg-white mb-6 relative shadow-sm border border-[#e0e3e8]"
                        style="aspect-ratio: 16 / 9;">
                        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuAeT0aytRaGfHcuNIAx9HgygHBjCGVENkUV54ovdalgXbCAhVZ86slmOxXE1j9jzm5iispjDmWrD5SfkdTfwGs43mzK-xsJmQoEKImR0VmdoOdupzfiDPrE0-izAqqewjtlv3VAsPjZQo9ptjGEZznSaNqMsvIhY75xgtLqhM8tyu3SdWrbqToj72ekBf5X_86RbtiUa5RV3gZjZKhYqFO3JE2UO2X_9mJ-vjyI5Cd70hNJbU-K9SkgUk0nDN0pnO3VkCzYmfOByjzDLQ"
                            alt="Instalasi Saklar Hotel"
                            class="w-full h-full object-cover transform transition-transform duration-700 ease-out group-hover:scale-110">
                    </div>
                    <div class="flex justify-between items-start">
                        <div>
                            <h3
                                class="font-sans text-2xl font-bold text-[#333333] mb-1 group-hover:text-[#1f6fa8] transition-colors">
                                Instalasi Saklar Hotel</h3>
                            <p class="font-sans text-sm font-medium text-[#666666] uppercase tracking-wider">SMART BUILDING,
                                2024</p>
                        </div>
                        <span
                            class="material-symbols-outlined text-[#333333] group-hover:text-[#1f6fa8] group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform">north_east</span>
                    </div>
                </a>

                <!-- Project Card 3: ITN Card -->
                <a href="#" data-category="pembayaran"
                    class="project-card portfolio-item group cursor-pointer flex flex-col opacity-0 transform">
                    <div class="w-full overflow-hidden rounded-xl bg-white mb-6 relative shadow-sm border border-[#e0e3e8]"
                        style="aspect-ratio: 16 / 9;">
                        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuA-9hnTqLOD3dSUZmJ2juYr-uWPedV_SFy7owVcwvIoUCnvxWS50UR6sFelNY4da1ew66cbe2mf_Eys0DsudepMb5Cx4T-xFeRPPF08Kgnf8o3oDzeeOu633OmU-D5RrgDv2mPRH189iA044mHQV08JYeOgmjBSfX-H912yNgASMDhnbYTxynaqTmTGHA8Y-z_9Rc98-IAycdeA6XW_kDMMKN8BoJZ9z02SIgu7nZh-rJqVr1XUf4tQBC2e7c08ZUsHYnc1F27N8S48Gw"
                            alt="ITN Card"
                            class="w-full h-full object-cover transform transition-transform duration-700 ease-out group-hover:scale-110">
                    </div>
                    <div class="flex justify-between items-start">
                        <div>
                            <h3
                                class="font-sans text-2xl font-bold text-[#333333] mb-1 group-hover:text-[#1f6fa8] transition-colors">
                                ITN Card</h3>
                            <p class="font-sans text-sm font-medium text-[#666666] uppercase tracking-wider">RFID SOLUTIONS,
                                2024</p>
                        </div>
                        <span
                            class="material-symbols-outlined text-[#333333] group-hover:text-[#1f6fa8] group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform">north_east</span>
                    </div>
                </a>

                <!-- Project Card 4: Presensi Kuliah -->
                <a href="#" data-category="perpustakaan"
                    class="project-card portfolio-item group cursor-pointer flex flex-col opacity-0 transform">
                    <div class="w-full overflow-hidden rounded-xl bg-white mb-6 relative shadow-sm border border-[#e0e3e8]"
                        style="aspect-ratio: 16 / 9;">
                        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuAVVeYGJbQy4bROSgMayVWhlqMRGkWTeZK0hN-O2DzzQO2B6JqLY1LbV4pxigypNRTR9A4Uh4uGoNiWVKZiiBpjoL0CLeQGCysHAEulmEFMMtICN2ZhBEXKuB8QtOvIKtP9rk6UHD82JktplerjwoZx9apkc5sFWX8X0QMga6BmSCamP5N276OBfXg6Vq2_YnkmOMKvE3GDHhKi2dRFnALUclpfIJ4wjBndcY4R3BuR4IBgJHDQnTOS4ZbPU49tSuo2RdkR5StWJK4N9g"
                            alt="Presensi Kuliah"
                            class="w-full h-full object-cover transform transition-transform duration-700 ease-out group-hover:scale-110">
                    </div>
                    <div class="flex justify-between items-start">
                        <div>
                            <h3
                                class="font-sans text-2xl font-bold text-[#333333] mb-1 group-hover:text-[#1f6fa8] transition-colors">
                                Presensi Kuliah</h3>
                            <p class="font-sans text-sm font-medium text-[#666666] uppercase tracking-wider">IOT
                                INTEGRATION, 2024</p>
                        </div>
                        <span
                            class="material-symbols-outlined text-[#333333] group-hover:text-[#1f6fa8] group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform">north_east</span>
                    </div>
                </a>

                <!-- Project Card 5: Monitoring Energi Cerdas -->
                <a href="#" data-category="pendeteksi-aset"
                    class="project-card portfolio-item group cursor-pointer flex flex-col opacity-0 transform">
                    <div class="w-full overflow-hidden rounded-xl bg-white mb-6 relative shadow-sm border border-[#e0e3e8]"
                        style="aspect-ratio: 16 / 9;">
                        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuCOzPZ293tMU61JgeqWm_Ab6YjMVsh7OtdiDecroPQTRoiqOXgCCCOOGHtTGJhU47M42t2P7bI1WdvzjfNgvxDtCsln16YYpackso0pxeMrKNr0O8iI9NtUyw6lV8WPR6qt0TXOx6pCPPcft_fJbzsrjM025v762PFx3Kfh0-6HyhSFxrDTzFP4aYAuKMXfbyFMPC0fD-XgZK-rI0xF-Fl-zWAU2J4Cif4NdFhopXj6kj9ZesrnvkMJ"
                            alt="Monitoring Energi Cerdas"
                            class="w-full h-full object-cover transform transition-transform duration-700 ease-out group-hover:scale-110">
                    </div>
                    <div class="flex justify-between items-start">
                        <div>
                            <h3
                                class="font-sans text-2xl font-bold text-[#333333] mb-1 group-hover:text-[#1f6fa8] transition-colors">
                                Monitoring Energi Cerdas</h3>
                            <p class="font-sans text-sm font-medium text-[#666666] uppercase tracking-wider">INDUSTRIAL
                                AUTOMATION, 2024</p>
                        </div>
                        <span
                            class="material-symbols-outlined text-[#333333] group-hover:text-[#1f6fa8] group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform">north_east</span>
                    </div>
                </a>

                <!-- Project Card 6: Automasi Logistik Gudang -->
                <a href="#" data-category="pendeteksi-aset"
                    class="project-card portfolio-item group cursor-pointer flex flex-col opacity-0 transform">
                    <div class="w-full overflow-hidden rounded-xl bg-white mb-6 relative shadow-sm border border-[#e0e3e8]"
                        style="aspect-ratio: 16 / 9;">
                        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC_8566-9g4PwZ4elMbt25DLH6fu7Tz0dZwlc1kpjFNRzuo-OKvjqiIYNTDbns10cUMlWDTtr1-91iV9yd9fqp5zuMo4TXRvwPc169Dmb3XUFAKZW9W-SG0crjnZY1U5w_2H9f_qOWuvbHUv_KWPpiO8qNm6a2NC7gW7_wTbhzq050z83guB2errZ1yYiyudgp8FXtXNQgVmvnuPEfymk-RXn0yCF3tgmWOZpIaZ8L-ozcEZaDxMWJQ"
                            alt="Automasi Logistik Gudang"
                            class="w-full h-full object-cover transform transition-transform duration-700 ease-out group-hover:scale-110">
                    </div>
                    <div class="flex justify-between items-start">
                        <div>
                            <h3
                                class="font-sans text-2xl font-bold text-[#333333] mb-1 group-hover:text-[#1f6fa8] transition-colors">
                                Automasi Logistik Gudang</h3>
                            <p class="font-sans text-sm font-medium text-[#666666] uppercase tracking-wider">LOGISTICS,
                                2024</p>
                        </div>
                        <span
                            class="material-symbols-outlined text-[#333333] group-hover:text-[#1f6fa8] group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform">north_east</span>
                    </div>
                </a>

            </div>

            <!-- Load More Button -->
            <div id="portfolio-load-more" class="mt-16 flex justify-center opacity-0 transform">
                <button
                    class="bg-yellow-srp hover:bg-yellow-200 text-[#374151] font-sans font-bold py-4 px-10 rounded-sm transition-all duration-300 shadow-sm uppercase tracking-wider text-sm hover:scale-105 transform">
                    Load More
                </button>
            </div>

        </div>
    </main>
    <!-- END: Portofolio Grid & Filter Section -->

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

    <!-- BEGIN: CTA Section (Portofolio) -->
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
    <!-- END: CTA Section (Portofolio) -->

    <!-- SCRIPT: MASTER MOTION ANIMATION SUITE FOR PORTFOLIO -->
    <script>
        function initPortfolioMotion() {
            const motionLib = window.Motion;

            if (!motionLib) {
                setTimeout(initPortfolioMotion, 40);
                return;
            }

            const {
                animate,
                inView,
                stagger
            } = motionLib;

            // Cinematic smooth easing curves
            const smoothEase = [0.16, 1, 0.3, 1];
            const bouncyEase = [0.34, 1.35, 0.64, 1];

            // Trigger config untuk posisi tengah layar
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
               2. FILTER TOOLBAR & PORTFOLIO GRID ENTRANCE
               ========================================================================== */
            inView("#portfolio-toolbar", () => {
                animate("#portfolio-toolbar", {
                    opacity: [0, 1],
                    y: [35, 0]
                }, {
                    duration: 1.05,
                    easing: smoothEase
                });
            }, inViewCenterConfig);

            inView("#portfolio-grid", () => {
                animate(".portfolio-item", {
                    opacity: [0, 1],
                    y: [60, 0],
                    scale: [0.94, 1]
                }, {
                    duration: 1.1,
                    delay: stagger(0.16),
                    easing: smoothEase
                });
            }, inViewCenterConfig);

            inView("#portfolio-load-more", () => {
                animate("#portfolio-load-more", {
                    opacity: [0, 1],
                    y: [30, 0],
                    scale: [0.95, 1]
                }, {
                    duration: 0.9,
                    delay: 0.2,
                    easing: bouncyEase
                });
            }, inViewCenterConfig);

            // Project Card Hover Lift Effect
            document.querySelectorAll('.portfolio-item').forEach(card => {
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
               3. ADVANCED SEARCH & CHIP FILTERING LOGIC (BLACK & WHITE STYLE)
               ========================================================================== */
            const filterChips = document.querySelectorAll('#portfolio-filters .filter-chip');
            const portfolioItems = document.querySelectorAll('#portfolio-grid .portfolio-item');
            const searchInput = document.getElementById('portfolio-search');
            const emptyStateEl = document.getElementById('portfolio-empty');
            const resetFilterBtn = document.getElementById('reset-filter-btn');

            let currentFilter = 'all';
            let currentSearch = '';

            function applyFilterAndSearch() {
                let visibleCount = 0;
                const matchingItems = [];
                const nonMatchingItems = [];

                portfolioItems.forEach(item => {
                    const itemCategory = item.getAttribute('data-category');
                    const titleText = (item.querySelector('h3') ? item.querySelector('h3').textContent : '')
                        .toLowerCase();
                    const subtitleText = (item.querySelector('p') ? item.querySelector('p').textContent : '')
                        .toLowerCase();

                    const matchesCategory = (currentFilter === 'all' || itemCategory === currentFilter);
                    const matchesSearch = (!currentSearch || titleText.includes(currentSearch) || subtitleText
                        .includes(currentSearch));

                    if (matchesCategory && matchesSearch) {
                        matchingItems.push(item);
                        visibleCount++;
                    } else {
                        nonMatchingItems.push(item);
                    }
                });

                // Animate out non-matching items
                nonMatchingItems.forEach(item => {
                    animate(item, {
                        opacity: [1, 0],
                        scale: [1, 0.92],
                        y: [0, 20]
                    }, {
                        duration: 0.3,
                        easing: smoothEase
                    }).finished.then(() => {
                        item.style.display = 'none';
                    });
                });

                // Animate in matching items
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

                // Handle Empty State
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

            // Chip button clicks (Black & White Sharp Style)
            filterChips.forEach(chip => {
                chip.addEventListener('click', () => {
                    currentFilter = chip.getAttribute('data-filter');

                    // Reset semua tombol ke kondisi Inactive (Background putih, border abu-abu, teks hitam)
                    filterChips.forEach(c => {
                        c.classList.remove('bg-black', 'text-white', 'border-black', 'active');
                        c.classList.add('bg-white', 'text-black', 'border-gray-300');
                    });

                    // Set tombol yang di-klik menjadi Active (Background hitam, teks putih)
                    chip.classList.add('bg-black', 'text-white', 'border-black', 'active');
                    chip.classList.remove('bg-white', 'text-black', 'border-gray-300');

                    applyFilterAndSearch();
                });
            });

            // Live search typing
            if (searchInput) {
                searchInput.addEventListener('input', (e) => {
                    currentSearch = e.target.value.trim().toLowerCase();
                    applyFilterAndSearch();
                });
            }

            // Reset Filter Button
            if (resetFilterBtn) {
                resetFilterBtn.addEventListener('click', () => {
                    currentFilter = 'all';
                    currentSearch = '';
                    if (searchInput) searchInput.value = '';

                    // Click all chip
                    const allChip = document.querySelector('.filter-chip[data-filter="all"]');
                    if (allChip) allChip.click();
                });
            }

            /* ==========================================================================
               4. FAQ SECTION (DARK THEME) ACCORDION & VISUALS
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

            // Smooth Accordion Toggle with Motion One
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

        // Auto trigger on DOM ready
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', initPortfolioMotion);
        } else {
            initPortfolioMotion();
        }
    </script>
@endsection

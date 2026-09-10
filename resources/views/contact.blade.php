@extends('layouts.main')

@section('title', 'Hubungi Kami - PT. SOLUSI REKATAMA PERSADA')

@section('content')
    <!-- BEGIN: Hero Section Kontak -->
    <header id="contact-hero"
        class="py-16 md:py-24 px-6 md:px-16 bg-surface-muted hero-pattern border-b border-border-subtle relative overflow-hidden">
        <!-- Ambient Floating Orbs -->
        <div class="hero-orb absolute -top-24 -left-24 w-96 h-96 bg-primary/20 rounded-full blur-3xl pointer-events-none">
        </div>
        <div
            class="hero-orb absolute -bottom-24 -right-24 w-96 h-96 bg-yellow-srp/20 rounded-full blur-3xl pointer-events-none">
        </div>

        <div class="max-w-container-max mx-auto px-gutter flex flex-col items-center text-center relative z-10">
            <!-- Badge / Subtitle -->
            <span id="hero-badge"
                class="inline-flex items-center justify-center px-4 py-2 border border-border-subtle rounded-lg bg-blue-srp font-label-sm text-white mb-6 shadow-sm opacity-0 transform">
                Hubungi Kami
            </span>

            <!-- Headline Utama -->
            <h1 id="hero-title"
                class="text-4xl md:text-5xl lg:text-6xl text-[#171b29] max-w-4xl mb-6 tracking-tight font-sans font-bold leading-tight opacity-0 transform">
                Mari Diskusikan Solusi Industri Anda
            </h1>

            <!-- Deskripsi -->
            <p id="hero-desc"
                class="font-sans text-lg md:text-xl text-on-surface-variant max-w-2xl leading-relaxed opacity-0 transform">
                Tim profesional PT. SOLUSI REKATAMA PERSADA siap membantu kebutuhan konsultasi teknis, pengadaan unit,
                hingga integrasi sistem kustom untuk proyek perusahaan Anda.
            </p>
        </div>
    </header>
    <!-- END: Hero Section Kontak -->

    <!-- BEGIN: Contact Form & Info Section -->
    <section class="py-16 md:py-24 px-6 md:px-16 bg-white border-b border-border-subtle overflow-hidden"
        id="contact-section">
        <div class="max-w-[1200px] mx-auto space-y-20">

            <!-- Card Form Kontak 2 Kolom -->
            <div id="contact-card"
                class="bg-white rounded-2xl border border-border-subtle shadow-xl overflow-hidden grid grid-cols-1 lg:grid-cols-12 opacity-0 transform">

                <!-- Kolom Kiri: Foto CS / Visual Support -->
                <div class="lg:col-span-5 relative min-h-[300px] lg:min-h-full bg-gray-100">
                    <img src="{{ asset('images/contact-cs.jpg') }}" alt="Customer Support PT SRP"
                        class="w-full h-full object-cover object-center absolute inset-0">
                </div>

                <!-- Kolom Kanan: Form Input -->
                <div class="lg:col-span-7 p-8 sm:p-12 lg:p-14 flex flex-col justify-center">
                    <h2 class="font-sans text-2xl sm:text-3xl lg:text-4xl font-bold text-[#171b29] mb-2 tracking-tight">
                        Let's get in touch
                    </h2>
                    <p class="font-sans text-sm sm:text-base text-gray-500 mb-8">
                        Fill out the form and we'll get back to you soon!
                    </p>

                    <form action="#" method="POST" class="space-y-6">
                        @csrf
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <!-- Input Nama -->
                            <div>
                                <label for="name"
                                    class="block font-sans text-xs sm:text-sm font-medium text-gray-700 mb-2">
                                    Your name
                                </label>
                                <input type="text" id="name" name="name" placeholder="John Doe"
                                    class="w-full px-4 py-3 rounded-lg border border-gray-200 bg-gray-50/50 text-gray-800 font-sans text-sm focus:outline-none focus:border-blue-srp focus:bg-white transition-all">
                            </div>

                            <!-- Input Email -->
                            <div>
                                <label for="email"
                                    class="block font-sans text-xs sm:text-sm font-medium text-gray-700 mb-2">
                                    Email address
                                </label>
                                <input type="email" id="email" name="email" placeholder="dannis@barrett.com"
                                    class="w-full px-4 py-3 rounded-lg border border-gray-200 bg-gray-50/50 text-gray-800 font-sans text-sm focus:outline-none focus:border-blue-srp focus:bg-white transition-all">
                            </div>
                        </div>

                        <!-- Input Pesan -->
                        <div>
                            <label for="message" class="block font-sans text-xs sm:text-sm font-medium text-gray-700 mb-2">
                                Your message
                            </label>
                            <textarea id="message" name="message" rows="4" placeholder="Write your message here"
                                class="w-full px-4 py-3 rounded-lg border border-gray-200 bg-gray-50/50 text-gray-800 font-sans text-sm focus:outline-none focus:border-blue-srp focus:bg-white transition-all resize-none"></textarea>
                        </div>

                        <!-- Tombol Submit -->
                        <div>
                            <button type="submit"
                                class="px-8 py-3.5 bg-[#1e293b] text-white font-sans font-semibold text-sm rounded-lg hover:bg-[#0f172a] transition-all shadow-md hover:shadow-lg hover:scale-[1.02] active:scale-95">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>

            </div>

            <!-- 3 Kolom Info Kontak di Bawah -->
            <div id="contact-info-grid" class="grid grid-cols-1 md:grid-cols-3 gap-8 pt-6">

                <!-- Info 1: Lokasi -->
                <div class="flex flex-col items-center text-center space-y-3 group">
                    <div
                        class="w-14 h-14 rounded-full bg-blue-50 text-blue-srp flex items-center justify-center transition-transform group-hover:scale-110">
                        <span class="material-symbols-outlined text-2xl">location_on</span>
                    </div>
                    <h3 class="font-sans font-bold text-base text-[#171b29]">Office Location</h3>
                    <p class="font-sans text-sm text-gray-500">Moonshine St. 14, London</p>
                </div>

                <!-- Info 2: No Telepon -->
                <div
                    class="flex flex-col items-center text-center space-y-3 border-y md:border-y-0 md:border-x border-gray-100 py-6 md:py-0 group">
                    <div
                        class="w-14 h-14 rounded-full bg-blue-50 text-blue-srp flex items-center justify-center transition-transform group-hover:scale-110">
                        <span class="material-symbols-outlined text-2xl">call</span>
                    </div>
                    <h3 class="font-sans font-bold text-base text-[#171b29]">Phone Number</h3>
                    <p class="font-sans text-sm text-gray-500">00 (123) 456 78 90</p>
                </div>

                <!-- Info 3: Email -->
                <div class="flex flex-col items-center text-center space-y-3 group">
                    <div
                        class="w-14 h-14 rounded-full bg-blue-50 text-blue-srp flex items-center justify-center transition-transform group-hover:scale-110">
                        <span class="material-symbols-outlined text-2xl">mail</span>
                    </div>
                    <h3 class="font-sans font-bold text-base text-[#171b29]">Email Address</h3>
                    <p class="font-sans text-sm text-gray-500">contact@lumi.com</p>
                </div>

            </div>

        </div>
    </section>
    <!-- END: Contact Form & Info Section -->

    <!-- BEGIN: FAQ Section -->
    <section class="py-24 bg-surface-muted overflow-hidden" id="faq-section">
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
                    Informasi seputar konsultasi, layanan pengadaan, dan jam operasional PT. SOLUSI REKATAMA PERSADA.
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
                            Berapa lama waktu respon tim sales setelah saya mengirimkan pesan?
                        </span>
                        <span
                            class="material-symbols-outlined text-blue-srp text-2xl transition-transform duration-300 shrink-0 icon-chevron">
                            expand_more
                        </span>
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-white">
                        <p
                            class="px-6 md:px-8 pb-6 font-sans text-base text-gray-600 leading-relaxed border-t border-gray-100 pt-4">
                            Tim sales & technical engineer kami akan merespon pesan Anda maksimal dalam 1x24 jam kerja
                            (Senin - Jumat, 08.00 - 17.00 WIB).
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div
                    class="faq-item bg-white border border-border-subtle rounded-2xl overflow-hidden shadow-sm transition-all duration-300 opacity-0 transform">
                    <button
                        class="faq-trigger w-full px-6 md:px-8 py-6 text-left flex justify-between items-center gap-4 hover:bg-gray-50/80 transition-colors">
                        <span class="font-sans font-bold text-lg md:text-xl text-[#171b29]">
                            Apakah PT. SRP menyediakan layanan konsultasi & demo produk secara langsung?
                        </span>
                        <span
                            class="material-symbols-outlined text-blue-srp text-2xl transition-transform duration-300 shrink-0 icon-chevron">
                            expand_more
                        </span>
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-white">
                        <p
                            class="px-6 md:px-8 pb-6 font-sans text-base text-gray-600 leading-relaxed border-t border-gray-100 pt-4">
                            Ya, kami melayani sesi konsultasi online maupun kunjungan langsung ke kantor/fasilitas Anda
                            untuk melakukan demo perangkat IoT, sistem RFID, serta solusi AI sesuai kebutuhan.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div
                    class="faq-item bg-white border border-border-subtle rounded-2xl overflow-hidden shadow-sm transition-all duration-300 opacity-0 transform">
                    <button
                        class="faq-trigger w-full px-6 md:px-8 py-6 text-left flex justify-between items-center gap-4 hover:bg-gray-50/80 transition-colors">
                        <span class="font-sans font-bold text-lg md:text-xl text-[#171b29]">
                            Bagaimana prosedur pengajuan custom solution atau integrasi sistem?
                        </span>
                        <span
                            class="material-symbols-outlined text-blue-srp text-2xl transition-transform duration-300 shrink-0 icon-chevron">
                            expand_more
                        </span>
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-white">
                        <p
                            class="px-6 md:px-8 pb-6 font-sans text-base text-gray-600 leading-relaxed border-t border-gray-100 pt-4">
                            Anda dapat mengisi formulir kontak di atas dengan menyertakan garis besar kebutuhan proyek. Tim
                            engineer kami akan melakukan *technical assessment* awal dan membuat penawaran solusi
                            terstruktur.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div
                    class="faq-item bg-white border border-border-subtle rounded-2xl overflow-hidden shadow-sm transition-all duration-300 opacity-0 transform">
                    <button
                        class="faq-trigger w-full px-6 md:px-8 py-6 text-left flex justify-between items-center gap-4 hover:bg-gray-50/80 transition-colors">
                        <span class="font-sans font-bold text-lg md:text-xl text-[#171b29]">
                            Dimana alamat lokasi kantor pusat PT. SOLUSI REKATAMA PERSADA?
                        </span>
                        <span
                            class="material-symbols-outlined text-blue-srp text-2xl transition-transform duration-300 shrink-0 icon-chevron">
                            expand_more
                        </span>
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-white">
                        <p
                            class="px-6 md:px-8 pb-6 font-sans text-base text-gray-600 leading-relaxed border-t border-gray-100 pt-4">
                            Kantor pusat dan fasilitas teknis kami berlokasi di wilayah Surabaya, Indonesia. Anda
                            dapat menjadwalkan janji temu melalui formulir kontak atau WhatsApp resmi kami.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- END: FAQ Section -->

    <!-- SCRIPT: FAQ ACCORDION & MOTION ONE ANIMATION -->
    <script>
        // FAQ Accordion Logic
        function initFaqAccordion() {
            const faqItems = document.querySelectorAll('.faq-item');

            faqItems.forEach((item) => {
                const trigger = item.querySelector('.faq-trigger');
                const content = item.querySelector('.faq-content');
                const chevron = item.querySelector('.icon-chevron');

                trigger.addEventListener('click', () => {
                    const isOpen = content.style.maxHeight && content.style.maxHeight !== '0px';

                    // Close all other items
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

        // Motion One Animations
        function initContactPageMotion() {
            const motionLib = window.Motion;

            if (!motionLib) {
                setTimeout(initContactPageMotion, 40);
                return;
            }

            const {
                animate,
                inView,
                stagger
            } = motionLib;
            const smoothEase = [0.16, 1, 0.3, 1];

            // Ambient Background Orbs Pulse Animation
            animate(".hero-orb", {
                scale: [1, 1.15, 1],
                opacity: [0.3, 0.6, 0.3]
            }, {
                duration: 7,
                repeat: Infinity,
                direction: "alternate",
                easing: "ease-in-out"
            });

            // Staggered Entrance Animations (Hero)
            animate("#hero-badge", {
                opacity: [0, 1],
                y: [20, 0]
            }, {
                duration: 1.0,
                easing: smoothEase
            });
            animate("#hero-title", {
                opacity: [0, 1],
                y: [25, 0]
            }, {
                duration: 1.2,
                delay: 0.1,
                easing: smoothEase
            });
            animate("#hero-desc", {
                opacity: [0, 1],
                y: [20, 0]
            }, {
                duration: 1.2,
                delay: 0.2,
                easing: smoothEase
            });

            // Scroll Reveal untuk Form Kontak & 3 Info Grid
            inView("#contact-section", () => {
                animate("#contact-card", {
                    opacity: [0, 1],
                    y: [30, 0]
                }, {
                    duration: 1.2,
                    easing: smoothEase
                });
                animate("#contact-info-grid", {
                    opacity: [0, 1],
                    y: [20, 0]
                }, {
                    duration: 1.2,
                    delay: 0.2,
                    easing: smoothEase
                });
            }, {
                amount: 0.1
            });

            // Scroll Reveal untuk FAQ Section
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
            }, {
                amount: 0.1
            });
        }

        function startScript() {
            initFaqAccordion();
            initContactPageMotion();
        }

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', startScript);
        } else {
            startScript();
        }
    </script>
@endsection

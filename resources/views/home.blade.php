@extends('layouts.main')

@section('content')
<!-- Hero Section -->
<section class="pt-48 pb-32 px-6 relative overflow-hidden bg-gray-900 text-white">
    <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center gap-12">
        <div class="max-w-3xl mx-auto text-center z-10">
            <p class="font-mono text-[#F5E62B] text-xs font-medium tracking-widest uppercase mb-6 animate-hero">Inovasi Industri Masa Depan</p>
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-light tracking-tight leading-[1.1] mb-8 animate-hero">
                Solusi <span class="font-semibold text-[#F5E62B]">RFID, IoT & AI</span> Terdepan untuk Bisnis Anda
            </h1>
            <p class="text-lg text-white/90 mb-12 max-w-xl mx-auto leading-relaxed animate-hero animate-hero-delay-1">
                PT SRP menghadirkan teknologi mutakhir untuk mengotomatisasi, melacak, dan mengoptimalkan operasional industri Anda dengan presisi tinggi.
            </p>
            <div class="flex flex-wrap items-center justify-center gap-4 animate-hero animate-hero-delay-2">
                <a class="px-8 py-4 bg-[#F5E62B] text-gray-900 font-semibold text-sm rounded-sm hover:bg-[#F7B733] transition-colors shadow-sm" href="#contact">Hubungi Kami</a>
                <a class="px-8 py-4 border border-white/30 text-white font-semibold text-sm rounded-sm hover:bg-white/10 transition-colors" href="#solutions">Pelajari Solusi</a>
            </div>
        </div>
    </div>
</section>

<!-- RFID Solutions Summary -->
<section class="py-24 px-6 bg-gray-100 scroll-reveal" id="solutions">
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12">
        <div class="lg:col-span-6 flex flex-col justify-center">
            <p class="font-mono text-gray-500 text-xs font-medium tracking-widest uppercase mb-6">Portofolio Solusi</p>
            <h2 class="text-5xl md:text-6xl font-light text-gray-900 leading-tight mb-12">Sistem RFID & IoT <span class="text-[#1F6FA8]">Terintegrasi</span></h2>
        </div>
        <div class="lg:col-span-6 grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-white p-8 rounded-sm flex flex-col h-full shadow-sm hover-card">
                <h3 class="text-2xl font-bold mb-4 text-gray-900">Kendali Akses</h3>
                <p class="text-gray-600 text-sm leading-relaxed">Sistem keamanan akses cerdas berbasis RFID dan biometrik untuk gedung dan pabrik.</p>
            </div>
            <div class="bg-white p-8 rounded-sm flex flex-col h-full shadow-sm hover-card">
                <h3 class="text-2xl font-bold mb-4 text-gray-900">Perpustakaan</h3>
                <p class="text-gray-600 text-sm leading-relaxed">Otomatisasi peminjaman dan inventarisasi buku massal menggunakan RFID.</p>
            </div>
        </div>
    </div>
</section>

<!-- About Us -->
<section class="px-6 pt-20 pb-12 scroll-reveal bg-[#FFD700]" id="about">
    <div class="max-w-7xl mx-auto px-8">
        <p class="font-mono text-xs font-bold tracking-widest uppercase mb-6 text-black">TENTANG KAMI</p>
        <h2 class="text-5xl md:text-6xl font-bold text-black leading-tight mb-6">Mitra Terpercaya untuk Transformasi Digital.</h2>
        <p class="text-black text-lg leading-relaxed max-w-3xl">PT SRP telah berkomitmen untuk menjadi pionir dalam penyediaan solusi IIoT dan RFID di Indonesia selama lebih dari 10 tahun.</p>
    </div>
</section>
@endsection
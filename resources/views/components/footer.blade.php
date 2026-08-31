@props(['class' => ''])

<footer class="py-16 px-6 md:px-16 border-t border-border bg-white text-text-dark {{ $class }}">
    <div class="max-w-[1280px] mx-auto grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
        
        <!-- Column 1: Brand Logo & Description -->
        <div class="md:col-span-1">
            <a href="#" class="flex items-center gap-3 mb-6 group">
                <!-- Gambar Logo Perusahaan -->
                <img src="{{ asset('images/srp.png') }}" 
                     alt="PT. Solusi Rekatama Persada Logo" 
                     class="h-9 w-auto object-contain">

                <div class="flex flex-col">
                    <span class="font-sans font-bold text-lg tracking-tight text-[#1F6FA8] leading-tight group-hover:text-primary transition-colors">
                        PT. SOLUSI REKATAMA
                    </span>
                    <span class="text-[10px] font-mono text-text-secondary tracking-[2.4px] uppercase">
                        PERSADA
                    </span>
                </div>
            </a>
            <p class="font-sans text-sm text-text-secondary leading-relaxed">
                Penyedia solusi Industrial IoT dan RFID terkemuka di Indonesia, mengoptimalkan proses bisnis melalui teknologi inovatif.
            </p>
        </div>

        <!-- Column 2: Layanan Utama -->
        <div>
            <h4 class="font-sans font-bold text-text-dark mb-6 text-sm uppercase tracking-wider">
                Layanan Utama
            </h4>
            <ul class="space-y-3 font-sans text-sm text-text-secondary">
                <li><a class="hover:text-blue-srp transition-colors" href="#">Sistem RFID</a></li>
                <li><a class="hover:text-blue-srp transition-colors" href="#">Sensor IoT Industri</a></li>
                <li><a class="hover:text-blue-srp transition-colors" href="#">Integrasi ERP</a></li>
                <li><a class="hover:text-blue-srp transition-colors" href="#">Maintenance &amp; Support</a></li>
            </ul>
        </div>

        <!-- Column 3: Perusahaan -->
        <div>
            <h4 class="font-sans font-bold text-text-dark mb-6 text-sm uppercase tracking-wider">
                Perusahaan
            </h4>
            <ul class="space-y-3 font-sans text-sm text-text-secondary">
                <li><a class="hover:text-blue-srp transition-colors" href="#about">Tentang Kami</a></li>
                <li><a class="hover:text-blue-srp transition-colors" href="#">Karir</a></li>
                <li><a class="hover:text-blue-srp transition-colors" href="#">Studi Kasus</a></li>
                <li><a class="hover:text-blue-srp transition-colors" href="#insights">Blog &amp; Artikel</a></li>
            </ul>
        </div>

        <!-- Column 4: Kontak -->
        <div>
            <h4 class="font-sans font-bold text-text-dark mb-6 text-sm uppercase tracking-wider">
                Kontak
            </h4>
            <p class="font-sans text-sm text-text-secondary mb-2">
                <a href="mailto:info@ptsrp.co.id" class="hover:text-blue-srp transition-colors">info@ptsrp.co.id</a>
            </p>
        </div>

    </div>

    <!-- Bottom Copyright -->
    <div class="max-w-[1280px] mx-auto flex flex-col md:flex-row justify-between items-center gap-4 pt-8 border-t border-border">
        <p class="font-sans text-xs text-text-secondary">
            &copy; {{ date('Y') }} PT. Solusi Rekatama Persada. All rights reserved.
        </p>
    </div>
</footer>
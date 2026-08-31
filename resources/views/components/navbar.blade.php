<nav class="w-full bg-white backdrop-blur-md border-b border-[#e0e3e8] sticky top-0 z-50">
    <div class="max-w-[1280px] h-20 mx-auto px-6 flex items-center justify-between">
        <!-- Logo Section -->
        <a href="{{ url('/') }}" class="inline-flex items-center gap-2">
           <!-- LOGO DIPANGGIL DARI PUBLIC/IMAGES -->
            <img src="{{ asset('images/srp.png') }}" alt="Logo PT SRP" class="w-8 h-8 object-contain">
            
            <div class="inline-flex flex-col items-start">
                <span class="font-sans font-bold text-blue-srp text-xl tracking-[-0.50px] leading-7 whitespace-nowrap">
                    PT. SOLUSI REKATAMA
                </span>
                <span class="font-mono font-normal text-[#666666] text-[10px] tracking-[2.00px] leading-[15px] whitespace-nowrap">
                    PERSADA
                </span>
            </div>
        </a>

        <!-- Desktop Navigation Menu -->
        <div class="hidden md:inline-flex items-center gap-8">
            <a href="#solutions" class="font-sans font-normal text-[#666666] text-sm hover:text-[#1f6fa8] transition-colors whitespace-nowrap">
                Portofolio
            </a>
            <a href="#product-categories" class="font-sans font-normal text-[#666666] text-sm hover:text-[#1f6fa8] transition-colors whitespace-nowrap">
                Produk
            </a>
            <a href="#about" class="font-sans font-normal text-[#666666] text-sm hover:text-[#1f6fa8] transition-colors whitespace-nowrap">
                Tentang Kami
            </a>
            <a href="#insights" class="font-sans font-normal text-[#666666] text-sm hover:text-[#1f6fa8] transition-colors whitespace-nowrap">
                Blog
            </a>
            <a href="#contact" class="font-sans font-normal text-[#666666] text-sm hover:text-[#1f6fa8] transition-colors whitespace-nowrap">
                Kontak
            </a>

            <!-- CTA Button -->
            <a href="#contact" class="px-5 py-2.5 bg-yellow-srp  rounded-sm font-sans font-semibold text-[#333333] text-sm transition-colors whitespace-nowrap shadow-sm">
                Get in touch
            </a>
        </div>
    </div>
</nav>
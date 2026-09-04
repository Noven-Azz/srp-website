<nav x-data="{ mobileMenuOpen: false }" class="w-full bg-white backdrop-blur-md border-b border-[#e0e3e8] sticky top-0 z-50">
    <div class="max-w-[1280px] h-20 mx-auto px-4 sm:px-6 flex items-center justify-between">

        <!-- Logo & Brand Section -->
        <a href="{{ url('/') }}" class="inline-flex items-center gap-2 sm:gap-3 shrink-0 group">
            <img src="{{ asset('images/srp.png') }}" alt="Logo PT SRP"
                class="w-7 h-7 sm:w-8 sm:h-8 object-contain transition-transform duration-300 group-hover:scale-105">

            <span
                class="font-sans font-bold text-blue-srp text-xs sm:text-base lg:text-xl tracking-tight whitespace-nowrap">
                PT. SOLUSI REKATAMA PERSADA
            </span>
        </a>

        <!-- Desktop Navigation Menu dengan Smooth Animated Underline -->
        <div class="hidden lg:inline-flex items-center gap-6 xl:gap-8">

            <!-- Portofolio -->
            <a href="{{ route('portfolio') }}"
                class="relative py-1 font-sans text-sm transition-colors duration-300 whitespace-nowrap
                after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-full after:h-[2px] after:bg-blue-srp after:transition-transform after:duration-300 after:ease-out
                {{ request()->routeIs('portfolio*')
                    ? 'font-semibold text-blue-srp after:scale-x-100'
                    : 'font-normal text-[#666666] hover:text-blue-srp after:scale-x-0 hover:after:scale-x-100' }}">
                Portofolio
            </a>

            <!-- Produk -->
            <a href="{{ url('/#product-categories') }}"
                class="relative py-1 font-sans font-normal text-[#666666] text-sm hover:text-blue-srp transition-colors duration-300 whitespace-nowrap
                after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-full after:h-[2px] after:bg-blue-srp after:scale-x-0 hover:after:scale-x-100 after:transition-transform after:duration-300 after:ease-out">
                Produk
            </a>

            <!-- Tentang Kami -->
            <a href="{{ route('about') }}"
                class="relative py-1 font-sans text-sm transition-colors duration-300 whitespace-nowrap
                after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-full after:h-[2px] after:bg-blue-srp after:transition-transform after:duration-300 after:ease-out
                {{ request()->routeIs('about*')
                    ? 'font-semibold text-blue-srp after:scale-x-100'
                    : 'font-normal text-[#666666] hover:text-blue-srp after:scale-x-0 hover:after:scale-x-100' }}">
                Tentang Kami
            </a>

            <!-- Blog -->
            <a href="{{ route('blog') }}"
                class="relative py-1 font-sans text-sm transition-colors duration-300 whitespace-nowrap
                after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-full after:h-[2px] after:bg-blue-srp after:transition-transform after:duration-300 after:ease-out
                {{ request()->routeIs('blog*')
                    ? 'font-semibold text-blue-srp after:scale-x-100'
                    : 'font-normal text-[#666666] hover:text-blue-srp after:scale-x-0 hover:after:scale-x-100' }}">
                Blog
            </a>

            <!-- Kontak -->
            <a href="{{ url('/#contact') }}"
                class="relative py-1 font-sans font-normal text-[#666666] text-sm hover:text-blue-srp transition-colors duration-300 whitespace-nowrap
                after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-full after:h-[2px] after:bg-blue-srp after:scale-x-0 hover:after:scale-x-100 after:transition-transform after:duration-300 after:ease-out">
                Kontak
            </a>

            <!-- CTA Button dengan Smooth Hover Scale -->
            <a href="{{ url('/#contact') }}"
                class="px-5 py-2.5 bg-yellow-srp rounded-sm font-sans font-semibold text-[#333333] text-sm hover:bg-opacity-90 hover:scale-105 active:scale-95 transition-all duration-300 whitespace-nowrap shadow-sm">
                Get in touch
            </a>
        </div>

        <!-- Mobile & Tablet Hamburger Button -->
        <button id="mobile-menu-btn" @click="mobileMenuOpen = !mobileMenuOpen"
            class="lg:hidden p-2 rounded-md text-gray-700 hover:text-blue-srp focus:outline-none cursor-pointer flex items-center justify-center transition-colors duration-200"
            aria-label="Toggle Navigation">
            <span class="material-symbols-outlined text-3xl" id="hamburger-icon">
                menu
            </span>
        </button>
    </div>

    <!-- Mobile & Tablet Navigation Drawer -->
    <div id="mobile-menu" x-show="mobileMenuOpen" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-4"
        class="lg:hidden bg-white border-b border-[#e0e3e8] px-6 pt-4 pb-6 space-y-4 shadow-lg hidden">

        <a href="{{ route('portfolio') }}"
            class="block font-sans text-base py-2 transition-colors duration-200 {{ request()->routeIs('portfolio*') ? 'font-bold text-blue-srp' : 'text-[#666666] hover:text-blue-srp' }}">
            Portofolio
        </a>

        <a href="{{ url('/#product-categories') }}" @click="mobileMenuOpen = false"
            class="block font-sans text-base py-2 text-[#666666] hover:text-blue-srp transition-colors duration-200">
            Produk
        </a>

        <a href="{{ route('about') }}" @click="mobileMenuOpen = false"
            class="block font-sans text-base py-2 transition-colors duration-200 {{ request()->routeIs('about*') ? 'font-bold text-blue-srp' : 'text-[#666666] hover:text-blue-srp' }}">
            Tentang Kami
        </a>

        <a href="{{ route('blog') }}"
            class="block font-sans text-base py-2 transition-colors duration-200 {{ request()->routeIs('blog*') ? 'font-bold text-blue-srp' : 'text-[#666666] hover:text-blue-srp' }}">
            Blog
        </a>

        <a href="{{ url('/#contact') }}" @click="mobileMenuOpen = false"
            class="block font-sans text-base py-2 text-[#666666] hover:text-blue-srp transition-colors duration-200">
            Kontak
        </a>

        <div class="pt-2">
            <a href="{{ url('/#contact') }}" @click="mobileMenuOpen = false"
                class="block w-full text-center px-5 py-3 bg-yellow-srp rounded-sm font-sans font-semibold text-[#333333] text-sm shadow-sm hover:scale-[1.02] transition-transform duration-200">
                Get in touch
            </a>
        </div>
    </div>
</nav>

<!-- JavaScript Toggle Fallback -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');
        const icon = document.getElementById('hamburger-icon');

        if (btn && menu) {
            btn.addEventListener('click', function() {
                menu.classList.toggle('hidden');
                if (menu.classList.contains('hidden')) {
                    icon.textContent = 'menu';
                } else {
                    icon.textContent = 'close';
                }
            });
        }
    });
</script>

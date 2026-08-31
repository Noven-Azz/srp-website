@props([
    'badge' => 'KONSULTASI GRATIS',
    'title' => 'Siap Mendigitalisasi Operasional Perusahaan Anda?',
    'description' => 'Diskusikan kebutuhan operasional tim Anda. Kami siap memberikan solusi praktis dan langkah nyata ke depan.',
    'buttonText' => 'Hubungi Tim Sales Kami',
    'buttonLink' => '#',
    'email' => 'info@ptsrp.co.id',
    'imgRight' => 'images/cta-planning.jpg',
    'imgLeft' => 'images/cta-collaboration.jpg'
])

<!-- Kontainer Utama dengan Class Background Gradient dari tailwind.config.js -->
<div {{ $attributes->merge(['class' => 'relative overflow-hidden rounded-2xl p-8 sm:p-12 md:p-20 text-center border border-border bg-gradient-to-br from-ice-blue-start via-ice-blue-mid to-ice-blue-end']) }}>
    
    <!-- Decorative Background Elements (Soft Glow Effect) -->
    <div class="absolute top-0 left-0 w-full h-full opacity-20 pointer-events-none">
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-primary rounded-full blur-3xl opacity-30"></div>
        <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-primary rounded-full blur-3xl opacity-20"></div>
    </div>

    <!-- Main Content Box -->
    <div class="relative z-10 max-w-3xl mx-auto">
        <!-- Badge -->
        <span class="inline-block px-4 py-1.5 text-primary text-xs font-bold uppercase tracking-[2.4px] rounded-full bg-primary/10 mb-8">
            {{ $badge }}
        </span>

        <!-- Headline -->
        <h2 class="font-sans text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight text-text-dark tracking-tight">
            {{ $title }}
        </h2>

        <!-- Description -->
        <p class="font-sans text-base sm:text-lg md:text-xl text-text-secondary mb-10 max-w-xl mx-auto leading-relaxed">
            {{ $description }}
        </p>

        <!-- Action Button & Email -->
        <div class="flex flex-col items-center gap-6">
            <a href="{{ $buttonLink }}" 
               class="group flex items-center gap-3 px-8 sm:px-10 py-4 sm:py-5 bg-yellow-srp text-text-dark font-bold text-base sm:text-lg rounded-full hover:bg-accent-gold transition-all shadow-md hover:scale-105">
                <span>{{ $buttonText }}</span>
                <span class="material-symbols-outlined bg-white text-text-dark rounded-full p-1 text-sm transition-transform group-hover:translate-x-1">
                    arrow_forward
                </span>
            </a>

            @if($email)
                <p class="font-sans text-sm font-medium text-text-secondary">
                    Atau email kami di <a href="mailto:{{ $email }}" class="text-primary font-bold hover:underline">{{ $email }}</a>
                </p>
            @endif
        </div>
    </div>

    <!-- Floating Decorative Images (Aksen Visual Kiri & Kanan) -->
    @if($imgRight)
        <div class="absolute top-10 right-10 w-44 lg:w-48 h-28 lg:h-32 rotate-6 hidden lg:block rounded-xl overflow-hidden shadow-2xl border-4 border-white transform hover:rotate-0 hover:scale-105 transition-all duration-300">
            <img src="{{ asset($imgRight) }}" alt="Industrial Planning" class="w-full h-full object-cover">
        </div>
    @endif

    @if($imgLeft)
        <div class="absolute bottom-10 left-10 w-44 lg:w-48 h-28 lg:h-32 -rotate-6 hidden lg:block rounded-xl overflow-hidden shadow-2xl border-4 border-white transform hover:rotate-0 hover:scale-105 transition-all duration-300">
            <img src="{{ asset($imgLeft) }}" alt="Team Collaboration" class="w-full h-full object-cover">
        </div>
    @endif
</div>
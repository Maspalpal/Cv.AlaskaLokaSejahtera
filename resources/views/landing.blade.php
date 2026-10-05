<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $company['name'] }} - Solusi Rantai Pendingin Terpercaya</title>
    
    <!-- Meta SEO -->
    <meta name="description" content="{{ $company['executive_summary'] }}">
    <meta name="keywords" content="Cold Storage Tasikmalaya, AC Komersial, Air Blast Freezer, Chiller Industri, Mesin Es Kristal, CV Alaska Loka Sejahtera">

    <!-- Google Fonts: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Tailwind CSS (CDN dengan Konfigurasi Kustom Nuansa Cooling & Ice Blue) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                    },
                    colors: {
                        navy: {
                            800: '#0f172a',
                            900: '#0a1128',
                            950: '#050a1a',
                        },
                        ice: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            200: '#bae6fd',
                            300: '#7dd3fc',
                            400: '#38bdf8',
                            500: '#0ea5e9',
                            600: '#0284c7',
                        }
                    }
                }
            }
        }
    </script>

    <style>
        /* Efek custom styling */
        .glass-nav {
            background: rgba(10, 17, 40, 0.88);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }
        .hero-gradient {
            background: radial-gradient(circle at 80% 20%, rgba(14, 165, 233, 0.18) 0%, rgba(10, 17, 40, 0.98) 70%),
                        linear-gradient(180deg, #0a1128 0%, #050a1a 100%);
        }
        .card-ice-glow:hover {
            box-shadow: 0 10px 30px -10px rgba(14, 165, 233, 0.25);
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 font-sans antialiased selection:bg-ice-500 selection:text-white">

    <!-- ========================================================================= -->
    <!-- 1. NAVBAR (STICKY)                                                       -->
    <!-- ========================================================================= -->
    <header class="sticky top-0 z-50 glass-nav border-b border-white/10 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Logo & Brand Name -->
                <a href="#beranda" class="flex items-center space-x-3 group">
                    <div class="w-11 h-11 rounded-xl bg-gradient-to-tr from-ice-600 to-cyan-300 flex items-center justify-center text-white shadow-lg shadow-ice-500/30 group-hover:scale-105 transition-transform duration-300">
                        <!-- Snowflake Cooling Icon -->
                        <svg class="w-6 h-6 animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 2v20m10-10H2m17.071-7.071l-14.142 14.142m0-14.142l14.142 14.142M12 6l3-3m-3 3l-3-3m0 12l3 3m-3-3l-3 3m12-6l3-3m-3 3l3 3M6 12L3 9m3 3l-3 3" />
                        </svg>
                    </div>
                    <div>
                        <span class="block text-xl font-extrabold text-white tracking-tight leading-none group-hover:text-ice-300 transition-colors">
                            Alaska Loka Sejahtera
                        </span>
                        <span class="block text-xs font-medium text-ice-400 tracking-wider uppercase mt-1">
                            Refrigeration & Cooling Solutions
                        </span>
                    </div>
                </a>

                <!-- Desktop Navigation Menu -->
                <nav class="hidden lg:flex items-center space-x-8 text-sm font-medium text-slate-300">
                    <a href="#beranda" class="hover:text-ice-400 transition-colors py-2">Beranda</a>
                    <a href="#tentang-kami" class="hover:text-ice-400 transition-colors py-2">Tentang Kami</a>
                    <a href="#layanan" class="hover:text-ice-400 transition-colors py-2">Layanan</a>
                    <a href="#keunggulan" class="hover:text-ice-400 transition-colors py-2">Keunggulan</a>
                    <a href="#klien" class="hover:text-ice-400 transition-colors py-2">Klien</a>
                    <a href="#kontak" class="hover:text-ice-400 transition-colors py-2">Kontak</a>
                </nav>

                <!-- CTA Button Hubungi Kami -->
                <div class="hidden lg:flex items-center">
                    <a href="{{ $company['whatsapp_link'] }}" target="_blank" rel="noopener noreferrer" 
                       class="inline-flex items-center space-x-2 bg-gradient-to-r from-ice-500 to-cyan-500 hover:from-ice-600 hover:to-cyan-600 text-white font-semibold text-sm px-6 py-2.5 rounded-full shadow-lg shadow-ice-500/25 transition duration-200 transform hover:-translate-y-0.5">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/>
                        </svg>
                        <span>Hubungi Kami</span>
                    </a>
                </div>

                <!-- Mobile Hamburger Button -->
                <div class="lg:hidden flex items-center">
                    <button id="mobile-menu-toggle" type="button" class="text-slate-300 hover:text-white focus:outline-none p-2 rounded-lg" aria-label="Toggle Navigation Menu">
                        <svg id="hamburger-icon" class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                        </svg>
                        <svg id="close-icon" class="w-7 h-7 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu Dropdown -->
        <div id="mobile-menu" class="hidden lg:hidden bg-navy-950/95 border-b border-white/10 px-4 pt-2 pb-6 space-y-3">
            <a href="#beranda" class="mobile-nav-link block px-3 py-2 rounded-md text-base font-medium text-slate-200 hover:text-ice-400 hover:bg-white/5">Beranda</a>
            <a href="#tentang-kami" class="mobile-nav-link block px-3 py-2 rounded-md text-base font-medium text-slate-200 hover:text-ice-400 hover:bg-white/5">Tentang Kami</a>
            <a href="#layanan" class="mobile-nav-link block px-3 py-2 rounded-md text-base font-medium text-slate-200 hover:text-ice-400 hover:bg-white/5">Layanan</a>
            <a href="#keunggulan" class="mobile-nav-link block px-3 py-2 rounded-md text-base font-medium text-slate-200 hover:text-ice-400 hover:bg-white/5">Keunggulan</a>
            <a href="#klien" class="mobile-nav-link block px-3 py-2 rounded-md text-base font-medium text-slate-200 hover:text-ice-400 hover:bg-white/5">Klien</a>
            <a href="#kontak" class="mobile-nav-link block px-3 py-2 rounded-md text-base font-medium text-slate-200 hover:text-ice-400 hover:bg-white/5">Kontak</a>
            <div class="pt-2">
                <a href="{{ $company['whatsapp_link'] }}" target="_blank" rel="noopener noreferrer" 
                   class="block text-center w-full bg-gradient-to-r from-ice-500 to-cyan-500 text-white font-semibold py-2.5 rounded-xl shadow-md">
                    Hubungi Kami via WhatsApp
                </a>
            </div>
        </div>
    </header>

    <!-- ========================================================================= -->
    <!-- 2. HERO SECTION                                                          -->
    <!-- ========================================================================= -->
    <section id="beranda" class="relative hero-gradient text-white pt-16 pb-24 md:pt-24 md:pb-32 overflow-hidden">
        <!-- Background Ambient Glow & Pattern -->
        <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#38bdf8_1px,transparent_1px)] [background-size:24px_24px] pointer-events-none"></div>
        <div class="absolute -top-40 -right-40 w-96 h-96 bg-ice-500/20 rounded-full blur-3xl pointer-events-none"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <!-- Text Column -->
                <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                    <!-- Badge -->
                    <div class="inline-flex items-center space-x-2 px-3.5 py-1.5 rounded-full bg-ice-500/10 border border-ice-400/30 text-ice-300 text-xs font-semibold tracking-wide uppercase">
                        <span class="w-2 h-2 rounded-full bg-cyan-400 animate-ping"></span>
                        <span>Spesialis Solusi Pendingin Sejak {{ $company['founded_year'] }}</span>
                    </div>

                    <!-- Main Headline -->
                    <h1 class="text-3xl sm:text-5xl lg:text-6xl font-extrabold text-white tracking-tight leading-tight">
                        Solusi Rantai Pendingin Terpercaya untuk Menjaga Kualitas Produk Anda
                    </h1>

                    <!-- Subheadline -->
                    <p class="text-base sm:text-lg text-slate-300 max-w-2xl mx-auto lg:mx-0 font-normal leading-relaxed">
                        Berdedikasi sejak {{ $company['founded_year'] }} menghadirkan penjualan, instalasi, dan pemeliharaan presisi untuk 
                        <span class="text-ice-300 font-medium">Cold Storage, Chiller, Air Blast Freezer, Mesin Es Kristal</span>, serta sistem AC komersial & industri berstandar tinggi.
                    </p>

                    <!-- CTAs -->
                    <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4 pt-4">
                        <a href="#layanan" 
                           class="w-full sm:w-auto inline-flex items-center justify-center space-x-2 px-8 py-3.5 rounded-xl bg-gradient-to-r from-ice-500 to-cyan-500 hover:from-ice-600 hover:to-cyan-600 text-white font-bold text-base shadow-xl shadow-ice-500/20 transition duration-200 transform hover:-translate-y-0.5">
                            <span>Lihat Layanan</span>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </a>
                        <a href="{{ $company['whatsapp_link'] }}" target="_blank" rel="noopener noreferrer" 
                           class="w-full sm:w-auto inline-flex items-center justify-center space-x-2 px-8 py-3.5 rounded-xl bg-white/10 hover:bg-white/15 text-white font-semibold text-base border border-white/20 transition duration-200 backdrop-blur-sm">
                            <svg class="w-5 h-5 text-emerald-400" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/>
                            </svg>
                            <span>Konsultasi Sekarang</span>
                        </a>
                    </div>

                    <!-- Mini Highlights -->
                    <div class="pt-6 grid grid-cols-2 sm:grid-cols-4 gap-4 border-t border-white/10">
                        @foreach($company['stats'] as $stat)
                        <div class="text-center lg:text-left">
                            <div class="text-2xl sm:text-3xl font-extrabold text-ice-400">{{ $stat['value'] }}</div>
                            <div class="text-xs text-slate-300 font-medium">{{ $stat['label'] }}</div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Visual Column (Showcase Card) -->
                <div class="lg:col-span-5 relative">
                    <div class="relative mx-auto max-w-md lg:max-w-none">
                        <!-- Main Card Visual -->
                        <div class="relative rounded-3xl overflow-hidden shadow-2xl border border-white/15 bg-navy-900/60 backdrop-blur-md group">
                            <!-- Dummy Image Placeholder: Cold Room / Industrial HVAC -->
                            <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=1000&q=80" 
                                 alt="CV Alaska Loka Sejahtera Cold Storage Facility" 
                                 class="w-full h-80 sm:h-96 object-cover object-center group-hover:scale-105 transition-transform duration-700">
                            
                            <!-- Card Overlay Badge -->
                            <div class="absolute inset-0 bg-gradient-to-t from-navy-950 via-navy-950/40 to-transparent"></div>
                            
                            <div class="absolute bottom-6 left-6 right-6 p-5 rounded-2xl bg-navy-900/90 border border-white/10 backdrop-blur-md">
                                <div class="flex items-center space-x-3 mb-2">
                                    <div class="w-3 h-3 rounded-full bg-emerald-400 animate-pulse"></div>
                                    <span class="text-xs font-semibold uppercase tracking-wider text-ice-300">Presisi Suhu Optimal</span>
                                </div>
                                <p class="text-sm font-semibold text-white">Suhu Terjaga Akurat (-25°C hingga +5°C)</p>
                                <p class="text-xs text-slate-300 mt-1">Menjamin keamanan rantai pasok daging, ikan, sayuran, dan obat-obatan.</p>
                            </div>
                        </div>

                        <!-- Floating Stat Badge 1 -->
                        <div class="absolute -top-4 -left-4 sm:-left-6 bg-navy-900/90 border border-ice-400/40 rounded-2xl p-4 shadow-xl backdrop-blur-md hidden sm:flex items-center space-x-3">
                            <div class="w-10 h-10 rounded-xl bg-ice-500/20 text-ice-300 flex items-center justify-center font-bold">
                                ❄️
                            </div>
                            <div>
                                <div class="text-xs text-slate-400">Teknologi Terkini</div>
                                <div class="text-sm font-bold text-white">Hemat Energi & Ramah Freon</div>
                            </div>
                        </div>

                        <!-- Floating Stat Badge 2 -->
                        <div class="absolute -bottom-4 -right-4 sm:-right-6 bg-navy-900/90 border border-cyan-400/40 rounded-2xl p-4 shadow-xl backdrop-blur-md hidden sm:flex items-center space-x-3">
                            <div class="w-10 h-10 rounded-xl bg-cyan-500/20 text-cyan-300 flex items-center justify-center font-bold">
                                🛡️
                            </div>
                            <div>
                                <div class="text-xs text-slate-400">Garansi & Suku Cadang</div>
                                <div class="text-sm font-bold text-white">100% Komponen Asli</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 3. TENTANG KAMI (ABOUT US & VISI MISI)                                   -->
    <!-- ========================================================================= -->
    <section id="tentang-kami" class="py-20 sm:py-28 bg-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <!-- Left Column: Story & Overview -->
                <div class="lg:col-span-6 space-y-6">
                    <div class="inline-flex items-center space-x-2 px-3 py-1 rounded-md bg-ice-100 text-ice-600 text-xs font-bold uppercase tracking-wider">
                        Tentang Perusahaan
                    </div>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-navy-900 tracking-tight leading-snug">
                        Mitra Strategis Rekayasa Sistem Pendingin Sejak {{ $company['founded_year'] }}
                    </h2>
                    <p class="text-base text-slate-600 leading-relaxed text-justify">
                        {{ $company['executive_summary'] }}
                    </p>
                    <p class="text-base text-slate-600 leading-relaxed text-justify">
                        Dengan pengalaman lebih dari satu dekade, kami telah dipercaya oleh berbagai sektor usaha mulai dari rumah potong ayam (RPA), industri pengolahan daging, distributor bahan pangan beku, hingga sektor retail komersial dalam menjaga stabilitas mutu dan keamanan temperatur produk mereka.
                    </p>

                    <!-- Scope Focus Badges -->
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 pt-2">
                        <div class="p-3 bg-slate-50 border border-slate-200/80 rounded-xl text-center">
                            <div class="font-bold text-navy-900 text-sm">Penjualan</div>
                            <div class="text-xs text-slate-500 mt-0.5">Unit Original</div>
                        </div>
                        <div class="p-3 bg-slate-50 border border-slate-200/80 rounded-xl text-center">
                            <div class="font-bold text-navy-900 text-sm">Pemasangan</div>
                            <div class="text-xs text-slate-500 mt-0.5">Standar Presisi</div>
                        </div>
                        <div class="p-3 bg-slate-50 border border-slate-200/80 rounded-xl text-center">
                            <div class="font-bold text-navy-900 text-sm">Perawatan</div>
                            <div class="text-xs text-slate-500 mt-0.5">Rutin & Berkala</div>
                        </div>
                        <div class="p-3 bg-slate-50 border border-slate-200/80 rounded-xl text-center">
                            <div class="font-bold text-navy-900 text-sm">Perbaikan</div>
                            <div class="text-xs text-slate-500 mt-0.5">Respon Cepat</div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Visi & Misi Cards -->
                <div class="lg:col-span-6 space-y-6">
                    <!-- Card Visi -->
                    <div class="bg-gradient-to-br from-navy-900 to-navy-950 text-white p-8 rounded-3xl shadow-xl relative overflow-hidden">
                        <div class="absolute -right-10 -bottom-10 w-40 h-40 bg-ice-500/10 rounded-full blur-2xl"></div>
                        <div class="flex items-center space-x-3 mb-4">
                            <span class="w-10 h-10 rounded-xl bg-ice-500/20 text-ice-300 flex items-center justify-center font-bold text-lg">
                                🎯
                            </span>
                            <h3 class="text-xl font-bold tracking-tight text-white">Visi Kami</h3>
                        </div>
                        <p class="text-slate-300 text-sm sm:text-base leading-relaxed">
                            "{{ $company['vision'] }}"
                        </p>
                    </div>

                    <!-- Card Misi -->
                    <div class="bg-ice-50/70 border border-ice-200/70 p-8 rounded-3xl shadow-sm">
                        <div class="flex items-center space-x-3 mb-5">
                            <span class="w-10 h-10 rounded-xl bg-ice-500 text-white flex items-center justify-center font-bold text-lg shadow-md shadow-ice-500/30">
                                🚀
                            </span>
                            <h3 class="text-xl font-bold tracking-tight text-navy-900">Misi Kami</h3>
                        </div>
                        <ul class="space-y-3.5">
                            @foreach($company['mission'] as $index => $item)
                            <li class="flex items-start space-x-3 text-sm text-slate-700">
                                <span class="flex-shrink-0 w-6 h-6 rounded-full bg-ice-200 text-ice-700 flex items-center justify-center font-bold text-xs mt-0.5">
                                    {{ $index + 1 }}
                                </span>
                                <span>{{ $item }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 4. KEUNGGULAN (WHY CHOOSE US)                                             -->
    <!-- ========================================================================= -->
    <section id="keunggulan" class="py-20 sm:py-28 bg-slate-100/70 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
                <div class="inline-flex items-center space-x-2 px-3 py-1 rounded-md bg-ice-100 text-ice-600 text-xs font-bold uppercase tracking-wider">
                    Mengapa Memilih Kami
                </div>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-navy-900 tracking-tight">
                    Keunggulan CV. Alaska Loka Sejahtera
                </h2>
                <p class="text-base text-slate-600">
                    Dedikasi kami dibangun atas standar kualitas tinggi, transparansi harga, dan keandalan sistem pendingin yang berkesinambungan.
                </p>
            </div>

            <!-- Advantages Grid (Me-looping $advantages dari Controller) -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @foreach($advantages as $adv)
                <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-sm hover:shadow-xl transition-all duration-300 card-ice-glow group flex flex-col justify-between">
                    <div>
                        <!-- Icon Box -->
                        <div class="w-12 h-12 rounded-xl bg-ice-50 border border-ice-200 text-ice-600 flex items-center justify-center mb-5 group-hover:bg-ice-500 group-hover:text-white transition-colors duration-300 shadow-sm">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <!-- Advantage Title -->
                        <h3 class="text-lg font-bold text-navy-900 mb-2 group-hover:text-ice-600 transition-colors">
                            {{ $adv['title'] }}
                        </h3>
                        <!-- Advantage Description -->
                        <p class="text-sm text-slate-600 leading-relaxed">
                            {{ $adv['description'] }}
                        </p>
                    </div>

                    <div class="mt-6 pt-4 border-t border-slate-100 flex items-center text-xs font-semibold text-ice-600 group-hover:text-ice-700">
                        <span>Standar Profesional</span>
                        <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 5. LAYANAN KAMI (OUR SERVICES)                                           -->
    <!-- ========================================================================= -->
    <section id="layanan" class="py-20 sm:py-28 bg-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
                <div class="inline-flex items-center space-x-2 px-3 py-1 rounded-md bg-ice-100 text-ice-600 text-xs font-bold uppercase tracking-wider">
                    Layanan & Produk
                </div>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-navy-900 tracking-tight">
                    Solusi Pendinginan Menyeluruh
                </h2>
                <p class="text-base text-slate-600">
                    Menyediakan pengadaan unit baru, fabrikasi custom, instalasi bersertifikasi, serta layanan servis dan kontrak perawatan preventif.
                </p>
            </div>

            <!-- Services Grid (Me-looping $services dari Controller) -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($services as $service)
                <div class="bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 card-ice-glow flex flex-col group">
                    <!-- Service Image Placeholder -->
                    <div class="relative h-56 overflow-hidden bg-slate-900">
                        <img src="{{ $service['image'] }}" 
                             alt="{{ $service['title'] }}" 
                             class="w-full h-full object-cover object-center group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-navy-950/80 via-transparent to-transparent"></div>
                        
                        <!-- Category Badge -->
                        <span class="absolute top-4 left-4 px-3 py-1 rounded-full text-xs font-semibold bg-navy-900/80 text-ice-300 backdrop-blur-md border border-white/10">
                            {{ $service['category'] }}
                        </span>
                    </div>

                    <!-- Service Content -->
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <h3 class="text-xl font-bold text-navy-900 mb-3 group-hover:text-ice-600 transition-colors">
                                {{ $service['title'] }}
                            </h3>
                            <p class="text-sm text-slate-600 leading-relaxed mb-6">
                                {{ $service['description'] }}
                            </p>

                            <!-- Scopes of work -->
                            <div class="space-y-2 mb-6">
                                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider block">Cakupan Layanan:</span>
                                <div class="flex flex-wrap gap-2">
                                    @foreach($service['scopes'] as $scope)
                                    <span class="inline-flex items-center text-xs font-medium px-2.5 py-1 rounded-lg bg-ice-50 text-ice-700 border border-ice-200">
                                        <svg class="w-3 h-3 text-ice-500 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        {{ $scope }}
                                    </span>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <!-- CTA Button on Card -->
                        <div class="pt-4 border-t border-slate-100">
                            <a href="{{ $company['whatsapp_link'] }}&text=Halo%20CV.%20Alaska%20Loka%20Sejahtera,%20saya%20ingin%20konsultasi%20mengenai%20{{ urlencode($service['title']) }}" 
                               target="_blank" rel="noopener noreferrer"
                               class="w-full inline-flex items-center justify-center space-x-2 py-2.5 px-4 rounded-xl bg-slate-50 hover:bg-ice-500 text-slate-700 hover:text-white font-semibold text-sm border border-slate-200 hover:border-ice-500 transition-all duration-200">
                                <span>Konsultasikan Kebutuhan</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 6. KLIEN & PENGALAMAN (OUR CLIENTS)                                      -->
    <!-- ========================================================================= -->
    <section id="klien" class="py-20 sm:py-28 bg-slate-900 text-white relative overflow-hidden">
        <!-- Ambient background shapes -->
        <div class="absolute -top-32 -left-32 w-80 h-80 bg-ice-600/10 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute -bottom-32 -right-32 w-80 h-80 bg-cyan-600/10 rounded-full blur-3xl pointer-events-none"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
                <div class="inline-flex items-center space-x-2 px-3 py-1 rounded-md bg-ice-500/20 text-ice-300 text-xs font-bold uppercase tracking-wider border border-ice-400/30">
                    Pengalaman Kerja & Portofolio
                </div>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
                    Dipercaya Oleh Perusahaan Terkemuka
                </h2>
                <p class="text-base text-slate-400">
                    Kami bangga telah menjadi mitra rantai pendingin bagi berbagai perusahaan industri pangan, distributor logistik, dan usaha komersial di Jawa Barat dan sekitarnya.
                </p>
            </div>

            <!-- Client Cards Grid (Me-looping $clients dari Controller) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($clients as $client)
                <div class="p-6 rounded-2xl bg-white/5 border border-white/10 hover:border-ice-400/50 hover:bg-white/10 transition-all duration-300 backdrop-blur-sm group">
                    <div class="flex items-start justify-between">
                        <!-- Company Avatar/Icon -->
                        <div class="w-12 h-12 rounded-xl bg-gradient-to-tr from-ice-600 to-cyan-400 text-white flex items-center justify-center font-extrabold text-lg shadow-lg group-hover:scale-105 transition-transform">
                            {{ substr($client['name'], 0, 2) }}
                        </div>
                        <!-- Unit Type Badge -->
                        <span class="text-xs font-semibold px-2.5 py-1 rounded-full bg-ice-500/20 text-ice-300 border border-ice-400/30">
                            {{ $client['badge'] }}
                        </span>
                    </div>

                    <div class="mt-4">
                        <h3 class="text-lg font-bold text-white group-hover:text-ice-300 transition-colors">
                            {{ $client['name'] }}
                        </h3>
                        <div class="flex items-center text-xs text-slate-400 mt-1">
                            <svg class="w-3.5 h-3.5 text-ice-400 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span>{{ $client['location'] }}</span>
                        </div>
                        <p class="text-xs text-slate-400 mt-3 pt-3 border-t border-white/10">
                            {{ $client['type'] }}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 7. CTA BANNER (KONSULTASI GRATIS)                                         -->
    <!-- ========================================================================= -->
    <section class="py-16 bg-gradient-to-r from-ice-600 via-sky-600 to-cyan-600 text-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-8 text-center lg:text-left">
                <div class="space-y-2 max-w-2xl">
                    <h3 class="text-2xl sm:text-3xl font-extrabold tracking-tight">
                        Siap Mengoptimalkan Sistem Pendingin Bisnis Anda?
                    </h3>
                    <p class="text-ice-100 text-sm sm:text-base">
                        Diskusikan kebutuhan spesifikasi kapasitas, survei lokasi, atau konsultasi kendala mesin pendingin Anda bersama tim ahli kami sekarang.
                    </p>
                </div>
                <div class="flex flex-wrap items-center justify-center gap-4">
                    <a href="{{ $company['whatsapp_link'] }}" target="_blank" rel="noopener noreferrer" 
                       class="inline-flex items-center space-x-3 bg-white text-navy-900 hover:bg-slate-100 font-bold px-8 py-3.5 rounded-xl shadow-xl transition transform hover:-translate-y-0.5">
                        <svg class="w-5 h-5 text-emerald-600" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/>
                        </svg>
                        <span>Hubungi via WhatsApp</span>
                    </a>
                    <a href="tel:{{ $company['phone'] }}" 
                       class="inline-flex items-center space-x-2 bg-navy-900/60 hover:bg-navy-900 text-white font-semibold px-6 py-3.5 rounded-xl border border-white/20 transition">
                        <svg class="w-5 h-5 text-ice-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        <span>{{ $company['phone_display'] }}</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 8. FOOTER                                                                -->
    <!-- ========================================================================= -->
    <footer id="kontak" class="bg-navy-950 text-slate-300 pt-16 pb-12 border-t border-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 pb-12 border-b border-white/10">
                
                <!-- Kolom 1: Profil Singkat -->
                <div class="lg:col-span-4 space-y-4">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-ice-600 to-cyan-300 flex items-center justify-center text-white shadow-lg shadow-ice-500/30">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 2v20m10-10H2m17.071-7.071l-14.142 14.142m0-14.142l14.142 14.142M12 6l3-3m-3 3l-3-3m0 12l3 3m-3-3l-3 3m12-6l3-3m-3 3l3 3M6 12L3 9m3 3l-3 3" />
                            </svg>
                        </div>
                        <span class="text-lg font-bold text-white tracking-tight">
                            {{ $company['name'] }}
                        </span>
                    </div>
                    <p class="text-sm text-slate-400 leading-relaxed">
                        Penyedia solusi rantai pendingin terpercaya sejak {{ $company['founded_year'] }}. Melayani pengadaan, fabrikasi, instalasi profesional, dan perawatan berkala pendingin komersial & industri.
                    </p>
                    <div class="pt-2">
                        <span class="inline-block text-xs font-semibold px-3 py-1 rounded-full bg-white/5 border border-white/10 text-ice-400">
                            Jam Operasional: {{ $company['work_hours'] }}
                        </span>
                    </div>
                </div>

                <!-- Kolom 2: Navigasi Cepat -->
                <div class="lg:col-span-2 space-y-3">
                    <h4 class="text-white font-semibold text-sm uppercase tracking-wider">Tautan Cepat</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#beranda" class="hover:text-ice-400 transition-colors">Beranda</a></li>
                        <li><a href="#tentang-kami" class="hover:text-ice-400 transition-colors">Tentang Kami</a></li>
                        <li><a href="#layanan" class="hover:text-ice-400 transition-colors">Layanan & Produk</a></li>
                        <li><a href="#keunggulan" class="hover:text-ice-400 transition-colors">Keunggulan</a></li>
                        <li><a href="#klien" class="hover:text-ice-400 transition-colors">Klien Kami</a></li>
                    </ul>
                </div>

                <!-- Kolom 3: Layanan Kami -->
                <div class="lg:col-span-3 space-y-3">
                    <h4 class="text-white font-semibold text-sm uppercase tracking-wider">Fokus Produk</h4>
                    <ul class="space-y-2 text-sm">
                        @foreach($services as $svc)
                        <li>
                            <a href="#layanan" class="hover:text-ice-400 transition-colors flex items-center">
                                <span class="text-ice-400 mr-2">›</span> {{ $svc['title'] }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <!-- Kolom 4: Informasi Kontak Perusahaan -->
                <div class="lg:col-span-3 space-y-4">
                    <h4 class="text-white font-semibold text-sm uppercase tracking-wider">Kontak & Workshop</h4>
                    <ul class="space-y-3 text-sm">
                        <!-- Alamat -->
                        <li class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-ice-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span class="text-slate-300 leading-snug">
                                {{ $company['address'] }}
                            </span>
                        </li>
                        <!-- Telepon / WhatsApp -->
                        <li class="flex items-center space-x-3">
                            <svg class="w-5 h-5 text-ice-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <a href="{{ $company['whatsapp_link'] }}" target="_blank" rel="noopener noreferrer" class="hover:text-ice-300 font-medium">
                                {{ $company['phone_display'] }} (WA)
                            </a>
                        </li>
                        <!-- Email -->
                        <li class="flex items-center space-x-3">
                            <svg class="w-5 h-5 text-ice-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <a href="mailto:{{ $company['email'] }}" class="hover:text-ice-300">
                                {{ $company['email'] }}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Copyright -->
            <div class="pt-8 flex flex-col sm:flex-row items-center justify-between text-xs text-slate-500 space-y-4 sm:space-y-0">
                <p>&copy; 2026 {{ $company['name'] }}. Seluruh hak cipta dilindungi undang-undang.</p>
                <p class="flex items-center space-x-1">
                    <span>Designed with modern Cold Tech aesthetics</span>
                </p>
            </div>
        </div>
    </footer>

    <!-- ========================================================================= -->
    <!-- JAVASCRIPT: Smooth Scroll & Mobile Menu Toggle                            -->
    <!-- ========================================================================= -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const menuToggle = document.getElementById('mobile-menu-toggle');
            const mobileMenu = document.getElementById('mobile-menu');
            const hamburgerIcon = document.getElementById('hamburger-icon');
            const closeIcon = document.getElementById('close-icon');
            const mobileLinks = document.querySelectorAll('.mobile-nav-link');

            if (menuToggle && mobileMenu) {
                menuToggle.addEventListener('click', function () {
                    const isExpanded = !mobileMenu.classList.contains('hidden');
                    if (isExpanded) {
                        mobileMenu.classList.add('hidden');
                        hamburgerIcon.classList.remove('hidden');
                        closeIcon.classList.add('hidden');
                    } else {
                        mobileMenu.classList.remove('hidden');
                        hamburgerIcon.classList.add('hidden');
                        closeIcon.classList.remove('hidden');
                    }
                });

                // Auto close mobile menu after clicking link
                mobileLinks.forEach(link => {
                    link.addEventListener('click', () => {
                        mobileMenu.classList.add('hidden');
                        hamburgerIcon.classList.remove('hidden');
                        closeIcon.classList.add('hidden');
                    });
                });
            }
        });
    </script>
</body>
</html>

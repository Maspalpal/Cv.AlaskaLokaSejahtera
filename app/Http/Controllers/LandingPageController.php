<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    /**
     * Menampilkan Landing Page Company Profile CV. Alaska Loka Sejahtera
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // 1. Data Layanan (Services)
        $services = [
            [
                'title' => 'AC (Pendingin Ruangan)',
                'category' => 'Residential & Commercial',
                'description' => 'Solusi lengkap pendingin ruangan untuk hunian, kantor, perkantoran, dan gedung komersial dengan sistem Split, Cassette, Standing Floor, hingga VRV/VRF.',
                'scopes' => ['Penjualan Unit', 'Pemasangan Standar', 'Perawatan Berkala', 'Perbaikan & Servis'],
                'image' => 'https://images.unsplash.com/photo-1621905251189-08b45d6a269e?auto=format&fit=crop&w=800&q=80',
                'icon' => 'wind',
            ],
            [
                'title' => 'Cold Storage',
                'category' => 'Industrial & Commercial',
                'description' => 'Perancangan dan pembangunan Cold Room (Chiller Room & Freezer Room) berkapasitas besar dengan insulasi polyurethane berkualitas tinggi untuk menjaga ketahanan produk pangan dan farmasi.',
                'scopes' => ['Desain & Fabrikasi', 'Instalasi Panel & Mesin', 'Kalibrasi Suhu', 'Kontrak Pemeliharaan'],
                'image' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=800&q=80',
                'icon' => 'box',
            ],
            [
                'title' => 'Air Blast Freezer (ABF)',
                'category' => 'Industrial Freezing',
                'description' => 'Sistem pembekuan ultra-cepat dengan sirkulasi udara dingin berkecepatan tinggi untuk membekukan daging, unggas, ikan, dan frozen food tanpa merusak kualitas tekstur maupun nutrisi.',
                'scopes' => ['Penyediaan Mesin ABF', 'Instalasi Ruang Pembeku', 'Troubleshooting Teknis', 'Penggantian Komponen'],
                'image' => 'https://images.unsplash.com/photo-1544816155-12df9643f363?auto=format&fit=crop&w=800&q=80',
                'icon' => 'zap',
            ],
            [
                'title' => 'Chiller',
                'category' => 'Commercial & HVAC Industry',
                'description' => 'Penyediaan dan instalasi unit Chiller (Air-Cooled & Water-Cooled) untuk kebutuhan pendinginan proses produksi industri, gedung bertingkat, serta fasilitas pengolahan makanan.',
                'scopes' => ['Pengadaan Chiller', 'Instalasi Sistem Piping', 'Overhaul Kompresor', 'Optimasi Energi'],
                'image' => 'https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=800&q=80',
                'icon' => 'cpu',
            ],
            [
                'title' => 'Mesin Es Kristal',
                'category' => 'Food & Beverage',
                'description' => 'Penyediaan, perakitan, dan pemeliharaan mesin pembuat es batu kristal higienis (tipe Tube & Cube) dengan kapasitas produksi harian fleksibel untuk bisnis kuliner dan perikanan.',
                'scopes' => ['Penjualan Mesin Es', 'Pemasangan & Testing', 'Servis Berkala', 'Penyediaan Suku Cadang'],
                'image' => 'https://images.unsplash.com/photo-1518057111178-44a106bad636?auto=format&fit=crop&w=800&q=80',
                'icon' => 'snowflake',
            ],
        ];

        // 2. Data Keunggulan (Advantages)
        $advantages = [
            [
                'title' => 'Tim Teknisi Profesional',
                'description' => 'Didukung oleh teknisi tersertifikasi, berpengalaman belasan tahun, dan terlatih dalam menangani berbagai teknologi refrigerasi modern.',
                'icon' => 'user-check',
            ],
            [
                'title' => 'Layanan Lengkap (End-to-End)',
                'description' => 'Menyediakan solusi komprehensif mulai dari konsultasi perencanaan beban pendinginan, pengadaan unit, instalasi, hingga perawatan berkala.',
                'icon' => 'layers',
            ],
            [
                'title' => 'Harga Transparan & Kompetitif',
                'description' => 'Rincian biaya dan penawaran terbuka tanpa biaya tersembunyi, memberikan efisiensi investasi terbaik untuk bisnis Anda.',
                'icon' => 'shield-check',
            ],
            [
                'title' => 'Respon Cepat (Quick Response)',
                'description' => 'Kesiapan tanggap darurat dan penanganan kendala mesin dengan respon sigap demi meminimalkan downtime rantai dingin Anda.',
                'icon' => 'clock',
            ],
            [
                'title' => 'Suku Cadang Terjamin',
                'description' => 'Jaminan pemakaian komponen dan suku cadang asli (original) berstandar pabrik dengan garansi resmi dan ketahanan teruji.',
                'icon' => 'tool',
            ],
            [
                'title' => 'Solusi Disesuaikan (Customized)',
                'description' => 'Perhitungan spesifikasi kapasitas BTU, kompresor, dan dimensi ruang disesuaikan secara presisi dengan kebutuhan unik setiap klien.',
                'icon' => 'sliders',
            ],
            [
                'title' => 'Ramah Lingkungan (Eco-Friendly)',
                'description' => 'Mengutamakan refrigeran ramah lingkungan (low GWP) dan konfigurasi mesin hemat konsumsi listrik yang mendukung keberlanjutan energi.',
                'icon' => 'feather',
            ],
        ];

        // 3. Data Klien & Portofolio Kerja (Clients)
        $clients = [
            [
                'name' => 'PT Sukahati Pratama',
                'location' => 'Tasikmalaya',
                'type' => 'Distribusi Pangan & Cold Chain',
                'badge' => 'Cold Storage'
            ],
            [
                'name' => 'CV Assalam Famili',
                'location' => 'Tasikmalaya',
                'type' => 'Industri Pengolahan Makanan',
                'badge' => 'Air Blast Freezer'
            ],
            [
                'name' => 'PT Sumber Rejeki Food',
                'location' => 'Ciamis',
                'type' => 'Sentra Frozen Food & Logistik',
                'badge' => 'Chiller & Cold Room'
            ],
            [
                'name' => 'RPA Jabal Nur',
                'location' => 'Tasikmalaya',
                'type' => 'Rumah Pemotongan Ayam Modern',
                'badge' => 'Blast Freezer & Storage'
            ],
            [
                'name' => "D'Okeh",
                'location' => 'Garut',
                'type' => 'F&B & Kuliner Olahan',
                'badge' => 'Mesin Es Kristal & AC'
            ],
            [
                'name' => 'Mitra Komersial Priangan',
                'location' => 'Jawa Barat',
                'type' => 'Perhotelan, Supermarket & Restoran',
                'badge' => 'AC Sentral & Maintenance'
            ],
        ];

        // 4. Data Profil Perusahaan
        $company = [
            'name' => 'CV. Alaska Loka Sejahtera',
            'tagline' => 'Solusi Rantai Pendingin Terpercaya untuk Menjaga Kualitas Produk Anda',
            'founded_year' => 2014,
            'years_experience' => date('Y') - 2014,
            'address' => 'Komplek Perumahan Griya Mangin Persada Blok C Nomor 35, Tasikmalaya, Jawa Barat',
            'phone' => '085222587000',
            'phone_display' => '0852-2258-7000',
            'whatsapp_link' => 'https://wa.me/6285222587000?text=Halo%20CV.%20Alaska%20Loka%20Sejahtera,%20saya%20tertarik%20konsultasi%20layanan%20sistem%20pendingin.',
            'email' => 'lokasejahteraalaska@gmail.com',
            'work_hours' => 'Senin - Sabtu: 08:00 - 17:00 WIB (Layanan Darurat 24 Jam)',
            'executive_summary' => 'CV. Alaska Loka Sejahtera merupakan perusahaan yang berdedikasi sejak tahun 2014 dalam menyediakan solusi komprehensif di bidang teknologi refrigerasi dan pendingin. Kami melayani spektrum kebutuhan yang luas mulai dari pendingin ruangan rumah tangga, sistem komersial gedung, hingga instalasi industri skala besar seperti Cold Storage dan Air Blast Freezer.',
            'vision' => 'Menjadi mitra penyedia solusi rantai pendingin terdepan, terpercaya, dan berteknologi tinggi di Indonesia, yang berorientasi pada kepuasan pelanggan, keandalan operasional, dan efisiensi energi berkelanjutan.',
            'mission' => [
                'Menyediakan produk, unit, dan komponen pendingin berkualitas tinggi yang memenuhi standar internasional.',
                'Memberikan layanan penjualan, instalasi, pemeliharaan preventif, dan perbaikan secara profesional dan tepat waktu.',
                'Membina tenaga teknisi yang kompeten, beretika kerja prima, dan tersertifikasi di bidang refrigerasi modern.',
                'Menghadirkan solusi pendinginan yang tepat guna, efisien dalam konsumsi energi, serta ramah lingkungan bagi seluruh mitra usaha.',
            ],
            'stats' => [
                ['value' => '10+', 'label' => 'Tahun Dedikasi'],
                ['value' => '250+', 'label' => 'Proyek Terselesaikan'],
                ['value' => '100%', 'label' => 'Komitmen Kualitas'],
                ['value' => '24/7', 'label' => 'Dukungan Siaga'],
            ]
        ];

        return view('landing', compact('services', 'advantages', 'clients', 'company'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    /**
     * Menampilkan Landing Page Company Profile CV. Alaska Loka Sejahtera
     * Data disinkronkan 100% dengan dokumen Company Profile 2026 PDF
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // 1. Data Layanan & Produk (Halaman 4 PDF)
        $services = [
            [
                'number' => 1,
                'title' => 'AC (Pendingin Ruangan)',
                'subtitle' => 'Residential, Commercial & Industrial',
                'description' => 'Penjualan unit baru, pemasangan profesional, perawatan rutin, isi freon, perbaikan kerusakan, dan pembersihan menyeluruh. Cocok untuk rumah, kantor, ruko, hingga gedung bertingkat.',
                'scopes' => ['Penjualan Unit Baru', 'Pemasangan Profesional', 'Perawatan Rutin & Isi Freon', 'Perbaikan Kerusakan'],
                'image' => 'https://images.unsplash.com/photo-1621905251189-08b45d6a269e?auto=format&fit=crop&w=800&q=80',
            ],
            [
                'number' => 2,
                'title' => 'Cold Storage (Gudang Pendingin)',
                'subtitle' => 'Chiller Room & Freezer Room',
                'description' => 'Penjualan & pemasangan sesuai ukuran dan kebutuhan, perawatan berkala, pengecekan suhu, perbaikan sistem kompresor, dan penggantian suku cadang. Ideal untuk penyimpanan makanan, hasil laut, obat-obatan, dan produk pertanian.',
                'scopes' => ['Penjualan & Fabrikasi', 'Pemasangan Presisi', 'Pengecekan Suhu Rutin', 'Perbaikan Kompresor & Sparepart'],
                'image' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=800&q=80',
            ],
            [
                'number' => 3,
                'title' => 'Air Blast Freezer',
                'subtitle' => 'Ultra-Fast Freezing Technology',
                'description' => 'Penjualan, instalasi, perawatan, dan perbaikan. Dirancang untuk pembekuan cepat guna menjaga kesegaran dan kualitas produk makanan, daging, ikan, dan olahan beku.',
                'scopes' => ['Penjualan Mesin ABF', 'Instalasi Ruang Pembeku', 'Perawatan Kapasitas Suhu', 'Perbaikan Cepat'],
                'image' => 'https://images.unsplash.com/photo-1544816155-12df9643f363?auto=format&fit=crop&w=800&q=80',
            ],
            [
                'number' => 4,
                'title' => 'Chiller',
                'subtitle' => 'Non-Freezing Cold Storage & HVAC',
                'description' => 'Penjualan, penyesuaian kapasitas, perawatan suhu, perbaikan sistem sirkulasi, dan penggantian komponen. Sangat cocok untuk penyimpanan sementara dengan suhu dingin non-beku pada usaha kuliner, pasar swalayan, dan industri.',
                'scopes' => ['Penjualan & Penyesuaian Kapasitas', 'Perawatan Suhu Terkontrol', 'Perbaikan Sistem Sirkulasi', 'Penggantian Komponen'],
                'image' => 'https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=800&q=80',
            ],
            [
                'number' => 5,
                'title' => 'Mesin Es Kristal',
                'subtitle' => 'Hygienic Ice Tube & Cube',
                'description' => 'Penjualan berbagai kapasitas, pemasangan, perawatan rutin, pembersihan saluran air, pengecekan sistem pendingin, dan perbaikan kerusakan. Untuk kebutuhan rumah makan, pabrik, dan industri kuliner.',
                'scopes' => ['Penjualan Berbagai Kapasitas', 'Pemasangan Unit', 'Pembersihan Saluran Air', 'Pengecekan & Servis'],
                'image' => 'https://images.unsplash.com/photo-1518057111178-44a106bad636?auto=format&fit=crop&w=800&q=80',
            ],
        ];

        // 2. Data 7 Keunggulan (Sesuai Screenshot)
        $advantages = [
            [
                'title' => 'Tim Teknisi Profesional',
                'description' => 'Didukung oleh teknisi tersertifikasi, berpengalaman belasan tahun, dan terlatih dalam menangani berbagai teknologi refrigerasi modern.',
            ],
            [
                'title' => 'Layanan Lengkap (End-to-End)',
                'description' => 'Menyediakan solusi komprehensif mulai dari konsultasi perencanaan beban pendinginan, pengadaan unit, instalasi, hingga perawatan berkala.',
            ],
            [
                'title' => 'Harga Transparan & Kompetitif',
                'description' => 'Rincian biaya dan penawaran terbuka tanpa biaya tersembunyi, memberikan efisiensi investasi terbaik untuk bisnis Anda.',
            ],
            [
                'title' => 'Respon Cepat (Quick Response)',
                'description' => 'Kesiapan tanggap darurat dan penanganan kendala mesin dengan respon sigap demi meminimalkan downtime rantai dingin Anda.',
            ],
            [
                'title' => 'Suku Cadang Terjamin',
                'description' => 'Jaminan pemakaian komponen dan suku cadang asli (original) berstandar pabrik dengan garansi resmi dan ketahanan teruji.',
            ],
            [
                'title' => 'Solusi Disesuaikan',
                'description' => 'Perhitungan spesifikasi kapasitas BTU, kompresor, dan dimensi ruang disesuaikan secara presisi dengan kebutuhan unik setiap klien.',
            ],
            [
                'title' => 'Ramah Lingkungan',
                'description' => 'Mengutamakan refrigeran ramah lingkungan (low GWP) dan konfigurasi mesin hemat konsumsi listrik yang mendukung keberlanjutan energi.',
            ],
        ];

        // 3. Sektor Kalangan Pengguna / Sasaran Layanan (Halaman 3 PDF)
        $sectors = [
            'Rumah Tangga & Hunian Pribadi',
            'Kantor, Ruko, & Kompleks Perkantoran',
            'Restoran, Kafe, Hotel, & Jasa Boga',
            'Pasar Swalayan & Toko Ritel',
            'Industri Pengolahan Pangan & Perikanan',
            'Rumah Sakit, Laboratorium, & Fasilitas Kesehatan',
            'Gudang Logistik & Distribusi',
        ];

        // 4. Pengalaman Kerjasama / Daftar Lengkap Klien (Halaman 5 PDF)
        $clients = [
            ['name' => 'PT Sukahati Pratama', 'city' => 'Tasikmalaya', 'tag' => 'Mitra Rantai Dingin'],
            ['name' => 'CV Assalam Famili', 'city' => 'Tasikmalaya', 'tag' => 'Industri Pengolahan Pangan'],
            ['name' => 'PT Sumber Rejeki Food', 'city' => 'Ciamis', 'tag' => 'Sentra Frozen Food'],
            ['name' => 'RPA Jabal Nur', 'city' => 'Tasikmalaya', 'tag' => 'Rumah Pemotongan Ayam'],
            ['name' => "D'Okeh", 'city' => 'Garut', 'tag' => 'F&B & Kuliner Olahan'],
            ['name' => 'RPA Sagama', 'city' => 'Ciamis', 'tag' => 'Rumah Pemotongan Ayam'],
            ['name' => 'RPA Tunggal Sadulur', 'city' => 'Tasikmalaya', 'tag' => 'Rumah Pemotongan Ayam'],
            ['name' => 'RPA Berkah', 'city' => 'Jawa Barat', 'tag' => 'Rumah Pemotongan Ayam'],
        ];

        // 5. Data Perusahaan, Visi Misi, Komitmen (Halaman 1, 2, 6 PDF)
        $company = [
            'name' => 'CV. Alaska Loka Sejahtera',
            'headline' => 'Solusi Rantai Pendingin Terpercaya untuk Menjaga Kualitas Produk Anda',
            'year' => 2026,
            'founded_year' => 2014,
            'years_experience' => date('Y') - 2014,
            'email' => 'lokasejahteraalaska@gmail.com',
            'phone' => '085222587000',
            'phone_display' => '0852 2258 7000',
            'phone_intl' => '+6285222587000',
            'whatsapp_link' => 'https://wa.me/6285222587000?text=Halo%20CV.%20Alaska%20Loka%20Sejahtera,%20saya%20tertarik%20konsultasi%20solusi%20sistem%20pendingin.',
            'address' => 'Komplek Perumahan Griya Mangin Persada Blok C Nomor 35, TASIKMALAYA',
            'executive_summary_p1' => 'Kami CV. Alaska Loka Sejahtera adalah perusahaan yang berdedikasi sebagai mitra terpercaya dalam penyediaan solusi pendingin lengkap. Kami menggabungkan kualitas produk unggulan, tenaga ahli berpengalaman, dan layanan purna jual yang responsif untuk memenuhi kebutuhan pendingin rumah tangga, komersial, hingga industri.',
            'executive_summary_p2' => 'Berdiri sejak tahun 2014, kami memahami bahwa sistem pendingin yang andal adalah kunci untuk menjaga kualitas produk, efisiensi operasional, dan keberlanjutan usaha Anda. Oleh karena itu, kami hadir tidak hanya sebagai penyedia produk, tetapi juga sebagai mitra jangka panjang yang menjamin kinerja peralatan Anda tetap optimal sepanjang waktu.',
            'partnership_benefit' => 'Satu mitra untuk SEMUA kebutuhan pendingin Anda — dari beli, pasang, rawat, hingga perbaiki. Tidak perlu mencari penyedia berbeda untuk setiap jenis alat!',
            'vision' => 'Menjadi perusahaan solusi pendingin paling terpercaya dan terdepan di Indonesia, yang dikenal karena kualitas produk, keahlian teknis, dan kepuasan pelanggan yang tak tertandingi.',
            'missions' => [
                'Menyediakan produk pendingin berkualitas tinggi yang hemat energi, awet, dan sesuai standar keamanan internasional.',
                'Memberikan layanan lengkap mulai dari konsultasi, penjualan, pemasangan, perawatan rutin, hingga perbaikan cepat.',
                'Mengutamakan tenaga teknisi bersertifikat, terlatih, dan berpengalaman di setiap jenis peralatan yang kami tangani.',
                'Membangun hubungan jangka panjang dengan pelanggan melalui layanan jujur, transparan, dan harga yang wajar.',
                'Terus berinovasi mengikuti perkembangan teknologi pendingin yang ramah lingkungan dan efisien energi.',
            ],
            'commitment_p1' => 'Kami di CV. Alaska Loka Sejahtera percaya bahwa kualitas tidak hanya terletak pada produk yang kami jual, tetapi juga pada layanan yang kami berikan setelahnya. Kepuasan pelanggan adalah prioritas utama kami. Setiap pekerjaan kami selesaikan dengan teliti, rapi, dan menjamin kualitas hasil kerja.',
            'commitment_p2' => 'Kami siap menjadi mitra andalan Anda untuk segala kebutuhan pendingin dari yang sederhana hingga yang berskala industri.',
            'stats' => [
                ['value' => '10+', 'label' => 'Tahun Dedikasi'],
                ['value' => '250+', 'label' => 'Proyek Terselesaikan'],
                ['value' => '100%', 'label' => 'Komitmen Kualitas'],
                ['value' => '24/7', 'label' => 'Dukungan Siaga'],
            ],
        ];

        return view('landing', compact('services', 'advantages', 'sectors', 'clients', 'company'));
    }
}

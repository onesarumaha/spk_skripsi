<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
     public function run(): void
    {
        $namaGuru = [
            'Ahmad Fauzi, S.Pd','Budi Santoso, S.Pd','Citra Lestari, S.Pd','Dewi Sartika, M.Pd','Eko Prasetyo, S.Pd',
            'Fitri Handayani, S.Pd','Gilang Ramadhan, M.Pd','Hani Nuraini, S.Pd','Indra Gunawan, S.Pd','Joko Susilo, M.Pd',
            'Kartika Sari, S.Pd','Lina Marlina, M.Pd','Mulyadi, S.Pd','Nina Agustina, S.Pd','Oki Setiawan, M.Pd',
            'Putri Ayuningtyas, S.Pd','Qori Rahmawati, S.Pd','Rudi Hartono, M.Pd','Siti Aminah, S.Pd','Taufik Hidayat, M.Pd',
            'Umi Kalsum, S.Pd','Vina Oktaviani, S.Pd','Wawan Hermawan, M.Pd','Yuni Kartika, S.Pd','Zainal Abidin, M.Pd',
            'Agus Saputra, S.Pd','Bella Permata, S.Pd','Chandra Wijaya, M.Pd','Dian Puspita, S.Pd','Erwin Syahputra, M.Pd',
            'Farah Nabila, S.Pd','Galih Nugraha, S.Pd','Hendra Kurniawan, M.Pd','Intan Permatasari, S.Pd','Jefri Setiawan, M.Pd',
            'Kurnia Dewi, S.Pd','Lukman Hakim, M.Pd','Mega Wati, S.Pd','Nanda Saputra, S.Pd','Olivia Maharani, M.Pd',
            'Prasetyo Nugroho, S.Pd','Rina Melati, M.Pd','Slamet Riyadi, S.Pd','Tiara Anindya, S.Pd','Usman Ali, M.Pd',
            'Vera Safitri, S.Pd','Widi Astuti, M.Pd','Yusuf Maulana, S.Pd','Zahra Khairunnisa, S.Pd','Anisa Putri, M.Pd',
            'Bagus Pamungkas, S.Pd','Cahyo Nugroho, S.Pd','Desi Ratnasari, M.Pd','Erlina Sari, S.Pd','Fajar Nugraha, M.Pd',
            'Gita Savitri, S.Pd','Hafiz Ramadhan, S.Pd','Irma Susanti, M.Pd','Jamaludin, S.Pd','Kevin Andika, M.Pd',
            'Lestari Wulandari, S.Pd','Muhammad Iqbal, S.Pd','Novi Yanti, M.Pd','Omar Dani, S.Pd','Puspita Sari, M.Pd',
            'Qomarudin, S.Pd','Rani Oktavia, S.Pd','Samsul Bahri, M.Pd','Tika Ramadhani, S.Pd','Ujang Supriatna, M.Pd',
            'Vicky Pratama, S.Pd','Wahyu Hidayat, S.Pd','Yohana Lestari, M.Pd','Zulfikar, S.Pd','Aldi Saputra, M.Pd',
            'Bambang Setiawan, S.Pd','Cindy Maharani, S.Pd','Dodi Firmansyah, M.Pd','Elsa Maharani, S.Pd','Fikri Maulana, M.Pd',
            'Guntur Saputra, S.Pd','Helmi Yahya, M.Pd','Ilham Saputra, S.Pd','Jihan Aulia, S.Pd','Kiki Amelia, M.Pd',
            'Linda Sari, S.Pd','Mira Oktavia, M.Pd','Naufal Hidayat, S.Pd','Ovina Lestari, S.Pd','Pandu Wijaya, M.Pd',
            'Qonita Salsabila, S.Pd','Raka Prasetya, M.Pd','Salsa Billa, S.Pd','Teguh Santoso, S.Pd','Ulfa Nabila, M.Pd',
            'Vina Melinda, S.Pd','Wulan Sari, S.Pd','Yoga Pratama, M.Pd','Zaki Mubarak, S.Pd','Arif Rahman, M.Pd'
        ];

        $data = [];

        foreach ($namaGuru as $i => $nama) {
            $data[] = [
                'nama' => $nama,
                'nip' => '1987' . str_pad($i + 1, 8, '0', STR_PAD_LEFT),
                'alamat' => 'Jakarta',
                'no_hp' => '08' . rand(1111111111, 9999999999),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('data_guru')->truncate();
        DB::table('data_guru')->insert($data);
    }
}

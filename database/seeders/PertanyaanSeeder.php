<?php

namespace Database\Seeders;

use App\Models\Pertanyaan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PertanyaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Membuat beberapa data dummy pertanyaan
        $pertanyaans = [
            [
                'deskripsi' => 'Mempunya Anak Baduta (0-23 Bulan)',
                'kategori' => 'Punya Anak',
            ],
            [
                'deskripsi' => 'Mempunya Anak Balita (24-50Bulan)',
                'kategori' => 'Punya Anak',
            ],
            [
                'deskripsi' => 'Pasangan Usia Subur',
                'kategori' => 'PUS',
            ],
            [
                'deskripsi' => 'Pasangan Usia Subur Hamil',
                'kategori' => 'PUS Hamil',
            ],
            [
                'deskripsi' => 'Apakah Keluarga Tidak Memiliki Sumber Air Minum Yang Layak ?',
                'kategori' => 'Fasilitas Lingkungan Tidak Sehat',
            ],
            [
                'deskripsi' => 'Apakah Keluarga Tidak Memiliki Jamban Yang Layak ?',
                'kategori' => 'Fasilitas Lingkungan Tidak Sehat',
            ],
            [
                'deskripsi' => 'Terlalu Muda (Umur Istri < 20 Tahun)',
                'kategori' => 'PUS',
            ],
            [
                'deskripsi' => 'Terlalu Tua (Umur Istri 35 Tahun s/d 40 Tahun)',
                'kategori' => 'PUS',
            ],
            [
                'deskripsi' => 'Terlalu Dekat (<2 Tahun)',
                'kategori' => 'PUS',
            ],
            [
                'deskripsi' => 'Terlalu Banyak (3 Anak)',
                'kategori' => 'PUS',
            ],
            [
                'deskripsi' => 'Bukan Peserta KB Modern',
                'kategori' => 'KB Modern',
            ],
            [
                'deskripsi' => 'Kategori Keluarga Beresiko Stunting',
                'kategori' => 'Kategori Keluarga Beresiko Stunting',
            ],
            [
                'deskripsi' => 'Tingkat Kesejahteraan',
                'kategori' => 'Peringkat',
            ],
            [
                'deskripsi' => 'Apakah ada anggota keluarga yang memiliki rencana menikah dalam 3 bulan ke depan?',
                'kategori' => 'Catin',
            ],
        ];

        // Simpan data ke dalam tabel user
        foreach ($pertanyaans as $pertanyaan) {
            Pertanyaan::create($pertanyaan);
        }
    }
}

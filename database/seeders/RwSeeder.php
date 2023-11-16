<?php

namespace Database\Seeders;

use App\Models\Rw;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RwSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 437; $i++) {
            $angka = sprintf('%04d', $i);
            Rw::create(['nomor_rw' => $angka]);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Rt;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 437; $i++) {
            $angka = sprintf('%04d', $i);
            Rt::create(['nomor_rt' => $angka]);
        }
    }
}

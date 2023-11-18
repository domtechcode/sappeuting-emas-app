<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\RtSeeder;
use Database\Seeders\RwSeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\KecamatanSeeder;
use Database\Seeders\KelurahanSeeder;
use Database\Seeders\PertanyaanSeeder;
use Database\Seeders\DataPendudukSeeder;
use Database\Seeders\DataSurveiSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(UserSeeder::class);
        $this->call(KecamatanSeeder::class);
        $this->call(KelurahanSeeder::class);
        $this->call(RtSeeder::class);
        $this->call(RwSeeder::class);
        $this->call(PertanyaanSeeder::class);
        $this->call(DataPendudukSeeder::class);
        $this->call(DataSurveiSeeder::class);
    }
}

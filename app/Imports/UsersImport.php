<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class UsersImport implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // Sesuaikan dengan struktur file Excel Anda
        $username = $row[2];

        // Periksa apakah username sudah ada
        $existingUser = User::where('username', $username)->first();
        if ($existingUser) {
            // Username sudah ada, Anda bisa menangani sesuai kebutuhan
            // Misalnya, lewati atau lakukan tindakan lain
            return null; // Mengembalikan null untuk melewati baris ini
        }

        return new User([
            'nama' => $row[0],
            'role' => $row[1],
            'username' => $username,
            'password' => Hash::make($row[3]), // Sesuaikan dengan kebutuhan Anda untuk menyimpan password
            'kecamatan' => $row[4],
            'kelurahan' => $row[5],
            'rw' => $row[6],
            'rt' => $row[7],
        ]);
    }

    public function startRow(): int
    {
        return 2; // Memulai dari baris kedua (baris data, bukan baris header)
    }
}

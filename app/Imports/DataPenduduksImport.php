<?php

namespace App\Imports;

use App\Models\DataPenduduk;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class DataPenduduksImport implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // Sesuaikan dengan struktur file Excel Anda
        $nomorkeluargaIndonesia = $row[0];

        // Periksa apakah username sudah ada
        $existingNomorKeluargaIndonesia = DataPenduduk::where('nomor_keluarga_indonesia', $nomorkeluargaIndonesia)->first();
        if ($existingNomorKeluargaIndonesia) {
            return null;
        }

        return new DataPenduduk([
            'nomor_keluarga_indonesia' => $nomorkeluargaIndonesia,
            'nama_kepala_keluarga' => $row[1],
            'nama_istri' => $row[2],
            'status_keluarga' => $row[3],
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

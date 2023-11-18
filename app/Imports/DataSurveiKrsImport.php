<?php

namespace App\Imports;

use App\Models\DataPenduduk;
use App\Models\DataSurveiKrs;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class DataSurveiKrsImport implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // Extract data from the import row
        $nomorKeluargaIndonesia = $row[0];
        $namaKepalaKeluarga = $row[1];
        $namaIstri = $row[2];
        $statusKeluarga = $row[3];
        $kecamatan = $row[4];
        $kelurahan = $row[5];
        $rw = $row[6];
        $rt = $row[7];
        $latitude = $row[8];
        $longitude = $row[9];

        // Check if DataPenduduk with nomor_keluarga_indonesia already exists
        $dataPenduduk = DataPenduduk::firstOrNew(['nomor_keluarga_indonesia' => $nomorKeluargaIndonesia]);

        // Save or update DataPenduduk
        $dataPenduduk->fill([
            'nama_kepala_keluarga' => $namaKepalaKeluarga,
            'nama_istri' => $namaIstri,
            'status_keluarga' => $statusKeluarga,
            'kecamatan' => $kecamatan,
            'kelurahan' => $kelurahan,
            'rw' => $rw,
            'rt' => $rt,
            'latitude' => $latitude,
            'longitude' => $longitude,
        ])->save();

        // Create or update DataSurveiKrs
        $dataSurveiKrs = DataSurveiKrs::updateOrCreate(
            ['data_penduduk_id' => $dataPenduduk->id],
            [
                'answer_1' => $row[10],
                'answer_2' => $row[11],
                'answer_3' => $row[12],
                'answer_4' => $row[13],
                'answer_5' => $row[14],
                'answer_6' => $row[15],
                'answer_7' => $row[16],
                'answer_8' => $row[17],
                'answer_9' => $row[18],
                'answer_10' => $row[19],
                'answer_11' => $row[20],
                'answer_12' => $row[21],
                'answer_13' => $row[22],
                'answer_14' => $row[23],
                'answer_15' => $row[24],
                'answer_16' => $row[25],
                'answer_17' => $row[26],
                'answer_18' => $row[27],
                'status' => 'Tervalidasi',
                'state' => 'Kota',
            ]
        );

        return $dataSurveiKrs;
    }



    public function startRow(): int
    {
        return 2; // Memulai dari baris kedua (baris data, bukan baris header)
    }
}

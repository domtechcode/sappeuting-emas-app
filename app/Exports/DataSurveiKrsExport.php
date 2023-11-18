<?php

namespace App\Exports;

use App\Models\DataSurveiKrs;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;

class DataSurveiKrsExport implements FromCollection, WithHeadings, WithMapping, WithColumnFormatting
{
    /**
     * @return \Illuminate\Support\Collection
     */
    protected $kecamatan;
    protected $kelurahan;
    protected $rw;
    protected $rt;

    public function __construct($kecamatan, $kelurahan, $rw, $rt)
    {
        $this->kecamatan = $kecamatan;
        $this->kelurahan = $kelurahan;
        $this->rw = $rw;
        $this->rt = $rt;
    }

    public function collection()
    {
        // Apply filters to retrieve the data
        $query = DataSurveiKrs::with('dataPenduduk');

        if ($this->kecamatan && $this->kecamatan !== 'all') {
            $query->whereHas('dataPenduduk', function ($q) {
                $q->where('kecamatan', $this->kecamatan);
            });
        } else {
            $query->whereHas('dataPenduduk', function ($q) {
                $q->whereNotNull('kecamatan');
            });
        }

        if ($this->kelurahan && $this->kelurahan !== 'all') {
            $query->whereHas('dataPenduduk', function ($q) {
                $q->where('kelurahan', $this->kelurahan);
            });
        } else {
            $query->whereHas('dataPenduduk', function ($q) {
                $q->whereNotNull('kelurahan');
            });
        }

        if ($this->rw && $this->rw !== 'all') {
            $query->whereHas('dataPenduduk', function ($q) {
                $q->where('rw', $this->rw);
            });
        } else {
            $query->whereHas('dataPenduduk', function ($q) {
                $q->whereNotNull('rw');
            });
        }

        if ($this->rt && $this->rt !== 'all') {
            $query->whereHas('dataPenduduk', function ($q) {
                $q->where('rt', $this->rt);
            });
        } else {
            $query->whereHas('dataPenduduk', function ($q) {
                $q->whereNotNull('rt');
            });
        }

        return $query->get();
    }

    public function map($dataSurvei): array
    {
        return [
            'Nomor Keluarga Indonesia' => $dataSurvei->dataPenduduk->nomor_keluarga_indonesia,
            'Nama Kepala Keluarga' => $dataSurvei->dataPenduduk->nama_kepala_keluarga,
            'Nama Istri' => $dataSurvei->dataPenduduk->nama_istri,
            'Status Keluarga' => $dataSurvei->dataPenduduk->status_keluarga,
            'Kecamatan' => $dataSurvei->dataPenduduk->kecamatan,
            'Kelurahan' => $dataSurvei->dataPenduduk->kelurahan,
            'RW' => $dataSurvei->dataPenduduk->rw,
            'RT' => $dataSurvei->dataPenduduk->rt,
            'Latitude' => $dataSurvei->dataPenduduk->latitude,
            'Longitude' => $dataSurvei->dataPenduduk->longitude,
            'Mempunyai Anak Baduta (0-23 Bulan)' => $dataSurvei->answer_1,
            'Mempunyai Anak Balita (24-50Bulan)' => $dataSurvei->answer_2,
            'Pasangan Usia Subur' => $dataSurvei->answer_3,
            'Pasangan Usia Subur Hamil' => $dataSurvei->answer_4,
            'Apakah Keluarga Tidak Memiliki Sumber Air Minum Yang Layak ?' => $dataSurvei->answer_5,
            'Apakah Keluarga Tidak Memiliki Jamban Yang Layak ?' => $dataSurvei->answer_6,
            'Terlalu Muda (Umur Istri < 20 Tahun)' => $dataSurvei->answer_7,
            'Terlalu Tua (Umur Istri 35 Tahun s/d 40 Tahun)' => $dataSurvei->answer_8,
            'Terlalu Dekat (<2 Tahun)' => $dataSurvei->answer_9,
            'Terlalu Banyak (3 Anak)' => $dataSurvei->answer_10,
            'Bukan Peserta KB Modern' => $dataSurvei->answer_11,
            'Tingkat Kesejahteraan' => $dataSurvei->answer_12,
            'Kategori Keluarga Beresiko Stunting' => $dataSurvei->answer_13,
            'Apakah ada anggota keluarga yang memiliki rencana menikah dalam 3 bulan ke depan?' => $dataSurvei->answer_14,
            'Pendampingan oleh TPK' => $dataSurvei->answer_15,
            'Jumlah anggota keluarga' => $dataSurvei->answer_16,
            'Jumlah anggota keluarga yang berprofesi sebagai tukang bangunan' => $dataSurvei->answer_17,
            'Jumlah pengeluaran keluarga per bulan' => $dataSurvei->answer_18,
        ];
    }

    public function headings(): array
    {
        return ['Nomor Keluarga Indonesia', 'Nama Kepala Keluarga', 'Nama Istri', 'Status Keluarga', 'Kecamatan', 'Kelurahan', 'RW', 'RT', 'Latitude', 'Longitude', 'Mempunyai Anak Baduta (0-23 Bulan)', 'Mempunyai Anak Balita (24-50 Bulan)', 'Pasangan Usia Subur', 'Pasangan Usia Subur Hamil', 'Apakah Keluarga Tidak Memiliki Sumber Air Minum Yang Layak ?', 'Apakah Keluarga Tidak Memiliki Jamban Yang Layak ?', 'Terlalu Muda (Umur Istri < 20 Tahun)', 'Terlalu Tua (Umur Istri 35 Tahun s/d 40 Tahun)', 'Terlalu Dekat (<2 Tahun)', 'Terlalu Banyak (3 Anak)', 'Bukan Peserta KB Modern', 'Tingkat Kesejahteraan', 'Kategori Keluarga Beresiko Stunting', 'Apakah ada anggota keluarga yang memiliki rencana menikah dalam 3 bulan ke depan?', 'Pendampingan oleh TPK', 'Jumlah anggota keluarga', 'Jumlah anggota keluarga yang berprofesi sebagai tukang bangunan', 'Jumlah pengeluaran keluarga per bulan'];
    }

    public function columnFormats(): array
    {
        return [
            'A' => NumberFormat::FORMAT_NUMBER,
        ];
    }
}

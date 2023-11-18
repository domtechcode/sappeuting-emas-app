<?php

namespace App\Exports;

use App\Models\DataPenduduk;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;

class DataPendudukExport implements FromCollection, WithHeadings, WithColumnFormatting
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
        $query = DataPenduduk::query();

        if ($this->kecamatan && $this->kecamatan !== 'all') {
            $query->where('kecamatan', $this->kecamatan);
        } else {
            $query->whereNotNull('kecamatan');
        }

        if ($this->kelurahan && $this->kelurahan !== 'all') {
            $query->where('kelurahan', $this->kelurahan);
        } else {
            $query->whereNotNull('kelurahan');
        }

        if ($this->rw && $this->rw !== 'all') {
            $query->where('rw', $this->rw);
        } else {
            $query->whereNotNull('rw');
        }

        if ($this->rt && $this->rt !== 'all') {
            $query->where('rt', $this->rt);
        } else {
            $query->whereNotNull('rt');
        }

        return $query->get();
    }

    public function headings(): array
    {
        // Kolom judul Excel
        return [
            'Id',
            'Nomor Keluarga Indonesia',
            'Nama Kepala Keluarga',
            'Nama Istri',
            'Status Keluarga',
            'Kecamatan',
            'Kelurahan',
            'RW',
            'RT',
            'Created At',
            'Updated At',
            'Deleted At',
        ];
    }

    public function columnFormats(): array
    {
        return [
            'B' => NumberFormat::FORMAT_NUMBER,
            // Adjust the column letter ('B' in this case) based on your actual column order
        ];
    }
}

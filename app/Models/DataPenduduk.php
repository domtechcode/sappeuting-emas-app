<?php

namespace App\Models;

use App\Models\DataSurveiKrs;
use App\Models\DataSurveiP3ke;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DataPenduduk extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'data_penduduks';
    protected $fillable = [
        'nomor_keluarga_indonesia', 'nik', 'nama_kepala_keluarga', 'nama_istri', 'status_keluarga', 'kecamatan', 'kelurahan', 'rw', 'rt', 'latitude', 'longitude', 'no_handphone'
    ];

    public function dataSurveiKrs()
    {
        return $this->hasOne(DataSurveiKrs::class);
    }

    public function dataSurveiP3ke()
    {
        return $this->hasOne(DataSurveiP3ke::class);
    }

    public function scopeSearch($query, $value)
    {
        $query
            ->where('nomor_keluarga_indonesia', 'like', "%{$value}%")
            ->orWhere('nik', 'like', "%{$value}%")
            ->orWhere('nama_kepala_keluarga', 'like', "%{$value}%")
            ->orWhere('nama_istri', 'like', "%{$value}%")
            ->orWhere('status_keluarga', 'like', "%{$value}%")
            ->orWhere('kecamatan', 'like', "%{$value}%")
            ->orWhere('kelurahan', 'like', "%{$value}%")
            ->orWhere('rw', 'like', "%{$value}%")
            ->orWhere('rt', 'like', "%{$value}%");
    }

}

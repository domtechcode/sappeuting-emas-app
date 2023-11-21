<?php

namespace App\Models;

use App\Models\User;
use App\Models\Pertanyaan;
use App\Models\DataPenduduk;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DataSurveiKrs extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'data_survei_krs';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function dataPenduduk()
    {
        return $this->belongsTo(DataPenduduk::class);
    }

    public function scopeSearch($query, $value)
    {
        $query->orWhereHas('dataPenduduk', function ($q) use ($value) {
            $q->where('nomor_keluarga_indonesia', 'like', "%{$value}%")
                ->orWhere('nama_kepala_keluarga', 'like', "%{$value}%")
                ->orWhere('nama_istri', 'like', "%{$value}%")
                ->orWhere('status_keluarga', 'like', "%{$value}%")
                ->orWhere('kecamatan', 'like', "%{$value}%")
                ->orWhere('kelurahan', 'like', "%{$value}%")
                ->orWhere('rw', 'like', "%{$value}%")
                ->orWhere('rt', 'like', "%{$value}%");
        });
    }

    public function scopeSearchKRS($query, $kecamatanField, $kelurahanField, $rwField, $rtField)
    {
        $query->orWhereHas('dataPenduduk', function ($query) use ($kecamatanField, $kelurahanField, $rwField, $rtField) {
            $query
                ->where('kecamatan', 'like', "%{$kecamatanField}%")
                ->where('kelurahan', 'like', "%{$kelurahanField}%")
                ->where('rw', 'like', "%{$rwField}%")
                ->where('rt', 'like', "%{$rtField}%");
        });
    }
}

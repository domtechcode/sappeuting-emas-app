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
    protected $fillable = ['user_id', 'data_penduduk_id', 'answer_1', 'answer_2', 'answer_3', 'answer_4', 'answer_5', 'answer_6', 'answer_7', 'answer_8', 'answer_9', 'answer_10', 'answer_11', 'answer_12', 'answer_13', 'answer_14', 'answer_15', 'answer_16', 'answer_17', 'answer_18', 'status', 'state'];

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

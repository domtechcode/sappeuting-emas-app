<?php

namespace App\Models;

use App\Models\DataSurvei;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DataPenduduk extends Model
{
    use HasFactory, SoftDeletes;


    protected $fillable = [
        'nomor_keluarga_indonesia', 'nama_kepala_keluarga', 'nama_istri', 'status_keluarga', 'kecamatan', 'kelurahan', 'rw', 'rt'
    ];

    public function dataSurveis()
    {
        return $this->hasMany(DataSurvei::class);
    }

}

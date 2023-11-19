<?php

namespace App\Models;

use App\Models\User;
use App\Models\DataPenduduk;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DataSurveiP3ke extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'data_survei_p3kes';
    protected $guarded = [];
    protected $attributes = [
        'bpnt' => '2',
        'bpum' => '2',
        'bst' => '2',
        'pkh' => '2',
        'sembako' => '2',
        'pra_kerja' => '2',
        'kur' => '2',
        'sumber_penghasilan' => '-',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function dataPenduduk()
    {
        return $this->belongsTo(DataPenduduk::class);
    }
}

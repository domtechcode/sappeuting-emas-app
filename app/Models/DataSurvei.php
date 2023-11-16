<?php

namespace App\Models;

use App\Models\User;
use App\Models\Pertanyaan;
use App\Models\DataPenduduk;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DataSurvei extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'data_penduduk_id',
        'answer_1',
        'answer_2',
        'answer_3',
        'answer_4',
        'answer_5',
        'answer_6',
        'answer_7',
        'answer_8',
        'answer_9',
        'answer_10',
        'answer_11',
        'answer_12',
        'answer_13',
        'answer_14',
        'status',
        'state'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function dataPenduduk()
    {
        return $this->belongsTo(DataPenduduk::class);
    }

    public function pertanyaan()
    {
        return $this->belongsTo(Pertanyaan::class);
    }

}

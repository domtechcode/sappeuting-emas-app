<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PermintaanData extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id', 'kecamatan', 'kelurahan', 'rt', 'rw', 'status', 'state'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}

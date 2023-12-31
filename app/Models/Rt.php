<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rt extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'rts';
    protected $fillable = [
        'nomor_rt'
    ];
}

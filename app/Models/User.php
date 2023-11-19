<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\DataSurveiKrs;
use App\Models\DataSurveiP3ke;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nama', 'role', 'username', 'password', 'kecamatan', 'kelurahan', 'rw', 'rt'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
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
            ->where('nama', 'like', "%{$value}%")
            ->orWhere('username', 'like', "%{$value}%")
            ->orWhere('kecamatan', 'like', "%{$value}%")
            ->orWhere('kelurahan', 'like', "%{$value}%")
            ->orWhere('rt', 'like', "%{$value}%")
            ->orWhere('rw', 'like', "%{$value}%");
    }
}

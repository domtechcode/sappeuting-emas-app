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
        'aset' => '-',
        'tabungan' => '-',
        'ac' => '-',
        'televisi_layar_datar' => '-',
        'lemari_es_kulkas' => '-',
        'komputer_laptop' => '-',
        'sepeda_motor' => '-',
        'mobil' => '-',
        'kapal_perahu_motor_perahu' => '-',
        'emas_perhiasan' => '-',
        'hewan_ternak' => '-',
        'lahan' => '-',
        'rumah_ditempat_lain' => '-',

        'beton' => '-',
        'genteng' => '-',
        'seng_atap' => '-',
        'asbes_seng' => '-',
        'kayu_sirap' => '-',
        'bambu_atap' => '-',
        'jerami_ijuk_rumbia_daun_daunan' => '-',
        'atap_rumah_lainnya' => '-',
        'kondisi_atap_rumah' => '-',

        'tembok' => '-',
        'plasteran_anyaman_bambu_kawat' => '-',
        'kayu_papan_dinding' => '-',
        'anyaman_bambu' => '-',
        'batang_kayu' => '-',
        'bambu_dinding' => '-',
        'seng_dinding' => '-',
        'dinding_rumah_lainnya' => '-',
        'kondisi_dinding_rumah' => '-',

        'keramik_granit_marmer_ubin_tegel_teraso' => '-',
        'keramik' => '-',
        'parket_vinil_karpet' => '-',
        'ubin_tegel_teraso' => '-',
        'kayu_papan_lantai' => '-',
        'semen' => '-',
        'bambu_lantai' => '-',
        'tanah' => '-',
        'lantai_rumah_lainnya' => '-',
        'kondisi_lantai_rumah' => '-',

        'listrik_pln_meteran' => '-',
        'listrik_pln_non_meteran' => '-',
        'listrik_non_pln' => '-',
        'bukan_listrik' => '-',
        'watt_listrik' => '-',

        'air_kemasan_isi_ulang' => '-',
        'ledeng_pam' => '-',
        'sumur_bor' => '-',
        'sumur_terlindung' => '-',
        'sumur_tidak_terlindung' => '-',
        'mata_air_terlindung' => '-',
        'air_permukaan_sungai_danau_dll' => '-',
        'air_hujan' => '-',
        'air_minum_lainnya' => '-',

        'milik_sendiri_fasilitas_buang_air_besar' =>'-',
        'umum_bersama' =>'-',
        'fasilitas_buang_air_besar_lainnya' =>'-',
        'fasilitas_buang_air_besar_kosong' =>'-',
        'tidak_ada_fasilitas_buang_air_besar' =>'-',

        'luas_rumah' => '-',
        'jumlah_orang_dirumah' => '-',

        'listrik' =>'-',
        'gas_12kg' =>'-',
        'gas_5_5kg' =>'-',
        'gas_3kg' =>'-',
        'minyak_tanah' =>'-',
        'briket_kayu_arang' =>'-',
        'bahan_bakar_utama_lainnya' =>'-',

        'bebas_sewa_menumpang' => '-',
        'kontrak_sewa' => '-',
        'milik_sendiri' => '-',
        'dinas' => '-',
        'kepemilikan_rumah_lainnya' => '-',

    ];

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
}

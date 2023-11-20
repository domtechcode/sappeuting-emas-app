<?php

namespace App\Livewire\Kader\Components;

use Livewire\Component;
use App\Models\DataPenduduk;
use App\Models\DataSurveiKrs;
use Livewire\Attributes\Rule;
use App\Models\DataSurveiP3ke;

class SurveiKaderIndex extends Component
{
    public $state;
    public $id;
    public $nomor_keluarga_indonesia;
    public $nama_kepala_keluarga;
    public $nama_istri;
    public $status_keluarga;
    public $latitude;
    public $longitude;

    public $answer_1;
    public $answer_2;
    public $answer_3;
    public $answer_4;
    public $answer_5;
    public $answer_6;
    public $answer_7;
    public $answer_8;
    public $answer_9;
    public $answer_10;
    public $answer_11;
    public $answer_12;
    public $answer_13;
    public $answer_14;
    public $answer_15;
    public $answer_16;
    public $answer_17;
    public $answer_18;

    public $penerimaanBantuan = [];

    public $sumber_penghasilan;

    public $aset;
    public $jenisAset = [];

    public $jenisAtapRumah = [];
    public $kondisi_atap_rumah;

    public $jenisDindingRumah = [];
    public $kondisi_dinding_rumah;

    public $jenisLantaiRumah = [];
    public $kondisi_lantai_rumah;

    public $jenisSumberPeneranganUtama = [];
    public $watt_listrik;

    public $jenisSumberAirMinum = [];

    public $fasilitasBuangAirBesar = [];

    public $luas_rumah;
    public $jumlah_orang_dirumah;

    public $jenisBahanBakar = [];

    public $kepemilikanRumah = [];

    public $dataSurveiKrs;
    public $dataSurveiP3ke;

    public function mount($state, $id)
    {
        $this->state = $state;
        $this->id = $id;

        $dataPenduduk = DataPenduduk::find($this->id);
        $this->nomor_keluarga_indonesia = $dataPenduduk->nomor_keluarga_indonesia;
        $this->nama_kepala_keluarga = $dataPenduduk->nama_kepala_keluarga;
        $this->nama_istri = $dataPenduduk->nama_istri;
        $this->status_keluarga = $dataPenduduk->status_keluarga;
        $this->latitude = $dataPenduduk->latitude;
        $this->longitude = $dataPenduduk->longitude;

        $this->dataSurveiKrs = DataSurveiKrs::where('data_penduduk_id', $dataPenduduk->id)->first();

        if (isset($this->dataSurveiKrs)) {
            $this->answer_1 = $this->dataSurveiKrs->answer_1;
            $this->answer_2 = $this->dataSurveiKrs->answer_2;
            $this->answer_3 = $this->dataSurveiKrs->answer_3;
            $this->answer_4 = $this->dataSurveiKrs->answer_4;
            $this->answer_5 = $this->dataSurveiKrs->answer_5;
            $this->answer_6 = $this->dataSurveiKrs->answer_6;
            $this->answer_7 = $this->dataSurveiKrs->answer_7;
            $this->answer_8 = $this->dataSurveiKrs->answer_8;
            $this->answer_9 = $this->dataSurveiKrs->answer_9;
            $this->answer_10 = $this->dataSurveiKrs->answer_10;
            $this->answer_11 = $this->dataSurveiKrs->answer_11;
            $this->answer_12 = $this->dataSurveiKrs->answer_12;
            $this->answer_13 = $this->dataSurveiKrs->answer_13;
            $this->answer_14 = $this->dataSurveiKrs->answer_14;
            $this->answer_15 = $this->dataSurveiKrs->answer_15;
            $this->answer_16 = $this->dataSurveiKrs->answer_16;
            $this->answer_17 = $this->dataSurveiKrs->answer_17;
            $this->answer_18 = $this->dataSurveiKrs->answer_18;
        } else {
            $this->answer_1 = '-';
            $this->answer_2 = '-';
            $this->answer_3 = '-';
            $this->answer_4 = '-';
            $this->answer_5 = '-';
            $this->answer_6 = '-';
            $this->answer_7 = '-';
            $this->answer_8 = '-';
            $this->answer_9 = '-';
            $this->answer_10 = '-';
            $this->answer_11 = '-';
            $this->answer_12 = '-';
            $this->answer_13 = '-';
            $this->answer_14 = '-';
            $this->answer_15 = '-';
            $this->answer_16 = '';
            $this->answer_17 = '';
            $this->answer_18 = '';
        }

        $this->dataSurveiP3ke = DataSurveiP3ke::where('data_penduduk_id', $dataPenduduk->id)->first();

        if (isset($this->dataSurveiP3ke)) {
            $this->penerimaanBantuan = [
                'bpnt' => $this->dataSurveiP3ke->bpnt === '2' ? '-' : true,
                'bpum' => $this->dataSurveiP3ke->bpum === '2' ? '-' : true,
                'bst' => $this->dataSurveiP3ke->bst === '2' ? '-' : true,
                'pkh' => $this->dataSurveiP3ke->pkh === '2' ? '-' : true,
                'sembako' => $this->dataSurveiP3ke->sembako === '2' ? '-' : true,
                'pra_kerja' => $this->dataSurveiP3ke->pra_kerja === '2' ? '-' : true,
                'kur' => $this->dataSurveiP3ke->kur === '2' ? '-' : true,
            ];

            $this->sumber_penghasilan = $this->dataSurveiP3ke->sumber_penghasilan;
            $this->aset = $this->dataSurveiP3ke->aset;

            $this->jenisAset = [
                'tabungan' => $this->dataSurveiP3ke->tabungan === '-' ? false : true,
                'ac' => $this->dataSurveiP3ke->ac === '-' ? false : true,
                'televisi_layar_datar' => $this->dataSurveiP3ke->televisi_layar_datar === '-' ? false : true,
                'lemari_es_kulkas' => $this->dataSurveiP3ke->lemari_es_kulkas === '-' ? false : true,
                'komputer_laptop' => $this->dataSurveiP3ke->komputer_laptop === '-' ? false : true,
                'sepeda_motor' => $this->dataSurveiP3ke->sepeda_motor === '-' ? false : true,
                'mobil' => $this->dataSurveiP3ke->mobil === '-' ? false : true,
                'kapal_perahu_motor_perahu' => $this->dataSurveiP3ke->kapal_perahu_motor_perahu === '-' ? false : true,
                'emas_perhiasan' => $this->dataSurveiP3ke->emas_perhiasan === '-' ? false : true,
                'hewan_ternak' => $this->dataSurveiP3ke->hewan_ternak === '-' ? false : true,
                'lahan' => $this->dataSurveiP3ke->lahan === '-' ? false : true,
                'rumah_ditempat_lain' => $this->dataSurveiP3ke->rumah_ditempat_lain === '-' ? false : true,
            ];

            $this->jenisAtapRumah = [
                'beton' => $this->dataSurveiP3ke->beton === '-' ? false : true,
                'genteng' => $this->dataSurveiP3ke->genteng === '-' ? false : true,
                'seng_atap' => $this->dataSurveiP3ke->seng_atap === '-' ? false : true,
                'asbes_seng' => $this->dataSurveiP3ke->asbes_seng === '-' ? false : true,
                'kayu_sirap' => $this->dataSurveiP3ke->kayu_sirap === '-' ? false : true,
                'bambu_atap' => $this->dataSurveiP3ke->bambu_atap === '-' ? false : true,
                'jerami_ijuk_rumbia_daun_daunan' => $this->dataSurveiP3ke->jerami_ijuk_rumbia_daun_daunan === '-' ? false : true,
                'atap_rumah_lainnya' => $this->dataSurveiP3ke->atap_rumah_lainnya === '-' ? false : true,
            ];

            $this->kondisi_atap_rumah = $this->dataSurveiP3ke->kondisi_atap_rumah;

            $this->jenisDindingRumah = [
                'tembok' => $this->dataSurveiP3ke->tembok === '-' ? false : true,
                'plasteran_anyaman_bambu_kawat' => $this->dataSurveiP3ke->plasteran_anyaman_bambu_kawat === '-' ? false : true,
                'kayu_papan_dinding' => $this->dataSurveiP3ke->kayu_papan_dinding === '-' ? false : true,
                'anyaman_bambu' => $this->dataSurveiP3ke->anyaman_bambu === '-' ? false : true,
                'batang_kayu' => $this->dataSurveiP3ke->batang_kayu === '-' ? false : true,
                'bambu_dinding' => $this->dataSurveiP3ke->bambu_dinding === '-' ? false : true,
                'seng_dinding' => $this->dataSurveiP3ke->seng_dinding === '-' ? false : true,
                'dinding_rumah_lainnya' => $this->dataSurveiP3ke->dinding_rumah_lainnya === '-' ? false : true,
            ];

            $this->kondisi_dinding_rumah = $this->dataSurveiP3ke->kondisi_dinding_rumah;

            $this->jenisLantaiRumah = [
                'keramik_granit_marmer_ubin_tegel_teraso' => $this->dataSurveiP3ke->keramik_granit_marmer_ubin_tegel_teraso === '-' ? false : true,
                'keramik' => $this->dataSurveiP3ke->keramik === '-' ? false : true,
                'parket_vinil_karpet' => $this->dataSurveiP3ke->parket_vinil_karpet === '-' ? false : true,
                'ubin_tegel_teraso' => $this->dataSurveiP3ke->ubin_tegel_teraso === '-' ? false : true,
                'kayu_papan_lantai' => $this->dataSurveiP3ke->kayu_papan_lantai === '-' ? false : true,
                'semen' => $this->dataSurveiP3ke->semen === '-' ? false : true,
                'bambu_lantai' => $this->dataSurveiP3ke->bambu_lantai === '-' ? false : true,
                'tanah' => $this->dataSurveiP3ke->tanah === '-' ? false : true,
                'lantai_rumah_lainnya' => $this->dataSurveiP3ke->lantai_rumah_lainnya === '-' ? false : true,
            ];

            $this->kondisi_lantai_rumah = $this->dataSurveiP3ke->kondisi_lantai_rumah;

            $this->jenisSumberPeneranganUtama = [
                'listrik_pln_meteran' => $this->dataSurveiP3ke->listrik_pln_meteran === '-' ? false : true,
                'listrik_pln_non_meteran' => $this->dataSurveiP3ke->listrik_pln_non_meteran === '-' ? false : true,
                'listrik_non_pln' => $this->dataSurveiP3ke->listrik_non_pln === '-' ? false : true,
                'bukan_listrik' => $this->dataSurveiP3ke->bukan_listrik === '-' ? false : true,
            ];

            $this->watt_listrik = $this->dataSurveiP3ke->watt_listrik;

            $this->jenisSumberAirMinum = [
                'air_kemasan_isi_ulang' => $this->dataSurveiP3ke->air_kemasan_isi_ulang === '-' ? false : true,
                'ledeng_pam' => $this->dataSurveiP3ke->ledeng_pam === '-' ? false : true,
                'sumur_bor' => $this->dataSurveiP3ke->sumur_bor === '-' ? false : true,
                'sumur_terlindung' => $this->dataSurveiP3ke->sumur_terlindung === '-' ? false : true,
                'sumur_tidak_terlindung' => $this->dataSurveiP3ke->sumur_tidak_terlindung === '-' ? false : true,
                'mata_air_terlindung' => $this->dataSurveiP3ke->mata_air_terlindung === '-' ? false : true,
                'air_permukaan_sungai_danau_dll' => $this->dataSurveiP3ke->air_permukaan_sungai_danau_dll === '-' ? false : true,
                'air_hujan' => $this->dataSurveiP3ke->air_hujan === '-' ? false : true,
                'air_minum_lainnya' => $this->dataSurveiP3ke->air_minum_lainnya === '-' ? false : true,
            ];

            $this->fasilitasBuangAirBesar = [
                'milik_sendiri_fasilitas_buang_air_besar' => $this->dataSurveiP3ke->milik_sendiri_fasilitas_buang_air_besar === '-' ? false : true,
                'umum_bersama' => $this->dataSurveiP3ke->umum_bersama === '-' ? false : true,
                'fasilitas_buang_air_besar_lainnya' => $this->dataSurveiP3ke->fasilitas_buang_air_besar_lainnya === '-' ? false : true,
                'fasilitas_buang_air_besar_kosong' => $this->dataSurveiP3ke->fasilitas_buang_air_besar_kosong === '-' ? false : true,
                'tidak_ada_fasilitas_buang_air_besar' => $this->dataSurveiP3ke->tidak_ada_fasilitas_buang_air_besar === '-' ? false : true,
            ];

            $this->luas_rumah = $this->dataSurveiP3ke->luas_rumah;
            $this->jumlah_orang_dirumah = $this->dataSurveiP3ke->jumlah_orang_dirumah;

            $this->jenisBahanBakar = [
                'listrik' => $this->dataSurveiP3ke->listrik === '-' ? false : true,
                'gas_12kg' => $this->dataSurveiP3ke->gas_12kg === '-' ? false : true,
                'gas_5_5kg' => $this->dataSurveiP3ke->gas_5_5kg === '-' ? false : true,
                'gas_3kg' => $this->dataSurveiP3ke->gas_3kg === '-' ? false : true,
                'minyak_tanah' => $this->dataSurveiP3ke->minyak_tanah === '-' ? false : true,
                'briket_kayu_arang' => $this->dataSurveiP3ke->briket_kayu_arang === '-' ? false : true,
                'bahan_bakar_utama_lainnya' => $this->dataSurveiP3ke->bahan_bakar_utama_lainnya === '-' ? false : true,
            ];

            $this->kepemilikanRumah = [
                'bebas_sewa_menumpang' => $this->dataSurveiP3ke->bebas_sewa_menumpang === '-' ? false : true,
                'kontrak_sewa' => $this->dataSurveiP3ke->kontrak_sewa === '-' ? false : true,
                'milik_sendiri' => $this->dataSurveiP3ke->milik_sendiri === '-' ? false : true,
                'dinas' => $this->dataSurveiP3ke->dinas === '-' ? false : true,
                'kepemilikan_rumah_lainnya' => $this->dataSurveiP3ke->kepemilikan_rumah_lainnya === '-' ? false : true,
            ];
        } else {
            $this->penerimaanBantuan = [
                'bpnt' => '2',
                'bpum' => '2',
                'bst' => '2',
                'pkh' => '2',
                'sembako' => '2',
                'pra_kerja' => '2',
                'kur' => '2',
            ];

            $this->sumber_penghasilan = '-';
            $this->aset = '-';

            $this->jenisAset = [
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
            ];

            $this->jenisAtapRumah = [
                'beton' => '-',
                'genteng' => '-',
                'seng_atap' => '-',
                'asbes_seng' => '-',
                'kayu_sirap' => '-',
                'bambu_atap' => '-',
                'jerami_ijuk_rumbia_daun_daunan' => '-',
                'atap_rumah_lainnya' => '-',
            ];

            $this->kondisi_atap_rumah = '-';

            $this->jenisDindingRumah = [
                'tembok' => '-',
                'plasteran_anyaman_bambu_kawat' => '-',
                'kayu_papan_dinding' => '-',
                'anyaman_bambu' => '-',
                'batang_kayu' => '-',
                'bambu_dinding' => '-',
                'seng_dinding' => '-',
                'dinding_rumah_lainnya' => '-',
            ];

            $this->kondisi_dinding_rumah = '-';

            $this->jenisLantaiRumah = [
                'keramik_granit_marmer_ubin_tegel_teraso' => '-',
                'keramik' => '-',
                'parket_vinil_karpet' => '-',
                'ubin_tegel_teraso' => '-',
                'kayu_papan_lantai' => '-',
                'semen' => '-',
                'bambu_lantai' => '-',
                'tanah' => '-',
                'lantai_rumah_lainnya' => '-',
            ];

            $this->kondisi_lantai_rumah = '-';

            $this->jenisSumberPeneranganUtama = [
                'listrik_pln_meteran' => '-',
                'listrik_pln_non_meteran' => '-',
                'listrik_non_pln' => '-',
                'bukan_listrik' => '-',
            ];

            $this->watt_listrik = '-';

            $this->jenisSumberAirMinum = [
                'air_kemasan_isi_ulang' => '-',
                'ledeng_pam' => '-',
                'sumur_bor' => '-',
                'sumur_terlindung' => '-',
                'sumur_tidak_terlindung' => '-',
                'mata_air_terlindung' => '-',
                'air_permukaan_sungai_danau_dll' => '-',
                'air_hujan' => '-',
                'air_minum_lainnya' => '-',
            ];

            $this->fasilitasBuangAirBesar = [
                'milik_sendiri_fasilitas_buang_air_besar' => '-',
                'umum_bersama' => '-',
                'fasilitas_buang_air_besar_lainnya' => '-',
                'fasilitas_buang_air_besar_kosong' => '-',
                'tidak_ada_fasilitas_buang_air_besar' => '-',
            ];

            $this->luas_rumah = '';
            $this->jumlah_orang_dirumah = '';

            $this->jenisBahanBakar = [
                'listrik' => '-',
                'gas_12kg' => '-',
                'gas_5_5kg' => '-',
                'gas_3kg' => '-',
                'minyak_tanah' => '-',
                'briket_kayu_arang' => '-',
                'bahan_bakar_utama_lainnya' => '-',
            ];

            $this->kepemilikanRumah = [
                'bebas_sewa_menumpang' => '-',
                'kontrak_sewa' => '-',
                'milik_sendiri' => '-',
                'dinas' => '-',
                'kepemilikan_rumah_lainnya' => '-',
            ];
        }
    }

    public function render()
    {
        return view('livewire.kader.components.survei-kader-index');
    }

    public function save()
    {
        $this->validate(
            [
                'nomor_keluarga_indonesia' => 'required',
                'nama_kepala_keluarga' => 'required',
                'nama_istri' => 'required',
                'status_keluarga' => 'required',
                'latitude' => 'required',
                'longitude' => 'required',

                'answer_1' => 'required',
                'answer_2' => 'required',
                'answer_3' => 'required',
                'answer_4' => 'required',
                'answer_5' => 'required',
                'answer_6' => 'required',
                'answer_7' => 'required',
                'answer_8' => 'required',
                'answer_9' => 'required',
                'answer_10' => 'required',
                'answer_11' => 'required',
                'answer_12' => 'required',
                'answer_13' => 'required',
                'answer_14' => 'required',
                'answer_15' => 'required',
                'answer_16' => 'required',
                'answer_17' => 'required',
                'answer_18' => 'required',
            ],
            [
                'nomor_keluarga_indonesia' => 'Harus diisi.',
                'nama_kepala_keluarga' => 'Harus diisi.',
                'nama_istri' => 'Harus diisi.',
                'status_keluarga' => 'Harus diisi.',
                'latitude' => 'Harus diisi.',
                'longitude' => 'Harus diisi.',

                'answer_1.required' => 'Harus diisi.',
                'answer_2.required' => 'Harus diisi.',
                'answer_3.required' => 'Harus diisi.',
                'answer_4.required' => 'Harus diisi.',
                'answer_5.required' => 'Harus diisi.',
                'answer_6.required' => 'Harus diisi.',
                'answer_7.required' => 'Harus diisi.',
                'answer_8.required' => 'Harus diisi.',
                'answer_9.required' => 'Harus diisi.',
                'answer_10.required' => 'Harus diisi.',
                'answer_11.required' => 'Harus diisi.',
                'answer_12.required' => 'Harus diisi.',
                'answer_13.required' => 'Harus diisi.',
                'answer_14.required' => 'Harus diisi.',
                'answer_15.required' => 'Harus diisi.',
                'answer_16.required' => 'Harus diisi.',
                'answer_17.required' => 'Harus diisi.',
                'answer_18.required' => 'Harus diisi.',
            ],
        );

        $dataJenisPenerimaanBantuan = [
            'bpnt' => $this->penerimaanBantuan['bpnt'] === true ? 1 : 2,
            'bpum' => $this->penerimaanBantuan['bpum'] === true ? 1 : 2,
            'bst' => $this->penerimaanBantuan['bst'] === true ? 1 : 2,
            'pkh' => $this->penerimaanBantuan['pkh'] === true ? 1 : 2,
            'sembako' => $this->penerimaanBantuan['sembako'] === true ? 1 : 2,
            'pra_kerja' => $this->penerimaanBantuan['pra_kerja'] === true ? 1 : 2,
            'kur' => $this->penerimaanBantuan['kur'] === true ? 1 : 2,
        ];

        $dataJenisAset = [
            'tabungan' => $this->jenisAset['tabungan'] === true ? 1 : '-',
            'ac' => $this->jenisAset['ac'] === true ? 2 : '-',
            'televisi_layar_datar' => $this->jenisAset['televisi_layar_datar'] === true ? 3 : '-',
            'lemari_es_kulkas' => $this->jenisAset['lemari_es_kulkas'] === true ? 4 : '-',
            'komputer_laptop' => $this->jenisAset['komputer_laptop'] === true ? 5 : '-',
            'sepeda_motor' => $this->jenisAset['sepeda_motor'] === true ? 6 : '-',
            'mobil' => $this->jenisAset['mobil'] === true ? 7 : '-',
            'kapal_perahu_motor_perahu' => $this->jenisAset['kapal_perahu_motor_perahu'] === true ? 8 : '-',
            'emas_perhiasan' => $this->jenisAset['emas_perhiasan'] === true ? 9 : '-',
            'hewan_ternak' => $this->jenisAset['hewan_ternak'] === true ? 10 : '-',
            'lahan' => $this->jenisAset['lahan'] === true ? 11 : '-',
            'rumah_ditempat_lain' => $this->jenisAset['rumah_ditempat_lain'] === true ? 11 : '-',
        ];

        $dataJenisAtapRumah = [
            'beton' => $this->jenisAtapRumah['beton'] === true ? 1 : '-',
            'genteng' => $this->jenisAtapRumah['genteng'] === true ? 2 : '-',
            'seng_atap' => $this->jenisAtapRumah['seng_atap'] === true ? 3 : '-',
            'asbes_seng' => $this->jenisAtapRumah['asbes_seng'] === true ? 4 : '-',
            'kayu_sirap' => $this->jenisAtapRumah['kayu_sirap'] === true ? 5 : '-',
            'bambu_atap' => $this->jenisAtapRumah['bambu_atap'] === true ? 6 : '-',
            'jerami_ijuk_rumbia_daun_daunan' => $this->jenisAtapRumah['jerami_ijuk_rumbia_daun_daunan'] === true ? 7 : '-',
            'atap_rumah_lainnya' => $this->jenisAtapRumah['atap_rumah_lainnya'] === true ? 8 : '-',
        ];

        $dataJenisDindingRumah = [
            'tembok' => $this->jenisDindingRumah['tembok'] === true ? 1 : '-',
            'plasteran_anyaman_bambu_kawat' => $this->jenisDindingRumah['plasteran_anyaman_bambu_kawat'] === true ? 2 : '-',
            'kayu_papan_dinding' => $this->jenisDindingRumah['kayu_papan_dinding'] === true ? 3 : '-',
            'anyaman_bambu' => $this->jenisDindingRumah['anyaman_bambu'] === true ? 4 : '-',
            'batang_kayu' => $this->jenisDindingRumah['batang_kayu'] === true ? 5 : '-',
            'bambu_dinding' => $this->jenisDindingRumah['bambu_dinding'] === true ? 6 : '-',
            'seng_dinding' => $this->jenisDindingRumah['seng_dinding'] === true ? 7 : '-',
            'dinding_rumah_lainnya' => $this->jenisDindingRumah['dinding_rumah_lainnya'] === true ? 8 : '-',
        ];

        $dataJenisLantaiRumah = [
            'keramik_granit_marmer_ubin_tegel_teraso' => $this->jenisLantaiRumah['keramik_granit_marmer_ubin_tegel_teraso'] === true ? 1 : '-',
            'keramik' => $this->jenisLantaiRumah['keramik'] === true ? 2 : '-',
            'parket_vinil_karpet' => $this->jenisLantaiRumah['parket_vinil_karpet'] === true ? 3 : '-',
            'ubin_tegel_teraso' => $this->jenisLantaiRumah['ubin_tegel_teraso'] === true ? 4 : '-',
            'kayu_papan_lantai' => $this->jenisLantaiRumah['kayu_papan_lantai'] === true ? 5 : '-',
            'semen' => $this->jenisLantaiRumah['semen'] === true ? 6 : '-',
            'bambu_lantai' => $this->jenisLantaiRumah['bambu_lantai'] === true ? 7 : '-',
            'tanah' => $this->jenisLantaiRumah['tanah'] === true ? 8 : '-',
            'lantai_rumah_lainnya' => $this->jenisLantaiRumah['lantai_rumah_lainnya'] === true ? 9 : '-',
        ];

        $dataJenisSumberPeneranganUtama = [
            'listrik_pln_meteran' => $this->jenisSumberPeneranganUtama['listrik_pln_meteran'] === true ? 1 : '-',
            'listrik_pln_non_meteran' => $this->jenisSumberPeneranganUtama['listrik_pln_non_meteran'] === true ? 2 : '-',
            'listrik_non_pln' => $this->jenisSumberPeneranganUtama['listrik_non_pln'] === true ? 3 : '-',
            'bukan_listrik' => $this->jenisSumberPeneranganUtama['bukan_listrik'] === true ? 4 : '-',
        ];

        $dataJenisSumberAirMinum = [
            'air_kemasan_isi_ulang' => $this->jenisSumberAirMinum['air_kemasan_isi_ulang'] === true ? 1 : '-',
            'ledeng_pam' => $this->jenisSumberAirMinum['ledeng_pam'] === true ? 2 : '-',
            'sumur_bor' => $this->jenisSumberAirMinum['sumur_bor'] === true ? 3 : '-',
            'sumur_terlindung' => $this->jenisSumberAirMinum['sumur_terlindung'] === true ? 4 : '-',
            'sumur_tidak_terlindung' => $this->jenisSumberAirMinum['sumur_tidak_terlindung'] === true ? 5 : '-',
            'mata_air_terlindung' => $this->jenisSumberAirMinum['mata_air_terlindung'] === true ? 6 : '-',
            'air_permukaan_sungai_danau_dll' => $this->jenisSumberAirMinum['air_permukaan_sungai_danau_dll'] === true ? 7 : '-',
            'air_hujan' => $this->jenisSumberAirMinum['air_hujan'] === true ? 8 : '-',
            'air_minum_lainnya' => $this->jenisSumberAirMinum['air_minum_lainnya'] === true ? 9 : '-',
        ];

        $dataFasilitasBuangAirBesar = [
            'milik_sendiri_fasilitas_buang_air_besar' => $this->fasilitasBuangAirBesar['milik_sendiri_fasilitas_buang_air_besar'] === true ? 1 : '-',
            'umum_bersama' => $this->fasilitasBuangAirBesar['umum_bersama'] === true ? 2 : '-',
            'fasilitas_buang_air_besar_lainnya' => $this->fasilitasBuangAirBesar['fasilitas_buang_air_besar_lainnya'] === true ? 3 : '-',
            'fasilitas_buang_air_besar_kosong' => $this->fasilitasBuangAirBesar['fasilitas_buang_air_besar_kosong'] === true ? 4 : '-',
            'tidak_ada_fasilitas_buang_air_besar' => $this->fasilitasBuangAirBesar['tidak_ada_fasilitas_buang_air_besar'] === true ? 5 : '-',
        ];

        $dataJenisBahanBakar = [
            'listrik' => $this->jenisBahanBakar['listrik'] === true ? 1 : '-',
            'gas_12kg' => $this->jenisBahanBakar['gas_12kg'] === true ? 2 : '-',
            'gas_5_5kg' => $this->jenisBahanBakar['gas_5_5kg'] === true ? 3 : '-',
            'gas_3kg' => $this->jenisBahanBakar['gas_3kg'] === true ? 4 : '-',
            'minyak_tanah' => $this->jenisBahanBakar['minyak_tanah'] === true ? 5 : '-',
            'briket_kayu_arang' => $this->jenisBahanBakar['briket_kayu_arang'] === true ? 6 : '-',
            'bahan_bakar_utama_lainnya' => $this->jenisBahanBakar['bahan_bakar_utama_lainnya'] === true ? 7 : '-',
        ];

        $dataKepemilikanRumah = [
            'bebas_sewa_menumpang' => $this->kepemilikanRumah['bebas_sewa_menumpang'] === true ? 1 : '-',
            'kontrak_sewa' => $this->kepemilikanRumah['kontrak_sewa'] === true ? 2 : '-',
            'milik_sendiri' => $this->kepemilikanRumah['milik_sendiri'] === true ? 3 : '-',
            'dinas' => $this->kepemilikanRumah['dinas'] === true ? 4 : '-',
            'kepemilikan_rumah_lainnya' => $this->kepemilikanRumah['kepemilikan_rumah_lainnya'] === true ? 5 : '-',
        ];

        if ($this->dataSurveiKrs && $this->dataSurveiP3ke) {
            $updateDataPenduduk = DataPenduduk::where('id', $this->id)->update([
                'status_keluarga' => $this->status_keluarga,
                'latitude' => $this->latitude,
                'longitude' => $this->longitude,
            ]);

            $updateDataSurveiKrs = DataSurveiKrs::where('data_penduduk_id', $this->id)->update([
                'user_id' => Auth()->user()->id,
                'data_penduduk_id' => $this->id,
                'answer_1' => $this->answer_1,
                'answer_2' => $this->answer_2,
                'answer_3' => $this->answer_3,
                'answer_4' => $this->answer_4,
                'answer_5' => $this->answer_5,
                'answer_6' => $this->answer_6,
                'answer_7' => $this->answer_7,
                'answer_8' => $this->answer_8,
                'answer_9' => $this->answer_9,
                'answer_10' => $this->answer_10,
                'answer_11' => $this->answer_11,
                'answer_12' => $this->answer_12,
                'answer_13' => $this->answer_13,
                'answer_14' => $this->answer_14,
                'answer_15' => $this->answer_15,
                'answer_16' => $this->answer_16,
                'answer_17' => $this->answer_17,
                'answer_18' => $this->answer_18,
                'status' => 'Pending',
                'state' => 'Kelurahan',
            ]);

            $updateDataSurveiP3ke = DataSurveiP3ke::where('data_penduduk_id', $this->id)->update(
                [
                    'user_id' => Auth()->user()->id,
                    'data_penduduk_id' => $this->id,
                    'sumber_penghasilan' => $this->sumber_penghasilan,
                    'aset' => $this->aset,
                    'kondisi_atap_rumah' => $this->kondisi_atap_rumah,
                    'kondisi_dinding_rumah' => $this->kondisi_dinding_rumah,
                    'kondisi_lantai_rumah' => $this->kondisi_lantai_rumah,
                    'watt_listrik' => $this->watt_listrik,
                    'luas_rumah' => $this->luas_rumah,
                    'jumlah_orang_dirumah' => $this->jumlah_orang_dirumah,
                    'status' => 'Pending',
                    'state' => 'Kelurahan',
                ] +
                    $dataJenisPenerimaanBantuan +
                    $dataJenisAset +
                    $dataJenisAtapRumah +
                    $dataJenisDindingRumah +
                    $dataJenisLantaiRumah +
                    $dataJenisSumberPeneranganUtama +
                    $dataJenisSumberAirMinum +
                    $dataFasilitasBuangAirBesar +
                    $dataJenisBahanBakar +
                    $dataKepemilikanRumah,
            );
        } elseif (!$this->dataSurveiKrs && $this->dataSurveiP3ke) {
            $updateDataPenduduk = DataPenduduk::where('id', $this->id)->update([
                'status_keluarga' => $this->status_keluarga,
                'latitude' => $this->latitude,
                'longitude' => $this->longitude,
            ]);

            $createDataSurveiKrs = DataSurveiKrs::create([
                'user_id' => Auth()->user()->id,
                'data_penduduk_id' => $this->id,
                'answer_1' => $this->answer_1,
                'answer_2' => $this->answer_2,
                'answer_3' => $this->answer_3,
                'answer_4' => $this->answer_4,
                'answer_5' => $this->answer_5,
                'answer_6' => $this->answer_6,
                'answer_7' => $this->answer_7,
                'answer_8' => $this->answer_8,
                'answer_9' => $this->answer_9,
                'answer_10' => $this->answer_10,
                'answer_11' => $this->answer_11,
                'answer_12' => $this->answer_12,
                'answer_13' => $this->answer_13,
                'answer_14' => $this->answer_14,
                'answer_15' => $this->answer_15,
                'answer_16' => $this->answer_16,
                'answer_17' => $this->answer_17,
                'answer_18' => $this->answer_18,
                'status' => 'Pending',
                'state' => 'Kelurahan',
            ]);

            $updateDataSurveiP3ke = DataSurveiP3ke::where('data_penduduk_id', $this->id)->update(
                [
                    'user_id' => Auth()->user()->id,
                    'data_penduduk_id' => $this->id,
                    'sumber_penghasilan' => $this->sumber_penghasilan,
                    'aset' => $this->aset,
                    'kondisi_atap_rumah' => $this->kondisi_atap_rumah,
                    'kondisi_dinding_rumah' => $this->kondisi_dinding_rumah,
                    'kondisi_lantai_rumah' => $this->kondisi_lantai_rumah,
                    'watt_listrik' => $this->watt_listrik,
                    'luas_rumah' => $this->luas_rumah,
                    'jumlah_orang_dirumah' => $this->jumlah_orang_dirumah,
                    'status' => 'Pending',
                    'state' => 'Kelurahan',
                ] +
                    $dataJenisPenerimaanBantuan +
                    $dataJenisAset +
                    $dataJenisAtapRumah +
                    $dataJenisDindingRumah +
                    $dataJenisLantaiRumah +
                    $dataJenisSumberPeneranganUtama +
                    $dataJenisSumberAirMinum +
                    $dataFasilitasBuangAirBesar +
                    $dataJenisBahanBakar +
                    $dataKepemilikanRumah,
            );
        } elseif ($this->dataSurveiKrs && !$this->dataSurveiP3ke) {
            $updateDataPenduduk = DataPenduduk::where('id', $this->id)->update([
                'status_keluarga' => $this->status_keluarga,
                'latitude' => $this->latitude,
                'longitude' => $this->longitude,
            ]);

            $updateDataSurveiKrs = DataSurveiKrs::where('data_penduduk_id', $this->id)->update([
                'user_id' => Auth()->user()->id,
                'data_penduduk_id' => $this->id,
                'answer_1' => $this->answer_1,
                'answer_2' => $this->answer_2,
                'answer_3' => $this->answer_3,
                'answer_4' => $this->answer_4,
                'answer_5' => $this->answer_5,
                'answer_6' => $this->answer_6,
                'answer_7' => $this->answer_7,
                'answer_8' => $this->answer_8,
                'answer_9' => $this->answer_9,
                'answer_10' => $this->answer_10,
                'answer_11' => $this->answer_11,
                'answer_12' => $this->answer_12,
                'answer_13' => $this->answer_13,
                'answer_14' => $this->answer_14,
                'answer_15' => $this->answer_15,
                'answer_16' => $this->answer_16,
                'answer_17' => $this->answer_17,
                'answer_18' => $this->answer_18,
                'status' => 'Pending',
                'state' => 'Kelurahan',
            ]);

            $createDataSurveiP3ke = DataSurveiP3ke::create(
                [
                    'user_id' => Auth()->user()->id,
                    'data_penduduk_id' => $this->id,
                    'sumber_penghasilan' => $this->sumber_penghasilan,
                    'aset' => $this->aset,
                    'kondisi_atap_rumah' => $this->kondisi_atap_rumah,
                    'kondisi_dinding_rumah' => $this->kondisi_dinding_rumah,
                    'kondisi_lantai_rumah' => $this->kondisi_lantai_rumah,
                    'watt_listrik' => $this->watt_listrik,
                    'luas_rumah' => $this->luas_rumah,
                    'jumlah_orang_dirumah' => $this->jumlah_orang_dirumah,
                    'status' => 'Pending',
                    'state' => 'Kelurahan',
                ] +
                    $dataJenisPenerimaanBantuan +
                    $dataJenisAset +
                    $dataJenisAtapRumah +
                    $dataJenisDindingRumah +
                    $dataJenisLantaiRumah +
                    $dataJenisSumberPeneranganUtama +
                    $dataJenisSumberAirMinum +
                    $dataFasilitasBuangAirBesar +
                    $dataJenisBahanBakar +
                    $dataKepemilikanRumah,
            );
        } else {
            $updateDataPenduduk = DataPenduduk::where('id', $this->id)->update([
                'status_keluarga' => $this->status_keluarga,
                'latitude' => $this->latitude,
                'longitude' => $this->longitude,
            ]);

            $createDataSurveiKrs = DataSurveiKrs::create([
                'user_id' => Auth()->user()->id,
                'data_penduduk_id' => $this->id,
                'answer_1' => $this->answer_1,
                'answer_2' => $this->answer_2,
                'answer_3' => $this->answer_3,
                'answer_4' => $this->answer_4,
                'answer_5' => $this->answer_5,
                'answer_6' => $this->answer_6,
                'answer_7' => $this->answer_7,
                'answer_8' => $this->answer_8,
                'answer_9' => $this->answer_9,
                'answer_10' => $this->answer_10,
                'answer_11' => $this->answer_11,
                'answer_12' => $this->answer_12,
                'answer_13' => $this->answer_13,
                'answer_14' => $this->answer_14,
                'answer_15' => $this->answer_15,
                'answer_16' => $this->answer_16,
                'answer_17' => $this->answer_17,
                'answer_18' => $this->answer_18,
                'status' => 'Pending',
                'state' => 'Kelurahan',
            ]);

            $createDataSurveiP3ke = DataSurveiP3ke::create(
                [
                    'user_id' => Auth()->user()->id,
                    'data_penduduk_id' => $this->id,
                    'sumber_penghasilan' => $this->sumber_penghasilan,
                    'aset' => $this->aset,
                    'kondisi_atap_rumah' => $this->kondisi_atap_rumah,
                    'kondisi_dinding_rumah' => $this->kondisi_dinding_rumah,
                    'kondisi_lantai_rumah' => $this->kondisi_lantai_rumah,
                    'kondisi_lantai_rumah' => $this->kondisi_lantai_rumah,
                    'watt_listrik' => $this->watt_listrik,
                    'luas_rumah' => $this->luas_rumah,
                    'jumlah_orang_dirumah' => $this->jumlah_orang_dirumah,
                    'status' => 'Pending',
                    'state' => 'Kelurahan',
                ] +
                    $dataJenisPenerimaanBantuan +
                    $dataJenisAset +
                    $dataJenisAtapRumah +
                    $dataJenisDindingRumah +
                    $dataJenisLantaiRumah +
                    $dataJenisSumberPeneranganUtama +
                    $dataJenisSumberAirMinum +
                    $dataFasilitasBuangAirBesar +
                    $dataJenisBahanBakar +
                    $dataKepemilikanRumah,
            );
        }


        return redirect()->route('dashboardAdminKader');
    }
}

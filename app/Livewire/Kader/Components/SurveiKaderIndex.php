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
    public $nik;
    public $nama_kepala_keluarga;
    public $nama_istri;
    public $status_keluarga;
    public $latitude;
    public $longitude;
    public $no_handphone;

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
    public $answer_19;

    public $penerimaanBantuan = [];
    public $isian_bantuan_lainnya;
    public $sumber_penghasilan;
    public $aset;
    public $jenisAset = [];
    public $atap_rumah_terluas;
    public $kondisi_atap_rumah;
    public $dinding_rumah_terluas;
    public $kondisi_dinding_rumah;
    public $lantai_rumah_terluas;
    public $kondisi_lantai_rumah;
    public $sumber_penerangan;
    public $watt_listrik;
    public $sumber_air_minum;
    public $fasilitas_buang_air_besar;
    public $luas_rumah;
    public $jumlah_orang_dirumah;
    public $bahan_bakar_utama;
    public $kepemilikan_rumah;

    public $dataSurveiKrs;
    public $dataSurveiP3ke;

    public function mount($state, $id)
    {
        $this->state = $state;
        $this->id = $id;

        $dataPenduduk = DataPenduduk::find($this->id);
        $this->nik = $dataPenduduk->nik;
        $this->nama_kepala_keluarga = $dataPenduduk->nama_kepala_keluarga;
        $this->nama_istri = $dataPenduduk->nama_istri;
        $this->status_keluarga = $dataPenduduk->status_keluarga;
        $this->latitude = $dataPenduduk->latitude;
        $this->longitude = $dataPenduduk->longitude;
        $this->no_handphone = $dataPenduduk->no_handphone;

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
            $this->answer_19 = $this->dataSurveiKrs->answer_19;
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
            $this->answer_19 = '';
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
                'bantuan_lainnya' => $this->dataSurveiP3ke->bantuan_lainnya === '2' ? '-' : true,
            ];
            $this->isian_bantuan_lainnya = $this->dataSurveiP3ke->isian_bantuan_lainnya;

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

            $this->atap_rumah_terluas = $this->dataSurveiP3ke->atap_rumah_terluas;
            $this->kondisi_atap_rumah = $this->dataSurveiP3ke->kondisi_atap_rumah;
            $this->dinding_rumah_terluas = $this->dataSurveiP3ke->dinding_rumah_terluas;
            $this->kondisi_dinding_rumah = $this->dataSurveiP3ke->kondisi_dinding_rumah;
            $this->lantai_rumah_terluas = $this->dataSurveiP3ke->lantai_rumah_terluas;
            $this->kondisi_lantai_rumah = $this->dataSurveiP3ke->kondisi_lantai_rumah;
            $this->sumber_penerangan = $this->dataSurveiP3ke->sumber_penerangan;
            $this->watt_listrik = $this->dataSurveiP3ke->watt_listrik;
            $this->sumber_air_minum = $this->dataSurveiP3ke->sumber_air_minum;
            $this->fasilitas_buang_air_besar = $this->dataSurveiP3ke->fasilitas_buang_air_besar;
            $this->luas_rumah = $this->dataSurveiP3ke->luas_rumah;
            $this->jumlah_orang_dirumah = $this->dataSurveiP3ke->jumlah_orang_dirumah;
            $this->bahan_bakar_utama = $this->dataSurveiP3ke->bahan_bakar_utama;
            $this->kepemilikan_rumah = $this->dataSurveiP3ke->kepemilikan_rumah;
        } else {
            $this->penerimaanBantuan = [
                'bpnt' => '2',
                'bpum' => '2',
                'bst' => '2',
                'pkh' => '2',
                'sembako' => '2',
                'pra_kerja' => '2',
                'kur' => '2',
                'bantuan_lainnya' => '2',
            ];

            $this->isian_bantuan_lainnya = '';

            $this->sumber_penghasilan = '';
            $this->aset = '';

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

            $this->atap_rumah_terluas = '';
            $this->kondisi_atap_rumah = '';
            $this->dinding_rumah_terluas = '';
            $this->kondisi_dinding_rumah = '';
            $this->lantai_rumah_terluas = '';
            $this->kondisi_lantai_rumah = '';
            $this->sumber_penerangan = '';
            $this->watt_listrik = '';
            $this->sumber_air_minum = '';
            $this->fasilitas_buang_air_besar = '';
            $this->luas_rumah = '';
            $this->jumlah_orang_dirumah = '';
            $this->bahan_bakar_utama = '';
            $this->kepemilikan_rumah = '';
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
                'nik' => 'required',
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
                'answer_19' => 'required',
            ],
            [
                'nik' => 'Harus diisi.',
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
                'answer_19.required' => 'Harus diisi.',
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
            'bantuan_lainnya' => $this->penerimaanBantuan['bantuan_lainnya'] === true ? 1 : 2,
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

        if ($this->dataSurveiKrs && $this->dataSurveiP3ke) {
            $updateDataPenduduk = DataPenduduk::where('id', $this->id)->update([
                'status_keluarga' => $this->status_keluarga,
                'latitude' => $this->latitude,
                'longitude' => $this->longitude,
                'no_handphone' => $this->no_handphone,
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
                'answer_19' => $this->answer_19,
                'status' => 'Pending',
                'state' => 'Kelurahan',
            ]);

            $updateDataSurveiP3ke = DataSurveiP3ke::where('data_penduduk_id', $this->id)->update(
                [
                    'user_id' => Auth()->user()->id,
                    'data_penduduk_id' => $this->id,
                    'isian_bantuan_lainnya' => $this->isian_bantuan_lainnya,
                    'sumber_penghasilan' => $this->sumber_penghasilan,
                    'aset' => $this->aset,
                    'atap_rumah_terluas' => $this->atap_rumah_terluas,
                    'kondisi_atap_rumah' => $this->kondisi_atap_rumah,
                    'dinding_rumah_terluas' => $this->dinding_rumah_terluas,
                    'kondisi_dinding_rumah' => $this->kondisi_dinding_rumah,
                    'lantai_rumah_terluas' => $this->lantai_rumah_terluas,
                    'kondisi_lantai_rumah' => $this->kondisi_lantai_rumah,
                    'sumber_penerangan' => $this->sumber_penerangan,
                    'watt_listrik' => $this->watt_listrik,
                    'sumber_air_minum' => $this->sumber_air_minum,
                    'fasilitas_buang_air_besar' => $this->fasilitas_buang_air_besar,
                    'luas_rumah' => $this->luas_rumah,
                    'jumlah_orang_dirumah' => $this->jumlah_orang_dirumah,
                    'bahan_bakar_utama' => $this->bahan_bakar_utama,
                    'kepemilikan_rumah' => $this->kepemilikan_rumah,
                    'status' => 'Pending',
                    'state' => 'Kelurahan',
                ] +
                    $dataJenisPenerimaanBantuan +
                    $dataJenisAset,
            );
        } elseif (!$this->dataSurveiKrs && $this->dataSurveiP3ke) {
            $updateDataPenduduk = DataPenduduk::where('id', $this->id)->update([
                'status_keluarga' => $this->status_keluarga,
                'latitude' => $this->latitude,
                'longitude' => $this->longitude,
                'no_handphone' => $this->no_handphone,
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
                'answer_19' => $this->answer_19,
                'status' => 'Pending',
                'state' => 'Kelurahan',
            ]);

            $updateDataSurveiP3ke = DataSurveiP3ke::where('data_penduduk_id', $this->id)->update(
                [
                    'user_id' => Auth()->user()->id,
                    'data_penduduk_id' => $this->id,
                    'isian_bantuan_lainnya' => $this->isian_bantuan_lainnya,
                    'sumber_penghasilan' => $this->sumber_penghasilan,
                    'aset' => $this->aset,
                    'atap_rumah_terluas' => $this->atap_rumah_terluas,
                    'kondisi_atap_rumah' => $this->kondisi_atap_rumah,
                    'dinding_rumah_terluas' => $this->dinding_rumah_terluas,
                    'kondisi_dinding_rumah' => $this->kondisi_dinding_rumah,
                    'lantai_rumah_terluas' => $this->lantai_rumah_terluas,
                    'kondisi_lantai_rumah' => $this->kondisi_lantai_rumah,
                    'sumber_penerangan' => $this->sumber_penerangan,
                    'watt_listrik' => $this->watt_listrik,
                    'sumber_air_minum' => $this->sumber_air_minum,
                    'fasilitas_buang_air_besar' => $this->fasilitas_buang_air_besar,
                    'luas_rumah' => $this->luas_rumah,
                    'jumlah_orang_dirumah' => $this->jumlah_orang_dirumah,
                    'bahan_bakar_utama' => $this->bahan_bakar_utama,
                    'kepemilikan_rumah' => $this->kepemilikan_rumah,
                    'status' => 'Pending',
                    'state' => 'Kelurahan',
                ] +
                    $dataJenisPenerimaanBantuan +
                    $dataJenisAset,
            );
        } elseif ($this->dataSurveiKrs && !$this->dataSurveiP3ke) {
            $updateDataPenduduk = DataPenduduk::where('id', $this->id)->update([
                'status_keluarga' => $this->status_keluarga,
                'latitude' => $this->latitude,
                'longitude' => $this->longitude,
                'no_handphone' => $this->no_handphone,
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
                'answer_19' => $this->answer_19,
                'status' => 'Pending',
                'state' => 'Kelurahan',
            ]);

            $createDataSurveiP3ke = DataSurveiP3ke::create(
                [
                    'user_id' => Auth()->user()->id,
                    'data_penduduk_id' => $this->id,
                    'isian_bantuan_lainnya' => $this->isian_bantuan_lainnya,
                    'sumber_penghasilan' => $this->sumber_penghasilan,
                    'aset' => $this->aset,
                    'atap_rumah_terluas' => $this->atap_rumah_terluas,
                    'kondisi_atap_rumah' => $this->kondisi_atap_rumah,
                    'dinding_rumah_terluas' => $this->dinding_rumah_terluas,
                    'kondisi_dinding_rumah' => $this->kondisi_dinding_rumah,
                    'lantai_rumah_terluas' => $this->lantai_rumah_terluas,
                    'kondisi_lantai_rumah' => $this->kondisi_lantai_rumah,
                    'sumber_penerangan' => $this->sumber_penerangan,
                    'watt_listrik' => $this->watt_listrik,
                    'sumber_air_minum' => $this->sumber_air_minum,
                    'fasilitas_buang_air_besar' => $this->fasilitas_buang_air_besar,
                    'luas_rumah' => $this->luas_rumah,
                    'jumlah_orang_dirumah' => $this->jumlah_orang_dirumah,
                    'bahan_bakar_utama' => $this->bahan_bakar_utama,
                    'kepemilikan_rumah' => $this->kepemilikan_rumah,
                    'status' => 'Pending',
                    'state' => 'Kelurahan',
                ] +
                    $dataJenisPenerimaanBantuan +
                    $dataJenisAset,
            );
        } else {
            $updateDataPenduduk = DataPenduduk::where('id', $this->id)->update([
                'status_keluarga' => $this->status_keluarga,
                'latitude' => $this->latitude,
                'longitude' => $this->longitude,
                'no_handphone' => $this->no_handphone,
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
                'answer_19' => $this->answer_19,
                'status' => 'Pending',
                'state' => 'Kelurahan',
            ]);

            $createDataSurveiP3ke = DataSurveiP3ke::create(
                [
                    'user_id' => Auth()->user()->id,
                    'data_penduduk_id' => $this->id,
                    'isian_bantuan_lainnya' => $this->isian_bantuan_lainnya,
                    'sumber_penghasilan' => $this->sumber_penghasilan,
                    'aset' => $this->aset,
                    'atap_rumah_terluas' => $this->atap_rumah_terluas,
                    'kondisi_atap_rumah' => $this->kondisi_atap_rumah,
                    'dinding_rumah_terluas' => $this->dinding_rumah_terluas,
                    'kondisi_dinding_rumah' => $this->kondisi_dinding_rumah,
                    'lantai_rumah_terluas' => $this->lantai_rumah_terluas,
                    'kondisi_lantai_rumah' => $this->kondisi_lantai_rumah,
                    'sumber_penerangan' => $this->sumber_penerangan,
                    'watt_listrik' => $this->watt_listrik,
                    'sumber_air_minum' => $this->sumber_air_minum,
                    'fasilitas_buang_air_besar' => $this->fasilitas_buang_air_besar,
                    'luas_rumah' => $this->luas_rumah,
                    'jumlah_orang_dirumah' => $this->jumlah_orang_dirumah,
                    'bahan_bakar_utama' => $this->bahan_bakar_utama,
                    'kepemilikan_rumah' => $this->kepemilikan_rumah,
                    'status' => 'Pending',
                    'state' => 'Kelurahan',
                ] +
                    $dataJenisPenerimaanBantuan +
                    $dataJenisAset,
            );
        }


        return redirect()->route('dashboardAdminKader');
    }
}

<?php

namespace App\Livewire\Kota\Components;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\DataSurveiKrs;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ModalDetailSurveiP3keIndex extends Component
{
    public $data;
    public $nomorKeluargaIndonesia;
    public $namaKepalaKeluarga;
    public $namaIstri;
    public $statusKeluarga;
    public $kecamatan;
    public $kelurahan;
    public $rw;
    public $rt;
    public $latitude;
    public $longitude;
    public $userSurvei;
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

    public function render()
    {
        return view('livewire.kota.components.modal-detail-survei-p3ke-index');
    }

    #[On('details')]
    public function edit($id)
    {
        $data = DataSurveiKrs::with('dataPenduduk', 'user')->find($id);
        $this->nomorKeluargaIndonesia = $data->dataPenduduk->nomor_keluarga_indonesia;
        $this->namaKepalaKeluarga = $data->dataPenduduk->nama_kepala_keluarga;
        $this->namaIstri = $data->dataPenduduk->nama_istri;
        $this->statusKeluarga = $data->dataPenduduk->status_keluarga;
        $this->kecamatan = $data->dataPenduduk->kecamatan;
        $this->kelurahan = $data->dataPenduduk->kelurahan;
        $this->rw = $data->dataPenduduk->rw;
        $this->rt = $data->dataPenduduk->rt;
        $this->latitude = $data->dataPenduduk->latitude;
        $this->longitude = $data->dataPenduduk->longitude;
        $this->userSurvei = $data->user->nama ?? '-';
        $this->answer_1 = $data->answer_1;
        $this->answer_2 = $data->answer_2;
        $this->answer_3 = $data->answer_3;
        $this->answer_4 = $data->answer_4;
        $this->answer_5 = $data->answer_5;
        $this->answer_6 = $data->answer_6;
        $this->answer_7 = $data->answer_7;
        $this->answer_8 = $data->answer_8;
        $this->answer_9 = $data->answer_9;
        $this->answer_10 = $data->answer_10;
        $this->answer_11 = $data->answer_11;
        $this->answer_12 = $data->answer_12;
        $this->answer_13 = $data->answer_13;
        $this->answer_14 = $data->answer_14;
    }

}

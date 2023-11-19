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

    #[Rule('required', message: 'Status Keluarga harus diisi.')]
    public $status_keluarga;

    public function mount($state, $id)
    {
        $this->state = $state;
        $this->id = $id;

        $dataPenduduk = DataPenduduk::find($this->id);
        $this->nomor_keluarga_indonesia = $dataPenduduk->nomor_keluarga_indonesia;
        $this->nama_kepala_keluarga = $dataPenduduk->nama_kepala_keluarga;
        $this->nama_istri = $dataPenduduk->nama_istri;
        $this->status_keluarga = $dataPenduduk->status_keluarga;

        $dataSurveiKrs = DataSurveiKrs::where('data_penduduk_id', $dataPenduduk->id)->first();

        if (isset($dataSurveiKrs)) {
            $this->answer_1 = $dataSurveiKrs->answer_1;
            $this->answer_2 = $dataSurveiKrs->answer_2;
            $this->answer_3 = $dataSurveiKrs->answer_3;
            $this->answer_4 = $dataSurveiKrs->answer_4;
            $this->answer_5 = $dataSurveiKrs->answer_5;
            $this->answer_6 = $dataSurveiKrs->answer_6;
            $this->answer_7 = $dataSurveiKrs->answer_7;
            $this->answer_8 = $dataSurveiKrs->answer_8;
            $this->answer_9 = $dataSurveiKrs->answer_9;
            $this->answer_10 = $dataSurveiKrs->answer_10;
            $this->answer_11 = $dataSurveiKrs->answer_11;
            $this->answer_12 = $dataSurveiKrs->answer_12;
            $this->answer_13 = $dataSurveiKrs->answer_13;
            $this->answer_14 = $dataSurveiKrs->answer_14;
            $this->answer_15 = $dataSurveiKrs->answer_15;
            $this->answer_16 = $dataSurveiKrs->answer_16;
            $this->answer_17 = $dataSurveiKrs->answer_17;
            $this->answer_18 = $dataSurveiKrs->answer_18;
        }
    }

    public function render()
    {
        return view('livewire.kader.components.survei-kader-index');
    }

    public function save()
    {

        // $this->validate(
        //     [
        //         'answer_1' => 'required',
        //         'answer_2' => 'required',
        //         'answer_3' => 'required',
        //         'answer_4' => 'required',
        //         'answer_5' => 'required',
        //         'answer_6' => 'required',
        //         'answer_7' => 'required',
        //         'answer_8' => 'required',
        //         'answer_9' => 'required',
        //         'answer_10' => 'required',
        //         'answer_11' => 'required',
        //         'answer_12' => 'required',
        //         'answer_13' => 'required',
        //         'answer_14' => 'required',
        //         'answer_15' => 'required',
        //         'answer_16' => 'required',
        //         'answer_17' => 'required',
        //         'answer_18' => 'required',
        //     ],
        //     [
        //         'answer_1.required' => 'Harus diisi.',
        //         'answer_2.required' => 'Harus diisi.',
        //         'answer_3.required' => 'Harus diisi.',
        //         'answer_4.required' => 'Harus diisi.',
        //         'answer_5.required' => 'Harus diisi.',
        //         'answer_6.required' => 'Harus diisi.',
        //         'answer_7.required' => 'Harus diisi.',
        //         'answer_8.required' => 'Harus diisi.',
        //         'answer_9.required' => 'Harus diisi.',
        //         'answer_10.required' => 'Harus diisi.',
        //         'answer_11.required' => 'Harus diisi.',
        //         'answer_12.required' => 'Harus diisi.',
        //         'answer_13.required' => 'Harus diisi.',
        //         'answer_14.required' => 'Harus diisi.',
        //         'answer_15.required' => 'Harus diisi.',
        //         'answer_16.required' => 'Harus diisi.',
        //         'answer_17.required' => 'Harus diisi.',
        //         'answer_18.required' => 'Harus diisi.',
        //     ],
        // );



        $dataPenerimaanBantuan = array_fill_keys($this->penerimaanBantuan, 1);

        // Insert data into DataSurveiP3ke model
        DataSurveiP3ke::create([
            'user_id' => Auth()->user()->id,
            'data_penduduk_id' => $this->id,
            'sumber_penghasilan' => $this->sumber_penghasilan,
        ] + $dataPenerimaanBantuan);
    }
}

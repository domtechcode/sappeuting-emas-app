<?php

namespace App\Livewire\Includes;

use Livewire\Component;
use App\Models\DataPenduduk;
use App\Models\DataSurveiKrs;
use App\Models\DataSurveiP3ke;

class Statistik extends Component
{
    public $dataValidasiKrs;
    public $dataValidasiP3ke;
    public $dataNonValidasiKrs;
    public $dataNonValidasiP3ke;

    public function mount()
    {
        $this->dataValidasiKrs = DataSurveiKrs::where('user_id', Auth()->user()->id)->where('status', 'Tervalidasi')->where('state', 'Kota')->count();
        $this->dataValidasiP3ke = DataSurveiP3ke::where('user_id', Auth()->user()->id)->where('status', 'Tervalidasi')->where('state', 'Kota')->count();
        $this->dataNonValidasiKrs = DataSurveiKrs::where('user_id', Auth()->user()->id)->where('status', 'Tervalidasi')->where('state', '!=', 'Kota')->count();
        $this->dataNonValidasiP3ke = DataSurveiP3ke::where('user_id', Auth()->user()->id)->where('status', 'Tervalidasi')->where('state', '!=', 'Kota')->count();
    }

    public function render()
    {
        return view('livewire.includes.statistik');
    }
}

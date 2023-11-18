<?php

namespace App\Livewire\Includes;

use Livewire\Component;
use App\Models\DataPenduduk;
use App\Models\DataSurveiKrs;

class Statistik extends Component
{
    public $dataAll;
    public $dataValidasi;
    public $dataNonValidasi;

    public function mount()
    {
        $this->dataAll = DataPenduduk::count();
        $this->dataValidasi = DataSurveiKrs::where('status', 'Tervalidasi')->where('state', 'Kota')->count();
        $this->dataNonValidasi = $this->dataAll - $this->dataValidasi;
    }

    public function render()
    {
        return view('livewire.includes.statistik');
    }
}

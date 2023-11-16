<?php

namespace App\Livewire\Kader\Components;

use App\Models\User;
use Livewire\Component;
use App\Models\DataSurvei;
use App\Models\DataPenduduk;
use Livewire\Attributes\Title;

#[Title('Dashboard - DP3AP2KB Kota Cimahi')]
class DashboardKaderIndex extends Component
{
    public $dataAll;
    public $dataValidasi;
    public $dataNonValidasi;

    public function mount()
    {
        $this->dataAll = DataPenduduk::count();
        $this->dataValidasi = DataSurvei::where('status', 'Tervalidasi')->where('state', 'Kota')->count();
        $this->dataNonValidasi = $this->dataAll - $this->dataValidasi;
    }

    public function render()
    {
        return view('livewire.kader.components.dashboard-kader-index');
    }

    public function searchSurvei()
    {

    }
}

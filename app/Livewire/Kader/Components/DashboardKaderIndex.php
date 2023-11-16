<?php

namespace App\Livewire\Kader\Components;

use App\Models\User;
use Livewire\Component;
use App\Models\Pertanyaan;

class DashboardKaderIndex extends Component
{
    public $pertanyaan;

    public function mount()
    {
        $this->pertanyaan = Pertanyaan::all();
    }

    public function render()
    {
        return view('livewire.kader.components.dashboard-kader-index');
    }
}

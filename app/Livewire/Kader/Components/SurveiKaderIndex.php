<?php

namespace App\Livewire\Kader\Components;

use Livewire\Component;
use App\Models\DataPenduduk;
use Livewire\Attributes\Rule;

class SurveiKaderIndex extends Component
{
    public $state;
    public $id;
    public $nomor_keluarga_indonesia;
    public $nama_kepala_keluarga;
    public $nama_istri;

    public $latitude;
    public $longitude;

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
    }

    public function render()
    {
        return view('livewire.kader.components.survei-kader-index');
    }

    public function save()
    {
        $this->validate();
    }

}

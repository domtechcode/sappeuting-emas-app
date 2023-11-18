<?php

namespace App\Livewire\Kota\Components;

use App\Models\Rt;
use App\Models\Rw;
use Livewire\Component;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\DataPenduduk;
use Livewire\WithPagination;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\DataPendudukExport;

#[Title('Database Penduduk - DP3AP2KB Kota Cimahi')]
class DatabasePendudukIndex extends Component
{
    use WithPagination;

    #[Url(history:true)]
    public $search = '';

    #[Url(history:true)]
    public $sortBy = 'created_at';

    #[Url(history:true)]
    public $sortDir = 'ASC';

    #[Url()]
    public $perpage = 10;

    #[Rule('required', message: 'Kecamatan harus diisi.')]
    public $kecamatan;

    #[Rule('required', message: 'Kelurahan harus diisi.')]
    public $kelurahan;

    #[Rule('required', message: 'RW harus diisi.')]
    public $rw;

    #[Rule('required', message: 'RT harus diisi.')]
    public $rt;

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function setSortBy($sortByField)
    {
        if($this->sortBy === $sortByField){
            $this->sortDir = ($this->sortDir == "ASC") ? "DESC" : "ASC";
            return;
        }

        $this->sortBy = $sortByField;
        $this->sortDir = "DESC";
    }

    public function render()
    {
        return view('livewire.kota.components.database-penduduk-index', [
            'dataKecamatan' => Kecamatan::all(),
            'dataKelurahan' => Kelurahan::all(),
            'dataRw' => Rw::all(),
            'dataRt' => Rt::all(),
            'dataPenduduk' => DataPenduduk::search($this->search)
                ->orderBy($this->sortBy, $this->sortDir)
                ->paginate($this->perpage),
        ]);
    }

    public function exportFile()
    {
        $this->validate();

        return Excel::download(new DataPendudukExport($this->kecamatan, $this->kelurahan, $this->rw, $this->rt), 'penduduk_survei.xlsx');
    }
}

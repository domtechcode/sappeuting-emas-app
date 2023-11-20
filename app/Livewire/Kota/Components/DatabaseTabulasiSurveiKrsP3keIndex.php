<?php

namespace App\Livewire\Kota\Components;

use App\Models\Rt;
use App\Models\Rw;
use Livewire\Component;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use Livewire\Attributes\On;
use App\Models\DataPenduduk;
use Livewire\WithPagination;
use App\Models\DataSurveiKrs;
use Livewire\Attributes\Rule;
use App\Models\DataSurveiP3ke;

class DatabaseTabulasiSurveiKrsP3keIndex extends Component
{
    use WithPagination;

    #[Url(history: true)]
    public $search = '';

    #[Url(history: true)]
    public $sortBy = 'created_at';

    #[Url(history: true)]
    public $sortDir = 'ASC';

    #[Url]
    public $perpage = 10;

    #[Rule('required', message: 'Kecamatan harus diisi.')]
    public $kecamatan;

    #[Rule('required', message: 'Kelurahan harus diisi.')]
    public $kelurahan;

    #[Rule('required', message: 'RW harus diisi.')]
    public $rw;

    #[Rule('required', message: 'RT harus diisi.')]
    public $rt;

    #[On('closeModalAndReset')]
    public function closeModalAndReset()
    {
        $this->resetPage();
        session()->flash('successSurveiTabulasi', 'Data Penduduk berhasil disimpan.');
    }

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function setSortBy($sortByField)
    {
        if ($this->sortBy === $sortByField) {
            $this->sortDir = $this->sortDir == 'ASC' ? 'DESC' : 'ASC';
            return;
        }

        $this->sortBy = $sortByField;
        $this->sortDir = 'DESC';
    }

    public function render()
    {
        $idDataSurveiKrs = DataSurveiKrs::pluck('data_penduduk_id')->toArray();
        $idDataSurveiP3ke = DataSurveiP3ke::pluck('data_penduduk_id')->toArray();

        $commonIds = array_intersect($idDataSurveiKrs, $idDataSurveiP3ke);

        $uniqueIds = array_unique($commonIds);

        $dataPendudukQuery = DataPenduduk::whereIn('id', $uniqueIds);

        if (!empty($this->kecamatan)) {
            $dataPendudukQuery->where('kecamatan', $this->kecamatan);
        }

        if (!empty($this->kelurahan)) {
            $dataPendudukQuery->where('kelurahan', $this->kelurahan);
        }

        if (!empty($this->rt)) {
            $dataPendudukQuery->where('rt', $this->rt);
        }

        if (!empty($this->rw)) {
            $dataPendudukQuery->where('rw', $this->rw);
        }

        return view('livewire.kota.components.database-tabulasi-survei-krs-p3ke-index', [
            'dataKecamatan' => Kecamatan::all(),
            'dataKelurahan' => Kelurahan::all(),
            'dataRw' => Rw::all(),
            'dataRt' => Rt::all(),
            'dataPenduduk' => $dataPendudukQuery
                ->search($this->search)
                ->orderBy($this->sortBy, $this->sortDir)
                ->paginate($this->perpage),
        ]);
    }
}

<?php

namespace App\Livewire\Kota\Components;

use App\Models\Rt;
use App\Models\Rw;
use Livewire\Component;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use App\Models\DataSurveiKrs;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use App\Exports\DataSurveiKrsExport;
use Maatwebsite\Excel\Facades\Excel;

#[Title('Database Tabulasi - DP3AP2KB Kota Cimahi')]
class DatabaseSurveiKrsKotaIndex extends Component
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
        session()->flash('successSurveiKrs', 'Data Penduduk berhasil disimpan.');
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

    public function mount()
    {
        $this->setSortBy('data_survei_krs.created_at');
    }

    public function render()
    {
        return view('livewire.kota.components.database-survei-krs-kota-index', [
            'dataKecamatan' => Kecamatan::all(),
            'dataKelurahan' => Kelurahan::all(),
            'dataRw' => Rw::all(),
            'dataRt' => Rt::all(),
            'dataSurveiKrs' => DataSurveiKrs::with('dataPenduduk')
                ->searchKRS($this->kecamatan, $this->kelurahan, $this->rw, $this->rt)
                ->orderBy($this->sortBy, $this->sortDir)
                ->join('data_penduduks', 'data_survei_krs.data_penduduk_id', '=', 'data_penduduks.id')
                ->select('data_survei_krs.*')
                ->paginate($this->perpage),
        ]);
    }

    public function exportDataSurveiKrs()
    {
        $kecamatan = $this->kecamatan;
        $kelurahan = $this->kelurahan;
        $rw = $this->rw;
        $rt = $this->rt;

        return Excel::download(new DataSurveiKrsExport($kecamatan, $kelurahan, $rw, $rt), 'data_survei_krs.xlsx');
    }


}

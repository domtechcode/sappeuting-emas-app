<?php

namespace App\Livewire\Kader\Components;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\DataSurveiKrs;
use App\Models\DataSurveiP3ke;
use Livewire\Attributes\Title;

#[Title('Database Survei P3KE - DP3AP2KB Kota Cimahi')]
class DatabaseSurveiP3keKaderIndex extends Component
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
        $this->setSortBy('data_survei_p3kes.created_at');
    }

    public function render()
    {
        return view('livewire.kader.components.database-survei-p3ke-kader-index',[
            'dataSurveiP3ke' => DataSurveiP3ke::where('user_id', Auth()->user()->id)->with('dataPenduduk')
                ->search($this->search)
                ->paginate($this->perpage),
        ]);
    }
}

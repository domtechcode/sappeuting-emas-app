<?php

namespace App\Livewire\Kader\Components;

use App\Models\Rt;
use App\Models\Rw;
use App\Models\User;
use Livewire\Component;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\DataPenduduk;
use App\Models\DataSurveiKrs;
use Livewire\Attributes\Rule;
use App\Models\DataSurveiP3ke;
use Livewire\Attributes\Title;

#[Title('Dashboard - DP3AP2KB Kota Cimahi')]
class DashboardKaderIndex extends Component
{
    public $nik_search;

    #[Rule('required', message: 'Nomor Keluarga Indonesia harus diisi.')]
    public $nik;

    #[Rule('required', message: 'Nama Kepala Keluarga harus diisi.')]
    public $nama_kepala_keluarga;

    #[Rule('required', message: 'Nama Istri harus diisi.')]
    public $nama_istri;

    #[Rule('required', message: 'Status Keluarga harus diisi.')]
    public $status_keluarga;

    #[Rule('required', message: 'Kecamatan harus diisi.')]
    public $kecamatan;

    #[Rule('required', message: 'Kelurahan harus diisi.')]
    public $kelurahan;

    #[Rule('required', message: 'RW harus diisi.')]
    public $rw;

    #[Rule('required', message: 'RT harus diisi.')]
    public $rt;

    public $data;
    public $dataSurveiKrs;
    public $dataSurveiP3ke;
    public $showSecondForm = false;

    public function render()
    {
        return view('livewire.kader.components.dashboard-kader-index',[
            'dataKecamatan' => Kecamatan::all(),
            'dataKelurahan' => Kelurahan::all(),
            'dataRw' => Rw::all(),
            'dataRt' => Rt::all(),
        ]);
    }

    public function searchSurvei()
    {
        $this->validate([
            'nik_search' => 'required',
        ], [
            'nik_search.required' => 'Nomor Keluarga Indonesia harus diisi.',
        ]);

        $this->data = DataPenduduk::where('nik', $this->nik_search)->first();
        $this->dataSurveiKrs = DataSurveiKrs::where('data_penduduk_id', $this->data)->first();
        $this->dataSurveiP3ke = DataSurveiP3ke::where('data_penduduk_id', $this->data)->first();

        if ($this->data) {
            $this->showSecondForm = false;

            if ($this->dataSurveiKrs && $this->dataSurveiP3ke) {
                $state = 'krs+p3ke';
            } elseif (!$this->dataSurveiKrs && $this->dataSurveiP3ke) {
                $state = 'krs+p3ke';
            } elseif ($this->dataSurveiKrs && !$this->dataSurveiP3ke) {
                $state = 'krs';
            } else {
                $state = 'krscreate+p3kecreate';
            }

            return redirect()->route('surveiKader', ['state' => $state, 'id' => $this->data->id]);
        } else {
            // $this->showSecondForm = true;
            // $this->nik = $this->nik_search;
            session()->flash('error', 'Data tidak ada mohon untuk mengisi data keluarga.');
        }
    }

    public function newSurvei()
    {
        $this->validate();

        $dataPenduduk = DataPenduduk::create([
            'nik' => $this->nik,
            'nama_kepala_keluarga' => $this->nama_kepala_keluarga,
            'nama_istri' => $this->nama_istri,
            'status_keluarga' => $this->status_keluarga,
            'kecamatan' => $this->kecamatan,
            'kelurahan' => $this->kelurahan,
            'rw' => $this->rw,
            'rt' => $this->rt,
        ]);

        return redirect()->route('surveiKader', ['state' => 'krscreate+p3kecreate', 'id' => $dataPenduduk->id]);


    }
}

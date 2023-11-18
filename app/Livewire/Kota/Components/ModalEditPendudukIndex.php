<?php

namespace App\Livewire\Kota\Components;

use App\Models\Rt;
use App\Models\Rw;
use Livewire\Component;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use Livewire\Attributes\On;
use App\Models\DataPenduduk;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ModalEditPendudukIndex extends Component
{
    public $data;

    #[Rule('required', message: 'Nama harus diisi.')]
    public $nomor_keluarga_indonesiaEdit;

    #[Rule('required', message: 'Role harus diisi.')]
    public $nama_kepala_keluargaEdit;

    #[Rule('required', message: 'Username harus diisi.')]
    public $nama_istriEdit;

    #[Rule('required', message: 'Password harus diisi.')]
    public $status_keluargaEdit;

    #[Rule('required', message: 'Kecamatan harus diisi.')]
    public $kecamatanEdit;

    #[Rule('required', message: 'Kelurahan harus diisi.')]
    public $kelurahanEdit;

    #[Rule('required', message: 'RW harus diisi.')]
    public $rwEdit;

    #[Rule('required', message: 'RT harus diisi.')]
    public $rtEdit;

    public function render()
    {
        return view('livewire.kota.components.modal-edit-penduduk-index',[
            'dataEditKecamatan' => Kecamatan::all(),
            'dataEditKelurahan' => Kelurahan::all(),
            'dataEditRw' => Rw::all(),
            'dataEditRt' => Rt::all(),
        ]);
    }

    #[On('edit')]
    public function edit($id)
    {
        $this->data = DataPenduduk::find($id);
        $this->nomor_keluarga_indonesiaEdit = $this->data->nomor_keluarga_indonesia;
        $this->nama_kepala_keluargaEdit = $this->data->nama_kepala_keluarga;
        $this->nama_istriEdit = $this->data->nama_istri;
        $this->status_keluargaEdit = $this->data->status_keluarga;
        $this->kecamatanEdit = $this->data->kecamatan;
        $this->kelurahanEdit = $this->data->kelurahan;
        $this->rwEdit = $this->data->rw;
        $this->rtEdit = $this->data->rt;
    }

    public function update()
    {

        $this->validate();

        try {
            DB::beginTransaction();

            $user =  DataPenduduk::find($this->data->id);
            $user->nomor_keluarga_indonesia = $this->nomor_keluarga_indonesiaEdit;
            $user->nama_kepala_keluarga = $this->nama_kepala_keluargaEdit;
            $user->nama_istri = $this->nama_istriEdit;
            $user->status_keluarga = $this->status_keluargaEdit;
            $user->kecamatan = $this->kecamatanEdit;
            $user->kelurahan = $this->kelurahanEdit;
            $user->rw = $this->rwEdit;
            $user->rt = $this->rtEdit;
            $user->save();

            DB::commit();
            $this->dispatch('closeModalAndReset');
        } catch (\Throwable $th) {
            DB::rollBack();

            session()->flash('error', 'Terjadi kesalahan saat menyimpan data user.');
        }
    }
}

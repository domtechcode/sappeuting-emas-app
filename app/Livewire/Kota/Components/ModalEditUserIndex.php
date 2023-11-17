<?php

namespace App\Livewire\Kota\Components;

use App\Models\Rt;
use App\Models\Rw;
use App\Models\User;
use Livewire\Component;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ModalEditUserIndex extends Component
{
    public $data;

    #[Rule('required', message: 'Nama harus diisi.')]
    public $namaEdit;

    #[Rule('required', message: 'Role harus diisi.')]
    public $roleEdit;

    #[Rule('required', message: 'Username harus diisi.')]
    public $usernameEdit;

    #[Rule('required', message: 'Password harus diisi.')]
    public $passwordEdit;

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
        return view('livewire.kota.components.modal-edit-user-index',[
            'dataEditKecamatan' => Kecamatan::all(),
            'dataEditKelurahan' => Kelurahan::all(),
            'dataEditRw' => Rw::all(),
            'dataEditRt' => Rt::all(),
        ]);
    }

    #[On('edit')]
    public function edit($id)
    {
        $this->data = User::find($id);
        $this->namaEdit = $this->data->nama;
        $this->roleEdit = $this->data->role;
        $this->usernameEdit = $this->data->username;
        $this->passwordEdit = '';
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

            $user =  User::find($this->data->id);
            $user->nama = $this->namaEdit;
            $user->role = $this->roleEdit;
            $user->username = $this->usernameEdit;
            $user->password = Hash::make($this->passwordEdit);
            $user->kecamatan = $this->kecamatanEdit;
            $user->kelurahan = $this->kelurahanEdit;
            $user->rw = $this->rwEdit;
            $user->rt = $this->rtEdit;
            $user->save();

            DB::commit();
            session()->flash('success', 'Data user berhasil disimpan.');
            $this->dispatch('closeModal');
        } catch (\Throwable $th) {
            DB::rollBack();

            session()->flash('error', 'Terjadi kesalahan saat menyimpan data user.');
        }
    }
}

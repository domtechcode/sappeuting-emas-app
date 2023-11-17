<?php

namespace App\Livewire\Kota\Components;

use App\Models\Rt;
use App\Models\Rw;
use App\Models\User;
use Livewire\Component;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

#[Title('User Managements - DP3AP2KB Kota Cimahi')]
class UserManagementsIndex extends Component
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

    #[Rule('required', message: 'Nama harus diisi.')]
    public $nama;

    #[Rule('required', message: 'Role harus diisi.')]
    public $role;

    #[Rule('required|unique:users', message: 'Username harus diisi.')]
    public $username;

    #[Rule('required', message: 'Password harus diisi.')]
    public $password;

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
    }

    public function updatedSearch(){
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
        return view('livewire.kota.components.user-managements-index', [
            'dataKecamatan' => Kecamatan::all(),
            'dataKelurahan' => Kelurahan::all(),
            'dataRw' => Rw::all(),
            'dataRt' => Rt::all(),
            'dataUser' => User::search($this->search)
                ->orderBy($this->sortBy, $this->sortDir)
                ->paginate($this->perpage),
        ]);
    }

    public function save()
    {
        $this->validate();

        try {
            DB::beginTransaction();

            $user = new User();
            $user->nama = $this->nama;
            $user->role = $this->role;
            $user->username = $this->username;
            $user->password = Hash::make($this->password);
            $user->kecamatan = $this->kecamatan;
            $user->kelurahan = $this->kelurahan;
            $user->rw = $this->rw;
            $user->rt = $this->rt;
            $user->save();

            DB::commit();

            session()->flash('success', 'Data user berhasil disimpan.');

            $this->route = url()->previous();
            $this->redirect($this->route);
        } catch (\Throwable $th) {
            DB::rollBack();

            session()->flash('error', 'Terjadi kesalahan saat menyimpan data user.');
        }
    }
}

<?php

namespace App\Livewire\Kota\Components;

use App\Models\Rt;
use App\Models\Rw;
use App\Models\User;
use Livewire\Component;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
// use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

#[Title('User Managements - DP3AP2KB Kota Cimahi')]
class UserManagementsIndex extends Component
{
    // #[Rule('required', message: 'Nama harus diisi.')]
    public $nama;

    // #[Rule('required', message: 'Role harus diisi.')]
    public $role;

    // #[Rule('required', message: 'Username harus diisi.')]
    public $username;

    // #[Rule('required', message: 'Password harus diisi.')]
    public $password;

    // #[Rule('required', message: 'Kecamatan harus diisi.')]
    public $kecamatan;

    // #[Rule('required', message: 'Kelurahan harus diisi.')]
    public $kelurahan;

    // #[Rule('required', message: 'RW harus diisi.')]
    public $rw;

    // #[Rule('required', message: 'RT harus diisi.')]
    public $rt;

    public function render()
    {
        return view('livewire.kota.components.user-managements-index', [
            'dataKecamatan' => Kecamatan::all(),
            'dataKelurahan' => Kelurahan::all(),
            'dataRw' => Rw::all(),
            'dataRt' => Rt::all(),
        ]);
    }

    public function save()
    {
        $this->validate([
            'nama' => 'required',
            'role' => 'required',
            'username' => ['required', Rule::unique('users')->ignore($this->id ?? null)],
            'password' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
            'rw' => 'required',
            'rt' => 'required',
        ]);

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

            // Set flash message success
             session()->flash('success', 'Data user berhasil disimpan.');

            // Reset nilai input setelah berhasil disimpan
            $this->resetInput();
        } catch (\Throwable $th) {
            DB::rollBack();

            // Set flash message error
             session()->flash('error', 'Terjadi kesalahan saat menyimpan data user.');

            // Reset nilai input jika terjadi kesalahan
            $this->resetInput();
        }

    }

    public function resetInput()
    {
        $this->nama = '';
        $this->role = '';
        $this->username = '';
        $this->password = '';
        $this->kecamatan = '';
        $this->kelurahan = '';
        $this->rw = '';
        $this->rt = '';
    }
}

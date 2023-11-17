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
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ModalImportUserIndex extends Component
{
    use WithFileUploads;

    public $fileImport;

    public function render()
    {
        return view('livewire.kota.components.modal-import-user-index');
    }

    #[On('importUser')]
    public function import()
    {
        $this->validate([
            'fileImport' => 'required|mimes:xlsx,xls|max:1024', // Sesuaikan dengan jenis file yang diizinkan dan batas maksimal ukuran file
        ]);

        $newFileName = 'new_filename.' . $this->fileImport->getClientOriginalExtension();
        $this->fileImport->storeAs('public/fileImport', $newFileName);
    }
}

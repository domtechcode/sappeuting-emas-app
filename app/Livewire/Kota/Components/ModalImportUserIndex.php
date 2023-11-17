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

class ModalImportUserIndex extends Component
{

    public function render()
    {
        return view('livewire.kota.components.modal-import-user-index');
    }

    #[On('importUser')]
    public function import()
    {
    }
}

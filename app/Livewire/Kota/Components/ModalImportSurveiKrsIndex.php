<?php

namespace App\Livewire\Kota\Components;

use App\Models\Rt;
use App\Models\Rw;
use Carbon\Carbon;
use App\Models\User;
use Livewire\Component;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use Livewire\Attributes\On;
use App\Imports\DataSurveiKrsImport;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;

class ModalImportSurveiKrsIndex extends Component
{
    use WithFileUploads;

    public $fileImport;

    public function render()
    {
        return view('livewire.kota.components.modal-import-survei-krs-index');
    }

    #[On('importSurveiKrs')]
    public function import()
    {
        $this->validate([
            'fileImport' => 'required|mimes:xlsx,xls|max:1024', // Sesuaikan dengan jenis file yang diizinkan dan batas maksimal ukuran file
        ]);

        $newFileName = Carbon::now()->timestamp . '-file-import-survei-krs.' . $this->fileImport->getClientOriginalExtension();
        $this->fileImport->storeAs('public/fileImport', $newFileName);

        Excel::import(new DataSurveiKrsImport(), storage_path('app/public/fileImport/' . $newFileName));

        session()->flash('success', 'Data user berhasil disimpan.');
        $this->dispatch('closeModalAndReset');
    }

    public function downloadFile()
    {
        $filename = 'template-import-survei-krs.xlsx';
        $path = public_path('files/' . $filename);

        return response()->download($path, $filename, [
            'Content-Type' => 'application/vnd.ms-excel',
            'Content-Disposition' => 'inline; filename="' . $filename . '"',
        ]);
    }
}

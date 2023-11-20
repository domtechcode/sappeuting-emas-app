<?php

namespace App\Livewire\Kota\Components;

use App\Models\Rt;
use App\Models\Rw;
use Livewire\Component;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\DataPenduduk;
use App\Models\DataSurveiKrs;
use Livewire\Attributes\Rule;

class DashboardKotaIndex extends Component
{
    #[Rule('required', message: 'Kecamatan harus diisi.')]
    public $kecamatan;

    #[Rule('required', message: 'Kelurahan harus diisi.')]
    public $kelurahan;

    #[Rule('required', message: 'RW harus diisi.')]
    public $rw;

    #[Rule('required', message: 'RT harus diisi.')]
    public $rt;

    public $showChart = false;

    public $total_data_penduduk, $total_survei_krs, $jumlah_pus, $jumlah_bukan_pus;

    public $jumlah_pus_hamil, $jumlah_baduta, $jumlah_balita, $terlalu_muda, $terlalu_tua, $terlalu_dekat, $terlalu_banyak, $fasilitas_lingkungan_tidak_sehat, $air_minum, $jamban, $kb_modern, $peringkat_0, $peringkat_1, $peringkat_2, $peringkat_3, $peringkat_4, $jumlah_keluarga_resiko_stunting_ya, $jumlah_keluarga_resiko_stunting_tidak;

    public $data_total_survei;
        public $data_keluarga_pus;
        public $data_keluarga_bukan_pus;
        public $data_pus_hamil;
        public $data_baduta;
        public $data_balita;
        public $data_terlalu_muda;
        public $data_terlalu_tua;
        public $data_terlalu_dekat;
        public $data_terlalu_banyak;
        public $data_fasilitas_lingkungan;
        public $data_jumlah_air_minum;
        public $data_jumlah_jamban;
        public $data_kb_modern;
        public $data_peringkat_0;
        public $data_peringkat_1;
        public $data_peringkat_2;
        public $data_peringkat_3;
        public $data_peringkat_4;
        public $data_keluarga_resiko_stunting_ya;
        public $data_keluarga_resiko_stunting_tidak;

    public function mount()
    {
        $this->total_data_penduduk = DataPenduduk::count();
        $this->total_survei_krs = DataSurveiKrs::count();
        $this->jumlah_pus = DataSurveiKrs::where('answer_3', 'V')->count();
        $this->jumlah_bukan_pus = DataSurveiKrs::where('answer_3', 'X')->count();

        $filter_kecamatan = $this->kecamatan;
        $filter_kelurahan = $this->kelurahan;
        $filter_rw = $this->rw;
        $filter_rt = $this->rt;

        $totalSurvei = DataSurveiKrs::whereHas('dataPenduduk', function ($query) use ($filter_kecamatan, $filter_kelurahan, $filter_rw, $filter_rt) {
                if (!empty($filter_kecamatan)) {
                    $query->where('kecamatan', $filter_kecamatan);
                }

                if (!empty($filter_kelurahan)) {
                    $query->where('kelurahan', $filter_kelurahan);
                }

                if (!empty($filter_rw)) {
                    $query->where('rw', $filter_rw);
                }

                if (!empty($filter_rt)) {
                    $query->where('rt', $filter_rt);
                }
            })->count();
        $jumlahPus = DataSurveiKrs::where('answer_3', 'V')
            ->whereHas('dataPenduduk', function ($query) use ($filter_kecamatan, $filter_kelurahan, $filter_rw, $filter_rt) {
                if (!empty($filter_kecamatan)) {
                    $query->where('kecamatan', $filter_kecamatan);
                }

                if (!empty($filter_kelurahan)) {
                    $query->where('kelurahan', $filter_kelurahan);
                }

                if (!empty($filter_rw)) {
                    $query->where('rw', $filter_rw);
                }

                if (!empty($filter_rt)) {
                    $query->where('rt', $filter_rt);
                }
            })
            ->count();
        $jumlahBukanPus = DataSurveiKrs::where('answer_3', 'X')
            ->whereHas('dataPenduduk', function ($query) use ($filter_kecamatan, $filter_kelurahan, $filter_rw, $filter_rt) {
                if (!empty($filter_kecamatan)) {
                    $query->where('kecamatan', $filter_kecamatan);
                }

                if (!empty($filter_kelurahan)) {
                    $query->where('kelurahan', $filter_kelurahan);
                }

                if (!empty($filter_rw)) {
                    $query->where('rw', $filter_rw);
                }

                if (!empty($filter_rt)) {
                    $query->where('rt', $filter_rt);
                }
            })
            ->count();
        $jumlahPusHamil = DataSurveiKrs::where('answer_4', 'V')
            ->whereHas('dataPenduduk', function ($query) use ($filter_kecamatan, $filter_kelurahan, $filter_rw, $filter_rt) {
                if (!empty($filter_kecamatan)) {
                    $query->where('kecamatan', $filter_kecamatan);
                }

                if (!empty($filter_kelurahan)) {
                    $query->where('kelurahan', $filter_kelurahan);
                }

                if (!empty($filter_rw)) {
                    $query->where('rw', $filter_rw);
                }

                if (!empty($filter_rt)) {
                    $query->where('rt', $filter_rt);
                }
            })
            ->count();
        $jumlahBaduta = DataSurveiKrs::where('answer_1', 'V')
            ->whereHas('dataPenduduk', function ($query) use ($filter_kecamatan, $filter_kelurahan, $filter_rw, $filter_rt) {
                if (!empty($filter_kecamatan)) {
                    $query->where('kecamatan', $filter_kecamatan);
                }

                if (!empty($filter_kelurahan)) {
                    $query->where('kelurahan', $filter_kelurahan);
                }

                if (!empty($filter_rw)) {
                    $query->where('rw', $filter_rw);
                }

                if (!empty($filter_rt)) {
                    $query->where('rt', $filter_rt);
                }
            })
            ->count();
        $jumlahBalita = DataSurveiKrs::where('answer_2', 'V')
            ->whereHas('dataPenduduk', function ($query) use ($filter_kecamatan, $filter_kelurahan, $filter_rw, $filter_rt) {
                if (!empty($filter_kecamatan)) {
                    $query->where('kecamatan', $filter_kecamatan);
                }

                if (!empty($filter_kelurahan)) {
                    $query->where('kelurahan', $filter_kelurahan);
                }

                if (!empty($filter_rw)) {
                    $query->where('rw', $filter_rw);
                }

                if (!empty($filter_rt)) {
                    $query->where('rt', $filter_rt);
                }
            })
            ->count();
        $jumlahBalita = DataSurveiKrs::where('answer_2', 'V')
            ->whereHas('dataPenduduk', function ($query) use ($filter_kecamatan, $filter_kelurahan, $filter_rw, $filter_rt) {
                if (!empty($filter_kecamatan)) {
                    $query->where('kecamatan', $filter_kecamatan);
                }

                if (!empty($filter_kelurahan)) {
                    $query->where('kelurahan', $filter_kelurahan);
                }

                if (!empty($filter_rw)) {
                    $query->where('rw', $filter_rw);
                }

                if (!empty($filter_rt)) {
                    $query->where('rt', $filter_rt);
                }
            })
            ->count();

        $jumlahTerlaluMuda = DataSurveiKrs::where('answer_7', 'V')
            ->whereHas('dataPenduduk', function ($query) use ($filter_kecamatan, $filter_kelurahan, $filter_rw, $filter_rt) {
                if (!empty($filter_kecamatan)) {
                    $query->where('kecamatan', $filter_kecamatan);
                }

                if (!empty($filter_kelurahan)) {
                    $query->where('kelurahan', $filter_kelurahan);
                }

                if (!empty($filter_rw)) {
                    $query->where('rw', $filter_rw);
                }

                if (!empty($filter_rt)) {
                    $query->where('rt', $filter_rt);
                }
            })
            ->count();
        $jumlahTerlaluTua = DataSurveiKrs::where('answer_8', 'V')
            ->whereHas('dataPenduduk', function ($query) use ($filter_kecamatan, $filter_kelurahan, $filter_rw, $filter_rt) {
                if (!empty($filter_kecamatan)) {
                    $query->where('kecamatan', $filter_kecamatan);
                }

                if (!empty($filter_kelurahan)) {
                    $query->where('kelurahan', $filter_kelurahan);
                }

                if (!empty($filter_rw)) {
                    $query->where('rw', $filter_rw);
                }

                if (!empty($filter_rt)) {
                    $query->where('rt', $filter_rt);
                }
            })
            ->count();
        $jumlahTerlaluDekat = DataSurveiKrs::where('answer_9', 'V')
            ->whereHas('dataPenduduk', function ($query) use ($filter_kecamatan, $filter_kelurahan, $filter_rw, $filter_rt) {
                if (!empty($filter_kecamatan)) {
                    $query->where('kecamatan', $filter_kecamatan);
                }

                if (!empty($filter_kelurahan)) {
                    $query->where('kelurahan', $filter_kelurahan);
                }

                if (!empty($filter_rw)) {
                    $query->where('rw', $filter_rw);
                }

                if (!empty($filter_rt)) {
                    $query->where('rt', $filter_rt);
                }
            })
            ->count();
        $jumlahTerlaluBanyak = DataSurveiKrs::where('answer_10', 'V')
            ->whereHas('dataPenduduk', function ($query) use ($filter_kecamatan, $filter_kelurahan, $filter_rw, $filter_rt) {
                if (!empty($filter_kecamatan)) {
                    $query->where('kecamatan', $filter_kecamatan);
                }

                if (!empty($filter_kelurahan)) {
                    $query->where('kelurahan', $filter_kelurahan);
                }

                if (!empty($filter_rw)) {
                    $query->where('rw', $filter_rw);
                }

                if (!empty($filter_rt)) {
                    $query->where('rt', $filter_rt);
                }
            })
            ->count();
        $jumlahAirMinum = DataSurveiKrs::where('answer_5', 'V')
            ->whereHas('dataPenduduk', function ($query) use ($filter_kecamatan, $filter_kelurahan, $filter_rw, $filter_rt) {
                if (!empty($filter_kecamatan)) {
                    $query->where('kecamatan', $filter_kecamatan);
                }

                if (!empty($filter_kelurahan)) {
                    $query->where('kelurahan', $filter_kelurahan);
                }

                if (!empty($filter_rw)) {
                    $query->where('rw', $filter_rw);
                }

                if (!empty($filter_rt)) {
                    $query->where('rt', $filter_rt);
                }
            })
            ->count();
        $jumlahJamban = DataSurveiKrs::where('answer_6', 'V')
            ->whereHas('dataPenduduk', function ($query) use ($filter_kecamatan, $filter_kelurahan, $filter_rw, $filter_rt) {
                if (!empty($filter_kecamatan)) {
                    $query->where('kecamatan', $filter_kecamatan);
                }

                if (!empty($filter_kelurahan)) {
                    $query->where('kelurahan', $filter_kelurahan);
                }

                if (!empty($filter_rw)) {
                    $query->where('rw', $filter_rw);
                }

                if (!empty($filter_rt)) {
                    $query->where('rt', $filter_rt);
                }
            })
            ->count();
        $jumlahKbModern = DataSurveiKrs::where('answer_6', 'V')
            ->whereHas('dataPenduduk', function ($query) use ($filter_kecamatan, $filter_kelurahan, $filter_rw, $filter_rt) {
                if (!empty($filter_kecamatan)) {
                    $query->where('kecamatan', $filter_kecamatan);
                }

                if (!empty($filter_kelurahan)) {
                    $query->where('kelurahan', $filter_kelurahan);
                }

                if (!empty($filter_rw)) {
                    $query->where('rw', $filter_rw);
                }

                if (!empty($filter_rt)) {
                    $query->where('rt', $filter_rt);
                }
            })
            ->count();
        $jumlahPeringkat0 = DataSurveiKrs::where('answer_13', '0')
            ->whereHas('dataPenduduk', function ($query) use ($filter_kecamatan, $filter_kelurahan, $filter_rw, $filter_rt) {
                if (!empty($filter_kecamatan)) {
                    $query->where('kecamatan', $filter_kecamatan);
                }

                if (!empty($filter_kelurahan)) {
                    $query->where('kelurahan', $filter_kelurahan);
                }

                if (!empty($filter_rw)) {
                    $query->where('rw', $filter_rw);
                }

                if (!empty($filter_rt)) {
                    $query->where('rt', $filter_rt);
                }
            })
            ->count();
        $jumlahPeringkat1 = DataSurveiKrs::where('answer_13', '1')
            ->whereHas('dataPenduduk', function ($query) use ($filter_kecamatan, $filter_kelurahan, $filter_rw, $filter_rt) {
                if (!empty($filter_kecamatan)) {
                    $query->where('kecamatan', $filter_kecamatan);
                }

                if (!empty($filter_kelurahan)) {
                    $query->where('kelurahan', $filter_kelurahan);
                }

                if (!empty($filter_rw)) {
                    $query->where('rw', $filter_rw);
                }

                if (!empty($filter_rt)) {
                    $query->where('rt', $filter_rt);
                }
            })
            ->count();
        $jumlahPeringkat2 = DataSurveiKrs::where('answer_13', '2')
            ->whereHas('dataPenduduk', function ($query) use ($filter_kecamatan, $filter_kelurahan, $filter_rw, $filter_rt) {
                if (!empty($filter_kecamatan)) {
                    $query->where('kecamatan', $filter_kecamatan);
                }

                if (!empty($filter_kelurahan)) {
                    $query->where('kelurahan', $filter_kelurahan);
                }

                if (!empty($filter_rw)) {
                    $query->where('rw', $filter_rw);
                }

                if (!empty($filter_rt)) {
                    $query->where('rt', $filter_rt);
                }
            })
            ->count();
        $jumlahPeringkat3 = DataSurveiKrs::where('answer_13', '3')
            ->whereHas('dataPenduduk', function ($query) use ($filter_kecamatan, $filter_kelurahan, $filter_rw, $filter_rt) {
                if (!empty($filter_kecamatan)) {
                    $query->where('kecamatan', $filter_kecamatan);
                }

                if (!empty($filter_kelurahan)) {
                    $query->where('kelurahan', $filter_kelurahan);
                }

                if (!empty($filter_rw)) {
                    $query->where('rw', $filter_rw);
                }

                if (!empty($filter_rt)) {
                    $query->where('rt', $filter_rt);
                }
            })
            ->count();
        $jumlahPeringkat4 = DataSurveiKrs::where('answer_13', '4')
            ->whereHas('dataPenduduk', function ($query) use ($filter_kecamatan, $filter_kelurahan, $filter_rw, $filter_rt) {
                if (!empty($filter_kecamatan)) {
                    $query->where('kecamatan', $filter_kecamatan);
                }

                if (!empty($filter_kelurahan)) {
                    $query->where('kelurahan', $filter_kelurahan);
                }

                if (!empty($filter_rw)) {
                    $query->where('rw', $filter_rw);
                }

                if (!empty($filter_rt)) {
                    $query->where('rt', $filter_rt);
                }
            })
            ->count();
        $jumlahKeluargaResikoStuntingYa = DataSurveiKrs::where('answer_12', 'V')
            ->whereHas('dataPenduduk', function ($query) use ($filter_kecamatan, $filter_kelurahan, $filter_rw, $filter_rt) {
                if (!empty($filter_kecamatan)) {
                    $query->where('kecamatan', $filter_kecamatan);
                }

                if (!empty($filter_kelurahan)) {
                    $query->where('kelurahan', $filter_kelurahan);
                }

                if (!empty($filter_rw)) {
                    $query->where('rw', $filter_rw);
                }

                if (!empty($filter_rt)) {
                    $query->where('rt', $filter_rt);
                }
            })
            ->count();
        $jumlahKeluargaResikoStuntingTidak = DataSurveiKrs::where('answer_12', 'X')
            ->whereHas('dataPenduduk', function ($query) use ($filter_kecamatan, $filter_kelurahan, $filter_rw, $filter_rt) {
                if (!empty($filter_kecamatan)) {
                    $query->where('kecamatan', $filter_kecamatan);
                }

                if (!empty($filter_kelurahan)) {
                    $query->where('kelurahan', $filter_kelurahan);
                }

                if (!empty($filter_rw)) {
                    $query->where('rw', $filter_rw);
                }

                if (!empty($filter_rt)) {
                    $query->where('rt', $filter_rt);
                }
            })
            ->count();

        $this->jumlah_pus_hamil = number_format(($jumlahPusHamil / $jumlahPus) * 100, 2);
        $this->jumlah_baduta = number_format(($jumlahBaduta / $jumlahPus) * 100, 2);
        $this->jumlah_balita = number_format(($jumlahBalita / $jumlahPus) * 100, 2);
        $this->terlalu_muda = number_format(($jumlahTerlaluMuda / $jumlahPus) * 100, 2);
        $this->terlalu_tua = number_format(($jumlahTerlaluTua / $jumlahPus) * 100, 2);
        $this->terlalu_dekat = number_format(($jumlahTerlaluDekat / $jumlahPus) * 100, 2);
        $this->terlalu_banyak = number_format(($jumlahTerlaluBanyak / $jumlahPus) * 100, 2);
        $this->fasilitas_lingkungan_tidak_sehat = number_format($jumlahAirMinum + ($jumlahJamban / $totalSurvei) * 100, 2);
        $this->air_minum = number_format(($jumlahAirMinum / $totalSurvei) * 100, 2);
        $this->jamban = number_format(($jumlahJamban / $totalSurvei) * 100, 2);
        $this->kb_modern = number_format(($jumlahKbModern / $jumlahPus) * 100, 2);
        $this->peringkat_0 = number_format(($jumlahPeringkat0 / $totalSurvei) * 100, 2);
        $this->peringkat_1 = number_format(($jumlahPeringkat1 / $totalSurvei) * 100, 2);
        $this->peringkat_2 = number_format(($jumlahPeringkat2 / $totalSurvei) * 100, 2);
        $this->peringkat_3 = number_format(($jumlahPeringkat3 / $totalSurvei) * 100, 2);
        $this->peringkat_4 = number_format(($jumlahPeringkat4 / $totalSurvei) * 100, 2);
        $this->jumlah_keluarga_resiko_stunting_ya = number_format(($jumlahKeluargaResikoStuntingYa / $totalSurvei) * 100, 2);
        $this->jumlah_keluarga_resiko_stunting_tidak = number_format(($jumlahKeluargaResikoStuntingTidak / $totalSurvei) * 100, 2);

        $this->data_total_survei = $totalSurvei;
        $this->data_keluarga_pus = $jumlahPus;
        $this->data_keluarga_bukan_pus = $jumlahBukanPus;
        $this->data_pus_hamil = $jumlahPusHamil;
        $this->data_baduta = $jumlahBaduta;
        $this->data_balita = $jumlahBalita;
        $this->data_terlalu_muda = $jumlahTerlaluMuda;
        $this->data_terlalu_tua = $jumlahTerlaluTua;
        $this->data_terlalu_dekat = $jumlahTerlaluDekat;
        $this->data_terlalu_banyak = $jumlahTerlaluBanyak;
        $this->data_fasilitas_lingkungan = $jumlahAirMinum + $jumlahJamban;
        $this->data_jumlah_air_minum = $jumlahAirMinum;
        $this->data_jumlah_jamban = $jumlahJamban;
        $this->data_kb_modern = $jumlahKbModern;
        $this->data_peringkat_0 = $jumlahPeringkat0;
        $this->data_peringkat_1 = $jumlahPeringkat1;
        $this->data_peringkat_2 = $jumlahPeringkat2;
        $this->data_peringkat_3 = $jumlahPeringkat3;
        $this->data_peringkat_4 = $jumlahPeringkat4;
        $this->data_keluarga_resiko_stunting_ya = $jumlahKeluargaResikoStuntingYa;
        $this->data_keluarga_resiko_stunting_tidak = $jumlahKeluargaResikoStuntingTidak;


    }

    public function render()
    {
        return view('livewire.kota.components.dashboard-kota-index', [
            'dataKecamatan' => Kecamatan::all(),
            'dataKelurahan' => Kelurahan::all(),
            'dataRw' => Rw::all(),
            'dataRt' => Rt::all(),
            'countDataAll' => $this->total_data_penduduk,
            'countDataSurveiKrs' => $this->total_survei_krs,
            'countDataPus' => $this->jumlah_pus,
            'countDataBukanPus' => $this->jumlah_bukan_pus,
        ]);
    }

    // public function filterData()
    // {
    //     $this->resetPage();
    // }
}

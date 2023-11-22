<div>
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <h1 class="page-title">Dashboard</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Home</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- ROW-1 -->
    <div class="row">
        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
            <div class="card bg-primary img-card box-primary-shadow">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="text-white">
                            <h2 class="mb-0 number-font">{{ $countDataAll }}</h2>
                            <p class="text-white mb-0">Total Data</p>
                        </div>
                        <div class="ms-auto"><i class="fe fe-file-text text-white fs-40 me-2 mt-2"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
            <div class="card bg-info img-card box-primary-shadow">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="text-white">
                            <h2 class="mb-0 number-font">{{ $countDataSurveiKrs }}</h2>
                            <p class="text-white mb-0">Jumlah Keluarga Tervalidasi</p>
                        </div>
                        <div class="ms-auto"> <i class="fe fe-file-text text-white fs-40 me-2 mt-2"></i> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
            <div class="card bg-success img-card box-primary-shadow">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="text-white">
                            <h2 class="mb-0 number-font">{{ $countDataPus }}</h2>
                            <p class="text-white mb-0">Jumlah PUS</p>
                        </div>
                        <div class="ms-auto"> <i class="fe fe-check-square text-white fs-40 me-2 mt-2"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
            <div class="card bg-danger img-card box-primary-shadow">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="text-white">
                            <h2 class="mb-0 number-font">{{ $countDataBukanPus }}</h2>
                            <p class="text-white mb-0">Jumlah Bukan PUS</p>
                        </div>
                        <div class="ms-auto"> <i class="fe fe-x-square text-white fs-40 me-2 mt-2"></i> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ROW-1 END -->

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-body">
                            {{-- <h5 class="card-title">Filter Data</h5> --}}
                            <div class="form-row">
                                <div class="col-md-3" wire:ignore>
                                    <div class="form-group">
                                        <label class="form-label">Kecamatan</label>
                                        <select x-init="$($el).select2({
                                            placeholder: 'Pilih Kecamatan',
                                            allowClear: true,
                                        });
                                        $($el).on('change', function() {
                                            @this.set('kecamatan', $($el).val())
                                        })" name="kecamatan" wire:model.live="kecamatan"
                                            class="form-control form-select select2-show-search filter-select"
                                            id="kecamatan">
                                            <option label="Pilih Kecamatan"></option>
                                            <option value="all">All Data</option>
                                            @foreach ($dataKecamatan as $data)
                                                <option value="{{ $data->nama_kecamatan }}">
                                                    {{ $data->nama_kecamatan }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3" wire:ignore>
                                    <div class="form-group">
                                        <label class="form-label">Kelurahan</label>
                                        <select x-init="$($el).select2({
                                            placeholder: 'Pilih Kelurahan',
                                            allowClear: true,
                                        });
                                        $($el).on('change', function() {
                                            @this.set('kelurahan', $($el).val())
                                        })" name="kelurahan" wire:model.live="kelurahan"
                                            class="form-control form-select select2-show-search filter-select"
                                            id="kelurahan">
                                            <option label="Pilih Kelurahan"></option>
                                            <option value="all">All Data</option>
                                            @foreach ($dataKelurahan as $data)
                                                <option value="{{ $data->nama_kelurahan }}">
                                                    {{ $data->nama_kelurahan }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3" wire:ignore>
                                    <div class="form-group">
                                        <label class="form-label">RW</label>
                                        <select x-init="$($el).select2({
                                            placeholder: 'Pilih RW',
                                            allowClear: true,
                                        });
                                        $($el).on('change', function() {
                                            @this.set('rw', $($el).val())
                                        })" name="rw" wire:model.live="rw"
                                            class="form-control form-select select2-show-search filter-select"
                                            id="rw">
                                            <option label="Pilih RW"></option>
                                            <option value="all">All Data</option>
                                            @foreach ($dataRw as $data)
                                                <option value="{{ $data->nomor_rw }}">
                                                    {{ $data->nomor_rw }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3" wire:ignore>
                                    <div class="form-group">
                                        <label class="form-label">RT</label>
                                        <select x-init="$($el).select2({
                                            placeholder: 'Pilih RT',
                                            allowClear: true,
                                        });
                                        $($el).on('change', function() {
                                            @this.set('rt', $($el).val())
                                        })" name="rt" wire:model.live="rt"
                                            class="form-control form-select select2-show-search filter-select"
                                            id="rt">
                                            <option label="Pilih RT"></option>
                                            <option value="all">All Data</option>
                                            @foreach ($dataRt as $data)
                                                <option value="{{ $data->nomor_rt }}">
                                                    {{ $data->nomor_rt }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-success" wire:click="filterData"><i
                                        class="fa fa-search me-2"></i>Filter</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ROW-1 OPEN -->
    <div class="row">
        <div class="col-lg-4 col-md-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Keluarga Tervalidasi</h3>
                </div>
                <div class="card-body">
                    <div id="chart-pie" class="chartsh"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Jumlah PUS</h3>
                </div>
                <div class="card-body">
                    <div id="chart-pie2" class="chartsh"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">PUS 4 Terlalu</h3>
                </div>
                <div class="card-body">
                    <div id="chart-pie3" class="chartsh"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Penapisan</h3>
                </div>
                <div class="card-body">
                    <div id="chart-pie4" class="chartsh"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Peringkat Kesejahteraan</h3>
                </div>
                <div class="card-body">
                    <div id="chart-pie5" class="chartsh"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Keluarga Beresiko Stunting</h3>
                </div>
                <div class="card-body">
                    <div id="chart-pie6" class="chartsh"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- ROW-1 CLOSE -->


    <!--notif submit-->
    <div class="row row-sm mb-3">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <span class="alert-inner--icon"><i class="fe fe-check-circle"></i></span>
                    <span class="alert-inner--text"><strong>Berhasil !</strong> Data berhasil disimpan...</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            @endif

            @if (session()->has('error'))
                <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
                    <span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
                    <span class="alert-inner--text"><strong>Gagal !</strong> Nomor Kartu Keluarga tidak valid. Mohon
                        periksa kembali..</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            @endif
        </div>
    </div>
    <!--notif submit end-->


    {{-- <div class="row">
        <div class="col-lg-12">
            <!--Row-->
            <div class="panel panel-primary">
                <div class=" tab-menu-heading">
                    <div class="tabs-menu1">
                        <!-- Tabs -->
                        <ul class="nav panel-tabs">
                            <li>
                                <button href="#tab1" class="active btn btn-primary mt-1 mb-1 me-3"
                                    data-bs-toggle="tab">Data
                                    <span class="badge bg-dark text-white ms-2"></span>
                                </button>
                            </li>
                            <li>
                                <button href="#tab2" class="btn btn-warning mt-1 mb-1 me-3"
                                    data-bs-toggle="tab">Permintaan Validasi Data
                                    <span class="badge bg-danger text-white ms-2"></span>
                                </button>
                            </li>
                            <li>
                                <button href="#tab3" class="btn btn-purple mt-1 mb-1 me-3"
                                    data-bs-toggle="tab">Permintaan Verifikasi
                                    <span class="badge bg-danger text-white ms-2"></span>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--Row End-->

            <!--Row -->
            <div class="panel-body tabs-menu-body">
                <div class="tab-content">
                    <div class="tab-pane active" id="tab1">
                        <!-- ROW-2-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-status bg-primary br-te-7 br-ts-7"></div>
                                    <div class="card-header">
                                        <h3 class="card-title">Data</h3>
                                    </div>
                                    <div class="card-body">

                                        <div class="row row-sm mt-3">
                                            <div class="col-md-12">
                                                <div class="table-responsive">
                                                    <table id="example2"
                                                        class="table table-bordered text-nowrap border-bottom">
                                                        <thead>
                                                            <tr>
                                                                <th class="border-bottom-0">No</th>
                                                                <th class="border-bottom-0">Nama</th>
                                                                <th class="border-bottom-0">No Kartu Keluarga
                                                                    Indonesia</th>
                                                                <th class="border-bottom-0">Kepala Keluarga
                                                                </th>
                                                                <th class="border-bottom-0">Nama Istri</th>
                                                                <th class="border-bottom-0">Status Keluarga
                                                                </th>
                                                                <th class="border-bottom-0">Keterangan</th>
                                                                <th class="border-bottom-0">State</th>
                                                                <th class="border-bottom-0">Kecamatan</th>
                                                                <th class="border-bottom-0">Kelurahan</th>
                                                                <th class="border-bottom-0">RW</th>
                                                                <th class="border-bottom-0">RT</th>
                                                                <th class="border-bottom-0">Action</th>
                                                            </tr>
                                                        </thead>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-2 END -->
                    </div>

                    <div class="tab-pane" id="tab2">
                        <!-- ROW-2-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-status bg-primary br-te-7 br-ts-7"></div>
                                    <div class="card-header">
                                        <h3 class="card-title">Permintaan Validasi Data</h3>
                                    </div>
                                    <div class="card-body">

                                        <div class="row row-sm mt-3">
                                            <div class="col-md-12">
                                                <div class="table-responsive">
                                                    <table id="example3"
                                                        class="table table-bordered text-nowrap border-bottom">
                                                        <thead>
                                                            <tr>
                                                                <th class="border-bottom-0">No</th>
                                                                <th class="border-bottom-0">Nama</th>
                                                                <th class="border-bottom-0">No Kartu Keluarga
                                                                    Indonesia</th>
                                                                <th class="border-bottom-0">Kepala Keluarga
                                                                </th>
                                                                <th class="border-bottom-0">Nama Istri</th>
                                                                <th class="border-bottom-0">Status Keluarga
                                                                </th>
                                                                <th class="border-bottom-0">Keterangan</th>
                                                                <th class="border-bottom-0">State</th>
                                                                <th class="border-bottom-0">Kecamatan</th>
                                                                <th class="border-bottom-0">Kelurahan</th>
                                                                <th class="border-bottom-0">RW</th>
                                                                <th class="border-bottom-0">RT</th>
                                                                <th class="border-bottom-0">Action</th>
                                                            </tr>
                                                        </thead>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-2 END -->
                    </div>

                    <div class="tab-pane" id="tab3">
                        <!-- ROW-2-->
                        <div class="row row-sm">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-status bg-purple br-te-7 br-ts-7"></div>
                                    <div class="card-header">
                                        <h3 class="card-title">Permintaan Verifikasi</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="example4"
                                                class="table table-bordered text-nowrap border-bottom">
                                                <thead>
                                                    <tr>
                                                        <th class="border-bottom-0">No</th>
                                                        <th class="border-bottom-0">Nama Pemohon</th>
                                                        <th class="border-bottom-0">Kecamatan</th>
                                                        <th class="border-bottom-0">Kelurahan</th>
                                                        <th class="border-bottom-0">RW</th>
                                                        <th class="border-bottom-0">RT</th>
                                                        <th class="border-bottom-0">Status</th>
                                                        <th class="border-bottom-0">State</th>
                                                        <th class="border-bottom-0">Action</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-2 END -->
                    </div>

                </div>
            </div>
            <!--End Row-->
        </div>
    </div> --}}


</div>

@push('scripts')
    <script src="{{ asset('assets/plugins/charts-c3/d3.v5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/charts-c3/c3-chart.js') }}"></script>

    <script>
        /*chart-pie*/
        var chart1 = c3.generate({
            bindto: '#chart-pie', // id of chart wrapper
            data: {
                columns: [
                    // each columns data
                    ['data1', {{ $data_keluarga_pus }}],
                    ['data2', {{ $data_keluarga_bukan_pus }}]
                ],
                type: 'pie', // default type of chart
                colors: {
                    data1: '#6c5ffc',
                    data2: '#05c3fb'
                },
                names: {
                    // name of each serie
                    'data1': 'Jumlah Pus : {{ $data_keluarga_pus }}',
                    'data2': 'Jumlah Bukan Pus : {{ $data_keluarga_bukan_pus }}',
                }
            },
            axis: {},
            legend: {
                show: true, //hide legend
            },
            padding: {
                bottom: 0,
                top: 0
            },
        });

        /*chart-pie*/
        var chart2 = c3.generate({
            bindto: '#chart-pie2', // id of chart wrapper
            data: {
                columns: [
                    // each columns data
                    ['data1', {{ $jumlah_pus_hamil }}],
                    ['data2', {{ $jumlah_baduta }}],
                    ['data3', {{ $jumlah_balita }}]
                ],
                type: 'pie', // default type of chart
                colors: {
                    data1: '#6c5ffc',
                    data2: '#05c3fb',
                    data3: '#09ad95'
                },
                names: {
                    // name of each serie
                    'data1': 'Jumlah Pus Hamil : {{ $data_pus_hamil }}',
                    'data2': 'Jumlah Baduta : {{ $data_baduta }}',
                    'data3': 'Jumlah Balita : {{ $data_balita }}'
                }
            },
            axis: {},
            legend: {
                show: true, //hide legend
            },
            padding: {
                bottom: 0,
                top: 0
            },
        });

        /*chart-pie*/
        var chart3 = c3.generate({
            bindto: '#chart-pie3', // id of chart wrapper
            data: {
                columns: [
                    // each columns data
                    ['data1', {{ $terlalu_muda }}],
                    ['data2', {{ $terlalu_tua }}],
                    ['data3', {{ $terlalu_dekat }}],
                    ['data4', {{ $terlalu_banyak }}]
                ],
                type: 'pie', // default type of chart
                colors: {
                    data1: '#6c5ffc',
                    data2: '#05c3fb',
                    data3: '#09ad95',
                    data4: '#1170e4'
                },
                names: {
                    // name of each serie
                    'data1': 'Terlalu Muda (Umur Istri < 20 Tahun) : {{ $data_terlalu_muda }}',
                    'data2': 'Terlalu Tua (Umur Istri 35 sd 40 Tahun) : {{ $data_terlalu_tua }}',
                    'data3': 'Terlalu Dekat (< 2 Tahun) : {{ $data_terlalu_dekat }}',
                    'data4': 'Terlalu Banyak (≥ 3 Anak) : {{ $data_terlalu_banyak }}'
                }
            },
            axis: {},
            legend: {
                show: true, //hide legend
            },
            padding: {
                bottom: 0,
                top: 0
            },
        });

        /*chart-pie*/
        var chart4 = c3.generate({
            bindto: '#chart-pie4', // id of chart wrapper
            data: {
                columns: [
                    // each columns data
                    ['data1', {{ $fasilitas_lingkungan_tidak_sehat }}],
                    ['data2', {{ $air_minum }}],
                    ['data3', {{ $jamban }}],
                    ['data4', {{ $kb_modern }}]
                ],
                type: 'pie', // default type of chart
                colors: {
                    data1: '#6c5ffc',
                    data2: '#05c3fb',
                    data3: '#09ad95',
                    data4: '#1170e4'
                },
                names: {
                    // name of each serie
                    'data1': 'Fasilitas Lingkungan Tidak Sehat : {{ $data_fasilitas_lingkungan }}',
                    'data2': 'Keluarga Tidak Mempunyai Sumber Air Minum Yang Layak : {{ $data_jumlah_air_minum }}',
                    'data3': 'Keluarga Tidak Mempunyai Jamban Yang Layak : {{ $data_jumlah_jamban }}',
                    'data4': 'Bukan Peserta KB Modern : {{ $data_kb_modern }}'
                }
            },
            axis: {},
            legend: {
                show: true, //hide legend
            },
            padding: {
                bottom: 0,
                top: 0
            },
        });

        /*chart-pie*/
        var chart5 = c3.generate({
            bindto: '#chart-pie5', // id of chart wrapper
            data: {
                columns: [
                    // each columns data
                    ['data1', {{ $peringkat_0 }}],
                    ['data2', {{ $peringkat_1 }}],
                    ['data3', {{ $peringkat_2 }}],
                    ['data4', {{ $peringkat_3 }}],
                    ['data5', {{ $peringkat_4 }}]
                ],
                type: 'pie', // default type of chart
                colors: {
                    data1: '#6c5ffc',
                    data2: '#05c3fb',
                    data3: '#09ad95',
                    data4: '#1170e4',
                    data5: '#e25e2e'
                },
                names: {
                    // name of each serie
                    'data1': 'Peringkat 0 : {{ $data_peringkat_0 }}',
                    'data2': 'Peringkat 1 : {{ $data_peringkat_1 }}',
                    'data3': 'Peringkat 2 : {{ $data_peringkat_2 }}',
                    'data4': 'Peringkat 3 : {{ $data_peringkat_3 }}',
                    'data5': 'Peringkat 4 : {{ $data_peringkat_4 }}'
                }
            },
            axis: {},
            legend: {
                show: true, //hide legend
            },
            padding: {
                bottom: 0,
                top: 0
            },
        });

        /*chart-pie*/
        var chart6 = c3.generate({
            bindto: '#chart-pie6', // id of chart wrapper
            data: {
                columns: [
                    // each columns data
                    ['data1', {{ $jumlah_keluarga_resiko_stunting_ya }}],
                    ['data2', {{ $jumlah_keluarga_resiko_stunting_tidak }}]
                ],
                type: 'pie', // default type of chart
                colors: {
                    data1: '#6c5ffc',
                    data2: '#05c3fb'
                },
                names: {
                    // name of each serie
                    'data1': 'Data Keluarga Beresiko Stunting : {{ $data_keluarga_resiko_stunting_ya }}',
                    'data2': 'Data Keluarga Tidak Beresiko Stunting : {{ $data_keluarga_resiko_stunting_tidak }}'
                }
            },
            axis: {},
            legend: {
                show: true, //hide legend
            },
            padding: {
                bottom: 0,
                top: 0
            },
        });


    </script>
    <script>
        window.addEventListener('updateChart', event => {

            chart1.load({
                columns: [
                    ['data1', {{ $data_keluarga_pus }}],
                    ['data2', {{ $data_keluarga_bukan_pus }}],
                ],
                names: {
                    // name of each serie
                    'data1': 'Jumlah Pus : ' + {{ $data_keluarga_pus }},
                    'data2': 'Jumlah Bukan Pus : ' + {{ $data_keluarga_bukan_pus }},
                }
            });

            chart2.load({
                columns: [
                    ['data1', {{ $jumlah_pus_hamil }}],
                    ['data2', {{ $jumlah_baduta }}],
                    ['data3', {{ $jumlah_balita }}]
                ],
                names: {
                    // name of each serie
                    'data1': 'Jumlah Pus Hamil : ' + {{ $data_pus_hamil }},
                    'data2': 'Jumlah Baduta : ' + {{ $data_baduta }},
                    'data3': 'Jumlah Balita : ' + {{ $data_balita }}
                }
            });

            chart3.load({
                columns: [
                    ['data1', {{ $terlalu_muda }}],
                    ['data2', {{ $terlalu_tua }}],
                    ['data3', {{ $terlalu_dekat }}],
                    ['data4', {{ $terlalu_banyak }}],
                ],
                names: {
                    // name of each serie
                    'data1': 'Terlalu Muda (Umur Istri < 20 Tahun) : ' + {{ $data_terlalu_muda }},
                    'data2': 'Terlalu Tua (Umur Istri 35 sd 40 Tahun) : ' + {{ $data_terlalu_tua }},
                    'data3': 'Terlalu Dekat (< 2 Tahun) : ' + {{ $data_terlalu_dekat }},
                    'data4': 'Terlalu Banyak (≥ 3 Anak) : ' + {{ $data_terlalu_banyak }},
                }
            });

            chart4.load({
                columns: [
                    ['data1', {{ $data_fasilitas_lingkungan }}],
                    ['data2', {{ $air_minum }}],
                    ['data3', {{ $jamban }}],
                    ['data4', {{ $kb_modern }}],
                ],
                names: {
                    // name of each serie
                    'data1': 'Fasilitas Lingkungan Tidak Sehat : ' + {{ $data_fasilitas_lingkungan }},
                    'data2': 'Keluarga Tidak Mempunyai Sumber Air Minum Yang Layak : ' +
                        {{ $data_jumlah_air_minum }},
                    'data3': 'Keluarga Tidak Mempunyai Jamban Yang Layak : ' + {{ $data_jumlah_jamban }},
                    'data4': 'Bukan Peserta KB Modern : ' + {{ $data_kb_modern }},
                }
            });

            chart5.load({
                columns: [
                    ['data1', {{ $peringkat_0 }}],
                    ['data2', {{ $peringkat_1 }}],
                    ['data3', {{ $peringkat_2 }}],
                    ['data4', {{ $peringkat_3 }}],
                    ['data5', {{ $peringkat_4 }}],
                ],
                names: {
                    // name of each serie
                    'data1': 'Peringkat 0 : ' + {{ $data_peringkat_0 }},
                    'data2': 'Peringkat 1 : ' + {{ $data_peringkat_1 }},
                    'data3': 'Peringkat 2 : ' + {{ $data_peringkat_2 }},
                    'data4': 'Peringkat 3 : ' + {{ $data_peringkat_3 }},
                    'data5': 'Peringkat 4 : ' + {{ $data_peringkat_4 }},
                }
            });

            chart6.load({
                columns: [
                    ['data1', {{ $data_keluarga_resiko_stunting_ya }}],
                    ['data2', {{ $data_keluarga_resiko_stunting_tidak }}],
                ],
                names: {
                    // name of each serie
                    'data1': 'Data Keluarga Beresiko Stunting : ' +
                        {{ $jumlah_keluarga_resiko_stunting_ya }},
                    'data2': 'Data Keluarga Tidak Beresiko Stunting : ' +
                        {{ $jumlah_keluarga_resiko_stunting_tidak }},
                }
            });
        });
    </script>
@endpush

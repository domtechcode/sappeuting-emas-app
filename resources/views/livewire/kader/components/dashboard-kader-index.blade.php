<div>

    @foreach ($pertanyaan as $data)
    [<br>
                'nomor_keluarga_indonesia' => '{{ $data->deskripsi }}', <br>
                'kategori' => '{{ $data->kategori }}',<br>
            ],

    @endforeach
    <!--app-content open-->
    <div class="main-content app-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">

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
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <div class="card bg-info img-card box-primary-shadow">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="text-white">
                                        <h2 class="mb-0 number-font"></h2>
                                        <p class="text-white mb-0">Total Data</p>
                                    </div>
                                    <div class="ms-auto"> <i class="fe fe-file-text text-white fs-40 me-2 mt-2"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <div class="card bg-success img-card box-primary-shadow">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="text-white">
                                        <h2 class="mb-0 number-font"></h2>
                                        <p class="text-white mb-0">Data Validasi</p>
                                    </div>
                                    <div class="ms-auto"> <i class="fe fe-check-square text-white fs-40 me-2 mt-2"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <div class="card bg-danger img-card box-primary-shadow">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="text-white">
                                        <h2 class="mb-0 number-font"></h2>
                                        <p class="text-white mb-0">Data Non-Validasi</p>
                                    </div>
                                    <div class="ms-auto"> <i class="fe fe-x-square text-white fs-40 me-2 mt-2"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ROW-1 END -->

                <!--notif submit-->
                <div class="row row-sm mb-3">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        {{-- @if (session()->has('success')) --}}
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <span class="alert-inner--icon"><i class="fe fe-check-circle"></i></span>
                            <span class="alert-inner--text"><strong>Berhasil !</strong> Data berhasil disimpan...</span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        {{-- @endif --}}

                        {{-- @if (session()->has('error')) --}}
                        <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
                            <span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
                            <span class="alert-inner--text"><strong>Gagal !</strong> {{ session('error') }}</span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        {{-- @endif --}}
                    </div>
                </div>
                <!--notif submit end-->



                {{-- @if (session()->has('notfound')) --}}
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="" class="card-img-left" alt="img">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
                                            <span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
                                            <span class="alert-inner--text"></span>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <form method="POST" action="">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Nomor Kartu Keluarga</label>
                                                        <input name="nomor_keluarga_indonesia" type="text"
                                                            class="form-control" placeholder="Nomor Kartu Keluarga"
                                                            autocomplete="off" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Nama Kepala Keluarga</label>
                                                        <input name="nama_kepala_keluarga" type="text"
                                                            class="form-control" placeholder="Nama Kepala Keluarga"
                                                            autocomplete="off" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Nama Istri</label>
                                                        <input name="nama_istri" type="text" class="form-control"
                                                            placeholder="Nama Istri" autocomplete="off" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Status Keluarga</label>
                                                        <input name="status_keluarga" type="text"
                                                            class="form-control" placeholder="Status Keluarga"
                                                            autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Kecamatan</label>
                                                        <select name="kecamatan"
                                                            class="form-control form-select select2-show-search filter-select"
                                                            id="kecamatan" required>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Kelurahan</label>
                                                        <select name="kelurahan"
                                                            class="form-control form-select select2-show-search filter-select"
                                                            id="kelurahan" required>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">RW</label>
                                                        <select name="rw"
                                                            class="form-control form-select select2-show-search filter-select"
                                                            id="rw" required>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">RT</label>
                                                        <select name="rt"
                                                            class="form-control form-select select2-show-search filter-select"
                                                            id="rt" required>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-dark"><i
                                                        class="fe fe-search me-2"></i>Mulai Validasi</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- @else --}}
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="" class="card-img-left" alt="img">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Nomor Kartu Keluarga Indonesia / Nama Kepala Keluarga
                                        </h5>
                                        <form method="POST" action="">
                                            @csrf
                                            <div class="form-group">
                                                <input name="nomor_keluarga_indonesia" type="text"
                                                    class="form-control"
                                                    placeholder="Nomor Kartu Keluarga Indonesia / Nama Kepala Keluarga"
                                                    autocomplete="off">
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-dark"><i
                                                        class="fe fe-search me-2"></i>Cari</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- @endif --}}

                <div class="row">
                    <div class="col-lg-12">
                        <!--Row-->
                        <div class="panel panel-primary">
                            <div class=" tab-menu-heading">
                                <div class="tabs-menu1">
                                    <!-- Tabs -->
                                    <ul class="nav panel-tabs">
                                        <li>
                                            <button href="#tab1" class="active btn btn-primary mt-1 mb-1 me-3"
                                                data-bs-toggle="tab">Data Survei
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
                                                    <h3 class="card-title">Data Survei</h3>
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
                                                                            <th class="border-bottom-0">No Kartu
                                                                                Keluarga
                                                                                Indonesia</th>
                                                                            <th class="border-bottom-0">Kepala Keluarga
                                                                            </th>
                                                                            <th class="border-bottom-0">Nama Istri</th>
                                                                            <th class="border-bottom-0">Status Keluarga
                                                                            </th>
                                                                            <th class="border-bottom-0">Keterangan</th>
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
                                        </div>
                                    </div>
                                    <!-- ROW-2 END -->
                                </div>
                            </div>
                        </div>
                        <!--End Row-->
                    </div>
                </div>


            </div>
            <!-- CONTAINER CLOSED -->
        </div>
    </div>
    <!--app-content closed-->

</div>

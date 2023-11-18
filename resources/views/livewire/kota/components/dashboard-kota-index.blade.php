<div>
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
                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                            <div class="card bg-primary img-card box-primary-shadow">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="text-white">
                                            <h2 class="mb-0 number-font"></h2>
                                            <p class="text-white mb-0">Total Data</p>
                                        </div>
                                        <div class="ms-auto"> <i class="fe fe-file-text text-white fs-40 me-2 mt-2"></i> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                            <div class="card bg-info img-card box-primary-shadow">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="text-white">
                                            <h2 class="mb-0 number-font"></h2>
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
                                            <h2 class="mb-0 number-font"></h2>
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
                                            <h2 class="mb-0 number-font"></h2>
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
                                            <h5 class="card-title">Filter Data</h5>
                                                <div class="form-row">
                                                    <div class="form-group col-md-3 mb-0">
                                                        <div class="form-group">
                                                            <select name="filter_kecamatan"
                                                                class="form-control form-select select2-show-search filter-select"
                                                                id="kecamatan">
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-3 mb-0">
                                                        <div class="form-group">
                                                            <select name="filter_kelurahan"
                                                                class="form-control form-select select2-show-search filter-select"
                                                                id="kelurahan">
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-3 mb-0">
                                                        <div class="form-group">
                                                            <select name="filter_rw"
                                                                class="form-control form-select select2-show-search filter-select"
                                                                id="rw">
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-3 mb-0">
                                                        <div class="form-group">
                                                            <select name="filter_rt"
                                                                class="form-control form-select select2-show-search filter-select"
                                                                id="rt">
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-success" id="filter-button"><i class="fa fa-search me-2"></i>Filter</button>
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
                                <span class="alert-inner--text"><strong>Gagal !</strong> Nomor Kartu Keluarga tidak valid. Mohon periksa kembali..</span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                            </div>
                            @endif
                        </div>
                    </div>
                    <!--notif submit end-->


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
                    </div>


                </div>
                <!-- CONTAINER CLOSED -->
            </div>
        </div>
        <!--app-content closed-->


</div>

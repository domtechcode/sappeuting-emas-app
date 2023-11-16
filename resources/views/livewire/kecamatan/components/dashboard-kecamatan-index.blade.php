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
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                            <div class="card bg-info img-card box-primary-shadow">
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
                                                    <div class="form-group col-md-4 mb-0">
                                                        <div class="form-group">
                                                            <select name="filter_kelurahan"
                                                                class="form-control form-select select2-show-search"
                                                                id="kelurahan_chart">
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-4 mb-0">
                                                        <div class="form-group">
                                                            <select name="filter_rw"
                                                                class="form-control form-select select2-show-search"
                                                                id="rw_chart">
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-4 mb-0">
                                                        <div class="form-group">
                                                            <select name="filter_rt"
                                                                class="form-control form-select select2-show-search"
                                                                id="rt_chart">
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
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Keluarga Tervalidasi</h3>
                                </div>
                                <div class="card-body">
                                    <div id="chart-pie" class="chartsh"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Jumlah PUS</h3>
                                </div>
                                <div class="card-body">
                                    <div id="chart-pie2" class="chartsh"></div>
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
                                <span class="alert-inner--text"><strong>Berhasil !</strong> Data berhasil direquest...</span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            @endif
    
                            @if (session()->has('error'))
                            <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
                                <span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
                                <span class="alert-inner--text"><strong>Gagal !</strong> Data tidak valid. Mohon periksa kembali..</span>
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
                                                    data-bs-toggle="tab">Permintaan Export Data
                                                    <span class="badge bg-dark text-white ms-2"></span>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--Row End-->
    
                            <form method="POST" action="">
                                @csrf
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
                                                        <h3 class="card-title">Export Data</h3>
                                                        <div class="card-options">
                                                            <div class="btn-group">
                                                                <button type="submit" class="btn btn-success btn-pill"><i class="fa fa-external-link me-2"></i>Kirim Permintaan Export Excel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row border-bottom">
                                                            <div class="form-row">
                                                                <input type="hidden" name="filter_kecamatan" value="">
                                                                <div class="form-group col-md-4 mb-0">
                                                                    <div class="form-group">
                                                                        <select name="filter_kelurahan"
                                                                            class="form-control form-select select2-show-search filter-select"
                                                                            id="kelurahan" required>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-md-4 mb-0">
                                                                    <div class="form-group">
                                                                        <select name="filter_rw"
                                                                            class="form-control form-select select2-show-search filter-select"
                                                                            id="rw" required>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-md-4 mb-0">
                                                                    <div class="form-group">
                                                                        <select name="filter_rt"
                                                                            class="form-control form-select select2-show-search filter-select"
                                                                            id="rt" required>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
    
                                                        <div class="row row-sm mt-3">
                                                            <div class="col-md-12">
                                                                <div class="table-responsive">
                                                                    <table id="example2"
                                                                        class="table table-bordered text-nowrap border-bottom">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="border-bottom-0">No</th>
                                                                                <th class="border-bottom-0">Nama Pemohon</th>
                                                                                <th class="border-bottom-0">Kecamatan</th>
                                                                                <th class="border-bottom-0">Kelurahan</th>
                                                                                <th class="border-bottom-0">RW</th>
                                                                                <th class="border-bottom-0">RT</th>
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
                            </form>
    
    
                        </div>
                    </div>
    
    
                </div>
                <!-- CONTAINER CLOSED -->
            </div>
        </div>
        <!--app-content closed-->
    
        
    
</div>

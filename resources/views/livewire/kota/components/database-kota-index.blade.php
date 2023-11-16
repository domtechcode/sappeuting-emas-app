<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <!--app-content open-->
    <div class="main-content app-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">

                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <h1 class="page-title">Database</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Database</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Home</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

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
                            <span class="alert-inner--text"><strong>Gagal !</strong> Nomor Kartu Keluarga tidak valid. Mohon periksa kembali..</span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                        </div>
                        {{-- @endif --}}
                    </div>
                </div>
                <!--notif submit end-->

            
                <div class="row">
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <h5 class="card-title">File Import</h5>
                                        <form method="POST" action="" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <input type="file" class="form-control" name="file">
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-dark"><i class="fe fe-plus me-2"></i>Import</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <h5 class="card-title">Export File Excel</h5>
                                        <form method="POST" action="">
                                            @csrf
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
                                                <button type="submit" class="btn btn-success"><i class="fa fa-files-o me-2"></i>Export Excel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row"> 
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Database</div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example2"
                                        class="table table-bordered text-nowrap border-bottom">
                                        <thead>
                                            <tr>
                                                <th class="border-bottom-0">No</th>
                                                <th class="border-bottom-0">No Kartu Keluarga Indonesia</th>
                                                <th class="border-bottom-0">Kepala Keluarga</th>
                                                <th class="border-bottom-0">Nama Istri</th>
                                                <th class="border-bottom-0">Status Keluarga</th>
                                                <th class="border-bottom-0">Kecamatan</th>
                                                <th class="border-bottom-0">Kelurahan</th>
                                                <th class="border-bottom-0">RW</th>
                                                <th class="border-bottom-0">RT</th>
                                                <th class="border-bottom-0">Actions</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- COL-END -->
                </div>


            </div>
            <!-- CONTAINER CLOSED -->
        </div>
    </div>
    <!--app-content closed-->

</div>

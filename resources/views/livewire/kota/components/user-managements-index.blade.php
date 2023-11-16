<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <!--app-content open-->
    <div class="main-content app-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">

                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <h1 class="page-title">Add User</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Add User</a></li>
                            <li class="breadcrumb-item active" aria-current="page">User</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                @if (session()->has('success'))
                    <!--notif submit-->
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <span class="alert-inner--icon"><i class="fe fe-check-circle"></i></span>
                        <span class="alert-inner--text"><strong>Berhasil !</strong> </span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                @endif

                {{-- @if (session()->has('error')) --}}
                    <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
                        <span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
                        <span class="alert-inner--text"><strong>Gagal !</strong> Data gagal disimpan.</span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                {{-- @endif --}}
                <!--notif submit end-->

                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <!--Row -->
                    <div class="row">
                        <div class="col-md-12 col-xl-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Form User</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Nama</label>
                                                <input name="nama" type="text" class="form-control" placeholder="Nama"
                                                    autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Role User</label>
                                                <select name="role" class="form-control form-select"
                                                    data-bs-placeholder="Pilih Role User">
                                                    <option value="admin-kota">Admin Kota</option>
                                                    <option value="admin-kecamatan">Admin Kecamatan</option>
                                                    <option value="admin-kelurahan">Admin Kelurahan</option>
                                                    <option value="admin-kader">Admin Kader</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Username</label>
                                                <input name="username" type="text" class="form-control"
                                                    placeholder="Username" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Password</label>
                                                <input name="password" type="password" class="form-control"
                                                    placeholder="Password" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Kecamatan</label>
                                                <select name="kecamatan"
                                                    class="form-control form-select select2-show-search filter-select"
                                                    id="kecamatan">
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Kelurahan</label>
                                                <select name="kelurahan"
                                                    class="form-control form-select select2-show-search filter-select"
                                                    id="kelurahan">
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">RW</label>
                                                <select name="rw"
                                                    class="form-control form-select select2-show-search filter-select"
                                                    id="rw">
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">RT</label>
                                                <select name="rt"
                                                    class="form-control form-select select2-show-search filter-select"
                                                    id="rt">
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-4 mb-0">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Row-->
                </form>

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <h5 class="card-title">File Import User</h5>
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
                </div>

                <div class="row"> 
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Database User</div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example2"
                                        class="table table-bordered text-nowrap border-bottom">
                                        <thead>
                                            <tr>
                                                <th class="border-bottom-0">No</th>
                                                <th class="border-bottom-0">Nama</th>
                                                <th class="border-bottom-0">Role</th>
                                                <th class="border-bottom-0">Username</th>
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
            <!-- CONTAINER END -->
        </div>
    </div>
    <!--app-content close-->


</div>

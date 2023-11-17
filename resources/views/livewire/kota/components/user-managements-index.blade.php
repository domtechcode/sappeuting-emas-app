<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}

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
        <div class="alert alert-success alert-dismissible fade show mb-2" role="alert">
            <span class="alert-inner--icon"><i class="fe fe-check-circle"></i></span>
            <span class="alert-inner--text">{{ session('success') }}</span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
    @endif

    @if (session()->has('error'))
        <div class="alert alert-danger alert-dismissible fade show mb-2" role="alert">
            <span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
            <span class="alert-inner--text">{{ session('error') }}</span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
    @endif
    <!--notif submit end-->

    <form wire:submit="save">
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
                                    <input name="nama" type="text"
                                        class="form-control @error('nama') is-invalid @enderror" placeholder="Nama"
                                        autocomplete="off" wire:model.defer="nama">
                                </div>
                                @error('nama')
                                    <div><span class="text-danger">{{ $message }}</span></div>
                                @enderror
                            </div>
                            <div class="col-md-6" wire:ignore>
                                <div class="form-group">
                                    <label class="form-label">Role User</label>
                                    <select x-init="$($el).select2({
                                        placeholder: 'Pilih Role User',
                                        allowClear: true,
                                    });
                                    $($el).on('change', function() {
                                        @this.set('role', $($el).val())
                                    })" name="role" wire:model.live="role"
                                        class="form-control form-select select2-show-search filter-select"
                                        id="role">
                                        <option label="Pilih Role User"></option>
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
                                    <input name="username" wire:model.defer="username" type="text"
                                        class="form-control @error('username') is-invalid @enderror"
                                        placeholder="Username" autocomplete="off">
                                </div>
                                @error('username')
                                    <div><span class="text-danger">{{ $message }}</span></div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Password</label>
                                    <input name="password" wire:model.defer="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror"
                                        placeholder="Password" autocomplete="off">
                                </div>
                                @error('password')
                                    <div><span class="text-danger">{{ $message }}</span></div>
                                @enderror
                            </div>
                            <div class="col-md-6" wire:ignore>
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
                                        @foreach ($dataKecamatan as $kecamatan)
                                            <option value="{{ $kecamatan->nama_kecamatan }}">
                                                {{ $kecamatan->nama_kecamatan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6" wire:ignore>
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
                                        @foreach ($dataKelurahan as $kelurahan)
                                            <option value="{{ $kelurahan->nama_kelurahan }}">
                                                {{ $kelurahan->nama_kelurahan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6" wire:ignore>
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
                                        @foreach ($dataRw as $rw)
                                            <option value="{{ $rw->nomor_rw }}">
                                                {{ $rw->nomor_rw }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6" wire:ignore>
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
                                        @foreach ($dataRt as $rt)
                                            <option value="{{ $rt->nomor_rt }}">
                                                {{ $rt->nomor_rt }}</option>
                                        @endforeach
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
    {{--
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
                                    <button type="submit" class="btn btn-dark"><i
                                            class="fe fe-plus me-2"></i>Import</button>
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
                        <table id="example2" class="table table-bordered text-nowrap border-bottom">
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
    </div> --}}


</div>

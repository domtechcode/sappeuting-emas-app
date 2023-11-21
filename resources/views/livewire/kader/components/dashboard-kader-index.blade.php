<div>
    <!--app-content open-->
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

    <livewire:includes.statistik>

        @if (session()->has('error'))
            <div class="alert alert-danger alert-dismissible fade show mb-3" role="alert">
                <span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
                <span class="alert-inner--text">{{ session('error') }}</span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif

        @if ($showSecondForm)
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset('assets/images/brand/undraw_Hire_re_gn5j.png') }}"
                                    class="card-img-left" alt="img">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Nomor Kartu Keluarga</label>
                                                <input name="nomor_keluarga_indonesia"
                                                    wire:model.defer="nomor_keluarga_indonesia" type="text"
                                                    class="form-control" placeholder="Nomor Kartu Keluarga"
                                                    autocomplete="off">
                                                @error('nomor_keluarga_indonesia')
                                                    <div><span class="text-danger">{{ $message }}</span></div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Nama Kepala Keluarga</label>
                                                <input name="nama_kepala_keluarga"
                                                    wire:model.defer="nama_kepala_keluarga" type="text"
                                                    class="form-control" placeholder="Nama Kepala Keluarga"
                                                    autocomplete="off">
                                                @error('nama_kepala_keluarga')
                                                    <div><span class="text-danger">{{ $message }}</span></div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Nama Istri</label>
                                                <input name="nama_istri" wire:model.defer="nama_istri" type="text"
                                                    class="form-control" placeholder="Nama Istri" autocomplete="off">
                                                @error('nama_istri')
                                                    <div><span class="text-danger">{{ $message }}</span></div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Status Keluarga</label>
                                                <input name="status_keluarga" wire:model.defer="status_keluarga"
                                                    type="text" class="form-control" placeholder="Status Keluarga"
                                                    autocomplete="off">
                                                @error('status_keluarga')
                                                    <div><span class="text-danger">{{ $message }}</span></div>
                                                @enderror
                                            </div>
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
                                                })" name="kecamatan"
                                                    wire:model.live="kecamatan"
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
                                                })" name="kelurahan"
                                                    wire:model.live="kelurahan"
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
                                    <div class="form-group">
                                        <button type="submit" wire:click="newSurvei" class="btn btn-dark"><i
                                                class="fe fe-search me-2"></i>Mulai Validasi</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-status bg-primary br-te-7 br-ts-7"></div>
                        <div class="card-header">
                            <h3 class="card-title">Form Search NIK</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="{{ asset('assets/images/brand/undraw_Hire_re_gn5j.png') }}"
                                        class="card-img-left" alt="img">
                                </div>
                                <div class="col-md-6 d-flex flex-column justify-content-center">
                                    <h3 class="card-title text-center">Nomor Induk Kependudukan</h3>
                                    <div class="form-group">
                                        <input name="nik_search" wire:model.defer="nik_search" type="text"
                                            class="form-control" placeholder="Nomor Induk Kependudukan"
                                            autocomplete="off">
                                        @error('nik_search')
                                            <div><span class="text-danger">{{ $message }}</span></div>
                                        @enderror
                                    </div>
                                    <button type="submit" wire:click="searchSurvei" class="btn btn-dark"><i
                                            class="fe fe-search me-2"></i>Cari</button>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        @endif
</div>

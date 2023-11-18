<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}

    <!-- PAGE-HEADER -->
    <div class="page-header">
        <h1 class="page-title">Data Penduduk</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Data Penduduk</a></li>
                <li class="breadcrumb-item active" aria-current="page">Home</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Export File Excel</div>
                </div>
                <div class="card-body">
                    <form wire:submit="exportFile">
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
                                        @foreach ($dataKecamatan as $kecamatan)
                                            <option value="{{ $kecamatan->nama_kecamatan }}">
                                                {{ $kecamatan->nama_kecamatan }}</option>
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
                                        @foreach ($dataKelurahan as $kelurahan)
                                            <option value="{{ $kelurahan->nama_kelurahan }}">
                                                {{ $kelurahan->nama_kelurahan }}</option>
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
                                        @foreach ($dataRw as $rw)
                                            <option value="{{ $rw->nomor_rw }}">
                                                {{ $rw->nomor_rw }}</option>
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
                                        @foreach ($dataRt as $rt)
                                            <option value="{{ $rt->nomor_rt }}">
                                                {{ $rt->nomor_rt }}</option>
                                        @endforeach
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

    @if (session()->has('successPenduduk'))
        <!--notif submit-->
        <div class="alert alert-success alert-dismissible fade show mb-2" role="alert">
            <span class="alert-inner--icon"><i class="fe fe-check-circle"></i></span>
            <span class="alert-inner--text">{{ session('successPenduduk') }}</span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
    @endif

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Database Penduduk</div>
                    <div class="card-options">
                        <button @click="$dispatch('importPenduduk')" type="button" class="btn btn-icon btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#modalImportPenduduk"><i class="fe fe-plus"></i>Import</button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col">
                            <select id="perpage" name="perpage" wire:model.live="perpage" class="form-control form-select w-auto" >
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                        </div>
                        <div class="col d-flex justify-content-end">
                            <input type="text" class="form-control w-auto" placeholder="Search" wire:model.live.debounce.300ms="search" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table class="table border text-nowrap text-md-nowrap table-bordered table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th class="border-bottom-0">No</th>
                                            @include('livewire.includes.table-sortable-th', [
                                                'name' => 'nomor_keluarga_indonesia',
                                                'displayName' => 'Nomor Keluarga Indonesia'
                                            ])
                                            @include('livewire.includes.table-sortable-th', [
                                                'name' => 'nama_kepala_keluarga',
                                                'displayName' => 'Kepala Keluarga'
                                            ])
                                            @include('livewire.includes.table-sortable-th', [
                                                'name' => 'nama_istri',
                                                'displayName' => 'Istri'
                                            ])
                                            @include('livewire.includes.table-sortable-th', [
                                                'name' => 'status_keluarga',
                                                'displayName' => 'Status Keluarga'
                                            ])
                                            @include('livewire.includes.table-sortable-th', [
                                                'name' => 'kecamatan',
                                                'displayName' => 'Kecamatan'
                                            ])
                                            @include('livewire.includes.table-sortable-th', [
                                                'name' => 'kelurahan',
                                                'displayName' => 'Kelurahan'
                                            ])
                                            @include('livewire.includes.table-sortable-th', [
                                                'name' => 'rw',
                                                'displayName' => 'RW'
                                            ])
                                            @include('livewire.includes.table-sortable-th', [
                                                'name' => 'rt',
                                                'displayName' => 'RT'
                                            ])
                                            <th class="border-bottom-0">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($dataPenduduk as $key => $data)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $data->nomor_keluarga_indonesia }}</td>
                                                <td>{{ $data->nama_kepala_keluarga }}</td>
                                                <td>{{ $data->nama_istri }}</td>
                                                <td>{{ $data->status_keluarga }}</td>
                                                <td>{{ $data->kecamatan }}</td>
                                                <td>{{ $data->kelurahan }}</td>
                                                <td>{{ $data->rw }}</td>
                                                <td>{{ $data->rt }}</td>
                                                <td>
                                                    <div class="btn-list">
                                                        <button @click="$dispatch('edit', {id:{{ $data->id }}})" type="button" class="btn btn-icon btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#modalEditPenduduk"><i class="fe fe-eye"></i></button>
                                                        {{-- <button type="button" class="btn btn-icon btn-sm btn-danger" href="deleteuser/'.$data->id.'"><i class="fe fe-x"></i></button> --}}
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-end mt-3">
                            {{ $dataPenduduk->links(data: ['scrollTo' => false]) }}
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- COL-END -->
    </div>

    <livewire:kota.components.modal-edit-penduduk-index>
    <livewire:kota.components.modal-import-penduduk-index>
</div>

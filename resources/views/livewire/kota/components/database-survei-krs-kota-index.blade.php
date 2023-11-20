<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Filter KRS</div>
                </div>
                <div class="card-body">
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
                                        @foreach ($dataRt as $rt)
                                            <option value="{{ $rt->nomor_rt }}">
                                                {{ $rt->nomor_rt }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>

    @if (session()->has('successSurveiKrs'))
        <!--notif submit-->
        <div class="alert alert-success alert-dismissible fade show mb-2" role="alert">
            <span class="alert-inner--icon"><i class="fe fe-check-circle"></i></span>
            <span class="alert-inner--text">{{ session('successSurveiKrs') }}</span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
    @endif

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Database KRS</div>
                    <div class="card-options">
                        <button @click="$dispatch('importSurveiKrs')" type="button" class="btn btn-icon btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#modalImportSurveiKrs"><i class="fe fe-plus"></i> Import</button>
                        <button type="button" class="btn btn-icon btn-sm btn-info ms-2" wire:click="exportDataSurveiKrs"><i class="fe fe-upload"></i> Export</button>
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
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table class="table border text-nowrap text-md-nowrap table-bordered table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th class="border-bottom-0">No</th>
                                            @include('livewire.includes.table-sortable-th', [
                                                'name' => 'data_penduduks.nomor_keluarga_indonesia',
                                                'displayName' => 'Nomor Keluarga Indonesia'
                                            ])
                                            @include('livewire.includes.table-sortable-th', [
                                                'name' => 'data_penduduks.nama_kepala_keluarga',
                                                'displayName' => 'Kepala Keluarga'
                                            ])
                                            @include('livewire.includes.table-sortable-th', [
                                                'name' => 'data_penduduks.nama_istri',
                                                'displayName' => 'Istri'
                                            ])
                                            @include('livewire.includes.table-sortable-th', [
                                                'name' => 'data_penduduks.status_keluarga',
                                                'displayName' => 'Status Keluarga'
                                            ])
                                            @include('livewire.includes.table-sortable-th', [
                                                'name' => 'data_penduduks.kecamatan',
                                                'displayName' => 'Kecamatan'
                                            ])
                                            @include('livewire.includes.table-sortable-th', [
                                                'name' => 'data_penduduks.kelurahan',
                                                'displayName' => 'Kelurahan'
                                            ])
                                            @include('livewire.includes.table-sortable-th', [
                                                'name' => 'data_penduduks.rw',
                                                'displayName' => 'RW'
                                            ])
                                            @include('livewire.includes.table-sortable-th', [
                                                'name' => 'data_penduduks.rt',
                                                'displayName' => 'RT'
                                            ])
                                            <th class="border-bottom-0">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($dataSurveiKrs as $key => $data)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $data->dataPenduduk->nomor_keluarga_indonesia }}</td>
                                                <td>{{ $data->dataPenduduk->nama_kepala_keluarga }}</td>
                                                <td>{{ $data->dataPenduduk->nama_istri }}</td>
                                                <td>{{ $data->dataPenduduk->status_keluarga }}</td>
                                                <td>{{ $data->dataPenduduk->kecamatan }}</td>
                                                <td>{{ $data->dataPenduduk->kelurahan }}</td>
                                                <td>{{ $data->dataPenduduk->rw }}</td>
                                                <td>{{ $data->dataPenduduk->rt }}</td>
                                                <td>
                                                    <div class="btn-list">
                                                        <button @click="$dispatch('details', {id:{{ $data->id }}})" type="button" class="btn btn-icon btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#modalDetailSurveiKrs"><i class="fe fe-eye"></i></button>
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
                            {{ $dataSurveiKrs->links(data: ['scrollTo' => false]) }}
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- COL-END -->
    </div>

    <livewire:kota.components.modal-detail-survei-krs-index>
    <livewire:kota.components.modal-import-survei-krs-index>
</div>

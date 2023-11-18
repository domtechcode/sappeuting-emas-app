<div>
    <div class="modal fade" wire:ignore.self id="modalEditPenduduk" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit User</h5>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
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

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Nomor Keluarga Indonesia</label>
                                <input name="nomor_keluarga_indonesiaEdit" type="text"
                                    class="form-control @error('nomor_keluarga_indonesiaEdit') is-invalid @enderror" placeholder="Nomor Keluarga Indonesia"
                                    autocomplete="off" wire:model="nomor_keluarga_indonesiaEdit">
                            </div>
                            @error('nomor_keluarga_indonesiaEdit')
                                <div><span class="text-danger">{{ $message }}</span></div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Nama Kepala Keluarga</label>
                                <input name="nama_kepala_keluargaEdit" type="text"
                                    class="form-control @error('nama_kepala_keluargaEdit') is-invalid @enderror" placeholder="Nama Kepala Keluarga"
                                    autocomplete="off" wire:model="nama_kepala_keluargaEdit">
                            </div>
                            @error('nama_kepala_keluargaEdit')
                                <div><span class="text-danger">{{ $message }}</span></div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Nama Istri</label>
                                <input name="nama_istriEdit" type="text"
                                    class="form-control @error('nama_istriEdit') is-invalid @enderror" placeholder="Nama Istri"
                                    autocomplete="off" wire:model="nama_istriEdit">
                            </div>
                            @error('nama_istriEdit')
                                <div><span class="text-danger">{{ $message }}</span></div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Status Keluarga</label>
                                <input name="nama_istriEdit" type="text"
                                    class="form-control @error('status_keluargaEdit') is-invalid @enderror" placeholder="Status Keluarga"
                                    autocomplete="off" wire:model="status_keluargaEdit">
                            </div>
                            @error('status_keluargaEdit')
                                <div><span class="text-danger">{{ $message }}</span></div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Kecamatan</label>
                                <select name="kecamatanEdit" wire:model="kecamatanEdit"
                                    class="form-control form-select @error('kecamatanEdit') is-invalid @enderror">
                                    <option label="Pilih Kecamatan"></option>
                                    @foreach ($dataEditKecamatan as $kecamatan)
                                        <option value="{{ $kecamatan->nama_kecamatan }}">
                                            {{ $kecamatan->nama_kecamatan }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('kecamatanEdit')
                                <div><span class="text-danger">{{ $message }}</span></div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Kelurahan</label>
                                <select name="kelurahanEdit" wire:model="kelurahanEdit"
                                    class="form-control form-select @error('kelurahanEdit') is-invalid @enderror">
                                    <option label="Pilih Kelurahan"></option>
                                    @foreach ($dataEditKelurahan as $kelurahan)
                                        <option value="{{ $kelurahan->nama_kelurahan }}">
                                            {{ $kelurahan->nama_kelurahan }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('kelurahanEdit')
                                <div><span class="text-danger">{{ $message }}</span></div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">RW</label>
                                <select name="rwEdit" wire:model="rwEdit"
                                    class="form-control form-select @error('rwEdit') is-invalid @enderror">
                                    <option label="Pilih RW"></option>
                                    @foreach ($dataEditRw as $rw)
                                        <option value="{{ $rw->nomor_rw }}">
                                            {{ $rw->nomor_rw }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('rwEdit')
                                <div><span class="text-danger">{{ $message }}</span></div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">RT</label>
                                <select name="rtEdit" wire:model="rtEdit"
                                    class="form-control form-select @error('rtEdit') is-invalid @enderror">
                                    <option label="Pilih RT"></option>
                                    @foreach ($dataEditRt as $rt)
                                        <option value="{{ $rt->nomor_rt }}">
                                            {{ $rt->nomor_rt }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('rtEdit')
                                <div><span class="text-danger">{{ $message }}</span></div>
                            @enderror
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" wire:click="update()" class="btn btn-info">Update</button>
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        window.addEventListener('closeModalAndReset', event => {
            $('#modalEditPenduduk').modal('hide');
        });
    </script>
@endpush

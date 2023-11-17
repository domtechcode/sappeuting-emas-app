<div>
    <div class="modal fade" wire:ignore.self id="modalEditUser" tabindex="-1" role="dialog">
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
                                <label class="form-label">Nama</label>
                                <input name="namaEdit" type="text"
                                    class="form-control @error('namaEdit') is-invalid @enderror" placeholder="NamaEdit"
                                    autocomplete="off" wire:model="namaEdit">
                            </div>
                            @error('namaEdit')
                                <div><span class="text-danger">{{ $message }}</span></div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Role User</label>
                                <select name="roleEdit" wire:model="roleEdit"
                                    class="form-control form-select @error('roleEdit') is-invalid @enderror">
                                    <option label="Pilih Role User"></option>
                                    <option value="admin-kota">Admin Kota</option>
                                    <option value="admin-kecamatan">Admin Kecamatan</option>
                                    <option value="admin-kelurahan">Admin Kelurahan</option>
                                    <option value="admin-kader">Admin Kader</option>
                                </select>
                            </div>
                            @error('roleEdit')
                                <div><span class="text-danger">{{ $message }}</span></div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Username</label>
                                <input name="usernameEdit" wire:model.defer="usernameEdit" type="text"
                                    class="form-control @error('usernameEdit') is-invalid @enderror"
                                    placeholder="Username" autocomplete="off">
                            </div>
                            @error('usernameEdit')
                                <div><span class="text-danger">{{ $message }}</span></div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Password</label>
                                <input name="passwordEdit" wire:model.defer="passwordEdit" type="password"
                                    class="form-control @error('passwordEdit') is-invalid @enderror"
                                    placeholder="Password" autocomplete="off">
                            </div>
                            @error('passwordEdit')
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
{{-- <script>
    $(function() {
        // Inisialisasi Select2
        $('#roleEdit').select2({
            placeholder: 'Pilih Role User',
        });

        // Set nilai awal
        $('#roleEdit').val(@json($roleEdit));

        // Trigger perubahan
        $('#roleEdit').trigger('change');

        // Menangani perubahan
        $('#roleEdit').on('change', function() {
            @this.set('roleEdit', $(this).val());
        });
    });
</script> --}}
<script>
window.addEventListener('closeModal', event => {
            $('#modalEditUser').modal('hide');
        });
</script>

@endpush

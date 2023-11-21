<div>
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <h1 class="page-title">Form Validasi</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Form Validasi</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- ROW-1 OPEN -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Data Kartu Keluarga Indonesia</div>
                    <div class="card-options">
                        <a href="{{ route('dashboardAdminKader') }}" class="btn btn-dark"><i
                                class="fe fe-arrow-left me-2"></i>Kembali ke dashboard</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label">Nomor Kependudukan Indonesia</label>
                                <ul class="list-group no-margin">
                                    <li class="list-group-item d-flex ps-3">
                                        <div class="social social-profile-buttons me-2">
                                            <a class="social-icon text-primary" href="javascript:void(0)"><i
                                                    class="fe fe-file-text"></i></a>
                                        </div>
                                        <a href="javascript:void(0)" class="my-auto">{{ $nik }}</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Nama Kepala Keluarga</label>
                                <ul class="list-group no-margin">
                                    <li class="list-group-item d-flex ps-3">
                                        <div class="social social-profile-buttons me-2">
                                            <a class="social-icon text-primary" href="javascript:void(0)"><i
                                                    class="fe fe-user"></i></a>
                                        </div>
                                        <a href="javascript:void(0)" class="my-auto">{{ $nama_kepala_keluarga }}</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Nama Istri</label>
                                <ul class="list-group no-margin">
                                    <li class="list-group-item d-flex ps-3">
                                        <div class="social social-profile-buttons me-2">
                                            <a class="social-icon text-primary" href="javascript:void(0)"><i
                                                    class="fe fe-user"></i></a>
                                        </div>
                                        <a href="javascript:void(0)" class="my-auto">{{ $nama_istri }}</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Status Keluarga</label>
                                <ul class="list-group no-margin">
                                    <li class="list-group-item d-flex ps-3">
                                        <div class="social social-profile-buttons me-2">
                                            <a class="social-icon text-primary" href="javascript:void(0)"><i
                                                    class="fe fe-file"></i></a>
                                        </div>
                                        <input type="text" name="status_keluarga" wire:model.defer="status_keluarga"
                                            class="form-control" autocomplete="off" placeholder="Status Keluarga">
                                    </li>
                                    @error('status_keluarga')
                                        <div><span class="text-danger">{{ $message }}</span></div>
                                    @enderror
                                </ul>
                            </div>
                            <div class="form-group">
                                <label class="form-label">No Handphone</label>
                                <ul class="list-group no-margin">
                                    <li class="list-group-item d-flex ps-3">
                                        <div class="social social-profile-buttons me-2">
                                            <a class="social-icon text-primary" href="javascript:void(0)"><i
                                                    class="fe fe-phone"></i></a>
                                        </div>
                                        <input type="text" name="no_handphone" wire:model.defer="no_handphone"
                                            class="form-control" autocomplete="off" placeholder="No Handphone">
                                    </li>
                                    @error('no_handphone')
                                        <div><span class="text-danger">{{ $message }}</span></div>
                                    @enderror
                                </ul>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Koordinat</label>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" id="latitude" name="latitude" wire:model.defer="latitude"
                                            class="form-control" placeholder="Latitude" autocomplete="off">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" id="longitude" name="longitude"
                                            wire:model.defer="longitude" class="form-control" placeholder="Longitude"
                                            autocomplete="off">
                                    </div>
                                    <button type="button" class="btn btn-primary mt-3"
                                        onclick="requestGeolocationPermission()">Izinkan GPS</button>

                                    @error('latitude')
                                        <div><span class="text-danger">{{ $message }}</span></div>
                                    @enderror
                                    @error('longitude')
                                        <div><span class="text-danger">{{ $message }}</span></div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div id="map" wire:ignore></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-xl-12">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Survei</h3>
                        </div>
                        <div class="card-body">
                            {{-- krs --}}
                            <div class="row">
                                <div class="col-sm-3 mb-3">
                                    <div class="example text-center">
                                        <img class="mb-4 "
                                            src="{{ asset('assets/images/brand/undraw_Love_re_mwbq.png') }}"
                                            alt="Generic placeholder image" style="width:50%; height: 50%;">
                                        <div class="media media-lg mt-0">
                                            <div class="media-body">
                                                <h4 class="mt-0">Pasangan usia subur</h4>
                                                <div class="form-group">
                                                    <label class="custom-switch form-switch me-5">
                                                        <input type="radio" name="answer_3"
                                                            wire:model.defer="answer_3" class="custom-switch-input"
                                                            value="V">
                                                        <span
                                                            class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                        <span class="custom-switch-description">Ya</span>
                                                    </label>
                                                    <label class="custom-switch form-switch">
                                                        <input type="radio" name="answer_3"
                                                            wire:model.defer="answer_3" class="custom-switch-input"
                                                            value="X">
                                                        <span
                                                            class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                        <span class="custom-switch-description">Tidak</span>
                                                    </label>
                                                    @error('answer_3')
                                                        <div><span class="text-danger">{{ $message }}</span></div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 mb-3">
                                    <div class="example text-center">
                                        <img class="mb-4 "
                                            src="{{ asset('assets/images/brand/undraw_expecting_l6j1.png') }}"
                                            alt="Generic placeholder image" style="width:50%; height: 50%;">
                                        <div class="media media-lg mt-0">
                                            <div class="media-body">
                                                <h4 class="mt-0">Pasangan usia subur hamil</h4>
                                                <div class="form-group">
                                                    <label class="custom-switch form-switch me-5">
                                                        <input type="radio" name="answer_4"
                                                            wire:model.defer="answer_4" class="custom-switch-input"
                                                            value="V">
                                                        <span
                                                            class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                        <span class="custom-switch-description">Ya</span>
                                                    </label>
                                                    <label class="custom-switch form-switch">
                                                        <input type="radio" name="answer_4"
                                                            wire:model.defer="answer_4" class="custom-switch-input"
                                                            value="X">
                                                        <span
                                                            class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                        <span class="custom-switch-description">Tidak</span>
                                                    </label>
                                                    @error('answer_4')
                                                        <div><span class="text-danger">{{ $message }}</span></div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 mb-3">
                                    <div class="example text-center">
                                        <img class="mb-4 "
                                            src="{{ asset('assets/images/brand/undraw_Baby_re_fr9r.png') }}"
                                            alt="Generic placeholder image" style="width:50%; height: 50%;">
                                        <div class="media media-lg mt-0">
                                            <div class="media-body">
                                                <h4 class="mt-0">Mempunyai anak baduta <br> (0-23 Bulan)</h4>
                                                <div class="form-group">
                                                    <label class="custom-switch form-switch me-5">
                                                        <input type="radio" name="answer_1"
                                                            wire:model.defer="answer_1" class="custom-switch-input"
                                                            value="V">
                                                        <span
                                                            class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                        <span class="custom-switch-description">Ya</span>
                                                    </label>
                                                    <label class="custom-switch form-switch">
                                                        <input type="radio" name="answer_1"
                                                            wire:model.defer="answer_1" class="custom-switch-input"
                                                            value="X">
                                                        <span
                                                            class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                        <span class="custom-switch-description">Tidak</span>
                                                    </label>
                                                    @error('answer_1')
                                                        <div><span class="text-danger">{{ $message }}</span></div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 mb-3">
                                    <div class="example text-center">
                                        <img class="mb-4 "
                                            src="{{ asset('assets/images/brand/undraw_toy_car_7umw.png') }}"
                                            alt="Generic placeholder image" style="width:50%; height: 50%;">
                                        <div class="media media-lg mt-0">
                                            <div class="media-body">
                                                <h4 class="mt-0">Mempunyai anak balita <br> (24-50 Bulan)</h4>
                                                <div class="form-group">
                                                    <label class="custom-switch form-switch me-5">
                                                        <input type="radio" name="answer_2"
                                                            wire:model.defer="answer_2" class="custom-switch-input"
                                                            value="V">
                                                        <span
                                                            class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                        <span class="custom-switch-description">Ya</span>
                                                    </label>
                                                    <label class="custom-switch form-switch">
                                                        <input type="radio" name="answer_2"
                                                            wire:model.defer="answer_2" class="custom-switch-input"
                                                            value="X">
                                                        <span
                                                            class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                        <span class="custom-switch-description">Tidak</span>
                                                    </label>
                                                    @error('answer_2')
                                                        <div><span class="text-danger">{{ $message }}</span></div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 mb-3">
                                    <div class="example text-center">
                                        <img class="mb-4 "
                                            src="{{ asset('assets/images/brand/undraw_Energizer_re_vhjv.png') }}"
                                            alt="Generic placeholder image" style="width:50%; height: 50%;">
                                        <div class="media media-lg mt-0">
                                            <div class="media-body">
                                                <h4 class="mt-0">Apakah keluarga tidak memiliki sumber air minum yang
                                                    layak?</h4>
                                                <div class="form-group">
                                                    <label class="custom-switch form-switch me-5">
                                                        <input type="radio" name="answer_5"
                                                            wire:model.defer="answer_5" class="custom-switch-input"
                                                            value="V">
                                                        <span
                                                            class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                        <span class="custom-switch-description">Ya</span>
                                                    </label>
                                                    <label class="custom-switch form-switch">
                                                        <input type="radio" name="answer_5"
                                                            wire:model.defer="answer_5" class="custom-switch-input"
                                                            value="X">
                                                        <span
                                                            class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                        <span class="custom-switch-description">Tidak</span>
                                                    </label>
                                                    @error('answer_5')
                                                        <div><span class="text-danger">{{ $message }}</span></div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 mb-3">
                                    <div class="example text-center">
                                        <img class="mb-4 "
                                            src="{{ asset('assets/images/brand/undraw_wash_hands_nwl2.png') }}"
                                            alt="Generic placeholder image" style="width:50%; height: 50%;">
                                        <div class="media media-lg mt-0">
                                            <div class="media-body">
                                                <h4 class="mt-0">Apakah keluarga tidak memiliki jamban yang layak?
                                                </h4>
                                                <div class="form-group">
                                                    <label class="custom-switch form-switch me-5">
                                                        <input type="radio" name="answer_6"
                                                            wire:model.defer="answer_6" class="custom-switch-input"
                                                            value="V">
                                                        <span
                                                            class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                        <span class="custom-switch-description">Ya</span>
                                                    </label>
                                                    <label class="custom-switch form-switch">
                                                        <input type="radio" name="answer_6"
                                                            wire:model.defer="answer_6" class="custom-switch-input"
                                                            value="X">
                                                        <span
                                                            class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                        <span class="custom-switch-description">Tidak</span>
                                                    </label>
                                                    @error('answer_6')
                                                        <div><span class="text-danger">{{ $message }}</span></div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 mb-3">
                                    <div class="example text-center">
                                        <img class="mb-4 "
                                            src="{{ asset('assets/images/brand/undraw_Working_out_re_nhkg.png') }}"
                                            alt="Generic placeholder image" style="width:50%; height: 50%;">
                                        <div class="media media-lg mt-0">
                                            <div class="media-body">
                                                <h4 class="mt-0">Terlalu muda (Umur istri < 20 Tahun)</h4>
                                                        <div class="form-group">
                                                            <label class="custom-switch form-switch me-5">
                                                                <input type="radio" name="answer_7"
                                                                    wire:model.defer="answer_7"
                                                                    class="custom-switch-input" value="V">
                                                                <span
                                                                    class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                                <span class="custom-switch-description">Ya</span>
                                                            </label>
                                                            <label class="custom-switch form-switch">
                                                                <input type="radio" name="answer_7"
                                                                    wire:model.defer="answer_7"
                                                                    class="custom-switch-input" value="X">
                                                                <span
                                                                    class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                                <span class="custom-switch-description">Tidak</span>
                                                            </label>
                                                            @error('answer_7')
                                                                <div><span class="text-danger">{{ $message }}</span>
                                                                </div>
                                                            @enderror
                                                        </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 mb-3">
                                    <div class="example text-center">
                                        <img class="mb-4 "
                                            src="{{ asset('assets/images/brand/undraw_quality_time_wiyl.png') }}"
                                            alt="Generic placeholder image" style="width:50%; height: 50%;">
                                        <div class="media media-lg mt-0">
                                            <div class="media-body">
                                                <h4 class="mt-0">Terlalu tua (Umur istri 35 Tahun s/d 40 Tahun)</h4>
                                                <div class="form-group">
                                                    <label class="custom-switch form-switch me-5">
                                                        <input type="radio" name="answer_8"
                                                            wire:model.defer="answer_8" class="custom-switch-input"
                                                            value="V">
                                                        <span
                                                            class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                        <span class="custom-switch-description">Ya</span>
                                                    </label>
                                                    <label class="custom-switch form-switch">
                                                        <input type="radio" name="answer_8"
                                                            wire:model.defer="answer_8" class="custom-switch-input"
                                                            value="X">
                                                        <span
                                                            class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                        <span class="custom-switch-description">Tidak</span>
                                                    </label>
                                                    @error('answer_8')
                                                        <div><span class="text-danger">{{ $message }}</span></div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 mb-3">
                                    <div class="example text-center">
                                        <img class="mb-4 "
                                            src="{{ asset('assets/images/brand/undraw_Motherhood_re_pk2m.png') }}"
                                            alt="Generic placeholder image" style="width:50%; height: 50%;">
                                        <div class="media media-lg mt-0">
                                            <div class="media-body">
                                                <h4 class="mt-0">Terlalu Dekat (< 2 Tahun)</h4>
                                                        <div class="form-group">
                                                            <label class="custom-switch form-switch me-5">
                                                                <input type="radio" name="answer_9"
                                                                    wire:model.defer="answer_9"
                                                                    class="custom-switch-input" value="V">
                                                                <span
                                                                    class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                                <span class="custom-switch-description">Ya</span>
                                                            </label>
                                                            <label class="custom-switch form-switch">
                                                                <input type="radio" name="answer_9"
                                                                    wire:model.defer="answer_9"
                                                                    class="custom-switch-input" value="X">
                                                                <span
                                                                    class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                                <span class="custom-switch-description">Tidak</span>
                                                            </label>
                                                            @error('answer_9')
                                                                <div><span class="text-danger">{{ $message }}</span>
                                                                </div>
                                                            @enderror
                                                        </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 mb-3">
                                    <div class="example text-center">
                                        <img class="mb-4 "
                                            src="{{ asset('assets/images/brand/undraw_Children_re_c37f.png') }}"
                                            alt="Generic placeholder image" style="width:50%; height: 50%;">
                                        <div class="media media-lg mt-0">
                                            <div class="media-body">
                                                <h4 class="mt-0">Terlalu Banyak (< 3 Anak)</h4>
                                                        <div class="form-group">
                                                            <label class="custom-switch form-switch me-5">
                                                                <input type="radio" name="answer_10"
                                                                    wire:model.defer="answer_10"
                                                                    class="custom-switch-input" value="V">
                                                                <span
                                                                    class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                                <span class="custom-switch-description">Ya</span>
                                                            </label>
                                                            <label class="custom-switch form-switch">
                                                                <input type="radio" name="answer_10"
                                                                    wire:model.defer="answer_10"
                                                                    class="custom-switch-input" value="X">
                                                                <span
                                                                    class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                                <span class="custom-switch-description">Tidak</span>
                                                            </label>
                                                            @error('answer_10')
                                                                <div><span class="text-danger">{{ $message }}</span>
                                                                </div>
                                                            @enderror
                                                        </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 mb-3">
                                    <div class="example text-center">
                                        <img class="mb-4 "
                                            src="{{ asset('assets/images/brand/undraw_medical_care_movn.png') }}"
                                            alt="Generic placeholder image" style="width:50%; height: 50%;">
                                        <div class="media media-lg mt-0">
                                            <div class="media-body">
                                                <h4 class="mt-0">Bukan peserta KB Modern</h4>
                                                <div class="form-group">
                                                    <label class="custom-switch form-switch me-5">
                                                        <input type="radio" name="answer_11"
                                                            wire:model.defer="answer_11" class="custom-switch-input"
                                                            value="V">
                                                        <span
                                                            class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                        <span class="custom-switch-description">Ya</span>
                                                    </label>
                                                    <label class="custom-switch form-switch">
                                                        <input type="radio" name="answer_11"
                                                            wire:model.defer="answer_11" class="custom-switch-input"
                                                            value="X">
                                                        <span
                                                            class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                        <span class="custom-switch-description">Tidak</span>
                                                    </label>
                                                    @error('answer_11')
                                                        <div><span class="text-danger">{{ $message }}</span></div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 mb-3">
                                    <div class="example text-center">
                                        <img class="mb-4 "
                                            src="{{ asset('assets/images/brand/undraw_true_friends_c94g.png') }}"
                                            alt="Generic placeholder image" style="width:50%; height: 50%;">
                                        <div class="media media-lg mt-0">
                                            <div class="media-body">
                                                <h4 class="mt-0">Kategori keluarga beresiko stunting</h4>
                                                <div class="form-group">
                                                    <label class="custom-switch form-switch me-5">
                                                        <input type="radio" name="answer_12"
                                                            wire:model.defer="answer_12" class="custom-switch-input"
                                                            value="V">
                                                        <span
                                                            class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                        <span class="custom-switch-description">Ya</span>
                                                    </label>
                                                    <label class="custom-switch form-switch">
                                                        <input type="radio" name="answer_12"
                                                            wire:model.defer="answer_12" class="custom-switch-input"
                                                            value="X">
                                                        <span
                                                            class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                        <span class="custom-switch-description">Tidak</span>
                                                    </label>
                                                    @error('answer_12')
                                                        <div><span class="text-danger">{{ $message }}</span></div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 mb-3">
                                    <div class="example text-center">
                                        <img class="mb-4"
                                            src="{{ asset('assets/images/brand/undraw_reviews_lp8w.png') }}"
                                            alt="Generic placeholder image" style="width:50%; height: 50%;">
                                        <div class="media media-lg mt-0">
                                            <div class="media-body">
                                                <h4 class="mt-0">Tingkah kesejahteraan</h4>
                                                <div class="form-group">
                                                    <select name="answer_13" wire:model="answer_13"
                                                        class="form-control form-select @error('answer_13') is-invalid @enderror">
                                                        <option label="Pilih tingkah kesejahteraan"></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">Lebih dari 4</option>
                                                    </select>

                                                    @error('answer_13')
                                                        <div><span class="text-danger">{{ $message }}</span></div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 mb-3">
                                    <div class="example text-center">
                                        <img class="mb-4 "
                                            src="{{ asset('assets/images/brand/undraw_wedding_re_66hj.png') }}"
                                            alt="Generic placeholder image" style="width:50%; height: 50%;">
                                        <div class="media media-lg mt-0">
                                            <div class="media-body">
                                                <h4 class="mt-0">Apakah ada anggota keluarga yang memiliki rencana
                                                    menikah dalam 3 bulan ke depan?</h4>
                                                <div class="form-group">
                                                    <label class="custom-switch form-switch me-5">
                                                        <input type="radio" name="answer_14"
                                                            wire:model.defer="answer_14" class="custom-switch-input"
                                                            value="V">
                                                        <span
                                                            class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                        <span class="custom-switch-description">Ya</span>
                                                    </label>
                                                    <label class="custom-switch form-switch">
                                                        <input type="radio" name="answer_14"
                                                            wire:model.defer="answer_14" class="custom-switch-input"
                                                            value="X">
                                                        <span
                                                            class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                        <span class="custom-switch-description">Tidak</span>
                                                    </label>
                                                    @error('answer_14')
                                                        <div><span class="text-danger">{{ $message }}</span></div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 mb-3">
                                    <div class="example text-center">
                                        <img class="mb-4 "
                                            src="{{ asset('assets/images/brand/undraw_Team_spirit_re_yl1v.png') }}"
                                            alt="Generic placeholder image" style="width:50%; height: 50%;">
                                        <div class="media media-lg mt-0">
                                            <div class="media-body">
                                                <h4 class="mt-0">Pendampingan oleh TPK</h4>
                                                <div class="form-group">
                                                    <label class="custom-switch form-switch me-5">
                                                        <input type="radio" name="answer_15"
                                                            wire:model.defer="answer_15" class="custom-switch-input"
                                                            value="V">
                                                        <span
                                                            class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                        <span class="custom-switch-description">Ya</span>
                                                    </label>
                                                    <label class="custom-switch form-switch">
                                                        <input type="radio" name="answer_15"
                                                            wire:model.defer="answer_15" class="custom-switch-input"
                                                            value="X">
                                                        <span
                                                            class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                        <span class="custom-switch-description">Tidak</span>
                                                    </label>
                                                    @error('answer_15')
                                                        <div><span class="text-danger">{{ $message }}</span></div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 mb-3">
                                    <div class="example text-center">
                                        <img class="mb-4 "
                                            src="{{ asset('assets/images/brand/undraw_family_vg76.png') }}"
                                            alt="Generic placeholder image" style="width:50%; height: 50%;">
                                        <div class="media media-lg mt-0">
                                            <div class="media-body">
                                                <h4 class="mt-0">Jumlah anggota keluarga</h4>
                                                <div class="form-group">
                                                    <input type="text" name="answer_16"
                                                        wire:model.defer="answer_16" class="form-control"
                                                        autocomplete="off" placeholder="Jumlah anggota keluarga">
                                                    @error('answer_16')
                                                        <div><span class="text-danger">{{ $message }}</span></div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 mb-3">
                                    <div class="example text-center">
                                        <img class="mb-4 "
                                            src="{{ asset('assets/images/brand/undraw_under_construction_46pa.png') }}"
                                            alt="Generic placeholder image" style="width:50%; height: 50%;">
                                        <div class="media media-lg mt-0">
                                            <div class="media-body">
                                                <h4 class="mt-0">Jumlah anggota keluarga yang berprofesi sebagai
                                                    tukang bangunan</h4>
                                                <div class="form-group">
                                                    <input type="text" name="answer_17"
                                                        wire:model.defer="answer_17" class="form-control"
                                                        autocomplete="off"
                                                        placeholder="Jumlah anggota keluarga yang berprofesi sebagai tukang bangunan">
                                                    @error('answer_17')
                                                        <div><span class="text-danger">{{ $message }}</span></div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 mb-3">
                                    <div class="example text-center">
                                        <img class="mb-4 "
                                            src="{{ asset('assets/images/brand/undraw_Transfer_money_re_6o1h.png') }}"
                                            alt="Generic placeholder image" style="width:50%; height: 50%;">
                                        <div class="media media-lg mt-0">
                                            <div class="media-body">
                                                <h4 class="mt-0">Pengeluaran rata-rata per bulan</h4>
                                                <div class="form-group">
                                                    <select name="answer_18" wire:model="answer_18"
                                                        class="form-control form-select @error('answer_18') is-invalid @enderror">
                                                        <option label="Pilih pengeluaran rata-rata per bulan"></option>
                                                        <option value="1">Lebih dari 5 Juta</option>
                                                        <option value="2">Kurang dari 4 Juta</option>
                                                        <option value="3">Kurang dari 3 Juta</option>
                                                        <option value="4">Kurang dari 2 Juta</option>
                                                        <option value="5">Kurang dari 1 Juta</option>
                                                    </select>

                                                    @error('answer_18')
                                                        <div><span class="text-danger">{{ $message }}</span></div>
                                                    @enderror
                                                </div>
                                                <h4 class="mt-0">Jumlah tanggungan keluarga</h4>
                                                <div class="form-group">
                                                    <select name="answer_19" wire:model="answer_19"
                                                        class="form-control form-select @error('answer_19') is-invalid @enderror">
                                                        <option label="Pilih Jumlah tanggungan keluarga"></option>
                                                        <option value="1">Tidak ada</option>
                                                        <option value="2">1 Jiwa</option>
                                                        <option value="3">2 Jiwa</option>
                                                        <option value="4">3 Jiwa</option>
                                                        <option value="5">4 Jiwa</option>
                                                        <option value="6">5 Jiwa</option>
                                                        <option value="7">Lebih dari 5 Jiwa</option>
                                                    </select>
                                                    @error('answer_19')
                                                        <div><span class="text-danger">{{ $message }}</span></div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            @if ($state != 'krs')
                                {{-- p3ke --}}
                                <div class="row">
                                    <div class="col-sm-3 mb-3">
                                        <div class="example">
                                            <div class="d-flex justify-content-center">
                                                <img class="mb-4"
                                                    src="{{ asset('assets/images/brand/undraw_Onboarding_re_6osc.png') }}"
                                                    alt="Generic placeholder image" style="width:50%; height: 50%;">
                                            </div>

                                            <div class="media media-lg mt-0">
                                                <div class="media-body">
                                                    <h4 class="mt-0 text-center">Jenis Penerimaan Bantuan</h4>
                                                    <div class="form-row">
                                                        <div class="col-6 d-flex justify-content-center">
                                                            <div class="form-group">
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="penerimaanBantuan[]"
                                                                            wire:model="penerimaanBantuan.bpnt"
                                                                            value="bpnt"
                                                                            {{ $penerimaanBantuan['bpnt'] == '1' ? 'checked' : '' }}>
                                                                        <span class="custom-control-label">BPNT</span>
                                                                    </label>
                                                                </div>
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="penerimaanBantuan[]"
                                                                            wire:model="penerimaanBantuan.bpum"
                                                                            value="bpum"
                                                                            {{ $penerimaanBantuan['bpum'] == '1' ? 'checked' : '' }}>
                                                                        <span class="custom-control-label">BPUM</span>
                                                                    </label>
                                                                </div>
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="penerimaanBantuan[]"
                                                                            wire:model="penerimaanBantuan.bst"
                                                                            value="bst"
                                                                            {{ $penerimaanBantuan['bst'] == '1' ? 'checked' : '' }}>
                                                                        <span class="custom-control-label">BST</span>
                                                                    </label>
                                                                </div>
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="penerimaanBantuan[]"
                                                                            wire:model="penerimaanBantuan.pkh"
                                                                            value="pkh"
                                                                            {{ $penerimaanBantuan['pkh'] == '1' ? 'checked' : '' }}>
                                                                        <span class="custom-control-label">PKH</span>
                                                                    </label>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="col-6 d-flex justify-content-center">
                                                            <div class="form-group">
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="penerimaanBantuan[]"
                                                                            wire:model="penerimaanBantuan.sembako"
                                                                            value="sembako"
                                                                            {{ $penerimaanBantuan['sembako'] == '1' ? 'checked' : '' }}>
                                                                        <span
                                                                            class="custom-control-label">Sembako</span>
                                                                    </label>
                                                                </div>
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="penerimaanBantuan[]"
                                                                            wire:model="penerimaanBantuan.pra_kerja"
                                                                            value="pra_kerja"
                                                                            {{ $penerimaanBantuan['pra_kerja'] == '1' ? 'checked' : '' }}>
                                                                        <span class="custom-control-label">Pra
                                                                            Kerja</span>
                                                                    </label>
                                                                </div>
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="penerimaanBantuan[]"
                                                                            wire:model="penerimaanBantuan.kur"
                                                                            value="kur"
                                                                            {{ $penerimaanBantuan['kur'] == '1' ? 'checked' : '' }}>
                                                                        <span class="custom-control-label">KUR</span>
                                                                    </label>
                                                                </div>
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="penerimaanBantuan[]"
                                                                            wire:model="penerimaanBantuan.bantuan_lainnya"
                                                                            value="bantuan_lainnya"
                                                                            {{ $penerimaanBantuan['bantuan_lainnya'] == '1' ? 'checked' : '' }}>
                                                                        <span
                                                                            class="custom-control-label">Lainnya</span>
                                                                    </label>
                                                                    <div class="form-group">
                                                                        <input type="text"
                                                                            name="isian_bantuan_lainnya"
                                                                            wire:model.defer="isian_bantuan_lainnya"
                                                                            class="form-control" autocomplete="off"
                                                                            placeholder="Lainnya">
                                                                        @error('isian_bantuan_lainnya')
                                                                            <div><span
                                                                                    class="text-danger">{{ $message }}</span>
                                                                            </div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 mb-3">
                                        <div class="example">
                                            <div class="d-flex justify-content-center">
                                                <img class="mb-4"
                                                    src="{{ asset('assets/images/brand/undraw_Revenue_re_2bmg.png') }}"
                                                    alt="Generic placeholder image" style="width:50%; height: 50%;">
                                            </div>

                                            <div class="media media-lg mt-0">
                                                <div class="media-body">
                                                    <h4 class="mt-0 text-center">Selama 6 (enam) bulan terakhir,
                                                        terdapat
                                                        paling sedikit 1 (satu), anggota keluarga memiliki sumber
                                                        penghasilan untuk memenuhi kebutuhan pokok per bulan</h4>
                                                    <div class="form-row">
                                                        <div class="col-12 d-flex justify-content-center">
                                                            <div class="form-group">
                                                                <label class="custom-switch form-switch me-5">
                                                                    <input type="radio" name="sumber_penghasilan"
                                                                        wire:model.defer="sumber_penghasilan"
                                                                        class="custom-switch-input" value="1">
                                                                    <span
                                                                        class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                                    <span class="custom-switch-description">Ya</span>
                                                                </label>
                                                                <label class="custom-switch form-switch">
                                                                    <input type="radio" name="sumber_penghasilan"
                                                                        wire:model.defer="sumber_penghasilan"
                                                                        class="custom-switch-input" value="2">
                                                                    <span
                                                                        class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                                    <span
                                                                        class="custom-switch-description">Tidak</span>
                                                                </label>
                                                                @error('sumber_penghasilan')
                                                                    <div><span
                                                                            class="text-danger">{{ $message }}</span>
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 mb-3">
                                        <div class="example">
                                            <div class="d-flex justify-content-center">
                                                <img class="mb-4"
                                                    src="{{ asset('assets/images/brand/undraw_order_a_car_3tww.png') }}"
                                                    alt="Generic placeholder image" style="width:50%; height: 50%;">
                                            </div>

                                            <div class="media media-lg mt-0">
                                                <div class="media-body">
                                                    <h4 class="mt-0 text-center">Keluarga memiliki aset</h4>
                                                    <div class="form-row">
                                                        <div class="col-12 d-flex justify-content-center">
                                                            <div class="form-group">
                                                                <label class="custom-switch form-switch me-5">
                                                                    <input type="radio" name="aset"
                                                                        wire:model.live="aset"
                                                                        class="custom-switch-input" value="1">
                                                                    <span
                                                                        class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                                    <span class="custom-switch-description">Ya</span>
                                                                </label>
                                                                <label class="custom-switch form-switch">
                                                                    <input type="radio" name="aset"
                                                                        wire:model.live="aset"
                                                                        class="custom-switch-input" value="2">
                                                                    <span
                                                                        class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                                    <span
                                                                        class="custom-switch-description">Tidak</span>
                                                                </label>
                                                                @error('aset')
                                                                    <div><span
                                                                            class="text-danger">{{ $message }}</span>
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h4 class="mt-0 text-center">Jika Ya, Aset apa yang dimiliki</h4>
                                                    <div class="form-row">
                                                        <div class="col-6 d-flex justify-content-center">
                                                            <div class="form-group">
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="jenisAset[]"
                                                                            wire:model="jenisAset.tabungan"
                                                                            value="tabungan"
                                                                            {{ $jenisAset['tabungan'] == '1' ? 'checked' : '' }}
                                                                            {{ $aset != 1 ? 'disabled' : '' }}>
                                                                        <span
                                                                            class="custom-control-label">Tabungan</span>
                                                                    </label>
                                                                </div>
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="jenisAset[]"
                                                                            wire:model="jenisAset.ac" value="ac"
                                                                            {{ $jenisAset['ac'] == '2' ? 'checked' : '' }}
                                                                            {{ $aset != 1 ? 'disabled' : '' }}>
                                                                        <span class="custom-control-label">AC</span>
                                                                    </label>
                                                                </div>
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="jenisAset[]"
                                                                            wire:model="jenisAset.televisi_layar_datar"
                                                                            value="televisi_layar_datar"
                                                                            {{ $jenisAset['televisi_layar_datar'] == '3' ? 'checked' : '' }}
                                                                            {{ $aset != 1 ? 'disabled' : '' }}>
                                                                        <span class="custom-control-label">Televisi
                                                                            layar
                                                                            datar</span>
                                                                    </label>
                                                                </div>
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="jenisAset[]"
                                                                            wire:model="jenisAset.lemari_es_kulkas"
                                                                            value="lemari_es_kulkas"
                                                                            {{ $jenisAset['lemari_es_kulkas'] == '4' ? 'checked' : '' }}
                                                                            {{ $aset != 1 ? 'disabled' : '' }}>
                                                                        <span class="custom-control-label">Lemari
                                                                            Es</span>
                                                                    </label>
                                                                </div>
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="jenisAset[]"
                                                                            wire:model="jenisAset.komputer_laptop"
                                                                            value="komputer_laptop"
                                                                            {{ $jenisAset['komputer_laptop'] == '5' ? 'checked' : '' }}
                                                                            {{ $aset != 1 ? 'disabled' : '' }}>
                                                                        <span class="custom-control-label">Komputer
                                                                            Laptop</span>
                                                                    </label>
                                                                </div>
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="jenisAset[]"
                                                                            wire:model="jenisAset.sepeda_motor"
                                                                            value="sepeda_motor"
                                                                            {{ $jenisAset['sepeda_motor'] == '6' ? 'checked' : '' }}
                                                                            {{ $aset != 1 ? 'disabled' : '' }}>
                                                                        <span class="custom-control-label">Sepeda
                                                                            Motor</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6 d-flex justify-content-center">
                                                            <div class="form-group">
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="jenisAset[]"
                                                                            wire:model="jenisAset.mobil"
                                                                            value="mobil"
                                                                            {{ $jenisAset['mobil'] == '7' ? 'checked' : '' }}
                                                                            {{ $aset != 1 ? 'disabled' : '' }}>
                                                                        <span class="custom-control-label">Mobil</span>
                                                                    </label>
                                                                </div>
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="jenisAset[]"
                                                                            wire:model="jenisAset.kapal_perahu_motor_perahu"
                                                                            value="kapal_perahu_motor_perahu"
                                                                            {{ $jenisAset['kapal_perahu_motor_perahu'] == '8' ? 'checked' : '' }}
                                                                            {{ $aset != 1 ? 'disabled' : '' }}>
                                                                        <span class="custom-control-label">Kapal/Perahu
                                                                            Motor/Perahu</span>
                                                                    </label>
                                                                </div>
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="jenisAset[]"
                                                                            wire:model="jenisAset.emas_perhiasan"
                                                                            value="emas_perhiasan"
                                                                            {{ $jenisAset['emas_perhiasan'] == '9' ? 'checked' : '' }}
                                                                            {{ $aset != 1 ? 'disabled' : '' }}>
                                                                        <span class="custom-control-label">Emas /
                                                                            perhiasan
                                                                            (minimal 10 gram)</span>
                                                                    </label>
                                                                </div>
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="jenisAset[]"
                                                                            wire:model="jenisAset.hewan_ternak"
                                                                            value="hewan_ternak"
                                                                            {{ $jenisAset['hewan_ternak'] == '10' ? 'checked' : '' }}
                                                                            {{ $aset != 1 ? 'disabled' : '' }}>
                                                                        <span class="custom-control-label">Hewan
                                                                            Ternak</span>
                                                                    </label>
                                                                </div>
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="jenisAset[]"
                                                                            wire:model="jenisAset.lahan"
                                                                            value="lahan"
                                                                            {{ $jenisAset['lahan'] == '11' ? 'checked' : '' }}
                                                                            {{ $aset != 1 ? 'disabled' : '' }}>
                                                                        <span class="custom-control-label">Lahan</span>
                                                                    </label>
                                                                </div>
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="jenisAset[]"
                                                                            wire:model="jenisAset.rumah_ditempat_lain"
                                                                            value="rumah_ditempat_lain"
                                                                            {{ $jenisAset['rumah_ditempat_lain'] == '12' ? 'checked' : '' }}
                                                                            {{ $aset != 1 ? 'disabled' : '' }}>
                                                                        <span class="custom-control-label">Rumah di
                                                                            tempat
                                                                            lain</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 mb-3">
                                        <div class="example">
                                            <div class="d-flex justify-content-center">
                                                <img class="mb-4"
                                                    src="{{ asset('assets/images/brand/undraw_sweet_home_dkhr.png') }}"
                                                    alt="Generic placeholder image" style="width:50%; height: 50%;">
                                            </div>

                                            <div class="media media-lg mt-0">
                                                <div class="media-body">
                                                    <h4 class="mt-0 text-center">Jenis atap rumah terluas</h4>
                                                    <div class="form-row">
                                                        <div class="col-12 d-flex justify-content-center">
                                                            <select name="atap_rumah_terluas"
                                                                wire:model="atap_rumah_terluas"
                                                                class="form-control form-select @error('atap_rumah_terluas') is-invalid @enderror">
                                                                <option label="Pilih jenis atap rumah terluas">
                                                                </option>
                                                                <option value="1">Beton</option>
                                                                <option value="2">Genteng</option>
                                                                <option value="3">Seng</option>
                                                                <option value="4">Asbes /
                                                                    Seng</option>
                                                                <option value="5">Kayu
                                                                    Sirap</option>
                                                                <option value="6">Bambu</option>
                                                                <option value="7">Jerami /
                                                                    Ijuk /
                                                                    Rumbia / Daun-daunan</option>
                                                                <option value="8">Lainnya</option>
                                                            </select>

                                                            @error('atap_rumah_terluas')
                                                                <div><span class="text-danger">{{ $message }}</span>
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <h4 class="mt-3 text-center">Kondisi atap</h4>
                                                    <div class="form-row">
                                                        <div class="col-12 d-flex justify-content-center">
                                                            <div class="form-group">
                                                                <label class="custom-switch form-switch me-5">
                                                                    <input type="radio" name="kondisi_atap_rumah"
                                                                        wire:model.defer="kondisi_atap_rumah"
                                                                        class="custom-switch-input" value="1">
                                                                    <span
                                                                        class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                                    <span
                                                                        class="custom-switch-description">Bagus</span>
                                                                </label>
                                                                <label class="custom-switch form-switch">
                                                                    <input type="radio" name="kondisi_atap_rumah"
                                                                        wire:model.defer="kondisi_atap_rumah"
                                                                        class="custom-switch-input" value="2">
                                                                    <span
                                                                        class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                                    <span
                                                                        class="custom-switch-description">Jelek</span>
                                                                </label>
                                                                @error('kondisi_atap_rumah')
                                                                    <div><span
                                                                            class="text-danger">{{ $message }}</span>
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 mb-3">
                                        <div class="example">
                                            <div class="d-flex justify-content-center">
                                                <img class="mb-4"
                                                    src="{{ asset('assets/images/brand/undraw_House_searching_re_stk8.png') }}"
                                                    alt="Generic placeholder image" style="width:50%; height: 50%;">
                                            </div>

                                            <div class="media media-lg mt-0">
                                                <div class="media-body">
                                                    <h4 class="mt-0 text-center">Jenis dinding rumah terluas</h4>
                                                    <div class="form-row">
                                                        <div class="col-12 d-flex justify-content-center">
                                                            <select name="dinding_rumah_terluas"
                                                                wire:model="dinding_rumah_terluas"
                                                                class="form-control form-select @error('dinding_rumah_terluas') is-invalid @enderror">
                                                                <option label="Pilih jenis dinding rumah terluas">
                                                                </option>
                                                                <option value="1">Tembok</option>
                                                                <option value="2">Plasteran</option>
                                                                <option value="3">Kayu/Papan</option>
                                                                <option value="4">Anyaman
                                                                    Bambu</option>
                                                                <option value="5">Batang
                                                                    Kayu</option>
                                                                <option value="6">Bambu</option>
                                                                <option value="7">Seng</option>
                                                                <option value="8">Lainnya</option>
                                                            </select>

                                                            @error('dinding_rumah_terluas')
                                                                <div><span class="text-danger">{{ $message }}</span>
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <h4 class="mt-3 text-center">Kondisi dinding</h4>
                                                    <div class="form-row">
                                                        <div class="col-12 d-flex justify-content-center">
                                                            <div class="form-group">
                                                                <label class="custom-switch form-switch me-5">
                                                                    <input type="radio" name="kondisi_dinding_rumah"
                                                                        wire:model.defer="kondisi_dinding_rumah"
                                                                        class="custom-switch-input" value="1">
                                                                    <span
                                                                        class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                                    <span
                                                                        class="custom-switch-description">Bagus</span>
                                                                </label>
                                                                <label class="custom-switch form-switch">
                                                                    <input type="radio" name="kondisi_dinding_rumah"
                                                                        wire:model.defer="kondisi_dinding_rumah"
                                                                        class="custom-switch-input" value="2">
                                                                    <span
                                                                        class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                                    <span
                                                                        class="custom-switch-description">Jelek</span>
                                                                </label>
                                                                @error('kondisi_dinding_rumah')
                                                                    <div><span
                                                                            class="text-danger">{{ $message }}</span>
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 mb-3">
                                        <div class="example">
                                            <div class="d-flex justify-content-center">
                                                <img class="mb-4"
                                                    src="{{ asset('assets/images/brand/undraw_Abstract_re_l9xy.png') }}"
                                                    alt="Generic placeholder image" style="width:50%; height: 50%;">
                                            </div>

                                            <div class="media media-lg mt-0">
                                                <div class="media-body">
                                                    <h4 class="mt-0 text-center">Jenis lantai rumah terluas</h4>
                                                    <div class="form-row">
                                                        <div class="col-12 d-flex justify-content-center">
                                                            <select name="lantai_rumah_terluas"
                                                                wire:model="lantai_rumah_terluas"
                                                                class="form-control form-select @error('lantai_rumah_terluas') is-invalid @enderror">
                                                                <option label="Pilih jenis lantai rumah terluas">
                                                                </option>
                                                                <option value="1">Marmer /
                                                                    granit</option>
                                                                <option value="2">Keramik</option>
                                                                <option value="3">Parket /
                                                                    Vinil
                                                                    / Karpet</option>
                                                                <option value="4">Ubin /
                                                                    Tegel /
                                                                    Teraso</option>
                                                                <option value="5">Kayu /
                                                                    Papan</option>
                                                                <option value="6">Semen /
                                                                    Bata
                                                                    Merah</option>
                                                                <option value="7">Bambu</option>
                                                                <option value="8">Tanah</option>
                                                                <option value="9">Lainnya</option>
                                                            </select>

                                                            @error('lantai_rumah_terluas')
                                                                <div><span class="text-danger">{{ $message }}</span>
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <h4 class="mt-3 text-center">Kondisi lantai rumah</h4>
                                                    <div class="form-row">
                                                        <div class="col-12 d-flex justify-content-center">
                                                            <div class="form-group">
                                                                <label class="custom-switch form-switch me-5">
                                                                    <input type="radio" name="kondisi_lantai_rumah"
                                                                        wire:model.defer="kondisi_lantai_rumah"
                                                                        class="custom-switch-input" value="1">
                                                                    <span
                                                                        class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                                    <span
                                                                        class="custom-switch-description">Bagus</span>
                                                                </label>
                                                                <label class="custom-switch form-switch">
                                                                    <input type="radio" name="kondisi_lantai_rumah"
                                                                        wire:model.defer="kondisi_lantai_rumah"
                                                                        class="custom-switch-input" value="2">
                                                                    <span
                                                                        class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                                    <span
                                                                        class="custom-switch-description">Jelek</span>
                                                                </label>
                                                                @error('kondisi_lantai_rumah')
                                                                    <div><span
                                                                            class="text-danger">{{ $message }}</span>
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 mb-3">
                                        <div class="example">
                                            <div class="d-flex justify-content-center">
                                                <img class="mb-4"
                                                    src="{{ asset('assets/images/brand/undraw_electricity_k2ft.png') }}"
                                                    alt="Generic placeholder image" style="width:50%; height: 50%;">
                                            </div>

                                            <div class="media media-lg mt-0">
                                                <div class="media-body">
                                                    <h4 class="mt-0 text-center">Sumber penerangan utama</h4>
                                                    <div class="form-row">
                                                        <div class="col-12 d-flex justify-content-center">
                                                            <select name="sumber_penerangan"
                                                                wire:model.live="sumber_penerangan"
                                                                class="form-control form-select @error('sumber_penerangan') is-invalid @enderror">
                                                                <option label="Pilih sumber penerangan utama">
                                                                </option>
                                                                <option value="1">Listrik PLN
                                                                    meteran</option>
                                                                <option value="2">Listrik PLN
                                                                    non
                                                                    meteran</option>
                                                                <option value="3">Listrik
                                                                    non-PLN</option>
                                                                <option value="4">Bukan
                                                                    Listrik</option>
                                                                <option value="5">450 watt</option>
                                                                <option value="6">900 watt</option>
                                                                <option value="7">1.300 watt</option>
                                                            </select>

                                                            @error('sumber_penerangan')
                                                                <div><span class="text-danger">{{ $message }}</span>
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <h4 class="mt-3 text-center">Jika Listrik PLN Meteran, daya
                                                        terpasang?
                                                    </h4>
                                                    <div class="form-row">
                                                        <div class="col-12 d-flex justify-content-center">
                                                            <select name="watt_listrik" wire:model="watt_listrik"
                                                                class="form-control form-select @error('watt_listrik') is-invalid @enderror"
                                                                {{ $sumber_penerangan != 1 ? 'disabled' : '' }}>
                                                                <option label="Pilih daya"></option>
                                                                <option value="1">=< 900 watt</option>
                                                                <option value="2">> 900</option>
                                                                <option value="3">Kosong</option>
                                                                <option value="4">> 1.300 watt</option>
                                                                <option value="5">450 watt</option>
                                                                <option value="6">900 watt</option>
                                                                <option value="7">1.300 watt</option>
                                                            </select>

                                                            @error('watt_listrik')
                                                                <div><span class="text-danger">{{ $message }}</span>
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 mb-3">
                                        <div class="example">
                                            <div class="d-flex justify-content-center">
                                                <img class="mb-4"
                                                    src="{{ asset('assets/images/brand/undraw_mint_tea_7su0.png') }}"
                                                    alt="Generic placeholder image" style="width:50%; height: 50%;">
                                            </div>

                                            <div class="media media-lg mt-0">
                                                <div class="media-body">
                                                    <h4 class="mt-0 text-center">Sumber air minum utama</h4>
                                                    <div class="form-row">
                                                        <div class="col-12 d-flex justify-content-center">
                                                            <select name="sumber_air_minum"
                                                                wire:model="sumber_air_minum"
                                                                class="form-control form-select @error('sumber_air_minum') is-invalid @enderror">
                                                                <option label="Pilih sumber air minum utama"></option>
                                                                <option value="1">Air Kemasan
                                                                    /
                                                                    Isi Ulang</option>
                                                                <option value="2">Ledeng /
                                                                    PAM</option>
                                                                <option value="3">Sumur Bor /
                                                                    Pompa</option>
                                                                <option value="4">Sumur
                                                                    Terlindung</option>
                                                                <option value="5">Sumur Tidak
                                                                    Terlindung</option>
                                                                <option value="6">Mata Air
                                                                    Terlindung</option>
                                                                <option value="7">Air
                                                                    Permukaan
                                                                    (Sungai, Danau, dll)</option>
                                                                <option value="8">Air
                                                                    Hujan</option>
                                                                <option value="9">Lainnya</option>
                                                            </select>

                                                            @error('sumber_air_minum')
                                                                <div><span class="text-danger">{{ $message }}</span>
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 mb-3">
                                        <div class="example">
                                            <div class="d-flex justify-content-center">
                                                <img class="mb-4"
                                                    src="{{ asset('assets/images/brand/undraw_cabin_hkfr.png') }}"
                                                    alt="Generic placeholder image" style="width:50%; height: 50%;">
                                            </div>

                                            <div class="media media-lg mt-0">
                                                <div class="media-body">
                                                    <h4 class="mt-0 text-center">Memiliki fasilitas tempat buang air
                                                        besar
                                                    </h4>
                                                    <div class="form-row">
                                                        <div class="col-12 d-flex justify-content-center">
                                                            <select name="fasilitas_buang_air_besar"
                                                                wire:model="fasilitas_buang_air_besar"
                                                                class="form-control form-select @error('fasilitas_buang_air_besar') is-invalid @enderror">
                                                                <option
                                                                    label="Pilih fasilitas tempat buang air
                                                                besar">
                                                                </option>
                                                                <option value="1">Milik
                                                                    sendiri</option>
                                                                <option value="2">Umum/Bersama</option>
                                                                <option value="3">Lainnya</option>
                                                                <option value="4">Kosong</option>
                                                                <option value="5">Tidak</option>
                                                            </select>

                                                            @error('fasilitas_buang_air_besar')
                                                                <div><span class="text-danger">{{ $message }}</span>
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 mb-3">
                                        <div class="example text-center">
                                            <img class="mb-4 "
                                                src="{{ asset('assets/images/brand/undraw_smart_home_re_orvn.png') }}"
                                                alt="Generic placeholder image" style="width:50%; height: 50%;">
                                            <div class="media media-lg mt-0">
                                                <div class="media-body">
                                                    <h4 class="mt-0">Luas rumah/bangunan keseluruhan (m2)</h4>
                                                    <div class="form-group">
                                                        <input type="text" name="luas_rumah"
                                                            wire:model.defer="luas_rumah" class="form-control"
                                                            autocomplete="off"
                                                            placeholder="Luas rumah/bangunan keseluruhan (m2)">
                                                        @error('luas_rumah')
                                                            <div><span class="text-danger">{{ $message }}</span>
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 mb-3">
                                        <div class="example text-center">
                                            <img class="mb-4 "
                                                src="{{ asset('assets/images/brand/undraw_Quiet_town_re_n99r.png') }}"
                                                alt="Generic placeholder image" style="width:50%; height: 50%;">
                                            <div class="media media-lg mt-0">
                                                <div class="media-body">
                                                    <h4 class="mt-0">Orang yang tinggal dan menetap di rumah /
                                                        bangunan
                                                        ini?</h4>
                                                    <div class="form-group">
                                                        <input type="text" name="jumlah_orang_dirumah"
                                                            wire:model.defer="jumlah_orang_dirumah"
                                                            class="form-control" autocomplete="off"
                                                            placeholder="Orang yang tinggal dan menetap di rumah / bangunan ini?">
                                                        @error('jumlah_orang_dirumah')
                                                            <div><span class="text-danger">{{ $message }}</span>
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 mb-3">
                                        <div class="example">
                                            <div class="d-flex justify-content-center">
                                                <img class="mb-4"
                                                    src="{{ asset('assets/images/brand/undraw_Home_settings_re_pkya.png') }}"
                                                    alt="Generic placeholder image" style="width:50%; height: 50%;">
                                            </div>

                                            <div class="media media-lg mt-0">
                                                <div class="media-body">
                                                    <h4 class="mt-0 text-center">Bahan bakar utama untuk memasak?</h4>
                                                    <div class="form-row">
                                                        <div class="col-12 d-flex justify-content-center">
                                                            <select name="bahan_bakar_utama"
                                                                wire:model="bahan_bakar_utama"
                                                                class="form-control form-select @error('bahan_bakar_utama') is-invalid @enderror">
                                                                <option label="Pilih bahan bakar utama untuk memasak">
                                                                </option>
                                                                <option value="1">Listrik</option>
                                                                <option value="2">Gas 12 kg</option>
                                                                <option value="3">Gas 5,5 kg/blue gaz</option>
                                                                <option value="4">Gas 3 kg</option>
                                                                <option value="5">Minyak Tanah</option>
                                                                <option value="6">Briket/Kayu/Arang</option>
                                                                <option value="7">Lainnya</option>
                                                            </select>

                                                            @error('bahan_bakar_utama')
                                                                <div><span
                                                                        class="text-danger">{{ $message }}</span>
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 mb-3">
                                        <div class="example">
                                            <div class="d-flex justify-content-center">
                                                <img class="mb-4"
                                                    src="{{ asset('assets/images/brand/undraw_For_sale_re_egkk.png') }}"
                                                    alt="Generic placeholder image" style="width:50%; height: 50%;">
                                            </div>
                                            <div class="media media-lg mt-0">
                                                <div class="media-body">
                                                    <h4 class="mt-0 text-center">Kepemilikan rumah / bangunan tempat
                                                        tinggal?</h4>
                                                    <div class="form-row">
                                                        <div class="col-12 d-flex justify-content-center">
                                                            <select name="kepemilikan_rumah"
                                                                wire:model="kepemilikan_rumah"
                                                                class="form-control form-select @error('kepemilikan_rumah') is-invalid @enderror">
                                                                <option
                                                                    label="Pilih kepemilikan rumah / bangunan tempat tinggal">
                                                                </option>
                                                                <option value="1">Bebas Sewa/Menumpang</option>
                                                                <option value="2">Kontrak/Sewa</option>
                                                                <option value="3">Milik Sendiri</option>
                                                                <option value="4">Dinas</option>
                                                                <option value="5">Lainnya</option>
                                                            </select>

                                                            @error('kepemilikan_rumah')
                                                                <div><span
                                                                        class="text-danger">{{ $message }}</span>
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <div class="card-footer text-end">
                                <button type="submit" class="btn btn-success" wire:click="save">Selesai</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- ROW-1 CLOSED -->

    </div>



    @push('scripts')
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
        <script>
            // Map initialization
            var map = L.map('map').setView([-6.8724, 107.5428], 13);

            //osm layer
            var osm = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            });
            osm.addTo(map);

            function requestGeolocationPermission() {
                if (!navigator.geolocation) {
                    console.log("Your browser doesn't support geolocation feature!");
                } else {
                    navigator.geolocation.getCurrentPosition(getPosition, handleGeolocationError, {
                        enableHighAccuracy: true,
                        timeout: 10000,
                        maximumAge: 0
                    });
                }
            }

            function handleGeolocationError(error) {
                switch (error.code) {
                    case error.PERMISSION_DENIED:
                        console.log("User denied the request for geolocation.");
                        break;
                    case error.POSITION_UNAVAILABLE:
                        console.log("Location information is unavailable.");
                        break;
                    case error.TIMEOUT:
                        console.log("The request to get user location timed out.");
                        break;
                    case error.UNKNOWN_ERROR:
                        console.log("An unknown error occurred.");
                        break;
                }
            }


            var marker, circle;

            function getPosition(position) {
                var lat = position.coords.latitude;
                var long = position.coords.longitude;
                var accuracy = position.coords.accuracy;

                // Mengisi nilai ke elemen input
                @this.set('latitude', position.coords.latitude);
                @this.set('longitude', position.coords.longitude);

                if (marker) {
                    map.removeLayer(marker);
                }

                if (circle) {
                    map.removeLayer(circle);
                }

                marker = L.marker([lat, long]);
                // circle = L.circle([lat, long], {
                //     radius: accuracy
                // });

                var featureGroup = L.featureGroup([marker]).addTo(map);

                map.fitBounds(featureGroup.getBounds());

                console.log("Your coordinate is: Lat: " + lat + " Long: " + long + " Accuracy: " + accuracy);
            }
        </script>
    @endpush

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
                                <label class="form-label">Nomor Kartu Keluarga</label>
                                <ul class="list-group no-margin">
                                    <li class="list-group-item d-flex ps-3">
                                        <div class="social social-profile-buttons me-2">
                                            <a class="social-icon text-primary" href="javascript:void(0)"><i
                                                    class="fe fe-file-text"></i></a>
                                        </div>
                                        <a href="javascript:void(0)" class="my-auto">{{ $nomor_keluarga_indonesia }}</a>
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
                                                    <label class="custom-switch form-switch">
                                                        <input type="radio" name="answer_13"
                                                            wire:model.defer="answer_13" class="custom-switch-input"
                                                            value="1">
                                                        <span
                                                            class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                        <span class="custom-switch-description">1</span>
                                                    </label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="custom-switch form-switch">
                                                        <input type="radio" name="answer_13"
                                                            wire:model.defer="answer_13" class="custom-switch-input"
                                                            value="2">
                                                        <span
                                                            class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                        <span class="custom-switch-description">2</span>
                                                    </label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="custom-switch form-switch">
                                                        <input type="radio" name="answer_13"
                                                            wire:model.defer="answer_13" class="custom-switch-input"
                                                            value="3">
                                                        <span
                                                            class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                        <span class="custom-switch-description">3</span>
                                                    </label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="custom-switch form-switch">
                                                        <input type="radio" name="answer_13"
                                                            wire:model.defer="answer_13" class="custom-switch-input"
                                                            value="4">
                                                        <span
                                                            class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                        <span class="custom-switch-description">4</span>
                                                    </label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="custom-switch form-switch">
                                                        <input type="radio" name="answer_13"
                                                            wire:model.defer="answer_13" class="custom-switch-input"
                                                            value=">4">
                                                        <span
                                                            class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                        <span class="custom-switch-description">> 4</span>
                                                    </label>
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
                                                <h4 class="mt-0">Jumlah pengeluaran keluarga per bulan</h4>
                                                <div class="form-group">
                                                    <input type="text" name="answer_18"
                                                        wire:model.defer="answer_18" class="form-control"
                                                        autocomplete="off"
                                                        placeholder="Jumlah pengeluaran keluarga per bulan">
                                                    @error('answer_18')
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
                                                                            value="1"
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
                                                                            value="1"
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
                                                                            value="1"
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
                                                                            value="1"
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
                                                                            value="1"
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
                                                                            value="1"
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
                                                                            value="1"
                                                                            {{ $penerimaanBantuan['kur'] == '1' ? 'checked' : '' }}>
                                                                        <span class="custom-control-label">KUR</span>
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
                                                                        wire:model.defer="aset"
                                                                        class="custom-switch-input" value="1">
                                                                    <span
                                                                        class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                                    <span class="custom-switch-description">Ya</span>
                                                                </label>
                                                                <label class="custom-switch form-switch">
                                                                    <input type="radio" name="aset"
                                                                        wire:model.defer="aset"
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
                                                                            {{ $jenisAset['tabungan'] == '1' ? 'checked' : '' }}>
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
                                                                            {{ $jenisAset['ac'] == '2' ? 'checked' : '' }}>
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
                                                                            {{ $jenisAset['televisi_layar_datar'] == '3' ? 'checked' : '' }}>
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
                                                                            {{ $jenisAset['lemari_es_kulkas'] == '4' ? 'checked' : '' }}>
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
                                                                            {{ $jenisAset['komputer_laptop'] == '5' ? 'checked' : '' }}>
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
                                                                            {{ $jenisAset['sepeda_motor'] == '6' ? 'checked' : '' }}>
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
                                                                            {{ $jenisAset['mobil'] == '7' ? 'checked' : '' }}>
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
                                                                            {{ $jenisAset['kapal_perahu_motor_perahu'] == '8' ? 'checked' : '' }}>
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
                                                                            {{ $jenisAset['emas_perhiasan'] == '9' ? 'checked' : '' }}>
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
                                                                            {{ $jenisAset['hewan_ternak'] == '10' ? 'checked' : '' }}>
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
                                                                            {{ $jenisAset['lahan'] == '11' ? 'checked' : '' }}>
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
                                                                            {{ $jenisAset['rumah_ditempat_lain'] == '12' ? 'checked' : '' }}>
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
                                                        <div class="col-6 d-flex justify-content-center">
                                                            <div class="form-group">
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="jenisAtapRumah[]"
                                                                            wire:model="jenisAtapRumah.beton"
                                                                            value="beton"
                                                                            {{ $jenisAtapRumah['beton'] == '1' ? 'checked' : '' }}>
                                                                        <span class="custom-control-label">Beton</span>
                                                                    </label>
                                                                </div>
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="jenisAtapRumah[]"
                                                                            wire:model="jenisAtapRumah.genteng"
                                                                            value="genteng"
                                                                            {{ $jenisAtapRumah['genteng'] == '2' ? 'checked' : '' }}>
                                                                        <span
                                                                            class="custom-control-label">Genteng</span>
                                                                    </label>
                                                                </div>
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="jenisAtapRumah[]"
                                                                            wire:model="jenisAtapRumah.seng_atap"
                                                                            value="seng_atap"
                                                                            {{ $jenisAtapRumah['seng_atap'] == '3' ? 'checked' : '' }}>
                                                                        <span class="custom-control-label">Seng</span>
                                                                    </label>
                                                                </div>
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="jenisAtapRumah[]"
                                                                            wire:model="jenisAtapRumah.asbes_seng"
                                                                            value="asbes_seng"
                                                                            {{ $jenisAtapRumah['asbes_seng'] == '4' ? 'checked' : '' }}>
                                                                        <span class="custom-control-label">Asbes /
                                                                            Seng</span>
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
                                                                            name="jenisAtapRumah[]"
                                                                            wire:model="jenisAtapRumah.kayu_sirap"
                                                                            value="kayu_sirap"
                                                                            {{ $jenisAtapRumah['kayu_sirap'] == '5' ? 'checked' : '' }}>
                                                                        <span class="custom-control-label">Kayu
                                                                            Sirap</span>
                                                                    </label>
                                                                </div>
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="jenisAtapRumah[]"
                                                                            wire:model="jenisAtapRumah.bambu_atap"
                                                                            value="bambu_atap"
                                                                            {{ $jenisAtapRumah['bambu_atap'] == '6' ? 'checked' : '' }}>
                                                                        <span class="custom-control-label">Bambu</span>
                                                                    </label>
                                                                </div>
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="jenisAtapRumah[]"
                                                                            wire:model="jenisAtapRumah.jerami_ijuk_rumbia_daun_daunan"
                                                                            value="jerami_ijuk_rumbia_daun_daunan"
                                                                            {{ $jenisAtapRumah['jerami_ijuk_rumbia_daun_daunan'] == '7' ? 'checked' : '' }}>
                                                                        <span class="custom-control-label">Jerami /
                                                                            Ijuk /
                                                                            Rumbia / Daun-daunan</span>
                                                                    </label>
                                                                </div>
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="jenisAtapRumah[]"
                                                                            wire:model="jenisAtapRumah.atap_rumah_lainnya"
                                                                            value="atap_rumah_lainnya"
                                                                            {{ $jenisAtapRumah['atap_rumah_lainnya'] == '8' ? 'checked' : '' }}>
                                                                        <span
                                                                            class="custom-control-label">Lainnya</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <h4 class="mt-0 text-center">Kondisi atap</h4>
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
                                                        <div class="col-6 d-flex justify-content-center">
                                                            <div class="form-group">
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="jenisDindingRumah[]"
                                                                            wire:model="jenisDindingRumah.tembok"
                                                                            value="tembok"
                                                                            {{ $jenisDindingRumah['tembok'] == '1' ? 'checked' : '' }}>
                                                                        <span
                                                                            class="custom-control-label">Tembok</span>
                                                                    </label>
                                                                </div>
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="jenisDindingRumah[]"
                                                                            wire:model="jenisDindingRumah.plasteran_anyaman_bambu_kawat"
                                                                            value="plasteran_anyaman_bambu_kawat"
                                                                            {{ $jenisDindingRumah['plasteran_anyaman_bambu_kawat'] == '2' ? 'checked' : '' }}>
                                                                        <span
                                                                            class="custom-control-label">Plasteran</span>
                                                                    </label>
                                                                </div>
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="jenisDindingRumah[]"
                                                                            wire:model="jenisDindingRumah.kayu_papan_dinding"
                                                                            value="kayu_papan_dinding"
                                                                            {{ $jenisDindingRumah['kayu_papan_dinding'] == '3' ? 'checked' : '' }}>
                                                                        <span
                                                                            class="custom-control-label">Kayu/Papan</span>
                                                                    </label>
                                                                </div>
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="jenisDindingRumah[]"
                                                                            wire:model="jenisDindingRumah.anyaman_bambu"
                                                                            value="anyaman_bambu"
                                                                            {{ $jenisDindingRumah['anyaman_bambu'] == '4' ? 'checked' : '' }}>
                                                                        <span class="custom-control-label">Anyaman
                                                                            Bambu</span>
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
                                                                            name="jenisDindingRumah[]"
                                                                            wire:model="jenisDindingRumah.batang_kayu"
                                                                            value="batang_kayu"
                                                                            {{ $jenisDindingRumah['batang_kayu'] == '5' ? 'checked' : '' }}>
                                                                        <span class="custom-control-label">Batang
                                                                            Kayu</span>
                                                                    </label>
                                                                </div>
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="jenisDindingRumah[]"
                                                                            wire:model="jenisDindingRumah.bambu_dinding"
                                                                            value="bambu_dinding"
                                                                            {{ $jenisDindingRumah['bambu_dinding'] == '6' ? 'checked' : '' }}>
                                                                        <span class="custom-control-label">Bambu</span>
                                                                    </label>
                                                                </div>
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="jenisDindingRumah[]"
                                                                            wire:model="jenisDindingRumah.seng_dinding"
                                                                            value="seng_dinding"
                                                                            {{ $jenisDindingRumah['seng_dinding'] == '7' ? 'checked' : '' }}>
                                                                        <span class="custom-control-label">Send</span>
                                                                    </label>
                                                                </div>
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="jenisDindingRumah[]"
                                                                            wire:model="jenisDindingRumah.dinding_rumah_lainnya"
                                                                            value="dinding_rumah_lainnya"
                                                                            {{ $jenisDindingRumah['dinding_rumah_lainnya'] == '8' ? 'checked' : '' }}>
                                                                        <span
                                                                            class="custom-control-label">Lainnya</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <h4 class="mt-0 text-center">Kondisi dinding</h4>
                                                    <div class="form-row">
                                                        <div class="col-12 d-flex justify-content-center">
                                                            <div class="form-group">
                                                                <label class="custom-switch form-switch me-5">
                                                                    <input type="radio"
                                                                        name="kondisi_dinding_rumah"
                                                                        wire:model.defer="kondisi_dinding_rumah"
                                                                        class="custom-switch-input" value="1">
                                                                    <span
                                                                        class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                                    <span
                                                                        class="custom-switch-description">Bagus</span>
                                                                </label>
                                                                <label class="custom-switch form-switch">
                                                                    <input type="radio"
                                                                        name="kondisi_dinding_rumah"
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
                                                        <div class="col-6 d-flex justify-content-center">
                                                            <div class="form-group">
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="jenisLantaiRumah[]"
                                                                            wire:model="jenisLantaiRumah.keramik_granit_marmer_ubin_tegel_teraso"
                                                                            value="keramik_granit_marmer_ubin_tegel_teraso"
                                                                            {{ $jenisLantaiRumah['keramik_granit_marmer_ubin_tegel_teraso'] == '1' ? 'checked' : '' }}>
                                                                        <span class="custom-control-label">Marmer /
                                                                            granit</span>
                                                                    </label>
                                                                </div>
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="jenisLantaiRumah[]"
                                                                            wire:model="jenisLantaiRumah.keramik"
                                                                            value="keramik"
                                                                            {{ $jenisLantaiRumah['keramik'] == '2' ? 'checked' : '' }}>
                                                                        <span
                                                                            class="custom-control-label">Keramik</span>
                                                                    </label>
                                                                </div>
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="jenisLantaiRumah[]"
                                                                            wire:model="jenisLantaiRumah.parket_vinil_karpet"
                                                                            value="parket_vinil_karpet"
                                                                            {{ $jenisLantaiRumah['parket_vinil_karpet'] == '3' ? 'checked' : '' }}>
                                                                        <span class="custom-control-label">Parket /
                                                                            Vinil
                                                                            / Karpet</span>
                                                                    </label>
                                                                </div>
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="jenisLantaiRumah[]"
                                                                            wire:model="jenisLantaiRumah.ubin_tegel_teraso"
                                                                            value="ubin_tegel_teraso"
                                                                            {{ $jenisLantaiRumah['ubin_tegel_teraso'] == '4' ? 'checked' : '' }}>
                                                                        <span class="custom-control-label">Ubin /
                                                                            Tegel /
                                                                            Teraso</span>
                                                                    </label>
                                                                </div>
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="jenisLantaiRumah[]"
                                                                            wire:model="jenisLantaiRumah.kayu_papan_lantai"
                                                                            value="kayu_papan_lantai"
                                                                            {{ $jenisLantaiRumah['kayu_papan_lantai'] == '5' ? 'checked' : '' }}>
                                                                        <span class="custom-control-label">Kayu /
                                                                            Papan</span>
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
                                                                            name="jenisLantaiRumah[]"
                                                                            wire:model="jenisLantaiRumah.semen"
                                                                            value="semen"
                                                                            {{ $jenisLantaiRumah['semen'] == '6' ? 'checked' : '' }}>
                                                                        <span class="custom-control-label">Semen /
                                                                            Bata
                                                                            Merah</span>
                                                                    </label>
                                                                </div>
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="jenisLantaiRumah[]"
                                                                            wire:model="jenisLantaiRumah.bambu_lantai"
                                                                            value="bambu_lantai"
                                                                            {{ $jenisLantaiRumah['bambu_lantai'] == '7' ? 'checked' : '' }}>
                                                                        <span
                                                                            class="custom-control-label">Bambu</span>
                                                                    </label>
                                                                </div>
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="jenisLantaiRumah[]"
                                                                            wire:model="jenisLantaiRumah.tanah"
                                                                            value="tanah"
                                                                            {{ $jenisLantaiRumah['tanah'] == '8' ? 'checked' : '' }}>
                                                                        <span
                                                                            class="custom-control-label">Tanah</span>
                                                                    </label>
                                                                </div>
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="jenisLantaiRumah[]"
                                                                            wire:model="jenisLantaiRumah.lantai_rumah_lainnya"
                                                                            value="lantai_rumah_lainnya"
                                                                            {{ $jenisLantaiRumah['lantai_rumah_lainnya'] == '9' ? 'checked' : '' }}>
                                                                        <span
                                                                            class="custom-control-label">Lainnya</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <h4 class="mt-0 text-center">Kondisi lantai rumah</h4>
                                                    <div class="form-row">
                                                        <div class="col-12 d-flex justify-content-center">
                                                            <div class="form-group">
                                                                <label class="custom-switch form-switch me-5">
                                                                    <input type="radio"
                                                                        name="kondisi_lantai_rumah"
                                                                        wire:model.defer="kondisi_lantai_rumah"
                                                                        class="custom-switch-input" value="1">
                                                                    <span
                                                                        class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                                    <span
                                                                        class="custom-switch-description">Bagus</span>
                                                                </label>
                                                                <label class="custom-switch form-switch">
                                                                    <input type="radio"
                                                                        name="kondisi_lantai_rumah"
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
                                                            <div class="form-group">
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="jenisSumberPeneranganUtama[]"
                                                                            wire:model="jenisSumberPeneranganUtama.listrik_pln_meteran"
                                                                            value="listrik_pln_meteran"
                                                                            {{ $jenisSumberPeneranganUtama['listrik_pln_meteran'] == '1' ? 'checked' : '' }}>
                                                                        <span class="custom-control-label">Listrik PLN
                                                                            meteran</span>
                                                                    </label>
                                                                </div>
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="jenisSumberPeneranganUtama[]"
                                                                            wire:model="jenisSumberPeneranganUtama.listrik_pln_non_meteran"
                                                                            value="listrik_pln_non_meteran"
                                                                            {{ $jenisSumberPeneranganUtama['listrik_pln_non_meteran'] == '2' ? 'checked' : '' }}>
                                                                        <span class="custom-control-label">Listrik PLN
                                                                            non
                                                                            meteran</span>
                                                                    </label>
                                                                </div>
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="jenisSumberPeneranganUtama[]"
                                                                            wire:model="jenisSumberPeneranganUtama.listrik_non_pln"
                                                                            value="listrik_non_pln"
                                                                            {{ $jenisSumberPeneranganUtama['listrik_non_pln'] == '3' ? 'checked' : '' }}>
                                                                        <span class="custom-control-label">Listrik
                                                                            non-PLN</span>
                                                                    </label>
                                                                </div>
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="jenisSumberPeneranganUtama[]"
                                                                            wire:model="jenisSumberPeneranganUtama.bukan_listrik"
                                                                            value="bukan_listrik"
                                                                            {{ $jenisSumberPeneranganUtama['bukan_listrik'] == '4' ? 'checked' : '' }}>
                                                                        <span class="custom-control-label">Bukan
                                                                            Listrik</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h4 class="mt-0 text-center">Jika Listrik PLN Meteran, daya
                                                        terpasang?
                                                    </h4>
                                                    <div class="form-row">
                                                        <div class="col-12 d-flex justify-content-center">
                                                            <div class="form-group">
                                                                <label class="custom-switch form-switch me-5">
                                                                    <input type="radio" name="watt_listrik"
                                                                        wire:model.defer="watt_listrik"
                                                                        class="custom-switch-input" value="1">
                                                                    <span
                                                                        class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                                    <span class="custom-switch-description">=< 900
                                                                            watt</span>
                                                                </label>
                                                                <label class="custom-switch form-switch">
                                                                    <input type="radio" name="watt_listrik"
                                                                        wire:model.defer="watt_listrik"
                                                                        class="custom-switch-input" value="2">
                                                                    <span
                                                                        class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                                    <span class="custom-switch-description">> 900
                                                                        watt</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-12 d-flex justify-content-center">
                                                            <div class="form-group">
                                                                <label class="custom-switch form-switch me-5">
                                                                    <input type="radio" name="watt_listrik"
                                                                        wire:model.defer="watt_listrik"
                                                                        class="custom-switch-input" value="3">
                                                                    <span
                                                                        class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                                    <span
                                                                        class="custom-switch-description">Kosong</span>
                                                                </label>
                                                                <label class="custom-switch form-switch">
                                                                    <input type="radio" name="watt_listrik"
                                                                        wire:model.defer="watt_listrik"
                                                                        class="custom-switch-input" value="4">
                                                                    <span
                                                                        class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                                    <span class="custom-switch-description">> 1.300
                                                                        watt</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-12 d-flex justify-content-center">
                                                            <div class="form-group">
                                                                <label class="custom-switch form-switch me-5">
                                                                    <input type="radio" name="watt_listrik"
                                                                        wire:model.defer="watt_listrik"
                                                                        class="custom-switch-input" value="5">
                                                                    <span
                                                                        class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                                    <span class="custom-switch-description">450
                                                                        watt</span>
                                                                </label>
                                                                <label class="custom-switch form-switch">
                                                                    <input type="radio" name="watt_listrik"
                                                                        wire:model.defer="watt_listrik"
                                                                        class="custom-switch-input" value="6">
                                                                    <span
                                                                        class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                                    <span class="custom-switch-description">900
                                                                        watt</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-12 d-flex justify-content-center">
                                                            <div class="form-group">
                                                                <label class="custom-switch form-switch me-5">
                                                                    <input type="radio" name="watt_listrik"
                                                                        wire:model.defer="watt_listrik"
                                                                        class="custom-switch-input" value="7">
                                                                    <span
                                                                        class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                                    <span class="custom-switch-description">1.300
                                                                        watt</span>
                                                                </label>
                                                                @error('watt_listrik')
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
                                                    src="{{ asset('assets/images/brand/undraw_mint_tea_7su0.png') }}"
                                                    alt="Generic placeholder image" style="width:50%; height: 50%;">
                                            </div>

                                            <div class="media media-lg mt-0">
                                                <div class="media-body">
                                                    <h4 class="mt-0 text-center">Sumber air minum utama</h4>
                                                    <div class="form-row">
                                                        <div class="col-6 d-flex justify-content-center">
                                                            <div class="form-group">
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="jenisSumberAirMinum[]"
                                                                            wire:model="jenisSumberAirMinum.air_kemasan_isi_ulang"
                                                                            value="air_kemasan_isi_ulang"
                                                                            {{ $jenisSumberAirMinum['air_kemasan_isi_ulang'] == '1' ? 'checked' : '' }}>
                                                                        <span class="custom-control-label">Air Kemasan
                                                                            /
                                                                            Isi Ulang</span>
                                                                    </label>
                                                                </div>
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="jenisSumberAirMinum[]"
                                                                            wire:model="jenisSumberAirMinum.ledeng_pam"
                                                                            value="ledeng_pam"
                                                                            {{ $jenisSumberAirMinum['ledeng_pam'] == '2' ? 'checked' : '' }}>
                                                                        <span class="custom-control-label">Ledeng /
                                                                            PAM</span>
                                                                    </label>
                                                                </div>
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="jenisSumberAirMinum[]"
                                                                            wire:model="jenisSumberAirMinum.sumur_bor"
                                                                            value="sumur_bor"
                                                                            {{ $jenisSumberAirMinum['sumur_bor'] == '3' ? 'checked' : '' }}>
                                                                        <span class="custom-control-label">Sumur Bor /
                                                                            Pompa</span>
                                                                    </label>
                                                                </div>
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="jenisSumberAirMinum[]"
                                                                            wire:model="jenisSumberAirMinum.sumur_terlindung"
                                                                            value="sumur_terlindung"
                                                                            {{ $jenisSumberAirMinum['sumur_terlindung'] == '4' ? 'checked' : '' }}>
                                                                        <span class="custom-control-label">Sumur
                                                                            Terlindung</span>
                                                                    </label>
                                                                </div>
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="jenisSumberAirMinum[]"
                                                                            wire:model="jenisSumberAirMinum.sumur_tidak_terlindung"
                                                                            value="sumur_tidak_terlindung"
                                                                            {{ $jenisSumberAirMinum['sumur_tidak_terlindung'] == '5' ? 'checked' : '' }}>
                                                                        <span class="custom-control-label">Sumur Tidak
                                                                            Terlindung</span>
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
                                                                            name="jenisSumberAirMinum[]"
                                                                            wire:model="jenisSumberAirMinum.mata_air_terlindung"
                                                                            value="mata_air_terlindung"
                                                                            {{ $jenisSumberAirMinum['mata_air_terlindung'] == '6' ? 'checked' : '' }}>
                                                                        <span class="custom-control-label">Mata Air
                                                                            Terlindung</span>
                                                                    </label>
                                                                </div>
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="jenisSumberAirMinum[]"
                                                                            wire:model="jenisSumberAirMinum.air_permukaan_sungai_danau_dll"
                                                                            value="air_permukaan_sungai_danau_dll"
                                                                            {{ $jenisSumberAirMinum['air_permukaan_sungai_danau_dll'] == '7' ? 'checked' : '' }}>
                                                                        <span class="custom-control-label">Air
                                                                            Permukaan
                                                                            (Sungai, Danau, dll)</span>
                                                                    </label>
                                                                </div>
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="jenisSumberAirMinum[]"
                                                                            wire:model="jenisSumberAirMinum.air_hujan"
                                                                            value="air_hujan"
                                                                            {{ $jenisSumberAirMinum['air_hujan'] == '8' ? 'checked' : '' }}>
                                                                        <span class="custom-control-label">Air
                                                                            Hujan</span>
                                                                    </label>
                                                                </div>
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="jenisSumberAirMinum[]"
                                                                            wire:model="jenisSumberAirMinum.air_minum_lainnya"
                                                                            value="air_minum_lainnya"
                                                                            {{ $jenisSumberAirMinum['air_minum_lainnya'] == '9' ? 'checked' : '' }}>
                                                                        <span
                                                                            class="custom-control-label">Lainnya</span>
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
                                                            <div class="form-group">
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="fasilitasBuangAirBesar[]"
                                                                            wire:model="fasilitasBuangAirBesar.milik_sendiri_fasilitas_buang_air_besar"
                                                                            value="milik_sendiri_fasilitas_buang_air_besar"
                                                                            {{ $fasilitasBuangAirBesar['milik_sendiri_fasilitas_buang_air_besar'] == '1' ? 'checked' : '' }}>
                                                                        <span class="custom-control-label">Milik
                                                                            sendiri</span>
                                                                    </label>
                                                                </div>
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="fasilitasBuangAirBesar[]"
                                                                            wire:model="fasilitasBuangAirBesar.umum_bersama"
                                                                            value="umum_bersama"
                                                                            {{ $fasilitasBuangAirBesar['umum_bersama'] == '2' ? 'checked' : '' }}>
                                                                        <span
                                                                            class="custom-control-label">Umum/Bersama</span>
                                                                    </label>
                                                                </div>
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="fasilitasBuangAirBesar[]"
                                                                            wire:model="fasilitasBuangAirBesar.fasilitas_buang_air_besar_lainnya"
                                                                            value="fasilitas_buang_air_besar_lainnya"
                                                                            {{ $fasilitasBuangAirBesar['fasilitas_buang_air_besar_lainnya'] == '3' ? 'checked' : '' }}>
                                                                        <span
                                                                            class="custom-control-label">Lainnya</span>
                                                                    </label>
                                                                </div>
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="fasilitasBuangAirBesar[]"
                                                                            wire:model="fasilitasBuangAirBesar.fasilitas_buang_air_besar_kosong"
                                                                            value="fasilitas_buang_air_besar_kosong"
                                                                            {{ $fasilitasBuangAirBesar['fasilitas_buang_air_besar_kosong'] == '4' ? 'checked' : '' }}>
                                                                        <span
                                                                            class="custom-control-label">Kosong</span>
                                                                    </label>
                                                                </div>
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="fasilitasBuangAirBesar[]"
                                                                            wire:model="fasilitasBuangAirBesar.tidak_ada_fasilitas_buang_air_besar"
                                                                            value="tidak_ada_fasilitas_buang_air_besar"
                                                                            {{ $fasilitasBuangAirBesar['tidak_ada_fasilitas_buang_air_besar'] == '5' ? 'checked' : '' }}>
                                                                        <span
                                                                            class="custom-control-label">Tidak</span>
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
                                                            <div class="form-group">
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="jenisBahanBakar[]"
                                                                            wire:model="jenisBahanBakar.listrik"
                                                                            value="listrik"
                                                                            {{ $jenisBahanBakar['listrik'] == '1' ? 'checked' : '' }}>
                                                                        <span
                                                                            class="custom-control-label">Listrik</span>
                                                                    </label>
                                                                </div>
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="jenisBahanBakar[]"
                                                                            wire:model="jenisBahanBakar.gas_12kg"
                                                                            value="gas_12kg"
                                                                            {{ $jenisBahanBakar['gas_12kg'] == '2' ? 'checked' : '' }}>
                                                                        <span class="custom-control-label">Gas 12
                                                                            kg</span>
                                                                    </label>
                                                                </div>
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="jenisBahanBakar[]"
                                                                            wire:model="jenisBahanBakar.gas_5_5kg"
                                                                            value="gas_5_5kg"
                                                                            {{ $jenisBahanBakar['gas_5_5kg'] == '3' ? 'checked' : '' }}>
                                                                        <span class="custom-control-label">Gas 5,5 kg
                                                                            /
                                                                            blue gaz</span>
                                                                    </label>
                                                                </div>
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="jenisBahanBakar[]"
                                                                            wire:model="jenisBahanBakar.gas_3kg"
                                                                            value="gas_3kg"
                                                                            {{ $jenisBahanBakar['gas_3kg'] == '4' ? 'checked' : '' }}>
                                                                        <span class="custom-control-label">Gas 3
                                                                            kg</span>
                                                                    </label>
                                                                </div>
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="jenisBahanBakar[]"
                                                                            wire:model="jenisBahanBakar.minyak_tanah"
                                                                            value="minyak_tanah"
                                                                            {{ $jenisBahanBakar['minyak_tanah'] == '5' ? 'checked' : '' }}>
                                                                        <span class="custom-control-label">Minyak
                                                                            Tanah</span>
                                                                    </label>
                                                                </div>
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="jenisBahanBakar[]"
                                                                            wire:model="jenisBahanBakar.briket_kayu_arang"
                                                                            value="briket_kayu_arang"
                                                                            {{ $jenisBahanBakar['briket_kayu_arang'] == '6' ? 'checked' : '' }}>
                                                                        <span class="custom-control-label">Briket /
                                                                            Kayu /
                                                                            Arang</span>
                                                                    </label>
                                                                </div>
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="jenisBahanBakar[]"
                                                                            wire:model="jenisBahanBakar.bahan_bakar_utama_lainnya"
                                                                            value="bahan_bakar_utama_lainnya"
                                                                            {{ $jenisBahanBakar['bahan_bakar_utama_lainnya'] == '7' ? 'checked' : '' }}>
                                                                        <span
                                                                            class="custom-control-label">Lainnya</span>
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
                                                    src="{{ asset('assets/images/brand/undraw_For_sale_re_egkk.png') }}"
                                                    alt="Generic placeholder image" style="width:50%; height: 50%;">
                                            </div>

                                            <div class="media media-lg mt-0">
                                                <div class="media-body">
                                                    <h4 class="mt-0 text-center">Kepemilikan rumah / bangunan tempat
                                                        tinggal?</h4>
                                                    <div class="form-row">
                                                        <div class="col-12 d-flex justify-content-center">
                                                            <div class="form-group">
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="kepemilikanRumah[]"
                                                                            wire:model="kepemilikanRumah.bebas_sewa_menumpang"
                                                                            value="bebas_sewa_menumpang"
                                                                            {{ $kepemilikanRumah['bebas_sewa_menumpang'] == '1' ? 'checked' : '' }}>
                                                                        <span class="custom-control-label">Bebas
                                                                            Sewa/Menumpang</span>
                                                                    </label>
                                                                </div>
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="kepemilikanRumah[]"
                                                                            wire:model="kepemilikanRumah.kontrak_sewa"
                                                                            value="kontrak_sewa"
                                                                            {{ $kepemilikanRumah['kontrak_sewa'] == '2' ? 'checked' : '' }}>
                                                                        <span class="custom-control-label">Kontrak /
                                                                            Sewa</span>
                                                                    </label>
                                                                </div>
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="kepemilikanRumah[]"
                                                                            wire:model="kepemilikanRumah.milik_sendiri"
                                                                            value="milik_sendiri"
                                                                            {{ $kepemilikanRumah['milik_sendiri'] == '3' ? 'checked' : '' }}>
                                                                        <span class="custom-control-label">Milik
                                                                            Sendiri</span>
                                                                    </label>
                                                                </div>
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="kepemilikanRumah[]"
                                                                            wire:model="kepemilikanRumah.dinas"
                                                                            value="dinas"
                                                                            {{ $kepemilikanRumah['dinas'] == '4' ? 'checked' : '' }}>
                                                                        <span
                                                                            class="custom-control-label">Dinas</span>
                                                                    </label>
                                                                </div>
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox-md">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="kepemilikanRumah[]"
                                                                            wire:model="kepemilikanRumah.kepemilikan_rumah_lainnya"
                                                                            value="kepemilikan_rumah_lainnya"
                                                                            {{ $kepemilikanRumah['kepemilikan_rumah_lainnya'] == '5' ? 'checked' : '' }}>
                                                                        <span
                                                                            class="custom-control-label">Lainnya</span>
                                                                    </label>
                                                                </div>
                                                            </div>
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

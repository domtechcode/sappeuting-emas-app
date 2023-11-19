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
                                                                        name="penerimaanBantuan" wire:model="penerimaanBantuan" value="bpnt">
                                                                    <span class="custom-control-label">BPNT</span>
                                                                </label>
                                                            </div>
                                                            <div class="custom-controls-stacked">
                                                                <label class="custom-control custom-checkbox-md">
                                                                    <input type="checkbox"
                                                                        class="custom-control-input"
                                                                        name="penerimaanBantuan" wire:model="penerimaanBantuan" value="bpum">
                                                                    <span class="custom-control-label">BPUM</span>
                                                                </label>
                                                            </div>
                                                            <div class="custom-controls-stacked">
                                                                <label class="custom-control custom-checkbox-md">
                                                                    <input type="checkbox"
                                                                        class="custom-control-input"
                                                                        name="penerimaanBantuan" wire:model="penerimaanBantuan" value="bst">
                                                                    <span class="custom-control-label">BST</span>
                                                                </label>
                                                            </div>
                                                            <div class="custom-controls-stacked">
                                                                <label class="custom-control custom-checkbox-md">
                                                                    <input type="checkbox"
                                                                        class="custom-control-input"
                                                                        name="penerimaanBantuan" wire:model="penerimaanBantuan" value="pkh">
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
                                                                        name="penerimaanBantuan" wire:model="penerimaanBantuan" value="sembako">
                                                                    <span class="custom-control-label">Sembako</span>
                                                                </label>
                                                            </div>
                                                            <div class="custom-controls-stacked">
                                                                <label class="custom-control custom-checkbox-md">
                                                                    <input type="checkbox"
                                                                        class="custom-control-input"
                                                                        name="penerimaanBantuan" wire:model="penerimaanBantuan" value="pra_kerja">
                                                                    <span class="custom-control-label">Pra Kerja</span>
                                                                </label>
                                                            </div>
                                                            <div class="custom-controls-stacked">
                                                                <label class="custom-control custom-checkbox-md">
                                                                    <input type="checkbox"
                                                                        class="custom-control-input"
                                                                        name="penerimaanBantuan" wire:model="penerimaanBantuan" value="kur">
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
                                            src="{{ asset('assets/images/brand/undraw_Onboarding_re_6osc.png') }}"
                                            alt="Generic placeholder image" style="width:50%; height: 50%;">
                                        </div>

                                        <div class="media media-lg mt-0">
                                            <div class="media-body">
                                                <h4 class="mt-0 text-center">Selama 6 (enam) bulan terakhir, terdapat paling sedikit 1 (satu), anggota keluarga memiliki sumber penghasilan untuk memenuhi kebutuhan pokok per bulan</h4>
                                                <div class="form-row">
                                                    <div class="col-12 d-flex justify-content-center">
                                                        <div class="form-group">
                                                            <label class="custom-switch form-switch me-5">
                                                                <input type="radio" name="sumber_penghasilan"
                                                                    wire:model.defer="sumber_penghasilan" class="custom-switch-input"
                                                                    value="1">
                                                                <span
                                                                    class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                                <span class="custom-switch-description">Ya</span>
                                                            </label>
                                                            <label class="custom-switch form-switch">
                                                                <input type="radio" name="sumber_penghasilan"
                                                                    wire:model.defer="sumber_penghasilan" class="custom-switch-input"
                                                                    value="2">
                                                                <span
                                                                    class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                                <span class="custom-switch-description">Tidak</span>
                                                            </label>
                                                            @error('sumber_penghasilan')
                                                                <div><span class="text-danger">{{ $message }}</span></div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

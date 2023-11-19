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

    <div class="row mb-5">
        <div class="col-md-12">
            <a href="" class="btn btn-dark"><i class="fe fe-arrow-left me-2"></i>Kembali</a>
        </div>
    </div>

    <!-- ROW-1 OPEN -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Data Kartu Keluarga Indonesia</div>
                </div>
                <div class="card-body">
                    {{-- <div class="text-center chat-image">
                        <div class="chat-profile">
                            <img src="">
                        </div>
                    </div> --}}
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
                                <ul class="list-group no-margin">
                                    <li class="list-group-item d-flex ps-3">
                                        <div class="social social-profile-buttons me-2">
                                            <a class="social-icon text-primary" href="javascript:void(0)"><i
                                                    class="fe fe-map-pin"></i></a>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" id="latitude" name="latitude" wire:model.defer="latitude"
                                                    class="form-control" placeholder="Latitude" autocomplete="off">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" id="longitude" name="longitude" wire:model.defer="longitude"
                                                    class="form-control" placeholder="Longitude" autocomplete="off">
                                            </div>
                                            <button type="button" class="btn btn-primary mt-3"
                                            onclick="requestGeolocationPermission()">Izinkan GPS</button>
                                        </div>

                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div id="map" wire:ignore></div>
                        </div>
                    </div>



                </div>
            </div>
        </div>


        <div class="col-xl-8">
            <input type="hidden" name="data_penduduk_id" value="">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form Validasi</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <ul class="list-group no-margin">
                                    <li class="list-group-item d-flex ps-3">
                                        <div class="row">
                                            <div class="col-xl-2">
                                                <img src="" class="card-img-left" alt="img">
                                            </div>
                                            <div class="col-xl-10">
                                                <div class="card-body">
                                                    <div class="row">
                                                        {{-- @foreach ($sasaran_punya_anak as $data_sasaran_punya_anak) --}}
                                                        <div class="col-xl-6">
                                                            <h5 class="card-title">

                                                            </h5>
                                                            <div class="form-group">
                                                                <label class="custom-switch form-switch me-5">
                                                                    <input type="radio" name="answer_"
                                                                        class="custom-switch-input" value="Ya"
                                                                        required>
                                                                    <span
                                                                        class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                                    <span class="custom-switch-description">Ya</span>
                                                                </label>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="custom-switch form-switch">
                                                                    <input type="radio" name="answer_"
                                                                        class="custom-switch-input" value="Tidak"
                                                                        required>
                                                                    <span
                                                                        class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                                    <span
                                                                        class="custom-switch-description">Tidak</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        {{-- @endforeach --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <ul class="list-group no-margin">
                                    <li class="list-group-item d-flex ps-3">
                                        <div class="row">
                                            <div class="col-xl-2">
                                                <img src="" class="card-img-left" alt="img">
                                            </div>
                                            <div class="col-xl-10">
                                                <div class="card-body">
                                                    <div class="row">
                                                        {{-- @foreach ($sasaran_pus as $data_pus) --}}
                                                        <div class="col-xl-6">
                                                            <h5 class="card-title">
                                                            </h5>
                                                            <div class="form-group">
                                                                <label class="custom-switch form-switch me-5">
                                                                    <input type="radio" name="answer_"
                                                                        class="custom-switch-input" value="Ya"
                                                                        required>
                                                                    <span
                                                                        class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                                    <span class="custom-switch-description">Ya</span>
                                                                </label>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="custom-switch form-switch">
                                                                    <input type="radio" name="answer_"
                                                                        class="custom-switch-input" value="Tidak"
                                                                        required>
                                                                    <span
                                                                        class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                                    <span
                                                                        class="custom-switch-description">Tidak</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        {{-- @endforeach --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <ul class="list-group no-margin">
                                    <li class="list-group-item d-flex ps-3">
                                        <div class="row">
                                            <div class="col-xl-2">
                                                <img src="" class="card-img-left" alt="img">
                                            </div>
                                            <div class="col-xl-10">
                                                <div class="card-body">
                                                    <div class="row">
                                                        {{-- @foreach ($penapisan_lingkungan as $data_lingkungan) --}}
                                                        <div class="col-xl-6">
                                                            <h5 class="card-title">
                                                            </h5>
                                                            <div class="form-group">
                                                                <label class="custom-switch form-switch me-5">
                                                                    <input type="radio" name="answer_"
                                                                        class="custom-switch-input" value="Ya"
                                                                        required>
                                                                    <span
                                                                        class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                                    <span class="custom-switch-description">Ya</span>
                                                                </label>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="custom-switch form-switch">
                                                                    <input type="radio" name="answer_"
                                                                        class="custom-switch-input" value="Tidak"
                                                                        required>
                                                                    <span
                                                                        class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                                    <span
                                                                        class="custom-switch-description">Tidak</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        {{-- @endforeach --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <ul class="list-group no-margin">
                                    <li class="list-group-item d-flex ps-3">
                                        <div class="row">
                                            <div class="col-xl-2">
                                                <img src="{{ asset('assets/images/brand/undraw_Positive_attitude_re_wu7d.png') }}"
                                                    class="card-img-left" alt="img">
                                            </div>
                                            <div class="col-xl-10">
                                                <div class="card-body">
                                                    <div class="row">
                                                        {{-- @foreach ($penapisan_pus as $data_penapisan_pus) --}}
                                                        <div class="col-xl-6">
                                                            <h5 class="card-title">

                                                            </h5>
                                                            <div class="form-group">
                                                                <label class="custom-switch form-switch me-5">
                                                                    <input type="radio" name="answer_"
                                                                        class="custom-switch-input" value="Ya"
                                                                        required>
                                                                    <span
                                                                        class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                                    <span class="custom-switch-description">Ya</span>
                                                                </label>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="custom-switch form-switch">
                                                                    <input type="radio" name="answer_"
                                                                        class="custom-switch-input" value="Tidak"
                                                                        required>
                                                                    <span
                                                                        class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                                    <span
                                                                        class="custom-switch-description">Tidak</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        {{-- @endforeach --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <ul class="list-group no-margin">
                                    <li class="list-group-item d-flex ps-3">
                                        <div class="row">
                                            <div class="col-xl-2">
                                                <img src="" class="card-img-left" alt="img">
                                            </div>
                                            <div class="col-xl-10">
                                                <div class="card-body">
                                                    <div class="row">
                                                        {{-- @foreach ($penapisan_kb as $data_penapisan_kb) --}}
                                                        <div class="col-xl-6">
                                                            <h5 class="card-title">

                                                            </h5>
                                                            <div class="form-group">
                                                                <label class="custom-switch form-switch me-5">
                                                                    <input type="radio" name="answer_"
                                                                        class="custom-switch-input" value="Ya"
                                                                        required>
                                                                    <span
                                                                        class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                                    <span class="custom-switch-description">Ya</span>
                                                                </label>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="custom-switch form-switch">
                                                                    <input type="radio" name="answer_"
                                                                        class="custom-switch-input" value="Tidak"
                                                                        required>
                                                                    <span
                                                                        class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                                    <span
                                                                        class="custom-switch-description">Tidak</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        {{-- @endforeach --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <ul class="list-group no-margin">
                                    <li class="list-group-item d-flex ps-3">
                                        <div class="row">
                                            <div class="col-xl-2">
                                                <img src="" class="card-img-left" alt="img">
                                            </div>
                                            <div class="col-xl-10">
                                                <div class="card-body">
                                                    <div class="row">
                                                        {{-- @foreach ($stunting as $data_stunting) --}}
                                                        <div class="col-xl-6">
                                                            <h5 class="card-title">
                                                            </h5>
                                                            <div class="form-group">
                                                                <label class="custom-switch form-switch me-5">
                                                                    <input type="radio" id="final_ya"
                                                                        name="answer_" class="custom-switch-input"
                                                                        value="Ya" readonly>
                                                                    <span
                                                                        class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                                    <span class="custom-switch-description">Ya</span>
                                                                </label>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="custom-switch form-switch me-5">
                                                                    <input type="radio" id="final_tidak"
                                                                        name="answer_" class="custom-switch-input"
                                                                        value="Tidak" readonly>
                                                                    <span
                                                                        class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                                    <span
                                                                        class="custom-switch-description">Tidak</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        {{-- @endforeach --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <ul class="list-group no-margin">
                                    <li class="list-group-item d-flex ps-3">
                                        <div class="row">
                                            <div class="col-xl-2">
                                                <img src="" class="card-img-left" alt="img">
                                            </div>
                                            <div class="col-xl-10">
                                                <div class="card-body">
                                                    <div class="row">
                                                        {{-- @foreach ($hasil as $data_hasil) --}}
                                                        <div class="col-xl-12">
                                                            <h5 class="card-title">
                                                            </h5>
                                                            <div class="form-group">
                                                                <select name="answer_"
                                                                    class="form-control form-select"
                                                                    data-bs-placeholder="Pilih Tingkat Kesejahteraan"
                                                                    required>
                                                                    <option value="0">0</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        {{-- @endforeach --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <ul class="list-group no-margin">
                                    <li class="list-group-item d-flex ps-3">
                                        <div class="row">
                                            <div class="col-xl-2">
                                                <img src="" class="card-img-left" alt="img">
                                            </div>
                                            <div class="col-xl-10">
                                                <div class="card-body">
                                                    <div class="row">
                                                        {{-- @foreach ($catin as $data_catin) --}}
                                                        <div class="col-xl-6">
                                                            <h5 class="card-title">
                                                            </h5>
                                                            <div class="form-group">
                                                                <label class="custom-switch form-switch me-5">
                                                                    <input type="radio" name="answer_"
                                                                        class="custom-switch-input" value="Ya"
                                                                        readonly>
                                                                    <span
                                                                        class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                                    <span class="custom-switch-description">Ya</span>
                                                                </label>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="custom-switch form-switch me-5">
                                                                    <input type="radio" name="answer_"
                                                                        class="custom-switch-input" value="Tidak"
                                                                        readonly>
                                                                    <span
                                                                        class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                                    <span
                                                                        class="custom-switch-description">Tidak</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        {{-- @endforeach --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-end">
                    <button type="submit" class="btn btn-success my-1" wire:click="save">Selesai</button>
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

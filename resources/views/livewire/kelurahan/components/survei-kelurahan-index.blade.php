<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <!--app-content open-->
    <div class="main-content app-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">

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
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Data Kartu Keluarga Indonesia</div>
                            </div>
                            <div class="card-body">
                                <div class="text-center chat-image">
                                    <div class="chat-profile">
                                        <img src="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Nomor Kartu Keluarga</label>
                                    <ul class="list-group no-margin">
                                        <li class="list-group-item d-flex ps-3">
                                            <div class="social social-profile-buttons me-2">
                                                <a class="social-icon text-primary" href="javascript:void(0)"><i class="fe fe-file-text"></i></a>
                                            </div>
                                            <a href="javascript:void(0)" class="my-auto"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Nama Kepala Keluarga</label>
                                    <ul class="list-group no-margin">
                                        <li class="list-group-item d-flex ps-3">
                                            <div class="social social-profile-buttons me-2">
                                                <a class="social-icon text-primary" href="javascript:void(0)"><i class="fe fe-user"></i></a>
                                            </div>
                                            <a href="javascript:void(0)" class="my-auto"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Nama Istri</label>
                                    <ul class="list-group no-margin">
                                        <li class="list-group-item d-flex ps-3">
                                            <div class="social social-profile-buttons me-2">
                                                <a class="social-icon text-primary" href="javascript:void(0)"><i class="fe fe-user"></i></a>
                                            </div>
                                            <a href="javascript:void(0)" class="my-auto"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Status Keluarga</label>
                                    <ul class="list-group no-margin">
                                        <li class="list-group-item d-flex ps-3">
                                            <div class="social social-profile-buttons me-2">
                                                <a class="social-icon text-primary" href="javascript:void(0)"><i class="fe fe-file"></i></a>
                                            </div>
                                            <a href="javascript:void(0)" class="my-auto"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <div class="col-xl-8">
                        <form method="POST" action="">
                            @csrf
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
                                                                <img src=""
                                                                    class="card-img-left" alt="img">
                                                            </div>
                                                            <div class="col-xl-10">
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        {{-- @foreach ($sasaran_punya_anak as $data_sasaran_punya_anak) --}}
                                                                            <div class="col-xl-6">
                                                                                <h5 class="card-title"></h5>
                                                                                <div class="form-group">
                                                                                    <label class="custom-switch form-switch me-5">
                                                                                        <input type="radio" name="answer_" class="custom-switch-input" value="Ya" ($hasil_survei->{'answer_'.$data_sasaran_punya_anak->id} == 'Ya') checked  disabled>
                                                                                            <span class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                                                            <span class="custom-switch-description">Ya</span>
                                                                                        </label>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="custom-switch form-switch">
                                                                                            <input type="radio" name="answer_" class="custom-switch-input" value="Tidak" ($hasil_survei->{'answer_'.$data_sasaran_punya_anak->id} == 'Tidak') checked  disabled>
                                                                                            <span class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                                                            <span class="custom-switch-description">Tidak</span>
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
                                                                <img src=""
                                                                    class="card-img-left" alt="img">
                                                            </div>
                                                            <div class="col-xl-10">
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        {{-- @foreach ($sasaran_pus as $data_pus) --}}
                                                                            <div class="col-xl-6">
                                                                                <h5 class="card-title">h5>
                                                                                <div class="form-group">
                                                                                    <label class="custom-switch form-switch me-5">
                                                                                            <input type="radio" name="answer_" class="custom-switch-input" value="Ya" ($hasil_survei->{'answer_'.$data_pus->id} == 'Ya') checked  disabled>
                                                                                            <span class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                                                            <span class="custom-switch-description">Ya</span>
                                                                                        </label>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="custom-switch form-switch">
                                                                                            <input type="radio" name="answer_" class="custom-switch-input" value="Tidak" ($hasil_survei->{'answer_'.$data_pus->id} == 'Tidak') checked  disabled>
                                                                                            <span class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                                                            <span class="custom-switch-description">Tidak</span>
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
                                                                <img src=""
                                                                    class="card-img-left" alt="img">
                                                            </div>
                                                            <div class="col-xl-10">
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        {{-- @foreach ($penapisan_lingkungan as $data_lingkungan) --}}
                                                                            <div class="col-xl-6">
                                                                                <h5 class="card-title"></h5>
                                                                                <div class="form-group">
                                                                                    <label class="custom-switch form-switch me-5">
                                                                                            <input type="radio" name="answer_" class="custom-switch-input" value="Ya" ($hasil_survei->{'answer_'.$data_lingkungan->id} == 'Ya') checked  disabled>
                                                                                            <span class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                                                            <span class="custom-switch-description">Ya</span>
                                                                                        </label>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="custom-switch form-switch">
                                                                                            <input type="radio" name="answer_" class="custom-switch-input" value="Tidak" ($hasil_survei->{'answer_'.$data_lingkungan->id} == 'Tidak') checked  disabled>
                                                                                            <span class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                                                            <span class="custom-switch-description">Tidak</span>
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
                                                                <img src=""
                                                                    class="card-img-left" alt="img">
                                                            </div>
                                                            <div class="col-xl-10">
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        {{-- @foreach ($penapisan_pus as $data_penapisan_pus) --}}
                                                                            <div class="col-xl-6">
                                                                                <h5 class="card-title"></h5>
                                                                                <div class="form-group">
                                                                                    <label class="custom-switch form-switch me-5">
                                                                                            <input type="radio" name="answer_" class="custom-switch-input" value="Ya" ($hasil_survei->{'answer_'.$data_penapisan_pus->id} == 'Ya') checked  disabled>
                                                                                            <span class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                                                            <span class="custom-switch-description">Ya</span>
                                                                                        </label>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="custom-switch form-switch">
                                                                                            <input type="radio" name="answer_" class="custom-switch-input" value="Tidak" ($hasil_survei->{'answer_'.$data_penapisan_pus->id} == 'Tidak') checked  disabled>
                                                                                            <span class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                                                            <span class="custom-switch-description">Tidak</span>
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
                                                                <img src=""
                                                                    class="card-img-left" alt="img">
                                                            </div>
                                                            <div class="col-xl-10">
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        {{-- @foreach ($penapisan_kb as $data_penapisan_kb) --}}
                                                                            <div class="col-xl-6">
                                                                                <h5 class="card-title"></h5>
                                                                                <div class="form-group">
                                                                                    <label class="custom-switch form-switch me-5">
                                                                                            <input type="radio" name="answer_" class="custom-switch-input" value="Ya" ($hasil_survei->{'answer_'.$data_penapisan_kb->id} == 'Ya') checked  disabled>
                                                                                            <span class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                                                            <span class="custom-switch-description">Ya</span>
                                                                                        </label>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="custom-switch form-switch">
                                                                                            <input type="radio" name="answer_" class="custom-switch-input" value="Tidak" ($hasil_survei->{'answer_'.$data_penapisan_kb->id} == 'Tidak') checked  disabled>
                                                                                            <span class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                                                            <span class="custom-switch-description">Tidak</span>
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
                                                                <img src=""
                                                                    class="card-img-left" alt="img">
                                                            </div>
                                                            <div class="col-xl-10">
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        {{-- @foreach ($stunting as $data_stunting) --}}
                                                                            <div class="col-xl-6">
                                                                                <h5 class="card-title"></h5>
                                                                                <div class="form-group">
                                                                                    <label class="custom-switch form-switch me-5">
                                                                                            <input type="radio" name="answer_" class="custom-switch-input" value="Ya" ($hasil_survei->{'answer_'.$data_stunting->id} == 'Ya') checked  disabled>
                                                                                            <span class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                                                            <span class="custom-switch-description">Ya</span>
                                                                                        </label>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="custom-switch form-switch">
                                                                                            <input type="radio" name="answer_" class="custom-switch-input" value="Tidak" ($hasil_survei->{'answer_'.$data_stunting->id} == 'Tidak') checked  disabled>
                                                                                            <span class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                                                            <span class="custom-switch-description">Tidak</span>
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
                                                                <img src=""
                                                                    class="card-img-left" alt="img">
                                                            </div>
                                                            <div class="col-xl-10">
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        {{-- @foreach ($hasil as $data_hasil) --}}
                                                                            <div class="col-xl-6">
                                                                                <h5 class="card-title"></h5>
                                                                                <div class="form-group">
                                                                                    <select class="form-control form-select" disabled>
                                                                                        <option value="" selected disabled></option>
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
                                                                <img src=""
                                                                    class="card-img-left" alt="img">
                                                            </div>
                                                            <div class="col-xl-10">
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        {{-- @foreach ($catin as $data_catin) --}}
                                                                            <div class="col-xl-6">
                                                                                <h5 class="card-title"></h5>
                                                                                <div class="form-group">
                                                                                    <label class="custom-switch form-switch me-5">
                                                                                            <input type="radio" name="answer_" class="custom-switch-input" value="Ya" ($hasil_survei->{'answer_'.$data_catin->id} == 'Ya') checked  disabled>
                                                                                            <span class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                                                            <span class="custom-switch-description">Ya</span>
                                                                                        </label>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="custom-switch form-switch">
                                                                                            <input type="radio" name="answer_" class="custom-switch-input" value="Tidak" ($hasil_survei->{'answer_'.$data_catin->id} == 'Tidak') checked  disabled>
                                                                                            <span class="custom-switch-indicator custom-switch-indicator-md"></span>
                                                                                            <span class="custom-switch-description">Tidak</span>
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
                                    <button type="submit" name="state" value="approved" class="btn btn-success my-1">Approve</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                </div>
                <!-- ROW-1 CLOSED -->

            </div>
            <!--CONTAINER CLOSED -->

        </div>
    </div>
    <!--app-content open-->
</div>

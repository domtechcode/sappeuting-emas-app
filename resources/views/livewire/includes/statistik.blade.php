<div>
    {{-- The best athlete wants his opponent at his best. --}}

    <!-- ROW-1 -->
    <div class="row">
        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
            <div class="card bg-success img-card box-primary-shadow">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="text-white">
                            <h2 class="mb-0 number-font">{{ $dataValidasiKrs }}</h2>
                            <p class="text-white mb-0">Data Validasi KRS</p>
                        </div>
                        <div class="ms-auto"> <i class="fe fe-check-square text-white fs-40 me-2 mt-2"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
            <div class="card bg-danger img-card box-primary-shadow">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="text-white">
                            <h2 class="mb-0 number-font">{{ $dataNonValidasiKrs }}</h2>
                            <p class="text-white mb-0">Data Non-Validasi KRS</p>
                        </div>
                        <div class="ms-auto"> <i class="fe fe-x-square text-white fs-40 me-2 mt-2"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
            <div class="card bg-success img-card box-primary-shadow">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="text-white">
                            <h2 class="mb-0 number-font">{{ $dataValidasiP3ke }}</h2>
                            <p class="text-white mb-0">Data Validasi P3KE</p>
                        </div>
                        <div class="ms-auto"> <i class="fe fe-check-square text-white fs-40 me-2 mt-2"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
            <div class="card bg-danger img-card box-primary-shadow">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="text-white">
                            <h2 class="mb-0 number-font">{{ $dataNonValidasiP3ke }}</h2>
                            <p class="text-white mb-0">Data Non-Validasi P3KE</p>
                        </div>
                        <div class="ms-auto"> <i class="fe fe-x-square text-white fs-40 me-2 mt-2"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ROW-1 END -->
</div>

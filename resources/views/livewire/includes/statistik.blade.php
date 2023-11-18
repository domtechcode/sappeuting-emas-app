<div>
    {{-- The best athlete wants his opponent at his best. --}}

    <!-- ROW-1 -->
    <div class="row">
        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
            <div class="card bg-info img-card box-primary-shadow">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="text-white">
                            <h2 class="mb-0 number-font">{{ $dataAll }}</h2>
                            <p class="text-white mb-0">Total Data</p>
                        </div>
                        <div class="ms-auto"> <i class="fe fe-file-text text-white fs-40 me-2 mt-2"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
            <div class="card bg-success img-card box-primary-shadow">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="text-white">
                            <h2 class="mb-0 number-font">{{ $dataValidasi }}</h2>
                            <p class="text-white mb-0">Data Validasi</p>
                        </div>
                        <div class="ms-auto"> <i class="fe fe-check-square text-white fs-40 me-2 mt-2"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
            <div class="card bg-danger img-card box-primary-shadow">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="text-white">
                            <h2 class="mb-0 number-font">{{ $dataNonValidasi }}</h2>
                            <p class="text-white mb-0">Data Non-Validasi</p>
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

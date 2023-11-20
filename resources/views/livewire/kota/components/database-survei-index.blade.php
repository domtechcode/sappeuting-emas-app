<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}

    <!-- PAGE-HEADER -->
    <div class="page-header">
        <h1 class="page-title">Data Survei</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Data Survei</a></li>
                <li class="breadcrumb-item active" aria-current="page">Home</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <div class="row">
        <div class="col-lg-12">
            <!--Row-->
            <div class="panel panel-primary">
                <div class=" tab-menu-heading">
                    <div class="tabs-menu1">
                        <!-- Tabs -->
                        <ul class="nav panel-tabs">
                            <li>
                                <button href="#tab1" class="active btn btn-primary mt-1 mb-1 me-3"
                                    data-bs-toggle="tab">Data Survei KRS
                                    <span class="badge bg-dark text-white ms-2"></span>
                                </button>
                            </li>
                            <li>
                                <button href="#tab2" class="btn btn-warning mt-1 mb-1 me-3"
                                    data-bs-toggle="tab">Data Survei P3KE
                                    <span class="badge bg-danger text-white ms-2"></span>
                                </button>
                            </li>
                            <li>
                                <button href="#tab3" class="btn btn-purple mt-1 mb-1 me-3"
                                    data-bs-toggle="tab">Cakupan
                                    <span class="badge bg-danger text-white ms-2"></span>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--Row End-->

            <!--Row -->
            <div class="panel-body tabs-menu-body">
                <div class="tab-content">
                    <div class="tab-pane active" id="tab1">
                        <livewire:kota.components.database-survei-krs-kota-index>
                    </div>

                    <div class="tab-pane" id="tab2">
                        <livewire:kota.components.database-survei-p3ke-kota-index>
                    </div>

                    <div class="tab-pane" id="tab3">
                        <livewire:kota.components.database-tabulasi-survei-krs-p3ke-index>
                    </div>

                </div>
            </div>
            <!--End Row-->
        </div>
    </div>




</div>

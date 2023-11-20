<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <h1 class="page-title">Database Survei P3KE</h1>
        <div>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Database Survei P3KE</a></li>
                <li class="breadcrumb-item active" aria-current="page">Home</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Database P3KE</div>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col">
                            <select id="perpage" name="perpage" wire:model.live="perpage" class="form-control form-select w-auto" >
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                        </div>
                        <div class="col d-flex justify-content-end">
                            <input type="text" class="form-control w-auto" placeholder="Search" wire:model.live.debounce.300ms="search" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table class="table border text-nowrap text-md-nowrap table-bordered table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th class="border-bottom-0">No</th>
                                            <th class="border-bottom-0">Nomor Keluarga Indonesia</th>
                                            <th class="border-bottom-0">Kepala Keluarga</th>
                                            <th class="border-bottom-0">Istri</th>
                                            <th class="border-bottom-0">Status Keluarga</th>
                                            <th class="border-bottom-0">Kecamatan</th>
                                            <th class="border-bottom-0">Kelurahan</th>
                                            <th class="border-bottom-0">RW</th>
                                            <th class="border-bottom-0">RT</th>
                                            <th class="border-bottom-0">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($dataSurveiP3ke as $key => $data)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $data->dataPenduduk->nomor_keluarga_indonesia }}</td>
                                                <td>{{ $data->dataPenduduk->nama_kepala_keluarga }}</td>
                                                <td>{{ $data->dataPenduduk->nama_istri }}</td>
                                                <td>{{ $data->dataPenduduk->status_keluarga }}</td>
                                                <td>{{ $data->dataPenduduk->kecamatan }}</td>
                                                <td>{{ $data->dataPenduduk->kelurahan }}</td>
                                                <td>{{ $data->dataPenduduk->rw }}</td>
                                                <td>{{ $data->dataPenduduk->rt }}</td>
                                                <td>
                                                    <div class="btn-list">
                                                        <a href="{{ route('surveiKader', ['state' => 'krs+p3ke', 'id' => $data->dataPenduduk->id]) }}" class="btn btn-icon btn-sm btn-primary"><i class="fe fe-edit"></i> Edit</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-end mt-3">
                            {{ $dataSurveiP3ke->links(data: ['scrollTo' => false]) }}
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- COL-END -->
    </div>
</div>

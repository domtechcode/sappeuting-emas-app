<div>
    <div class="modal fade" wire:ignore.self id="modalDetailSurveiP3ke" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Details Survei KRS</h5>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="table-responsive">
                                <table class="table border text-nowrap text-md-nowrap table-bordered table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th class="border-bottom-0">Nomor Keluarga Indonesia</th>
                                            <th class="border-bottom-0">Kepala Keluarga</th>
                                            <th class="border-bottom-0">Istri</th>
                                            <th class="border-bottom-0">Status Keluarga</th>
                                            <th class="border-bottom-0">Kecamatan</th>
                                            <th class="border-bottom-0">Kelurahan</th>
                                            <th class="border-bottom-0">RW</th>
                                            <th class="border-bottom-0">RT</th>
                                            <th class="border-bottom-0">Latitude</th>
                                            <th class="border-bottom-0">Longitude</th>
                                            <th class="border-bottom-0">Kader</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <td>{{ $nomorKeluargaIndonesia }}</td>
                                        <td>{{ $namaKepalaKeluarga }}</td>
                                        <td>{{ $namaIstri }}</td>
                                        <td>{{ $statusKeluarga }}</td>
                                        <td>{{ $kecamatan }}</td>
                                        <td>{{ $kelurahan }}</td>
                                        <td>{{ $rw }}</td>
                                        <td>{{ $rt }}</td>
                                        <td>{{ $latitude }}</td>
                                        <td>{{ $longitude }}</td>
                                        <td>{{ $userSurvei }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="table-responsive">
                                <table class="table border text-nowrap text-md-nowrap table-bordered table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th class="border-bottom-0">Pertanyaan</th>
                                            <th class="border-bottom-0">Kategori</th>
                                            <th class="border-bottom-0">Hasil</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Mempunyai Anak Baduta (0-23 Bulan)</td>
                                            <td>Baduta</td>
                                            <td>{{ $answer_1 }}</td>
                                        </tr>
                                        <tr>
                                            <td>Mempunyai Anak Balita (24-50Bulan)</td>
                                            <td>Balita</td>
                                            <td>{{ $answer_2 }}</td>
                                        </tr>
                                        <tr>
                                            <td>Pasangan Usia Subur</td>
                                            <td>PUS</td>
                                            <td>{{ $answer_3 }}</td>
                                        </tr>
                                        <tr>
                                            <td>Pasangan Usia Subur Hamil</td>
                                            <td>PUS Hamil</td>
                                            <td>{{ $answer_4 }}</td>
                                        </tr>
                                        <tr>
                                            <td>Apakah Keluarga Tidak Memiliki Sumber Air Minum Yang Layak ?</td>
                                            <td>Fasilitas Lingkungan Tidak Sehat</td>
                                            <td>{{ $answer_5 }}</td>
                                        </tr>
                                        <tr>
                                            <td>Apakah Keluarga Tidak Memiliki Jamban Yang Layak ?</td>
                                            <td>Fasilitas Lingkungan Tidak Sehat</td>
                                            <td>{{ $answer_6 }}</td>
                                        </tr>
                                        <tr>
                                            <td>Terlalu Muda (Umur Istri < 20 Tahun)</td>
                                            <td>PUS</td>
                                            <td>{{ $answer_7 }}</td>
                                        </tr>
                                        <tr>
                                            <td>Terlalu Tua (Umur Istri 35 Tahun s/d 40 Tahun)</td>
                                            <td>PUS</td>
                                            <td>{{ $answer_8 }}</td>
                                        </tr>
                                        <tr>
                                            <td>Terlalu Dekat (<2 Tahun)</td>
                                            <td>PUS</td>
                                            <td>{{ $answer_9 }}</td>
                                        </tr>
                                        <tr>
                                            <td>Terlalu Banyak (3 Anak)</td>
                                            <td>PUS</td>
                                            <td>{{ $answer_10 }}</td>
                                        </tr>
                                        <tr>
                                            <td>Bukan Peserta KB Modern</td>
                                            <td>KB Modern</td>
                                            <td>{{ $answer_11 }}</td>
                                        </tr>
                                        <tr>
                                            <td>Kategori Keluarga Beresiko Stunting</td>
                                            <td>Resiko Stunting</td>
                                            <td>{{ $answer_12 }}</td>
                                        </tr>
                                        <tr>
                                            <td>Tingkat Kesejahteraan</td>
                                            <td>Kesejahteraan Prioritas</td>
                                            <td>{{ $answer_13 }}</td>
                                        </tr>
                                        <tr>
                                            <td>Apakah ada anggota keluarga yang memiliki rencana menikah dalam 3 bulan ke depan?</td>
                                            <td>Catin</td>
                                            <td>{{ $answer_14 }}</td>
                                        </tr>
                                        <tr>
                                            <td>Pendampingan oleh TPK</td>
                                            <td>TPK</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah anggota keluarga</td>
                                            <td>Anggota Keluarga</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah anggota keluarga yang berprofesi sebagai tukang bangunan</td>
                                            <td>Anggota Keluarga</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah pengeluaran keluarga per bulan</td>
                                            <td>Anggota Keluarga</td>
                                            <td>-</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        window.addEventListener('closeModalAndReset', event => {
            $('#modalDetailSurveiP3ke').modal('hide');
        });
    </script>
@endpush

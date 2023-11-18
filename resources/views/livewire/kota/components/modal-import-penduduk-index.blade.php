<div>
    <div class="modal fade" wire:ignore.self id="modalImportPenduduk" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Import User</h5>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <x-forms.filepond wire:model="fileImport" allowFileTypeValidation allowFileSizeValidation
                        acceptedFileTypes="['application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/vnd.ms-excel']"
                        maxFileSize="1024mb" />
                </div>
                <div class="modal-footer">
                    <button type="button" wire:click="import" class="btn btn-success">Import</button>
                    <button type="button" wire:click="downloadFile" class="btn btn-info">Download Template Import</button>
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
    <script>
        window.addEventListener('closeModalAndReset', event => {
            $('#modalImportPenduduk').modal('hide');
        });
    </script>
@endpush

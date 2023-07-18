<div class="modal fade" id="ModalEdit{{ $pesanan->id }}" tabindex="-1" role="dialog" aria-labelledby="tambahobatmodalTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ubah Status Pesanan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <form action="{{ route('admin.pesanan.update', ['id' => $pesanan->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label class="form-label">Status Pesanan</label>
                            <select class="form-select form-select-lg" data-allow-clear="true" name="status">
                                <option value="{{ old('status', $pesanan->status) }}">{{ $pesanan->status }}
                                    (Current)</option>
                                @foreach (['PENDING', 'PROSES', 'SELESAI', 'DIBATALKAN'] as $status)
                                    @if ($status != $pesanan->status)
                                        <option value="{{ $status }}">{{ $status }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary"
                        data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

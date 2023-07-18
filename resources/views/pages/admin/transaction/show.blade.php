<div class="modal fade" id="ModalShow{{ $pesanan->id }}" tabindex="-1" role="dialog"
    aria-labelledby="tambahobatmodalTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Data Pesanan #{{$pesanan->id}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row g-2">
                    <div class="col mb-0">
                        <label class="form-label">Pembeli</label>
                        <input type="text" class="form-control" value="{{ $pesanan->user->name }}" readonly>
                    </div>
                    <div class="col mb-0">
                        <label class="form-label">Layanan</label>
                        <input type="text" class="form-control" value="{{ $pesanan->product->name }}" readonly>
                    </div>
                </div>

                <div class="row g-2 mt-3">
                    <div class="col mb-0">
                        <label class="form-label">User Game (Target)</label>
                        <input type="text" class="form-control" value="{{ $pesanan->user_game }}" readonly>
                    </div>
                    <div class="col mb-0">
                        <label class="form-label">Harga</label>
                        <input type="text" class="form-control"
                            value="{{ "Rp".number_format($pesanan->price,2,',','.') }}" readonly>
                    </div>
                </div>

                <div class="row g-2 mt-3">
                    <div class="col mb-0">
                        <label class="form-label">Tipe Pembayaran</label>
                        <input type="text" class="form-control" value="{{ $pesanan->payment_type }}" readonly>
                    </div>
                    <div class="col mb-0">
                        <label class="form-label">Bukti Pembayaran</label><br>
                        <div class="d-grid gap-2">
                            <a href="{{ asset('storage/'. old('proof_of_payment', $pesanan->proof_of_payment)) }}"
                                class="btn btn-primary" target="_blank">
                                Lihat Bukti
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row g-2 mt-3">
                    <div class="col mb-0">
                        <label class="form-label">Nama Pembeli</label>
                        <input type="text" class="form-control" value="{{ $pesanan->customer_name }}" readonly>
                    </div>
                    <div class="col mb-0">
                        <label class="form-label">Nomor Rekening / E-Wallet</label>
                        <input type="text" class="form-control"
                            value="{{ $pesanan->account_number }}" readonly>
                    </div>
                </div>

                <div class="row g-2 mt-3">
                    <div class="col mb-0">
                        <label class="form-label">Nomor Telepon</label>
                        <input type="text" class="form-control" value="{{ $pesanan->phone }}" readonly>
                    </div>
                    <div class="col mb-0">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control"
                            value="{{ $pesanan->email }}" readonly>
                    </div>
                </div>

                <div class="row g-2 mt-3">
                    <div class="col mb-0">
                        <label class="form-label">Status</label>
                        <input type="text" class="form-control" value="{{ $pesanan->status }}" readonly>
                    </div>
                    <div class="col mb-0">
                        <label class="form-label">Tanggal Pembelian</label>
                        <input type="text" class="form-control"
                            value="{{ $pesanan->created_at->format('d M Y J\a\m H:i:s') }}" readonly>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

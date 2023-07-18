<div class="modal fade" id="ModalDetail{{ $payment->id }}" tabindex="-1" role="dialog"
    aria-labelledby="tambahobatmodalTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 text-black" id="exampleModalLabel">Detail Order #{{ $payment->id }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="modal-body text-black">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Nomor Invoice</label>
                            <input type="text" name="name" class="form-control" value="#{{ $payment->id }}" readonly>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Nama Layanan</label>
                            <input type="text" name="name" class="form-control" value="{{ $payment->product->name }}"
                                readonly>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Harga</label>
                            <input type="text" name="name" class="form-control"
                                value="{{ "Rp".number_format($payment->price,2,',','.') }}" readonly>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">ID / Username Game</label>
                            <input type="text" name="name" class="form-control" value="{{ $payment->user_game }}"
                                readonly>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Tipe Pembayaran</label>
                            <input type="text" name="name" class="form-control" value="{{ $payment->payment_type }}"
                                readonly>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Bukti Pembayaran</label>
                            <div class="d-grid gap-2">
                                <a href="{{ asset('storage/'. old('proof_of_payment', $payment->proof_of_payment)) }}" class="btn btn-icon btn-primary" target="_blank">
                                    Lihat Bukti
                                </a>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Nama Pelanggan</label>
                            <input type="text" name="name" class="form-control" value="{{ $payment->customer_name }}"
                                readonly>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Nomor Rekening / DANA</label>
                            <input type="text" name="name" class="form-control" value="{{ $payment->account_number }}"
                                readonly>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">No. Telepon</label>
                            <input type="text" name="name" class="form-control" value="{{ $payment->phone }}"
                                readonly>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Email</label>
                            <input type="text" name="name" class="form-control" value="{{ $payment->email }}"
                                readonly>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="ModalEdit{{ $produk->id }}" tabindex="-1" role="dialog" aria-labelledby="tambahobatmodalTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ubah Data Produk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <form action="{{ route('admin.produk.update', ['id' => $produk->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label class="form-label">Game</label>
                            <select class="form-select form-select-lg" data-allow-clear="true" name="game_id">
                                @php
                                    $selectedGameId = $produk->game_id;
                                @endphp

                                @foreach ($games as $game)
                                    @if ($game->id == $selectedGameId)
                                        <option value="{{ $game->id }}" selected>{{ $game->name }}</option>
                                    @else
                                        <option value="{{ $game->id }}">{{ $game->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label class="form-label">Nama Produk</label>
                            <input type="text" name="name" class="form-control" value="{{ $produk->name }}" required>
                        </div>
                        <div class="col mb-0">
                            <label class="form-label">Harga</label>
                            <input type="number" name="price" class="form-control" value="{{ $produk->price }}" required>
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

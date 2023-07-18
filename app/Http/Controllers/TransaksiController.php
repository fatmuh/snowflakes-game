<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TransaksiController extends Controller
{
    public function index()
    {
        $data = Payment::orderByRaw("FIELD(status, 'PENDING', 'PROSES', 'SELESAI')")->latest()->get();
        return view('pages.admin.transaction.index', [
            'data' => $data,
        ]);
    }

    public function update(Request $request, $id)
    {
        $item = Payment::where('id', $id)->first();
        $data = $request->except(['_token']);
        $item->update($data);
        return redirect()->route('admin.pesanan.index')->with('success', 'Status Pesanan Berhasil Diubah!');
    }

    public function delete($id)
    {
        $item = Payment::findOrFail($id);
        if($item->proof_of_payment){
            Storage::delete($item->proof_of_payment);
        }
        $item->delete();
        return redirect()->route('admin.pesanan.index')->with('success', 'Pesanan Berhasil Dihapus!');
    }
}

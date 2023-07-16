<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $games = Game::all();
        $data = Product::latest()->get();
        return view('pages.admin.product.index', [
            'data' => $data,
            'games' => $games,
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'game_id' => 'required',
            'name' => 'required',
            'price' => 'required|numeric',
        ]);

        Product::create($validatedData);
        return redirect()->route('admin.produk.index')->with('success', 'Produk Berhasil Ditambah!');
    }

    public function update(Request $request, $id)
    {
        $item = Product::where('id', $id)->first();
        $data = $request->except(['_token']);

        $item->update($data);
        return redirect()->route('admin.produk.index')->with('success', 'Produk Berhasil Diubah!');
    }

    public function delete($id)
    {
        $item = Product::findOrFail($id);
        $item->delete();
        return redirect()->route('admin.produk.index')->with('success', 'Produk Berhasil Dihapus!');
    }
}

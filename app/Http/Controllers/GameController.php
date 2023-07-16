<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GameController extends Controller
{
    public function index()
    {
        $data = Game::latest()->get();
        return view('pages.admin.game.index', [
            'data' => $data,
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'image|file|max:2048',
        ]);

        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('image/game');
        }

        $slug = Str::slug($validatedData['name']);
        $validatedData['slug'] = $slug;

        Game::create($validatedData);
        return redirect()->route('admin.game.index')->with('success', 'Game Berhasil Ditambah!');
    }

    public function update(Request $request, $id)
    {
        $item = Game::where('id', $id)->first();
        $data = $request->except(['_token']);

        if($request->file('image')) {
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $data['image'] = $request->file('image')->store('image/game');
        }

        $slug = Str::slug($data['name']);
        $data['slug'] = $slug;

        $item->update($data);
        return redirect()->route('admin.game.index')->with('success', 'Game Berhasil Diubah!');
    }

    public function delete($id)
    {
        $item = Game::findOrFail($id);
        if($item->image){
            Storage::delete($item->image);
        }
        $item->delete();
        return redirect()->route('admin.game.index')->with('success', 'Game Berhasil Dihapus!');
    }
}

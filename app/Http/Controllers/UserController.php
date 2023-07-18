<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data = User::orderByRaw("CASE WHEN role = 'Admin' THEN 0 ELSE 1 END")
        ->latest()
        ->get();
        return view('pages.admin.user.index', [
            'data' => $data,
        ]);
    }

    public function update(Request $request, $id)
    {
        $item = User::where('id', $id)->first();
        $data = $request->except(['_token']);
        $item->update($data);
        return redirect()->route('admin.user.index')->with('success', 'Role User Berhasil Diubah!');
    }

    public function delete($id)
    {
        $item = User::findOrFail($id);
        $item->delete();
        return redirect()->route('admin.user.index')->with('success', 'User Berhasil Dihapus!');
    }
}

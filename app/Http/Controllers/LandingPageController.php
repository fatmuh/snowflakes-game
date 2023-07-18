<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Payment;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LandingPageController extends Controller
{
    public function index()
    {
        $games = Game::all();
        return view('landing.index', [
            'games' => $games,
        ]);
    }

    public function detail($slug)
    {
        $games = Game::where('slug', $slug)->first();
        $product = Product::where('game_id', $games->id)->get();
        $randomData = Game::inRandomOrder()->take(2)->get();
        return view('landing.detail', [
            'games' => $games,
            'product' => $product,
            'randomData' => $randomData,
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_game' => 'required',
            'product_id' => 'required',
            'payment_type' => 'required',
            'proof_of_payment' => 'image|file|max:2048',
            'customer_name' => 'required',
            'account_number' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);

        if($request->file('proof_of_payment')) {
            $validatedData['proof_of_payment'] = $request->file('proof_of_payment')->store('image/proof_of_payment');
        }

        $product = Product::where('id', $request->product_id)->first();

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['status'] = 'PENDING';
        $validatedData['price'] = $product->price;

        Payment::create($validatedData);
        return redirect()->route('landing.history-order')->with('success', 'Berhasil Memesan Produk!');
    }

    public function historyOrder()
    {
        $data = Payment::where('user_id', auth()->user()->id)->latest()->get();

        $data = $data->sortBy(function ($item) {
            switch ($item->status) {
                case 'PENDING':
                    return 1;
                case 'PROSES':
                    return 2;
                case 'SELESAI':
                    return 3;
                default:
                    return 4;
            }
        });

        return view('landing.history', [
            'data' => $data,
        ]);
    }

    public function profil()
    {
        return view('landing.profil');
    }

    public function changePassword()
    {
        return view('landing.change-password');
    }

    public function update(Request $request)
    {
        $user = auth()->user();
        $userData = $request->except(['_token']);
        $user->fill($userData);
        $user->save();
        return redirect()->route('landing.profil')->with('success', 'Profil Berhasil Diubah!');
    }

    public function changePasswordPost(Request $request)
    {
        $validatedData = $request->validate([
            'old_password' => ['required', 'current_password'],
            'password'     => ['required', 'confirmed']
        ]);

        $user = Auth::user();
        $user->password = Hash::make($validatedData['password']);
        $user->save();

        return redirect()->route('landing.changePassword')->with('success', 'Kata Sandi Berhasil Diubah!');
    }
}

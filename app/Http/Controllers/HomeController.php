<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Payment;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $produk = Product::all()->count();
        $game = Game::all()->count();
        $payment = Payment::all()->count();
        $month = Carbon::now()->format('m');
        $totalPendapatan = Payment::whereMonth('created_at', $month)->sum('price');

        return view('home', [
            'produk' => $produk,
            'game' => $game,
            'payment' => $payment,
            'totalPendapatan' => $totalPendapatan,
        ]);
    }
}

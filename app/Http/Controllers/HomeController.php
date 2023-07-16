<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Product;
use Illuminate\Http\Request;

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
        return view('home', [
            'produk' => $produk,
            'game' => $game,
        ]);
    }
}

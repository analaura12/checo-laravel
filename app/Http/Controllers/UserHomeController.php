<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Models\Establishment;
use App\Models\Product;

class UserHomeController extends Controller
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
        $establishments = Establishment::all();
        $products = Product::all(); 
        return view('user.home')-> with(compact('establishments', 'products'));  
    }
}

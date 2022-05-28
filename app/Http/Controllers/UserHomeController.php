<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Models\Establishment;
use App\Models\Product;
use App\Models\EvaluateEstablishment;

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
        foreach($establishments as $establishment){
            $establishment->score_final = 0;
            $score_exists = EvaluateEstablishment::where("establishment_id", $establishment->id)->exists();
            if($score_exists){
                $score_count = EvaluateEstablishment::where("establishment_id", $establishment->id)->count();
                $score_sum = EvaluateEstablishment::where("establishment_id", $establishment->id)->sum('evaluate_score');
                
                $establishment->score_final = $score_sum/$score_count;
            }
        }
        $products = Product::all(); 
        return view('user.home')-> with(compact('establishments', 'products'));  
    }
}

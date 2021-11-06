<?php

namespace App\Http\Controllers;

use App\Models\Reserve;
use App\Models\Establishment;
use App\Models\Product;
use App\Models\User;
use App\Models\Table;
use App\Models\StatusReserve;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; 

use Auth;

class UserReserveController extends Controller
{

    /**
     * Display a listing of the resource. 
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $reserves = Reserve::where('user_id', '=', auth()->guard('web')->user()->id)->get();
        $establishments = Establishment::all();
        $products = Product::all(); 
        $tables = Table::all(); 
        return view('user.reserve.index')-> with(compact('reserves','establishments', 'products','tables'));  
    }

    public function update(Request $request, $id)
    {
        $req = $request->all();
        $req['status_id'] = 5;
        $reserve = Reserve::find($id)->update($req);

        if($reserve != true){
            return redirect()->back()->with('error', 'Erro ao atualizar a reserva!');
        }

        return redirect()->back()->with('reserve')->with('success', 'Reserva cancelada com sucesso!'); 
    }

}

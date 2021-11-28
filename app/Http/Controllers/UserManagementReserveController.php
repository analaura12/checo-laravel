<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Table;
use App\Models\Product;
use App\Models\Reserve;

class UserManagementReserveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $establishment_id = $id;
        $tables = Table::where('establishment_id', '=', $id)->get();
        $products = Product::where('establishment_id', '=', $id)->get();
        return view('user.management-reserve.create')->with(compact('products', 'tables', 'establishment_id'));
    }

    public function store(Request $request)
    {
        Reserve::create([
            'date' => $request->input('date'),
            'hour' => $request->input('hour'),
            'observation' => $request->input('observation'), 
            'establishment_id' => $request->input('establishment_id'),
            'user_id' => auth()->guard('web')->user()->id,
            'table_id' => $request->input('table_id'),
            'product_id' => $request->input('product_id'),
            'status_id' => 1,
        ]);

       return redirect()->route('user.reserve')->with('success', 'Reserva efetuada com sucesso!');
    }
}

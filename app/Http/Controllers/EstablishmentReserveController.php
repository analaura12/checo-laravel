<?php

namespace App\Http\Controllers;

use App\Models\Reserve;
use App\Models\Establishment;
use App\Models\Product;
use App\Models\StatusReserve;
use App\Models\User;
use App\Models\Table;

use Illuminate\Http\Request;

class EstablishmentReserveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reserves = Reserve::where('establishment_id', '=', auth()->guard('establishment')->user()->id)->get();
        $user = User::all();
        $products = Product::all(); 
        $tables = Table::all(); 
        return view('establishment.reserve.index')-> with(compact('reserves', 'products','tables', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $req = $request->all();
        $status = StatusReserve::where('id', '=', $id)->get();
        $req['status_id'] = $status;
        
        if($status != true){
            return redirect()->back()->with('error', 'Erro na mudança de status!');
        }

        return redirect()->back()->with('reserve')->with('success', 'Status alterado com sucesso!'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

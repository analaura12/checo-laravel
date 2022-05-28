<?php

namespace App\Http\Controllers;

use App\Models\Reserve;
use App\Models\Establishment;
use App\Models\Product;
use App\Models\StatusReserve;
use App\Models\User;
use App\Models\Table;
use App\Models\EvaluateUser;

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
        $reserves = Reserve::with(['Product', 'Table', 'Status', 'Establishment', 'User'])->where('establishment_id', '=', auth()->guard('establishment')->user()->id)->get();

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
    public function update($id, $status_id)
    {
        $status = Reserve::find($id);

        if($status) {
            $status->status_id = $status_id;
            $status->save();
        }

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

    public function avaliable(Request $request)
    {   
        $evaluate = EvaluateUser::create($request->evaluate);
        if($evaluate != true){
            return redirect()->back()->with('error', 'Erro ao avaliar o estabelecimento!');
        }

        return redirect()->back()->with('reserve')->with('success', 'Avaliação feita com sucesso!'); 
    }
}

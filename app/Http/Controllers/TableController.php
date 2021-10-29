<?php

namespace App\Http\Controllers;

use App\Models\Table;

use Illuminate\Http\Request;

class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tables = Table::where('user_id', '=', auth()->guard('establishment')->user()->id)->get();
        return view('establishment.table.index')->with(compact('tables'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('establishment.table.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Table::create($request->all());

        return redirect()->back()->with('success', 'Mesa cadastrada com sucesso!');
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
        $table = Table::find($id);
        return view('establishment.table.edit')->with(compact('table'));
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
        $table = Table::find($id)->update($request->all());

        if($table != true){
            return redirect()->back()->with('error', 'Erro ao atualizar dados da mesa!');
        }

        return redirect()->route('table')->with('success', 'Mesa atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $table = Table::destroy($id);
        
        if($table != true){
            return redirect()->back()->with('error', 'Houve um erro ao deletar o registro!');
        }

        return redirect()->back()->with('success', 'Mesa deletada com sucesso!');
    }
}

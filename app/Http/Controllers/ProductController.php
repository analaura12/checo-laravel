<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('establishment.product.index')->with(compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('establishment.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = $request->all();

        $convertBase64 = function ($file) {
            $imagedata = file_get_contents($file);
            return base64_encode($imagedata);
        };

        $product['image'] = $convertBase64($product['image']);

        Product::create($product);
        
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
        $product = Product::find($id);
        return view('establishment.product.edit')->with(compact('product'));
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

        $convertBase64 = function ($file) {
            $imagedata = file_get_contents($file);
            return base64_encode($imagedata);
        };

        $req['image'] = $convertBase64($req['image']);

        $product = Product::find($id)->update($req);

        if($product != true){
            return redirect()->back()->with('error', 'Erro ao atualizar dados do produto!');
        }

        return redirect()->route('product')->with('success', 'Produto atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::destroy($id);
        if($product != true){
            return redirect()->back()->with('error', 'Houve um erro ao deletar o registro!');
        }

        return redirect()->back()->with('success', 'Produto deletado com sucesso!');
    }
}

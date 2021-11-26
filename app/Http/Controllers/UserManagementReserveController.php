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
        $tables = Table::where('establishment_id', '=', $id)->get();
        $products = Product::where('establishment_id', '=', $id)->get();
        return view('user.management-reserve.create')->with(compact('products', 'tables'));
    }
}

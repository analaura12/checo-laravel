<?php

namespace App\Http\Controllers;

use App\Models\Reserve;

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
        return view('user.reserve.index');
    }

}

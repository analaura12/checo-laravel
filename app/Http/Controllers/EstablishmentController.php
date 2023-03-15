<?php

namespace App\Http\Controllers;

use App\Models\Establishment;
use App\Models\EvaluateEstablishment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Auth;

class EstablishmentController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('establishment.index');
    }

    public function create()
    {
        return view('auth.register-establishment');
    }

    public function register(Request $request)
    {

        if($request->get('password') != $request->get('password_confirmation')){
            return redirect()->back()->withErrors(['errors' => 'Senhas diferentes'])->withInput();
        }

        $validator = validator($request->all(), [
            'email' => 'required|min:3|max:100|unique:establishments',
            'cnpj' => 'required|unique:establishments',
            'cellphone' => 'required',
            'password' => 'required|min:8',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $convertBase64 = function ($file) {
            $imagedata = file_get_contents($file);
            return base64_encode($imagedata);
        };

        $profile_image = $convertBase64($request['profile_image']);

        $data = ['name' => $request->get('name'), 'email' => $request->get('email'), 'password' => Hash::make($request->get('password')), 'cnpj' => $request->get('cnpj'), 'cellphone' => $request->get('cellphone'), 'profile_image' => $profile_image];

        $response  = Establishment::create($data);

        return redirect()->route('establishment.login')->with('success', 'Estabelecimento cadastrado com sucesso!');
    }

    public function login()
    {
        return view('auth.login-establishment');
    }

    public function postLogin(Request $request)
    {
        $validator = validator($request->all(), [
            'email' => 'required|min:3|max:100',
            'password' => 'required|min:8',
        ]);
        
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $credentials  = ['email' => $request->get('email'), 'password' => $request->get('password')];    

        if(!auth()->guard('establishment')->attempt($credentials)){
            return redirect()->back()->withErrors(['errors' => 'Login Inválido'])->withInput();
        }
        
        return redirect()->route('establishment');
    }

    public function logout(){
        auth()->guard('establishment')->logout();

        return redirect()->route('establishment.login');
    }

    public function rating(){
        $ratings = EvaluateEstablishment::where('establishment_id', '=', auth()->guard('establishment')->user()->id)->with('User')->get();
        return view('establishment.rating.index')->with(compact('ratings'));
    }
}

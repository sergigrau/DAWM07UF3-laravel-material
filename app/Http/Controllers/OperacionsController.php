<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ContactFormRequest;


// cal instal·lar
// composer require "laravelcollective/html":"^5.2.0"

class OperacionsController extends Controller
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
        return view('home');
    }

    public function sumar($n=0, $m=0)
    {

        if($n<0 || $n>10){
            return view('home');
        }
        else{
            return view('suma', ['n'=>$n,'m'=>$m]);
        }

    }
    public function restar($n=0, $m=0)
    {
               return view('resta',['n'=>$n,'m'=>$m]);

    }
    public function llistar($nota=0)
    {
        $alumnes = DB::select('select * from alumne where nota >= ?', [$nota]);
        return view('llista', ['alumnes' => $alumnes]);

    }

    public function mostrar()
    {
        return view('mostrar');
    }

    public function desar(Request $request)
    {

        $alumne = [];

    $alumne['id'] = $request->get('id');
    $alumne['nom'] = $request->get('nom');
    $alumne['nota'] = $request->get('nota');

    DB::insert('insert into alumne (id, nom, nota) values (?, ?, ?)', 
    [ $alumne['id'], $alumne['nom'], $alumne['nota']]);

    }
   


}


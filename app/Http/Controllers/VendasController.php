<?php

namespace App\Http\Controllers;

use App\Models\Vendas;
use Illuminate\Http\Request;

class VendasController extends Controller
{
    public function index(){
        $vendas = Vendas::all();
        return view('vendas.index',['vendas'=>$vendas]);
    }
}

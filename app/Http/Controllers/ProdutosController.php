<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index(){
        $produtos = Produtos::all();
        return view('produtos.index',['produtos'=>$produtos]);
    }

    public function edit($id){
        $produtos = Produtos::findOrFail($id);
        return view('produtos.edit',['produtos'=>$produtos]);
    }

    public function update($id){
        $produtos = Produtos::findOrFail($id);
        $produtos->preco_venda = request()->get('preco_venda');
        $produtos->save();
        return redirect()->route('produtos.index');
    }
}

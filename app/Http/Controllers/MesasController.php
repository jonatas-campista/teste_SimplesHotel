<?php

namespace App\Http\Controllers;

use App\Models\Mesas;
use App\Models\Movimentacao_mesas;
use App\Models\Produtos;
use Illuminate\Http\Request;

class MesasController extends Controller
{
    public function index(){
        $mesas= Mesas::all();
        return view('mesas.index',['mesas' => $mesas]);
    }

    public function edit($id){
        $mesas = Mesas::findOrFail($id);
        $produtos = Produtos::all();
        $movimentacao= Movimentacao_mesas::where(['movimentacao_id_mesa',$id]);
        return view('mesas.edit',['mesas'=>$mesas, 'produtos'=>$produtos, 'movimentacoes'=> $movimentacao]);

    }

    public function update($id){
        $mesa = Mesas::findOrFail($id);
        $mesa->clientes_por_mesa = request()->get('clientes_por_mesa');
        $mesa->status_mesa = request()->get('status_mesa');
        $mesa->save();
        return redirect()->route('mesas.index');
    }

    public function store(Request $request){
        /*
            $mesa = new Produtos();
            $mesa->idmesa = request()->get('idmesa');
            $mesa->idvenda= request()->get('idvenda');
            $mesa->idproduto= request()->get('idproduto');
            $mesa->save();
            return redirect()->route('mesas.edit');*/  
    }

    public function create(){;
        return view('mesas.create');
    }

    public function add($id){
        $idProd = request()->get('idproduto');
        $quant = request()->get('quantidade');
        
        $prod = Produtos::findOrFail($idProd);
        
        $mov = new Movimentacao_mesas();
        $mov->movimentacao_id_mesa = $id;
        $mov->movimentacao_id_produto = $idProd;
        $mov->quantidade = $quant;
        $mov->valor = $quant * $prod->valor;
        
        $mov->save();


        // idMesa, idProduto, input(quantidade)
        return redirect()->route('mesas.edit');
    }
}



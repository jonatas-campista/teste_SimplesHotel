<?php

namespace App\Http\Controllers;

use App\Models\Mesas;
use App\Models\Movimentacao_mesas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovimentacaoController extends Controller
{
    public function index(){

        return view('movimentacao.index');
    }
}

<?php


use App\Http\Controllers\MesasController;
use App\Http\Controllers\MovimentacaoController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\VendasController;
use App\Models\Movimentacao_mesas;
use Illuminate\Support\Facades\Route;



//mesas
Route::get('/',[MesasController::class,'index'] )->name('mesas.index')->middleware('auth');
Route::get('/mesas/{id}', [MesasController::class,'edit'])->name('mesas.edit');
Route::post('/mesas/{id}',[MesasController::class,'update'])->name('mesas.update');
Route::post('/mesas/create',[MesasController::class,'create'])->name('mesas.create');
Route::post('mesas/{id}/add',[MesasController::class,'add'])->name('mesas.add');


//produtos
Route::get('/produtos',[ProdutosController::class,'index'])->name('produtos.index');
route::get('/produtos/{id}',[ProdutosController::class,'edit'])->name('produtos.edit');
Route::post('/produtos/{id}',[ProdutosController::class,'update'])->name('produtos.update');


//caixa
Route::get('/vendas',[VendasController::class,'index'])->name('vendas.index');
Route::get('/movimentacao',[MovimentacaoController::class,'index'])->name('movimentacao.index');

   

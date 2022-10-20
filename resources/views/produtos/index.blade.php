@extends('layouts.dashboard')
@section('title','Produtos | Dashboard')
@section('content')

<!-- Inicio do conteudo do administrativo -->
<div class="wrapper">
  <h3 class="text-center">Produtos</h3>
  <div class="row" style="justify-content: center ">
    <table class="table table-bordered table-hover">
      <tr class="table-light">
        <th>Id</th>
        <th>Produto</th>
        <th>Valor</th>
        <th>Funcões</th>
      </tr>
      <tr>
        @foreach($produtos as $produto)
        <td>{{$produto->id}}</td>
        <td>{{$produto->descricao}}</td>
        <td>{{$produto->preco_venda}}</td>
        <td><a href="{{ route('produtos.edit',$produto->id) }}" class="btn btn-primary" >Alterar</a></td>
      </tr>
      @endforeach
    </table>
    <footer class="text-center">
      <p>teste Simples-Hotel &copy; 2022</p>
    </footer>
  </div>
  <!-- Fim do conteudo do administrativo -->


  @endsection
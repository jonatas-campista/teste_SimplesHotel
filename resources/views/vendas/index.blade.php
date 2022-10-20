@extends('layouts.dashboard')
@section('title','Vendas | Dashboard')
@section('content')

<!-- Inicio do conteudo do administrativo -->


<div class="wrapper">
    <div class="row" >
        <table class="table table-bordered table-hover">
            <tr class="table-light">
                <th>Mesa</th>
                <th>Valor</th>
                <th>Data</th>
            </tr>
            @foreach($vendas as $venda)
            <tr>
                <td>{{$venda->idmesa}}</td>
                <td>{{$venda->valor_total}}</td>
                <td>{{$venda->data_venda}}</td>
            </tr>
            @endforeach
        </table>
        <footer class="text-center">
            <p>teste Simples-Hotel &copy; 2022</p>
        </footer>
    </div>
    <!-- Fim do conteudo do administrativo -->

    @endsection
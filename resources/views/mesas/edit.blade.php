@extends('layouts.dashboard')
@section('title','Mesa | Dashboard')
@section('content')
<!-- Inicio Navbar -->
<!-- Inicio do conteudo do administrativo -->
<div class="wrapper" style="padding: 20px;">
    <h1 class="text-center">MESA {{$mesas->id}}</h1>
    <div class="row" style="justify-content: center ">
        <div class="col" >
            <h3 class="text-center">Produtos</h3>
            <table class="table table-bordered table-hover text-center">
                <tr class="table-light "> 
                    <th>Produto</th>
                    <th>Valor</th>
                    <th>quantidade</th>
                    <th>funçoes</th>
                </tr>
                @foreach($produtos as $produto)
                <tr>
                    <form route="{{route('mesas.create')}}" method="post">
                        <td>{{$produto->descricao}}</td>
                        <td  >{{$produto->preco_venda}}</td>
                        <td>
                        <input type="hidden" value="{{ $produto->id }}" name="idproduto">
                        <input type="number" name="quantidade" id="num2" style="width: 100px;"></td>
                        <td><button type="submit" class="btn btn-primary">Adicionar</a></td>
                    </form>
                </tr>
                @endforeach
            </table>
        </div>
        <div class="col">
            <h3 class="text-center">Movimentações</h3>
            <table class="table table-bordered table-hover">
                <tr class="table-light">
                    <th>Mesa</th>
                    <th>Produto</th>
                    <th>Valor</th>
                    <th>Data</th>
                </tr>
                <tr>
                    @foreach ($movimentacoes as $movimentacao)
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><a href="" class="btn btn-primary">excluir</a></td>
                    @endforeach
                </tr>
            </table>
        </div>
    </div>
    <div class="row" style="justify-content: center ">
            <form route="{{ route('mesas.update', $mesas->id) }}" method="POST" style="width: 400px;">
                @csrf
                <div class="row justify-content-center">
                    <label >Clientes*</label>
                    <input type="text" name="clientes_por_mesa" value="{{$mesas->clientes_por_mesa}}" class="form-control" required> 
                    <label for="">Status da mesa</label>
                    <select class="form-select" name="status_mesa" riquered>
                        <option value="0">DISPONIVEL</option>
                        <option value="1">OCUPADO</option>
                    </select>
                </div>
            <div class="col d-flex justify-content-center">
                <a href="#" class="btn btn-success me-3" name>pagamento</a>
                <button type="submit" class="btn btn-success me-3">Concluir</button>
                <a href="{{ URL::to('/mesas') }}" class="btn btn-success me-3">Voltar</a>
            </div>
            </form>
    </div>
    <!-- Fim do conteudo do administrativo -->
</div>
@endsection









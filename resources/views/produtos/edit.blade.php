@extends('layouts.dashboard')
@section('title','Produto | Dashboard')
@section('content')


<div class="d-flex justify-content-center " style="width: 100%;">
<form action="{{route('produtos.update',$produtos->id)}}" method="post" >
    @csrf
    <div class="row">
        <h1 class="text-center">{{$produtos->descricao}}</h1>
        <div class="col">
            <label for="valor">Valor</label>
            <input type="text" class="form-control" name="preco_venda" value="{{$produtos->preco_venda}}">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Alterar valor</button>
</form>
</div>

@endsection
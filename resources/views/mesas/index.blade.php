@extends('layouts.dashboard')
@section('title','Mesas | Dashboard')
@section('content')
<!-- Inicio Navbar -->
<!-- Inicio do conteudo do administrativo -->
<div class="wrapper">
  <div class="row ">
    <div class="top-list text-center">
      <h1 class="title-content ">Mesas</h1>
    </div>
    <div class="cards-list" style="display: flex;justify-content:center;flex-wrap:wrap;">
      @foreach($mesas as $mesa)
      <div class="card bg-danger text-white" style="width: 250px;height:150px;">
        <p>{{ $mesa->teste()}}</p>
        <p>{{ $mesa->status()}}</p>
        <a href="{{route('mesas.edit',$mesa->id)}}" class="btn btn-secondary">visualizar</a>
      </div>
      @endforeach
    </div>
  </div>
  <footer class="text-center">
    <p>teste Simples-Hotel &copy; 2022</p>
  </footer>
</div>
<!-- Fim do conteudo do administrativo -->
<!-- Fim Conteudo -->
@endsection
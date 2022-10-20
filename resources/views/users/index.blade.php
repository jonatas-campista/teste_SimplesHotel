@extends('layouts.main')
@section('title','login-teste')
@section('content')
<style>
  .navbar {
    display: none;
  }
</style>
<div class="container-fluid p-0" style="background-image: url('https://vinicolaaraucaria.com.br/wp-content/uploads/2020/06/interna_restaurante-1-1400x700.jpg');">
  <section class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <form action="{{route('auth.user')}}" method="post" class="bg-light p-3" style="width: 300px;height:350px;opacity: 0.9;">
      @csrf
      <h1 class="text-center">Login</h1>
      <div class="mb-3">
        <label for="name" class="form-label">name</label>
        <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Senha</label>
        <input type="password" class="form-control" name="password" id="password">
      </div>
      <div class="text-center">
        <button type="submit" class="btn btn-primary">Entrar</button>
      </div>
    </form>
</div>
</section>
@endsection
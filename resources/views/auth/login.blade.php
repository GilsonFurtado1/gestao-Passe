@extends('layouts.login')

@section('content')

<h1 class="title-login">Área Restrita</h1>

<x-alert/>

<form class="mt-4" action="{{ route('login.process') }}" method="POST"> 
    @csrf  <!--permite aceitar dados apenas deste formulario -->
    @method('POST')

    <div class="form-group-login">
        <label for="email" class="form-label-login">E-mail</label>
        <input type="email" name="email" id="email" placeholder="Escreva o e-mail do utilizador"
               class="form-input-login" value="{{ old('email') }}" required>
    </div>

    <div class="form-group-login">
        <label for="password" class="form-label-login">Password</label>
        <input type="password" name="password" id="password" placeholder="Escreva o password do utilizador"
               class="form-input-login" required>
    </div>

    <div class="btn-group-login">
        <a href="#" class="link-login">Esqueceu o password?</a>
        <button type="submit" class="btn-primary-md">Acessar</button>
    </div>

    <div class="mt-4 text-center">
      <a href="#" class="link-login">Criar nova conta!</a>
    </div>
</form> 

@endsection

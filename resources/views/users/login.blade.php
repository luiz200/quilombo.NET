@extends('layouts.main')

@section('title', 'Login')

@section('content')
<div class="box">
    <h1>Login</h1>
    <div class="container" id="main-container">
        <form id="registro-form" name="caixalogin">
        <legend>Acesso Restrito</legend>
            <div class="half-box spacing">
                <label for="name">Nome:</label><br>
                <input type="text" name="name"  id="name" placeholder="Digite seu Nome">
            </div>
            <div class="half-box">
                <label for="password">Senha:</label><br>
                <input type="password" name="password"    id="password" placeholder="Digite sua senha">
            </div>
            <div class="full-box">
                <input type="submit" id="btn-submit" value="Entrar">
                </div>
        </form>
    </div>
</div>
@endsection
@extends('layouts.main')

@section('title', 'Novo Usuário')

@section('content')

    <div class="container" id="main-container">
        <h1>Cadastrar Quilombo</h1>
        <form id="registro-form">
            <div class="full-box">
               <label for="e-mail">E-mail:</label><br>
                <input type="e-mail" name="e-mail"    id="e-mail" placeholder="Digite seu e-mail">
            </div>
            <div class="half-box spacing">
                <label for="name">Nome:</label><br>
                 <input type="text" name="name"  id="name" placeholder="Digite seu Nome">
             </div>
             <div class="half-box">
                <label for="password">Senha:</label><br>
                 <input type="password" name="password"    id="password" placeholder="Digite sua senha">
             </div>
             <div class="half-box">
                <label for="passconfirmation">Confirme sua senha:</label><br>
                 <input type="password" name="passconfirmation"    id="passconfirmation" placeholder="Confirme sua senha">
             </div>
             <div class="full-box">
                <input type="submit" id="btn-submit" value="Registrar">
                </div>
        </form>
    </div>

@endsection
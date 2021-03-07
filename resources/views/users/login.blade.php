@extends('layouts.main')

@section('title', 'Login')

@section('content')
<style>
    form{
    text-align: center;
    height: 100px;
    
    

}

legend{
    text-align: center;
}
fieldset{
    text-align: center;
    background-color: salmon;
    position: absolute;
    left:6000px;
    margin-top:2px;
    width:225px;
    height:170px;
    border: darksalmon;
}
    </style>
<fieldset>
        <legend>Acesso Restrito</legend>
        <form name="caixalogin">
        <div class="container" id="main-container">
        <h1>Login</h1>
        <form id="registro-form">
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
</form>
</fieldset>
@endsection
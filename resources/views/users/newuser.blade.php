@extends('layouts.main')

@section('title', 'Novo Usuário')

@section('content')

<body>
    <div id="d"></div>
        <form class="border container">
            <br>
            <legend>Novo Usuario</legend>
                @csrf
                <br>
                <div class="mb-3">
                    <label class="form-label" for="email">E-mail</label>
                    <input class="form-control" type="e-mail" name="e-mail"  id="email" placeholder="Digite seu e-mail" style="background-color:transparent">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="name">Nome</label>
                    <input class="form-control" type="text" name="name"  id="name" placeholder="Digite seu Nome"style="background-color:transparent">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="password">Senha:</label><br>
                    <input class="form-control" type="password" name="password"    id="password" placeholder="Digite sua senha"style="background-color:transparent">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="passconfirmation">Confirme sua senha:</label><br>
                    <input class="form-control" type="password" name="passconfirmation"    id="passconfirmation" placeholder="Confirme sua senha"style="background-color:transparent">
                </div>
                <button class="btn btn-primary">OK</button>
                <br>
                <br>
        </form>
</body>
@endsection
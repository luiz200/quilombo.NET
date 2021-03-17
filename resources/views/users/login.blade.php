@extends('layouts.main')

@section('title', 'Login')

@section('content')
<div id="d" >
    <form class="container border">
      <fieldset>
          <br>
          <br>
        <legend>Login</legend>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Entrar</button>
        <br>
        <br>
      </fieldset>
    </form>
</div>
@endsection
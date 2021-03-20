@extends('layouts.main')

@section('content')
<div id="d"></div>
<form class="border container" action="/users" method="POST">
    <br>
    <legend>Comentários</legend>
    @csrf
    <div class="mb-3">
        <label class="form-label" for="email">Email</label>
        <input class="form-control" type="email" id="email" name="email">
    </div>
    <div class="mb-3">
        <label class="form-label" for="content">Comentário</label>
        <input class="form-control" type="text" id="content" name="content">
    </div>
    <button class="btn btn-primary">OK</button>
    <br>
    <br>
</form>
@endsection
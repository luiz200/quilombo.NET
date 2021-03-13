@extends('layouts.main')

@section('title', 'Publicações')

@section('content')

 <h1>Publicações</h1>
 <form action="/users" method="POST">
   @csrf
    <label for="title">Titúlo: </label>
    <input type="text" id="title" name="title">   
    <label for="content">Conteúdo: </label>
    <input type="text" id="content" name="content">
    <input type="button" name="ok">

 </form>
 
@endsection
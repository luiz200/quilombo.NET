@extends('layouts.main')

@section('title', 'Publicações')

@section('content')
<style>
body {
  background-image: url(/img/fundo.png); 
    background-position: center;
    background-attachment: fixed;
    background-size:1500px;
    background-size: 1100px;
    background-repeat: no-repeat;
  
}
</style>
<body>
<div id="d"></div>
<form class="border container" action="/users" method="POST">
<br>
<legend>Publicações</legend>
   @csrf
   <br>
   <div class="mb-3">
     <label class="form-label" for="title">Titúlo</label>
     <input class="form-control" type="text" id="title" name="title" style="background-color:transparent"> 
   </div>
   <div class="mb-3">
     <label class="form-label" for="content">Conteúdo</label>
     <input class="form-control" type="text" id="content" name="content" style="background-color:transparent">
   </div> 
   <br> 
    <button class="btn btn-primary">OK</button>
    <br>
    <br>
 </form>
</body>
@endsection 
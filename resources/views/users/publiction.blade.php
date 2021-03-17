@extends('layouts.main')

@section('title', 'Publicações')

@section('content')
<div id="d"></div>
<form class="border container" action="/users" method="POST">
<br>
<legend>Publicações</legend>
   @csrf
   <br>
   <div class="mb-3">
     <label class="form-label" for="title">Titúlo</label>
     <input class="form-control" type="text" id="title" name="title"> 
   </div>
   <div class="mb-3">
     <label class="form-label" for="content">Conteúdo</label>
     <input class="form-control" type="text" id="content" name="content">
   </div> 
   <br> 
    <button class="btn btn-primary">OK</button>
    <br>
    <br>
 </form>
 
@endsection 
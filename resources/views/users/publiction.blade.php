@extends('layouts.main')

@section('title', 'Publicações')

@section('content')
<div id="d"></div>
<form class=" container" action="/users" method="POST">
<br>
<legend>Publicações</legend>
   @csrf
   <br>
   <div class="form-group">
     <label class="form-label" for="image">Image para publicar</label>
     <input class="form-control-file" type="file" id="image" name="image"> 
   </div>
   <div class="form-group">
     <label class="form-label" for="title">Titúlo</label>
     <input class="form-control" type="text" id="title" name="title"> 
   </div>
   <div class="form-group">
     <label class="form-label" for="content">Conteúdo</label>
     <textarea class="form-control" name="content" id="content" cols="30" rows="10"></textarea>
   </div> 
   <br> 
    <button class="btn btn-primary">OK</button>
    <br>
    <br>
 </form>

 
@endsection 
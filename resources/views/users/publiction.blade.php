@extends('layouts.main')

@section('title', 'Publicações')

@section('content')

<div id="event-create-container" class="col-md-offset-md-3">
</div>
<form class="container" action="/users" method="POST" enctype="multipart/form-data">
<br>
<legend>Publicações</legend>
   @csrf
   <br>
   <div class="form-group">
     <label class="form-label" for="image">Imagem para publicar</label>
     <input class="form-control-file" type="file" id="image" name="image" > 
   </div>
   <div class="form-group">
     <label class="form-label" for="title">Titúlo</label>
     <input class="form-control" type="text" id="title" name="title" > 
   </div>
   <div class="form-group">
     <label class="form-label" for="date">Data da publicação</label>
     <input class="form-control" type="date" id="date" name="date" > 
   </div>
   <div class="form-group">
     <label class="form-label" for="content">Conteúdo</label>
     <textarea class="form-control" name="content" id="content"></textarea>
   </div> 
    <button class="btn btn-primary">OK</button>
 </form>

@endsection 
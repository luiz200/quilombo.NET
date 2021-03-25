@extends('layouts.main')

@section('title', 'Editando: '.$publictions->title)

@section('content')

<div id="event-create-container" class="col-md-offset-md-3">
</div>
<form class="container" action="/users/update/{{ $publictions->id }}" method="POST" enctype="multipart/form-data">
<br>
<legend>Editando: {{$publictions->title}}</legend>
   @csrf
   @method('PUT')
   <br>
   <div class="form-group">
     <label class="form-label" for="image">Imagem</label>
     <input class="form-control-file" type="file" id="image" name="image" >
     <img src="/img/publictions/{{ $publictions->image }}" alt="$publictions->title" class="img-preview"> 
   </div>
   <div class="form-group">
     <label class="form-label" for="title">Titúlo</label>
     <input class="form-control" type="text" id="title" name="title" value="{{$publictions->title}}"> 
   </div> 
   <div class="form-group">
     <label class="form-label" for="content">Conteúdo</label>
     <textarea class="form-control" name="content" id="content" value="{{$publictions->content}}"></textarea>
   </div> 
    <button class="btn btn-primary">Editar</button>
 </form>

@endsection 
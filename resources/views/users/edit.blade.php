@extends('layouts.main')

@section('title', 'Editando: '.$publiction->title)

@section('content')

<div id="event-create-container" class="col-md-offset-md-3">
</div>
<form class="container" action="/users/update/{{ $publiction->id }}" method="POST" enctype="multipart/form-data">
<br>
<legend>Editando: {{$publiction->title}}</legend>
   @csrf
   @method('PUT')
   <br>
   <div class="form-group">
     <label class="form-label" for="image">Imagem</label>
     <input class="form-control-file" type="file" id="image" name="image" >
     <img src="/img/publictions/{{ $publiction->image }}" alt="$publiction->title" class="img-preview"> 
   </div>
   <div class="form-group">
     <label class="form-label" for="title">Titúlo</label>
     <input class="form-control" type="text" id="title" name="title" value="{{$publiction->title}}"> 
   </div> 
   <div class="form-group">
     <label class="form-label" for="content">Conteúdo</label>
     <textarea class="form-control" name="content" id="content" value="{{$publiction->content}}"></textarea>
   </div> 
    <button class="btn btn-primary">Editar</button>
 </form>

@endsection 
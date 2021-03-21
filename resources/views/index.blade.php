@extends('layouts.main')

@section('title', 'Página Inicial')

@section('content')

<br>
<div id="cards-container" class="row">
    @foreach($publictions as $publiction)
    <div class="card col-md-3">
        <h4>Nome do quilombo</h4>
        <img src="/img/publictions/{{ $publiction->image }}" alt="{{ $publiction->title }}">
        <div class="card-body">
            <h4>{{ $publiction->title }}</h4>
            <a href="/users/{{ $publiction->id }}" class="btn btn-primary">Ver publicação</a>
        </div>
    </div>
    @endforeach
    @if(count($publictions) == 0)
        <p class="container-fluid">Ainda não há publicações, <a href="/users/publiction">seja o primeiro a publicar.</a></p>
    @endif
</div>
@endsection
@extends('layouts.main')

@section('title', 'Página Inicial')

@section('content')

<div id="events-container" class="col-md-12">
    @if($search)
    <h2>Buscando por: {{ $search }}</h2>
    @endif
    <div id="cards-container" class="row">
        @foreach($publictions as $publiction)
        <div>
            <div class="border border-warning  col-md-5">
                <img src="/img/publictions/{{ $publiction->image }}" alt="{{ $publiction->title }}">
                <div class="card-body">
                    <h4>{{ $publiction->title }}</h4>
                    <a href="/users/{{ $publiction->id }}" class="btn btn-warning">Ver publicação</a>
                </div>
            </div>
        </div>
        @endforeach
        @if(count($publictions) == 0 && $search)
            <p>Não foi possível encontrar nehuma publicação com {{ $search }}! <a href="/">ver todos.</a></p>
        @elseif(count($publictions) == 0)
            <p class="container-fluid">Ainda não há publicações, <a href="/users/publiction">seja o primeiro a publicar.</a></p>
        @endif
    </div>
</div>
@endsection
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
</div>
@endsection
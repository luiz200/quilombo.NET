@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Minhas publicações</h1>
</div>
<div class="col-md-10-offset-md-1 dashboard-events-container">
    @if(count($publictions) > 0)
    @else
        <p>Você ainda não tem publicações, <a href="/users/publiction">publicar</a>.</p>
    @endif
</div>

@endsection 
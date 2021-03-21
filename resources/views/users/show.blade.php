@extends('layouts.main')

@section('title', $publictions->title)

@section('content')

<div class="col-md-10 offset-md-1">
    <div class="row">
        <div id="image-container" class="col-md-6">
            <img src="/img/publictions/{{ $publictions->image }}" class="img-fluid" alt="{{ $publictions->title }}">
        </div>
        <div id="info-container" class="col-md-6">
            <h1>{{ $publictions->title }}</h1>
            <p class="quilombo-city"><ion-icon name="location-outline"></ion-icon>Cachangar</p>
            <p class="comunidade-owner"><ion-icon name="star-outline"></ion-icon>Nova descoberta</p>
        </div>
        <div class="col-md-12" id="description-container">
            <p class="public-description"> {{ $publictions->content }} </p>
        </div>
    </div>
</div>

@endsection 
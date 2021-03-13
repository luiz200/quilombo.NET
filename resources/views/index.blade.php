@extends('layouts.main')

@section('title', 'Página Inicial')

@section('content')

@foreach($publictions as $publiction)
    <p>{{ $publiction->title }}</p>
    <p>{{ $publiction->title }}</p>
@endforeach

@endsection
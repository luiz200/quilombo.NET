@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Minhas publicações</h1>
</div>
<div class="col-md-10-offset-md-1 dashboard-events-container">
    @if(count($publictions) > 0) 
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Titúlo</th>
                <th scope="col">Curtidas</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($publictions as $publiction)
                <tr>
                    <td ><a href="/users/{{ $publictions->id }}">{{ $publictions->title  }}</a></td>
                    <td >0</td>
                    <td >
                        <a href="#" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon> Editar</a> 
                        <form action="/users/{{ $publictions->id }}" method="POST">
                            @csrf 
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger delete-btn" ><ion-icon name="trash-outline"></ion-icon>Deletar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @else
        <p>Você ainda não tem publicações, <a href="/users/publiction">publicar</a></p> 
    @endif
</div>

@endsection 
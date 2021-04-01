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
            <p class="comunidade-owner"><ion-icon name="person-outline"></ion-icon> {{ $publictionOwner['name'] }}</p>
            <br>
            <table>
                <thead>
                    <tr>
                        <th>
                            <div>
                                <ion-icon name="heart-outline" id="curtir" onclick="curtir()"></ion-icon>
                            </div>
                                <script>
                                    var c = window.document.getElementById('curtir');
                                    function curtir(){
                                        c.style.color = 'red';
                                    } 
                                </script>
                        </th>
                        <th>
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </th>
                        <th>
                            <ion-icon name="paper-plane-outline"></ion-icon>
                        </th>
                    </tr>                    
                </thead>
            </table>
        </div>
        <div class="col-md-12" id="description-container">
            <p class="public-description"> {{ $publictions->content }} </p>
        </div>
        <div>
        </div>
    </div>
</div>

@endsection 
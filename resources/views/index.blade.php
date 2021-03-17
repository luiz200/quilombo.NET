@extends('layouts.main')

@section('title', 'Página Inicial')

@section('content')

@foreach($publictions as $quilombo)
<br>
<div class="container-lg">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">
                    Quilombo Cachangar
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="col">
                    <h4>
                    {{ $quilombo->title }}
                    </h4>
                </td>
            </tr>
            <tr>
                <td scope="col">
                    <p>{{ $quilombo->content }}</p>
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td scope="col">
                    <form action="" method="POST">
                        <input type="text">
                        <button type="submit" class="btn bt">OK</button>
                    </form>
                </td>
            </tr>
        </tfoot>
    </table>
</div>
<br>
@endforeach

@endsection
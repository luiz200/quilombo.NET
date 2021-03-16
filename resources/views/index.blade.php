@extends('layouts.main')

@section('title', 'Página Inicial')

@section('content')

@foreach($publictions as $quilombo)
<br>
<div class="container">
    <table border="1">
        <thead>
            <tr>
                <th>
                    Quilombo Cachangar
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <h4>
                    {{ $quilombo->title }}
                    </h4>
                </td>
            </tr>
            <tr>
                <td>
                    <p>{{ $quilombo->content }}</p>
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td>
                    <form action="" method="POST">
                        <input type="text">
                        <button>OK</button>
                    </form>
                </td>
            </tr>
        </tfoot>
    </table>
</div>
<br>
@endforeach

@endsection
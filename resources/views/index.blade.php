@extends('layouts.main')

@section('title', 'Página Inicial')

@section('content')

<body> 
    <div class="container">
    <div class="table-responsive">
    @foreach($publictions as $quilombo)
    <br>
    <br>
        <table class="table table-striped table-sm">
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
                <tr scope="col">
                    <td>
                        <a href="/users/comment">Comentar</a>
                    </td>
                </tr>
            </tfoot>
        </table>
    @endforeach
    </div>
</div>
</body>
@endsection
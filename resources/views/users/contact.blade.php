@extends('layouts.main')

@section('title', 'Contatos')

@section('content')


<table>
	<thead>
		<tr>
			<th>
				<h1>Contatos</h1>
			</th>
		</tr>
		<tr>
			<th>
				<h5>Comunidades</h5>
			</th>
			<th>
				<h5> Desenvolvedores</h5>
			</th>
		</tr>
	</thead>
	<br>
	<tbody>
		<tr>
			<td>
				<h7> Comunidade Quilombola Nova Descoberta: (84) 99999-9999</h7>
			</td>
			<br>
			<td>
				<h7> Alex Gondin</h7><br>
				<h7> Juciane Barros</h7><br>
				<h7> Luiz Felipe</h7><br>
				<h7> Livia Evangelista</h7><br>
				<h7> Ramonie Martins</h7><br>
			</td>
		</tr>
	</tbody>
	<br>
	<tfoot>
		<tr>
			<tf>
				<form method="POST" action="ramonmartinsmr@gmail.com">
					<textarea rows="7" cols="100" wrap="physical" name="comments" style="background-color:transparent">Deixe aqui se feedback ou dúvidas </textarea><br />
					<input type="submit" value="Enviar"/>		
				</form>
			</tf>
		</tr>
	</tfoot>
</table>


<body>
<a href="/">Home</a>
</body>
@endsection
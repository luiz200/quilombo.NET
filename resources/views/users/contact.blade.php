@extends('layouts.main')

@section('title', 'Contatos')

@section('content')

<h1>Contatos</h1>
<h5> Comunidades:</h5>
<h7> Comunidade Quilombola Nova Descoberta: (84) 99999-9999</h7<br><br><br>

<h5> Desenvolvedores:</h5>
<h7> Alex Gondin</h7><br>
<h7> Juciane Barros</h7><br>
<h7> Luiz Felipe</h7><br>
<h7> Livia Evangelista</h7><br>
<h7> Ramonie Martins</h7><br>



<form method="post" action="ramonmartinsmr@gmail.com">

	<textarea rows="5" cols="20" wrap="physical" name="comments">Deixe aqui se feedback ou dúvidas</textarea><br />
	<input type="submit" value="Enviar" />
	
</form>


<a href="/">Home</a>

@endsection
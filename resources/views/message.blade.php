@extends('layouts.app')

@section('content')
<form action='' method='post' class='container'>
	{{csrf_field()}}
	<input type='text' name='title' class='form-control' placeholder='Titulo'>
	<textarea name='body' class='form-control' placeholder='menssagem...'></textarea>
	
	<input type='text' name='user_id' id='user_id' class='form-control' placeholder='id...'>
	<br>
	<button type='submit' class='btn btn-primary'>Salvar</button>
</form>
@endsection

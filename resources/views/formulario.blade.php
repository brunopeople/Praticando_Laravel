@extends('principal')
@section('conteudo')

	<h1>Novo Produto</h1>
	

	<form action="/produtos/adiciona" method="post">
		<input type="hidden" name="_token" value="{{ csrf_token() }}"/>

	 <div class="form-group">
			<label>Nome</label>
			<input name="nome" class="form-control"/>
	  </div>

	<div class="form-group">
			<label>Valor</label>
			<input name="valor" class="form-control"/>
	</div>

	<div class="form-group">
		<label>Quantidade</label>
		<input type="number" name="Quantidade" class="form-control"/>
	</div>

	<div class="form-group">
		<label>Descrição</label>
		<input name="Descricao" class="form-control"/>
	</div>
		

		<button class="btn btn-default type=submit">Adicionar</button>
	</form>

@stop
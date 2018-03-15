@extends('principal')

@section('conteudo')


@if(empty($produtos))
	<div class="alert alert-danger">
		Você não tem nenhum produto cadastrado.
	</div>

@else
	<h1>Listagem de Produtos</h1>
	<table class="table table-striped">
		@foreach ($produtos as $p)
		@endeach
	</table>
	@enddif


	<h4>
		<span class="label label-danger pull-right">
			Um ou menos itens no estoque
		</span>
	</h4>

@if(old('nome'))
	<div class="alert alert-sucess">
		<strong>Sucesso!</strong>
			O produto {{old('nome')}} foi adicionado
	</div>
@else

  <div class="alert alert-sucess">
	<strong>Sucesso!</strong> O Produto {{$nome}} adicionado com sucesso!
 </div>

@endif
@stop
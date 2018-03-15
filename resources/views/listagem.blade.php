@extends('principal')
@section('conteudo')


<h1>Listagem de Produtos</h1>

<table class="table">
	@foreach($produtos as $p)
	<tr class="{{$p->quantidade <= 1? 'danger':''}}">
		<td>{{$p->nome}}</td>
		<td>{{$p->valor}}</td>
		<td>{{$p->descricao}}</td>
		<td>{{$p->quantidade}}</td>
		<td>

		<a href="/produtos/mostra/{{p->id}}">
			<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
		</a>
	</td>
  </tr>
  @endforeach
</table>

@if(old('nome'))
 <div class="alert alert-sucess">
	Produto{{old('nome')}} adicionado com sucesso!
</div>
@endif


@stop
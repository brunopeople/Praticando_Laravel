@extends('principal')
@section('conteudo')

		<h1>Listagem de Produtos</h1>
			<table class="table...">
				 @foreach($produtos as $p)
					<tr class= "{{$p->quantidade <=1 ? 'danger': ''}}">
						<td>{{$p->nome}}</td>
						<td>{{ $p->valor}}</td>
						<td><{{$p->descricao}}</td>
						<td><{{ $p->quantidade}}</td>

						<td>
							<a href="/produtos/mostra/<?= $p->id?>">
								<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
							visualizar
							</a>
						</td>
					</tr>
				 @endforeach
		   </table>
	@stop
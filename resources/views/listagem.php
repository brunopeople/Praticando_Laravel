@extends('principal')

@section('conteudo')
		<h1>Listagem de Produtos</h1>
			<table class="table...">
				<?php foreach($produtos as $p): ?>
					<tr>
						<td><?= $p->nome?></td>
						<td><?= $p->valor?></td>
						<td><?= $p->descricao?></td>
						<td><?= $p->quantidade?></td>

						<td>
							<a href="/produtos/mostra?id=<?= $p->id?>">
								<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
							visualizar
							</a>
						</td>
					</tr>
				<?php endforeach?>
		   </table>
	@stop
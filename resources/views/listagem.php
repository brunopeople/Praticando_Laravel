<html>
<head>
	<link href="/css/app.css" rel="stylesheet">
	<tittle>Controle de Estoque</tittle>
</head>
	<body>
		<div class="container">
		<h1>Listagem de Produtos</h1>
			<table class="table">
				<?php foreach($produtos as $p): ?>
					<tr>
						<td><?= $p->nome?></td>
						<td><?= $p->valor?></td>
						<td><?= $p->descricao?></td>
						<td><?= $p->quantidade?></td>
					</tr>
				<?php endforeach?>
		   </table>
		</div>
	</body>
</html>
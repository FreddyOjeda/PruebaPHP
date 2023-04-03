<html>
	<head>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			<div class="col-lg-12">
				<table class="table" id="tPersonas">
					<thead class="table-dark">
					<th>ID</th>
					<th>Nombre</th>
					<th>Correo</th>
					<th>Telefono</th>
					<th>Accion</th>
					<th>Accion</th>
					</thead>
					<tbody>

					<?php foreach ($personas as $key =>$p) :?>
					<tr>
						<td><?php echo $p->id?></td>
						<td><?php echo $p->Nombre?></td>
						<td><?php echo $p->Correo?></td>
						<td><?php echo $p->telefono?></td>
						<td><a href="<?=base_url()?>/index.php/welcome/create/<?= $p->id?>" class="btn btn-warning" >Editar</a></td>
						<td><a href="/PruebaPHP/index.php/welcome/testDelete/<?php echo $p->id?>" class="btn btn-danger">Eliminar</a></td>
					</tr>
					<?php endforeach;?>
					</tbody>
				</table>
			</div>
		</div>
	</body>
</html>

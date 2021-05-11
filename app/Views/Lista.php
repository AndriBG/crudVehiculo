<div class="container my-3 p-2 border border-danger">
	<a href="<?= base_url(); ?>/form" class="btn btn-primary">Crear vehículo</a>
</div>

<?php if(count($list)==0): ?>
	<div class="container border p-1">
		<h2>No hay vehículos</h2>
	</div>
<?php else: ?>
	<div class="container border p-1">
		<div>
			<h2 class="my-3">Listado de vehículos</h2>
		</div>
		<table class="table table-hover bg-light">
			<thead>
				<tr>
					<th>Id</th>
					<th>Modelo</th>
					<th>Marca</th>
					<th>Precio</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($list as $item): ?>
					<tr>
						<td><?= $item["id"]; ?></td>
						<td><?= $item["modelo"]; ?></td>
						<td><?= $item["marca"]; ?></td>
						<td><?= $item["precio"] ?></td>
						<td>
							<a href="<?= base_url("/editar"); ?>?id=<?= $item["id"]; ?>" class="btn btn-warning"><i class="fa fa-pencil-square-o"></i></a>
							<button class="btn btn-danger eliminar" data-id="<?= $item["id"]; ?>"><i class="fa fa-trash"></i></button>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
<?php endif; ?>
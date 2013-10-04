<?php include "templates/header.php"; ?>
<section id="content" class="left">
	<h2>Categorias Cadastradas</h2>
	<table>
		<thead>
			<tr>
				<th>#</th>
				<th>Categoria</th>
				<th id="list-options" colspan="2">Opções</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($categorias as $categoria) : ?>
			<tr>
				<td class="list-id"><?php echo $categoria['id']; ?></td>
				<td><?php echo $categoria['nome']; ?></td>
				<td><a class="btn btn-edit" href="r.php?pg=editar-categoria&id=<?php echo $categoria['id']; ?>" title="Editar Categoria"><img src="img/edit.png" alt="Editar" width="20" height="20" />Editar</a></td>
				<td><a class="btn btn-edit" href="r.php?pg=excluir-categoria&id=<?php echo $categoria['id']; ?>" title="Excluir Categoria"><img src="img/close.png" alt="Excluir" width="20" height="20" />Excluir</a></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
</section>
<asidebar id="sidebar" class="right">
	<?php include "sidebar.php" ?>
</asidebar>
<?php include "templates/footer.php"; ?>

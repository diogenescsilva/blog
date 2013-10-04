<?php include "templates/header.php"; ?>
<section id="content" class="left">
	<article class="post">
		<h2 class="title"><?php echo $post->title; ?></h2>
		<div class="info clearfix">
			<img class="avatar left" src="<?php echo $crud_u->getById($post->autor)->avatar; ?>" alt="<?php echo $crud_u->getById($post->autor)->nome; ?>" />
			<div class="log left">Por <b><?php echo $crud_u->getById($post->autor)->nome; ?></b> em <b><?php echo $post->data; ?></b><br />Categoria: <b><?php echo $crud_c->getById($post->categoria)->nome; ?></b></div>
		</div>
		<div class="content">
			<?php echo $post->content; ?>
		</div>
	</article>
</section>
<asidebar id="sidebar" class="right">
	<nav class="widget">
		<div class="widget-title">Categorias:</div>
		<ul>
			<?php foreach($categorias as $categoria) : ?>
			<li><a href="r.php?pg=exibir-categoria&id=<?php echo $categoria['id']; ?>" title="<?php echo $categoria['nome']; ?>"><?php echo $categoria['nome']; ?></a></li>
			<?php endforeach; ?>
		</ul>
	</nav>
</asidebar>
<?php include "templates/footer.php"; ?>

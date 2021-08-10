<?php $this->view("partes/header",$data); ?>

	<div class="container text-center">
		<div class="logo-404">
			<a href="index.html"><img src="<?=ASSETS . THEME ?>images/home/logo.png" alt="" /></a>
		</div>
		<div class="content-404">
			<img src="<?=ASSETS . THEME ?>images/404/404.png" class="img-responsive" alt="" style="max-width:200px;"/>
			<h1>No se pudo encontrar la pagina.</h1>
			<p>Esta pagina que estas buscando no existe</p>
			<h2><a href="<?=ROOT?>">Volver a la pagina inicio</a></h2>
		</div>
	</div>

<?php $this->view("partes/footer",$data); ?>
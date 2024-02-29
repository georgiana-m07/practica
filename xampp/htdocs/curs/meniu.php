<ul>
	<li><a href="index.php">Acasa</a></li>
	<li><a href="index.php">Categorii</a></li>
	<li><a href="oferta.php">Cerere oferta</a></li>
	<li><a href="login.php">Contul meu</a></li>
	<?php if(isset($_SESSION["logat"])){ ?><li><a href="logout.php">Deconectare</a></li><?php } ?>
</ul>
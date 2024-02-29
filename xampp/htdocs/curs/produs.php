<?php
require_once("bd.php");

$id_produs=$_GET["produs"];

$produs=array();
foreach ($prod as $p)
	if ($p["id_produs"]==$id_produs)
		$produs=$p;
?>
<html>
	<head>
		<title>Produs - <?=$produs["denumire"];?></title>
		
		<link rel="stylesheet" href="style.css"/>
	</head>
	<body>
		<h1>Produs - <?=$produs["denumire"];?></h1>
		<a href="index.php">Inapoi</a>
		
		<p>Cantitate: <?=$produs["cantitate"]?></p>
		<p>Status stoc: <?php if ($produs["cantitate"]>0) echo "In stoc"; else echo "Fara stoc";?></p>
		


	</body>
</html>
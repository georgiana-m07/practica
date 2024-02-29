<?php
require_once("bd.php");

$categorie=$_GET["categorie"];

?>
<html>
	<head>
		<title>Categorie - <?=$cat[$categorie];?></title>
		
		<link rel="stylesheet" href="style.css"/>
	</head>
	<body>
		<h1>Categorie - <?=$cat[$categorie];?></h1>
		<a href="index.php">Inapoi</a>
		<table border="1">
			<tr>
				<td><b>Nr.Crt.</b></td>
				<td><b>Denumire</b></td>
				<td><b>Categorie</b></td>
			</tr>
		<?php
			$i=1;
			foreach ($prod as $produs){
				if($produs["categorie"]==$categorie){
				?>			
				<tr>
					<td><?=$i?></td>
					<td><?=$produs["denumire"]?></td>
					<td><a href="cat.php?categorie=<?=$produs["categorie"]?>"><?=$cat[$produs["categorie"]]?></a></td>
				</tr>
			<?php
				$i++;
				}
			}
		?>
		</table>


	</body>
</html>
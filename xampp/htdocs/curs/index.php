<?php
require_once("config.php");
require_once("bd.php");
?>
<html>
	<head>
		<title>Curs PHP - <?=date("d.m.Y H:i:s");?></title>
		<link rel="stylesheet" href="style.css"/>
	</head>
	<body>
<?php
require_once("meniu.php");
?>
		Acum este ora <?=date("H")?>, <?=date("i")?> minute si <?=date("s");?> secunde.<br/>
		Este anul <?=date("Y")?>, luna <?=date("m")?> si ziua <?=date("d")?>.
		<h1>Magazin</h1>
		
		<?php if (isset($_GET["m"]) && isset($_SESSION["logat"])) echo "<div style='color:green'>Bine ai venit,  ".$_SESSION["username"]."!</div>";?>
		<table border="1">
			<tr>
				<td><b>Nr.Crt.</b></td>
				<td><b>Denumire</b></td>
				<td><b>Categorie</b></td>
			</tr>
		<?php
			$i=1;
			foreach ($prod as $produs){?>			
				<tr>
					<td><?=$i?></td>
					<td><a href="produs.php?produs=<?=$produs["id_produs"]?>"><?=$produs["denumire"]?></a></td>
					<td><a href="cat.php?categorie=<?=$produs["categorie"]?>"><?=$cat[$produs["categorie"]]?></a></td>
				</tr>
			<?php
			$i++;
			}
		?>
		</table>


	</body>
</html>
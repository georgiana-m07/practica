<?php include("config.php");?>
<html>
	<head>
		<title>Cerere oferta</title>
		<link rel="stylesheet" href="style.css"/>
	</head>
	<body>
<?php
require_once("meniu.php");
?>
<h1>Cerere oferta</h1>
		
	<form action="procesare.php" method="post">
	<table>
		<tr>
			<td>Nume</td>
			<td><input type="text" name="nume"/></td>			
		</tr>
		<tr>
			<td>Telefon</td>
			<td><input type="text" name="telefon"/></td>			
		</tr>
		<tr>
			<td>Parola</td>
			<td><input type="password" name="parola"/></td>			
		</tr>
		<tr>
			<td>Nume produs</td>
			<td><input type="text" name="nume_produs"/></td>			
		</tr>
		<tr>
			<td>Comanda rapida</td>
			<td>
				<input type="radio" name="comanda_rapida" value="da" checked="checked"/> Da<br/>
				<input type="radio" name="comanda_rapida" value="nu"/> Nu
			</td>		
		</tr>
		<tr>
			<td>Factura</td>
			<td><input type="checkbox" name="factura" value="1"/></td>			
		</tr>
		<tr>
			<td>Culoare</td>
			<td>
				<select name="culoare">
					<option value="rosu">Rosu</option>
					<option value="verde">Verde</option>
					<option value="negru">Negru</option>
					<option value="maro">Maro</option>
				</select>
			</td>			
		</tr>
		<tr>
			<td>Mesaj</td>
			<td><textarea name="mesaj"></textarea></td>			
		</tr>
		<tr>
			<td colspan="2"><input type="submit" value="Trimite"/></td>
		</tr>
	</table>
	
	



	</form>	
		
		


	</body>
</html>
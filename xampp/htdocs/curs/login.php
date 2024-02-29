<?php include("config.php");?>
<html>
	<head>
		<title>Contul meu</title>
		<link rel="stylesheet" href="style.css"/>
	</head>
	<body>
<?php
require_once("meniu.php");

if (isset($_SESSION["logat"])){
	echo "Bun venit,".$_SESSION["username"]."!";
}
else {
?>
<h1>Login</h1>
		<?php if (isset($_GET["error"])) echo "<div style='color:red'>Username sau parola gresite!</div>";?>
		
	<form action="procesarelogin.php" method="post">
	<table>
		<tr>
			<td>User</td>
			<td><input type="text" name="username"/></td>			
		</tr>
		<tr>
			<td>Parola</td>
			<td><input type="password" name="parola"/></td>			
		</tr>
		
		<tr>
			<td colspan="2"><input type="submit" value="Trimite"/></td>
		</tr>
	</table>
	
	



	</form>	
		
		
<?php } ?>

	</body>
</html>
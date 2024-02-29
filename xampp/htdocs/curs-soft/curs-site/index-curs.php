<?php
require_once("baza.php");
require_once("config.php");
?>

<html>
    <head>
        <title>Curs PHP - <?=date("d.m.y H:i:s");?></title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
    <?php
    require_once("meniu.php");
    ?>
    Acum este ora <?=date("H")?>, minute <?=date("i")?> si <?=date("s")?> secunde.
    Este anul <?=date("Y")?>, luna <?=date("m")?> si ziua <?=date("d")?>.
    <ul>
        <li><a href="index-curs.php">Acasa</a></li>
        <li><a href="index-curs.php">Categorii</a></li>
        <li><a href="oferta.php">Cerere oferta</a></li>
    </ul>
    <h1>Magazin</h1>
    <?php
    if(isset($_GET["m"]) && isset($_SESSION["logat"])) echo "<div style='color:green'>Bine ai venit, ".$_SESSION["username"]."!</div>";
    ?>
    <table border="1">
        <tr>
            <td><b>Nr.Crt.</b></td>
            <td><b>Denumire</b></td>
            <td><b>Categorie</b></td>
        </tr>
    <?php
        $i=1;
        foreach($produse as $produs)
        {
            ?>
            <tr>
                <td><?=$i?></td>
                <td><a href="prod.php?denumire=<?=$produs["denumire"]?>"><?=$produs["denumire"]?></a></td>
                <td><a href="cat.php?categorie=<?=$produs["categorie"]?>"><?=$categorii[$produs["categorie"]]?></a></td>
            </tr>
            <?php
            $i++;
        }
    ?>
    </table>
    </body>
</html>
<?php
require_once("baza.php");

$categorie=$_GET["categorie"];
?>

<html>
    <head>
        <title>Categorie - <?=$categorii[$categorie];?></title>
    </head>
    <body>
    <h1>Categorie - <?=$categorii[$categorie];?></h1>
    <a href="index-curs.php">Inapoi</a>
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
            if($produs["categorie"]==$categorie) 
            {
                ?>
                <tr>
                    <td><?=$i?></td>
                    <td><?=$produs["denumire"]?></td>
                    <td><a href="cat.php?categorie"<?=$categorii[$produs["categorie"]]?></td>
                </tr>
                <?php
                $i++;
            }
        }
    ?>
    </table>
    </body>
</html>
<?php
require_once("baza.php");

$denumire=$_GET["denumire"];
?>

<html>
    <head>
        <title>Produs - <?=$denumire;?></title>
    </head>
    <body>
    <h1>Produs - <?=$denumire;?></h1>
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
            if($produs["denumire"]==$denumire)
            {
                ?>
                <tr>
                    <td><?=$i?></td>
                    <td><?=$produs["denumire"]?></td>
                    <td><?=$produs["categorie"]?></a></td>
                </tr>
                <?php
                $i++;
            }
        }
    ?>
    </table>
    </body>
</html>
<html>
    <head>
        <title>Cerere oferta</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
    <h1>Cerere de oferta: </h1>
    <?php echo $_POST["nume"];?> (tel: <?php echo $_POST["telefon"];?>) a solicitat o oferta pentru produsul <?php echo $_POST["nume_produs"];?>, culoarea <?php echo $_POST["culoare"];?>.<br/>
    <?php
    if(isset($_POST["factura"]))
    {
        echo "Se doreste factura";
    }
    else
    {
        echo "Nu doreste factura";
    }
    ?>
    <br/>
    <?php
    if(isset($_POST["comanda_rapida"]))
    {
        echo "Se doreste comanda rapida";
    }
    else
    {
        echo "Nu se doreste comanda rapida";
    }
    ?>
    <br/>
    <?php
    
    /*Cerere de oferta:

    {nume} (tel: {tel}) a solicitat o oferta pentru produsul {nume_produs}, culoarea {culoare}.
    Se doreste/nu doreste factura
    Se doreste/nu doreste comanda rapida
    echo "<pre>";
    print_r($_POST);*/

    ?>

    </body>
</html>
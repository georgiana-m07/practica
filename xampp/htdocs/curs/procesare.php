<?php
echo "Cerere de oferta: <br/> ".$_POST["nume"]." (tel: ".$_POST["telefon"].") a solicitat o oferta pentru produsul ".$_POST["nume_produs"].", culoarea ".$_POST["culoare"].".";

if (isset($_POST["factura"])) echo "<br/>Se doreste doreste factura";
else echo "<br/>Nu se doreste doreste factura";

if ($_POST["comanda_rapida"]=="da") echo "<br/>Se doreste doreste comanda rapida";
else  echo "<br/>Nu se doreste doreste comanda rapida";


?>
<h1>Bun Venit</h1>

<p>Acesta este  doua zi a cursului de 
    <?php
        $nume_curs="PHP";
        echo $nume_curs;

    ?>
</p>

<?php
    $a=array();
    $b=[];
    $c=array("a",1,"b",$a);

    $a[]="primul element";
    $a[6]="element cu index 6";
    $a[]="urmatorul disponibil";
    $a["opt"]=8;
    $a[]="urmatorul";

    $b["culoare"]="rosu";
    $b["marime"]="s";
    $b["cantitate"]=45;
    $b["denumire"]="Test";
    $b[]=1;

    echo "<p>Mai avem ".$b["cantitatea"]." de bucati din produsul ".$b["denumire"].", marimea ".strtoupper($b["marime"])." si culoarea ".$b["culoare"]."</p>";

    if(sizeof($b)==4) echo "4";
    else echo sizeof($b);

    //echo "<pre>";print_r($a);print_r($b);print_r($c);

    $x="asa";
    switch($x)
    {
        case 'aaa': echo "E aaa";
        break;
        case 'bbb': echo "E bbb";
        break;
        default: echo "xxx";
        break;
    }

    for($i=1;$i<=1000;$i++)
        //echo $i."<br/>";

    foreach($a as $key)
?>
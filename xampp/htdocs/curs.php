<?php
    echo "Salut, acesta este primul meu script PHP!";

    $variabila="Aceasta este o variabila";
    echo $variabila;

    $var=4;

    /*string*/
    $string="Buna ziua!";
    echo "Buna ziua!";
    echo $string;

    /*operatori*/
    $ex1=3;
    $ex2=$ex1;

    $adunare=2+2;
    $scadere=4-2;
    $inumultire=3*5;
    $imparttire=6/3;
    $modulo=50%5;

    $x==$y;
    $x!=$y;
    $x<$y;
    $x>$y;
    $x<=$y;
    $x>=$y;

    $sir1="Salut ";
    $sir2="George!";
    echo $sir1.$sir2;

    /*instructiunea if/else */
    $numar=3;
    if($numar==3)
    {
        echo "Adevarat! Numarul este 3.";
    }
    else
    {
        echo "Fals! Numarul nu este 3.";
    }

    /*instructiunea elseif */
    $a=20;
    $b=1;
    $rezultat=$a+$b;
    if($rezultat=='20')
    {
        echo "Rezultatul este egal cu 20.";
    }
    elseif($rezultat=='21')
    {
        echo "Rezultatul este egal cu 21.";
    }
    else
    {
        echo "Rezultatul nu este egal cu cel din conditie";
    }

    /*instructiunea switch */
    $destinatie="China";
    echo "Calatorind in $destinatie <br/>";
    switch($destinatie)
    {
        case "Bucuresti":
            echo "poti vedea Palatul Parlamentului";
            break;
        case "China":
            echo "potiu vedea Zidul Chinezesc";
            break;
    }

    /*instructiunea while */
    $numar=1;
    while($numar<=5)
    {
        echo $numar."<br/>";
        $numar++;
    }

    /*instructiunea for */
    for($variabila=1;$variabila<=10;$variabila++)
    {
        echo $variabila.'<br/>';
    }

?>
<h1> Bun venit </h1>

<p>Acesta este a doua zi a cursului de <?php

	$nume_curs="PHP";
	echo $nume_curs;

?>
</p>

<?php
// // // $a=array();
// // // $b=[];

// // // $a[]="primul element";
// // // $a[6]="element cu index 6";
// // // $a[]="urmatorul disponibil";
// // // $a["opt"]=8;
// // // $a[]="urmatorul";


// // // $c=array("a",1,"b",$a);

// // // $b["culoare"]="rosu";
// // // $b["marime"]="s";
// // // $b["cantitate"]=45;
// // // $b["denumire"]="Test";
// // // $b[]=4;

// // // echo "<p>Mai avem ".$b["cantitate"]." de bucati din produsul ".$b["denumire"].", marime ".strtoupper($b["marime"])." si culoare ".$b["culoare"].".</p>";


// // // if (sizeof($b)==4) echo "4"; 
// // // else echo sizeof($b);

// // // //echo "<pre>";print_r($a);print_r($b);print_r($c);

// // // $x="asaa";
// // // switch($x){
	// // // case 'aaa': echo "E aaa"; break;
	// // // case 'bbb': echo "E altceva"; break;
	// // // default: echo "xxx"; break;
// // // }
// // // echo "<hr/>";
// // // for ($i=1; $i<=1000; $i++){
	// // // //echo $i."<br/>";
// // // }

// // // foreach ($c as $key=>$element){
	// // // if (!is_array($element))
		// // // echo $key.": ".$element."<br/>";
	// // // else {
		// // // echo $key.": ";
		// // // print_r($element);
	// // // }
// // // }


 $scoala=array(
        "Cladiri"=>array(
            "Cladirea A",
            "Cladirea B",
            "Cladirea C",
            "Sala de sport 1",
            "Sala de sport 2"
        ),
        "Semestre"=>array(
            "Semestrul 1",
            "Semestrul 2"
        ),
        "Note"=>array(
            "Primara"=>array(
                "Excelent",
                "Foarte bine",
                "Bine",
                "Suficinet",
                "Insuficient"
            ),
            "Gimnaziu"=>array(
                "0",
                "1",
                "2",
                "3",
                "4",
                "5",
                "6",
                "7",
                "8",
                "9",
                "10"
            ),
            "Liceu"=>array(
                "0",
                "1",
                "2",
                "3",
                "4",
                "5",
                "6",
                "7",
                "8",
                "9",
                "10"
            ),
        ),
        "Clase"=>array(
            "Primara"=>array(
                "1A",
                "1B",
                "1C",
                "1D",
                "2A",
                "2B",
                "2C",
                "2D",
                "3A",
                "3B",
                "3C",
                "3D",
                "4A",
                "4B",
                "4C",
                "4D",
            ),
            "Gimnaziu"=>array(
                "5A",
                "5B",
                "5C",
                "5D",
                "6A",
                "6B",
                "6C",
                "6D",
                "7A",
                "7B",
                "7C",
                "7D",
                "8A",
                "8B",
                "8C",
                "8D",
            ),
            "Liceu"=>array(
                "9A",
                "9B",
                "9C",
                "9D",
                "10A",
                "10B",
                "10C",
                "10D",
                "11A",
                "11B",
                "11C",
                "11D",
                "12A",
                "12B",
                "12C",
                "12D",
            )
        ),
        "Materii"=>array(
            "Primara"=>array(
                "Matematica",
                "Limba si literatura romana",
                "Stiintele Naturii",
                "Limba Engleza",
                "Abilitati practce",
                "Desen",
                "Sport",
                "Civica",
                "Istorie",
                "Educatie pentru sanatate",
                "Muzica",
                "Geografie"
            ),
            "Gimnaziu"=>array(
                "Limba si literatura romana",
                "Matematica",
                "Limba engleza",
                "Limba germana",
                "Limba franceza",
                "Fizica",
                "Chimie",
                "Desen",
                "Istorie",
                "Optional 1",
                "Optional 2",
                "Sport",
                "Muzica",
                "Biologie",
                "Geografie"
            ),
            "Liceu"=>array(
                "Limba si literatura romana",
                "Matematica",
                "Biologie",
                "Chimie",
                "Fizica",
                "Informatica",
                "TIC",
                "Limba engleza",
                "Limba germana",
                "Limba franceza",
                "Sport",
                "Muzica",
                "Desen",
                "Economie",
                "Educatie antreprenoriala",
                "Istorie",
                "Geografie",
                "Filosofie",
                "Logica",
                "Optional 1",
                "Optional 2",
                "Optional 3"
            )
        ),
        "Invatatori"=>array(
            "Clasele 1"=>array(
                "Bades",
                "Costin",
                "Avram",
                "Mircea",
            ),
            "Clasele 2"=>array(
                "Bordea",
                "Saba",
                "Meagher",
                "Maier",
            ),
            "Clasele 3"=>array(
                "Vasile",
                "Edeleanu",
                "Popescu",
                "Cimbriescu",
            ),
            "Clasele 4"=>array(
                "Cretu",
                "Agafitei",
                "Ionescu",
                "Petrescu",
            )
        ),
        "Profesori"=>array(
            "Zablatoschi",
            "Uceanu",
            "Leca",
            "Iconomescu",
            "Iacob",
            "Sbircea",
            "Saculescu",
            "Gheorghescu",
            "Dumitru",
            "Gabor",
            "Oprean",
            "Oprisan",
            "Razilu",
            "Racoveanu",
            "Tamplaru",
            "Faur",
            "Baboi",
            "Baca",
            "Caceu",
            "Varga"
        ),
    );
   /// echo "<pre>";print_r($scoala);
	
	
	
	
	
	
	
	
 $scoala2=array(
        "Cladiri"=>array(
            "Cladirea A",
            "Cladirea B",
            "Cladirea C",
            "Sala de sport 1",
            "Sala de sport 2"
        ),
        "Semestre"=>array(
            "Semestrul 1",
            "Semestrul 2"
        ),
        "Note"=>array(
            "Primara"=>array(
                "Excelent",
                "Foarte bine",
                "Bine",
                "Suficinet",
                "Insuficient"
            ),
            "Gimnaziu"=>array(
                "0",
                "1",
                "2",
                "3",
                "4",
                "5",
                "6",
                "7",
                "8",
                "9",
                "10"
            ),
            "Liceu"=>array(
                "0",
                "1",
                "2",
                "3",
                "4",
                "5",
                "6",
                "7",
                "8",
                "9",
                "10"
            ),
        ),
        "Clase"=>array(
            "Primara"=>array(
                "1A",
                "1B",
                "1C",
                "1D",
                "2A",
                "2B",
                "2C",
                "2D",
                "3A",
                "3B",
                "3C",
                "3D",
                "4A",
                "4B",
                "4C",
                "4D",
            ),
            "Gimnaziu"=>array(
                "5A",
                "5B",
                "5C",
                "5D",
                "6A",
                "6B",
                "6C",
                "6D",
                "7A",
                "7B",
                "7C",
                "7D",
                "8A",
                "8B",
                "8C",
                "8D",
            ),
            "Liceu"=>array(
                "9A",
                "9B",
                "9C",
                "9D",
                "10A",
                "10B",
                "10C",
                "10D",
                "11A",
                "11B",
                "11C",
                "11D",
                "12A",
                "12B",
                "12C",
                "12D",
            )
        ),
        "Materii"=>array(
            "Primara"=>array(
                "Matematica",
                "Limba si literatura romana",
                "Stiintele Naturii",
                "Limba Engleza",
                "Abilitati practce",
                "Desen",
                "Sport",
                "Civica",
                "Istorie",
                "Educatie pentru sanatate",
                "Muzica",
                "Geografie"
            ),
            "Gimnaziu"=>array(
                "Limba si literatura romana",
                "Matematica",
                "Limba engleza",
                "Limba germana",
                "Limba franceza",
                "Fizica",
                "Chimie",
                "Desen",
                "Istorie",
                "Optional 1",
                "Optional 2",
                "Sport",
                "Muzica",
                "Biologie",
                "Geografie"
            ),
            "Liceu"=>array(
                "Limba si literatura romana",
                "Matematica",
                "Biologie",
                "Chimie",
                "Fizica",
                "Informatica",
                "TIC",
                "Limba engleza",
                "Limba germana",
                "Limba franceza",
                "Sport",
                "Muzica",
                "Desen",
                "Economie",
                "Educatie antreprenoriala",
                "Istorie",
                "Geografie",
                "Filosofie",
                "Logica",
                "Optional 1",
                "Optional 2",
                "Optional 3"
            )
        ),
        "Invatatori"=>array(
            "Clasele 1"=>array(
                "Bades",
                "Costin",
                "Avram",
                "Mircea",
            ),
            "Clasele 2"=>array(
                "Bordea",
                "Saba",
                "Meagher",
                "Maier",
            ),
            "Clasele 3"=>array(
                "Vasile",
                "Edeleanu",
                "Popescu",
                "Cimbriescu",
            ),
            "Clasele 4"=>array(
                "Cretu",
                "Agafitei",
                "Ionescu",
                "Petrescu",
            )
        ),
        "Profesori"=>array(
            "Zablatoschi",
            "Uceanu",
            "Leca",
            "Iconomescu",
            "Iacob",
            "Sbircea",
            "Saculescu",
            "Gheorghescu",
            "Dumitru",
            "Gabor",
            "Oprean",
            "Oprisan",
            "Razilu",
            "Racoveanu",
            "Tamplaru",
            "Faur",
            "Baboi",
            "Baca",
            "Caceu",
            "Varga"
        ),
    );
	
	
	
	
	
	
	
	
	
	
	
	?>
	
<ol >
<?php
	foreach ($scoala["Cladiri"] as $cladire) {
		?>
			<li><?=$cladire;?></li>
		<?php
	}
?>

</ol>


<table width="100%" border="1">
<tr>
	<td></td>
	<?php 
	$chei_orizontale=array("Materii","Clase","Note");
		foreach ($scoala2 as $k=>$v){
			if (in_array($k, $chei_orizontale)){
				?>
				<td><?=$k?></td>
				<?php			
			}
			
		}
	?>
</tr>
<?php 
$chei_verticale=array("Primara", "Gimnaziu","Liceu");
foreach ($chei_verticale as $cheie){
	?>
	<tr>
		<td><?=$cheie?></td>
		<?php 
		foreach ($scoala2 as $k=>$v){
			if(in_array($k, $chei_orizontale)){
				foreach ($v as $kk=>$vv){
					if ($cheie==$kk){
						?>
						<td>
							<ul >
							<?php
								foreach ($vv as $valoare) {
									?>
										<li><?=$valoare;?></li>
									<?php
								}
							?>

							</ul>

						
						<?php
					}
				}
				
			}
		}
		?>
	</tr>
	
	
	<?php
	
	
}



?>


</table>
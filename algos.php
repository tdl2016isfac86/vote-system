<?php

function pourcentage($percent,$total) {
    // obtient un pourcente sans décimale
    $percent = round($percent*100/$total);
    // la même chose avec deux décimales
    $percent = round($percent*100/$total,2);
}


// -----------------------------------------


for($i = 1; $i<=20; $i ++) {
	if($i == 2){
	    echo 'Page '.$i;
	}
	else {
	    echo '<a href="#">Page '.$i.'</a>';
	}
	if($i !=20) {
	    echo ' - ';
	}
}


echo '<a href="#">Toge 1</a> - ';
echo 'Toge 2 -';
for($i = 3; $i<=20; $i ++) {
    echo '<a href="#">Page '.$i.'</a>';
	if($i !=20) {
	    echo ' - ';
	}
}

// --------------------------------------------
$id=2;
requete_sql("SELECT * FROM table WHERE id='".$id."'");

echo "Bonjour les gens, "
    ."voici une chaine "
    ."sur plusieurs lignes "
    ."comme ça pour voir";
    
echo "Bonjour les gens,
      voici une chaine
      sur plusieurs lignes
      comme ça pour voir";
      
// -----------------------------------------------

$liste = array('pomme', 'poire', 'banane', 'kiwi', 'fraise');

$etsil = array();
foreach($liste as $index => $valeur) {
    $etsil[$valeur] = $index;
}

$liste = array(0 => 'pomme', 1=> 'poire', 2=> 'banane', 3=> 'kiwi', 4=> 'fraise');

$etsil = array('pomme' => 0, 'poire' =>1, 'banane'=>2, 'kiwi'=>3, 'fraise'=>4);

// ------------------------------------------------

$resultat = requete_sql("SELECT * FROM table");

while($row = mysql_fetch_assoc($resultat)) {
    
}


// ------------------------------------------------
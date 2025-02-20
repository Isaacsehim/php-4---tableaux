<?php
$nom = array("Ichem", "Alice", "Bob", "Charlie", "David", "Emma", "Saïd");
var_dump($nom);
echo '<br>';
echo '<hr>';
array_unshift($nom, "Camille");
array_push($nom, "Caterine");

foreach ($nom as $prenom => $valeur) {
	echo $valeur . ", ";
}
echo '<hr>';
echo count($nom);
?>
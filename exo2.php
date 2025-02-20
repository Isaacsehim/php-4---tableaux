<?php
// 1
$personne = [
	'nom' => 'Isaac',
	'prenom' => 'SEHIM',
	'age' => '31',
	'ville' => 'Havre',
	'hobbies' => ["Dj", "Jeux video", "Sport"],
];
var_dump($personne);
echo '<br>';
echo '<hr>';

// 2
$personne['profession'] = 'Developpeur';
var_dump($personne);
echo '<br>';
echo '<hr>';

// 2 bis
$personne['transport'] = '';
var_dump($personne);
echo '<br>';
echo '<hr>';

// 3
$personne['ville'] = 'Rouen';
var_dump($personne);
echo '<br>';
echo '<hr>';

// 4
$personne['hobbies'][] = 'Lecture';
var_dump($personne);
echo '<br>';
echo '<hr>';

// 5
unset($personne['age']);
var_dump($personne);
echo '<br>';
echo '<hr>';

// 6
if (array_key_exists('profession', $personne)) {
	echo 'La clé "profession" se trouve dans le tableau $personne !';
} else {
	echo 'La clé "profession" ne se trouve pas dans le tableau $personne !';
}
echo '<br>';
echo '<hr>';

// 7
foreach ($personne AS $key => $valeur) {
	if($valeur) { 
		if($key == 'hobbies') {
			echo $key . ' : ' . implode(', ', $valeur) . '<br>';
		} else {
			echo $key . ' : ' . $valeur . '<br>';
		}
	} else {
		echo $key . ' : ' . 'Valeur non renseignée' . '<br>';
	}
}
echo '<br>';
echo '<hr>';

// 8
foreach ($personne AS $key => $valeur) {
	if($valeur) { 
		if($key == 'hobbies') {
			sort($valeur);
			echo $key . ' : ' . implode(', ', $valeur) . '<br>';
		} else {
			echo $key . ' : ' . $valeur . '<br>';
		}
	} else {
		echo $key . ' : ' . 'Valeur non renseignée' . '<br>';
	}
}
echo '<br>';
echo '<hr>';

// 9
foreach ($personne AS $key => $valeur) {
	if (is_array ($valeur)) {
		echo count($personne) - 1 + count($personne['hobbies']);
} }
?>
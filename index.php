<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 18/12/2018
 * Time: 14:08
 */

/*$x= 1;
$y= 20;

$random= mt_rand($x, $y); // VALEUR PREMIERE ENTRE PARENTHESE== MINIMUM DEUXIEME==MAXIMUM MT_RAND CALCULE UN RANDOM
echo $random;*/


$x= $_GET['x'];
echo $x. "<br/>";
$y= $_GET['y'];
echo $y. "<br/>";

$random= mt_rand($x, $y);
echo "random is ". $random;

// mieux vaut verifier que les données sont bien entrees par  l utilisateur, + conditions genre if(x<y){} etc...



<h1>Exercice 14</h1>

<p>En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une
adresse e-mail a le bon format.</p>

<p>L'adresse elan@elan-formation.fr est une adresse e-mail valide.<br>
L'adresse contact@elan est une adresse e-mail invalide.</p>

<h2>Résultats :</h2>

<?php
/* 
Filtrage des données
deux moyens de filtre : validation et nettoyage.

validation : on vérifie si une donnée passe certains critères :  FILTER_VALIDATE_EMAIL détermine si une donnée est une adresse courriel valide. Pas de modification de données.

nettoyage : on nettoie les données. on peut retirer les caractères indésirables : FILTER_SANITIZE_EMAIL fait disparaître les caractères inappropriés dans une adresse courriel. Pas de validation de données.

Des options sont éventuellement utilisées par la validation et le nettoyage, pour adapter le comportement à des besoins spécifiques.

FILTER_VALIDATE_EMAIL : Valide une adresse de courriel.

var_dump : un string si adresse valide, un bool=false si adresse invalide.
*/

$email = "elan@elan-formarion.fr";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "$email est une adresse e-mail valide.<br>";
} 
else {
    echo "$email est une adresse e-mail invalide.<br>";
}

var_dump (filter_var($email, FILTER_VALIDATE_EMAIL));


$email = "contact@elan";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "$email est une adresse e-mail valide.<br>";
} else {
    echo "$email est une adresse e-mail invalide.<br>";
}

var_dump (filter_var($email, FILTER_VALIDATE_EMAIL));


/* il manque le else dans la première boucle .... 
https://www.php.net/manual/fr/filter.examples.validation.php

$email_a = 'joe@example.com';
$email_b = 'bogus';

if (filter_var($email_a, FILTER_VALIDATE_EMAIL)) {
    echo "L'adresse email '$email_a' est considérée comme valide.";
}
if (filter_var($email_b, FILTER_VALIDATE_EMAIL)) {
    echo "L'adresse email '$email_b' est considérée comme valide.";
} else {
    echo "L'adresse email '$email_b' est considérée comme invalide.";
}
*/

?>
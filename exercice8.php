<h1>Exercice 8</h1>

<p>Soit l'URL suivante : <b>http://my.mobirise.com/data/userpic/764.jpg</b><br>
Créer une fonction personnalisée permettant d'afficher l'image N fois à l'écran.</p>

<p><b>Exemple :</b><br>
repeterImage($url,4);</p>

<h2>Résultats :</h2>

<!-- <img src="http://my.mobirise.com/data/userpic/764.jpg" alt="un chien qui mange une pantoufle"><br> -->

<?php

$url = "http://my.mobirise.com/data/userpic/764.jpg";

$chaine = "essai avec du texte."; 

function afficherImageNfois ( string $url , int $n) : string {
    $resultat = "";
    for ($i = 0 ; $i  < $n ; $i++) {
        $resultat .= "<img src='$url' alt='un chiot mordille une pantoufle'>";
    }
    return $resultat;
}

// on affiche 6 fois l'image. Notre fonction a besoin de 2 arguments pour s'exécuter - l'url de l'image et le nb de fois qu'on veut l'afficher

echo afficherImageNfois ($url , 6);


// je voulais vérifier la syntaxe pour afficher une image

echo "<img src='$url' alt='un chiot mordille une pantoufle'>";

var_dump ($url);
var_dump (afficherImageNfois ($url , 6));
?>
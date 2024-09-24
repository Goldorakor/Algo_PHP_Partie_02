<h1>Exercice 8</h1>

<p>Soit l'URL suivante : <b>http://my.mobirise.com/data/userpic/764.jpg</b><br>
Créer une fonction personnalisée permettant d'afficher l'image N fois à l'écran.</p>

<p><b>Exemple :</b><br>
repeterImage($url,4);</p>

<h2>Résultats :</h2>

<img src="http://my.mobirise.com/data/userpic/764.jpg" alt="un chien qui mange une pantoufle"><br>

<?php

$chaine = "essai avec du texte.<br>";
$imageChien = 

function afficherImageNfois ($image , $n) {
    $resultat = "";
    for ($i = 0; $i < $n; $i++) {
        $resultat .= "$image<br>";

    }
    return $resultat;
}

echo afficherImageNfois ($chaine , 6);
?>
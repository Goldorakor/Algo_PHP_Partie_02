
        <style type="text/css">
            .special {
               color: red ;
            }
        </style>
    
    
<h1>Exercice 1</h1>

<p>Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de
caractères passée en argument en majuscules et en rouge.</p>

<p>Vous devrez appeler la fonction comme suit : convertirMajRouge($texte);</p>

<h2>Résultats :</h2>


<?php

$maPhrase = "Je suis en majuscule et rouge.";

echo "Je souhaite transformer $maPhrase en".convertirMajRouge ($maPhrase)." ";


// création de la fonction personnalisé convMajRouge
function convertirMajRouge (string $texte) : string {
$texteEnMajuscule = mb_strtoupper ($texte);
return "<p class=special>$texteEnMajuscule</p>";
}

?>
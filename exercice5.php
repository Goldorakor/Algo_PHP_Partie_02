<h1>Exercice 5</h1>

<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en  
précisant le nom des champs associés.</p>

<p><b>Exemple :</b><br>
$nomsInput = ["Nom","Prénom","Ville"];<br>
afficherInput($nomsInput);</p>

<h2>Résultats :</h2>


<?php

$nomsInput = [
    "Nom",
    "Prénom",
    "Ville",
];

function afficherInput (array $nomsInput) {
    $result = ""; // il faut bien penser à initialiser cette variable (chaine de caracère vide)
    foreach ($nomsInput as $element) {
        $result .= "$element<br>
    <input type='text' id=\"name\" name=\"name\" />
    <label for=\"name\"></label>
            <br>"; // il faut bien penser au signe .= pour une concaténation effective ! 
    }
    return $result;
}

echo afficherInput ($nomsInput);

?>
<h1>Exercice 5</h1>

<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en  
précisant le nom des champs associés.</p>

<p><b>Exemple :</b><br>
$nomsInput = ["Nom","Prénom","Ville"];<br>
afficherInput($nomsInput);</p>

<h2>Résultats :</h2>


<?php

$nomsInput100 = [
    "Nom",
    "Prénom",
    "Ville",
];

function afficherInput (array $nomsInput) : string {
    $result = "<form>"; // je place la balise <form> en dehors de la boucle.
    foreach ($nomsInput as $element) {
        $result .= "<label for='name'>$element</label><br>  <!-- il faut bien penser au signe .= pour une concaténation effective ! -->
    <input type='text' id='name' name='name' />
            <br>";  
    }
    $result .= "</form>";  // à nouveau, je place la balise </form> en dehors de la boucle.
    return $result;
}

echo afficherInput ($nomsInput100); // j'ai changé de nom de tableau ($nomsInput100) pour bien montrer que notre fonction s'applique bien entendu à n'importe quel tableau.

?>
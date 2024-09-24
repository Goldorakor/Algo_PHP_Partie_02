<h1>Exercice 6</h1>

<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau
de valeurs.</p>

<p><b>Exemple :</b><br>
$elements = ["Monsieur","Madame","Mademoiselle"];<br>
alimenterListeDeroulante($elements);</p>

<h2>Résultats :</h2>

<p>Liste déroulante en HTML</p>

<label for="choixCivilite">Choisissez votre civilité:<br></label>
<!-- petit travail préparatoire pour bien créer notre liste déroulante en HTML -->
<select name="civilite" id="choixCivilite">
  <option value="">--Faites votre choix--</option>
  <option value="monsieur">Monsieur</option>
  <option value="madame">Madame</option>
  <option value="mademoiselle">Mademoiselle</option>
</select>

<?php

$elements = [
    "Monsieur",
    "Madame",
    "Mademoiselle",
];


// faire très attention quand on passe d'un exemple en HTML à une réalisation en CSS ensuite : les guillemets vont nous créer des erreurs si on ne pense pas à les précéder de \ ...... 

function alimenterListeDeroulante ($elements) {
    $result = "<select name=\"civilite\" id=\"choixCivilite\">
  <option value=\"\">--Faites votre choix--</option>";
    foreach ($elements as $element){
        $result .="<option value=\"$element\">$element</option>";
    }
    $result .= "</select>";
    return $result;
}

?>
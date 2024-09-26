<h1>Exercice 6</h1>

<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau
de valeurs.</p>

<p><b>Exemple :</b><br>
$elements = ["Monsieur","Madame","Mademoiselle"];<br>
alimenterListeDeroulante($elements);</p>

<h2>Résultats :</h2>

<p>Liste déroulante en HTML</p>


<!-- petit travail préparatoire pour bien créer notre liste déroulante en HTML -->
<label for="choixCivilite">Choisissez votre civilité:<br></label>
<select name="civilite" id="choixCivilite">
  <option value="">   Faites votre choix   </option>
  <option value="monsieur">Monsieur</option>
  <option value="madame">Madame</option>
  <option value="mademoiselle">Mademoiselle</option>
</select><br>

<?php

$elements = [
    "Monsieur",
    "Madame",
    "Mademoiselle",
];


// faire très attention quand on passe d'un exemple en HTML à une réalisation en CSS ensuite : 
// les guillemets vont nous créer des erreurs sauf si on adopte les guillemets simples.

// L’élément label peut être associé à un contrôle via l’attribut "for".
// Il s’agit d’un contrôle étiqueté par l’élément label. L'attribut "for" fait référence à l'attribut "id" de l'élément du formulaire. 
// En d'autres termes, il faut fournir un identifiant (l'attribut "id") à un élément <input> pour pouvoir associer l'input à élément <label>. 
// On renseigne ensuite l'attribut "for"avec la valeur de l'identifiant.

/* 
exemple : <div>
    <label for="user_email">Email</label>
    <input type="email" name="email" id="user_email">
</div>
*/

function alimenterListeDeroulante (array $elements) : string {
    $result = "<form><label for='choixCivilite'>Choix de la civilité :</label><br>
    <select name='civilite' id='choixCivilite'>
  <option value=''>--  Faites votre choix  --</option>";
    foreach ($elements as $element){
        $result .= "<option value='$element'>$element</option>";
    }
    $result .= "</select></form>";
    return $result;
}

echo alimenterListeDeroulante ($elements);

// var_dump (alimenterListeDeroulante ($elements));

?>
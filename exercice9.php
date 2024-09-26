<h1>Exercice 9</h1>

<p>Créer une fonction personnalisée permettant d'afficher des boutons radio avec un tableau de
valeurs en paramètre ("Monsieur","Madame","Mademoiselle").</p>

<p><b>Exemple :</b><br>
afficherRadio($nomsRadio);</p>

<h2>Résultats :</h2>


<p>Choisir nationalité </p>
<p>
	
	Anglais: <input type="radio" name="citizenship" /><br />
	Roumain: <input type="radio" name="citizenship" /><br />
	Espagnol: <input type="radio" name="citizenship" />
</p>



<?php

$nomsRadio = [
    "bouton1" => "unchecked" , 
    "bouton2" => "checked" ,
    "bouton3" => "unchecked" , 
    "bouton4" => "unchecked" ,
    "bouton5" => "unchecked" ,
];

function afficherRadio (array $nomsRadio) : string {
    $resultat = "<form>";
    foreach ($nomsRadio as $bouton => $cochage) {
        $resultat .= "<label for='$bouton'>$bouton</label>
            <input type='radio' id='$bouton' name='CategorieGlobalBouton' $cochage /><br>";
    }
    $resultat .= "</form>";
    return $resultat;
}

echo afficherRadio ($nomsRadio);

?>






<!--

bon exemple de input type radio


<fieldset>
  <legend>Select a maintenance drone:</legend>

  <div>
    <input type="radio" id="huey" name="drone" value="huey" checked />
    <label for="huey">Huey</label>
  </div>

  <div>
    <input type="radio" id="dewey" name="drone" value="dewey" />
    <label for="dewey">Dewey</label>
  </div>

  <div>
    <input type="radio" id="louie" name="drone" value="louie" />
    <label for="louie">Louie</label>
  </div>
</fieldset>







 modèle en HTML car je ne savais plus trop générer des cases à cocher : j'ai donc effectué un petit travail préalable ! 

  <div>
    <input type="checkbox" id="scales" name="scales" checked />
    <label for="scales">Scales</label>
  </div>

  <div>
    <input type="checkbox" id="horns" name="horns" />
    <label for="horns">Horns</label>
  </div>

  <div>
    <input type="checkbox" id="scales" name="scales" unchecked />
    <label for="scales">Scales</label>
  </div>

  <div>
    <input type="checkbox" id="horns" name="horns" />
    <label for="horns">Horns</label>
  </div>

-->

<?php
/*

$elements = [
    "proposition1" => "checked" , 
    "proposition2" => "checked" ,
    "proposition3" => "unchecked" , 
    "proposition4" => "checked" ,
    "proposition5" => "unchecked" ,
]; // astuce : non coché = unchecked

function genererCheckBox (array $elements) {
    $result = ""; // il faut bien penser à initialiser cette variable (chaine de caracère vide)
    foreach ($elements as $proposition => $cochage) {
        $result .= "<div>
    <input type='checkbox' id=\"$proposition\" name=\"$proposition\" $cochage />
    <label for=\"$proposition\">$proposition</label>
            </div>"; // il faut bien penser au signe .= pour une concaténation effective ! 
    }
    return $result;
}

echo genererCheckBox ($elements);

*/
?>

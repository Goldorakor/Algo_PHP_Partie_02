<h1>Exercice 7</h1>

<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser
dans le tableau associatif si la case est cochée ou non.</p>

<p><b>Exemple :</b><br>
genererCheckBox($elements); // où $elements est un tableau associatif clé => valeur avec 3 entrées.</p>

<h2>Résultats :</h2>

<!-- modèle en HTML car je ne savais plus trop générer des cases à cocher : j'ai donc effectué un petit travail préalable ! 

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
        $result .= "<input type='checkbox' id=\"$proposition\" name=\"$proposition\" $cochage />
    <label for=\"$proposition\">$proposition</label>
            <br>"; // il faut bien penser au signe .= pour une concaténation effective ! 
    }
    return $result;
}

echo genererCheckBox ($elements);

?>
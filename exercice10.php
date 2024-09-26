<h1>Exercice 10</h1>

<p>En utilisant l'ensemble des fonctions personnalisées crées précédemment, créer un formulaire
complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse e-mail, 
ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation :
« Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».</p>

<p>Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement
de validation (submit).</p>

<h2>Résultats :</h2>


<?php

$nomsInputAssociatif = [
    "Nom" => "text" ,
    "Prénom" => "text" ,
    "Adresse email" => "email" ,
    "Ville" => "text" ,
];


$sexe = [
    "Masculin" => "checked" ,
    "Féminin" => "unchecked" ,
];


$metiers = [
    "Développeur Logiciel" ,
    "Designer web" ,
    "Intégrateur" ,
    "Chef de projet" ,
];


$validation = [
    "" => "submit" ,
];

$nomsInputGlobal = [
    $nomsInputAssociatif ,
    $sexe ,
    $metiers ,
];



echo afficherInput3 ($nomsInputAssociatif)."<br>";
echo afficherRadio ($sexe)."<br><br>";
echo alimenterListeDeroulante ($metiers)."<br>";
echo afficherInput3 ($validation)."<br>";






// je reprends la fonction de l'exercice 5 utile pour créer un formulaire de champs de texte

function afficherInput (array $nomsInput) : string {
    $result = "<form>"; // je place la balise <form> en dehors de la boucle.
    foreach ($nomsInput as $element) {
        $result .= "<label for='name'>$element</label><br>  <!-- il faut bien penser au signe .= pour une concaténation effective ! -->
    <input type='text' id='name' name='name' /><br>";  
    }
    $result .= "</form>";  // à nouveau, je place la balise </form> en dehors de la boucle. il faut bien penser au signe .= devant $result pour une concaténation effective !
    return $result;
}


// je reprends la fonction de l'exercice 5 utile pour créer un formulaire de champs de texte, mais pour une entrée type "email"

function afficherInput2 (array $nomsInput) : string {
    $result = "<form>"; // je place la balise <form> en dehors de la boucle.
    foreach ($nomsInput as $element) {
        $result .= "<label for='name'>$element</label><br>  <!-- il faut bien penser au signe .= pour une concaténation effective ! -->
    <input type='email' id='name' name='name' /><br>";  
    }
    $result .= "</form>";  // à nouveau, je place la balise </form> en dehors de la boucle. il faut bien penser au signe .= devant $result pour une concaténation effective !
    return $result;
}


// tentative pour améliorer afficherInput pour que la fonctionne sache distinguer le type associé à input : text, button, checkbox, email et autres

function afficherInput3 (array $nomsInput) : string {
    $result = "<form>"; 
    foreach ($nomsInput as $element => $type) {
        $result .= "<label for='name'>$element</label><br>
    <input type='$type' id='name' name='name' /><br>"; 
    }
    $result .= "</form>";
    return $result;
}

// je reprends la fonction de l'exercice 6 utile pour remplir une liste déroulante à partir d'un tableau de valeurs

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

// je reprends la fonction de l'exercice 7 utile pour générer des cases à cocher

function genererCheckBox (array $elements) : string {
    $result = "<form>"; // il faut bien penser à placer notre balise formulaire avant le début de la boucle
    foreach ($elements as $proposition => $cochage) {
        $result .= "<input type='checkbox' id='$proposition' name='$proposition' $cochage />
    <label for='$proposition'>$proposition</label><br>"; // il faut bien penser au signe .= pour une concaténation effective ! 
    }
    $result .="</form>"; // il faut bien penser à placer notre balise formulaire après la boucle
    return $result;
}

// je reprends la fonction de l'exercice 9 utile pour générer des boutons "radio"

function afficherRadio (array $nomsRadio) : string {
    $resultat = "<form>";
    foreach ($nomsRadio as $bouton => $cochage) {
        $resultat .= "<label for='$bouton'>$bouton</label>
            <input type='radio' id='$bouton' name='CategorieGlobalBouton' $cochage /><br>";
    }
    $resultat .= "</form>";
    return $resultat;
}

?>
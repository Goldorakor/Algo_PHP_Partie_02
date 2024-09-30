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
    "Adresse_email" => "email" ,
    "Ville" => "text",
];

$sexe = [
    "Masculin" ,
    "Féminin" ,
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

echo "<form>".afficherInput ($nomsInputAssociatif)."<br>".afficherRadio ($sexe)."<br>".alimenterListeDeroulante ($metiers)."<br>".afficherInput ($validation)."<br></form>"; // on a viré les balises <form> des fonctions pour les mettre ici pour avoir un formulaire global et pas plusieurs mini formulaires.

function afficherFormulaire (array $nomsInputAssociatif , array $sexe , array $metiers , array $validation) : string {
    $result = "<form>";
    $result .= afficherInput ($nomsInputAssociatif)."<br>";
    $result .= afficherRadio ($sexe)."<br>";
    $result .= alimenterListeDeroulante ($metiers)."<br>";
    $result .= afficherInput ($validation)."<br>";
    $result .= "</form>";
    return $result;
}

echo "<h3>essai avec la fonction afficherFormulaire</h3>";
echo afficherFormulaire ($nomsInputAssociatif , $sexe , $metiers ,  $validation);


// tentative pour améliorer afficherInput pour que la fonctionne sache distinguer le type associé à input : text, button, checkbox, email et autres

function afficherInput (array $nomsInput) : string {
    $result = ""; // <form> supprimé
    foreach ($nomsInput as $element => $type) {
        $result .= "<label for='name'>$element</label><br>
    <input type='$type' id='name' name='name' /><br>"; 
    }
    $result .= ""; // </form> supprimé
    return $result;
}

// je reprends la fonction de l'exercice 6 utile pour remplir une liste déroulante à partir d'un tableau de valeurs

function alimenterListeDeroulante (array $elements) : string {
    $result = "<label for='choixFormation'>Intitulé de formation :</label><br>
    <select name='civilite' id='choixFormation'>
  <option value=''>--  Faites votre choix  --</option>";// <form> devant <label .... enlevé
    foreach ($elements as $element) {
        $result .= "<option value='$element'>$element</option>";
    }
    $result .= "</select>"; // </form> supprimé
    return $result;
}

// je reprends la fonction de l'exercice 7 utile pour générer des cases à cocher

function genererCheckBox (array $elements) : string {
    $result = ""; // il faut bien penser à placer notre balise formulaire avant le début de la boucle - enlevée dans ce cas précis car on veut un formulaire global
    foreach ($elements as $proposition => $cochage) {
        $result .= "<input type='checkbox' id='$proposition' name='$proposition' $cochage />
    <label for='$proposition'>$proposition</label><br>"; // il faut bien penser au signe .= pour une concaténation effective ! 
    }
    $result .=""; // il faut bien penser à placer notre balise formulaire après la boucle - enlevée dans ce cas précis car on veut un formulaire global
    return $result;
}

// je reprends la fonction de l'exercice 9 utile pour générer des boutons "radio"

function afficherRadio (array $nomsRadio) : string {
    $resultat = ""; // <form> supprimé
    foreach ($nomsRadio as $bouton) {
        $resultat .= "<label for='$bouton'>$bouton</label>
            <input type='radio' id='$bouton' name='CategorieGlobalBouton' /><br>";
    }
    $resultat .= ""; // </form> supprimé
    return $resultat;
}

?>
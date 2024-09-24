<h1>Exercice 4</h1>

<p>A partir de l'exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra
le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s'ouvrir dans un
nouvel onglet et le tableau sera trié par ordre alphabétique <b>de la capitale</b>).</p>

<p>On admet que l'URL de la page Wikipédia de la capitale adopte la forme :<br>
https://fr.wikipedia.org/wiki/</p>

<p>Le tableau passé en argument sera le suivant :<br>
$capitales = ["France"=>"Paris" , "Allemagne"=>"Berlin" , "USA"=>"Washington" , "Italie"=>"Rome" , "Espagne"=>"Madrid"];</p>

<h2>Résultats :</h2>

<table border = 1>
    <!-- Entête du tableau -->
    <thead>
        <tr>
            <th>Pays</th>
            <th>Capitales</th>
            <th>Liens hypertextes</th>
        </tr>
    </thead>
    <!-- Corps du tableau -->
     <tbody>
        <tr>
            <td>France</td>
            <td>Paris</td>
            <td><a href="https://fr.wikipedia.org/wiki/Paris" target="_blank">Veuillez cliquer sur ce lien.</a></td>
        </tr>
        <tr>
            <td>Allemagne</td>
            <td>Berlin</td>
            <td><a href="https://fr.wikipedia.org/wiki/Berlin" target="_blank">Veuillez cliquer sur ce lien.</a></td>
        </tr>
        <tr>
            <td>USA</td>
            <td>Washington</td>
            <td><a href="https://fr.wikipedia.org/wiki/Washington" target="_blank">Veuillez cliquer sur ce lien.</a></td>
        </tr>
     </tbody>
</table>


<?php

$capitales = [
    "France" => "Paris" , 
    "Allemagne" => "Berlin" ,
    "USA" => "Washington" , 
    "Italie" => "Rome"
];


foreach ($capitales as $pays => $capitale) {
    echo "Le pays $pays a pour capitale : $capitale.<br>";
}


echo afficherTableHTML ($capitales);

function afficherTableHTML (array $capitales) {
    asort($capitales); // pour trier notre tableau alphabétiquement selon les valeurs
    $result = "<table border = 1>
                <thead>
                    <tr>
                        <th>Pays</th>
                        <th>Capitales</th>
                        <th>Pages Wikipedia</th>
                    </tr>
                </thead>
                <tbody>";

    foreach ($capitales as $pays => $capitale) {
       $result .= "<tr>
                    <td>".mb_strtoupper($pays)."</td>
                    <td>$capitale</td>
                    <td><a href=\"https://fr.wikipedia.org/wiki/$capitale\" target=\"_blank\">Veuillez cliquer sur ce lien.</a></td>
                </tr>";// ne pas oublier \". et .\" pour garder une concaténation correcte.
    }

    $result .= "</tbody>
        </table>";

    return $result;
}

?>
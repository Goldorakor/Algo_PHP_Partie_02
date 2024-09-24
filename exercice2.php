<h1>Exercice 2</h1>

<p>Soit le tableau suivant :<br>
$capitales = ["France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome"];</p>

<p>Réaliser un algorithme permettant d'afficher le tableau HTML suivant (notez que le nom du pays
s'affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à
une fonction personnalisée.</p>

<p>Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);</p>

<h2>Résultats :</h2>

<table border = 1>
    <!-- Entête du tableau -->
    <thead>
        <tr>
            <th>Pays</th>
            <th>Capitales</th>
        </tr>
    </thead>
    <!-- Corps du tableau -->
     <tbody>
        <tr>
            <td>France</td>
            <td>Paris</td>
        </tr>
        <tr>
            <td>Allemagne</td>
            <td>Berlin</td>
        </tr>
        <tr>
            <td>USA</td>
            <td>Washington</td>
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
    ksort($capitales); // pour trier notre tableau alphabétiquement selon les clés
    $result = "<table border = 1>
                <thead>
                    <tr>
                        <th>Pays</th>
                        <th>Capitales</th>
                    </tr>
                </thead>
                <tbody>";

    foreach ($capitales as $pays => $capitale) {
       $result .= "<tr>
                    <td>".mb_strtoupper($pays)."</td>
                    <td>$capitale</td>
                </tr>";// ne pas oublier \". et .\" pour garder une concaténation correcte.
    }

    $result .= "</tbody>
        </table>";

    return $result;
}


?>
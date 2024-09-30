<h1>Exercice 11</h1>

<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d'une
chaîne de caractères représentant une date.</p>

<p><b>Exemple :</b><br>
formaterDateFr("2018-02-23");</p>

<h2>Résultats :</h2>


<?php

// aller voir la "class" intlDateFormatter

$date = new DateTime("2018-02-23"); // $date2 est un objet (provenant de la classe DateTime) et DateTime est une classe. (plein de fonctions existantes, appelées méthodes)
$now = new DateTime(); // $now est un autre objet provenant de la classe DateTime - ()vide => date actuelle

echo "<br>repère 1<br>";
var_dump($now);

echo "<br>repère 2<br>";
var_dump($now->format("d.m.Y"));

$myFormatter = new IntlDateFormatter(
    'fr_FR',
    IntlDateFormatter::FULL,
    IntlDateFormatter::NONE,
    'Europe/Paris',
    IntlDateFormatter::GREGORIAN
); // $myFormatter est un objet provenant de la classe IntlDateFormatter - new pour indiquer la création de l'objet.

$myFormattedDate = $myFormatter->format($date);
echo $myFormattedDate;

echo "<br>repère 3<br>";
var_dump($date);

echo "<br>repère 4<br>";
var_dump($myFormatter);

echo "<br>repère 5<br>";
echo $myFormatter->format($date)."<br>"; // -> sert à appeler une fonction quand on travaille "en objet" . $date est l'argument de la fonction "format" que j'appelle (pour l'objet $myFormatter).

echo $myFormatter->format($now)."<br>";
echo $myFormatter->format($date)."<br>";
echo $myFormatter->format($now)."<br>";

/* docuementation utile pour savoir comment construire notre objet : on sait quels arguments sont attendus, lesquels sont obligatoires, etc)

Methods

public __construct(
    ?string $locale,  <-- ? car argument facultatif
    int $dateType = IntlDateFormatter::FULL,
    int $timeType = IntlDateFormatter::FULL,
    IntlTimeZone|DateTimeZone|string|null $timezone = null,
    IntlCalendar|int|null $calendar = null,
    ?string $pattern = null  <-- ? car argument facultatif
)
    
*/

function formaterDateFr (string $dateInput) : string {
    $dateFromDateInput = new DateTime($dateInput);
    $myFormatter = new IntlDateFormatter(
        'fr_FR',
        IntlDateFormatter::FULL,
        IntlDateFormatter::NONE,
        'Europe/Paris',
        IntlDateFormatter::GREGORIAN
    );
    $myFormattedDate = $myFormatter->format($dateFromDateInput);
    return $myFormattedDate;
}


echo formaterDateFr ("2020-02-04")."<br>";
echo formaterDateFr ("1912-02-04")."<br>";
echo formaterDateFr ("2078-02-04")."<br>";


/* 
explications de la construction de la fonction formaterDateFr : 

comme argument, on demande une variable string $dateInput qui aura la forme AAAA-MM-JJ : c'est la "date chiffres" que l'on veut transformer en "date lettres" en sortie de fonction.

on utilise la class DateTime pour créer un objet $dateFromInput à partir de notre "date chiffres" $dateInput : on pourra effectuer des manipulations de cet objet $dateFromInput.

on utilise la class IntlDateFormatter pour créer un objet $myFormatter (un formateur personnalisé) à qui on donne les caractéristiques souhaitées. 

finalement, la "date lettres" sera obtenue en appliquant le formatage personnalisé $myFormatter à l'objet $dateFromInput.

$myFormattedDate = $myFormatter->format($dateFromDateInput);

mon formateur formate la date input et ça donne la date formatée.

attention, la méthode format() se comporte différemment selon qu'elle formate des objets DateTime ou des objets IntlDateFormatter !! On peut dire qu'il y a la méthode format() de la classe DateTime et la méthode format() de la classe IntlDateFormatter et qu'elles sont bien distinctes ! 


Avec DateTime

$dateTime->format(string $format): string
exemple :
$date = new DateTime('2024-09-27 14:00:00');
$formattedDate = $date->format('Y-m-d H:i:s');

echo $formattedDate; // Affiche "2024-09-27 14:00:00"


Avec IntlDateFormatter

$formatter->format(mixed $value): string
exemple
use IntlDateFormatter;

$date = new DateTime('2024-09-27 14:00:00');
$locale = 'fr_FR';
$formatter = new IntlDateFormatter($locale, IntlDateFormatter::LONG, IntlDateFormatter::SHORT);

$formattedDate = $formatter->format($date);
echo $formattedDate; // Affiche la date formatée selon les conventions françaises.
*/

?>
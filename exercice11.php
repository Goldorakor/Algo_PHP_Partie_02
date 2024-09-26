<h1>Exercice 11</h1>

<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d'une
chaîne de caractères représentant une date.</p>

<p><b>Exemple :</b><br>
formaterDateFr("2018-02-23");</p>

<h2>Résultats :</h2>


<?php

// aller voir la "class" intlDateFormatter

$date2 = new DateTime("2018-02-23"); // $date2 est un objet (provenant de la classe DateTime) et DateTime est une classe. (plein de fonctions existantes, appelées méthodes)
$now = new DateTime(); // $now est un autre objet provenant de la classe DateTime - ()vide => date actuelle

var_dump($now);
var_dump($now->format("d.m.Y"));

$fmt = new IntlDateFormatter(
    'fr_FR',
    IntlDateFormatter::FULL,
    IntlDateFormatter::NONE,
    'Europe/Paris',
    IntlDateFormatter::GREGORIAN
); // $fmt est un objet provenant de la classe IntlDateFormatter - new pour indiquer la création de l'objet.

echo $fmt->format($date2)."<br>"; // -> sert à appeler une fonction quand on travaille "en objet" . $date2 est l'argument de la fonction "format" que j'appelle (pour l'objet $fmt).

echo $fmt->format($now)."<br>";
echo $fmt->format($date2)."<br>";
echo $fmt->format($now)."<br>";

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

function formaterDateFr( string $date) : object {
    $date2 = new DateTime("2018-02-23");
    $fmt = new IntlDateFormatter(
        'fr_FR',
        IntlDateFormatter::FULL,
        IntlDateFormatter::NONE,
        'Europe/Paris',
        IntlDateFormatter::GREGORIAN
    );
    $fmt->format($date2);
    return $fmt;
}

echo formaterDateFr("2018-02-23")."<br>";
echo formaterDateFr("2015-06-23")."<br>";
echo formaterDateFr("2006-09-10")."<br>";

?>
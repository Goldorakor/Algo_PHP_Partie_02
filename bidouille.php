<h1>bidouille</h1>

<div>
    <label for="user_email">Email</label><br>
    <input type="email" name="email" id="user_email">
</div>

<div>
    <label for="Texte">Blabla</label><br>
    <input type="email" name="email" id="Texte">
</div>
<br>


<label for="pet-select">Choose a pet:</label>

<select name="pets" id="pet-select">
  <option value="">--Please choose an option--</option>
  <option value="dog">Dog</option>
  <option value="cat">Cat</option>
  <option value="hamster">Hamster</option>
  <option value="parrot">Parrot</option>
  <option value="spider">Spider</option>
  <option value="goldfish">Goldfish</option>
</select>
<br>
<?php

// boucle for
for ($i = 1; $i <= 10; $i++) {
    echo $i." ";
}

echo "<br>la valeur finale de i est de $i<br>"; // en sortie de boucle, la variable vaut 11 (et non 10)

// boucle while
$i = 1;
while ($i <= 10) {
    echo $i." ";
    $i++;
}


// boucle foreach


?>
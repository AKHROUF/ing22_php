<?php

require_once("params.php");

$conn = mysqli_connect(SERVEUR, ADMIN, PASS, BDD, PORT);

$resultat = mysqli_query($conn, "SELECT * FROM etudiant");

while ($enreg = mysqli_fetch_array($resultat)) {
    echo "<li>" . $enreg[0] . " - " . $enreg['nom'] . "</li>";
}
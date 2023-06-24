<?php

use function PHPSTORM_META\type;

  if ( $_SERVER['REQUEST_METHOD'] != "POST") { // empty
       //echo "<meta http-equiv='refresh' content='0;url=index.html'>";
       header("Location:./index.html", true, 303);
       die("Vous devez passer par le formulaire");
     }

  $nom = $_POST["nom"] ?? "";
  $email = $_COOKIE["email"] ?? "";
  $pass = $_GET["pass"] ?? "";
  $age = $_POST["age"] ?? "age";
  if(gettype($age) != "integer" & $age < 18) {
    http_response_code(400);
    die("Invalid age");
  }

  $genre = $_SESSION["genre"] ?? 0;  
  echo "NOM : <b>$nom</b><br/>";
  echo "EMAIL : <b>$email</b><br/>";
  echo "MOT DE PASSE : <b>$pass</b><br/>";
  echo "GENRE : <b>$genre</b><br/>";
  echo "AGE : <b>$age</b><br/>";

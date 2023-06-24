<?php
  #if ( $_SERVER['REQUEST_METHOD'] != "POST")
  if ( ! isset($_POST['valider'])) // empty
     die("Vous devez passer par le formulaire");

     foreach($_POST as $indice => $valeur)
          ;

  $nom = $_POST["nom"] ?? "";
  $email = $_POST["email"] ?? "";
  $pass = $_POST["pass"] ?? "";
  $lang = $_POST["lang"] ?? [];
  $genre = $_POST["genre"] ?? 1;
  $marie = $_POST["marie"] ?? 2;
  $wilaya = $_POST["wilaya"] ?? "";
  echo "NOM : <b>$nom</b><br/>";
  echo "EMAIL : <b>$email</b><br/>";
  echo "MOT DE PASSE : <b>$pass</b><br/>";
  //var_dump($lang);
  echo "LANGAGES : <b>";
  foreach($lang as $val)     
         switch($val){
            case 1 : echo "PHP"; break;
            case 2 : echo "JS/ES"; break;
            case 3 : echo "HTML";
         }
  echo"</b><br/>";
  echo "GENRE : <b>";
  if ($genre == 1)
     echo "HOMME";
  else echo "FEMME";
  echo "</b><br/>";
  echo "MARIE ? : <b>". ($marie == 1)?"OUI":"NON"   ."</b><br/>";
  
  $tab = ["", "ADRAR", "CHLEF", "LAGHOUAT", "OUM BOUAGHI", "BATNA", "BEJAIA"];
  $w = $tab[$wilaya];
  echo "WILAYA : <b>$w</b><br/>";
  
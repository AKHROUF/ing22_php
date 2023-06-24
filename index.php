<?php
  #if ( $_SERVER['REQUEST_METHOD'] != "POST")
  if ( ! isset($_POST['valider'])) // empty
     {
       echo "<meta http-equiv='refresh' content='0;url=index.html'>";
       die("Vous devez passer par le formulaire");
     }

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
  
  require_once("params.php");
  $w = WILAYAS[$wilaya];
  echo "WILAYA : <b>$w</b><br/>";
?>
<form method="post" 
      action="page2.php?pass=<?php echo $pass; ?>" >
   <?php 
      setcookie("email", $email); 

      // dans php.ini modifier : session.auto_start=1
      $_SESSION["genre"] = $genre;
   ?>
   <input name="nom" type="hidden" 
          value="<?php echo $nom; ?>" >
   AGE : <input type="number" name="age" >
   <input type="submit" value="OK" >
</form>

<?php echo "....."; 
<form action="#" method="post" >
    NOM <input name="NOM" ><br/>
    PRENOM <input name="PRENOM" ><br/>
    NE(E) LE <input type="date" name="DATE" ></br>
    <input type="submit" name="AJOUTER" value="AJOUTER" >
</form>
<?php
if (isset($_POST['AJOUTER'])){
    require_once("params.php");
    $conn = mysqli_connect(SERVEUR, ADMIN, PASS, BDD, PORT);

    /*
    $nom = mysqli_real_escape_string($conn, $_POST['NOM']);
    $prenom = mysqli_real_escape_string($conn, $_POST['PRENOM']);
    $date = mysqli_real_escape_string($conn, $_POST['DATE']);

    $resultat = mysqli_query($conn, "insert into etudiant values (null, 
                    '$nom','$prenom','$date')");

    if ($resultat)
        echo "Etudiant créé avec succès (id attribué est : " . 
                mysqli_insert_id($conn) . ")";
    */
    $req = mysqli_prepare($conn, "insert into etudiant values (null, ?, ?, ?);");
    mysqli_stmt_bind_param($req, "sss", $_POST["NOM"],$_POST["PRENOM"],$_POST["DATE"]);
    // s : string ; b : blob ; d :double ; i : integer
    if (mysqli_stmt_execute($req))
        echo "Etudiant créé avec succès (id attribué est : " . 
                mysqli_insert_id($conn) . ")";
    

}
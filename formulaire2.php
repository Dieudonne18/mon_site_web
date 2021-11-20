<?php
// header("Location:form-merci.html");

$serveur = "localhost";
$dbname = "bdotablier2";
$user = "root";
$pass = "root";
// test 

//voir si les données passe dans le tableau
// print_r($_POST);

$NomRecette = $_POST["NomRecette"];
$biographie = $_POST["biographie"];
$difficulte = $_POST["difficulte"];
$cout = $_POST["cout"];
$pays = $_POST["pays"];
$temps = $_POST["temps"];
$NBPesonne = $_POST["NBPesonne"];
$etape = $_POST["etape"];
$conseil = $_POST["conseil"];
$Message = $_POST["Message"];


try {
    //On se connecte à la BDD
    $connect = new PDO("mysql:host=$serveur;dbname=$dbname", $user, $pass);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    //On insère les données reçues
    $sth = $connect->prepare("
            INSERT INTO recettes(NomRecette, biographie, difficulte, cout, pays,temps, NBPesronne, etape, conseil, Message)
            VALUES(:NomRecette, :biographie, :difficulte, :cout, :pays, :temps, :NBPesronne, :etape, :conseil, :Message)");
    $sth->bindParam(':NomRecette', $NomRecette);
    $sth->bindParam(':biographie', $biographie);
    $sth->bindParam(':difficulte', $difficulte);
    $sth->bindParam(':cout', $cout);
    $sth->bindParam(':pays', $pays);
    $sth->bindParam(':temps', $temps);
    $sth->bindParam(':NBPesronne', $NBPesronne);
    $sth->bindParam(':etape', $etape);
    $sth->bindParam(':conseil', $conseil);
    $sth->bindParam(':Message', $Message);


    $sth->execute();

    //On renvoie l'utilisateur vers la page de remerciement
    header("Location:form-merci.html");
} catch (PDOException $e) {
    echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
}

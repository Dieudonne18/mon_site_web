<?php
// header("Location:form-merci.html");

$serveur = "localhost";
$dbname = "bdotablier2";
$user = "root";
$pass = "root";
// test 

//voir si les données passe dans le tableau
// echo "<pre>";
// print_r($_POST);
// print_r($_FILES);
// echo "</pre>";

$NomRecette = $_POST["NomRecette"];
$biographie = $_POST["biographie"];
// $photo = $_POST["photo"];
$photo = $_FILES["photo"]["name"];
echo "Photo=$photo";
$difficulte = $_POST["difficulte"];
$cout = $_POST["cout"];
$pays = $_POST["pays"];
$temps = $_POST["temps"];
$NBPersonne = $_POST["NBPersonne"];
$etape = $_POST["etape1"];
$etape = $_POST["etape2"];
$etape = $_POST["etape3"];
$etape = $_POST["etape4"];
$etape = $_POST["etape5"];
$etape = $_POST["etape6"];
$etape = $_POST["etape7"];
$etape = $_POST["etape8"];
$conseil = $_POST["conseil"];
$Message = $_POST["Message"];


try {
    //On se connecte à la BDD
    $connect = new PDO("mysql:host=$serveur;dbname=$dbname", $user, $pass);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    //On insère les données ds la bd
    $sth = $connect->prepare("
            INSERT INTO recettes(NomRecette, biographie, photo, difficulte, cout, pays, temps, NBPersonne, etape1, etape2, etape3, etape4, etape5, etape6, etape7, etape8, conseil, Message)
            VALUES(:NomRecette, :biographie, :photo, :difficulte, :cout, :pays, :temps, :NBPersonne, :etape1, :etape2, :etape3, :etape4, :etape5, :etape6, etape7, :etape8, :conseil, :Message)");
    $sth->bindParam(':NomRecette', $NomRecette);
    $sth->bindParam(':biographie', $biographie);
    $sth->bindParam(':photo', $photo);
    $sth->bindParam(':difficulte', $difficulte);
    $sth->bindParam(':cout', $cout);
    $sth->bindParam(':pays', $pays);
    $sth->bindParam(':temps', $temps);
    $sth->bindParam(':NBPersonne', $NBPersonne);
    $sth->bindParam(':etape1', $etape1);
    $sth->bindParam(':etape2', $etape2);
    $sth->bindParam(':etape3', $etape3);
    $sth->bindParam(':etape4', $etape4);
    $sth->bindParam(':etape5', $etape5);
    $sth->bindParam(':etape6', $etape6);
    $sth->bindParam(':etape7', $etape7);
    $sth->bindParam(':etape8', $etape8);
    $sth->bindParam(':conseil', $conseil);
    $sth->bindParam(':Message', $Message);


    $sth->execute();

    //On renvoie l'utilisateur vers la page de remerciement
    header("Location:form-merci.html");
} catch (PDOException $e) {
    echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
}

// require('interface.php');

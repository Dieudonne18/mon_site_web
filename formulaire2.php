<?php
// header("Location:form-merci.html");

$servname = "localhost";
$dbname = "bdotablier2";
$username = "root";
$password = "root";
// test 

//voir si les données passe dans le tableau
echo "<pre>";
print_r($_POST);
print_r($_FILES);
echo "</pre>";

$NomRecette = $_POST["NomRecette"];
$biographie = $_POST["biographie"];
// $photo = $_POST["photo"];
$photo = $_FILES["photo"]["name"];
// $photo = $_POST['photo'];
$difficulte = $_POST["difficulte"];
$cout = $_POST["cout"];
$pays = $_POST["pays"];
$temps = $_POST["temps"];
$temps1 = $_POST["temps1"];
$temps2 = $_POST["temps2"];
$temps3 = $_POST["temps3"];
$temps4 = $_POST["temps4"];
$temps5 = $_POST["temps5"];
$NBPersonne = $_POST["NBPersonne"];
$etape1 = $_POST["etape1"];
$etape2 = $_POST["etape2"];
$etape3 = $_POST["etape3"];
$etape4 = $_POST["etape4"];
$etape5 = $_POST["etape5"];
$etape6 = $_POST["etape6"];
$etape7 = $_POST["etape7"];
$etape8 = $_POST["etape8"];
$conseil = $_POST["conseil"];
$message = $_POST["message"];


try {
    //On se connecte à la BDD
    $dbco = new PDO("mysql:host=$servname;dbname=$dbname", 'root', 'root');
    $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sth = $dbco->prepare(" INSERT INTO recettes(NomRecette, biographie, photo, difficulte, cout, pays, temps, temps1, temps2, temps3, temps4, temps5, NBPersonne, etape1, etape2, etape3, etape4, etape5, etape6, etape7, etape8, conseil, message)
    VALUES(:NomRecette, :biographie, :photo, :difficulte, :cout, :pays, :temps, :temps1, :temps2, :temps3, :temps4, :temps5, :NBPersonne, :etape1, :etape2, :etape3, :etape4, :etape5, :etape6, etape7, :etape8, :conseil, :message)");



    //On insère les données ds la bd

    $sth->bindParam(':NomRecette', $NomRecette);
    $sth->bindParam(':biographie', $biographie);
    $sth->bindParam(':photo', $photo);
    $sth->bindParam(':difficulte', $difficulte);
    $sth->bindParam(':cout', $cout);
    $sth->bindParam(':pays', $pays);
    $sth->bindParam(':temps', $temps);
    $sth->bindParam(':temps1', $temps1);
    $sth->bindParam(':temps2', $temps2);
    $sth->bindParam(':temps3', $temps3);
    $sth->bindParam(':temps4', $temps4);
    $sth->bindParam(':temps5', $temps5);
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
    $sth->bindParam(':message', $message);


    $sth->execute();
    echo 'etape1 :' . $_POST["$etape1"];
    //On renvoie l'utilisateur vers la page de remerciement
    header("Location:form-merci.html");
} catch (PDOException $e) {
    echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
}

// require('interface.php');

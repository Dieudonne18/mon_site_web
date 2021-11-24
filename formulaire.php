
<?php
// print_r($_POST);

//Etape Nom
if (isset($_POST['NomRecette'])) //On regarde si les variables existent, sinon la condition ne sera pas validée
{
    echo htmlentities($_POST['NomRecette']) . '<br>';
}
// Etape biographie
if (isset($_POST['biographie'])) {
    echo htmlentities($_POST['biographie']) . '<br>';
}
//etape photo
if (isset($_FILES['photo'])) {
    echo htmlentities($_FILES['photo']) . '<br>';
}
// Etape difficulte
if (isset($_POST['difficulte'])) {
    echo htmlentities($_POST['difficulte']) . '<br>';
}
// Etape cout
if (isset($_POST['cout'])) {
    echo htmlentities($_POST['cout']) . '<br>';
}
// Etape pays

if (isset($_POST['pays'])) {
    echo htmlentities($_POST['pays']) . '<br>';
}
// Etape temps
if (isset($_POST['temps'])) {
    echo htmlentities($_POST['temps']) . '<br>';
}
// Etape temps
if (isset($_POST['temps1'])) {
    echo htmlentities($_POST['temps1']) . '<br>';
}
// Etape temps
if (isset($_POST['temps2'])) {
    echo htmlentities($_POST['temps2']) . '<br>';
}
// Etape temps
if (isset($_POST['temps3'])) {
    echo htmlentities($_POST['temps3']) . '<br>';
}
// Etape temps
if (isset($_POST['temps4'])) {
    echo htmlentities($_POST['temps4']) . '<br>';
}
// Etape temps
if (isset($_POST['temps5'])) {
    echo htmlentities($_POST['temps5']) . '<br>';
}
// Etape NBPesronne
if (isset($_POST['NBPeronne'])) {
    echo htmlentities($_POST['NBPersonne']) . '<br>';
}
// Etape etape curson
if (isset($_POST['etape1'])) {
    echo htmlentities($_POST['etape1']) . '<br>';
}
if (isset($_POST['etape2'])) {
    echo htmlentities($_POST['etape2']) . '<br>';
}

if (isset($_POST['etape3'])) {
    echo htmlentities($_POST['etape3']) . '<br>';
}

if (isset($_POST['etape4'])) {
    echo htmlentities($_POST['etape4']) . '<br>';
}

if (isset($_POST['etape5'])) {
    echo htmlentities($_POST['etape5']) . '<br>';
}
if (isset($_POST['etape6'])) {
    echo htmlentities($_POST['etape6']) . '<br>';
}

if (isset($_POST['etape7'])) {
    echo htmlentities($_POST['etape7']) . '<br>';
}
if (isset($_POST['etape8'])) {
    echo htmlentities($_POST['etape8']) . '<br>';
}
// Etape conseil
if (isset($_POST['conseil'])) {
    echo htmlentities($_POST['conseil']) . '<br>';
}
// Etape comment
if (isset($_POST['message'])) {
    echo htmlentities($_POST['message']);
}
// fin isset


//
// Il ya des photos à télécharger vers le serveur
//
if (isset($_FILES) && isset($id_inserted)) {
    /* Enregistrer le fichier téléchargé dans le système de fichiers local */
    // On renomme le fichier téléchargé sous la forme "IDxxx-nom_du_fichier" où xxx = n° de l'annonce ($id_inserted)
    // jeprint_r($_FILES) ;
    $list = $_FILES['photo'];
    $nbFiles = count($list['name']);
    for ($i = 0; $i < $nbFiles; $i++) {
        $filename = "Id" . sprintf("%03d", $id_inserted) . "-" . basename($list['name'][$i]);
        if (move_uploaded_file($list['tmp_name'][$i], './upload/' . $filename)) {
            echo "<strong  style='color: green;'> Succès du Téléchargement, renommé en $filename </strong>";
        } else {
            echo "<strong  style='color: red;'> Échec </strong>";
        }
        echo "<br>";
    }
}


?>
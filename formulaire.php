
<?php
require("header.html"); ?>
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

if (isset($_POST['photo'])) {
    echo htmlentities($_POST['photo']) . '<br>';
}
// Etape difficulte
if (isset($_POST['difficulte'])) {
    echo htmlentities($_POST['difficulte'])  . '<br>';
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
// Etape Message
if (isset($_POST['Message'])) {
    echo htmlentities($_POST['Message']);
}
?>
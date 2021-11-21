
<?php
require("header.html"); ?>
<?php

//Etape Nom
if (isset($_POST['NomRecette'])) //On regarde si les variables existent, sinon la condition ne sera pas validée
{
    echo htmlentities($_POST['NomRecette']) . '<br>';
}
// Etape biographie
if (isset($_POST['biographie'])) {
    echo htmlentities($_POST['biographie']) . '<br>';
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
if (isset($_POST['NBPesronne'])) {
    echo htmlentities($_POST['NBPesronne']) . '<br>';
}
// Etape etape
if (isset($_POST['etape'])) {
    echo htmlentities($_POST['etape']) . '<br>';
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
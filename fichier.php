<?php
if (!empty($_FILES))
    $filename = $_FILES['photo']['name'];

    if (!empty($_POST)) {
   
        if (!isset($_POST['NomRecette']) || strlen($_POST['NomRecette']) < 3 ||  strlen($_POST['NomRecette']) > 15) {
            $contien .= "<div class=\" alert-dispo\">Le nom de la recette doit avoir entre 3 et 15 caractères !</div>";
        }  // fin NomRecette

        if (!isset($_POST['biographie']) || strlen($_POST['biographie']) < 255) {
            $contien .= "<div class=\"alert alert-dispo\">Veuillez décrire la biographie</div>";
        } // fin biographie
        if (!isset($_POST['difficulte']) || strlen($_POST['difficulte']) < 3 ||  strlen($_POST['NomRecette']) > 15) {
            $contien .= "<div class=\" alert-dispo\">Le nom de la recette doit avoir entre 3 et 15 caractères !</div>";
        }  // fin difficulte

        if (!isset($_POST['cout']) || strlen($_POST['cout']) < 255) {
            $contien .= "<div class=\"alert alert-dispo\">Veuillez décrire la biographie</div>";
        } // fin cout
        if (!isset($_POST['pays']) || strlen($_POST['pays']) < 3 ||  strlen($_POST['NomRecette']) > 15) {
            $contien .= "<div class=\" alert-dispo\">Le nom de la recette doit avoir entre 3 et 15 caractères !</div>";
        }  // fin pays

        if (!isset($_POST['temps']) || strlen($_POST['temps']) < 255) {
            $contien .= "<div class=\"alert alert-dispo\">Veuillez décrire la biographie</div>";
        } // fin temps
        if (!isset($_POST['NBPesonne']) || strlen($_POST['NBPesonne']) < 3 ||  strlen($_POST['NomRecette']) > 15) {
            $contien .= "<div class=\" alert-dispo\">Le nom de la recette doit avoir entre 3 et 15 caractères !</div>";
        }  // fin NBPesonne

        if (!isset($_POST['etape']) || strlen($_POST['etape']) < 255) {
            $contien .= "<div class=\"alert alert-dispo\">Veuillez décrire la biographie</div>";
        } // fin etape
        if (!isset($_POST['conseil']) || strlen($_POST['conseil']) < 3 ||  strlen($_POST['NomRecette']) > 15) {
            $contien .= "<div class=\" alert-dispo\">Le nom de la recette doit avoir entre 3 et 15 caractères !</div>";
        }  // fin conseil

        if (!isset($_POST['Message']) || strlen($_POST['Message']) < 255) {
            $contien .= "<div class=\"alert alert-dispo\">Veuillez décrire la biographie</div>";
        } // fin Message

        if(empty($contenu)){
            $recettes = executeRequete(" SELECT * FROM recette WHERE NomRecette = NomRecette ", array(':NomRecette' => $_POST['NomRecette']));
            if($recettes->rowCount() > 0) 
            { 
                $contien .= '<div class= "alert alert-dispo text-center">fichier deja validé.choississez un autre</div>';
        }
        else{
            $succes = executeRequete(

            )
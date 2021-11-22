<?php
$target_path  =  "e:/";
$target_path  =  $target_path . $bdotablier2($_FILES['name']['photo']);

if (move_uploaded_file($_FILES['photo']['tmp_name'],  $target_path)) {
    echo "Fichier téléchargé avec succès !";
} else {
    echo "Désolé, le fichier n'a pas été téléchargé, veuillez réessayer!";
}

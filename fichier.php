    <div class="col-md-7 col-md-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                Liste images enregistrement
            </div>
            <div class="panel-body">
                <table class="table table-bodered">
                    <tr>
                        <th>id</th>
                        <th>NomRecette</th>
                        <th>biographie</th>
                        <th>photo</th>
                        <th>difficulte</th>
                        <th>cout</th>
                        <th>pays</th>
                        <th>temps</th>
                        <th>NBPesronne</th>
                        <th>etape</th>
                        <th>conseil</th>
                        <th>Message</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <?php
    /*Sélectionne toutes les valeurs dans la table users*/
    $query = mysqli_query($connect, "SELECT * FROM bdotablier2");

    while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {

        echo '<tr><td>' . $row["id"] . '</td>';
        echo '<td>' . $row["NomRecette"] . '</td>';
        echo '<td>' . $row["biographie"] . '</td>';
        echo '<td><img src="images/' . $row["photo"] . ' " /></td>';
        echo '<td>' . $row["difficulte"] . '</td>';
        echo '<td>' . $row["cout"] . '</td>';
        echo '<td>' . $row["pays"] . '</td>';
        echo '<td>' . $row["temps"] . '</td>';
        echo '<td>' . $row["NBPesronne"] . '</td>';
        echo '<td>' . $row["etape"] . '</td>';
        echo '<td>' . $row["conseil"] . '</td>';
        echo '<td>' . $row["Message"] . '</td>';

        // echo '<td> <a href="" class="btn btn-danger">Suprimer</a></td>';

        '</tr>';
    }


    // if(empty($contenu)){
    //     $recettes = executeRequete(" SELECT * FROM recettes WHERE NomRecette = NomRecette ", array(':NomRecette' => $_POST['NomRecette']));
    //     if($recettes->rowCount() > 0) 
    //     { 
    //         $contien .= '<div class= "alert alert-dispo text-center">fichier deja validé.choississez un autre</div>';
    // }
    // else{
    //     $succes = executeRequete(
    //         " INSERT INTO recettes(NomRecette, biographie, difficulte, cout, pays,temps, NBPesronne, etape, conseil, Message)
    //         VALUES(:NomRecette, :biographie, :difficulte, :cout, :pays, :temps, :NBPesronne, :etape, :conseil, :Message)");
    //         array(
    // ':NomRecette' => $_POST['NomRecette'],
    // ':biographie' => $_POST['biographie'],
    // ':difficulte' => $_POST['difficulte'],
    // ':cout' => $_POST['cout'],
    // ':pays' => $_POST['pays'],
    // ':temps' => $_POST['temps'],
    // ':NBPesronne' =>$_POST['NBPesronne'],
    // ':etape' => $_POST['etape'],
    // ':conseil' => $_POST['conseil'],
    // ':Message' => $_POST['Message'],
    // );

    //     if ($succes){
    //         $id_inserted = $bdotablier2 ->lastInsertId();
    //         $listFiles = "";
    //         foreach ($_FILES['photo']['name'] as $file)
    //         $listFiles .= $file . ", ";
    //         $listFiles .= $file . ", ";
    //         $contien .= "<div class='alert-succes text-center'>Votre fichier a bien été enregistrée avec le numéro <b>$id_inserted</b>, 
    //                 et les photos <b>$listFiles</b>   
    //                 <br><a href='#?id=$id_inserted'>cliquez ici pour voir votre image.</a></div>";
    //     } else {
    //         $contenu .= "<div class='alert-dispo'>Erreur lors de l\'enregistrement !</div>";
    //     }
    ?>
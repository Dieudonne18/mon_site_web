<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="paho pankoue">
    <title>projet o'tablier</title>
    <link rel="stylesheet" href="../formulaireOtablier2/css/style.css">
    <link rel="icon" href="./images/19.jpg" width:32px,height:32px>
    <link rel="shortcut icon" href="../images/12.jpg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


</head>
<!-- 
        <body>
            <STYle>
                #d1 {
                    background-color: #EECC4499;
                }

                d2 {
                    background-color: #44EEAA99;
                }

                button {
                    background-color: grey;
             }
            </STYle> -->


<!--  *****************ENTETE************** -->
<header>
    <h1>Déposez votre recette de cuisine</h1>
</header>

<!-- ************CONTAINER********** -->
<div class="container">

    <form action="formulaire.php" method="POST" id="formulaire" name="formulaire" novalidate enctype="multipart/form-data">
        <!-- etape nom de la recette -->
        <legend>TITRE DE LA RECETTE *:</legend>
        <div class=" mb-3">
            <label for="Nom"><span class="obligatoire"></span>&nbsp;&nbsp;&nbsp</label>
            <!-- minlength="2"maxlength="25" -->
            <input type="text" id="texte" name="NomRecette" required>
        </div>

        <!-- **************required=champs obligatoir************ -->
        <!-- etape nom de la biographie -->
        <legend>BIOGRAPHIE :</legend>
        <div class="mb-3">
            <textarea id="text" name="biographie" cols="30" placeholder="bio" rows="10" required></textarea>
        </div>

        <!--******************** etape Téléhargement image  *******************-->


        <legend>IMAGE:</legend>
        <div class="mb-3">
            <div class="image_recette">
                <h2>Formulaire ajout une image</h2>
                <label for="Photo">Ajouter une photo: </label>
                <br><br>
                <input type="file" name="photo" id="fichier" multiple value="photo">
            </div>
        </div>

        <!-- ********************ETAPE INFO********************* -->
        <legend>INFOS CLÉS</legend>
        <div class="mb-3">
            <label>Difficulté</label>
            <select class="form-select" name="difficulte" required>
                <!-- <option selected>Difficulté</option> -->
                <option value="Tres facile">Tres facile</option>
                <option value="Facile">Facile</option>
                <option value="moyenne">moyenne</option>
                <option value="difficile">difficile</option>
                <option value="tres difficile">tres difficile</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Cout</label>
            <select class="form-select" name="cout">
                <!-- <option selected>coût</option> -->
                <option value="bon-marche">Bon marché</option>
                <option value="Budget-moyen">Budget moyen</option>
                <option value="Assez-cher">Assez cher</option>
            </select>
        </div>
        <div class="mb-3">
            <label>pays d'origine</label>
            <select class="form-select" name="pays" required>
                <!-- <label for="title">Pays d'origine</label> -->
                <!-- <option selected>pays</option> -->
                <option value="Europe">Europe</option>
                <option value="Afrique">Afrique</option>
                <option value="canada">canada</option>
                <option value="asie">asie</option>
                <option value="oceanie">oceanie"</option>
            </select>
        </div>
        <!-- ********************ETAPE PREPARATION********************* -->
        <legend>TEMPS DE PREPARATION</legend>
        <div class="mb-3">
            <option selected>temps de preparation.</option>
            <label for="temps">Heure:</label>
            <input type="number" id="temps" name="temps" min="0" max="24">
            <label for="temps">minuite:</label>
            <input type="number" id="Minuite" name="temps1" min="0" max="60">
        </div>
        <div class="mb-3">
            <option selected>Temps de cuisson</option>
            <label for="temps">Heure:</label>
            <input type="number" id="temps" name="temps2" min="0" max="24">
            <label for="temps">minuite:</label>
            <input type="number" id="Minuite" name="temps3" min="0" max="60">
        </div>
        <!-- <div class="champ"> -->
        <div class="mb-3">
            <option selected>temps d'attente</option>
            <label for="temps">Heure:</label>
            <input type="number" id="temps" name="temps4" min="0" max="24">
            <label for="temps">minuite:</label>
            <input type="number" id="Minuite" name="temps5" min="0" max="60">
        </div>

        <!-- **************ETAPE INGREDIENTS************** -->
        <legend>PERSONNE</legend>
        <div class="mb-3">
            <h2>Nombre de personnes ou portions *</h2>
            <select class="form-select" aria-label="Default select example" name="NBPersonne">
                <option></option>
                <option selected>Personne</option>
                <option value="Piece">Piece</option>
                <option value="Portion">Portion</option>
                <option value="Biscuit">Biscuit</option>
                <!-- <input type="number" id="text" min="0" max="1000"> -->
            </select>
            <!-- <label for="temps">minuite:</label> -->
        </div>
        <div class="mb-3">
            <div class=etap>
                <!-- ****************ETAPE CUISSON***************** -->
                <section>
                    <legend>PRÉPARATION</legend>
                    <p>Si votre recette nécessite une cuisson au four,
                        veuillez indiquer la température de cuisson.</p>
                    <hr>
                    <div class="mb-3" id="but">
                        <button id="togg1">Etapes1 !</button>
                        <button id="togg2">Etape2 !</button>
                    </div>
            </div>
            <div class="mb-3" id="d1">
                <!-- <label for="exampleFormControlTextarea1" class="form-label">Etapes *</label> -->
                <p><textarea class="form-control" value="etp1" name="etape1" id="Txt1" placeholder="etape1" rows="3"></textarea>
                </p>
            </div>
            <div class="mb-3" id="d2">
                <p><textarea class="form-control" value="etp2" name="etape2" id="Txt2" placeholder="etape2" rows="3"></textarea>
                </p>
            </div>
            <div class="mb-3">
                <p><textarea class="form-control" value="etp3" name="etape3" id="Txt3" placeholder="etape3" rows="3"></textarea>
                </p>
            </div>
            <div class="mb-3">
                <p><textarea class="form-control" value="etp4" name="etape4" id="Txt4" placeholder="etape4" rows="3"></textarea>
                </p>
            </div>
            <div class="mb-3">
                <p><textarea class="form-control" value="etp5" name="etape5" id="Txt5" placeholder="etape5" rows="3"></textarea>
                </p>
            </div>
            <div class="mb-3">
                <p><textarea class="form-control" value="etp6" name="etape6" id="Txt6" placeholder="etape6" rows="3"></textarea>
                </p>
            </div>
            <div class="mb-3">
                <p><textarea class="form-control" value="etp7" name="etape7" id="Txt7" placeholder="etape7" rows="3"></textarea>
                </p>
            </div>
            <div class="mb-3">
                <p><textarea class="form-control" value="etp8" name="etape8" id="Txt8" placeholder="etape8" rows="3"></textarea>
                </p>
            </div>
            </section>

            <!-- **********************ETAPE CONSEILS ET MESSAGE**************** -->

            <legend>CONSEIL</legend>
            <div class="mb-3">
                <!-- <h2>Conseils</h2> -->
                <textarea name="conseil" id="" cols="30" rows="10"></textarea>
            </div>
            <legend>MESSAGE</legend>
            <div class="mb-3">
                <!-- <h2>Message pour le modérateur</h2> -->
                <textarea name="message" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" id="btn" type="submit" value="ajouter" name="submit">Déposer une recette</button>
            </div>
            <!-- </div> -->

        </div>
</div>
</form>
<script src="./form.js" async></script>

</body>

</html>
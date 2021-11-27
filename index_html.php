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
    <script src="./form.js" async></script>
    <style>
        figure>img {
            /* width: 100%; */
            vertical-align: bottom;
        }

        figure {
            width: 300px;
            position: relative;
        }

        figcaption {
            /* position: absolute; */
            background-color: rgb(50, 50, 50, 0.8);
            color: black;
            /* bottom: 0; */
            /* text-align: center; */
            /* width: 10%; */
        }

        figcaption:hover {
            background-color: cadetblue;
            transform: scale(0.5);
        }

        img:hover {
            height: 200px;
            transform: scale(0.5);
        }

        .etap {
            text-align: left;
            color: black;
            font-size: 26px;
        }

        .img {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        /* .figcaption {
            color: grey;
            font-size: 26px;
            flex: 1;
        } */

        /* .img {
            flex: 4;
        } */
    </style>
</head>

<body>
    <!--  *****************ENTETE************** -->
    <header>
        <h1>Déposez votre recette de cuisine</h1>
    </header>

    <!-- ************CONTAINER********** -->
    <div class="container">

        <form action="formulaire.php" method="POST" id="myform" name="formulaire" novalidate enctype="multipart/form-data">
            <!-- etape nom de la recette -->
            <legend>TITRE DE LA RECETTE *:</legend>
            <div class=" mb-3">
                <label for="users"><span class="obligatoire"></span>&nbsp;&nbsp;&nbsp</label>
                <!-- minlength="2"maxlength="25" -->
                <input type="text" id="users" name="NomRecette">
            </div>
            <span id="error"></span>
            <hr>
            <!-- **************required=champs obligatoir************ -->
            <!-- etape nom de la biographie -->
            <legend>BIOGRAPHIE :</legend>
            <div class="mb-3">
                <textarea id="text" name="biographie" cols="115" placeholder="bio" rows="10"></textarea>
            </div>
            <span id="error1"></span>
            <hr>
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
            <br>
            <hr>
            <!-- ********************ETAPE INFO********************* -->
            <legend>INFOS CLÉS</legend>
            <div class="mb-3">
                <div class="dificul" style="text-align:left">Difficulté</div>
                <!-- <select class="form-select" name="difficulte"> -->
                <!-- <option selected>Difficulté</option> -->
                <input name="difficulte" type="radio">Tres facile<br>
                <input name="difficulte" type="radio">Facile<br>
                <input name="difficulte" type="radio">moyenne<br>
                <input name="difficulte" type="radio">difficile<br>
                <input name="difficulte" type="radio">tres difficile<br>
                <!-- </select> -->
            </div>
            <hr>

            <div class="mb-3">
                <div class="cou" style="text-align:left">Cout</div>
                <!-- <select class="form-select" name="cout"> -->
                <!-- <option selected>coût</option> -->
                <input name="cout" type="radio">Bon marché<br>
                <input name="cout" type="radio">Budget moyen<br>
                <input name="cout" type="radio">Assez cher<br>
            </div>
            <!-- </div> -->
            <hr>
            <div class="mb-3">
                <label>pays d'origine</label>
                <select class="form-select" name="pays">
                    <!-- <label for="title">Pays d'origine</label> -->
                    <!-- <option selected>pays</option> -->
                    <option value="0">Europe</option>
                    <option value="1">Afrique</option>
                    <option value="2">canada</option>
                    <option value="3">asie</option>
                    <option value="4">oceanie"</option>
                </select>
                <span id="error2"></span>
            </div>

            <hr>

            <!-- ********************ETAPE PREPARATION********************* -->
            <legend>TEMPS DE PREPARATION</legend>
            <div class="mb-3">
                <option selected>temps de preparation.</option>
                <br>
                <label for="temps">Heure:</label>
                <input type="number" id="temps" name="temps" min="0" max="24">
                <label for="temps">minuite:</label>
                <input type="number" id="Minuite" name="temps1" min="0" max="60">
            </div>
            <hr>

            <div class="mb-3">
                <option selected>Temps de cuisson</option>
                <br>

                <label for="temps">Heure:</label>
                <input type="number" id="temps" name="temps2" min="0" max="24">
                <label for="temps">minuite:</label>
                <input type="number" id="Minuite" name="temps3" min="0" max="60">
            </div>
            <hr>

            <!-- <div class="champ"> -->
            <div class="mb-3">
                <option selected>temps d'attente</option>
                <br>

                <label for="temps">Heure:</label>
                <input type="number" id="temps" name="temps4" min="0" max="24">
                <label for="temps">minuite:</label>
                <input type="number" id="Minuite" name="temps5" min="0" max="60">
            </div>
            <hr>

            <!-- **************ETAPE INGREDIENTS************** -->
            <legend>PERSONNE</legend>
            <!-- <div class="mb-3"> -->
            <h2>Nombre de personnes ou portions *</h2>
            <div class="perso">
                <div class="lapin">
                    <label for="temps"></label>
                    <input type="number" id="num" name="NBPersonne" min="0" max="24">
                </div>
                <div class="selec">
                    <select class="form-select" aria-label="Default select example" name="NBPersonne">
                        <option selected>Personne</option>
                        <option value="Piece">Piece</option>
                        <option value="Portion">Portion</option>
                        <option value="Biscuit">Biscuit</option>
                    </select>
                    <!-- <input type="number" id="text" min="0" max="1000"> -->
                </div>
                <!-- </div> -->
                <!-- <label for="temps">minuite:</label> -->
            </div>
            <hr>


            <script>
                // appelez le document.createElement("button")*************
                //    *********************et affectez l'élément renvoyé à une variable nommée btn.
                let btn = document.createElement("button");
                // affectez la "Click Me"chaîne à la btn.innerHTMLpropriété
                btn.innerHTML = "click Me";
                btn.addEventList("click", function() {
                    alert("etapes1");
                });
                // pour ajouter l'élément de bouton à la <body>balise
                doccument.body.appendChild(btn);
            </script>
            <div class="mb-3">
                <div class=etap>
                    <!-- ****************ETAPE CUISSON***************** -->
                    <section>
                        <legend>Étapes Prèparation</legend>
                        <p>Si votre recette nécessite une cuisson au four,
                            veuillez indiquer la température de cuisson.</p>
                        <!-- <div class="mb-3" id="but">
                            <button id="togg1">Etapes1 !</button>
                            <button id="togg2">Etape2 !</button>
                        </div> -->
                </div>
                <!-- <legend>Etapes</legend> -->
                <br>
                <div class="etap" name="etape">
                    <textarea name="etape" type="text" id="texte" cols="50" rows="5"></textarea>
                    <!-- <input type="file" name="photo"> -->
                    </p><button id="btn_create">Création Etape</button>
                    <p>

                    <figure>
                        <img name="image" id="img" src="../formulaireOtablier2/images/12.jpg" style=" border-color: #849460; width:250px;border-style:solid; border-width: 5px; border-radius:10px; margin:auto; text-align:left;">
                        <figcaption>Image repas du jour</figcaption>
                    </figure>


                </div>


                <script>
                    var btn = document.createElement("BUTTON"); // Créer un élément <button>
                    var t = document.createTextNode("CLICK ME"); // Créer un noeud textuel
                    btn.appendChild(t); // Ajouter le texte au bouton
                    document.body.appendChild(btn); // Ajoute la balise <button> à la balise <body>
                </script>
                <div class="ima">
                    <!-- <a href="javascript:;" onMouseOver="changeimage('5.jpg')" onMouseOut="changeimage('../ImagesRecette/5.jpg')">Image</a> -->
                    <!-- <div class="photo" > -->
                    <!-- <img style="height:100px ;width:100px" id="image" src="../formulaireOtablier2/ImagesRecette/5.jpg" alt=""> -->
                    <!-- </div> -->
                </div>
                <!-- </div> -->
            </div>
            <div class="mb-3" id="d1">
                <!-- <label for="exampleFormControlTextarea1" class="form-label">Etapes *</label> -->
                <!-- <p><textarea class="form-control" value="etp1" name="etape1" id="Txt1" placeholder="etape1" rows="3"></textarea>
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
                    </p> -->
            </div>
            </section>

            <!-- **********************ETAPE CONSEILS ET MESSAGE**************** -->
            <hr>

            <legend>CONSEIL</legend>
            <div class="mb-3">
                <!-- <h2>Conseils</h2> -->
                <textarea name="conseil" id="" cols="30" rows="10"></textarea>
            </div>
            <hr>

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


    <footer>

    </footer>
</body>

</html>
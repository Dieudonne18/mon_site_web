<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="paho pankoue">
    <title>projet o'tablier</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="./images/5.jpg" width:32px,height:32px>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="./form.js" async></script>

</head>

<body>

    <!--  *****************ENTETE************** -->
    <header>
        <h1 class="animated-text">Déposez votre recette de cuisine</h1>
    </header>
    <section>
        <!-- ************CONTAINER********** -->
        <div class="container">
            <form action="formulaire.php" method="POST" class="formul" id="myform" name="formulaire" novalidate enctype="multipart/form-data">
                <!-- etape nom de la recette -->
                <article>
                    <legend>TITRE DE LA RECETTE *:</legend>
                    <div class=" mb-3">
                        <label for="users"><span class="obligatoire"></span>&nbsp;&nbsp;&nbsp</label>
                        <!-- minlength="2"maxlength="25" -->
                        <input type="text" id="users" name="NomRecette">
                    </div>
                    <span id="error"></span>
                </article>
                <hr>
                <article>
                    <!-- **************required=champs obligatoir************ -->
                    <!-- etape nom de la biographie -->
                    <legend>BIOGRAPHIE :</legend>
                    <div class="mb-3">
                        <textarea id="text" name="biographie" cols="115" placeholder="bio" rows="10"></textarea>
                    </div>
                    <span id="error1"></span>
                </article>
                <hr>
                <article>
                    <!--******************** etape Téléhargement image  *******************-->
                    <legend>IMAGE:</legend>
                    <div class="mb-3">
                        <div class="image_recette">
                            <h2> <em>Ajout image</em></h2>
                            <label for="Photo">Ajouter une photo: </label>
                            <br><br>
                            <input type="file" name="photo" id="fichier" multiple value="photo">
                        </div>
                    </div>
                    <span id="error2"></span>
                    <br>
                </article>
                <hr>
                <article>
                    <!-- ********************ETAPE INFO ********************* -->
                    <legend>INFOS CLÉS</legend>
                    <div class="mb-3">
                        <div class="dificul" style="text-align:left"><em>Difficulté</em></div>
                        <input name="difficulte" type="radio">Tres facile<br>
                        <input name="difficulte" type="radio">Facile<br>
                        <input name="difficulte" type="radio">moyenne<br>
                        <input name="difficulte" type="radio">difficile<br>
                        <input name="difficulte" type="radio">tres difficile<br>
                    </div>
                </article>
                <hr>
                <!-- *******************cout************* -->
                <div class="mb-3">
                    <div class="cou" style="text-align:left"><em>Cout</em></div>
                    <input name="cout" type="radio">Bon marché<br>
                    <input name="cout" type="radio">Budget moyen<br>
                    <input name="cout" type="radio">Assez cher<br>
                </div>
                <hr>
                <!-- **********************pays d'origine*********** -->
                <div class="mb-3">
                    <label for="pays"><em>Pays d'origine : </em></label>
                    <select id="Pays" name="pays">
                        <!-- <label for="title">Pays d'origine</label> -->
                        <!-- <option selected>pays</option> -->
                        <option value="Europe">Europe</option>
                        <option value="Afrique">Afrique</option>
                        <option value="canada">canada</option>
                        <option value="asie">asie</option>
                        <option value="oceanie">oceanie</option>
                    </select>
                </div>
                <span id="error3"></span>
                <br>
                <hr>
                <article>
                    <!-- ********************ETAPE PREPARATION********************* -->
                    <legend>TEMPS DE PREPARATION</legend>
                    <div class="mb-3">
                        <option selected>temps de preparation.</option>
                        <br>
                        <label for="temps"><em>Heure et Minuite :</em> </label>
                        <input type="time" id="temps" name="temps" min="0" max="24">
                    </div>
                </article>
                <hr>
                <article>
                    <div class="mb-3">
                        <option selected>Temps de cuisson</option>
                        <br>
                        <label for="temps"><em>Heure et Minuite :</em></label>
                        <input type="time" id="temps" name="temps2" min="0" max="24">
                    </div>
                </article>
                <hr>
                <article>
                    <!-- <div class="champ"> -->
                    <div class="mb-3">
                        <option selected>temps d'attente</option>
                        <br>
                        <label for="temps"><em>Heure et Minuite :</em> </label>
                        <input type="time" id="temps" name="temps4" min="0" max="24">
                    </div>
                </article>
                <hr>
                <article>
                    <!-- **************ETAPE INGREDIENTS************** -->
                    <legend>PERSONNE</legend>
                    <h2><em>Nombre de personnes ou portions </em></h2>
                    <div class="perso">
                        <div class="lapin">
                            <label for="number"></label>
                            <input type="number" id="num" name="NBPersonne" min="0" max="24">
                            <select class="personne" name="NBPersonne">
                                <option>---</option>
                                <!-- <option selected>Personne</option> -->
                                <option value="Piece">Piece</option>
                                <option value="Portion">Portion</option>
                                <option value="Biscuit">Biscuit</option>
                            </select>
                        </div>
                    </div>
                </article>
                <hr>
                <article>
                    <div class="mb-3">
                        <div class=etapes>
                            <!-- ****************ETAPE CUISSON***************** -->
                            <legend>Étapes Prèparation</legend>
                            <h2><em>Si votre recette nécessite une cuisson au four,
                                    veuillez indiquer la température de cuisson.</em></h2>
                        </div>
                        <br>
                        <div class="etap" name="etape">
                            <textarea name="etape" type="text" id="texte" cols="50" rows="5"></textarea>
                            <input type="text" name="photo">
                            <!-- <boutton>Création Etape</boutton> -->
                            <figure>
                                <img name="image" id="img" src="../formulaireOtablier2/images/12.jpg">
                                <figcaption>Image repas du jour</figcaption>
                            </figure>
                        </div>
                        <!-- ***********etape creation des etapes**************** -->
                        <div class="bout">
                            <br><em> Les etapes de cuisson :</em>
                            <input id="Bouton" name='etape' placeholder="Press me !">
                            <!-- <div id="tonDiv">Etape1</div>
                            <div id="tonDiv2">Etape2</div> -->
                            <script>
                                let numeroEtape = 1;
                                let btn = document.getElementById("Bouton");
                                btn.addEventListener('click', Boite);

                                function Boite() {

                                    let div1 = document.createElement('input');
                                    div1.type = "textarea";
                                    div1.style.width = '700px';
                                    div1.style.height = '100px';
                                    div1.style.background = '#c0a1a1';
                                    div1.style.border = "2px solid black";
                                    let bout = document.querySelector(".bout");


                                    // for (i = 1; i <= 8; i++) {
                                    div1.placeholder = "etape" + numeroEtape;
                                    numeroEtape++;

                                    // div1.placeholder = "etape" + i;
                                    // }
                                    bout.appendChild(div1);

                                }

                                // document.querySelector("#Bouton").onclick = function() {
                                //     if (window.getComputedStyle(document.querySelector('#tonDiv')).display == 'none') {
                                //         document.querySelector("#tonDiv").style.display = "block";
                                //     } else {
                                //         document.querySelector("#tonDiv").style.display = "none";
                                //     }
                                //     if (window.getComputedStyle(document.querySelector('#tonDiv')).display == 'none') {
                                //         document.querySelector("#tonDiv2").style.display = "block";
                                //     } else {
                                //         document.querySelector("#tonDiv2").style.display = "none";

                                //     }
                                // }
                            </script>
                        </div>
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
                </article>
                <hr>
                <!-- **********************ETAPE CONSEILS ET MESSAGE**************** -->
                <article>
                    <legend>CONSEIL</legend>
                    <div class="mb-3">
                        <!-- <h2>Conseils</h2> -->
                        <textarea name="conseil" id="conseil" cols="115" placeholder="Conseil" rows="10"></textarea>
                    </div>
                    <hr>
                </article>
                <article>
                    <legend>MESSAGE</legend>
                    <div class="mb-3">
                        <!-- <h2>Message pour le modérateur</h2> -->
                        <textarea name="message" id="message" cols="115" placeholder="Message" rows="10"></textarea>
                    </div>
                    <div class="col-12">
                        <button id="btn" type="submit" value="ajouter" name="submit">Déposer une recette</button>
                    </div>
                </article>
        </div>
        </div>
        </form>

    </section>
    <footer>

    </footer>
</body>

</html>
// Pour affichage des erreurs et des infos validées
let listeInfos = listeError = []
let nbErrors = 0

// création d'une balise <p> pour afficher les messages d'erreurs
// placée en dernier enfant des conteneurs <div> de classe "champ"
for (element of document.querySelectorAll(".mb-3")) {
    displayError = document.createElement("p")
    displayError.classList.add("dispError")
    element.append(displayError)
}
// création de la liste des <input> et <textarea>
let listeInput = document.querySelectorAll("input, textarea")

// on ajoute 1 gestionnaire d'évènement pour "clic" sur "submit"
document.formulaire.addEventListener("submit", controleSubmit)

// Rappel info: pour cibler directement les input d'un formulaire, il faut leur ajouter un "name"
//  -> on peut remplacer : document.getElementById("exp")    PAR
//  -> document.formulaire.exp       (où "name=formulaire" dans <form> et "name=exp" dans un 1 <input> enfant)

function controleSubmit(event) {
    // POUR AFFICHER LES INFORMATIONS ET/OU ERREURS
    listeInfos = ["Vos informations valides: \n"]
    listeError = []
    nbErrors = 0
    for (let inputElement of listeInput) {
        // reset pour nouveau passage dans la boucle
        isError = false
        value = ""
        inputElement.classList.remove("error")                      // suppression de la bordure rouge autour de l'input
        inputElement.parentNode.lastElementChild.innerText = ""     // suppression du texte d'erreur sous l'input

        switch (inputElement.type) {
            case "difficulte":
                if (!(isError = checkdifficulte(inputElement))) value = inputElement.value
                break
            case "text":
            case "textarea":
                isError = checkRequired(inputElement)
                isError = checkLength(inputElement)
                value = inputElement.value
                break
            case "cout":
                isError = checkRequired(inputElement)
                isError = checkMinMax(inputElement)
                value = inputElement.value
                break
            case "pays":
                isError = checkpays(inputElement)
                value = inputElement.value
                break
            case "temps":
                isError = checknumber(inputElement)
                if (inputElement.checked)
                    listeInfos.push(inputElement.name + " -> " + inputElement.value)
                continue
                break
            case "checkbox":
                value = inputElement.checked ? "OUI" : "NON"
                break
            case "submit":
                continue
        }
        // SI TOUT EST OK, ON ENREGISTRE LES DONNEES DE L'INPUT DANS TABLEAU listeInfos
        if (isError == true) {
            listeError.push("")     // pour un affichage + aéré, on saute 1 ligne 
        } else {
            // listeInfos += inputElement.id + " -> " + value + "\n"
            listeInfos.push(inputElement.id + " -> " + value)
        }
    }






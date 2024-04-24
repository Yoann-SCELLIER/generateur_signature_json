// Création de constante avec "querySelector" qui selectionne les éléments.
const textInput = document.querySelector("#formText");
const numberInput = document.querySelector("#formNumber");


// Création de variable de validation pour garder une trace de la validation, initialement elles sont toutes "false".
let textValid = false;
let numberValid = false;

// Création de const "constante" regex qui imposera des conditions 

// Impose trois caractère à vingt-trois maximum, majuscule et minuscule accepter pour valider le formulaire "NOM" et "PRENOM"
const textRegex = /^[a-zA-Z-]{3,23}$/;

// Ajout de "?" après le "+" pour dire peut être différent et, supprimer "1" par "0" pour accepter le 06 et limite un total de 10 chiffre pour valider le formulaire du téléphone.
const numberRegex = /^\d{10}$/;

// Création d'une fonction addClass qui prend dans les paramètres "input" & "regex"
function addClass(input, regex, value) {

// Création d'une condition qui va vérifié si c'est "true" ou "false"
// Si c'est "true" (vrai) elle passe dans la condition "if"
    if (regex.test(value)) {
        input.classList.add("is-valid"); // add pour ajouter vert
        input.classList.remove("is-invalid"); // remove pour ajouter rouge

// Si c'est "false" (faux) elle passe dans la condition "else"
    } else {
        input.classList.remove("is-valid"); // remove pour retirer le vert
        input.classList.add("is-invalid"); // add pour rajouter le rouge"
    }
}

// Création d'écoute d'évenement pour vérifier si le formulaire est "false" ou "true".
// Formulaire "MODEL"
modelInput.addEventListener("input",function (e){
    addClass(textInput,userRegex, e.target.value)
    textInput.classList.contains("is-valid") ? textValid = true : textValid = false;
});

// Formulaire "VENDU et STOCK"
venduInput.addEventListener("input",function (e){
    addClass(numberInput,userRegex, e.target.value)
    numberInput.classList.contains("is-valid") ? numberValid = true : numberValid = false;
});
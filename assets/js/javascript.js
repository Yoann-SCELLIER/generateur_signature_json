// Sélection de l'élément bouton avec la classe 'js-copy'
var btncopy = document.querySelector('.js-copy');

// Vérification si le bouton a été trouvé
if(btncopy) {
    // Ajout d'un écouteur d'événements de clic sur le bouton
    btncopy.addEventListener('click', docopy);
}

// Fonction qui sera appelée lors du clic sur le bouton
function docopy() {
    // Récupération de l'élément à copier à partir de son attribut 'data-target'
    var target = this.dataset.target;
    var fromElement = document.querySelector(target);
    
    // Vérification si l'élément à copier existe
    if(!fromElement) return;

    // Création d'une plage de sélection
    var range = document.createRange();
    var selection = window.getSelection();
    range.selectNode(fromElement);
    
    // Suppression de toutes les plages de sélection précédentes et ajout de la nouvelle plage
    selection.removeAllRanges();
    selection.addRange(range);

    try {
        // Tentative d'exécution de la commande de copie du texte sélectionné dans le presse-papiers
        var result = document.execCommand('copy');
        
        // Vérification si la copie a réussi
        if (result) {
            // Affichage d'une alerte indiquant que la copie a réussi
            alert('Copié !');
        }
    }
    catch(err) {
        // Gestion des erreurs : Affichage d'une alerte avec le message d'erreur
        alert(err);
    }

    // Nettoyage de la sélection
    selection = window.getSelection();
    if (typeof selection.removeRange === 'function') {
        selection.removeRange(range);
    } else if (typeof selection.removeAllRanges === 'function') {
        selection.removeAllRanges();
    }
}
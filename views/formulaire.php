<div>
    <!-- Formulaire pour une nouvelle signature -->
    <form style='border: solide; border: 2px; width: 550px; padding: 10px;' action='/generateur_json/controllers/add.php' enctype='multipart/form-data' method='post'>
        <div >
        <img src='https://i.goopics.net/c3xabf.jpg' style='width: 150px; width: 9rem; text-decoration-line: none; text-decoration:none; background-color: white;' alt='Logo Agence'>
            <div style='margin: 10px;'>
                <label style='color: #e85d1c; font-family: Arial; font-weight: bold; font-size: 20px;' for='prenom'>Prenom :</label>
                <input  type='text' name='prenom' id='prenom'>
                <label style='color: #e85d1c; font-family: Arial; font-weight: bold; font-size: 20px;' for='nom'>Nom :</label>
                <input  size='22' type='text' name='nom' id='nom'>
            </div>
            <br>
            <div style='margin: 10px;'>
                <label style='color: #e85d1c; font-family: Arial; font-weight: bold; font-size: 20px;' for='poste1'>Poste 1 :</label>
                <input  size='57' type='text' name='poste1' id='poste1'>
            </div>
            <br>
            <div style='margin: 10px;'>
                <label style='color: #e85d1c; font-family: Arial; font-weight: bold; font-size: 20px;' for='poste2'>Poste 2 :</label>
                <input  size='57' type='text' name='poste2' id='poste2'>
            </div>
            <br>
            <div style='margin: 10px;'>
                <label style='color: #e85d1c; font-family: Arial; font-weight: bold; font-size: 20px;' for='numero'>Numéro :</label>
                <input  type='tel' name='numero' id='numero'>
                <label style='color: #e85d1c; font-family: Arial; font-weight: bold; font-size: 20px;' for='mail'>Email :</label>
                <input  type='email' name='mail' id='mail'>
            </div>
            <br>
            <div style='text-align: center; background-color: rgb(255, 255, 255); color: #e85d1c; font-family: Arial; font-weight: bold; font-size: 20px;'>
                <!-- Bouton pour générer la nouvelle signature -->
                <button style='text-align: center; background-color: rgb(255, 255, 255); color: #e85d1c; font-family: Arial; font-weight: bold; font-size: 20px;' type='submit'>Générer la signature</button>
                <!-- Fin du Bouton -->
            </div>
        </div>
    </form>
    <!-- Fin du formulaire pour les nouvelles signatures -->

    <h1 style='color: #e85d1c; font-family: Arial; font-weight: bold; font-size: 20px;'>Formulaire de signature.</h1>
    <p style='color: #065f60; font-family: Arial; font-weight: normal; margin: 8px 0px 8px 0px;'>Ci-dessus se trouve le formulaire permettant de générer la signature mail. <br>
        Vous aurez la possibilité de copier, modifier ou supprimer la signature à l'aide des boutons qui seront visibles sous la signature. <br>
        Une fois copiée, vous pourrez vous rendre dans les paramètres de votre boîte mail pour y coller la signature qui vous sera dédiée.</p>
</div>
<br>
<hr>
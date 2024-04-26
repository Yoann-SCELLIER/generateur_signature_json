<?php

// rappel des liens 'accueil' et 'formulaire'
require_once dirname(__DIR__) .'/generateur_json/components/header.php';
require_once dirname(__DIR__) .'/generateur_json/views/formulaire.php';

// mais en relation avec les autres fichiers '$_SESSION'
session_start();

// créer une boucle qui parcour le tableau et qui assigne chaque élément
foreach ($_SESSION['users'] as $user) {

	var_dump($_SESSION['users']);

	// affiche la 'div' pour la liste des éléments du tableau
?>

<span id='tocopy'>

<!-- Formulaire avec du CSS en style -->
	<table>
		<tr>
			<td style='padding: 15px; font-family: Arial;'>
				<!-- Affichage du logo -->
				<a href='http://www.enumiere.com' target='_blank'><img src='https://i.goopics.net/c3xabf.jpg' style='width: 150px; width: 9rem; text-decoration-line: none; text-decoration:none; background-color: white;' alt='Logo Agence'></a>
				<!-- Fin logo -->
			</td>
			<td style='padding: 15px; font-family: Arial;'>
				<!-- Séparation entre logo et contenu -->
				<span style='border-left: 1px solid #e85d1c; display: inline-block; height: 115px;'></span>
				<!-- Fin séparation -->
			</td>
			<td style='padding: 15px; font-family: Arial;'>
				<!-- Information utilisateur -->
				<span style='color: #e85d1c; font-family: Arial; font-weight: bold; font-size: 20px;'><?php echo $user['prenom'] ?> <?php echo $user['nom'] ?></span><br>
				<div style='color: #065f60; font-family: Arial; font-weight: normal; margin: 8px 0px 8px 0px;'>
					<?php echo $user['poste1'] ?><br>
					<?php echo $user['poste2'] ?>
				</div>
				<span style='color: #e85d1c; font-family: Arial; font-style: italic;'>
					<a href='tel:<?php echo $user['numero'] ?>' style='text-decoration-line: none; text-decoration:none; color: #e85d1c;'><?php echo $user['numero'] ?></a> | <a href='mailto:<?php echo $user['mail'] ?>' style='text-decoration-line: none; text-decoration:none; color: #e85d1c;'><?php echo $user['mail'] ?><span></a><br>
					<a href='http://www.enumiere.com' target='_blank' style='text-decoration-line: none; text-decoration:none; color: #e85d1c;'>www.enumiere.com</a>
				</span>
				<!-- Fin information -->
			</td>
		</tr>
	</table>

</span>

<div >
	<!-- Bouton pour modifier ou supprimer -->
	<button style='background-color: rgb(255, 255, 255); color: #065f60; font-family: Arial; font-weight: normal; font-size: 16px; margin: 0px 20px 0px 20px; padding: 4px; border: solid 1px #e85d1c;' data-target='#tocopy'>Copier</button>
	<a href='/generateur_json/views/formulaireUp.php?id=<?php echo $user['id'] ?>' style='background-color: rgb(255, 255, 255); color: #065f60; font-family: Arial; font-weight: normal; font-size: 16px; margin: 0px 20px 0px 20px; padding: 4px; border: solid 1px #e85d1c;'>Modifier</a>
	<a href='/generateur_json/controllers/delete.php?id=<?php echo $user['id'] ?>' style='background-color: rgb(255, 255, 255); color: #065f60; font-family: Arial; font-weight: normal; font-size: 16px; margin: 0px 20px 0px 20px; padding: 4px; border: solid 1px #e85d1c;'>Supprimer</a>
	<!-- Fin bouton modifier ou supprimer -->
</div>
<br>

<?php

}

require_once dirname(__DIR__) .'/generateur_json/components/footer.php';
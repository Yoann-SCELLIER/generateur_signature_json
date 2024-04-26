<?php

// rappel des liens 'accueil' et 'formulaire'
require_once __DIR__ .'/components/header.php';
// require_once __DIR__ .'/config/data.php';

// mais en relation avec les autres fichiers '$_SESSION'
session_start();

// créer une boucle qui parcour le tableau et qui assigne chaque élément
foreach ($_SESSION['cars'] as $car) {

	// affiche la 'div' pour la liste des éléments du tableau
?>

		<div class='autocentre'>
        	<div class='flip-card'>
            	<div class='flip-card-inner'>
                	<!-- <div class='flip-card-front'>
                    	<img width='150' src='<?php // echo $car['image'] ?>' alt='image'>
                	</div> -->
                	<div class='flip-card-back'>
                    	<h5> Id : <?php echo $car['id'] ?></h5>
                    	<h5> Modele : <?php echo $car['model'] ?></h5>
                    	<p>lorem ipsum dolor sit amet consectetur.</p>
                    	<a href='/generateur_json/views/view.php?id=<?php echo $car['id'] ?>'>DETAIL</a>
                	</div>
            	</div>
        	</div>
    	</div>

<?php

}

require_once __DIR__ . '/components/footer.php';

<?php

require ("test_connexiondb.php"); 

$titre=$_POST['titre'];
$image=$_POST['image'];
$nom_image=$_POST['nom_image'];
$description=$_POST['description'];
$avantages=$_POST['avantages'];
$inconvenients=$_POST['inconvenients'];


if (isset($_POST['titre']) AND isset($_POST['image']) AND isset($_POST['nom_image']) AND isset($_POST['description']) AND isset($_POST['avantages']) AND isset($_POST['inconvenients']))
{
	
	$data = $dbh->prepare('INSERT INTO articles (titre, image, nom_image, description, avantages, inconvenients) VALUES (:titre, :image, :nom_image, :description, :avantages, :inconvenients)');
	$data->bindParam(':titre', $titre , PDO::PARAM_STR, 255);
	$data->bindParam(':image', $image , PDO::PARAM_STR, 255);
	$data->bindParam(':nom_image', $nom_image , PDO::PARAM_STR, 255);
	$data->bindParam(':description', $description , PDO::PARAM_STR, 1000);
	$data->bindParam(':avantages', $avantages , PDO::PARAM_STR, 2000);
	$data->bindParam(':inconvenients', $inconvenients , PDO::PARAM_STR, 2000);
	$result = $data->execute();
	if($result) {
		echo "L'article " . htmlspecialchars($_POST['titre']) . "a bien été envoyé dans la bdd <br/>";


	} else {
		var_dump($result);
		echo $data->errorCode();
		print_r($data->errorInfo());
	}
}

else 
{
  echo "Au moins un champs n'a pas été rempli ! <br/><br/>";
}

?>
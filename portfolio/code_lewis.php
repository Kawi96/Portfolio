<?php

$dbh = new PDO('mysql:host=localhost;dbname=portfolio', "root", "");; 
if (isset($_POST["nom"]) AND isset($_POST["prenom"]) AND isset($_POST["email"]) AND isset($_POST["message"]))
{
    $nom=$_POST["nom"];
    $prenom=$_POST["prenom"];
    $email=$_POST["email"];
    $message=$_POST["message"];

	$data = $dbh->prepare('INSERT INTO formulaire_contact(nom,prenom,email,message) VALUES (?,?,?,?)');
	$data -> execute(array( $nom, $prenom, $email, $message));
	echo "Bonjour " . htmlspecialchars($_POST['prenom']) . " " . htmlspecialchars($_POST['nom']). "<br/>";
	echo "nous avons bien reçu votre message, nous vous répondrons dans les plus brefs délais !<br/><br/>";
	echo "Merci et bonne journée !";

	/*$data = $dbh->prepare('INSERT INTO formulaire_contact (nom, prenom, email, message) VALUES (:nom, :prenom, :email, :message)');
	$data -> bindParam(':nom', $nom , PDO::PARAM_STR, 255);
	$data -> bindParam(':prenom', $prenom , PDO::PARAM_STR, 255);
	$data -> bindParam(':email', $email , PDO::PARAM_STR, 255);
	$data -> bindParam(':message', $message , PDO::PARAM_STR, 255);
	$data -> execute();*/

}

else 
{
  echo "Vous n'avez pas renseigner tous les éléments du formulaire (Nom, Prénom, Email, Message) ! <br/><br/>";
}






echo htmlspecialchars($_POST['message']);
?>



<!DOCTYPE html>


<html lang="fr">
    
    <head>
        <title>Formulaire de contact</title>
        <meta charset="utf-8">
        <link href="cssportfolio.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    </head>
    <body>
        
        <!-- Menu réalisé en PHP -->
       
        
        <h1>laissez moi un message :)</h1>
            <form method="post" action="cible_formulaire.php">
              <div class="element_de_formulaire">
      			<p>Nom :</p><input type="text" name="nom" /><br/>
              </div>
      			<p>Prénom :</p><input type="text" name="prenom" /><br/>
      			<p>Adresse mail :</p><input type="text" name="email" /><br/>
				<textarea name="message" rows="12" cols="60"> Tappez votre message ici</textarea><br/>
				<input type="submit" value="Valider" />
            </form>
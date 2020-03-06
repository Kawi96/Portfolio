<?php
$user = "root";
$pass = "";
try {
    $dbh = new PDO('mysql:host=localhost:3308;dbname=portfolio', $user, $pass);
   // foreach($dbh->query('SELECT * from formulaire_contact') as $row) {
      //  print_r($row);

       // INSERT INTO `formulaire_contact` (`id_formulaire`, `nom`, `prenom`, `email`, `message`) VALUES ('', '$_POST['nom']', '$_POST['prenom']', '$_POST['email']', '$_POST['message']');
    //}
   // $dbh = null;
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}


?>
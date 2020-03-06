<?php

require ("test_connexiondb.php"); 

include("includes/menu.php");

$reponse = $dbh->query('SELECT * FROM articles');

?>

<body>
    
    <?php
while ($donnees = $reponse->fetch())

{
    ?><h1><?php echo $donnees['titre'];?></h1>

    <img class="image_centrale" src="<?php echo $donnees['image'];?>" name="bacheler" alt="Personne diplomé en ombre chinoise">

    <div class="happy_unhappy">
    <img class=image src="images/smiley_sourire.webp" name="smiley" alt="smiley-sourire">
    <p class="texte_happy_unhappy"><span class="element_en_italique">Avantages : </span><?php echo $donnees['avantages'];?></p></div>

     <div class="happy_unhappy">
     <img class=image src="images/smiley_sourire.webp" name="smiley" alt="smiley-sourire">
     <p class="texte_happy_unhappy"><span class="element_en_italique">Inconvénients : </span><?php echo $donnees['inconvenients'];?></p>
    </div>
    
    <?php
}


include("includes/footer.html");

?>

</body>
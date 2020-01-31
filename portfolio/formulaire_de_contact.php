

<!DOCTYPE html>
<html lang="fr">
    
    <head>
        <title>Formulaire de contact</title>
        <meta charset="utf-8">
        <link href="../cssportfolio.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    </head>
    <body>
        
        <! -- Menu réalisé en PHP -->
        <?php include("includes/menu.php"); ?>
        
        <h1>laissez moi un message :)</h1>
            <form method="GET" action="" id="formulaire_de_contact">
                <div class="element_de_formulaire">
                    <label for="name">Nom :</label>
                    <input type="text" id="name" name="user_name">
                </div>
                <div class="element_de_formulaire">
                    <label for="mail">e-mail :</label>
                    <input type="email" id="mail" name="user_mail">
                </div>
                <div class="element_de_formulaire">
                    <label for="msg">Message :</label>
                    <textarea id="zone_de_texte" name="user_message"></textarea>
                </div>
                <div class="element_de_formulaire">
                    <button type="submit">Envoyer le message</button>
                </div> 
            </form>
            <?php echo $_GET['name']; ?>


    </body>
</html>
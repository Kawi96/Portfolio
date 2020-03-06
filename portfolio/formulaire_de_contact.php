


        
        <!-- Menu réalisé en PHP -->
        <?php include("includes/menu.php"); ?>
        
    <body>


                <h1>laissez moi un message :)</h1>
            <form method="POST" action="cible_formulaire.php">
              <div class="element_de_formulaire">
            <p>Nom :</p><input type="text" name="nom" /><br/>
              </div>
              <div class="element_de_formulaire">
            <p>Prénom :</p><input type="text" name="prenom" /><br/>
              </div>
              <div class="element_de_formulaire">
            <p>Adresse mail :</p><input type="text" name="email" /><br/>
              </div>
        <textarea name="message" rows="12" cols="60"> Tappez votre message ici</textarea><br/>
        <input type="submit" value="Valider" />
            </form> 


       <!-- <?php
$action=$_REQUEST['action'];
if ($action=="")    /* display the contact form */
    {
    ?>
    <form  action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="action" value="submit">
    Noms :<br>
    <input name="name" type="text" value="" size="30"/><br>
    Adresse email :<br>
    <input name="email" type="text" value="" size="30"/><br>
    Message :<br>
    <textarea name="message" rows="7" cols="30"></textarea><br>
    <input type="submit" value="Envoyer"/>
    </form>
    <?php
    } 
else                /* send the submitted data */
    {
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $message=$_REQUEST['message'];
    if (($name=="")||($email=="")||($message==""))
        {
    echo "All fields are required, please fill <a href=\"\">the form</a> again.";
      }
    else{   
      $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message sent using your contact form";
    mail("guillaume.alemany@students.campus.academy", $subject, $message, $from);
    echo "Votre message a bien été envoyé. Nous y répondrons dans les plus brefs délais :)";
      }
    }  
?>-->




   
           <?php include("includes/footer.html"); ?>



    </body>
</html>
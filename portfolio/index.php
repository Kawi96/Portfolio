<!DOCTYPE html>
<html lang="fr">
    
    <head>
        <title>Portolio</title>
        <meta charset="utf-8">
        <link href="cssportfolio.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    </head>
    <body>

        <! -- Menu réalisé en PHP -->
        <?php include("includes/menu.php"); ?>
        
        
        <header class="sommaire">
            <h2>sommaire</h2>
            <ul>
                <li><a href=#presentation>Présentation</a></li>
                <li><a href=#mon_parcours>Mon parcours</a></li>
                <li><a href="#experiences_detaillees">experiences_detaillees</a></li>
                <li><a href="#mes_recommandation">mes_recommandation</a></li>
                <li><a href="#contactez_moi">contactez_moi</a></li>
            </ul>
        </header>
        
        <section class="presentation">     
            <h1 id="presentation">Petite présentation :</h1>

                <p>Mon nom est Guillaume Alemany. Je suis actuellement étudiant en première année de Bachelor informatique à Campus Academy.</p>
                
                <p>Je suis à la recherche d’une alternance pour ma B2 Informatique orientée developpement Web et Web mobile.
                Je travaille également au passage de ma certification “<a href="https://support.google.com/analytics/answer/3424287?hl=fr"Google Analytics></a></p>
            
            <h2>Quelques informations importantes à mon sujet :</h2>
            <div class="happy_unhappy">
                <img class=image src="images/smiley_sourire.webp" name="smiley" alt="smiley-sourire">
                <p class="texte_happy_unhappy">Je suis <span class="element_en_gras">très carré, Pragmatique et curieux de nature</span>. Quand je suis passionné par quelque chose je peux y passer des heures. Je m'intérésse à des sujets très divers, principalement la géopolitique et l'histoire. J'aime bien voyager et découvrir de nouveaux pays...</p>
            </div>
             <div class="happy_unhappy">
                <img class=image src="images/smiley_triste.webp" name="smiley_triste" alt="smiley_triste">
                <p class="texte_happy_unhappy">Malheuresement je suis également <span class="element_en_gras">ultra nul en design ! </span>Aussi : J'éprouve des difficultés a éffectuer des taches quand je n'en comprends pas la logique</p>
            </div> 
            <p>Je peux être capable de produire un travail de qualité et d'innover mais j'aurais toujours du mal à bien présenter les choses au niveau de la forme. Pour illuster cela je peux citer une phrase de Fabrice Emeriau à propos de mon travail concernant le tableau de compta d'AD Ingé (sujet traité ci dessous) : "Guillaume, tu as démontré avec le tableau de compta que tu es capables de faire de faire du très bon travail. Cependant, tu as un sérieux problème avec la mise en forme et les gens risquent de ne pas utiliser tes outils si ils ne sont pas bien présentés".</p>
            <p>L'évaluation que nous avons en python illustre très bien cela : <a href="html/tppython.html">TPpython</a></p>
        </section>   

        <section class="mon_parcours"> 
            <h1 id="mon_parcours">mon parcours</h1>

                <h2>Depuis fin septembre 2019 : Début des cours à <a href="https://www.campus.academy/">Campus Academy</a></h2>
                <div class="happy_unhappy">
                    <img class="image" src="images/logo_campus_academy.png" name="logo_campus_academy" alt="logo_de_campus_academy">
                    <p class="texte_happy_unhappy">Je suis actuellement en première année de Bachelor informatique orientée "Developpement Web et Web mobile" à Campus Academy. Mon objectif est de travailler dans le developpement web, je suis clairement plus orienté "Front-end" que "Back-end".</p>
                </div>
                <h2>De juin à septembre 2019 : Validation de mon projet professionnel par des Stages en entreprise et des ateliers aux Google atelier numérique de Rennes</h2>
                    <p> Ces stages avaient pour but de découvrir le métier de developpeur web. J'ai passé une semaine chez <a href="https://www.kurmi-software.com/fr/">Kurmi Software</a> en aout et deux semaines chez <a href="https://www.orange-business.com/fr">Orange Business Services</a>. <span class="element_en_gras">Ces deux stages m'ont permis de découvrir les différents métiers liés au developpement Web ainsi que l'organisation du travail en entreprise et notamment la méthode AGILE</span></p>
                    <p> J'ai passé la certification <a href="https://learndigital.withgoogle.com/ateliersnumeriques/course/digital-marketing">“Fondamentaux du Marketing Numérique”</a> du Google Atelier Numérique</p>
                    
                    

                <h2>Mai 2018 à Mai 2019 : Assistant technico-administratif chez <a href="https://www.adinge.fr">AD Ingé</a> : Bureau d'Études Technique spécialisé en démolition de bâtiments.</h2>
                    <div class="happy_unhappy">
                        <img class="image" src="images/logo_ad_inge.jpg" name="logo_ad_inge" alt="Logo de la société AD Ingé">
                        <p class="texte_happy_unhappy">Mon travail consistait principalement à réaliser des taches administratives et à améliorer les documents type de travail de l'entreprise principalement via Excel et Word. Cela m'a permis d'améliorer grandement ma maitrise d'Excel et de Word</p>
                    </div>
                    <img class="image_centrale" src="images/bon_en_bureautique.webp" name="bon_en_bureautique" alt="Personnage représentant un Super héro devant les logos de logiciels de bureautique">

                <h2>Juin 2017 à Juin 2018 : Rédaction, publication et promotion d'un livre autobiographique</h2>
                    <div id="kawi_block">
                        <img class="image_centrale" src="images/les_aventures_de_kawi.jpg" name="les_aventures_de_kawi" alt="Couverture du livre : Les aventures de Kawi">
                        <p>Mon livre a été édité en Novembre 2017 au édition "l'Harmattan" (ISBN :  978-2-343-13398-0). Il est préfacé par Pascale Planche, professeur de psychologie à l'Université de Bretagne Occidentale et spécialiste de l'autisme. Ce projet est l'aboutissement d'un long travail. J'ai pris pour base d'écriture les "récits de voyages" : Un grand document descriptif dans lequel je racontais mes mésaventures à l'étranger. Ces récits de voyages ont principalement été rédigés de 2011 à 2014, c'est à dire juste après mon retour d'Australie. Cela représente une expérience très enrichissante aussi bien d'un point de vue personnel que professionnelle (compétences acquises en gestion et en communication notamment).</p>
                        
                    </div>

                <h2>Septembre 2014 à Juin 2017 : Licence Histoire parcours Sciences Politique, Economique et Sociales </h2>
                    <div class="happy_unhappy">
                        <img class=image src="images/smiley_sourire.webp" name="smiley" alt="smiley-sourire">
                        <p class="texte_happy_unhappy"><span class="element_en_italique">Avantages</span>: Les études en Histoire sont très enrichissantes d'un point de vu intellectuelles. Cela permet également de developper ses capacités rédactionnelles, ses capacités de synthèse, et de d'apprendre à analyser des faits à partir de sources historiques.</p>
                    </div>
                     <div class="happy_unhappy">
                         <img class=image src="images/smiley_triste.webp" name="smiley_triste" alt="smiley_triste">
                         <p class="texte_happy_unhappy"><span class="element_en_italique">Inconvénients </span>: Ce diplome est très peu porteur en matière d’emploi. Le principal débouché de la licence d'Histoire est l'enseignement supérieur dans le secondaire mais pour cela il faut faire un autre parcours : Histoire-Géographie. La licence Histoire-Sciences Politique, Economique et Sociales est théoriquement orientée vers les concours de la fonction publique. Cependant, nous sommes beaucoup moins bien formés que les étudiants de sciences politique, de droit publique, d'IPAG ou d'AES pour passer ces concours. Cela est du au fait que les matières d'Histoires (communes avec les étudiants en Histoire-Géographie) représentent la majorité de nos cours et que les matières administrative soit secondaires dans ce cursus.</p>
                    </div>

                <h2>Janvier 2014 : Diagnostic du syndrome d’Asperger</h2>
                    
                     <img id="caricature_blequin" src="images/caricature_blequin.png"  name="caricature_de_blequin" alt="caricatures de personnes autistes par le déssinateur Blequin">
                    <div class="happy_unhappy">
                        <img class=image src="images/smiley_sourire.webp" name="smiley" alt="smiley-sourire">
                        <p class="texte_happy_unhappy"><span class="element_en_italique">Avantages :</span> Le fait d'entreprendre une démarche de diagnostic quand on pense avoir un problème spécifique est toujours une bonne chose car cela permet de mieux se connaitre et de chercher des solutions à ses problèmes. Dans mon cas, le diagnostic à démontrer que je n'avais pas de défficience intéllectuelle et que j'étais même considéré comme surdoué au niveau du QI verbal. La caricature ci-dessus à été réalisé par le déssinateur Blequin, lui aussi Asperger, dont vous trouverez le site Internet :<a href="https://blequin.blog4ever.com/articles"> ici</a>   </p>
                    </div>
                    <div class="happy_unhappy">
                        <img class=image src="images/smiley_triste.webp" name="smiley_triste" alt="smiley_triste">
                        <p class="texte_happy_unhappy"><span class="element_en_italique">Inconvénients </span>: Un diagnostic confirme ou infirme de facto le fait d'avoir un handicap et le fait de recevoir cette information peut avoir des conséquences négatives : La perseption qu'on a de sois même peut beaucoup évoluer en fonction de cela. Le diagnostic a également confirmer que j'avais un déficit au niveau des réflexes et que je ne pourrai donc jamais passer le permis de conduire.</p>
                    </div>
            
            
                <h2>Juin 2006 à  Janvier 2014 : Nombreux petits bouleaux :Guide touristique, Ouvrier en usine agroalimentaire, Ouvrier agricole...</h2>
                      <div class=happy_unhappy>
                        <img src="images/ouvrier_agricole.webp" name="ouvrier_agricole" alt="dessin représentant un ouvrier agricole">
                        <img src="images/guide_touristique.webp" name="guide_touristique" alt="dessin représentant un guide touristique">
                        <img src="images/ouvrier.webp" name="ouvrier" alt="dessin représentant un ouvrier">
                    </div>
                    <div class="happy_unhappy">
                        <img class=image src="images/smiley_sourire.webp" name="smiley" alt="smiley-sourire">
                        <p class="texte_happy_unhappy"><span class="element_en_italique">Avantages</span> : J'ai éffectué de nombreux travaux très divers. C'était parfois difficile mais ça contribue à forger le carractère. Ces expériences m'ont également permis de mieux me connaitre; d'analyser mes points forts et mes points faibles... Certaines expériences, comme mes saisons en tant que guide touristique étaient très enrichissantes d'un point de vue intellectuel.  </p>
                    </div>
                    <div class="happy_unhappy">
                        <img class=image src="images/smiley_triste.webp" name="smiley_triste" alt="smiley_triste">
                        <p class="texte_happy_unhappy"><span class="element_en_italique">Inconvénients </span>: Le travail d'ouvrier en usine agroalimentaire est très difficile physiquement. On est souvent amené à éffectuer des ports de charge lourdes et à rester longtemps dans des positions qui sont mauvaises pour le dos. Il en va de même au niveau des travaux agricoles. Deplus, j'étais toujours intérimaire ou saisonnier pour ces boulots et cela n'est pas un grand vecteur de stabilité...</p>
                    </div>
                <h2>J'ai également beaucoup voyagé durant cette même période : Expérences en Asie du sud-Est, en Angleterre et en Australie</h2>
                    <div>
                        <img src="images/cuisine_asiatique.webp" name="cuisine_asiatique" alt="brochettes_de_viande_et_piments">
                        <img src="images/paysage_asiatique.jpg" name="paysage_asiatique" alt="colines boisées avec végétation tropicale">
                        <img src="images/pont_de_londres.webp" name="le_pont_de_londres" alt="Photographie du pont de Londres">
                        <img src="images/kangourous.webp" name="kangourous" alt="Photographie de kangourous">
                    </div>
                

                <h2>Juin 2006 : Obtention d'un bac STT Gestion</h2>
                    <img class="image_centrale" src="images/bachelier.webp" name="bacheler" alt="Personne diplomé en ombre chinoise">
                    <div class="happy_unhappy">
                        <img class=image src="images/smiley_sourire.webp" name="smiley" alt="smiley-sourire">
                        <p class="texte_happy_unhappy"><span class="element_en_italique">Avantages</span>: Le Bachalauréat reste la clé de l'accès aux supérieures. De plus j'y ai appris des choses qui me servent encore aujourd'hui, notamment en gestion.</p>
                    </div>
                    <div class="happy_unhappy">
                        <img class=image src="images/smiley_triste.webp" name="smiley_triste" alt="smiley_triste">
                        <p class="texte_happy_unhappy"><span class="element_en_italique">Inconvénients </span>: Ce diplome n'a pratiquement aucune valeur sur le marché du travail en tant que tel. Une grande parties de ce que j'ai appris est maintenant obsolète. J'ai choisie ce parcours sans vraiment connaitre la comptabilité et je ne me sent pas spécialement à l'aise dans ce domaine. </p>
                    </div>
                   

                <h2>09/06/1986 : Naissance</h2>
                    <img class="image_centrale" src="images/naissance_cygogne.webp"  name="cygogne_apportant_un_bebe" alt="cygogne_apportant_un_bebe">
        </section>   


        <section class="experiences_detaillees"> 
            <h1 id="experiences_detaillees">expériences détaillées</h1>

                <h2>Tableau de comptabilité d’AD Ingé</h2>
                    <a href="html/experiences_notables.php#experience_tableau_de_compta">Pour plus détails cliquez sur ce lien</a>

                <h2>L’appel d’offre du marché des JO de Paris 2024</h2>
                    <a href="html/experiences_notables.php#experience_jeux_olympiques">Pour plus détails cliquez sur ce lien</a>

                <h2>Les enquête sociologiques les besoins des adultes autistes</h2>
                    <a href="html/experiences_notables.php#experience_enquete_asperansa">Pour plus détails cliquez sur ce lien</a>

                <h2>Promotion de mon livre</h2>
                    <a href="html/experiences_notables.php#promotion_de_kawi">Pour plus détails cliquez sur ce lien</a>
        </section>

        <section class="mes_recommandation">  
            <h1 id="mes_recommandation">mes recommandations</h1> 
                <h2>Fabrice Emeriau</h2>
                    <p>Gérant de la société AD Ingé</p>


                <h2>Sébastien Valentini</h2>
                    <p>Responsable de production de la société Kurmi Software</p>

                <h2>Yann Soulabaille</h2>
                    <p>Responsable de Projet chez Orange Business Services</p>
        </section> 

        <section class="contactez_moi"> 
            <h1 id="contactez_moi">contactez moi :)</h1>
                <h2>Je suis sur <a href="https://www.linkedin.com/in/guillaume-alemany-91693b18a/"><img id="linkedin" src="images/linkedin.png" name="logo_linkedin" alt="logo_linkedin"></a> ! </h2>
                <h2>Vous pouvez également me laisser un message ici :<a href="html/formulaire_de_contact.php">contact</a></h2>
        </section> 

    </body>
    
</html>
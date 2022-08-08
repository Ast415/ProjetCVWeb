<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/font.css">
</head>
<body>

    <!--Importation de l'en tete (header)-->
    <?php include("enTete.html") ?>

    <main>
        <div class="CorpDePage">
            <h2>Bienvenue</h2>
            <p>
                Vous vous trouver actuellement sur mon site web professionnelle, 
                j'y regroupe tous mes projet personnelle, scolaire et professionnelle.
                Mais pas que, comme je trouve qu'un CV est trop limitent en place j'ai 
                désider de crée se site.<br>
                Vous y retrouvrer donc aussi mon parcour scolaire et professionnelle, 
                mes loisir, mes centre d'intérer et un presentation de moi même.
            </p>
            <h2>Recherche actuellement</h2>
            <p>Un stage en dévellopement web et/ou logiciel pour ma seconde période de stage en BTS SIO.</p>
            <h2>Me contacter</h2>
            
            <div id="contact">
                <div class="LigneContact">
                    <div class="ColoneContact">
                        <img src="src/img/png/gmail.png" alt="" class="IcoContact">
                        <a href="formulaireEmail.php"><p class="TxtContact">bastienbories81pro@gmail.com</p></a>
                    </div>
                    <div class="ColoneContact">
                        <img src="src/img/png/telephone.png" alt="" class="IcoContact">
                        <p class="TxtContact">N° 07 81 87 88 97</p>
                    </div>
                    <div class="ColoneContact">
                        <img src="src/img/png/linkedin.png" alt="" class="IcoContact">
                        <p class="TxtContact">Arrive bientot</p>
                    </div>
                </div>
            </div>

            <h2>Télécharger mon CV</h2>
            <div class="AlignElement">
                <a href="src/doc/pdf/BORIES Bastien - CV.pdf"><img src="src/img/png/cv.png" alt="" class="IcoCV"></a>
                <p>Cliquez sur l'image</p>
            </div>
            
        </div>
    </main>

    <!--Importation du pied de page (footer)-->
    <?php include("piedDePage.html") ?>

</body>
</html>
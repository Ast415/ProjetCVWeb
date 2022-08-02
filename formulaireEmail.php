<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/font.css">
</head>
<body>
    <?php include("enTete.html") ?>
    <main>
        <div class="CorpDePage">
            <h1>Envoyer un E-mail</h1>
            <p>
                Veuillez saisir les element comportant un *.
            </p>
            <form method="post" action="envoiEmail.php">
                <table style="width: 100%">
                    <tr>
                        <td class="TdFormulaire" name="left">
                            <label for="email">Société *</label><br>
                            <input type="text" name="societe" class="InputFormulaire"><br>

                            <label for="departement">Département *</label><br>
                            <select name="departement" class="InputFormulaire">
                                <option selected disabled value>Selectionner un departement</option>
                                <option value="81100">Castres</option>
                                <option value="31100">Toulouse</option>
                            </select><br>

                            <label for="nom">Nom *</label><br>
                            <input type="text" name="nom" class="InputFormulaire"><br>

                            <label for="prenom">Prenom *</label><br>
                            <input type="text" name="prenom" class="InputFormulaire"><br>

                            <label for="email">Fonction</label><br>
                            <input type="text" name="fonction" class="InputFormulaire"><br>

                            <label for="email">Email *</label><br>
                            <input type="text" name="email" class="InputFormulaire"><br>

                            <label for="email">Téléphone</label><br>
                            <input type="email" name="telephone" class="InputFormulaire"><br>

                            <label for="email">Objet *</label><br>
                            <input type="text" name="objet" class="InputFormulaire"><br>
                        </td>
                        <td class="TdFormulaire">
                            <label for="message">Message *</label><br>
                            <textarea name="message" cols="30" rows="10" class="InputFormulaire" id="textareaForm"></textarea><br>
                        </td>
                    </tr>
                    <tr><td><br></td></tr>
                    <tr>
                        <td id="submitFormulaire">
                            <button type="submit">Envoyer</button>
                        </td>
                        <td id="resetFormulaire">
                            <button type="reset">Réinitialiser</button>
                        </td>
                    </tr>
                </table>
                <table>
                    
                </table>


            </form>
            <a href="index.php"><h1>RETOUR</h1></a>
        </div>
    </main>
    <?php include("piedDePage.html") ?>
</body>
</html>
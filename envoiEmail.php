<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $Nom=$_POST["nom"];
    $Prenom=$_POST["prenom"];
    $Email=$_POST["email"];
    $Message=$_POST["message"];

    
    $r=mail("bastienbories81@gmail.com", "Test", $Message, "From: webmaster");
    if ($r)
        echo '<p>Votre message a bien été envoyé.</p>';
    ?>
</body>
</html>
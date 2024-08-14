<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Target PHP</title>
</head>
<body>
    <?php
    $prenom = $nom = $email = $password = "";
    function securisation ($donnees){
        $donnees = trim($donnees);
        $donnees = stripslashes($donnees); 
        $donnees = strip_tags($donnees);
        return $donnees;
    }
     $prenom = securisation($_POST['prenom']);
      $nom = securisation($_POST['nom']);
       $email = securisation($_POST['email']);
        $password = securisation($_POST['password']);

        echo 'Ton prénom est:' .$prenom. '<br/>';
        echo 'Ton nom est:' .$nom. '<br/>';
        echo 'Ton email est:' .$email. '<br/>';
        echo 'Ton mot de passe est:' .$password;
    ?>
    <p>Clique <a href="formulaire.php"> ici </a>resaisir votre prénom</p>
</body>
</html>
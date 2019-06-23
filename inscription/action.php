<?php


    if (isset($_POST['nom'])){
        echo($_POST['nom']);
    }



    $nom =htmlspecialchars($_POST['nom']);
    $prenom=htmlspecialchars($_POST['prenom']);
    $adressseMail=htmlspecialchars($_POST['email']);
    $cin = htmlspecialchars($_POST['email']);
    $pass= htmlspecialchars($_POST['pass']);
    $hashed_password = hash ( 'md5' , $pass);
    $dateNaissance = $_POST['dateNaissance'];
    $ville=  htmlspecialchars($_POST['ville']);
    $sexe= htmlspecialchars($_POST['sexe']);

    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=siteYouCode;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }

    $bdd->exec('CREATE TABLE IF NOT EXISTS users (
        id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
        firstName VARCHAR(40),
        lastName VARCHAR(40),
        email VARCHAR(60) NOT NULL,
        pass VARCHAR(30) NOT NULL,
        cin VARCHAR(20) NOT NULL,
        dateNaissance VARCHAR(20),
        ville varchar(20),
        sexe varchar(10),
        PRIMARY KEY (id)
    )');
  


    $req = $bdd->prepare('INSERT INTO users(firstName, lastName, email, pass, cin, dateNaissance, ville, sexe) VALUES(:nom, :pre, :ema, :pass, :cin, :datn, :ville, :sexe)');
    $req->execute(array(
	'nom' => $nom,
	'pre' => $prenom,
	'ema' => $adressseMail,
    'pass' => $hashed_password,
    'cin'=> $cin,
    'datn' => $dateNaissance,
    'ville'=> $ville,
    'sexe'=>$sexe
	));


?>
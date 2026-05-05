<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=magasin", "root", "", [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (\Exception $e) {
    die("ERREUR:" . $e->getMessage());
}

if(isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["contact"]) && isset($_POST["mail"]) && isset($_POST["mdp1"]) && isset($_POST["mdp2"]) ){
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $contact = $_POST["contact"];
    $mail = $_POST["mail"];
    $auth1 = $_POST["mdp1"];
    $auth2 = $_POST["mdp2"];

    if($auth1 !== $auth2){
        echo "Les mots de passe ne correspondent pas";
    } else {

        $passwordHash = password_hash($auth1, PASSWORD_DEFAULT);

        $req = $conn->prepare("INSERT INTO user (nom,prenom,contact,psw,mail) VALUES (?,?,?,?,?)");

        if($req->execute([$nom,$prenom,$contact,$passwordHash,$mail])){
            header("Location:accueil.php");
            exit();
        } else {
            echo "Erreur";
        }
    }
}
?>
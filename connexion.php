<?php
include("config.php");

if (isset($_POST["email"]) && isset($_POST["mdp"])) {

    $mail = $_POST["email"];
    $auth = $_POST["mdp"];


    $req = $conn->prepare("SELECT * FROM user WHERE mail = ?");
    $req->execute([$mail]);
    $user = $req->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        if (password_verify($auth, $user["psw"])) {

            header("Location:accueil.php");
            exit();
        } else {
            echo "Mot de passe incorrect";
        }
    } else {
        echo "Email incorrect";
    }
    var_dump(password_verify($auth, $user["psw"]));
}

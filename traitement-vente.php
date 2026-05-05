<?php
include("config.php");

if (
    isset($_POST["code_article"]) && isset($_POST["prix_unitaire"]) && isset($_POST["quantite"]) && isset($_POST["nom_client"]) &&
    isset($_POST["prenom_client"]) && isset($_POST["age"]) && isset($_POST["adresse"]) && isset($_POST["ville"]) && isset($_POST["mail"])
) {

    $code = htmlspecialchars($_POST["code_article"]);
    $prix_unitaire = htmlspecialchars($_POST["prix_unitaire"]);
    $quantite = htmlspecialchars($_POST["quantite"]);
    $nom_client = htmlspecialchars($_POST["nom_client"]);
    $prenom_client = htmlspecialchars($_POST["prenom_client"]);
    $age = htmlspecialchars($_POST["age"]);
    $adresse = htmlspecialchars($_POST["adresse"]);
    $ville = htmlspecialchars($_POST["ville"]);
    $mail = htmlspecialchars($_POST["mail"]);
    $date = date('Y-m-d');
    $montant = $prix_unitaire * $quantite;

    $req = $conn->prepare("INSERT INTO client(nom,prenom,age,adresse,ville,mail,jour) VALUES (?,?,?,?,?,?,?) ");
    $resultat = $req->execute([$nom_client, $prenom_client, $age, $adresse, $ville, $mail, $date]);
    $client_id = $conn->lastInsertId();

    $req1 = $conn->prepare("INSERT INTO commande (id_client,nom,prenom,age,adresse,ville,mail,date_vente) VALUES (?,?,?,?,?,?,?,?)");
    $result1 = $req1->execute([$client_id, $nom_client, $prenom_client, $age, $adresse, $ville, $mail, $date]);
    $commande_id = $conn->lastInsertId();

    $req2 = $conn->prepare("INSERT INTO ligne(id_commande,code,quantite,prix_unitaire,montant) VALUES (?,?,?,?,?)");
    $result2 = $req2->execute([$commande_id,$code,$quantite,$prix_unitaire,$montant]);
    header("Location:vente.php");
    exit();
}

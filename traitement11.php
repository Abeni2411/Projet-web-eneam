<?php
include("config.php");
if (isset($_POST["code"]) && isset($_POST["desc"]) && isset($_POST["prix"]) && isset($_POST["cat"])) {

    $code = $_POST["code"];
    $desc = $_POST["desc"];
    $prix = $_POST["prix"];
    $cat = $_POST["cat"];

    $req = $conn->prepare('INSERT INTO article(code,desq,prix,categorie) VALUES (?,?,?,?)');
    if($req->execute([$code, $desc, $prix, $cat])){
        echo "Article ajouté avec succès";
        header("Location:afficher.php");
        exit();
    }else{
        echo "Hahahaha , article non envoyé";
    }
    
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="perso.css">

    <title>Tableau des ventes</title>
</head>

<body>

    <?php
    include("config.php");

    $req = $conn->query("
    SELECT 
        commande.id_client,
        commande.nom,
        commande.prenom,
        commande.age,
        commande.adresse,
        commande.ville,
        commande.mail,
        commande.date_vente,
        commande.id_commande,
        ligne.code,
        ligne.prix_unitaire,
        ligne.quantite,
        ligne.montant
    FROM commande
    INNER JOIN ligne 
        ON ligne.id_commande = commande.id_commande
");

    $resultats = $req->fetchAll(PDO::FETCH_ASSOC);

    $reqCount = $conn->query("SELECT COUNT(*) as total FROM commande");
    $nombre = $reqCount->fetch(PDO::FETCH_ASSOC)['total'];
    ?>

    <div class="container pt-5">

        <h4 class="text-center ">
            Vous avez effectué <?= $nombre ?> ventes au totale
        </h4>

        <div class="table-responsive">
            <table class="table table-bordered border-success mt-4">

                <thead class="table-warning">
                    <tr>
                        <th>Id client</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Age</th>
                        <th>Adresse</th>
                        <th>Ville</th>
                        <th>Email</th>
                        <th>Date</th>
                        <th>Id commande</th>
                        <th>Code article</th>
                        <th>Prix</th>
                        <th>Quantité</th>
                        <th>Montant</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($resultats as $art) : ?>
                        <tr>
                            <td><?= htmlspecialchars($art["id_client"]) ?></td>
                            <td><?= htmlspecialchars($art["nom"]) ?></td>
                            <td><?= htmlspecialchars($art["prenom"]) ?></td>
                            <td><?= htmlspecialchars($art["age"]) ?></td>
                            <td><?= htmlspecialchars($art["adresse"]) ?></td>
                            <td><?= htmlspecialchars($art["ville"]) ?></td>
                            <td><?= htmlspecialchars($art["mail"]) ?></td>
                            <td><?= htmlspecialchars($art["date_vente"]) ?></td>
                            <td><?= htmlspecialchars($art["id_commande"]) ?></td>

                            <td><?= htmlspecialchars($art["code"]) ?></td>
                            <td><?= htmlspecialchars($art["prix_unitaire"]) ?></td>
                            <td><?= htmlspecialchars($art["quantite"]) ?></td>
                            <td><?= htmlspecialchars($art["montant"]) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>

            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
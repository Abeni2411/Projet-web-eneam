<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="stylesheet" href="perso.css">

    <title>Tableau montrant vos clients</title>
</head>

<body>

    <?php
    include("config.php" );
    $req = $conn->query("SELECT * FROM commande");
    $resultats = $req->fetchAll(PDO::FETCH_ASSOC);

    $nombre = count($resultats);

    ?>
    <div class="container">
        <h3 class="text-center pt-5">Tableau montrant tous vos clients:</h3>
        <div class="table-responsive">
         <table class="table table-bordered border-success">
            <thead class="table-warning">
                <tr>
                    <th scope="col">Id du client</th>
                    <th scope="col">Nom du client</th>
                    <th scope="col">Prénom du client</th>
                    <th scope="col">Age du client</th>
                    <th scope="col">Adresse du client</th>
                    <th scope="col">Ville du client</th>
                    <th scope="col">Email du client</th>
                    <th scope="col">Date de vente</th>
                    <th scope="col">Id de commande</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($resultats as $art) : ?>
                    <tr>
                        <td><?= htmlspecialchars($art["id_client"]) ?></td>
                        <td><?= htmlspecialchars($art["nom"]) ?></td>
                        <td><?= htmlspecialchars($art["prenom"]) ?></td>
                        <td><?= htmlspecialchars($art["age"])  . "" . "ans" ?></td>
                        <td><?= htmlspecialchars($art["adresse"]) ?></td>
                        <td><?= htmlspecialchars($art["ville"]) ?></td>
                        <td><?= htmlspecialchars($art["mail"]) ?></td>
                        <td><?= htmlspecialchars($art["date_vente"]) ?></td>
                        <td><?= htmlspecialchars($art["id_commande"]) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        </div>

    </div><br>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="stylesheet" href="perso.css">

    <title>Lecture de la table article</title>
</head>

<body>
    <?php
    include("config.php");
    $req = $conn->query("SELECT * FROM article");
    $resultats = $req->fetchAll(PDO::FETCH_ASSOC);

    $nombre = count($resultats);


    ?>
    <div class="container">
        <h3 class="text-center pt-5">Tous nos articles par catégorie:</h3>
        <?php
        echo "<h4 style=' text-align: center;  font-family: Arial, Helvetica, sans-serif ;
    font-size: x-large ; ' >Il y a " . $nombre . " articles en magasin</h4>";
        ?>

        <div class="table-responsive">
            <table class="table  pt-4">
                <thead class="table-primary">
                    <tr>
                        <th scope="col" class="bg-white">
                            <div class="d-grid  justify-content-md-start "><button class="btn btn-primary border-warning" type="button"><a class="text-white nav-link " href="accueil.php">Retour</a></button></div>
                        </th>

                        <th scope="col" class="bg-white">
                            <div class="d-grid  justify-content-md-end"><button class="btn btn-primary border-warning" type="button"><a class="text-white nav-link " href="formarticle.php">Ajouter un article</a></button></div>
                        </th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered border-success">
                <thead class="table-warning">
                    <tr>
                        <th scope="col">code article</th>
                        <th scope="col">Description</th>
                        <th scope="col">Prix</th>
                        <th scope="col">catégorie</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($resultats as $art) : ?>
                        <tr>
                            <td><?= htmlspecialchars($art["code"]) ?></td>
                            <td><?= htmlspecialchars($art["desq"]) ?></td>
                            <td><?= htmlspecialchars($art["prix"]) ?></td>
                            <td><?= htmlspecialchars($art["categorie"]) ?></td>
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="stylesheet" href="perso.css">
    <title>Accueil</title>
</head>

<body>
    <?php include("header.php"); ?>

    <div class="container contenu">
        <h1 class="text-center pt-4">A&F Store</h1>
        <ul class="pt-4">

            <ul class="pt-4">
                <li><a class="nav-link" href="afficher.php" id="afficher">Afficher les articles</a></li>
                <li><a class="nav-link" href="vente.php" id="vente">Vente</a></li>
                <li><a class="nav-link" href="effectue-vente.php" id="effetuvente">Effectuer vente</a></li>
                <li><a class="nav-link" href="afficher-client.php" id="liste-client">Listes client</a></li>

            </ul>

    </div>
</body>
<footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2026 A&F Store .Tous droits réservés.</p>
</footer>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="perso.css">

    <title>Effectuer vente</title>
</head>

<body>
    <div class="container">
        <h3 class="text-center pt-5">Effectuer vente</h3>
        <form method="post" action="traitement-vente.php" id="effectuervente" name="effectuervente">
            <div class="mb-3">
                <label for="code_article" class="form-label">Code de l'article</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="code_article">
            </div>
            <div class="mb-3">
                <label for="prix_unitaire" class="form-label">Prix unitaire</label>
                <input type="tel" class="form-control" id="exampleInputPassword1" name="prix_unitaire">
            </div>
            <div class="mb-3">
                <label for="quantite" class="form-label">Quantité</label>
                <input type="tel" class="form-control" id="exampleInputPassword1" name="quantite">
            </div>
            <div class="mb-3">
                <label for="nomclient" class="form-label">Nom du client</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="nom_client">
            </div>
            <div class="mb-3">
                <label for="prenom_client" class="form-label">Prénom du client</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="prenom_client">
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Age du client</label>
                <input type="tel" class="form-control" id="exampleInputPassword1" name="age">
            </div>
            <div class="mb-3">
                <label for="adresse" class="form-label">Adresse du client</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="adresse">
            </div>
            <div class="mb-3">
                <label for="ville" class="form-label">Ville du client</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="ville">
            </div>
            <div class="mb-3">
                <label for="mail" class="form-label">Email du client</label>
                <input type="email" class="form-control" id="exampleInputPassword1" name="mail">
            </div>

            <div class="d-grid gap-1 m-4">
                <button class="btn btn-warning" type="submit">Valider</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>
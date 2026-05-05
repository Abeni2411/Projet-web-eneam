<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="stylesheet" href="stylehp.css">

    <title>ajouter article</title>
</head>

<body>
    <div class="container">
        <form action="traitement11.php" method="post" name="form-signup" id="form-signup">
            <h3 class="text-center pt-5">Ajouter un article</h3>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Code article</label>
                <input type="text" class="form-control" id="email" aria-describedby="emailHelp" name="code" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Description</label>
                <input type="text" class="form-control" id="mdp" name="desc" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Prix</label>
                <input type="tel" class="form-control" id="mdp" name="prix" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Catégorie</label>
                <input type="text" class="form-control" id="mdp" name="cat" required>
            </div>
            <div class="d-grid gap-1 m-4">
                <button class="btn btn-warning" type="submit">Envoyer</button>
            </div>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>
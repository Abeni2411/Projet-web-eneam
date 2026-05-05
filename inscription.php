<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="stylehp.css">
    <title>Inscription</title>
</head>

<body>

    <div class="container py-5">

        <form class="row g-3 needs-validation justify-content-center" method="post" action="inscrire.php">

            <h3 class="text-center mb-4">Inscription</h3>

            <div class="col-12 col-md-6">
                <label class="form-label">Nom</label>
                <input type="text" class="form-control" name="nom" required>
            </div>

            <div class="col-12 col-md-6">
                <label class="form-label">Prénom</label>
                <input type="text" class="form-control" name="prenom" required>
            </div>

            <div class="col-12 col-md-6">
                <label class="form-label">Contact</label>
                <input type="tel" class="form-control" name="contact" required>
            </div>
            <div class="col-12 col-md-6">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="mail" required>
            </div>

            <div class="col-12 col-md-6">
                <label class="form-label">Mot de passe</label>
                <input type="password" class="form-control" name="mdp1" required>
            </div>

            <div class="col-12 col-md-6">
                <label class="form-label">Confirmer mot de passe</label>
                <input type="password" class="form-control" name="mdp2" required>
            </div>

            <div class="d-grid gap-1 m-4">
                <button class="btn btn-warning" type="submit">S'inscrire</button>
            </div>

        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
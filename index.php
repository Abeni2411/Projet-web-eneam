<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        
        <link rel="stylesheet" href="stylehp.css">

    <title>Connexion</title>
</head>

<body>
    
    <div class="container">
        <form action="connexion.php" method="post"  name="form-signup" id="form-signup">
            <h3 class="text-center pt-5">Connexion</h3>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Mot de passe:</label>
                <input type="password" class="form-control" id="mdp" name="mdp" required>
            </div>
            <div class="btn0"><button type="button" class="btn btn1 border-secondary  btn-lg"><a class="nav-link lien1" href="inscription.php">Créer un compte </a></button>   <button type="button" class="btn btn2 border-secondary  btn-lg"><a class="nav-link lien3" href="#">Mot de passe oublié ?</a></button></div>
            <div class="d-grid gap-1 m-4">
                <button class="btn btn-warning" type="submit">Se connecter</button>
            </div>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>
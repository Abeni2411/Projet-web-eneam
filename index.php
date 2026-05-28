<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Connexion Bless Shop — Accédez à votre boutique avec une interface simple et légère." />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <title>Connexio</title>
  <style>
    :root {
      --bg: #f5f6f8;
      --card: #ffffff;
      --text: #2b2b2b;
      --muted: #6c757d;
      --accent: #7a8a9b;
      --border: #e3e7ea;
    }
    body {
      background: var(--bg);
      color: var(--text);
    }
    header, footer { display: none; } /* suppression des éléments décoratifs pour sobriété */
    .brand {
      text-align: center;
      margin-bottom: 1rem;
      color: var(--accent);
      font-weight: 600;
    }
    .card {
      border: 1px solid var(--border);
      border-radius: 8px;
      background: var(--card);
      box-shadow: none;
    }
    .form-label { font-weight: 600; color: #374151; }
    .btn {
      background: #e9ecef;
      border: 1px solid #dde3ea;
    }
    .btn:hover {
      background: #dde3ea;
    }
    .text-muted { color: var(--muted) !important; }
  </style>
</head>

<body class="bg-light">

  <main class="container py-5">

    <div class="row justify-content-center">
      <div class="col-12 col-sm-8 col-md-6 col-lg-4">

        <div class="text-center mb-4 brand" aria-label="Titre">
          Glory Boutique
        </div>

        <div class="card border-0 shadow-sm">
          <div class="card-body p-4 p-md-5">

            <form action="connexion.php" method="post" name="form-signup" id="form-signup" autocomplete="on">

              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="votreEmail@mail.com" required>
              </div>

              <div class="mb-4">
                <label for="mdp" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="mdp" name="mdp" placeholder="Votre mot de passe" required>
              </div>

              <div class="d-grid mb-3">
                <button class="btn btn-light btn-lg fw-semibold" type="submit">
                  Se connecter
                </button>
              </div>

              <div class="d-grid mb-2">
                <a href="inscription.php" class="btn btn-outline-secondary">Créer un compte</a>
              </div>

              <div class="text-center mt-2">
                <a href="#" class="text-muted small">Mot de passe oublié ?</a>
              </div>

            </form>

          </div>
        </div>

      </div>
    </div>

  </main>

  <footer class="bg-light text-center py-4 mt-5" aria-label="Pied de page">
    <div class="container">
      <p class="mb-1" style="color:#5a6470; font-weight:600;">Flora</p>
      <p class="small mb-0" style="color:#6b7685;">&copy; 2026 Flora — Tous droits réservés.</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-ekxjHPBqCLgMjH7R/Kxj3z0eqn2mO3JFQLwNsTaxWJ6BHxVGmj7oVbGQU/S7MBG" crossorigin="anonymous"></script>

</body>

</html>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Plus Jakarta Sans', sans-serif;
      background-color: #f3f1f9;
      color: #1e1635;
    }

    /* ── En-tête ── */
    .page-title {
      font-size: 1.5rem;
      font-weight: 700;
      color: #3b1f8c;
    }

    .page-subtitle {
      font-size: 0.87rem;
      color: #7a6aaa;
    }

    /* ── Card ── */
    .form-card {
      background: #fff;
      border-radius: 14px;
      box-shadow: 0 4px 20px rgba(59, 31, 140, 0.09);
      padding: 2.2rem 2.5rem;
    }

    /* ── Séparateurs de section ── */
    .section-title {
      font-size: 0.75rem;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.07em;
      color: #7a6aaa;
      border-bottom: 1.5px solid #e8e2f7;
      padding-bottom: 0.5rem;
      margin-bottom: 1.1rem;
    }

    .section-icon {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 24px;
      height: 24px;
      background-color: #ede9fb;
      border-radius: 6px;
      margin-right: 0.4rem;
      font-size: 0.85rem;
    }

    /* ── Labels ── */
    .form-label {
      font-size: 0.84rem;
      font-weight: 600;
      color: #3b1f8c;
      margin-bottom: 0.3rem;
    }

    /* ── Inputs ── */
    .form-control {
      font-size: 0.88rem;
      border: 1.5px solid #ddd8f0;
      border-radius: 8px;
      padding: 0.5rem 0.85rem;
      color: #1e1635;
      transition: border-color 0.15s ease, box-shadow 0.15s ease;
    }

    .form-control:focus {
      border-color: #6c3fc5;
      box-shadow: 0 0 0 3px rgba(108, 63, 197, 0.12);
      outline: none;
    }

    .form-control::placeholder {
      color: #b0a8cc;
      font-size: 0.83rem;
    }

    /* ── Bouton valider ── */
    .btn-valider {
      background-color: #5c2fbe;
      color: #fff;
      border: none;
      border-radius: 10px;
      font-size: 0.92rem;
      font-weight: 700;
      padding: 0.75rem;
      width: 100%;
      transition: background 0.15s ease, transform 0.1s ease;
      letter-spacing: 0.02em;
    }

    .btn-valider:hover {
      background-color: #4a25a0;
      transform: translateY(-1px);
    }

    .btn-valider:active {
      transform: translateY(0);
    }

    /* ── Footer ── */
    footer {
      background-color: #1e1635;
      color: #fff;
      padding: 1.5rem 0;
      margin-top: 3rem;
    }

    footer .brand {
      font-weight: 700;
      color: #c4a9ff;
      font-size: 0.95rem;
      margin-bottom: 0.2rem;
    }

    footer .copy {
      font-size: 0.8rem;
      color: #7a6aaa;
      margin: 0;
    }
  </style>

  <title>Effectuer une vente</title>
</head>

<body>

  <main class="container py-5">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8 col-lg-6">

        <!-- En-tête -->
        <div class="text-center mb-4">
          <h2 class="page-title">Effectuer une vente</h2>
          <p class="page-subtitle">Remplissez les informations de l'article et du client.</p>
        </div>

        <div class="form-card">
          <form method="post" action="traitement-vente.php" id="effectuervente" name="effectuervente">

            <!-- Section Article -->
            <div class="section-title">
              <span class="section-icon">🏷</span> Article
            </div>

            <div class="mb-3">
              <label for="code_article" class="form-label">Code de l'article</label>
              <input type="text" class="form-control" id="code_article" name="code_article"
                placeholder="Ex: ART-001" required>
            </div>

            <div class="row g-3 mb-3">
              <div class="col-6">
                <label for="prix_unitaire" class="form-label">Prix unitaire</label>
                <input type="number" class="form-control" id="prix_unitaire" name="prix_unitaire"
                  placeholder="0" min="0" required>
              </div>
              <div class="col-6">
                <label for="quantite" class="form-label">Quantité</label>
                <input type="number" class="form-control" id="quantite" name="quantite"
                  placeholder="1" min="1" required>
              </div>
            </div>

            <!-- Section Client -->
            <div class="section-title mt-4">
              <span class="section-icon">👤</span> Client
            </div>

            <div class="row g-3 mb-3">
              <div class="col-6">
                <label for="nom_client" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom_client" name="nom_client"
                  placeholder="TINKOU" required>
              </div>
              <div class="col-6">
                <label for="prenom_client" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="prenom_client" name="prenom_client"
                  placeholder="Judicael" required>
              </div>
            </div>

            <div class="mb-3">
              <label for="age" class="form-label">Âge</label>
              <input type="number" class="form-control" id="age" name="age"
                placeholder="Ex: 30" min="1" max="120">
            </div>

            <div class="mb-3">
              <label for="adresse" class="form-label">Adresse</label>
              <input type="text" class="form-control" id="adresse" name="adresse"
                placeholder="123 rue des Fleurs">
            </div>

            <div class="mb-3">
              <label for="ville" class="form-label">Ville</label>
              <input type="text" class="form-control" id="ville" name="ville"
                placeholder="Cotonou">
            </div>

            <div class="mb-4">
              <label for="mail" class="form-label">Email</label>
              <input type="email" class="form-control" id="mail" name="mail"
                placeholder="exemple@mail.com">
            </div>

            <!-- Bouton -->
            <button class="btn-valider" type="submit">✔ Valider la vente</button>

          </form>
        </div>

      </div>
    </div>
  </main>

  <footer>
    <div class="container text-center">
      <p class="brand">Glory Boutique</p>
      <p class="copy">&copy; 2026 Flora — Tous droits réservés.</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ekxjHPBqCLgMjH7R/Kxj3z0eqn2mO3JFQLwNsTaxWJ6BHxVGmj7oVbGQU/S7MBG"
    crossorigin="anonymous"></script>

</body>

</html>
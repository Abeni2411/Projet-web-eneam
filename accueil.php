<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Bless Shop - Gestion légère des articles, ventes et clients avec une interface simple." />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <title>Accueil</title>
  <style>
  :root {
    --bg: #f8f9fc;
    --card: #ffffff;
    --text: #2d2d2d;
    --muted: #6c757d;

    --primary: #6c63ff;
    --primary-light: #ecebff;

    --secondary: #ffb84d;
    --secondary-light: #fff4df;

    --border: #e5e7eb;
  }

  body {
    background: linear-gradient(to bottom, #f8f9fc, #eef2ff);
    color: var(--text);
    font-family: Arial, Helvetica, sans-serif;
  }

  header {
    background: white;
    border-bottom: 1px solid var(--border);
    box-shadow: 0 2px 10px rgba(0,0,0,0.03);
  }

  header img {
    height: 58px;
  }

  .logo-row {
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  .site-title {
    font-weight: 700;
    font-size: 1.2rem;
    color: var(--primary);
    margin: 0 1rem;
    text-align: center;
    flex: 1;
  }

  .section-hero {
    background: linear-gradient(135deg, #6c63ff, #8b84ff);
    color: white;
    border-bottom-left-radius: 30px;
    border-bottom-right-radius: 30px;
  }

  .section-hero .badge {
    background: rgba(255,255,255,0.2);
    color: white;
    backdrop-filter: blur(3px);
  }

  .section-hero h1 {
    color: white !important;
  }

  .section-hero p {
    color: #f1f1f1 !important;
  }

  .card {
    border: 1px solid var(--border);
    border-radius: 16px;
    background: var(--card);
    transition: 0.3s ease;
    box-shadow: 0 4px 12px rgba(0,0,0,0.04);
  }

  .card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(108, 99, 255, 0.12);
  }

  .card-title {
    color: var(--primary) !important;
  }

  .card-footer {
    background: transparent;
    border-top: 0;
  }

  .card-footer span {
    color: var(--secondary) !important;
  }

  .btn-light {
    border-radius: 12px;
    font-weight: 600;
    transition: 0.3s;
  }

  .btn-light:hover {
    background: #f1f1ff;
  }

  .btn-outline-secondary {
    border-radius: 12px;
    font-weight: 600;
    border-color: rgba(255,255,255,0.4);
    color: white;
  }

  .btn-outline-secondary:hover {
    background: white;
    color: var(--primary);
  }

  h2 {
    color: var(--primary);
  }

  hr {
    border-color: var(--secondary) !important;
  }

  footer {
    background: white !important;
  }

  footer .fw-semibold {
    color: var(--primary) !important;
  }

  footer .small {
    color: #7b8190 !important;
  }
</style>
</head>

<body class="bg-light">

  <header class="py-3" aria-label="Entête du site">
    <div class="container">
      <div class="logo-row">
        <img src="photo11.jpg" alt="Logo Bless Shop" style="height: 58px; width: auto; object-fit: contain;">
        <h4 class="site-title">Bienvenue sur Glory Boutique</h4>
        <img src="logo-uac.jpg" alt="Logo UAC" style="height: 58px; width: auto; object-fit: contain;">
      </div>
    </div>
  </header>

  <section class="section-hero py-5">
    <div class="container py-3 text-center">
      <span class="badge mb-3 px-3 py-2" style="background:#dfe6ed; color:#1b2a36;">Boutique en ligne</span>
      <h1 class="display-6 fw-semibold mb-3" style="color:#1b2a36;">Glory Boutique</h1>
      <p class="lead text-secondary mx-auto mb-4" style="max-width:700px;">
        Gérez vos articles, vos ventes et votre clientèle via une interface simple et légère.
      </p>
      <div class="d-flex gap-3 justify-content-center flex-wrap">
        <a href="afficher.php" class="btn btn-light btn-lg px-4" style="border:1px solid #d0d7de;">Voir les articles →</a>
        <a href="vente.php" class="btn btn-outline-secondary btn-lg px-4" style="border:1px solid #d0d7de;">Consulter les ventes</a>
      </div>
    </div>
  </section>
  
  <main class="container py-5">

    <h2 class="fw-semibold mb-1">Accès rapide</h2>
    <hr class="border-secondary border-2 opacity-100 w-25 mb-4">

    <div class="row g-4 mb-5">

      <div class="col-12 col-sm-6 col-lg-3">
        <a href="afficher.php" class="card h-100 text-decoration-none border-0 shadow-none">
          <div class="card-body p-4">
          
            <h5 class="card-title fw-semibold" style="color:#1b2a36;">Articles</h5>
            <p class="card-text text-muted small">Gérez votre catalogue.</p>
          </div>
          <div class="card-footer bg-transparent border-0 pb-3 px-4">
            <span class="text-secondary small fw-semibold">Voir les articles →</span>
          </div>
        </a>
      </div>

      <div class="col-12 col-sm-6 col-lg-3">
        <a href="vente.php" class="card h-100 text-decoration-none border-0 shadow-none">
          <div class="card-body p-4">
            <h5 class="card-title fw-semibold" style="color:#1b2a36;">Ventes</h5>
            <p class="card-text text-muted small">Suivez vos ventes et leur historique.</p>
          </div>
          <div class="card-footer bg-transparent border-0 pb-3 px-4">
            <span class="text-secondary small fw-semibold">Voir les ventes →</span>
          </div>
        </a>
      </div>

      <div class="col-12 col-sm-6 col-lg-3">
        <a href="effectue-vente.php" class="card h-100 text-decoration-none border-0 shadow-none">
          <div class="card-body p-4">
            <h5 class="card-title fw-semibold" style="color:#1b2a36;">Effectuer une vente</h5>
            <p class="card-text text-muted small">Enregistrez une nouvelle transaction.</p>
          </div>
          <div class="card-footer bg-transparent border-0 pb-3 px-4">
            <span class="text-secondary small fw-semibold">Démarrer →</span>
          </div>
        </a>
      </div>

      <div class="col-12 col-sm-6 col-lg-3">
        <a href="afficher-client.php" class="card h-100 text-decoration-none border-0 shadow-none">
          <div class="card-body p-4">
            <h5 class="card-title fw-semibold" style="color:#1b2a36;">Clients</h5>
            <p class="card-text text-muted small">Accédez à votre base clientèle.</p>
          </div>
          <div class="card-footer bg-transparent border-0 pb-3 px-4">
            <span class="text-secondary small fw-semibold">Voir les clients →</span>
          </div>
        </a>
      </div>

    </div>

  </main>

  <footer class="bg-light text-dark py-4 mt-5 border-top" aria-label="Pied de page">
    <div class="container text-center">
      <p class="fw-semibold mb-1" style="color:#5a6470;">Glory Boutique</p>
      <p class="small mb-0" style="color:#6b7685;">&copy; 2026 Flora — Tous droits réservés.</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-ekxjHPBqCLgMjH7R/Kxj3z0eqn2mO3JFQLwNsTaxWJ6BHxVGmj7oVbGQU/S7MBG" crossorigin="anonymous"></script>

</body>
</html>

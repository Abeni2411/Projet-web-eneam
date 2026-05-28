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
            background-color: #f4f7f4;
            color: #1a2e1a;
        }

        
        .page-header {
            border-left: 4px solid #2e7d32;
            padding-left: 1rem;
        }

        .page-header h3 {
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 0.2rem;
        }

        .page-header p {
            font-size: 0.88rem;
            color: #5a7a5a;
            margin: 0;
        }

        
        .action-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
        }

        .btn-retour {
            background-color: #fff;
            color: #2e7d32;
            border: 1.5px solid #2e7d32;
            font-size: 0.85rem;
            font-weight: 600;
            padding: 0.4rem 1rem;
            border-radius: 8px;
            text-decoration: none;
            transition: all 0.15s ease;
        }

        .btn-retour:hover {
            background-color: #2e7d32;
            color: #fff;
        }

        .btn-ajouter {
            background-color: #2e7d32;
            color: #fff;
            border: 1.5px solid #2e7d32;
            font-size: 0.85rem;
            font-weight: 600;
            padding: 0.4rem 1rem;
            border-radius: 8px;
            text-decoration: none;
            transition: all 0.15s ease;
        }

        .btn-ajouter:hover {
            background-color: #1b5e20;
            border-color: #1b5e20;
            color: #fff;
        }


        .card-table {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 12px rgba(46, 125, 50, 0.08);
            overflow: hidden;
        }

        .table {
            margin-bottom: 0;
            font-size: 0.88rem;
        }

        .table thead th {
            background-color: #2e7d32;
            color: #fff;
            font-weight: 600;
            font-size: 0.8rem;
            letter-spacing: 0.03em;
            text-transform: uppercase;
            padding: 0.85rem 1rem;
            border: none;
            white-space: nowrap;
        }

        .table tbody tr {
            border-bottom: 1px solid #eef3ee;
            transition: background 0.15s ease;
        }

        .table tbody tr:hover {
            background-color: #f0f7f0;
        }

        .table tbody td {
            padding: 0.75rem 1rem;
            vertical-align: middle;
            border: none;
        }

        
        .badge-code {
            background-color: #e8f5e9;
            color: #2e7d32;
            font-weight: 600;
            font-size: 0.78rem;
            padding: 0.25em 0.6em;
            border-radius: 6px;
            font-family: monospace;
        }

        .badge-categorie {
            background-color: #f1f8e9;
            color: #558b2f;
            font-size: 0.78rem;
            padding: 0.25em 0.65em;
            border-radius: 20px;
            font-weight: 500;
        }

        .prix-text {
            font-weight: 600;
            color: #1b5e20;
        }

        
        .table tfoot td {
            background-color: #f4f7f4;
            font-size: 0.83rem;
            color: #5a7a5a;
            padding: 0.7rem 1rem;
            border-top: 2px solid #e0ebe0;
        }

        
        .empty-state {
            padding: 3rem 1rem;
            text-align: center;
            color: #7a9a7a;
        }

        .empty-state svg {
            opacity: 0.3;
            margin-bottom: 0.75rem;
        }
    </style>

    <title>Articles en magasin</title>
</head>

<body>

    <?php
    include("config.php");
    $req = $conn->query("SELECT * FROM article");
    $resultats = $req->fetchAll(PDO::FETCH_ASSOC);
    $nombre = count($resultats);
    ?>

    <div class="container py-5">

        <!-- En-tête -->
        <div class="page-header mb-4">
            <h3>Articles par catégorie</h3>
            <p><?= $nombre ?> article<?= $nombre > 1 ? 's' : '' ?> en magasin</p>
        </div>

        <!-- Barre d'actions -->
        <div class="action-bar">
            <a href="accueil.php" class="btn-retour">← Retour</a>
            <a href="formarticle.php" class="btn-ajouter">+ Ajouter un article</a>
        </div>

        <!-- Tableau -->
        <div class="card-table">
            <?php if ($nombre > 0) : ?>
                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th>Code article</th>
                                <th>Description</th>
                                <th>Prix</th>
                                <th>Catégorie</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($resultats as $art) : ?>
                                <tr>
                                    <td><span class="badge-code"><?= htmlspecialchars($art["code"]) ?></span></td>
                                    <td><?= htmlspecialchars($art["desq"]) ?></td>
                                    <td><span class="prix-text"><?= htmlspecialchars($art["prix"]) ?> FCFA</span></td>
                                    <td><span class="badge-categorie"><?= htmlspecialchars($art["categorie"]) ?></span></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="4" class="text-end">
                                    Total : <strong><?= $nombre ?></strong> article<?= $nombre > 1 ? 's' : '' ?>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>

            <?php else : ?>
                <div class="empty-state">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="#2e7d32" viewBox="0 0 16 16">
                        <path d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2L9.5 1.5z"/>
                    </svg>
                    <p>Aucun article trouvé dans la base de données.</p>
                </div>
            <?php endif; ?>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>
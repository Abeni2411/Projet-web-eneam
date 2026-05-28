<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f0f4f8;
            color: #1a2535;
        }

        /* ── En-tête ── */
        .page-header {
            border-left: 4px solid #1565c0;
            padding-left: 1rem;
        }

        .page-header h3 {
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 0.2rem;
        }

        .page-header p {
            font-size: 0.88rem;
            color: #4a6080;
            margin: 0;
        }

        /* ── Card tableau ── */
        .card-table {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 12px rgba(21, 101, 192, 0.08);
            overflow: hidden;
        }

        .table {
            margin-bottom: 0;
            font-size: 0.85rem;
        }

        .table thead th {
            background-color: #1565c0;
            color: #fff;
            font-weight: 600;
            font-size: 0.78rem;
            letter-spacing: 0.03em;
            text-transform: uppercase;
            padding: 0.85rem 0.9rem;
            border: none;
            white-space: nowrap;
        }

        /* Séparation visuelle entre infos client et infos commande */
        .table thead th.sep-left {
            border-left: 2px solid rgba(255,255,255,0.25);
        }

        .table tbody tr {
            border-bottom: 1px solid #edf1f7;
            transition: background 0.15s ease;
        }

        .table tbody tr:hover {
            background-color: #eef3fb;
        }

        .table tbody td {
            padding: 0.7rem 0.9rem;
            vertical-align: middle;
            border: none;
        }

        .table tbody td.sep-left {
            border-left: 2px solid #e8edf5;
        }

        /* ── Badges & pills ── */
        .badge-id {
            background-color: #e3eaf7;
            color: #1565c0;
            font-weight: 600;
            font-size: 0.75rem;
            padding: 0.22em 0.55em;
            border-radius: 6px;
        }

        .badge-code {
            background-color: #e8f0fe;
            color: #1a56db;
            font-weight: 600;
            font-size: 0.75rem;
            padding: 0.22em 0.55em;
            border-radius: 6px;
            font-family: monospace;
        }

        .badge-ville {
            background-color: #e8f4fd;
            color: #0277bd;
            font-size: 0.75rem;
            padding: 0.22em 0.6em;
            border-radius: 20px;
            font-weight: 500;
        }

        .age-pill {
            background-color: #fce4ec;
            color: #c62828;
            font-size: 0.78rem;
            padding: 0.2em 0.55em;
            border-radius: 20px;
            font-weight: 500;
        }

        .prix-text {
            font-weight: 600;
            color: #0d47a1;
        }

        .montant-text {
            font-weight: 700;
            color: #1b5e20;
            background-color: #e8f5e9;
            padding: 0.2em 0.55em;
            border-radius: 6px;
            font-size: 0.82rem;
        }

        .quantite-text {
            font-weight: 600;
            color: #4a4a4a;
        }

        /* ── Pied de tableau ── */
        .table tfoot td {
            background-color: #f0f4f8;
            font-size: 0.83rem;
            color: #4a6080;
            padding: 0.7rem 1rem;
            border-top: 2px solid #dce5f0;
        }

        /* ── État vide ── */
        .empty-state {
            padding: 3rem 1rem;
            text-align: center;
            color: #7a90aa;
        }

        .empty-state svg {
            opacity: 0.3;
            margin-bottom: 0.75rem;
        }
    </style>

    <title>Tableau des ventes</title>
</head>

<body>

    <?php
    include("config.php");

    $req = $conn->query("
        SELECT 
            commande.id_client,
            commande.nom,
            commande.prenom,
            commande.age,
            commande.adresse,
            commande.ville,
            commande.mail,
            commande.date_vente,
            commande.id_commande,
            ligne.code,
            ligne.prix_unitaire,
            ligne.quantite,
            ligne.montant
        FROM commande
        INNER JOIN ligne 
            ON ligne.id_commande = commande.id_commande
    ");

    $resultats = $req->fetchAll(PDO::FETCH_ASSOC);

    $reqCount = $conn->query("SELECT COUNT(*) as total FROM commande");
    $nombre = $reqCount->fetch(PDO::FETCH_ASSOC)['total'];
    ?>

    <div class="container py-5">

        <!-- En-tête -->
        <div class="page-header mb-4">
            <h3>Tableau des ventes</h3>
            <p><?= $nombre ?> vente<?= $nombre > 1 ? 's' : '' ?> effectuée<?= $nombre > 1 ? 's' : '' ?> au total</p>
        </div>

        <!-- Tableau -->
        <div class="card-table">
            <?php if (count($resultats) > 0) : ?>
                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <!-- Infos client -->
                                <th>Id client</th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Âge</th>
                                <th>Adresse</th>
                                <th>Ville</th>
                                <th>Email</th>
                                <th>Date</th>
                                <th>Id commande</th>
                                <!-- Infos ligne de commande -->
                                <th class="sep-left">Code article</th>
                                <th>Prix unit.</th>
                                <th>Quantité</th>
                                <th>Montant</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($resultats as $art) : ?>
                                <tr>
                                    <td><span class="badge-id">#<?= htmlspecialchars($art["id_client"]) ?></span></td>
                                    <td><strong><?= htmlspecialchars($art["nom"]) ?></strong></td>
                                    <td><?= htmlspecialchars($art["prenom"]) ?></td>
                                    <td><span class="age-pill"><?= htmlspecialchars($art["age"]) ?> ans</span></td>
                                    <td><?= htmlspecialchars($art["adresse"]) ?></td>
                                    <td><span class="badge-ville"><?= htmlspecialchars($art["ville"]) ?></span></td>
                                    <td><?= htmlspecialchars($art["mail"]) ?></td>
                                    <td><?= htmlspecialchars($art["date_vente"]) ?></td>
                                    <td><span class="badge-id"><?= htmlspecialchars($art["id_commande"]) ?></span></td>

                                    <td class="sep-left"><span class="badge-code"><?= htmlspecialchars($art["code"]) ?></span></td>
                                    <td><span class="prix-text"><?= htmlspecialchars($art["prix_unitaire"]) ?> FCFA</span></td>
                                    <td><span class="quantite-text">×<?= htmlspecialchars($art["quantite"]) ?></span></td>
                                    <td><span class="montant-text"><?= htmlspecialchars($art["montant"]) ?> FCFA</span></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="13" class="text-end">
                                    Total : <strong><?= $nombre ?></strong> vente<?= $nombre > 1 ? 's' : '' ?>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>

            <?php else : ?>
                <div class="empty-state">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="#1565c0" viewBox="0 0 16 16">
                        <path d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2L9.5 1.5z"/>
                    </svg>
                    <p>Aucune vente trouvée.</p>
                </div>
            <?php endif; ?>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
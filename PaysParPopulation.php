<?php
// Inclure les fichiers nécessaires pour la connexion à la base de données
require_once 'inc/manager-db.php';



// Récupérer la liste des pays triés par population
$desPays = getPaysParPopulation(); 

?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pays triés par Population</title>

    <!-- Inclure Bootstrap pour un style de tableau propre -->
    <link href="assets/bootstrap-4.4.1-dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Collez ici le code CSS fourni précédemment */
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            color: #333;
            line-height: 1.6;
            margin: 20px;
        }

        header {
            text-align: center;
            margin-bottom: 30px;
        }

        header h1 {
            font-size: 36px;
            color: #007bff;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 10px;
        }

        header p {
            font-size: 18px;
            color: #555;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 40px;
        }

        th {
            background-color: #007bff;
            color: #fff;
            text-align: left;
            padding: 12px;
            font-size: 16px;
        }

        td {
            background-color: #fff;
            color: #333;
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        td, th {
            font-size: 14px;
            text-align: right;
        }

        td:first-child, th:first-child {
            text-align: left;
        }

        td:empty {
            color: #999;
            font-style: italic;
        }

        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        .ui.red.inverted.segment {
            background-color: #ff4d4d;
            color: #fff;
            padding: 20px;
            border-radius: 4px;
            margin-top: 20px;
        }

        .ui.red.inverted.segment p {
            font-size: 18px;
            font-weight: bold;
        }

        a {
            text-decoration: none;
            color: #007bff;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #0056b3;
        }

        section {
            margin-bottom: 40px;
        }
    </style>
</head>


    <div class="container">
        <h1 class="my-4">Les pays triés par population</h1>

        <!-- Bouton pour revenir à la page d'accueil (en haut de la page) -->
    <div style="text-align: center; margin-bottom: 30px;">
        <a href="index.php">
            <button>Retour à l'Accueil</button>
        </a>
    </div>
        
        <table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Nom du pays</th>
            <th>Population</th>
            <th>PIB (USD)</th>
            <th>Espérance de vie</th>
            <th>Superficie (km²)</th>
            <th>Président</th>
            <th>Capitale</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($desPays as $pays): ?>
            <tr>
                <td><?= $pays->Name ?></td>
                <td><?= number_format($pays->Population, 0, ',', ' ') ?></td>
                <td>
                    <?php 
                    // Vérifier si la propriété 'GDP' est définie et non vide
                    if (isset($pays->GDP) && !empty($pays->GDP)) {
                        echo number_format($pays->GDP, 2, ',', ' ') . " USD";
                    } else {
                        echo 'N/A';  // Afficher 'N/A' si la valeur est absente ou NULL
                    }
                    ?>
                </td>
                <td>
                    <?php 
                    // Vérifier si l'espérance de vie est définie
                    if (isset($pays->LifeExpectancy) && !empty($pays->LifeExpectancy)) {
                        echo $pays->LifeExpectancy . " ans";
                    } else {
                        echo 'N/A';  // Afficher 'N/A' si la valeur est absente ou NULL
                    }
                    ?>
                </td>
                <td>
                    <?php 
                    // Vérifier si la superficie est définie
                    if (isset($pays->SurfaceArea) && !empty($pays->SurfaceArea)) {
                        echo number_format($pays->SurfaceArea, 2, ',', ' ') . " km²";
                    } else {
                        echo 'N/A';  // Afficher 'N/A' si la valeur est absente ou NULL
                    }
                    ?>
                </td>
                <td>
                    <?php 
                    // Vérifier si le président est défini
                    if (isset($pays->HeadOfState) && !empty($pays->HeadOfState)) {
                        echo $pays->HeadOfState;
                    } else {
                        echo 'Inconnu';  // Afficher 'Inconnu' si la valeur est absente ou NULL
                    }
                    ?>
                </td>
                <td>
                    <?php 
                    // Appel de la fonction pour obtenir la capitale du pays
                    $capitale = getCapital($pays->Capital);
                    echo $capitale ? $capitale->Name : 'Non renseigné'; 
                    ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
    </div>

    <!-- Inclure les scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="assets/bootstrap-4.4.1-dist/js/bootstrap.bundle.min.js"></script>
</body>

    <!-- Bouton pour revenir à la page d'accueil -->
    <div style="text-align: center; margin-top: 20px;">
        <a href="index.php">
            <button>Retour à l'Accueil</button>
        </a>
    </div>

</html>

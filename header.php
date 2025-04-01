<?php
/**
 * Fragment Header HTML page
 *
 * PHP version 7
 *
 * @category  Page_Fragment
 * @package   Application
 * @author    SIO-SLAM <sio@ldv-melun.org>
 * @copyright 2019-2021 SIO-SLAM
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link      https://github.com/sio-melun/geoworld
 */
?>
<!doctype html>
<html lang="fr" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Homepage : GeoWorld</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap-4.4.1-dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Réduire l'espacement des éléments et améliorer la lisibilité */
body {
    font-family: 'Arial', sans-serif; /* Utilisation de la police Arial pour une lecture fluide */
    background-color: #f9f9f9; /* Couleur de fond claire pour le corps de la page */
    color: #333; /* Couleur de texte sombre pour une meilleure lisibilité */
    margin: 0; /* Supprime les marges par défaut */
    padding: 0; /* Supprime le padding par défaut */
}

/* En-tête de la page */
header {
    background-color: #343a40; /* Couleur de fond sombre pour l'en-tête */
    color: white; /* Texte blanc pour contraster avec le fond sombre */
    padding: 15px 0; /* Ajoute un espacement vertical autour du contenu de l'en-tête */
}

.navbar-nav .nav-item .nav-link {
    color: #ffffff !important; /* Les liens de navigation seront blancs */
    font-size: 1.1rem; /* Taille de police légèrement plus grande pour les éléments de menu */
}

.navbar-nav .nav-item .nav-link:hover {
    color: #f8f9fa !important; /* Couleur de texte blanche pour les liens au survol */
}

/* Style du tableau */
table {
    margin-top: 20px; /* Ajoute un espacement supérieur au tableau pour l'éloigner du contenu précédent */
    width: 100%; /* Le tableau prend toute la largeur de son conteneur */
    border-collapse: collapse; /* Fusionne les bordures pour une présentation plus nette */
    background-color: white; /* Le fond du tableau est blanc pour contraster avec le fond général */
}

th, td {
    padding: 12px; /* Espacement autour du contenu des cellules pour améliorer la lisibilité */
    text-align: left; /* Aligne le texte des cellules à gauche */
    border-bottom: 1px solid #ddd; /* Ajoute une ligne de séparation légère entre les lignes du tableau */
}

/* En-têtes du tableau */
th {
    background-color: #007bff; /* Fond bleu pour les en-têtes */
    color: white; /* Texte blanc pour les en-têtes */
}

/* Lignes du tableau */
tr:nth-child(even) {
    background-color: #f2f2f2; /* Couleur de fond gris clair pour les lignes paires */
}

tr:hover {
    background-color: #e9ecef; /* Fond légèrement plus foncé lors du survol des lignes */
}

/* Style pour les boutons dans le menu */
.navbar .navbar-toggler {
    background-color: #007bff; /* Couleur de fond bleue pour le bouton de menu mobile */
}

/* Dropdown style */
.dropdown-menu {
    background-color: #f8f9fa; /* Fond clair pour les menus déroulants */
    border: 1px solid #ddd; /* Bordure légère autour du menu déroulant */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Ombre légère pour donner de la profondeur au menu */
}

.dropdown-item {
    padding: 10px 20px; /* Espacement intérieur pour les éléments du menu déroulant */
    font-size: 1rem; /* Taille de police standard pour les éléments du menu */
}

.dropdown-item:hover {
    background-color: #007bff; /* Fond bleu lors du survol des éléments du menu déroulant */
    color: white; /* Texte blanc au survol */
}

/* Style pour les liens du menu */
.nav-link {
    color: #ffffff !important; /* Les liens du menu sont blancs par défaut */
}

.nav-link:hover {
    color: #007bff !important; /* Les liens deviennent bleus au survol */
}

/* Formulaire de recherche */
.form-inline {
    margin-top: 15px; /* Espacement entre le formulaire et les éléments précédents */
}

.form-control {
    width: 200px; /* Largeur du champ de recherche */
    border-radius: 50px; /* Coins arrondis pour un look moderne */
    border: 1px solid #ddd; /* Bordure légère autour du champ de recherche */
    padding: 8px; /* Espacement intérieur pour le confort de saisie */
    transition: border-color 0.3s; /* Transition fluide lors du changement de couleur de la bordure */
}

.form-control:focus {
    border-color: #007bff; /* Bordure bleue lorsque le champ de recherche est sélectionné */
}

.btn-secondary {
    border-radius: 50px; /* Bord arrondi pour le bouton */
    padding: 8px 20px; /* Espacement intérieur du bouton */
    background-color: #007bff; /* Fond bleu pour le bouton */
    border: none; /* Aucune bordure autour du bouton */
}

.btn-secondary:hover {
    background-color: #0056b3; /* Fond bleu plus foncé au survol du bouton */
}

/* Style pour le footer */
footer {
    background-color: #343a40; /* Fond sombre pour le pied de page */
    color: white; /* Texte blanc pour contraster avec le fond sombre */
    padding: 10px 0; /* Espacement vertical autour du contenu du pied de page */
    text-align: center; /* Centre le texte dans le pied de page */
}

/* Ajustement pour les images des drapeaux */
img {
    border-radius: 5px; /* Coins arrondis pour les images des drapeaux */
}

/* Styles pour l'en-tête des sections principales */
h1 {
    font-size: 2.5rem; /* Grande taille de police pour les titres */
    margin-bottom: 20px; /* Espacement sous les titres */
    color: #007bff; /* Couleur bleue pour les titres */
}

            /* Réinitialisation de certaines propriétés par défaut du navigateur */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Définition de la police principale pour toute la page */
body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f9;
    color: #333;
    line-height: 1.6;
    margin: 20px;
}

/* En-tête */
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

/* Tableau */
table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 40px;
}

/* En-tête du tableau */
th {
    background-color: #007bff;
    color: #fff;
    text-align: left;
    padding: 12px;
    font-size: 16px;
}

/* Corps du tableau */
td {
    background-color: #fff;
    color: #333;
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

/* Ajout de survol pour les lignes du tableau */
tr:hover {
    background-color: #f1f1f1;
}

/* Formatage des valeurs numériques avec un style élégant */
td, th {
    font-size: 14px;
    text-align: right;
}

td:first-child, th:first-child {
    text-align: left;
}

/* Gestion des valeurs manquantes : N/A */
td:empty {
    color: #999;
    font-style: italic;
}

/* Style pour les boutons et actions (si ajoutées) */
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

/* Styles pour les messages d'erreur */
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

/* Style des liens */
a {
    text-decoration: none;
    color: #007bff;
    transition: color 0.3s ease;
}

a:hover {
    color: #0056b3;
}

/* Ajout de marge et d'alignement pour les sections */
section {
    margin-bottom: 40px;
}


    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }

        .dropdown-menu {
            max-height: 400px;
            overflow-y: auto;
        }
    }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/custom.css" rel="stylesheet">
</head>

<body class="d-flex flex-column h-100">
    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href="index.php">GeoWorld</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
                aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="PaysParPopulation.php">Pays triés par Population</a> <!-- Nouveau lien -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                    <?php
require_once 'inc/manager-db.php';
$lesContinents = getContinent() ;
$lesPays = getAllCountries();
1
//var_dump($lesContinents);
?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Continent</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <?php foreach($lesContinents as $leContinent) : ?>
                            <a class="dropdown-item"
                                href="index2.php?name=<?= $leContinent->continent ; ?>"><?= $leContinent->continent; ?>
                            </a>
                            <?php endforeach ; ?>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Pays</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <?php foreach($lesPays as $lepays) : ?>
                            <a class="dropdown-item"
                                href="details.php?id=<?= $lepays->id ; ?>"><?= $lepays->Name; ?>
                            </a>                           
                            <?php endforeach ; ?>
                        </div>
                    </li>
                    </ul>
                                                                            
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="login">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="register">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="todo-projet.php">
                                Présentation-Atelier-de-Prof-SLAM
                            </a>
                        </li>
                    </ul>                    
                    
                            
                            

                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                    </form>
            </div>
            <?php
          ?>
        </nav>
    </header>
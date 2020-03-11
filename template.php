<?php
$page = $_GET["page"];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Le Numérique et Le Marché de L'Emploi.</title>
    <link rel="stylesheet" type="text/css" href="maquette.css">
</head>
<body>
    <h1>Le Numérique et Le Marché de L'Emploi.</h1>
        <ul class="listclass">
        <li><a href="template.php?page=emploi">L'emploi Développeurs Web.</a></li>
        <li><a href="template.php?page=nouveaute">Les Nouveautés.</a></li>
        <li><a href="template.php?page=sans_emploi">Le Numérique, Fossoyeur de l'Emploi.</a></li>
        </ul>

        <?php require "html/$page.php"?>
</body>
</html>
<?php

require_once('connexion.php');

$queryStart = $db->prepare("SELECT * FROM `country` WHERE `Name` LIKE CONCAT(:input, '%')");
$queryStart->execute(array(
    ':input' => htmlspecialchars($_GET['search'])
));
$resStart = $queryStart->fetchAll(PDO::FETCH_ASSOC);

$queryContain = $db->prepare("SELECT * FROM `country` WHERE `Name` LIKE CONCAT('%', :input, '%')");
$queryContain->execute(array(
    ':input' => htmlspecialchars($_GET['search'])
));
$resContain = $queryContain->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <title>Autocomplétion</title>
</head>
<body>

<main id="element">
    <form method="GET">
        <div class="row">
            <div class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix"></i>
                        <input type="text" id="autocomplete-input" class="autocomplete" name="search" autocomplete="off">
                        <label for="autocomplete-input"></label>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <section class="sectionUp"></section>
    <section class="sectionDown"></section>
    <article class="results">
        <?php foreach($resStart as $key => $value): ?>
        <div class = "info" style="border: solid 0.5px;padding: 8px;">

            <p><?= $value['Capitale'].'('.$value['Description'].')'. ' - ' . $value['Description'] ?></p>
            <a href="element.php?id=<?= $value['Name'] ?>">Details..</a>
        </div>
        <?php endforeach ?>
    </article>
    <article class="results">
        <?php foreach($resContain as $key => $value): ?>
        <div class = "info">
            <a href="element.php?id=<?= $value['Name'] ?>"><?= $value['Capitale'] . ' - ' . $value['Description'] ?></a>
            <p><?= $value['Population'] ?></p>
            <p><?= $value['Capitale'].'('.$value['Description'].')'. ' - ' . $value['Description'] ?></p>
            <a href="element.php?id=<?= $value['Name'] ?>">Voir plus...</a>
        </div>
        <?php endforeach ?>
    </article>
</main>
</body>
</html>

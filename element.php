<?php

require_once('connexion.php');

$item = htmlspecialchars($_GET['id']);

$query = $db->prepare("SELECT * FROM `country` WHERE `Name` = :item");
$query->execute(array(
        ':item' => $item
));
$res = $query->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <title>- Autocomplétion</title>
</head>
<body>

<main style="height:auto !important;">
    <form method="GET">
        <div class="row">
            <div class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                       <i class="material-icons prefix"></i>
                        <input type="text" id="autocomplete-input" placeholder="Search a country.." name="search" autocomplete="off">
                        <label for="autocomplete-input">
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </form>


    <section class="sectionUp"></section>
    <section class="sectionDown"></section>
    <article>
        <h2><?= $res['Name'] ?></h2>
        <table>
           <?php foreach($res as $key => $value):?>
            <tr>
                <td class="tdKey"><?= $key?>:&nbsp &nbsp</td>
                <td class='tdValue'><?= $value ?></td>
            </tr>
            <?php endforeach ?>
        </table>

    </article>
    <a href="index.php"><button>accueil</button></a>

</main>
</body>
</html>

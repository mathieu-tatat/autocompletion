<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <title>Autocomplétion</title>
</head>
<body>
<main class="search">

    <form method="GET">
        <div class="row">
            <div class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix"></i>
                        <input type="text" id="autocomplete-input" placeholder="search a country"class="autocomplete" name="search"autocomplete="off">
                        <label for="autocomplete-input"></label>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <section class="sectionUp"></section>
    <section class="sectionDown"></section>
</main>
    <H1 style="display: flex;justify-content: center;position: relative;top: 125px;font-size: 60px;">Bienvenue sur infos country :</H1>

    <a style="position: relative;top: 125px;" href="https://github.com/mathieu-tatat/autocompletion"><img src="logoGithub.svg" alt=""></a>

</body>
</html>

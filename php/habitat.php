<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet">
    <title>Accueil Zoo Arcadia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</head>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Accueil du Zoo</title>


</head>

<body>


    <?php
    include '../html/modules/navbar.html';
    ?>
    <img src="../Images/elementsCommuns/banniereZoo.jpg" class="img-fluid" alt="...">

    <div style="padding: 20px;">
        <h1>Les différents habitats</h1>
        <p>A brocéliande vous trouverez différents habitats existant depuis 1996.<br>
            La Savane<br>
        <div id="La Savane"><img src="../images/habitat_savane/savane-1.jpg" height="200px" width="300px"></div><br>
        <br>La Jungle <br>
        <div id="La Jungle"><img src="../images/habitat_jungle/jungle.jpg" height="200px" width="300px"></div><br>
        <br>Les Marais<br>
        <div id="Les Marais"><img src="../images/habitat_marais/marais.jpg" height="200px" width="300px"></div><br>
        </p>
    </div>
    <footer>

        <?php
        include '../html/modules/footer.html';
        ?>

    </footer>

</body>

</html>
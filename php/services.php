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


<title>Accueil du Zoo</title>



<body>
    <header>
        <?php
        include '../html/modules/navbar.html';
        ?>

        <img src="../Images/elementsCommuns/banniereZoo.jpg" class="img-fluid" alt="...">
        <div style="padding: 20px;">
    </header>
    <h1>Les différents habitats</h1>

    <p>A brocéliande Nous vous proposons différents services.<br>
    <div class="services">
        <img src="../Images/Services/restaurationZooSigean.jpg" class="Services" height="200px" width="300px">Restauration<br>
        <br>
        <img src="../Images/Services/SafaritrainLisieux.jpg" class="Services" height="200px" width="300px">Safari en Train<br>
        <br>
        <img src="../Images/Services/visiteTouristiqueZoo.jpeg" class="Services" height="200px" width="300px">Visite Touristique<br>
        <br>
        </p>
    </div>

</body>

</html>
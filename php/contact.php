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

    <div style="padding: 20px;">
        <h1>Nous Contacter</h1>
        <p>Pour toute information relatives aux activités du Zoo n'hésitez pas à nous envoyer un message.
            <br>Nous serons ravis de vous retrouver parmi nos visiteurs
        </p>
    </div>
    <div>
        <form action="/ma-page-de-traitement" method="post">
            <ul>
                <li>
                    <label for="name">Nom&nbsp;:</label>
                    <input type="text" id="name" name="user_name" />
                </li>
                <li>
                    <label for="mail">E-mail&nbsp;:</label>
                    <input type="email" id="mail" name="user_mail" />
                </li>
                <li>
                    <label for="msg">Message&nbsp;:</label>
                    <textarea id="msg" name="user_message"></textarea>
                </li>
            </ul>
        </form>
        <div class="button">
            <button type="submit">Envoyer le message</button>
        </div>
        <a href="../index.php"><button>Retour à l'accueil</button></a>
        <a id="scrollUp" href="#top" style="position: fixed; z-index: 2147483647;">
            <i class="ion-chevron-right"></i>
            <i class="ion-chevron-right"></i>
        </a>
    </div>
</body>

</html>
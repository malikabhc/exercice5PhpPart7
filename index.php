<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice5/7</title>
    </head>
    <body>
        <form action="index.php" method="GET">
            <label for="civility">Civilité :</label>
            <select name="civility" id="civility">
                <!-- option selected disabled pratique pour éviter de valider qqch par erreur dans une liste déroulante -->
                <option selected disabled>Veuillez sélectionner une option</option>
                <option value="Monsieur">Monsieur</option>
                <option value="Madame">Madame</option>
            </select>
            <label for="lastname">Votre nom : </label><input type="text" name="lastname" placeholder="Nom" />
            <label for="firstname">Votre prénom : </label><input type="text" name="firstname" placeholder="Prénom" />
            <input type="submit" name="submit" value="Valider" />
        </form>
        <p>
        <?php
        if (!empty($_GET['civility']) && !empty($_GET['firstname']) && !empty($_GET['lastname'])) {
            echo $_GET['civility'] . ' ' . $_GET['firstname'] . ' ' . $_GET['lastname'];
        } else {
            echo 'Veuillez compléter les champs manquants';
        }
        ?>
        </p>
    </body>
</html>
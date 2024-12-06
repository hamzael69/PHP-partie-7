

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <form action="" method="post">

        <label for="gender">Civilité</label>
        <select name="gender" id="gender">
            <option value="homme">Mr</option>
            <option value="femme">Mme</option>
        </select>

        <label for="lastName">Nom</label>
        <input type="text" name="lastName" id="lastName">

        <label for="firstName">Prénom</label>
        <input type="text" name="firstName" id="firstName">

        <input type="submit" value="envoyer">

    </form>

    <?php

if (isset($_POST["gender"], $_POST["lastName"], $_POST["firstName"])) {
    echo $_POST["gender"] . $_POST["lastName"] . $_POST["firstName"];
}

?>

</body>

</html>
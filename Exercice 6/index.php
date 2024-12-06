<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php

    if (isset($_POST['gender'], $_POST["lastName"], $_POST["firstName"])) {

        $gender = htmlspecialchars(trim($_POST['gender']));
        $lastName = htmlspecialchars(trim($_POST['lastName']));
        $firstName = htmlspecialchars(trim($_POST['firstName']));

        if (!empty($_POST["lastName"]) && !empty($_POST["firstName"])) {
            echo "Bonjour {$gender} {$firstName} {$lastName} ";
            exit;
        } else {
            echo '<p style="color: red">Il faut remplir tous les champs !</p>';
        }
    }

    ?>

    <form action="index.php" method="post">

        <label for="gender">Civilité</label>
        <select name="gender" id="gender">
            <option value="Mr" <?php if(isset($gender)) if($gender === "Mr") echo "selected" ?> >Mr</option>
            <option value="Mme"<?php if(isset($gender)) if($gender === "Mme") echo "selected" ?> >Mme</option>
        </select>

        <label for="lastName">Nom</label>
        <input type="text" name="lastName" id="lastName"  value="<?php if(isset($lastName)) if(!empty($lastName)) echo $lastName   ?>" />

        <label for="firstName">Prénom</label>
        <input type="text" name="firstName" id="firstName" value="<?php if(isset($firstName)) if(!empty($firstName)) echo $firstName   ?>">

        <input type="submit" value="envoyer">

    </form>



</body>

</html>
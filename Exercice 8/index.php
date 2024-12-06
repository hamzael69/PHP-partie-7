<?php

function showFormulaire()
{
?>
    <form action="index.php" method="post" enctype="multipart/form-data">

        <label for="gender">Civilité</label>
        <select name="gender" id="gender">
            <option value="Mr">Mr</option>
            <option value="Mme">Mme</option>
        </select>

        <label for="lastName">Nom</label>
        <input type="text" name="lastName" id="lastName">

        <label for="firstName">Prénom</label>
        <input type="text" name="firstName" id="firstName">

        <input type="file" >

        <input type="submit" value="envoyer">

    </form>

<?php
}

?>

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

    if(!empty($_POST["lastName"]) && !empty($_POST["firstName"])){
        echo "Bonjour " . $_POST["gender"] . " " . $_POST["lastName"] . " " . $_POST["firstName"];
        return;
    }

    showFormulaire();
    
} else {
    showFormulaire();
}

?>
    
</body>
</html>
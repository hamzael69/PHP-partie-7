<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('location: ./index.php');
    return;
}

if(isset($_POST["lastName"], $_POST["firstName"])){
    echo "Bonjour" . " " . $_POST["lastName"] . " " . $_POST["firstName"] ;
}
<?php

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    header('location: ./index.php');
    return;
}

if(isset($_GET["lastName"], $_GET["firstName"])){
    echo "Bonjour" . " " . $_GET["lastName"] . " " . $_GET["firstName"] ;
}
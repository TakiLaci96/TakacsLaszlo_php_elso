<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    http_response_code(405);
    die();
}
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Felvétel</title>
</head>
<body>
    <?php
    $errors = [];
    if (!isset($_POST["neve"]) || empty($_POST["neve"])) {
        $errors[] = "Név megadása kötelező!";
    }
    if (!isset($_POST["neme"]) || empty($_POST["neme"])) {
        $errors[] = "Nem megadása kötelező!";
    }
    if (!isset($_POST["eletkor"]) || empty($_POST["eletkor"])) {
        $errors[] = "Életkor megadása kötelező!";
    }
    /*
    if (!isset($_POST["nyilvantartasba_vetel"]) || empty($_POST["nyilvantartasba_vetel"])) {
        $errors[] = "Nyilvántartásba vételi dátum megadása kötelező!";
    }
    */
    if (!isset($_POST["ivartalanitott"]) || empty($_POST["ivartalanitott"])) {
        $errors[] = "Ivartalanítottság megválaszolása kötelező!";
    }
    if (empty($errors)) {
        require_once "DogTableMethods.php";
        $database = new DogTableMethods();
        $database->create($_POST);
    }

    if (empty($errors)) {
        $_SESSION['state'] = "success";
        $_SESSION['message'] = "Sikeres felvétel!";
    } else {
        $_SESSION['state'] = "error";
        $_SESSION['message'] = "Hiba történt a felvétel során!";
        $_SESSION['errors'] = $errors;
    }
    header("Location: felvetel.php");

    ?>
    
</body>
</html>
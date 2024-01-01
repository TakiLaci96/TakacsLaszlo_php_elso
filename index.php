<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Kutyák nyilvántartása</title>
</head>
<body class="container">

<?php
require_once "DogTableMethods.php";
$database = new DogTableMethods();
$kutyak = $database->allDogs();
?>
        <nav class="nav navbar-light bg-light">
        <a href="#">
            <img src="/dog.png" alt="logo">
        </a>
        <a class="nav-link" href="index.php">Nyilvántartott kutyák</a>
        <a class="nav-link" href="felvetel.php">Kutyák felvétele</a>
        </nav>

        <table class="table table-striped table-hover mt-3">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Neve</th>
                    <th>Neme</th>
                    <th>Életkora</th>
                    <th>Nyilvántartásba vétel</th>
                    <th>Ivartalanított-e</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($kutyak as $kutya): ?>
                    <tr>
                        <td><?php echo $kutya['id'] ?></td>
                        <td><?php echo $kutya['neve'] ?></td>
                        <td><?php echo $kutya['neme'] ?></td>
                        <td><?php echo $kutya['eletkor'] ?></td>
                        <td><?php echo $kutya['nyilvantartasba_vetel'] ?></td>
                        <td><?php echo $kutya['ivartalanitott'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
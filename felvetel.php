<?php
session_start();
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Felvétel</title>
</head>
<body class="container">
    <nav class="nav navbar-light bg-light">
        <a href="#">
            <img src="/dog.png" alt="logo">
        </a>
        <a class="nav-link" href="index.php">Nyilvántartott kutyák</a>
        <a class="nav-link" href="felvetel.php">Kutyák felvétele</a>
    </nav>

    <?php
        if (isset($_SESSION['state'])) {
            echo "<p>".$_SESSION['message']."</p>";
            switch ($_SESSION['state']) {
                case 'success':
                    break;
                case 'error':
                    foreach ($_SESSION['errors'] as $error) {
                        echo "<p>$error</p>";
                    }
                    break;
            }
            unset($_SESSION['state']);
            unset($_SESSION['message']);
            unset($_SESSION['errors']);
        }
    ?>

    <form action="felvetel_feldolgozasa.php" method="post">
        <div class="card">
            <div class="card-header">
                <h2>Kutyák felvétele</h2>
            </div>

            <input type="hidden" id="id">
            <div class="card-body">
                <div>
                    <label for="neve" class="form-label">Neve</label>
                    <input type="text" name="neve" id="neve" class="form-control" required>
                </div>
                <div>
                    <label for="neme" class="form-label">Neme</label>
                    <input type="text" name="neme" id="neme" class="form-control" required>
                </div>
                <div>
                    <label for="eletkor" class="form-label">Életkora</label>
                    <input type="number" name="eletkor" id="eletkor" class="form-control" required>
                </div>
                <div>
                    <label for="nyilvantartasba_vetel" class="form-label">Nyilvántartásba vétel</label>
                    <input type="date" name="nyilvantartasba_vetel" id="nyilvantartasba_vetel" required>
                </div>
                <div>
                    <label for="ivartalanitott" class="form-label">Ivartalanított-e?</label>
                    <select name="ivartalanitott" id="ivartalanitott">
                        <option value="igen">Igen</option>
                        <option value="nem">Nem</option>
                    </select>
                </div>
                <div class="d-grid gap-1">
                    <button type="submit" class="btn btn-success">Felvétel</button>
                </div>
            </div>
        </div>
       
        
    </form>
    
</body>
</html>
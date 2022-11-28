<?php
$pswd_lgt = $_GET["pswd"] ?? "";
include __DIR__ . "/partials/functions.php";

if ($pswd_lgt === "") {
    $casual_pswd = "";
} else {
    $casual_pswd = randomPassword($pswd_lgt);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CDN BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Pass Generator PHP</title>
</head>

<body>
    <section>
        <form action="index.php" method="GET">
            <label for="password"></label>
            <p>Inserisci di quanti caratteri vuoi che sia composta la tua password</p>
            <input type="text" name="pswd" id="password">
            <button type="submit">Invia</button>
            <button type="reset">Reset</button>
            <h4><?php echo $casual_pswd; ?></h4>
        </form>
    </section>
</body>

</html>
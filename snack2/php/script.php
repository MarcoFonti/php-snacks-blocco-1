<?php


/* RECUPERO VALORI INSERITI DALL'UTENTE */
$name = $_GET['name'] ?? '';
$email = $_GET['email'] ?? '';
$age = $_GET['age'] ?? '';


/* CONDIZIONE DI VALIDAZIONE DI ACCESSO */
if (strlen($name) <= 3  || (!str_contains($email, '@')) || (!str_contains($email, '.')) || (!is_numeric($age))) {
    $color = 'text-red';
    $message = "Accesso negato!";
} else {
    $color = 'text-green';
    $message = "Accesso riuscito!";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SNACK2</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div>
        <!-- STAMPO IL MESSAGGIO -->
        <h1 class="<?=$color?>"> <?= $message?></h1>
    </div>
</body>

</html>
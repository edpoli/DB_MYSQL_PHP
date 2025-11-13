<?php

require 'db.php';

//recupero ID
$id = $_GET ['id'];

    //query
    $sqlDelete = "DELETE FROM contatti WHERE id = $id";
    //eseguo la query
    mysqli_query($conn, $sqlDelete);

    //rendirizzamento utente alla index post inserimento
    header("Location: index.php");


?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatto eliminato</title>
    <link rel="stylesheet" href="style.css?v<?= time() ?>">
</head>
<body>


    <div class="container">

        <h1>Contatto eliminato</h1>
            <a href="index.php" class="button">Torna alla lista</a>
            
    </div>


    
</body>
</html>



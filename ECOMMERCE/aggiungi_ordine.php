<?php

require 'db.php';

//se il form è stato inviato tramite il metodo POST

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $prodotto = $_POST['prodotto'];
    $quantita = $_POST['quantità'];
    $dataOrdine = $_POST['data_ordine'];
    $identificativo =$_POST['identificativo'];

    //query
    $sqlOrdine = "INSERT INTO ordini ( prodotto, quantita, data_di_ordine, contatto) VALUES('$prodotto','$quantita','$dataOrdine', '$identificativo')";
    // controllare perché dà errore

    //eseguo la query
    mysqli_query($conn, $sqlOrdine);

    //rendirizzamento utente alla index post inserimento
    header("Location: ordini.php");

}
?>



<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aggiungi Ordine</title>
    <link rel="stylesheet" href="style.css?v<?= time() ?>">
</head>
<body>


    <div class="container">

        <h1>Aggiungi ordine</h1>

        <form action="" method="POST">


            Prodotto : <input name="prodotto" type="text" required>

            Quantità : <input name="quantità" type="number" required>

            Data dell'ordine : <input name="data_ordine" type="text" required>

            identificativo: <input name='identificativo' type="number" required>

            <button type="submit">Salva</button>


        </form>
        
            <a href="ordini.php" class="button">Torna agli ordini</a>
            
    </div>


    
</body>
</html>
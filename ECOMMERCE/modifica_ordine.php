<?php

    require 'db.php';


    $id = $_GET['id']; // recupero l id dell a risorsa da modificare

    $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM ordini WHERE id=$id"));



    //DATI DAL FORM

    if ($_SERVER["REQUEST_METHOD"] == "POST"){


        //RECUPERO DEGLI INPUT DEL FORM DI MODIFICA
        $prodotto = $_POST['prodotto'];
        $quantita = $_POST['quantità'];
        $data_di_ordine = $_POST['data_di_ordine'];
    
        //query
        mysqli_query($conn, "UPDATE ordini SET prodotto='$prodotto', quantita='$quantita', data_di_ordine='$data_di_ordine' WHERE id=$id");


        //reindirizzo una volta modificato
        header("Location: ordini.php");



    }




?>











<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifica contatto</title>
    <link rel="stylesheet" href="style.css?v<?= time() ?>">
</head>
<body>
    
    <div class="container">

            <h1>Modifica Ordine</h1>

            <form action="" method="POST">

                Prodotto : <input name="prodotto" type="text"  value="<?= $row['prodotto']    ?>"     required>

                Quantità : <input name="quantita" type="text" value="<?= $row['quantita']    ?>" required>

                Data dell'ordine : <input name="data_di_ordine" type="text" value="<?= $row['data_di_ordine']    ?>" required>


                <button type="submit">Aggiorna</button>



            </form>

            <a href="ordini.php" class="button">Torna agli ordini</a>

    </div>




</body>
</html>
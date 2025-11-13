<?php
    //importo il file db
    require 'db.php';


    $contatto_id = $_GET['id']; // recupero l id del contatto

    $contatto = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM contatti WHERE id=$contatto_id"));


    //salvo in una variabile $ordini i risultati della query
    $ordini = mysqli_query($conn, "SELECT * FROM ordini WHERE contatto= $contatto_id"); // query per prendermi tutta la tabella ordini
?>




<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordini per contatto</title>
    <link rel="stylesheet" href="style.css?v<?= time() ?>">
</head>
<body>


    <div class="container">

        <h2>Ordini di <?= $contatto['nome'] ?> </h2>

        <a href="aggiungi_ordine.php?id= <?= $contatto_id ?>" class="button">Nuovo Ordine</a>

        <table>

            <tr>
                <th>Prodotto</th>
                <th>Quantità</th>
                <th>Data</th>
            </tr>

            <?php  while ($row = mysqli_fetch_assoc($ordini)) :  ?>

            <tr>

                <td><?= $row['prodotto'] ?></td>
                <td><?= $row['quantita'] ?></td>
                <td><?= $row['data_di_ordine'] ?></td>

            </tr>



             <?php  endwhile;   ?>

        </table>
        
        <a href="index.php" class="button">Torna ai contatti</a>
        

    </div>


    
</body>
</html>
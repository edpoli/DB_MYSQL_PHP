<?php
    //importo il file db
    require 'db.php';

    //salvo in una variabile $result, i risultati della query
    $resultOrdini = mysqli_query($conn, "SELECT * FROM ordini"); // query per prendermi tutta la tabella ordini
?>


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rubrica ordini</title>
    <link rel="stylesheet" href="style.css?v<?= time() ?>">
</head>
<body>

    <div class="container_ordini">

        <h1>Rubrica ordini</h1>
        <a href="aggiungi_ordine.php" class="button">Aggiungi ordine</a>


        <table>

            <thead>
                <tr>
                    <th>
                        Prodotto : 
                    </th>
                     <th>
                        Quantità : 
                    </th>
                    <th>
                        Data dell'ordine : 
                    </th>
                    <th>
                        Actions : 
                    </th>

                    
                    
                </tr>
            </thead>




            <tbody>
                <!--Ciclo WHILE FINTANTO CHE HO RESULT, MOSTRAMELI IN ROW DEDICATE--->
                <?php  while($row = mysqli_fetch_assoc($resultOrdini)) :     ?>
                    <tr>
                        <td>
                        <!--HTMLSPECIALCHARS aggiunge alla pagina html parti di codice-->
                            <?= htmlspecialchars($row['prodotto']) ?> <!--mostra prodotto-->
                        </td>
                        <td>
                            <?= htmlspecialchars($row['quantita']) ?> <!--mostra quantità-->
                        </td>
                        <td>
                            <?= htmlspecialchars($row['data_di_ordine']) ?> <!--mostra data ordine-->
                        </td>

                         <td>
                            <?= htmlspecialchars($row['contatto']) ?> <!--mostra contatto_id-->
                        </td>

                        <td class="actions">

                            <a href="modifica_ordine.php">🖊️</a>
                            <a href="elimina_ordine.php">🗑️</a>
                            <a href="contatti.php"> Contatti</a>

                        </td>                          
                            
                    </tr>

                <?php endwhile; ?>    
            </tbody>
        </table>
    </div>

</body>
</html>
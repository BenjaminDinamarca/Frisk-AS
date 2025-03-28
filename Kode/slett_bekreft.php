<?php

//Koble til databasen
include "connect.php";

if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['kunde_slett']))
    {
    $m_nr = $_POST['m_nr'];
    
    $query = "DELETE FROM medlem WHERE m_nr = :m_nr";
    
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":m_nr",$m_nr);
    $stmt->execute();
    
    }
else
    {
        $stmt = 0;
    }  

?>    
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">
    <title>Mine kunder</title>
</head>
<body>
    <?php include "meny.php";?>

    <header>
        <p>Slett kunder</p>

    </header>

    <main>
        <?php
        if ($stmt)
            {
            echo "<p>Kunden er blitt slettet!</p>";

            }
        else
            {
            echo "<p>Det oppsto en feil. Kunden ble ikke slettet</p>";    
            }    


        ?>
    </main>
    
</body>
</html>    
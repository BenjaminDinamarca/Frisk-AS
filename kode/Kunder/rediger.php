<?php

//Koble til databasen
include "connect.php";

if($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['m_nr']))
    {
    $m_nr = $_GET['m_nr'];
    
    $query = "SELECT m_nr, fornavn, etternavn, adresse, postnr, poststed, fodt, telefon, mail, betalt FROM medlem WHERE m_nr = :m_nr";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":m_nr",$m_nr);
    $stmt ->execute();
    $medlem = $stmt->fetch(PDO::FETCH_ASSOC);        
   
    
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
    <title>Rediger kunden</title>
</head>
<body>
    <?php include "meny.php";?>

    <header>
        <p>Rediger bil</p>
    </header>
    <main>
        <form action="rediger_bekreft.php" method="post">
        <label for="m_nr">Medlem nummer: </label><br><br>
            <input type="text" name="m_nr" value="<?php echo $medlem['m_nr']; ?>" readonly required><br><br>

            <label for="fornavn">Fornavn: </label><br><br>
            <input type="text" name="fornavn" value="<?php echo $medlem['fornavn']; ?>"  required><br><br>

            <label for="etternavn">Etternavn: </label><br><br>
            <input type="text" name="etternavn" value="<?php echo $medlem['etternavn']; ?>"  required><br><br>

            <label for="adresse">Adresse: </label><br><br>
            <input type="text" name="adresse" value="<?php echo $medlem['adresse']; ?>"  required><br><br>

            <label for="postnr">Post nummer: </label><br><br>
            <input type="text" name="postnr" value="<?php echo $medlem['postnr']; ?>"  required><br><br>

            <label for="poststed">Poststed: </label><br><br>
            <input type="text" name="poststed" value="<?php echo $medlem['poststed']; ?>"  required><br><br>

            <label for="fodt">Fødselsdato: </label><br><br>
            <input type="text" name="fodt" value="<?php echo $medlem['fodt']; ?>"  required><br><br>

            <label for="telefon">Telefonnummer: </label><br><br>
            <input type="text" name="telefon" value="<?php echo $medlem['telefon']; ?>"  required><br><br>

            <label for="mail">Mail: </label><br><br>
            <input type="text" name="mail" value="<?php echo $medlem['mail']; ?>"  required><br><br>

            <label for="betalt">Betalt: </label><br><br>
            <input type="text" name="betalt" value="<?php echo $medlem['betalt']; ?>"  required><br><br>

            <input type="submit" name="rediger_medlem" value="Lagre endringer">
        </form>
    </main>
  
</body>
</html>
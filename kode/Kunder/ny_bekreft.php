<?php
//Koble til databasen
include "connect.php";

if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['ny_kunde']))
    {
        
    //$m_nr = $_POST['m_nr'];
    $fornavn = $_POST['fornavn'];
    $etternavn = $_POST['etternavn'];
    $adresse = $_POST['adresse'];
    $postnr = $_POST['postnr'];
    $poststed = $_POST['poststed'];
    $fodt = $_POST['fodt'];
    $telefon = $_POST['telefon'];
    $mail = $_POST['mail'];
    $betalt = $_POST['betalt'];

    $query = "INSERT INTO medlem (fornavn,etternavn,adresse,postnr,poststed,fodt,telefon,mail,betalt) VALUE
    (:fornavn,:etternavn,:adresse,:postnr,:poststed,:fodt,:telefon,:mail,:betalt)";
    $stmt = $pdo->prepare($query);
    //$stmt->bindParam(":m_nr",$m_nr);
    $stmt->bindParam(":fornavn",$fornavn);
    $stmt->bindParam(":etternavn",$etternavn);
    $stmt->bindParam(":adresse",$adresse);
    $stmt->bindParam(":postnr",$postnr);
    $stmt->bindParam(":poststed",$poststed);
    $stmt->bindParam(":fodt",$fodt);
    $stmt->bindParam(":telefon",$telefon);
    $stmt->bindParam(":mail",$mail);
    $stmt->bindParam(":betalt",$betalt);
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
    <title>Ny medlem</title>
</head>
<body>
<?php include "meny.php";?>
    <header>
        <p>Registrer ny kunde</p>

    </header>

    <main>
        <?php
        if ($stmt)
            {
            echo "<p>Medlemet er blitt lagt til!</p>";

            }
        else
            {
            echo "<p>Det oppsto en feil. Medlemet ble ikke lagt til</p>";    
            }    


        ?>
    </main>
    
</body>
</html>    

<?php 
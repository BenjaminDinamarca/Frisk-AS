<?php	
// Kobler til databasen
include "connect.php";

//Prosedyre for å lese
$query = "SELECT m_nr, fornavn, etternavn, adresse, postnr, poststed, fodt, telefon, mail, betalt FROM medlem";
$stmt = $pdo->prepare($query);
$stmt ->execute();
$medlemer = $stmt->fetchAll(PDO::FETCH_ASSOC);

//var_dump($biler);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="./CSS/style.css">

    <title>Alle kunder</title>
</head>
<body>
<?php include "meny.php";?>
    <header>
        <p>VIS ALLE KUNDER</p>
    </header>

    <main>
        <table>
                <thead>
                    <tr>
                        <th>m_nr</th>
                        <th>fornavn</th>
                        <th>etternavn</th>
                        <th>adresse</th>
                        <th>postnr</th>
                        <th>poststed</th>
                        <th>fodt</th>
                        <th>telefon</th>
                        <th>mail</th>
                        <th>betalt</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach($medlemer as $medlem) {    ?>
                        <tr>
                            <td><?php echo $medlem['m_nr']; ?></td>
                            <td><?php echo $medlem['fornavn']; ?></td>
                            <td><?php echo $medlem['etternavn']; ?></td>
                            <td><?php echo $medlem['adresse']; ?></td>
                            <td><?php echo $medlem['postnr']; ?></td>
                            <td><?php echo $medlem['poststed']; ?></td>
                            <td><?php echo $medlem['fodt']; ?></td>
                            <td><?php echo $medlem['telefon']; ?></td>
                            <td><?php echo $medlem['mail']; ?></td>
                            <td><?php echo $medlem['betalt']; ?></td>
                            <td><a href="rediger.php?m_nr=<?php echo $medlem['m_nr']; ?>">Rediger</a></td>
                            <td><a id="slett" href="slett.php?m_nr=<?php echo $medlem['m_nr']; ?>">Slett</a></td>
                        </tr>
                        <?php } ?>


                </tbody>



        </table>

    </main>
    
</body>
</html>
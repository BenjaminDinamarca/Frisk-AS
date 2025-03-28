<?php	
// Kobler til databasen
include "connect.php";

//Prosedyre for å lese
$query = "SELECT kontakt_id, kunde_id, fornavn, etternavn, stilling, telefon, epost FROM kunder";
$stmt = $pdo->prepare($query);
$stmt ->execute();
$kunder = $stmt->fetchAll(PDO::FETCH_ASSOC);

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
                        <th>kontakt_id</th>
                        <th>kunde_id</th>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">
    <title>Registrer ny kunde</title>
</head>
<body>
<?php include "meny.php";?>

    <header>
        <p>Registrer en ny kunde</p>
    </header>
    <main>
        <form action="ny_bekreft.php" method="post">
            
            <input type="text" name="m_nr" hidden><br><br>

            <label for="fornavn">Fornavn: </label><br><br>
            <input type="text" name="fornavn" required><br><br>

            <label for="etternavn">Etternavn:</label><br><br>
            <input type="text" name="etternavn" required><br><br>

            <label for="adresse">Adresse: </label><br><br>
            <input type="text" name="adresse" required><br><br>

            <label for="postnr">Postnr: </label><br><br>
            <input type="text" name="postnr" required><br><br>

            <label for="poststed">Poststed: </label><br><br>
            <input type="text" name="poststed" required><br><br>
            
            <label for="fodt">Fødselsdato: </label><br><br>
            <input type="text" name="fodt" required><br><br>

            <label for="telefon">Telefonnummer: </label><br><br>
            <input type="text" name="telefon" required><br><br>

            <label for="mail">Mail: </label><br><br>
            <input type="text" name="mail" required><br><br>

            <label for="betalt">Betalt: </label><br><br>
            <input type="text" name="betalt" required><br><br>

            <input type="submit" name="ny_medlem" value="Legg til medlemet!">
        </form>
    </main>
  
</body>
</html>
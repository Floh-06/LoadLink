<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_hasen.css">
</head>
<body>
<?php
$sqlab = "select * from tabellenblatt";

// Datenbankverbindung herstellen
$mysqli =mysqli_connect("localhost", "127.0.0.1", "JA", "hasengehege"); 
if (!$mysqli) {
    die("Verbindung fehlgeschlagen: " . mysqli_connect_error());
}

$res = mysqli_query($mysqli, $sqlab);

if ($res) {
    while ($row = mysqli_fetch_assoc($res)) {
        echo "ID: " . htmlspecialchars($row['id']) . "<br>";
        echo "Name: " . htmlspecialchars($row['name']) . "<br>";
        echo "Futter: " . htmlspecialchars($row['futter']) . "<br>";
        echo "Alter: " . htmlspecialchars($row['alter']) . "<br>";
        echo "<hr>";
    }
    mysqli_free_result($res);
} else {
    echo "Fehler bei der Abfrage: " . mysqli_error($mysqli);
}

//Datenbankabfrage mit SQLi  
$res = mysqli_query($mysqli)
// Daten aus Formular holen
{
$name = $_POST['hase_name'];
} 
echo "$name";// HIer sollten jetzt die Namen und die anderen Infos zu jedem Hasen ausgegeben werden
$sql=  //ausgabe aller hasen die klee fressen


// Verbindung schließen
$mysqli->close();, $sqlab); 
$num = mysqli_num_rows($res);

?>    
</body>
</html>
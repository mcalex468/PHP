<?php
// Connectar-se a la base de dades
$db = new SQLite3('diariLocal.db');

$data = $_POST['data'];
echo "<p>Buscant noticies amb la Data: $data</p>";

// Aquí la consulta NO és segura (SQL Injection)
$stmt = $db->prepare('SELECT * FROM noticies WHERE not_data = :data');
$stmt->bindValue(':data', $data, SQLITE3_TEXT);
$resultats = $stmt->execute();

while ($fila = $resultats->fetchArray(SQLITE3_ASSOC)) {
    echo "ID: ". $fila['not_id'] ." - Titular: ". $fila['not_titular'] ." - Cos: ". $fila['not_cos'] ." - Data: ". $fila['not_data'] ."<br>";
}

$db->close();
?>



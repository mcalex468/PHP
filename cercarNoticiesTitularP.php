<?php
// Connectar-se a la base de dades
$db = new SQLite3('diariLocal.db');

$titular = $_POST['titular'];
if ($titular) {
    echo "<p>Buscant notícies que contenen: <strong>" .($titular) . "</strong></p>";

    // Consulta segura con SQL preparado
    $stmt = $db->prepare('SELECT * FROM noticies WHERE (not_titular) LIKE :titular');
    $stmt->bindValue(':titular', "%$titular%" , SQLITE3_TEXT);
    $resultats = $stmt->execute();
}
while ($fila = $resultats->fetchArray(SQLITE3_ASSOC)) {
    echo "ID: ". $fila['not_id'] ." - Titular: ". $fila['not_titular'] ." - Cos: ". $fila['not_cos'] ." - Data: ". $fila['not_data'] ."<br>";
}

$db->close();
?>



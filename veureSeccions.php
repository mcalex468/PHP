<?php
include('databaseConnection.php');

// Query que te retorna las secciones que hay en la tabla noticias 
$query = $db ->query("SELECT not_seccio FROM noticies GROUP BY not_seccio");


while ($fila = $query -> fetchArray(SQLITE3_ASSOC)) {
    echo ('Secció: '.$fila['not_seccio']. '<br><br>');
}

?>
<?php
include('databaseConnection.php');


//Query para sacar el numero total de noticias en el mes de febrero.
$query = $db->querySingle("SELECT count(*) FROM noticies where strftime('%m',not_data)='02'");

echo("El numero total de noticies de febrer és: ". $query);


?>
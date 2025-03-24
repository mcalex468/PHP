<?php

include('databaseConnection.php');

$query = $db->query("SELECT * FROM noticies WHERE LOWER(not_seccio) = 'cultura' order by not_data");


include('iMostraInfo.php');

?>
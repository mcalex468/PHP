<?php

include("databaseConnection.php");

// Extreure informacio

$query = $db->query("SELECT * FROM noticies");


include('iMostraInfo.php');

?>
<?php
include('databaseConnection.php');


// strftime sirve para poder pillar la parte de la fecha que te interesa, es como el to_char de postgresql.
$query = $db->query("SELECT * FROM noticies where strftime('%m',not_data)='02' order by not_data");


include('iMostraInfo.php');

?>
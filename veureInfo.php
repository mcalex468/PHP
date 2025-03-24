<?php

while ($fila = $query -> fetchArray(SQLITE3_ASSOC)) {
    echo ('Id: '. $fila['not_id']. ', Titular: '.$fila['not_titular']. ', Cos:'.$fila['not_cos'].', Data: '.$fila['not_data'].', Secció: '.$fila['not_seccio']. '<br><br>');
}

?>


<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'crud_demonstra');


/* tenta conectar com o bd mysql */

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// checa a conexão

if ($link === false) {
  die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>

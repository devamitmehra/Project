<?php
<<<<<<< HEAD
/*test too; f
=======
/*test too; file
>>>>>>> 982751352073b4d075db7b947e81e423d071ab69
*/
ob_start();
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', '2my4edge');
$connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die(mysql_error());
$database = mysql_select_db(DB_DATABASE) or die(mysql_error());
?>

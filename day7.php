# die or exit


<?php
@mysql_connect('localhost', 'root', '') || die('could not connect to database');

echo "connected";
?>
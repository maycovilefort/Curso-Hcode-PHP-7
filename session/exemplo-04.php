<?php

//session_id('tlt84jk8khdiga2intv3325c5b');

require_once("config.php");

session_regenerate_id();

echo session_id();

echo "<br/>";

var_dump($_SESSION);

?>
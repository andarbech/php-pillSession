<?php
require("./Layout/header.php");
phpinfo(); 
echo "<div><h1>Configuration file</h1></div>";
ini_get("INFO_CONFIGURATION");
?>
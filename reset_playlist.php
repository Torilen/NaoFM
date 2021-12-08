<?php
$file = 'playlist.txt';
$fp = fopen($file, 'w') or die("Unable to open file!");//opens file in append mode  
fwrite($fp, "");  
fclose($fp);
echo "1";  
?>
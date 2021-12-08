<?php
$musique = $_POST['musique'];
$file = 'playlist.txt';
// Ajoute une personne
$t = exec("ffmpeg -i /var/www/html/musique/".$musique." 2>&1 | grep 'Duration' | cut -d ' ' -f 4 | sed s/,//");
$t = explode(".", $t)[0];
$t = explode(":", $t);
if($t[0] == "00"){
	array_shift($t);
}
$t = implode(":", $t);
$artist = exec("ffmpeg -i /var/www/html/musique/".$musique." 2>&1 | grep 'artist' | cut -d ':' -f 2");
$current = $musique."|".$t."|".$artist."\n";
$fp = fopen($file, 'a') or die("Unable to open file!");//opens file in append mode  
fwrite($fp, $current);  
fclose($fp);
echo "1";  
?>
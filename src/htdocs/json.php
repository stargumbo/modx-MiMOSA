<?php
$thefile = "new.json"; /* Our filename as defined earlier */
$towrite = $_POST["puzzle"]; /* What we'll write to the file */
echo $towrite;
$openedfile = fopen($thefile, "w");
$encoded = json_encode($towrite);
fwrite($openedfile, $encoded);
fclose($openedfile);
return "<br> <br>".$towrite;

?>

<?php
$file = fopen($_FILES['archivo']['tmp_name'], "r") or exit("Unable to open file!");
while(!feof($file))
{
   echo fgets($file);
}
fclose($file);
?>
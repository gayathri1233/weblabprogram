<?php
print"<h1>REFRESH PAGE</h1>";
$name="new.txt";

$myfile=fopen($name,"r") or die("unable");
$txt1=fgets($myfile);
$txt1=intval($txt1);
fclose($myfile);
$txt1++;
echo "result read=",$txt1;
$myfile=fopen($name,"w") or die("unable");
fwrite($myfile,$txt1);
fclose($myfile);
?>
<?php
$MyFile=fopen("location.txt","W");
$txt="latitude:  ". $_Get["latitude"] ."\nlongitude " . $_Get["longitude"];
fwrite("$MyFile" ,"$txt");
fclose($MyFile);

?>
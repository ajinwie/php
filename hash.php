<?php
$str = "12345";
echo "The string: ".$str."<br>";
echo "TRUE - Raw 16 character binary format: ".md5($str, TRUE)."<br>";
echo "FALSE - 32 character hex number: ".md5($str)."<br>";
?>
<?php 
echo $_GET["your-text"];
echo $_GET["your-badword"];

$your_text= $_GET["your-text"];
$bad_word= $_GET["your-badword"];

$replaced= str_replace($bad_word, "***", $your_text)


?>
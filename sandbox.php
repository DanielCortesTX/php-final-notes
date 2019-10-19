<?php 

$file = 'quotes.txt';

// opening a file for reading and store the reference
// $handle = fopen($file, 'r');

// read the file
// echo fread($handle, filesize($file));

// read first 112 bytes of file
// echo fread($handle, 112);

//read a single line
// echo fgets($handle);
// echo fgets($handle);

// read a single character
// echo fgetc($handle);
// echo fgetc($handle);

// writing to a file , a+ moves pointer to end
$handle = fopen($file, 'a+');
fwrite($handle, "\nEverything Popular is wrong")

fclose($handle);

// unlink($file);

?>
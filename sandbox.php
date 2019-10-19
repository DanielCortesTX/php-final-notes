<?php 

// $quotes = readfile('readme.txt');
// echo $quotes;

$file = 'readme.txt';

if(file_exists($file)){
  // read file
  // echo readfile($file);

  // //coph file
  // copy($file, 'quotes.txt');

  // // absolute path
  // echo realpath($file);

  // // file size 
  // echo filesize($file);

  // // rename file
  // rename($file, 'test.txt');
} else {
  echo 'file does not exist';
}

// make directory
mkdir('quotes');

?>
<?php
$path = '/dir1/myfile.php';
$file = 'file1.txt';

// Return filename
// echo basename($path);

// Return filename without extension
// echo basename($path, '.php');

// Return directory name from path
// echo dirname($path);

// Check if file exists
// this returns true if is an folder
// echo file_exists($file);

// Get abs path
// echo realpath($file);

// Check to see if file
// echo is_file($file);

// Check if writeable
// echo is_writable($file);

// Check if its readable
// echo is_readable($file);

// Get file size
// echo filesize($file);

// Create a directory
// mkdir('testing');

// Delete directory
// Remove folder if empty
// rmdir('testing');

// Copy file
// echo copy('file1.txt', 'file2.txt');

// Rename file
// rename('file2.txt', 'myfile.txt');

// Delete file
// unlink('myfile.txt');

// Write from file to string
// echo file_get_contents($file);

// Write string to file
// this will rewrite the file, not append
// echo file_put_contents($file, 'Goodbay');

// Actual way to append to file
// $current = file_get_contents($file);
// $current .= 'Goodbay';
// file_put_contents($file, $current);

// Open file for reading
// $handle = fopen($file, 'r');
// $data = fread($handle, filesize($file));
// echo $data;
// fclose($handle);

// Open file for writing
$handle = fopen('file2.txt', 'w');
$text = 'John doe';
fwrite($handle, $text);
fclose($handle);

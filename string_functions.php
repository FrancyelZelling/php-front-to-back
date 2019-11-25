<?php 
  # substr()
  # Returns a portion of a string

  // $output = substr('Hello', 1, 3);
  // $output = substr('Hello', -2);
  // echo $output;

  # strlen()
  # Returns the lenght of a string

  // $output = strlen('Hello World');
  // echo $output;

  # strpos()
  # Finds the position of the first occurrence of a sub string

  // $output = strpos("Hello World", 'o');
  // echo $output;

  # strrpos()
  # Finds the position of the last occurrence of a sub string

  // $output = strrpos("Hello World", 'o');
  // echo $output;

  # trim()
  # Strips whitespace
  // $text = "Hello World                            ";
  // var_dump($text);

  // $trimmed = trim($text);
  // var_dump($trimmed);

  # strtoupper()
  # Makes everything uppercase

  // $output = strtoupper("Hello World");
  // echo $output;
  
  # strtolower()
  # Makes everything lowercase

  // $output = strtolower("Hello World");
  // echo $output;

  # ucwords()
  # Captalize every word
  // $output = ucwords("hello world");

  # str_replace()
  # Replace all ocurrences of a search string with a replacement
  // $text = "Hello World";
  // $output = str_replace("World", "Everyone", $text);

  # is_string()
  # Check if string
  $val = "Hello";
  $output = is_string($val);

  echo $output;
?>

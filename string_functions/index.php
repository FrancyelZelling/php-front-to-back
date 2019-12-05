<?php 
    # substr()
    # Returns a portion of a string

    // (  string,  starts,  end  )
    // You can also start from end using negative number
    // Ex: $output = substr('Hello', -2);
    // $output = substr('Hello', 1, 3);
    //

    // ------------------------------------------------------
    # strlen()
    # Returns the length of a string

    // $output = strlen('Hello World');
    //

    // ------------------------------------------------------
    # strpos()
    # Finds the position of the first occurence of a sub string
    
    // $output = strpos('Hello World', 'o');
    //

    // ------------------------------------------------------
    # strrpos()
    # Finds the position of the last occurence of a sub string
    
    // $output = strrpos('Hello World', 'o');
    //

    // ------------------------------------------------------
    # trim()
    # Strips whitespace
    
    // $text = 'Hello World                                                         ';
    // var_dump($text);

    // $trimmed = trim($text);
    // var_dump($trimmed);

    // ------------------------------------------------------
    # strtoupper()
    # Makes everything uppercase

    // $output = strtoupper('Hello World');
    //

    // ------------------------------------------------------
    # strtolowe()
    # Makes everything uppercase

    // $output = strtolower4('Hello World');
    //

    // ------------------------------------------------------
    # ucwords()
    # Capitalize every word

    // $output = ucwords('hello world');
    //

    //-------------------------------------------------------
    # str_replace()
    # Replace all occurences of a search string with a replacement

    // $text = 'Hello World';
    #  (  what to search,  replace to,  src  )
    // $output = str_replace('World', 'Everyone', $text);
    // 

    //-------------------------------------------------------
    # is_string()
    # Check if its a string
    # if true the output is 1
    # if false there is no output

    // $val = 'Hello';
    // $output = is_string($val);
    
    //-------------------------------------------------------
    # gzcompress()
    # Compress a string

    $string = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis deleniti aliquid, nam sequi distinctio minima saepe hic libero earum eius quasi vero provident cum incidunt debitis explicabo nesciunt temporibus quisquam!';

    // Compressed
    $output = gzcompress($string);


    // Decompress
    $compressed = $output;
    $output = gzuncompress($compressed);

    echo $output;
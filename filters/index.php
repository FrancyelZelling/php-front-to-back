<?php

    // Check for posted data
    // if the method is get, use INPUT_GET instead
    // filter_has_var needs a var as 1º param, and the name of the field we need
    // to check as string on 2º param
    // if(filter_has_var(INPUT_POST, 'data')) {
    //     echo 'Data Found';
    // } else {
    //     echo 'No Data';
    // }

//    if(filter_has_var(INPUT_POST, 'data')) {
//        $email = $_POST['data'];
//
//        // Remove illegal chars
//        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
//        echo $email.'<br>';
//
//        if(filter_var($email,  FILTER_VALIDATE_EMAIL)){
//            echo 'Email is valid';
//        } else {
//            echo 'Email is not valid';
//        }
//    }

    // Tipes of validation
    #FILTER_VALIDATE_BOOLEAN
    #FILTER_VALIDATE_EMAIL
    #FILTER_VALIDATE_FLOAT
    #FILTER_VALIDATE_INT
    #FILTER_VALIDATE_IP
    #FILTER_VALIDATE_REGEXP
    #FILTER_VALIDATE_URL

    // Tipes of sanitize(remove any improper chars)
    #FILTER_SANITIZE_EMAIL
    #FILTER_SANITIZE_ENCODED
    #FILTER_SANITIZE_NUMBER_FLOAT
    #FILTER_SANITIZE_NUMBER_INT
    #FILTER_SANITIZE_SPECIAL_CHARS
    #FILTER_SANITIZE_STRING
    #FILTER_SANITIZE_URL

//    $var = '23';
//
//    if(filter_var($var, FILTER_VALIDATE_INT)) {
//        echo $var . ' is a number';
//    } else {
//        echo $var . ' is NOT a number';
//    }

//    $var = '<script> alert(1) </script>';
//    echo $var;
//    echo filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS);
//    var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT));

//    $filters = array(
//            'data' => FILTER_VALIDATE_EMAIL,
//            'data2' => array(
//                    'filter' => FILTER_VALIDATE_INT,
//                    'options'=> array(
//                            'min_range' =>1,
//                            'max_range' =>100
//                    )
//            )
//    );
//
//    print_r(filter_input_array(INPUT_POST, $filters));

    //
    $arr = array(
            'name' => 'francyel zelling',
            'email' => 'zellingf@gmail.com',
            'age' => '123'
    );

    $filters = array(
            'name' => [
                    'filter' => FILTER_CALLBACK,
                    'options' => 'ucwords'
            ],
            'age' => [
                    'filter' => FILTER_VALIDATE_INT,
                    'options' => [
                            'min_range'=> 1,
                            'max_range' => 100
                    ]
            ],
            'email' => FILTER_VALIDATE_EMAIL
    );

    print_r(filter_var_array($arr, $filters));
?>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="data">
    <input type="text" name="data2">
    <button type="submit">Submit</button>
</form>


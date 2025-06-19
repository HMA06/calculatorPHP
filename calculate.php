<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Calculation Result </title>
</head>

<body>

    <?php

    $number1 = $_POST['number1'];
    $operation = $_POST['operation'];
    $number2 = $_POST['number2'];
    
    $result = 0;


    switch ($operation) {
        case "+":
            $result = $number1 + $number2;
            break;

        case "-":
            $result = $number1 - $number2;
            break;

        case "*":
            $result = $number1 * $number2;
            break;

        case "%":
            
            $result = $number1 % $number2;
            break;

        case "**":
            $result = $number1 ** $number2;
            break;

        case "/":
            if ($number2 != 0) {
                $result = $number1 / $number2;
            } 
            
            else {
                echo "<h1>Error : Division by zero is not allowed !!!! </h1>";
                exit;
            }
            break;


        default:
            echo "Invailed Request";
            exit;

    }

        echo "<i><h2>The Result Of ( $number1 $operation $number2 ) is :  $result <i/></h2>";
        if ($result % 2 == 0) {
        echo "<h2>The result is ( even ). </h2>";
        } 

        else {
        echo "<h2> The result is ( odd ).</h2>";
}


?>
    <a href="form.php"> Back To Calculate << </a>

</body>
</html>






















        
    <!--
 if ($operation > 0 || $number2 > 0 ) {


    // if ($operation == "+") {
    //     $result = $number1 + $number2;
    // }
    //  else if ($operation == "-") {
    //     $result = $number1 - $number2;
    // }
    //  else if ($operation == "*") {
    //     $result = $number2 * $number1;
    // }
    //  else if ($operation == "/") {
    //     if ($number2 != 0) {
    //         $result = $number1 / $number2;
    //     }
    //     else {
    //         echo "<h1>Error : Division by zero is not allowed !!!! </h1>";
    //         exit;
    //     }
    // }
    // else{
    //     echo "invailed Request";
    // }
    // echo "<i><h2>The Result Of ( $number1 $operation $number2 ) is :  $result <i/></h2>";
    
    //     }
    //     else{
    //         echo "<h1> Must be greater than zero !! </h1>";
    //     }
    //  
    -->
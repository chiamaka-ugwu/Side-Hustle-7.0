<?php
    include 'header.php';

    if ($connect){
        echo 'Connected <br>';
    } else {
        echo 'Not Connected <br>';
    }


    function multiply($num1, $num2, $num3 = 5){
        $answer = $num1 * $num2 * $num3;
        return $answer;
    }
    echo multiply(2,3);

?>